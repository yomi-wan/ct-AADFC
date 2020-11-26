jQuery(document).ready(function(){
    // displays dot style next to titles H2, H3
    jQuery("h2").append("<div class=\"ball\">");
    jQuery("h3").append("<div class=\"ball\">");


    // removes col-sm for Modern Events Calendar Plugin
    jQuery('#mec_skin_events_147 .col-md-4').removeClass('col-sm-4'); 


});//end of scope

