console.log('teste');

jQuery(".navbar-toggler").click(function() {
    jQuery(jQuery(this).data("target")).toggleClass( 'show');
})