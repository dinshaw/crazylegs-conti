<?
//db_connect();
 $dbh=mysql_connect ("localhost", "crazyl3_crazyleg", "colemans") or die ('I cannot connect to the database because: ' . mysql_error());
 mysql_select_db ("crazyl3_crazyLegs");
 
 
$sql = "CREATE TABLE config(id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
name VARCHAR(255),
value VARCHAR(255),
description BLOB,
lastChange timestamp,
changeBy INT(11)
)";

mysql_query($sql)or die("Create table Error: ".mysql_error());


?>
