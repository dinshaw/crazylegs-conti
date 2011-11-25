<?

require '../../includes/functions.php';

//db_connect();
 $dbh=mysql_connect ("localhost", "crazyl3_crazyleg", "colemans") or die ('I cannot connect to the database because: ' . mysql_error());
 mysql_select_db ("crazyl3_crazyLegs");
 
 
$sql = "create table adminLogin (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
username VARCHAR(255),
passwd VARCHAR(255),
email VARCHAR(255))
";



/*
$sql = "create table contact (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";



$sql = "create table home (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";


$sql = "create table fests (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";


$sql = "create table press (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";


$sql = "create table plate (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";



$sql = "create table movie (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";


$sql = "create table events (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
dateTime INT(11),
what VARCHAR(255),
location VARCHAR(255))


$sql = "create table popup (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
body VARCHAR(255),
status VARCHAR(255))
";
*/
mysql_query($sql)or die("Create table Error: ".mysql_error());


?>
