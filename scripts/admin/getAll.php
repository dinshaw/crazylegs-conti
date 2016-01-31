<?
$sql = "select * from $mode order by id desc";
$result = mysqli_query($sql);

while($row = mysqli_fetch_array($result))
{
	$standardList = array();

	$date = $row['date'];

	$date=date("M j, Y",$date);

	$standardList['title'] = $row['title'];

	$standardList['id'] = $row['id'];

	$standardList['date'] = $date;

	$standardList['status'] = $row['status'];

	$standard[] = $standardList;
}

$tpl->assign('standardList',$standard);
?>
