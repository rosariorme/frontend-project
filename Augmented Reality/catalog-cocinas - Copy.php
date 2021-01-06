<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modul</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/parallax.min.js"></script>
<script type="text/javascript" src="js/script_menu.js"></script>
<script type="text/javascript" src="js/script-catalog-cocinas.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
  <style type="text/css">
  body {
	background-color: #fff;
}
#xunii:hover {text-decoration:underline;}
#lisoss:hover {text-decoration:underline;}
#modulartt:hover {text-decoration:underline;}
#condiseñoo:hover {text-decoration:underline;}
#cuarzoo:hover {text-decoration:underline;}
#formicaa:hover {text-decoration:underline;}
#marmoll:hover {text-decoration:underline;}
#amaderadoss:hover {text-decoration:underline;}
#otross:hover {text-decoration:underline;}
#coriann:hover {text-decoration:underline;}
#granitoo:hover {text-decoration:underline;}
  </style>
  <script>
  $(document).ready(function(e) {
	  loading('menu2','five','footer_top','logo_modul');
   amaderados();
	 
	 
});
  function versiones()
  {		
	  if(document.getElementById('version_down').src == 'http://192.185.138.124/~emil/modul/media/images/03-catalogo/cocinas/abajo.jpg')
	  {
		  $('#versiones_box').show(1000);
		  document.getElementById('version_down').src = 'media/images/03-catalogo/cocinas/arriba.png';
	  } else {
		  $('#versiones_box').hide(1000);
		  document.getElementById('version_down').src = 'media/images/03-catalogo/cocinas/abajo.jpg';
	  }
  }
  
  var imgg = 'media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/09-Chocolate.jpg';
  var imggl = '16-Nuez.jpg';
   var images_amaderados={
		  0: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/01-Legno Blanco.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/02-Cremino.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/03-Encino.jpg",
		  3: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/04-Argenta.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/05-Almendra.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/06-Tabaco.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/07-Zebrano Teca.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/08-Lignite.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/09-Chocolate.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/10-Habano.jpg",
		  10: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/11-Nature.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/12-Cacao.jpg",
		  12: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/13-Pinon.jpg",
		  13: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/14-Nogal Castano.jpg",
		  14: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/15-Nogal Americano.jpg",
		  15: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/16-Nuez.jpg",
		  16: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/17-Canela.jpg",
		  17: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/18-Kumey.jpg",
		  18: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/19-Capuccino.jpg",
		  19: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/20-Aserrado Coco.jpg",
		  20: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/21-Bambu.jpg",
		  21: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/22-Maui.jpg",
		  22: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/23-Aserrado Moka.jpg",
		  23: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/24-Latte.jpg",
		  24: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/25-Nogal Amati.jpg",
		  25: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/26-Cerezo.jpg"
		  };
  var images_amaderados_zoom={
		  0: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/01-Legno Blanco.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/02-Cremino.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/03-Encino.jpg",
		  3: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/04-Argenta.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/05-Almendra.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/06-Tabaco.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/07-Zebrano Teca.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/08-Lignite.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/09-Chocolate.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/10-Habano.jpg",
		  10: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/11-Nature.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/12-Cacao.jpg",
		  12: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/13-Pinon.jpg",
		  13: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/14-Nogal Castano.jpg",
		  14: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/15-Nogal Americano.jpg",
		  15: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/16-Nuez.jpg",
		  16: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/17-Canela.jpg",
		  17: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/18-Kumey.jpg",


		  18: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/19-Capuccino.jpg",
		  19: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/20-Aserrado Coco.jpg",
		  20: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/21-Bambu.jpg",
		  21: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/22-Maui.jpg",
		  22: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/23-Aserrado Moka.jpg",
		  23: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/24-Latte.jpg",
		  24: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/25-Nogal Amati.jpg",
		  25: "media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/26-Cerezo.jpg"
		  };
     var images_lisos={
		  0: "media/images/03-catalogo/cocinas/looks/acabados/lisos/01-Lava.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/acabados/lisos/02-Mango.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/acabados/lisos/03-Pera.jpg",
		  3: "media/images/03-catalogo/cocinas/looks/acabados/lisos/04-Chai.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/acabados/lisos/05-Blanco Frosty.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/acabados/lisos/06-Lustro.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/acabados/lisos/07-Gris Niebla.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/acabados/lisos/14-Negro(alto-brillo).jpg",
		  8: "media/images/03-catalogo/cocinas/looks/acabados/lisos/09-Rojo(alto-brillo).jpg",
		  9: "media/images/03-catalogo/cocinas/looks/acabados/lisos/11-Chai(alto-brillo).jpg",
		  10: "media/images/03-catalogo/cocinas/looks/acabados/lisos/12-Wengue(alto-brillo).jpg",
		  11: "media/images/03-catalogo/cocinas/looks/acabados/lisos/13-Blanco(alto-brillo).jpg"
		  };
     var images_lisos_zoom={
		  0: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/01-Lava.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/02-Mango.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/03-Pera.jpg",
		  3: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/04-Chai.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/05-Blanco Frosty.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/06-Lustro.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/07-Gris Niebla.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/14-Negro(alto-brillo).jpg",
		  8: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/09-Rojo(alto-brillo).jpg",
		  9: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/11-Chai(alto-brillo).jpg",
		  10: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/12-Wengue(alto-brillo).jpg",
		  11: "media/images/03-catalogo/cocinas/looks/acabados/lisos/zoom/13-Blanco(alto-brillo).jpg"
		  };
 
	 var images_condisenios={
		  0: "media/images/03-catalogo/cocinas/looks/acabados/con-diseno/Concreto.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/acabados/con-diseno/Lino.jpg"
		  };
 var images_condisenios_zoom={
		  0: "media/images/03-catalogo/cocinas/looks/acabados/con-diseno/zoom/Concreto.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/acabados/con-diseno/zoom/Lino.jpg"
		  };
		  
 var images_corian={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/corian/01-Corian_Designer_White.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/corian/02-SilverBirch.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/corian/03-Corian_Fossil.jpg",
		  3: "media/images/03-catalogo/cocinas/looks/materiales/corian/04-Corian_Witch_Hazel.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/corian/05-Corian_Aztec_Gold.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/corian/06-Corian_Oat.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/corian/07-Corian_Mint_Ice.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/corian/08-Corian_Cilantro.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/corian/09-Corian_Verde.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/corian/10-Corian-RoyalRed.jpg",
		  10: "media/images/03-catalogo/cocinas/looks/materiales/corian/11-Corian_Maui.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/corian/12-DBI_Corian_Deep_Bedrock.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/corian/13-Corian_Earth.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/corian/14-Corian_Cobalt.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/corian/15-Corian_Anthracite.jpg"
		  };
 var images_corian_zoom={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/01-Corian_Designer_White.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/02-SilverBirch.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/03-Corian_Fossil.jpg",
		  3: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/04-Corian_Witch_Hazel.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/05-Corian_Aztec_Gold.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/06-Corian_Oat.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/07-Corian_Mint_Ice.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/08-Corian_Cilantro.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/09-Corian_Verde.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/10-Corian-RoyalRed.jpg",
		  10: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/11-Corian_Maui.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/12-DBI_Corian_Deep_Bedrock.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/13-Corian_Earth.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/14-Corian_Cobalt.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/corian/zoom/15-Corian_Anthracite.jpg"
		  };
 var images_cuarzo={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/01-silestone-lyra.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/02-silestone-white-zeus.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/03-silestone-haiku.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/04-silestone-crema-minerva.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/05-silestone-unsui.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/06-silestone-verde-fun.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/07-silestone-istmo.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/08-silestone-aluminio-nube.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/09-silestone-steel.jpg",
		  10: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/10-silestone-carbono.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/11-silestone-marron-jupiter.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/12-silestone-azul-enjoy.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/13-silestone-eros-stellar-silestone-stellar-fire-1-01-b.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/14-silestone-magenta-energy.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/15-silestone-tao.jpg"
		  };
 var images_cuarzo_zoom={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/01-silestone-lyra.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/02-silestone-white-zeus.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/03-silestone-haiku.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/04-silestone-crema-minerva.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/05-silestone-unsui.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/06-silestone-verde-fun.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/07-silestone-istmo.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/08-silestone-aluminio-nube.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/09-silestone-steel.jpg",
		  10: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/10-silestone-carbono.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/11-silestone-marron-jupiter.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/12-silestone-azul-enjoy.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/13-silestone-eros-stellar-silestone-stellar-fire-1-01-b.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/14-silestone-magenta-energy.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/silestone-cuarzo/zoom/15-silestone-tao.jpg"
		  };
 var images_marmol={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/marmol/01-blanco.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/marmol/02-gris.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/marmol/03-rosa.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/marmol/04-rojo.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/marmol/05-oro.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/marmol/06-cobre.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/marmol/07-olivo.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/marmol/08-plata.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/marmol/09-negro.jpg"
		  };
 var images_marmol_zoom={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/marmol/zoom/01-blanco.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/marmol/zoom/02-gris.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/marmol/zoom/03-rosa.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/marmol/zoom/04-rojo.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/marmol/zoom/05-oro.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/marmol/zoom/06-cobre.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/marmol/zoom/07-olivo.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/marmol/zoom/08-plata.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/marmol/zoom/09-negro.jpg"
		  };
 var images_granito={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/granito/01-granito-blanco.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/granito/02-granito-arena.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/granito/03-granito-dorado.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/granito/04-granito-rojo.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/granito/05-granito.olivo.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/granito/06-granito-plata.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/granito/07-granito-azul.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/granito/09-granito-acero.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/granito/10-granito-negro.jpg"
		  };
 var images_granito_zoom={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/granito/zoom/01-granito-blanco.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/granito/zoom/02-granito-arena.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/granito/zoom/03-granito-dorado.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/granito/zoom/04-granito-rojo.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/granito/zoom/05-granito-olivo.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/granito/zoom/06-granito-plata.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/granito/zoom/07-granito-azul.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/granito/zoom/09-granito-acero.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/granito/zoom/10-granito-negro.jpg"
		  };
 var images_formica={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/formica/01-white-onyx.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/formica/02-sol.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/formica/03-spectrum-red.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/formica/04-amarena.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/formica/05-cassis.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/formica/07-vibrant-green.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/formica/08-natural-birch.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/formica/09-rattan-cane.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/10-natural-ribbonwood.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/11-jarrah-legno.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/12-Folkstone-Grafix.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/13-tuscan-marble.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/14-denim-canvas.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/14-labrador-granite.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/15-basalt-slate.jpg"
		  };
 var images_formica_zoom={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/01-white-onyx.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/02-sol.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/03-spectrum-red.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/04-amarena.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/05-cassis.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/07-vibrant-green.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/08-natural-birch.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/09-rattan-cane.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/10-natural-ribbonwood.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/11-jarrah-legno.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/12-Folkstone-Grafix.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/13-tuscan-marble.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/14-denim-canvas.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/14-labrador-granite.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/formica/zoom/15-basalt-slate.jpg"
		  };
   var images_otros={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/otros/01-onyx-blanco.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/otros/02-onyx-arena.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/otros/03-onyx-verde.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/otros/04-onyx-gris.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/otros/05-onyx-rosa.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/otros/06-onyx-beige.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/otros/07-onyx-rojizo.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/otros/08-onyx-marron.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/otros/09-acerno-inoxidable-cepillado-horizontal.jpg",
		  10: "media/images/03-catalogo/cocinas/looks/materiales/otros/10-acero-inoxidable-cepillado-vertical.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/otros/11-acero-inoxidable-liso.jpg",
		  12: "media/images/03-catalogo/cocinas/looks/materiales/otros/12-acero-inoxidable-cepillado-mixto.jpg",
		  13: "media/images/03-catalogo/cocinas/looks/materiales/otros/13-primavera.jpg",
		  14: "media/images/03-catalogo/cocinas/looks/materiales/otros/14-teca.jpg",
		  15: "media/images/03-catalogo/cocinas/looks/materiales/otros/15-parota.jpg"
		  };
   var images_otros_zoom={
		  0: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/01-onyx-blanco.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/02-onyx-arena.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/03-onyx-verde.jpg",
		  4: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/04-onyx-gris.jpg",
		  5: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/05-onyx-rosa.jpg",
		  6: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/06-onyx-beige.jpg",
		  7: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/07-onyx-rojizo.jpg",
		  8: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/08-onyx-marron.jpg",
		  9: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/09-acerno-inoxidable-cepillado-horizontal.jpg",
		  10: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/10-acero-inoxidable-cepillado-vertical.jpg",
		  11: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/11-acero-inoxidable-liso.jpg",
		  12: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/12-acero-inoxidable-cepillado-mixto.jpg",
		  13: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/13-primavera.jpg",
		  14: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/14-teca.jpg",
		  15: "media/images/03-catalogo/cocinas/looks/materiales/otros/zoom/15-parota.jpg"
		  };
   var images_xuni={
		  0: "media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/xuni/1.jpg",
		  1: "media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/xuni/2.jpg",
		  2: "media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/xuni/3.jpg"
		  };

  function thank_you(){
  }
  function img_change(type,img_selected)
  {
	if(type==0){
	 document.getElementById("zoom").src = ''+images_amaderados_zoom[img_selected]; 
	}else if(type==1){
	 document.getElementById("zoom").src = ''+images_lisos_zoom[img_selected]; 
	}else if(type==2){
	 document.getElementById("zoom").src = ''+images_condisenios_zoom[img_selected]; 
	}else if(type==3){
	 document.getElementById("zoom").src = ''+images_corian_zoom[img_selected]; 
	}else if(type==4){
	 document.getElementById("zoom").src = ''+images_cuarzo_zoom[img_selected]; 
	}else if(type==5){
	 document.getElementById("zoom").src = ''+images_marmol_zoom[img_selected]; 
	}else if(type==6){
	 document.getElementById("zoom").src = ''+images_granito_zoom[img_selected]; 
	}else if(type==7){
	 document.getElementById("zoom").src = ''+images_formica_zoom[img_selected]; 
	}else if(type==8){
	 document.getElementById("zoom").src = ''+images_otros_zoom[img_selected]; 
	}
  }
  function amaderados(){
		checkvisible();
	  $('#title-picker').html('AMADERADOS');
	  $('#description-picker').html('La bella apariencia de la naturaleza');
	  $('#full-description-picker').html('Reflejos de modernidad en una textura lustrosa y tersa de fácil mantenimiento, que suma la capacidad de pulirse para seguir brillando como el primer día. ');
	  $('#picker').html('');
	  $.each(images_amaderados, function( index, value ) {
	  $('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(0,'+index+')" height="40"/>');
	  });
	  img_change(0,0);
	  }
  function lisos(){
		checkvisible();
	  $('#title-picker').html('LISOS');
	  $('#description-picker').html('Color que dura por años ');
	  $('#full-description-picker').html('Reflejos de modernidad en una textura lustrosa y tersa de fácil mantenimiento, que suma la capacidad de pulirse para seguir brillando como el primer día');
	  $('#picker').html('');
	  $.each(images_lisos, function( index, value ) {
      $('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(1,'+index+')" height="40"/>');
       });
	  img_change(1,0);
	  }
   function condisenio(){
		checkvisible();
	  $('#title-picker').html('CON DISEÑO');
	  $('#description-picker').html('Texturas y apariencias únicas');
	  $('#full-description-picker').html('Una declaración contemporánea: propuestas estéticas y táctiles que visten de originalidad tu cocina integral. ');
	  $('#picker').html('');
	  $.each(images_condisenios, function( index, value ) {
	  $('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(2,'+index+')" height="40"/>');
	  });
	  img_change(2,0);
	  }
   function corian(){
		checkvisible();
		$('#title-picker').html('CORIAN® ');
		$('#description-picker').html('Superficies solidas');
		$('#full-description-picker').html('Mezcla mineral y acrílica con dureza, brillo y capacidad de adaptarse a múltiples formas.');
		$('#picker').html('');
		$.each(images_corian, function( index, value ) {
	 	$('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(3,'+index+')" height="40"/>');
		});
		img_change(3,0);
	   }
	function cuarzo(){
		checkvisible();
		$('#title-picker').html('Silestone® (cuarzo)');
		$('#description-picker').html('Superficies de cuarzo');
		$('#full-description-picker').html('Aleación de cristales minerales y resina plástica que garantiza dureza y durabilidad.');
		$('#picker').html('');
		$.each(images_cuarzo, function( index, value ) {
		$('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(4,'+index+')" height="40"/>');
		});
		img_change(4,0);
	   }
	function marmol(){
		checkvisible();
		$('#title-picker').html('Mármol ');
		$('#description-picker').html('Elegancia mineral');
		$('#full-description-picker').html('Mineral altamente decorativo y lujoso, que se distingue por su veta, porosidad y transparencias. Requiere sellado.');
		$('#picker').html('');
		$.each(images_marmol, function( index, value ) {
		$('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(5,'+index+')" height="40"/>');
		});
		img_change(5,0);
	   }
	function granito(){
		checkvisible();
		$('#title-picker').html('Granito ');
		$('#description-picker').html('Belleza natural');
		$('#full-description-picker').html('Roca completamente natural que requiere un recubrimiento especial para protegerla.');
		$('#picker').html('');
		$.each(images_granito, function( index, value ) {
		$('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(6,'+index+')" height="40"/>');
		});
		img_change(6,0);
	   }
	function formica(){
		checkvisible();
		$('#title-picker').html('Formica');
		$('#description-picker').html('Opciones ilimitadas');
		$('#full-description-picker').html('Laminado plástico que imita amplia variedad de acabados; resistencia y fácil mantenimiento, con duración menor que las de origen mineral.');
		$('#picker').html('');
		$.each(images_formica, function( index, value ) {
		$('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(7,'+index+')" height="40"/>');
		});
		img_change(7,0);
	   }

	function otros(){
		checkvisible();
		$('#title-picker').html('Otros');
		$('#description-picker').html('Materiales variados');
		$('#full-description-picker').html('Ónix, madera y acero inoxidable son otros de los materiales que podemos ofrecer a petición del cliente.');
		$('#picker').html('');
		$.each(images_otros, function( index, value ) {
		$('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(8,'+index+')" height="40"/>');
		});
		img_change(8,0);
	   }
	function xuni(){
		checkvisible();
		$('#title-picker').html('Xuni');
		$('#description-picker').html('edición especial');
		$('#full-description-picker').html('Inspirada en el México rural y con la colaboración de Masisa y EOS México nace esta cocina exclusiva de Mödul.');
		$('#picker').html('');
		$('#zoom').css('display','none');
		$('#slider2_container').fadeIn( "slow", function() { });
		}
		function modulart(){
		checkvisible();
		$('#title-picker').html('ModulArt');
		$('#description-picker').html('edición especial');
		$('#full-description-picker').html('Una pieza de arte única, firmada por Lifer, para una cocina única. ');
		$('#picker').html('');
		$('#zoom').css('display','none');
		$('#slider3_container').fadeIn( "slow", function() { });
		}

function checkvisible(){
	if($('#slider2_container').is(':visible')){
		$('#slider2_container').css('display','none');
		$('#zoom').fadeIn( "slow", function() { });
		
		}else if($('#slider3_container').is(':visible')){
			$('#slider3_container').css('display','none');
			$('#zoom').fadeIn( "slow", function() { });
			}
	}
	amaderados();
  </script>
</head>
<body>
<img width="81" height="130" id="logo_modul" style="z-index: 10;position: absolute;top: 30px;left: 1%;" src="media/images/white.png" />
<div id="menu2" class="menu" style=" background:rgba(0,0,0,90.4); top:0px;cursor:pointer; cursor: hand; z-index:99;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;">
    <ul>
        <li id="modul" onclick=" window.location.href='modul.php';">MÖDUL</li>
        <li id="catalogo" onclick="window.location.href='catalog.php';">CATÁLOGO</li>
        <li id="sucursales" onclick="window.location.href='sucursales.php';">SUCURSALES</li>
        <li id="blog" onclick="window.location.href='blog';">BLOG</li>
        <li id="creadores" onclick="window.location.href='creadores.php';">CREADORES ></li>
        <li>
            <ul class="social">
            <li id="facebook" style="background:url(media/images/redes-sociales.png) 0 -31px; height:50px;">
            <a href="https://es-la.facebook.com/cocinasintegralesmodul" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>|<a href="https://www.pinterest.com/search/pins/?q=M%C3%B6dul" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
           </li>
            <li id="pinterest"></li>
            </ul>
        </li>
    </ul>
</div>
<div>
<div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(media/images/slider/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <div style="position:absolute; top:22px; left:400px; z-index:10;">
        <table rules="cols" style="font-family:'Lato'; font-size: 14 pt;cursor:pointer; cursor: hand; padding-top:10px;">
                    <tr style="padding-left:10px; padding-right:10px">
                        <td style="padding-left:10px; padding-right:10px"><strong>Looks</strong></td>
                        <td style="padding-left:10px; padding-right:10px">Garantía</td>
                        <td style="padding-left:10px; padding-right:10px">Versiones</td>
                        <td style="padding-left:10px; padding-right:10px">Complementos</td>
                    </tr>
                </table>
        </div>
        <div style="position: absolute; width: 300px; height: 100%; top: 0px; z-index:10;">
                <div style="position:absolute; left:100px; top:30px;"></div>
                    <div style="color:#FFF; position: absolute; width: 300px; height: 300px; top: 100px; left: 200px; background-color:#9d1020; opacity: 0.7; filter: alpha(opacity=60);">
                        <div style="padding:30px;">
                            <div style="font-family:'Lato' !important; font-weight:300; font-size:40px;">COCINAS</div>
                            <div style="font-family:'LibreBaskerville Italic'; font-size:12px;">Módulos adaptables</div>
                            <hr style="width:50px; border-color:#FFF;" align="left">
                            <div style="font-family:'Lato'; font-size: 12px;">Mezcla, unifica, crea tu espacio…<br/>
                            Elige, el resultado será único.</div>
                            <br/>
                            <a href="visualiza_tu_cocina.php" style="font-size:14px; text-decoration:none; color:#FFF; border: 1px solid white; padding:5px; ">IMAGINA TU COCINA AQU&iacute;</a>
                        </div>
					</div>
					<div style="color:#FFF; position: absolute; width: 130px; height: 100%; top: 0px; left: 800px; background-color:#000; opacity: 0.8; filter: alpha(opacity=60);">
                    <div style="padding:10px; vertical-align:middle; padding-top:70px;">
                        <div style="font-family:'Lato' !important; font-weight:300; font-size:20px;">UN CAFÉ<br/>
                        CON MÖDUL</div>
                        <div style="font-family:'LibreBaskerville Italic'; font-size:12px;" align="left">Cotiza tu cocina</div>
                        <hr align="left" style="border-color:#FFF; width:50px; position:relative; left:0px;"/>
                        <div style="font-size:12px; font-family:'Lato'">Inicia el día con un
                        buen café preparado
                        con amor. Si tienes
                        pensado remodelar
                        o instalar una cocina
                        desde cero, visita
                        una de nuestras
                        sucursales.</div>
                        <br/>
                        <a href="un_cafe_con_modul.php" style="font-size:12px; text-decoration:none; color:#FFF2A1; font-weight:bold;">+ AGENDA AQU&iacute;</a>
                        </div>
                    </div>
                </div>
                
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
            <div>
                <img u="image" src="media/images/slider/1.jpg" /> 
            </div>
            <div>
                <img u="image" src="media/images/slider/2.jpg" />
            <div>
                <img u="image" src="media/images/slider/3.jpg" />
            </div>
			<div>
                <img u="image" src="media/images/slider/4.jpg" />
            </div>
        </div>
        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <div u="prototype"></div>
        </div>
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
        </span>
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
        </span>
    </div>
</div>
<div style="background-color:#fff; width:100%; color:#999;">
<div align="left" style="padding-left:400px;">
  <table style="padding-top:30px; padding-bottom:10px; width:600px;">
  <tr>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:60px;">LOOKS</td>
    <td width="50px"></td>
    <td style="font-family:'Lato'; font-weight:300;">
    Módulos exactos para el tamaño de tu cocina.<br/>
Mezcla, unifica, crea tu espacio… El resultado será único.
    </td>
  </tr>
</table> 
  <div style="padding-left:0px;"><hr align="left" width="100%"/></div>
  <table width="668" border="0" style="color:#000; padding-top:20px;">
  <tr>
    <td width="301" style="font-family:'Lato' !important; font-size:30px; font-weight:100; padding-bottom:10px;font-weight:300;">MODULARES</td>
    <td width="357" style="font-family:'Lato' !important; font-size:30px; font-weight:100; padding-bottom:10px;font-weight:300;">CUBIERTAS</td>
  </tr>
  <tr>
    <td style="font-family:'LibreBaskerville Italic'; font-size:16px; padding-bottom:10px;">Acabados<br/><hr style="width:50px;" align="left"/></td>
    <td style="font-family:'LibreBaskerville Italic'; font-size:16px;padding-bottom:10px;">Materiales<br/><hr style="width:50px;" align="left"/></td>
  </tr>
  <tr>
    <td style="font-family:'Lato'; font-size: 12px; padding-bottom:20px;">Recibe asesoría de profesionales que te<br />
      ayudarán a adecuar tu proyecto a tus<br />
      necesidades.</td>
    <td style="font-family:'Lato'; font-size: 12px; padding-bottom:20px;">Corona tu cocina modular con la<br />
      cubierta que vaya con tu estilo y<br />
      necesidad.</td>
  </tr>
  <tr>
    <td><table width="295" border="0">
      <tr>
        <td width="128" style="color:#E96935; font-family:'Lato'; font-size: 14px;">Ed. Especiales:</td>
        <td id="amaderadoss" onclick="amaderados()" width="151" style="color:#787397; font-family:'Lato'; font-size: 14px; cursor:pointer">+ Amaderados<br /></td>
      </tr>
      <tr>
        <td id="xunii" onclick="xuni()" style="cursor:pointer;color:#E96935;font-family:'Lato'; font-size: 14px;">&gt; Xuni<br /></td>
        <td id="lisoss" onclick="lisos()" style="color:#787397;font-family:'Lato'; font-size: 14px; cursor:pointer">+ Lisos<br /></td>
      </tr>
      <tr>
        <td id="modulartt" onclick="modulart()" style="cursor:pointer;color:#E96935;font-family:'Lato'; font-size: 14px;">&gt; MödulArt<br /></td>
        <td id="condiseñoo" onclick="condisenio()" style="color:#787397;font-family:'Lato'; font-size: 14px; cursor:pointer">+ Con diseño</td>
      </tr>
    </table></td>
    <td><table width="300" border="0">
      <tr>
        <td id="cuarzoo" onclick="cuarzo()" width="144" style=" cursor:pointer;color:#787397;font-family:'Lato'; font-size: 14px;">+ Cuarzo<br /></td>
        <td id="granitoo" onclick="granito()" width="140" style="cursor:pointer;color:#787397;font-family:'Lato'; font-size: 14px;">+ Granito<br /></td>
      </tr>
      <tr>
        <td id="coriann" onclick="corian()" style="cursor:pointer;color:#787397;font-family:'Lato'; font-size: 14px;">+ Corian<br /></td>
        <td id="formicaa" onclick="formica()" style="cursor:pointer;color:#787397;font-family:'Lato'; font-size: 14px;">+ Formica<br /></td>
      </tr>
      <tr>
        <td id="marmoll" onclick="marmol()" style="cursor:pointer;color:#787397;font-family:'Lato'; font-size: 14px;">+ Marmol<br /></td>
        <td id="otross" onclick="otros()" style="cursor:pointer;color:#787397;font-family:'Lato'; font-size: 14px;">+ Otros</td>
      </tr>
    </table></td>
  </tr>
</table>
<div style="background-color:#fff;padding-top:40px; width:800px; height:50px;"></div>
</div>

<!-- Menu -->
 <div align="left" style="background-color:#666;">
     <div id="five" style="width:100%; height:50px; ">
     <table align="center"  style="width:100%">
        <tr  style="width:100%">
            <td  align="center" style="width:100%; padding-top:15px;font-family:'Lato'; font-size: 14px;color:#fff;">
              CONOCE NUESTROS COLORES Y ACABADOS 
            </td>
        </tr>
     </table>
    </div>
</div>
<!-- Menu -->
<div id="amaderados" align="left" style="color:#000; width:100%">
<table width="100%" border="0" style="border-collapse:collapse;">
  <tr width="100%">
    <td  align="left" valign="top" width="50%" style="padding-left:400px; padding-top:10px;">
    <div align="left" style="width:400px;">
    <div id="title-picker" style="font-family:'Lato' !important; font-size:30px; font-weight:300; padding-top:5px;">AMADERADOS</div>
    <div id="description-picker" style="font-family:'LibreBaskerville Italic'; font-size:16px;">
    La bella apariencia de la naturaleza
    </div>
    <hr width="50" align="left"/>
    <div id="full-description-picker" style="font-family:'Lato';font-size: 12px; padding-bottom:10px; padding-right:5px;">
    Reflejos de modernidad en una textura
    lustrosa y tersa de fácil mantenimiento,
    que suma la capacidad de pulirse para
    seguir brillando como el primer día.
    </div>
    <div id="picker" style="cursor:pointer;">
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/01-Legno Blanco.jpg" width="40" height="40" onclick="javascript:img_change('01-Legno Blanco.jpg')" />
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/02-Cremino.jpg" width="40" height="40" onclick="javascript:img_change('02-Cremino.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/03-Encino.jpg" width="40" height="40" onclick="javascript:img_change('03-Encino.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/04-Argenta.jpg" width="40" height="40" onclick="javascript:img_change('04-Argenta.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/05-Almendra.jpg" width="40" height="40" onclick="javascript:img_change('05-Almendra.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/06-Tabaco.jpg" width="40" height="40" onclick="javascript:img_change('06-Tabaco.jpg')" />
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/07-Zebrano Teca.jpg" width="40" height="40" onclick="javascript:img_change('07-Zebrano Teca.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/08-Lignite.jpg" width="40" height="40" onclick="javascript:img_change('08-Lignite.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/09-Chocolate.jpg" width="40" height="40" onclick="javascript:img_change('09-Chocolate.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/10-Habano.jpg" width="40" height="40" onclick="javascript:img_change('10-Habano.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/11-Nature.jpg" width="40" height="40" onclick="javascript:img_change('11-Nature.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/12-Cacao.jpg" width="40" height="40" onclick="javascript:img_change('12-Cacao.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/13-Pinon.jpg" width="40" height="40" onclick="javascript:img_change('13-Pinon.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/14-Nogal Castano.jpg" width="40" height="40" onclick="javascript:img_change('14-Nogal Castano.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/15-Nogal Americano.jpg" width="40" height="40" onclick="javascript:img_change('15-Nogal Americano.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/16-Nuez.jpg" width="40" height="40" onclick="javascript:img_change('16-Nuez.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/17-Canela.jpg" width="40" height="40" onclick="javascript:img_change('17-Canela.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/18-Kumey.jpg" width="40" height="40" onclick="javascript:img_change('18-Kumey.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/19-Capuccino.jpg" width="40" height="40" onclick="javascript:img_change('19-Capuccino.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/20-Aserrado Coco.jpg" width="40" height="40" onclick="javascript:img_change('20-Aserrado Coco.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/21-Bambu.jpg" width="40" height="40" onclick="javascript:img_change('21-Bambu.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/22-Maui.jpg" width="40" height="40" onclick="javascript:img_change('22-Maui.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/23-Aserrado Moka.jpg" width="40" height="40" onclick="javascript:img_change('23-Aserrado Moka.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/24-Latte.jpg" width="40" height="40" onclick="javascript:img_change('24-Latte.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/25-Nogal Amati.jpg" width="40" height="40" onclick="javascript:img_change('25-Nogal Amati.jpg')"/>
    <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/26-Cerezo.jpg" width="40" height="40" onclick="javascript:img_change('26-Cerezo.jpg')"/>
    </div>
    </div>
    </td>
    <td width="559" id="zoomid">
    <img id="zoom" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/zoom/12-Cacao.jpg" width="100%" height="356" />

        <div id="slider2_container" style=" display:none;position: relative; margin: 0 auto; top: 0px; left: 0px; width: 812px; height: 400px; overflow: hidden;">

        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(media/images/slider/loading.gif) no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;"></div></div>                
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 812px;height: 400px; overflow: hidden;">
            <div>
                <img u="image" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/xuni/1.jpg" /> 
            </div>
            <div>
                <img u="image" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/xuni/2.jpg" />
            </div>
            <div>
                <img u="image" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/xuni/3.jpg" />
            </div>
        </div><div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;"><div u="prototype"></div></div>
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"></span>
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"></span>
    </div>
</div>
        <div id="slider3_container" style=" display:none;position: relative; margin: 0 auto; top: 0px; left: 0px; width: 812px; height: 400px; overflow: hidden;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(media/images/slider/loading.gif) no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;"></div></div>                
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 812px;height: 400px; overflow: hidden;">
            <div>
                <img u="image" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/modulart/1.jpg" /> 
            </div>
            <div>
                <img u="image" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/modulart/2.jpg" />
            </div>
            <div>
                <img u="image" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/modulart/3.jpg" />
            </div>
        </div><div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;"><div u="prototype"></div></div>
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"></span>
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"></span>
    </div>
</div>
    </td>
  </tr>
</table>

</div>
<div style="position:relative; background-image:url(media/images/03-catalogo/cocinas/garantia.jpg); background-size:100% auto; height:80px;"> 
<div id="texto_garantia" style="position: absolute; top: 10px; left: 30%; color: #EBEFA1; font-family: 'Lato'; font-size: 30px; font-weight: 300;">
<div valign="middle" style="padding-top:10px;width:50px; height:100%; background-image:url(media/images/logo-garantia.png); background-size:60px 60px; height:60px; width:100%; background-repeat:no-repeat;">
<div style="padding-left:70px;">HASTA 10 AÑOS DE GARANTÍA  |   <a style="font-size:12px; vertical-align:middle; cursor:pointer;" onclick="ver_garantia()">+ VER MÁS</a></div>
</div>
</div>
</div>

<div id="ver-mas" style=" background-color:#fff; color:#666;">
<div class="garantia-content" align="center">
<table class="garantia-text" style=" font-family:'Lato'; font-size:12px;">
	<tr>
    	<td>GARANTÍA PARA EL CLIENTE FINAL</td>
        <td>GARANTÍA PARA EL PROFESIONAL</td>
    </tr>
    <tr>
    	<td style=" font-family:'Lato'; font-size:12px">Si los adquieres en una tienda Mödul Studio, tus muebles
de cocina y clóset Modular están garantizados por 10 años
(o, tratándose de clóset Light, por 5 años) contra defectos
de materiales, mano de obra y vicios ocultos. El
compromiso es reparar o reemplazar las piezas
defectuosas sin costo. Sólo aplica para muebles fabricados
por Mödul.</td>
        <td style=" font-family:'Lato'; font-size:12px">Si eliges a Mödul Studio para ser tu proveedor de mayoreo
en los proyectos residenciales de tu constructora o
despacho de arquitectura, puedes estar tranquilo, ya que
una vez que entregas la vivienda, tu cliente tratará
directamente con nosotros para encargarnos de tramitar la
garantía de los muebles fabricados por nosotros, si fuera
necesario.</td>
    </tr>
</table>
</div>
<hr  style="width:1130px;" align="right"/>
<div class="garantia-content" align="center">
<table class="garantia-text" style=" font-family:'Lato'; font-size:12px">
	<tr>
    	<td>PARA VALIDAR TU GARANTÍA</td>
    </tr>
    <tr>
    	<td>
        	<ul>
            	<li>Debes asegurarte de que la póliza está vigente</li>
            	<li>Debes contar con un documento que avale la compra de tu producto en alguna de nuestras tiendas</li>
            	<li>Acudir a la sucursal para hacer la reclamación. Ahí se tramitará la reparación o sustitución de la pieza defectuosa; en ningún caso se hará devolución de dinero</li>
            	<li>Si se tratara de un artículo descontinuado, Mödul lo reparará o reemplazará por uno de similares o mejores características</li>
            </ul>
        </td>
    </tr>
</table>
</div>
</div>


<div id="tabla_comparativa_por_version" style="height:50px; vertical-align:middle;padding-top:10px; color:#666;font-family:'Lato'; font-size:16px;" align="center">+ VER TABLA COMPARATIVA POR VERSIÓN &nbsp;&nbsp;&nbsp;&nbsp;<img src="media/images/03-catalogo/cocinas/abajo.jpg" name="version_down" width="28" height="8" id="version_down" onclick="versiones()" style="cursor:pointer;" /></div>

<div id="versiones_box" style="background-color:#E5E5E5; color:#666; height:300px; width:100%; display:none;">
<table width="767" border="0" align="center" style="padding-top:20px;">
  <tr>
    <td width="165">
    <div style="font-family:'Lato' !important; font-size:30px; font-weight:100; padding-bottom:10px;font-weight:300;">VERSIONES</div>
    <div style="font-family:'LibreBaskerville Italic'; font-size:16px; padding-bottom:10px;">Nuestros niveles de equipamiento</div>
    <hr style="width:50px;" align="left" />
    <div style="font-family:'Lato'; font-size: 12px; padding-bottom:20px;">
        Tu cocina Mödul luce tal como
    deseas… por fuera y por dentro. Te
    ofrecemos tres versiones, que van
    desde lo básico para una cocina
    funcional, hasta características
    tecnológicas para quienes no quieren
    dejar los gadgets fuera de su hogar.
    </div>
    </td>
    <td width="254" style="font-family:'Lato';  padding-left:20px;">
    <div style="padding-bottom:10px;font-size: 18px;">CARACTERÍSTICAS<br/></div>
    <div style="padding-bottom:10px;font-size: 12px;">Cierre lento_______________________</div>
    <div style="padding-bottom:10px;font-size: 12px;">Capacidad de carga de cajones______</div>
    <div style="padding-bottom:10px;font-size: 12px;">Bisagras Blum®_____________________</div>
    <div style="padding-bottom:10px;font-size: 12px;">Servo Drive________________________</div>
    <div style="padding-bottom:10px;font-size: 12px;">Piso de cajones____________________</div>
    <div style="padding-bottom:10px;font-size: 12px;">Color interior Gris Geometric______</div>
    <div style="padding-bottom:10px;font-size: 12px;">Extensión de apertura de cajón_____</div>
    <div style="padding-bottom:10px;font-size: 12px;">Solidex®___________________________</div>
    </td>
    <td width="129">
    <div style="padding-bottom:10px;font-size: 18px;">FASTRACK</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">Opc.</div>
    <div style="padding-bottom:10px;font-size: 12px;">25 kg</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">-</div>
    <div style="padding-bottom:10px;font-size: 12px;">Foil text.</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">3/4</div>
    </td>
    <td width="87">
    <div style="padding-bottom:10px;font-size: 18px;">PLUS</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">30 kg</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">-</div>
    <div style="padding-bottom:10px;font-size: 12px;">Foil text.</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">Total</div>
    </td>
    <td width="110">
    <div style="padding-bottom:10px;font-size: 18px;">STUDIO</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">30/60 kg</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">Opc.</div>
    <div style="padding-bottom:10px;font-size: 12px;">Hule text.</div>
    <div style="padding-bottom:10px;font-size: 12px;">x</div>
    <div style="padding-bottom:10px;font-size: 12px;">Total</div>
    </td>
  </tr>
</table>
</div>
<div style="background-color:#F3F4F6; width:100%;" align="center">
<table width="760px" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <div style="background:url(media/images/03-catalogo/cocinas/Blum-TANDEMBOX-full-extension-drawers-with-ORGA-LINE-inner-dividing-systems-2.jpg); width:382px; height:430px;">
    <div style="position:relative; top:400px; background:rgba(0,0,0,0.5); width:350px; left:10px;"><center>Organizador de cajones Orgaline, de Blum</center>
    </div>
    </div>
    </td>
    <td  style="vertical-align:top; padding-top:30px; color:#000;">
    <div style="font-family:'Lato' !important; font-size:30px; font-weight:100; padding-bottom:10px;font-weight:300;padding-left:20px;">ORGANIZACIÓN</div>
    <div style="font-family:'LibreBaskerville Italic'; font-size:16px; padding-bottom:10px;padding-left:20px">Ordena tu espacio</div>
	<div style=" padding-left:20px;"><hr style="width:50px;" align="left" /></div>
    <div style="font-family:'Lato'; font-size: 12px; padding-bottom:20px;padding-left:20px">
        Mödul da prioridad al orden para que<br />
        vivas la tranquilidad de un espacio<br />
        armónico, sin importar su tamaño.<br />
        Tenemos en exclusiva para México<br />
        paquetes de organizadores para los<br />
        cajones de tu cocina o tus closets y<br />
        accesorios para acomodar los artículos<br />
        indispensables de uso diario.<br />
    </div>
    </td>
  </tr>
</table>
</div>
<hr align="right" style="width:80%"/>
<div style="width:100%; background-color:#fff; color:#000;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr width="100%">
    <td style="vertical-align:top; width:30%"><img src="media/images/03-catalogo/cocinas/equipo-de-cocina.jpg" style=" max-width:800px; min-width:200px;" width="100%" height="149" /> </td>
    <td style="vertical-align:top; width:30%">
    <img src="media/images/03-catalogo/cocinas/equipo-de-cocina-2.jpg" style="max-width:800px; min-width:200px;" width="100%" height="149" style="vertical-align:top;" /> 
    <div style="font-family:'Lato' !important; font-size:30px; font-weight:100; padding-bottom:10px;font-weight:300; padding-top:30px;">EQUIPOS DE COCINA</div>
    <div style="font-family:'LibreBaskerville Italic'; font-size:16px; padding-bottom:10px;">Llévate tu cocina completa</div>
	<hr style="width:50px;" align="left" />
    <div style="font-family:'Lato'; font-size: 12px; padding-bottom:20px; padding-right:40px;">
        Además de los muebles, cubiertas,
        jaladeras, accesorios de organización
        y el diseño personalizado para tu
        espacio, te ofrecemos campanas y
        electrodomésticos de las mejores
        marcas que complementan tu cocina
        para que la vivas al máximo.
    </div>
    </td>
    <td width="50%"><img src="media/images/03-catalogo/cocinas/campanas-modul.jpg" width="100%" height="541" /></td>
  </tr>
</table>
</div>
<div style="width:100%; background-image:url(media/images/03-catalogo/cocinas/fondo-melamina-up.jpg);">
<div style="font-family:'Lato'; font-size:30px; font-weight:310; color:#000; padding-top:20px; padding-left:400px;"><a style="color:#000; text-decoration:none;" href="glosario.php">+ GLOSARIO MÖDUL</a></div>
<div style="font-family:'LibreBaskerville Italic'; font-size:16px; padding-bottom:10px; color:#000;padding-left:400px;">Aprende sobre los términos utlizados</div>
<hr width="30%" align="left" />
<div style=" background-color:#fff; padding-top:100px; padding-right:400px;">
</div>
</div>
<div><img style=" position:relative; left:50%;"   src="media/images/03-catalogo/cocinas/cocinas-modul.jpg" width="426" height="314" /></div>

 <div id="five" style="width:100%; position:absolute">
 <table align="center"  style="width:100%">
 	<tr  style="width:100%">
    	<td  align="center" style="width:100%">
            <nav class="nav_menu" style="background: linear-gradient(to right, black 0%,black 50%,#000000 50%,rgba(0,0,0,0.01) 50%,rgba(0,0,0,0.01) 50%) 100%;border-bottom: 2px solid black; font-family:'Lato';">
              <a href="abre-tu-negocio.php" class="a_black2">FRANQUICIAS</a>
              <a class="a_black2">|</a>
              <a href="experimenta_la_calidad.php" class="a_black2">MODUL RECOMIENDA</a>
              <a class="a_black2">|</a>
              <a href="glosario.php" class="a_black2">GLOSARIO</a>
              <a href="visualiza_tu_cocina.php" class="a_yellow1">IMAGINA TU COCINA AQUÍ</a>
              <a href="un_cafe_con_modul.php" class="a_yellow2">UN CAFÉ CON MÖDUL </a>
            </nav>
        </td>
    </tr>
 </table>
</div>
</body>
<footer id="footer_top" style="background: #FFF; color:#000;">
<div align="center" style="width: 100%;color:#000;font-size:12px;">
<table  align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="text-align:center; padding-right:100px; font-family:'Lato';font-size:16px;">Mödul Studio © 2015. Todos los derechos reservados · Política de privacidad</td>
    <td style="font-family:'Lato'; font-size:16px;padding-right:30px;">POR</td>
    <td style="text-align:right;"><img src="media/images/MIQ-logo/MIQ-black.png" width="70" height="70" /></td>
  </tr>
</table>
</div>
</footer>
</html>