<?php
$config['sitename']="EasySiteBuilder";
$config['siteurl']="https://filesjar.serverlin.com/";

$config['theme']="basic";
$config['default_lang']="eng";
$config['fallback_lang']="eng";



$config['theme_dir']="themes/";


require_once('lang/'.$config['fallback_lang'].'.php');
require_once('themes/'.$config['theme'].'/theme_config.php');
require_once('modules/HtmlMinify/minify.php');

?>