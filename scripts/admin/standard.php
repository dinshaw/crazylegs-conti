<?
//set error array
$errors = array(
'title' => "How about a title there buddy?\n",
'body' => "Would you like to write something this time?\n"
);
// end set errors

if($_POST['action'] == "archive" || $_POST['action'] == "active")
{
	$sql = "update $mode set status = '$action' where id = '$id'";
	mysql_query($sql)or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
	include 'scripts/admin/getAll.php';
	$tpl->display('admin/add_or_edit.tpl');
	exit;
}
elseif($_POST['action'] == "delete")
{
	$sql = "delete from $mode where id = '$id'";
	mysql_query($sql)or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
	include 'scripts/admin/getAll.php';
	$tpl->display('admin/add_or_edit.tpl');
	exit;
}
elseif($_POST['action'] == "edit")
{
	if ($_POST['errorCheckVar'] == "on")
	{
		// check errors	
		if (!$_POST['title'])
		{
			$error = $errors['title'];
		}
			
		if ($_POST['mode'] != "events")
		{
			if (!$_POST['body'])
			{
				$error.= $errors['body'];
			}
		}
				
		if ($error)
		//if errors do this
		{	
			$tpl->assign('errors',$error);
			$sql = "select * from $mode where id = '$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			
			$title = $row['title'];
			$body = $row['body'];
			$image = $row['image'];
		
			if ($image != "")
			{
				$size = getimagesize(__CFG_Image_Path.$mode.'/'.$image);
				if($size[0] > '300')
				{
					$tpl->assign('width','300');
				}
			}
						
			$tpl->assign('title',$title);
			$tpl->assign('body',$body);
			$tpl->assign('image',$image);
			$tpl->assign('id',$id);	
			
			$tpl->display('admin/pages/standard.tpl');	
			exit;
			// end check errors
		}
		else
		//if no errors do this
		{
			$title = addslashes($title);
			$body = addslashes($body);
			
			$sql = "update $mode set title = '$title', body = '$body' where id = '$id'";
			mysql_query($sql)or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
			
			include 'scripts/admin/image_upload.php';
						
			include 'scripts/admin/getAll.php';
			$tpl->display('admin/add_or_edit.tpl');
			exit;
		}
	}
	else
	// if no error check do this
	{
	$sql = "select * from $mode where id = '$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	$title = $row['title'];
	$body = $row['body'];
	$image = $row['image'];

	if ($image != "")
	{
		$size = getimagesize(__CFG_Image_Path.$mode.'/'.$image);
		if($size[0] > '300')
		{
			$tpl->assign('width','300');
		}
	}
	
	$tpl->assign('title',$title);
	$tpl->assign('body',$body);
	$tpl->assign('image',$image);
	$tpl->assign('id',$id);	
	
	$tpl->display('admin/pages/standard.tpl');	
	exit;
	}
}
elseif($_POST['action'] == "add")
{
	if ($_POST['errorCheckVar'] == "on")
	{
	
		// check errors	
		if (!$_POST['title'])
		{
			$error.= $errors['title'];
		}
			
		if ($_POST['mode'] != "events")
		{
			if (!$_POST['body'])
			{
				$error.= $errors['body'];
			}
		}
		
		if ($error)
		{	
			$tpl->assign('errors',$error);
			$tpl->assign('title',$title);
			$tpl->assign('body',$body);
			$tpl->display('admin/pages/standard.tpl');
			exit;
			// end check errors
		}
		else
		{
			
			$title = addslashes($title);
			$body = addslashes($body);
			
			$date = getdate();
			$date = $date[0];
			
			$sql = "insert into $mode (title, body, date, status) values ('$title', '$body', '$date', 'active')";
			mysql_query($sql)or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
			
			//get insert id if $id does not exsist
			if (!$_REQUEST['id'])
			{
				$id = mysql_insert_id();
			}
					
			include 'scripts/admin/image_upload.php';
		}
	}
	else
	{
	$tpl->display('admin/pages/standard.tpl');
	}
}
	
include 'scripts/admin/getAll.php';
$tpl->display('admin/add_or_edit.tpl');
exit;
