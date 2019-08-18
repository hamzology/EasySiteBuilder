<?php
$query      = ( isset($_SERVER['QUERY_STRING']) ) ? $_SERVER['QUERY_STRING'] : NULL;
$request    = str_replace($relative, '', $_SERVER['REQUEST_URI']);
$request    = str_replace('?' .$query, '', $request);
$request    = explode('/', trim($request, '/'));
if(empty($request[0])) $request[0]='index';

require_once('include/config.php');
require_once('include/app.php');
$app=new RunApp($query,$request);
$app->build_page();
die($app->show_page());
?>