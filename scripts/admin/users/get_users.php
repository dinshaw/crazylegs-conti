<?


if($_REQUEST['action'] == "search"){
	if($email = $_REQUEST['email']){
		$searchSql .= "where email like '%$email%'";
		$tpl->assign('email', $email);		
	}
	if($username = $_REQUEST['username']){
		if($searchSql){
			$searchSql .= " and ";
		}else{
			$searchSql = "where ";
		}
		$searchSql .= "username like '%$username%'";
		$tpl->assign('username', $username);
	}
	if($id = $_REQUEST['id']){
		if($searchSql){
			$searchSql .= " and ";
		}else{
			$searchSql = "where ";
		}
		$searchSql .= "id = '$id'";
		$tpl->assign('id', $id);	
	}
	if($status = $_REQUEST['status']){
		if($searchSql){
			$searchSql .= " and ";
		}else{
			$searchSql = "where ";
		}
		$searchSql .= "status = '$status'";
		$tpl->assign('status', $status);
	}
	if($_REQUEST['emailList'] != ""){
		$eamilList = $_REQUEST['emailList'];
		if($searchSql){
			$searchSql .= " and ";
		}else{
			$searchSql = "where ";
		}
		$searchSql .= "email_list = '$emailList'";
		$tpl->assign('emailList', $emailList);
	}
	$tpl->assign('search','1');
}

include "scripts/paging.php";

$sql = "select * from users $searchSql order by id asc LIMIT $start, $limit ";
$query = mysql_query($sql);

while($rows = mysql_fetch_array($query))
{
	$users = array();
	
	$users['id'] = $rows['id'];
	$users['username'] = $rows['username'];
	$users['email'] = $rows['email'];
	$users['status'] = $rows['status'];
	$users['email_list'] = $rows['email_list'];
	$users['dateTime'] = $rows['dateTime'];
	
	$usersList[] = $users;
}

//how many userson the email list?
$emailCountSql = "select count(*) from users where email_list = '1'";
$emailCountResult = mysql_query($emailCountSql);
$emailCountRow = mysql_fetch_array($emailCountResult, MYSQL_ASSOC);
$emailCount = $emailCountRow["count(*)"];

//assign loop and other stuff
$tpl->assign('emailCount', $emailCount);
$tpl->assign('usersLoop', $usersList);


?>