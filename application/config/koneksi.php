<?php 
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','db_android');

$con = mysli_connect(HOST,USER,PASS,DB) or die('Unable to COnnect');
?>