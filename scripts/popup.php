<?php

$id = $_GET['id'];
$sql = "select * from popup where id = 1";
$result = mysqli_query($sql);
$row = mysqli_fetch_array($result);

$popupTitle = $row['title'];
$popupBody = $row['body'];
$popupStatus = $row['status'];

$tpl->assign('popupTitle',$popupTitle);
$tpl->assign('popupBody',$popupBody);
$tpl->assign('popupStatus',$popupStatus);

//echo $popupStatus;

?>
