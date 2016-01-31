<?

$count = "select count(*) from $mode";
$countResult = mysqli_query($count);
$countRow = mysqli_fetch_array($countResult, MYSQL_ASSOC);
$count = $countRow["count(*)"];
$count--;

$sql = "select * from $mode order by id asc limit $count";
$result = mysqli_query($sql);

while ($row = mysqli_fetch_array($result)){
$archiveList = array();

$date = $row['date'];

$date=date("M j, Y",$date);

$archiveList['title'] = $row['title'];
$archiveList['id'] = $row['id'];

$archiveList['date'] = $date;

$archives[] = $archiveList;
}

$tpl->assign('archives',$archives);


?>
