<?php
/*
Plugin Name: Filtro de Insultos
Plugin URI: http: null
Description: Plugin que filtra 5 palabras insultantes en los posts
Version: 1.0
Author: nombreGenericoLidierPinsaEnAlgoMejorJAJAsalu2
*/

function filtro_de_insultos($content) {
    // Array : Palabras insultantes que filtrar
    $insultos = array('puto', 'mongolico', 'puta', 'mongolica', 'gilipollas');

    // Reemplazar cada insulto por el carácter "#"
    $content = str_ireplace($insultos, '#', $content);

    return $content;
}

// Añadicion a the_content
add_filter('the_content', 'filtro_de_insultos');
?>