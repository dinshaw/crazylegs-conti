<?

$count = "select count(*) from $mode";
$countResult = mysql_query($count);
$countRow = mysql_fetch_array($countResult, MYSQL_ASSOC);
$count = $countRow["count(*)"];
$count--;

$sql = "select * from $mode order by id asc limit $count";
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)){
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
