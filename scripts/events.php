<?php

$sql = "select * from events where status = 'active' order by id desc";
$result = mysqli_query($sql);

// do event list
if($result)
{
	while ($row = mysqli_fetch_array($result)){
	$eventList = array();

	$eventList['title'] = $row['title'];
	$eventList['id'] = $row['id'];
	$eventList['body'] = $row['body'];

	$eventList['date'] = $row['date'];

	$events[] = $eventList;
	}
}

$tpl->assign('events',$events);

?>
