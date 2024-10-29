/**
* Author: Pixel to Web
* Author URI: http://www.pixeltoweb.com
*/

    jQuery(document).ready(function() 
    { 
    //Global Code//

        jQuery("#menu_page_title").change(function() {
            var value = jQuery.trim(jQuery("#menu_page_title").val());
            value = value.toLowerCase();
            value = value.split(' ').join('');
            value = value.replace( /\s/g, "");
            jQuery("#menu_slug").val(value);
        });

        if(jQuery("#sub_menu").val()==""){
            jQuery("#position").addClass("requiredbox");
        }
        
        jQuery("#sub_menu").change(function(){
            if(jQuery("#sub_menu").val()!=""){
                jQuery("#position").val('');
                jQuery("#position").removeClass("requiredbox");
            }else{
                jQuery("#position").addClass("requiredbox");
            }

        });

        jQuery('#menupublish').click(function(){  
            var error = validateAll();
            var pvalue ="2,4,5,10,15,20,25,59,60,65,70,75,80,99";

            if(error ==0){
                // Check extis value in database
                var arr        = [];
                var pval       = jQuery("#exitvlaue").val();
                var slug       = jQuery("#exitsslug").val();
                var strings    = pval.split(",");
                var response   = "";
                var slugstring = slug.split(",");
                var error1     = 0;

                for (var i = 0; i < slug.length; i++) {
                    if(jQuery(".slugValue").val() == slugstring[i]){
                        jQuery('.boxclass').children('.slugMessage').text("Slug already exits");
                        jQuery('.boxclass').children('.slugMessage').show();
                        error = 1; 
                    }
                }
                for (var i=0; i<pval.length; i++){
                    arr.push( + strings[i] );
                    if(jQuery(".positionValue").val() == arr[i] ){
                        jQuery('.boxclass').children('.positionMessage').text("This value ("+pvalue+','+pval+") already exits please try another position value.");
                        jQuery('.boxclass').children('.positionMessage').show();
                        error = 1;
                    }
                }

                if( jQuery(".positionValue").val()== 2  || jQuery(".positionValue").val()== 4  || jQuery(".positionValue").val()== 5 ||
                    jQuery(".positionValue").val()== 10 || jQuery(".positionValue").val()== 15 || jQuery(".positionValue").val()== 20 ||
                    jQuery(".positionValue").val()== 25 || jQuery(".positionValue").val()== 59 || jQuery(".positionValue").val()== 60 ||
                    jQuery(".positionValue").val()== 65 || jQuery(".positionValue").val()== 70 ||
                    jQuery(".positionValue").val()== 75 || jQuery(".positionValue").val()== 80 || jQuery(".positionValue").val()== 99)
                {
                    jQuery('.boxclass').children('.positionMessage').text("This value ("+pvalue+','+pval+") already exits please try another position value.");
                    jQuery('.boxclass').children('.positionMessage').show();
                    error = 1;
                }
                if(error==1){
                    return false;
                }else{
                    jQuery('#menupost').submit();
                }
            }
        });

        jQuery('.numberbox').keydown(function(event) {
            // Allow special chars + arrows 
            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9
            || event.keyCode == 27 || event.keyCode == 13
            || (event.keyCode == 65 && event.ctrlKey === true)
            || (event.keyCode >= 35 && event.keyCode <= 39)){
                return;
            }else {
                // If it's not a number stop the keypress
                if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                    event.preventDefault();
                }
            }
        });
        function validateAll(){
            var error = 0;
            jQuery( ".boxclass" ).each(function()
            {
                if(jQuery( this).children('.requiredbox').val()==''){
                    jQuery( this).children('.errormessage').text("This Field is Required.");
                    jQuery( this).children('.errormessage').show();

                    error=1;
                }else{
                    jQuery( this).children('.errormessage').hide();
                }
            });

            jQuery( ".selectclass" ).each(function()
            {
                if (jQuery( this).children('.errormessage').text()=='' && jQuery( this).children('select').val()=='')
                {
                    jQuery( this).children('.errormessage').text("Please Select Option.");
                    jQuery( this).children('.errormessage').show();
                    error=1;
                }
            });
            return error;
        }
    });