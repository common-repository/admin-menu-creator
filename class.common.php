<?php
    /**
    * Author: Pixel to Web
    * Author URI: http://www.pixeltoweb.com
    */
?>
<?php
class AMC_Common {
    private static $initiated = false;
    public static function init() {
        if ( ! self::$initiated ) {
            self::init_hooks();
        }
    }
    private static function init_hooks() {
        self::$initiated = true;
    }

    //Global Query
    function wcamc_menu_getquery($query){
        global $wpdb;  
        $wpdb->query( $wpdb->prepare( $query,""));
    }
    //Get Queries
    function wcamc_menu_select_data($tablename,$where,$select = '*'){
        global $wpdb;  
        $q = "SELECT $select FROM $tablename WHERE $where";    
        $result = $wpdb->get_results($q);
        return $result;
    }
    //Update Queries
    function wcamc_menu_update_data($tablename,$values,$where){
        global $wpdb;  
        $q = $wpdb->update($tablename, $values, $where);
        self::wcamc_menu_getquery($q);
        return ;
    }
    //Insert Queries
    function wcamc_menu_insert_data($tablename,$fields,$format){
        global $wpdb;
        $q = $wpdb->insert($tablename,$fields,$format);
        self::wcamc_menu_getquery($q);
        return $lastid = $wpdb->insert_id;
    }
    //Delete Queries
    function wcamc_menu_delete_data($tablename,$field, $value){
        global $wpdb;
        if(is_array($value)){
            for ($i=0; $i<=count($value); $i++){
                $q= $wpdb->delete($tablename, array('id'=>sanitize_text_field($value[$i])), array('%d'));
                self::wcamc_menu_getquery($q);
            }
        }else{
            $tags = $value;
            $q= $wpdb->delete($tablename, array('id'=>sanitize_text_field($tags)), array('%d'));
            self::wcamc_menu_getquery($q);
        }
        
    }
}
?>