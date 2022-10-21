jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.menu-header ul.menu').slideToggle(500);
  
        e.preventDefault();
    });
     
});