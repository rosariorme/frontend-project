<script>
function param( name ){
	var regexS = "[\\?&]"+name+"=([^&#]*)";
	var regex = new RegExp ( regexS );
	var tmpURL = window.location.href;
	var results = regex.exec( tmpURL );
	if( results == null )
		return "";
	else
		return results[1];
}
var espacio = param('espacio');
var acabado = param('acabado');
var pared = param('pared');
var piso = param('piso');
var id = param('id');
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/gif" href="../media/images/animated_favicon1.gif" />
<meta property="og:title" content="Modul Imagina tu Cocina" />
<meta property="og:description" content="A que se parece tu cocina ideal? Visualizala: escoge sus elementos, diseno y acabados en esta aplicacion. Al terminar imprimela, guardala o compartela y envianosla para ponernos en contacto contigo y hacerla realidad." />
<meta property="og:image" content="http://192.185.138.124/~emil/modul/media/images/07-imagina-tu-cocina/muestras/<?php echo @$_GET['id'];?>.PNG" />
<link href="http://192.185.138.124/~emil/modul/media/images/07-imagina-tu-cocina/muestras/<?php echo @$_GET['id'];?>.PNG" rel="image_src" />
<script>
function facebook_compartir() {
//window.open('http://192.185.138.124/~emil/modul/visualiza_tu_cocina.php?espacio='+espacio+'&acabado='+acabado+'&pared='+pared+'&piso='+piso);
//window.open('http://192.185.138.124/~emil/modul/media/images/07-imagina-tu-cocina/muestras/'+id+'.PNG');
var f = encodeURIComponent('http://192.185.138.124/~emil/modul/visualiza_tu_cocina.php?espacio='+espacio+'&acabado='+acabado+'&pared='+pared+'&piso='+piso);
window.location.assign('http://www.facebook.com/sharer.php?s=100&p[url]='+f+'&p[title]="Imagina Tu Cocina Modul"&p[summary]="A que se parece tu cocina ideal? Visualizala: escoge sus elementos, diseño y acabados en esta aplicacion. Al terminar imprimela, guardala o compartela y envianosla para ponernos en contacto contigo y hacerla realidad"&p[images][0]="http://192.185.138.124/~emil/modul/media/images/07-imagina-tu-cocina/muestras/'+id+'_1.PNG"');
}
facebook_compartir();
</script>
</head>
<body>
</body>
</html>