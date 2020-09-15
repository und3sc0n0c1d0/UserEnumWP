#!/usr/bin/php
<?php

header ('Content-type: text/html; charset=UTF-8');
$payload="/wp-json/wp/v2/users/";
$urli = file_get_contents($argv[1].$payload);
$json = json_decode($urli, true);
$version = exec("curl -s $argv[1] | grep 'content=\"WordPress' | cut -d '\"' -f4");

echo "\n";
echo "╦ ╦┌─┐┌─┐┬─┐╔═╗┌┐┌┬ ┬┌┬┐╦ ╦╔═╗\n";
echo "║ ║└─┐├┤ ├┬┘║╣ ││││ ││││║║║╠═╝\n";
echo "╚═╝└─┘└─┘┴└─╚═╝┘└┘└─┘┴ ┴╚╩╝╩  \n";
echo "------------------------------\n";
echo "Username Enumeration WordPress\n";
echo "------------------------------\n";
echo "\n";
echo "Versión CMS: $version\n\n";
if($json){
foreach($json as $users){
	echo "Nombre: " .$users['name']."\n";
	echo "Usuario: " .$users['slug']."\n\n";}}
else{echo "No hay usuarios identificados\n\n";}

?>
