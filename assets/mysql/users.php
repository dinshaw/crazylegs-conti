<?
//db_connect();
 $dbh=mysql_connect ("localhost", "crazyl3_crazyleg", "colemans") or die ('I cannot connect to the database because: ' . mysql_error());
 mysql_select_db ("crazyl3_crazyLegs");
 
 
$sql = "CREATE TABLE users (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
username VARCHAR(255), 
password VARCHAR(255),
email VARCHAR(255),  
status INT(1),
email_list INT(1)
)";

mysql_query($sql)or die("Create table Error: ".mysql_error());
?>
