<div class="top-title">
    <h2>Admin Menu Creator Help</h2>
</div>
<div class="plugins-des">
    <h3 class="plugins-title">Wp Admin Menu Creator</h3>
    <table width="100%">
        <tr>
            <td>
                <b>Contributors:</b> Pixel to Web
            </td>
        </tr>
        <tr>
            <td>
                <p>Wp Admin Menu Creator helps you create menu and submenu on Wordpress Admin Panel
                    with many options like active menu inside custom submenu provided by <a href="http://www.pixeltoweb.com">Pixeltoweb.com</a></p>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
                <h3><b>Description</b></h3>
                <h5>Wp Admin Menu Creator</h5>
                <p>Wp Admin Menu Creator helps you create menu and submenu on Wordpress Admin Panel
                    with many options like active menu inside custom submenu provided by Pixel to Web.com</p>
                <p>Wp Admin Menu Creator is helpful to add Custom Menu and Sub Menu hence no need to create Custom Plugin for Menu and Sub Menu.</p>
                <span><p>If Content for Custom Menu is added from Admin Side then it will display on Menu Detail Screen</p></span>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
                <h3><b>Wp Admin Menu Creator Plugin will help you to Show Menus by Following way</b></h3>
                <ul>
                    <li>Create custom page menu and submenu from Admin Panel from Add New Custom Menu Section.</li>
                    <li>Create New page menu by Adding Menu Page Title of the Wp Admin Menu, 
                        Menu Title, Sub Menu Title, Capability, Menu Slug, Icon URL,
                        Position and Status status as 'Available' OR Not Available.</li>
                    <li>Admin can show page_menu and sub_menu on wp-admin in form of Menu.</li>
                    <li>We can create Sub Menu Under Any Parent Menu eg: Page, Post etc.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
                <h3><b>Installation</b></h3>
                <ul>
                    <li>Upload Wp Admin Menu Plugin Folder to the `/wp-content/plugins/` directory</li> 
                    <li>Activate the plugin through the 'Plugins' menu in WordPress</li> 
                    <li>Create New Page menu and Sub Menu from Admin Panel </li>
                    <li>System will show page menu title and sub menu title with custom Description on wp-admin by menu section.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
                <h3><b>How to Use WP Admin Menu</b></h3>

                <h4>Create Page Menu and Sub menu Step</h4>
                <ul>
                    <li>Click Wp Admin Menu in wp-admin menu.</li>
                    <li>Click Add new button. Then display add new menu page and display required field as per
                        Create menu and sub menu.</li>
                    <li>Fill the all required field.</li>
                    <li>Create Sub Menu with selecting Parent Menu.</li>
                    <li>While Creating Menu or Sub Menu status is important field.</li>
                    <li>Clicking on Add button New Menu or Sub Menu has been created Successfully.</li>
                </ul>
            </td>
        </tr>
        </tr>
        <tr>
            <td>
                <hr>
                <h3><b>Parameters</b></h3>

                <h4><b>$page_title</b></h4>

                <p>(string) (required) Text to be displayed in the title tags of the page when the menu is selected</br>
                    Default: None</p>

                <h4>$menu_title</h4>

                <p>(string) (required) On-screen name text for the menu
                    </br>Default: None</p>

                <h4><b>$capability</b></h4>

                <p>(string) (required) Capability required for this menu to be displayed to the user. User levels are deprecated and should not be used here!
                    </br>Default: None</p>

                <h4><b>$menu_slug</b></h4>

                <p>(string) (required) Slug name to refer to this menu (should be unique for this menu). Prior to Version 3.0 this was called the file (or handle) parameter. 
                If the function parameter is omitted, the menu_slug should be the PHP file that handles the display of the menu page content.
                    </br>Default: None</p>

                <h4><b>$function</b></h4>

                <p>(string) (optional) Function that displays the page content for the menu page.
                    </br>Default: None.</p>

                <h4><b>$icon_url</b></h4>

                <p>(string) (optional) The icon for this menu.
                    </br>Default: empty string</p>

                <h4><b>$position</b></h4>

                <p>(integer) (optional) Position in the menu order this menu should appear. By default, if this parameter is omitted, the menu will appear at the bottom of the menu structure. 
                The higher the number, the lower its position in the menu. 
                <span>WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays! <br>
                Risk of conflict can be reduced by using decimal instead of integer values, e.g. 63.3 instead of 63 (Note: Use quotes in code, IE '63.3').</span>
                </br>Default: bottom of menu structure</p>
                2 - Dashboard</br>
                4 - Separator</br>
                5 - Posts</br>
                10 - Media</br>
                15 - Links</br>
                20 - Pages</br>
                25 - Comments</br>
                59 - Separator</br>
                60 - Appearance</br>
                65 - Plugins</br>
                70 - Users</br>
                75 - Tools</br>
                80 - Settings</br>
                99 - Separator</br>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
                <h3><b>Screenshots</b></h3>            
                <p>1. Wp Admin Add New</p>
                <img src= "<?php echo plugins_url(); ?>/AdminMenuCreator/screenshots/Admin_Menu_Add_New.png" style="width:900px;" /><br/>
                <p>2. Wp Admin Menu select option</p>
                <img src= "<?php echo plugins_url(); ?>/AdminMenuCreator/screenshots/Admin_Select_Option.png" style="width:900px;" /><br/>
                <p>3. Wp Admin Menu with Records</p>
                <img src= "<?php echo plugins_url(); ?>/AdminMenuCreator/screenshots/Admin_Menu_With_Data.png" style="width:900px;" /><br/>
                <p>4. Wp Admin Menu listing</p>
                <img src= "<?php echo plugins_url(); ?>/AdminMenuCreator/screenshots/Admin_Menu_Listing.png" style="width:900px;" /><br/>
                <p>5. Wp Admin Menu display</p>
                <img src= "<?php echo plugins_url(); ?>/AdminMenuCreator/screenshots/Admin_Menu_Display.png" style="width:900px;" /><br/>
                <p>6. Wp Admin Menu help</p>
                <img src= "<?php echo plugins_url(); ?>/AdminMenuCreator/screenshots/Admin_Menu_Help.png" style="width:900px;" /><br/>
            </td>
        </tr>
    </table>
</div>


    




             
