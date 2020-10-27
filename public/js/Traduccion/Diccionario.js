/* Pagina index  */
jQuery(document).ready(function($) {


    var dict = {
        "Establishments":{
            en:"Establishments",
            eu:"Establezimenduak",
            es:"Establecimientos"			
        },


        }

    $('.idioma').click(function() {
        var translator = $('body').translate({lang:$(this).attr('data-name'), t: dict});
    });

});
