<?php
$res=json_decode(file_get_contents('http://103.253.147.155:5000/search?key=asd&page=4'));
foreach ($res as $key) 
{
	echo "<a href=\"$key->url\">$key->title</a><br>";
}
?>