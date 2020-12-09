<?php
define('MODULO_DEFECTO', 'home');
define('LAYOUT_DEFECTO', 'layout.php');
define('MODULO_PATH', realpath('./modulos/'));
define('LAYOUT_PATH', realpath('./layouts/'));

$conf['home'] = array(
		'archivo' => 'home.php',
		'titulo'=>'HOME',
		'layout' => LAYOUT_DEFECTO); 
$conf['nosotros'] = array(
		'archivo' => 'nosotros.php',
		'titulo'=>'NOSOTROS',
		'layout' => LAYOUT_DEFECTO);  
$conf['consultas'] = array(
		'archivo' => 'consultas.php',
		'titulo'=>'CONSULTAS',
		'layout' => LAYOUT_DEFECTO); 
$conf['contacto'] = array(
		'archivo' => 'contacto.php',
		'titulo'=>'CONTACTO',
		'layout' => LAYOUT_DEFECTO);  
?>
