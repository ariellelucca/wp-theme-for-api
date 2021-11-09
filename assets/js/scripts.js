jQuery(".navbar-toggler").click(function() {
    jQuery(jQuery(this).data("target")).toggleClass( 'show');
})

jQuery("#loop-load-more").click(function(e) {

    let current_page = jQuery(this).attr('data-last-value');

    let next_page = parseInt(current_page, 10) + 1;
  
    e.preventDefault();

    jQuery.post({
        url : ajax.url,
        data : {
            action: 'sample_theme_include_posts',
            page  : current_page,
            nonce : ajax.nonce
        },
        success: function(res) {
            jQuery('#main-loop').append(res);

            jQuery("#loop-load-more").attr('data-last-value', next_page);
        }
    })

});