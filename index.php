<?php
error_reporting(E_ALL);
include('conf.php');

if(!empty($_GET['id']))
	$modulo=$_GET['id'];
else
	$modulo=MODULO_DEFECTO;

if(empty($conf[$modulo]))
		$modulo=MODULO_DEFECTO;

if(empty($conf[$modulo]['layout']))
	$conf[$modulo]['layout']=LAYOUT_DEFECTO;

$titulo = $conf[$modulo]['titulo'];

$path_layout=LAYOUT_PATH.'/'.$conf[$modulo]['layout'];
$path_modulo=MODULO_PATH.'/'.$conf[$modulo]['archivo'];

if(file_exists($path_layout))
	include($path_layout);
else
	if(file_exists($path_modulo))
		include($path_modulo);
	else
		die('ERROR al cargar el modulo <b>'.$modulo.'</b> No existe el archivo <b>'.$conf[$modulo]['archivo'].'</b>');

?>