<?php

require '../../includes/functions.php';

$mysqli = new mysqli("localhost", "root", "", "crazyl3_crazylegs");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
  echo 'connected';
}


$sql = "create table adminLogin (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
username VARCHAR(255),
passwd VARCHAR(255),
email VARCHAR(255))
";

$res = $mysqli->query($sql);


$sql = "create table contact (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";

$res = $mysqli->query($sql);

$sql = "create table home (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";

$res = $mysqli->query($sql);

$sql = "create table fests (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";
$res = $mysqli->query($sql);

$sql = "create table press (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";

$res = $mysqli->query($sql);
$sql = "create table plate (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255))
";

$res = $mysqli->query($sql);

$sql = "create table movie (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
date INT(11),
body BLOB,
image VARCHAR(255)) ";
$res = $mysqli->query($sql);

$sql = "create table events (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
dateTime INT(11),
what VARCHAR(255),
location VARCHAR(255))";
$res = $mysqli->query($sql);

$sql = "create table popup (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
title VARCHAR(255),
body VARCHAR(255),
status VARCHAR(255))";
$res = $mysqli->query($sql);

 ?>
