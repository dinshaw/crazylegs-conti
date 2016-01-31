<?
/////set error array
/*
$errors = array(
'title' => "Enter a title dummy?\n",
'what' => "Enter a title dummy?\n",
'month' => "OK, but what month?\n",
'day' => "Care to tell the people which day?\n",
'year' => "YEAR!?\n",
'when' => "When?\n",
'where' => "Where the hell is it???\n"
);
// end set errors

if ($_POST['errorCheckVar'] == "on"){

	// check errors
	if (!$_POST['title']){
		$error.= $errors['title'];
		}

	if ($_POST['hour'] == 'hour' || $_POST['minute'] == 'minute'){
		$error.= $errors['when'];
		}

	if ($_POST['day'] == "day"){
		$error.= $errors['day'];
		}

	if ($_POST['month'] == "month"){
		$error.= $errors['month'];
		}
	if ($_POST['year'] == "year"){
		$error.= $errors['year'];
		}

	if ($error){

		$tpl->assign('error',$error);
		$tpl->assign('title',$title);
		$tpl->assign('where',$where);
		$tpl->assign('what',$what);
		$tpl->assign('month',$month);
		$tpl->assign('day',$day);
		$tpl->assign('hour',$hour);
		$tpl->assign('min',$min);

		$tpl->display('admin/pages/events.tpl');
		exit;
		// end check errors

	}
	else
	{
	*/
		$title = addslashes($title);
		$location = addslashes($location);
		$what = addslashes($what);

		// make timestamp
		$date = mktime($hour, $min, 00, $month, $day, $year);

		//decide weather to update ir insert
		if ($_POST['action'] == "add")
		{
			$sql = "insert into events (title, location, what, date, status) values ('$title', '$location', '$what', '$date', 'active')";
		}
		elseif ($_POST['action'] == "edit")
		{
		//edit event

		}
		elseif ($_POST['action'] == "delete")
		{
		$sql = "delete from events where id = '$id'";
		}

	mysqli_query($sql)or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());

	include 'scripts/admin/getAll.php';
	$tpl->display('admin/add_or_edit.tpl');
	exit;
	/*}*/
}
else
{
	$tpl->display('admin/pages/events.tpl');
	exit;
}



