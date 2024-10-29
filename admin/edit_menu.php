 <?php
    /**
    * Author: Pixel to Web
    * Author URI: http://www.pixeltoweb.com
    */
?>
<?php
    //admin menu item list
    global $wpdb;
    $adminmenuItem = $wpdb->get_results($wpdb->prepare("SELECT * FROM ".$table_admin_menu." where id = %d",$_REQUEST['id']));

    if($_REQUEST['action']=='add'){
        $title ='Add New';
        $label ='Add';
    }else{
        $title ='Edit';
        $label ='Update';
    }
    $fieldtypeList = $wpdb->get_results("SELECT * FROM ".$table_admin_menu);
?> 
<script type="text/javascript">
    // This function use ti hide position and icon field in add/edit form
    jQuery(function() {
        jQuery('#sub_menu').change(function(){
            if (jQuery('#sub_menu').val() != "" ){
                jQuery(".posLab ").hide();
                jQuery(".posVal ").hide();
                jQuery(".iconLab ").hide();
                jQuery(".iconVal ").hide();
            }else{
                jQuery(".posLab ").show();
                jQuery(".posVal ").show();
                jQuery(".iconLab ").show();
                jQuery(".iconVal ").show();
            }
        });
        if (jQuery('#sub_menu').val() != "" ){
            jQuery(".posLab ").hide();
            jQuery(".posVal ").hide();
            jQuery(".iconLab ").hide();
            jQuery(".iconVal ").hide();
        }else{
            jQuery(".posLab ").show();
            jQuery(".posVal ").show();
            jQuery(".iconLab ").show();
            jQuery(".iconVal ").show();
        }
    });

</script>
<?php 
    $row            = @$wpdb->get_results($wpdb->prepare("SELECT position, menu_slug FROM ".$table_admin_menu));
    $exitsValue     = array();
    $exitsmenu_slug = array();
    if(count($row)>0) {
        if($row[0]->position != $adminmenuItem[0]->position){
            $exitsValue[] = $row[0]->position;
        }
        if($row[0]->menu_slug != $adminmenuItem[0]->menu_slug){
            $exitsmenu_slug[] = $row[0]->menu_slug;
        }
    }
    $exitsmenu_slugList = implode($exitsmenu_slug,',');
    $exitsValueList     = implode($exitsValue,',');
?>
<div style="overflow: hidden;" id="wpbody-content" aria-label="Main content" tabindex="0">
<div class="wrap">
    <h2><?php echo $title;?> Menu</h1>
    <form name="post" action="<?php echo home_url().'/wp-admin/admin.php?page=admin-menu-listing' ?>" method="post" id="menupost">
        <input type="hidden" name="id" value="<?php echo $adminmenuItem[0]->id;?>">
        <div id="poststuff">
            <div id="post-body" class="adminMenu-holder columns-2">
                <div id="post-body-content">
                    <label for="adminMenu">Page Title:</label>
                    <div id="pagetitle">
                        <div class="boxclass">
                            <input name="menu_page_title" maxlength="50" value="<?php echo $adminmenuItem[0]->page_title; ?>" id="menu_page_title" type="text" class="textbox requiredbox length">
                            <span class="errormessage"></span>
                        </div>
                    </div>
                    <label for="adminMenu">Menu Title:</label>
                    <div id="menutitle">
                        <div class="boxclass">
                            <input name="menu_title" maxlength="50" value="<?php echo $adminmenuItem[0]->menu_title; ?>" id="menu_title" type="text" class="textbox requiredbox length">
                            <span class="errormessage"></span>
                        </div>
                    </div>
                    <?php  global $submenu, $menu;   ?>
                    <label for="my_meta_box_post_type">Sub Menu Title:  </label><br/>
                    <select   name='sub_menu' id='sub_menu'>
                        <option value="" >Select Option</option>
                        <?php foreach( $menu as $menuSlug ): ?>
                            <?php  if($menuSlug[0] != ""){ ?>
                                <option value="<?php  echo $menuSlug[2]; ?>" <?php if($adminmenuItem[0]->parent_slug==$menuSlug[2]){echo 'selected="selected"';}?>  ><?php  echo 
                                    $menuSlug[0]; ?></option><?php } ?>
                            <?php endforeach; ?>
                    </select><br/>
                    <label for="adminMenu">Capability:</label>
                    <div id="capibility">
                        <select name="capability" class="requiredbox">
                            <?php for($i=0; $i<=10; $i++){
                                ?><option value="<?php echo $i; ?>" <?php if($adminmenuItem[0]->capability==$i){echo 'selected=selected'; } ?> ><?php echo $i; ?></option>
                                <?php
                            }?>
                        </select>
                    </div>
                    <label for="adminMenu">Menu Slug:</label>
                    <div id="menuslug">
                        <div class="boxclass">
                            <input type="hidden" name="exitsslug" id="exitsslug" value="<?php echo $exitsmenu_slugList; ?>">
                            <input readonly name="menu_slug" value="<?php echo $adminmenuItem[0]->menu_slug; ?>" id="menu_slug" type="text" class="textbox requiredbox length slugValue">
                            <span class="errormessage slugMessage"></span>
                        </div>
                    </div>
                    <label for="adminMenu" class="iconLab">Icon Url:</label>
                    <div id="icon" class="iconVal">
                        <div  class="boxclass">
                            <input name="icon_url" value="<?php echo $adminmenuItem[0]->icon_url; ?>" id="icon_url" type="text" class="textbox">
                            <span class="errormessage"></span>
                        </div>
                    </div>
                    <label for="adminMenu" class="posLab">Position:</label>
                    <div class="posVal">
                        <div  class="boxclass">
                            <input type="hidden" name="exitvlaue" id="exitvlaue" value="<?php echo $exitsValueList; ?>">
                            <input oncontextmenu="return false;" name="position" value="<?php echo $adminmenuItem[0]->position; ?>" id="position" type="text" class="textbox numberbox positionValue">
                            <span class="errormessage positionMessage"></span>
                        </div>
                    </div>
                    <label for="adminMenu_field_status">Content:</label><br/>  
                    <?php
                        $content = $adminmenuItem[0]->menu_content;
                        $editor_id = 'mycustomeditor';

                        wp_editor( $content, $editor_id );
                    ?>
                    <label for="adminMenu_field_status">Status:</label><br/>  
                    <select name="status" id="status">
                        <option value="0" <?php if($adminmenuItem[0]->status==0){echo 'selected="selected"';}?>>Available</option>
                        <option value="1" <?php if($adminmenuItem[0]->status==1){echo 'selected="selected"';}?>>Un Available</option>
                    </select><br/>
                </div>
                <div id="postbox-container-1" class="postbox-container">
                    <div id="side-sortables" class="meta-box-sortables ui-sortable">
                        <div id="submitdiv" class="postbox ">
                            <h3 class="hndle"><span>Publish</span></h3>
                            <div class="inside">
                                <div class="submitbox" id="submitpost">
                                    <div id="major-publishing-actions">
                                        <div id="publishing-action">
                                            <span class="spinner"></span>
                                            <input name="original_publish" id="original_publish" value="<?php echo $label;?>" type="hidden">
                                            <input name="menupublish" id="menupublish" class="button button-primary button-large" value="<?php echo $label;?>" accesskey="p" type="button">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br class="clear">
        </div>
    </form>
    <div class="clear"></div>
</div>
<div class="clear"></div>