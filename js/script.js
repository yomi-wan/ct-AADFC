jQuery(document).ready(function(){
    // displays dot style next to titles H2, H3
    jQuery("h2").append("<div class=\"ball\">");
    jQuery("h3").append("<div class=\"ball\">");
    
    // displays icons in mobile menu
    jQuery("#menu-item-12 .nav-link").prepend('<i class="material-icons d-lg-none">home</i>'); //home
    jQuery("#menu-item-45 .nav-link").prepend('<i class="material-icons d-lg-none">people</i>'); //about
    jQuery("#menu-item-234 .nav-link").prepend('<i class="material-icons d-lg-none">public</i>'); //african resources
    jQuery("#menu-item-42 .nav-link").prepend('<i class="material-icons d-lg-none">event</i>'); //events
    jQuery("#menu-item-292 .nav-link").prepend('<i class="material-icons d-lg-none">photo_library</i>'); //media
    jQuery("#menu-item-23 .nav-link").prepend('<i class="material-icons d-lg-none">mail</i>'); //contact

    // removes col-sm for Modern Events Calendar Plugin
    jQuery('#mec_skin_events_147 .col-md-4').removeClass('col-sm-4'); 

    // checks if Events are empty
      jQuery('#mec_skin_events_147').each(function(){
        if(jQuery(this).height() == 0){
            jQuery('#events-error').append('<h3 class="text-white text-center mb-5">Events Coming Soon!</h3>');
            jQuery('.front-event-btn').addClass('d-none');
        }
    })

    // adds button class to a link in the banner
    if(jQuery("#text-6 a").length){
        // removed the p element that clashes with styling
        jQuery("#text-6 a").parents('p').addClass('remove');
        jQuery("#text-6").find("p.remove").contents().unwrap();
        // wraps link with btn div
        jQuery( "#text-6 a" ).wrap( '<div class="primary-btn m-0"></div>' );
    }



});//end of scope

