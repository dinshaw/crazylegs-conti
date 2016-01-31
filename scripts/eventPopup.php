<?

$id = $_GET['id'];
$sql = "select * from events where id = '$id'";
$result = mysqli_query($sql);
$row = mysqli_fetch_array($result);

$title = $row['title'];
$body = $row['body'];



$tpl->assign('body',$body);
$tpl->assign('title',$title);



?>
