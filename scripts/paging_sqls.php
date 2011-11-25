<?

if($_REQUEST['mode'] == "users"){
	$sql = "select count(*) from users $searchSql";
}elseif($_REQUEST['mode'] == "accounts"){
	$sql = "select count(*) from adminlogin";
}

?>