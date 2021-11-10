/* Toggler hamburguer da navnar */
jQuery(".navbar-toggler").click(function() {
    jQuery(jQuery(this).data("target")).toggleClass( 'show');
})

/* Ação de clique para carregar via requisição ajax, mais posts na home */
jQuery("#loop-load-more").click(function(e) {

    /* Lê o valor do data-last-value do botão, para saber de qual página fazer a requisição */
    let current_page = jQuery(this).attr('data-last-value');

    /* Calcula a próxima página */
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

            /* Os posts carregados da próxima página são adicionados na div #main-loop */
            jQuery('#main-loop').append(res);

            /* É então feito um incrementon do valor de página no data-last-value do botão que dispara esta ação */
            jQuery("#loop-load-more").attr('data-last-value', next_page);
        }
    })

});