/* Pagina index  */
jQuery(document).ready(function($) {


    var dict = {
    	"link1":{
            en:"Establishments",
            eu:"Establezimenduak",
            es:"Establecimientos"			
        },
        "link2":{
            en:"Restaurants",
            eu:"Jatetxeak",
            es:"Restaurantes"			
        },
        "link3":{
            en:"Location",
            eu:"Kokapena",
            es:"Localización"		
        },
        "Establishments":{
            en:"Establishments",
            eu:"Establezimenduak",
            es:"Establecimientos"			
        },
		"Desc1":{
            en:"Wide varaiety of quality restaurants are waiting to serve you a delicious meal.",
            eu:"Kalitate handiko jatetxe ugari daude bazkari goxoa zerbitzatzeko zain.",
            es:"Una amplia variedad de restaurantes de calidad le esperan para servirle una comida deliciosa."			
        },
        "Shops":{
            en:"Shops",
            eu:"Dendak",
            es:"Tiendas"			
        },
        "Desc2":{
            en:"Lots of shops for all your needs, from groceries to clothing, and all of that at an afordable product.",
            eu:"Denda asko zure behar guztietarako, janari arropetatik hasi eta hori guztia produktu eskuragarri batean.",
            es:"Muchas tiendas para todas sus necesidades, desde comestibles hasta ropa, y todo eso a un precio asequible."			
        },
        "Hcomercial":{
            en:"Business hours",
            eu:"Lanorduak",
            es:"Horario Comercial"			
        },
        "Horario1":{
            en:"Monday to Saturdays, from 10:00 to 22:00h",
            eu:"Astelehenetik larunbatera, 10:00 etatik 22:00etara",
            es:"Lunes a sábados, de 10:00 a 22:00h"			
        },
         "Hhipercor":{
            en:"Hipercor schedule",
            eu:"Hipercor ordutegia",
            es:"Horario Hipercor"			
        },
         "Horario2":{
            en:"Monday to Saturdays, from 10:00 to 22:00h",
            eu:"Astelehenetik larunbatera, 10:00 etatik 22:00etara",
            es:"Lunes a sábados, de 10:00 a 22:00h"			
        },
        "Hrestauracion":{
            en:"Restoration Hours",
            eu:"Zaharberritze orduak",
            es:"Horario Restauración"			
        },
         "Horario3":{
            en:"Sunday to Thursday, from 12:00 to 23:00",
            eu:"Igandeetatik ostegunetara, 12:00 etatik 23:00etara",
            es:"Domingos a jueves, de 12:00 a 23:00h"			
        },
        "Horario4":{
            en:"Friday, Saturday and the eve of holidays, from 12:00 to 00:00",
            eu:"Ostirala, larunbata eta jai bezpera, 12: 00etatik 00: 00etara",
            es:"Viernes, sábados y vísperas de festivos, de 12:00 a 00:00 h"			
        },
        "Hocio":{
            en:"Leisure Hours",
            eu:"Aisialdiko Ordutegia",
            es:"Horario Ocio"			
        },
        "Cines":{
            en:"Cinemas: According to programming",
            eu:"Zinemak: Programazioaren arabera",
            es:"Cines: Según programación"			
        },
        "Citypark":{
            en:"Citypark, from 4:00 p.m. Karting from 5:00 p.m. (Saturdays and Sundays from 12: 00h)",
            eu:"Citypark, 16: 00etatik aurrera. Kartinga 17: 00etatik aurrera. (Larunbat eta igandeetan 12: 00etatik aurrera)",
            es:"Citypark, desde 16:00h. Karting desde 17:00h. (sábados y domingos desde 12:00h)"			
        },


        }

	$(function(){
    $('.selectpicker').selectpicker();
	});

    $('.idioma').click(function() {
        var translator = $('body').translate({lang:$(this).attr('data-name'), t: dict});
    });

});
