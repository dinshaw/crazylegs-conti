<?


//set error array
$errors = array(
'title' => "How about a title there buddy?\n",
'body' => "Would you like to write something this time?\n"
);


// end set errors

if ($_POST['errorCheckVar'] == "on"){

	// check errors	
	if (!$_POST['title']){
		$error.= $errors['title'];
		}
		
	if (!$_POST['body']){
		$error.= $errors['body'];
		}
	
	if ($error){
		
		$tpl->assign('errors',$error);
		$tpl->assign('title',$title);
		$tpl->assign('body',$body);
		$tpl->display('admin/pages/popup.tpl');
		exit;
		// end check errors
		
	}else{
	
		$title = addslashes($title);
		$body = addslashes($body);
		
		$sql = "update popup set title = '$title', body = '$body', status = '$status' where id = 1";

	
	mysql_query($sql)or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());

	}
	$tpl->display('admin/pages/popup.tpl');
	exit;
}
else
{

	$sql = "select * from popup where id = 1";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$title = $row['title'];
	$body = $row['body'];
	$status = $row['status'];
	
	$tpl->assign('title',$title);
	$tpl->assign('body',$body);
	$tpl->assign('status',$status);
	$tpl->display('admin/pages/popup.tpl');
	exit;
}



