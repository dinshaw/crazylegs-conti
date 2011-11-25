<?

$id = $_GET['id'];
$sql = "select * from events where id = '$id'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

$title = $row['title'];
$body = $row['body'];



$tpl->assign('body',$body);
$tpl->assign('title',$title);


  
?>
