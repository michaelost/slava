<?php


header('Content-Type: application/json');
 $db = mysql_connect ("localhost","root","123qweasdzxcv");
 mysql_select_db("slava",$db);
$query = 'SELECT * FROM users';
$res  = mysql_query($query,$db);
$result = mysql_fetch_array($res,MYSQL_ASSOC);
echo "result";
?>