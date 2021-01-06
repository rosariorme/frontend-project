<?php
require( '/wordpress/wp-load.php' ); //ruta a wp-load.php
  // Asegurate que la ruta sea la correcta
  echo 'Ultimos post desde el Blog<br/>';
  echo '<ul>';
  $number = 6; // cantidad de entradas a mostrar
  $recent_posts = wp_get_recent_posts($number); // obtener los post por ID y ordenar de manera descendente
  
  foreach($recent_posts as $post)
  {
    echo '<li><a href="'.get_permalink($post['ID']).'">'.$post['post_title'].'</a> <p> '.$post['post_excerpt'].'</p> </li>';
  }
  echo '</ul>';
?>