<?
//set error array
$errors = array(
'title' => "How about a title there buddy?\n",
'body' => "Would you like to write something this time?\n"
);
// end set errors

if ($_POST['errorCheck'] == "on"){

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
		$tpl->display('admin/pages/standard.tpl');
		exit;
		// end check errors

	}else{
		//decide weather to update ir insert
		if ($_POST['action'] == "add"){
		$sql = "insert into plate (title, body, image) values ('$title, $body, $image)";
		}
		else
		{
		$sql = "update plate set title = '$title', body = '$body', image = '$image'";
		}

	mysqli_query($sql)or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());

	}
}
else
{
	$tpl->display('admin/pages/standard.tpl');
	exit;
}



