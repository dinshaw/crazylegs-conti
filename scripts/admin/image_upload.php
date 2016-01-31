<?


if ($_FILES[image]['name'] != ""){

	if($_FILES['image']['type'] != "image/gif" && $_FILES['image']['type'] != "image/jpg" && $_FILES['image']['type'] != "image/jpeg" && $_FILES['image']['type'] != "image/JPEG" && $_FILES['image']['type'] != "image/pjpeg"){
		echo $_FILES['image']['type'];
		$tpl->assign('errors',"Wrong type of file to upload.  It has to be a gif or a jpg.");
		$tpl->assign('title',$title);
		$tpl->assign('body',$body);
		$tpl->display('admin/pages/standard.tpl');
		exit;
	}
	elseif($_FILES['image']['size'] > '1048576')
	{
		$tpl->assign('errors',"That file was way too big.  Keep it under 1MB.");
		$tpl->assign('title',$title);
		$tpl->assign('body',$body);
		$tpl->display('admin/pages/standard.tpl');
		exit;

	}
	else
	{
	$modePath = '/'.$mode.'/';
	$imageName = $id."-".$_FILES[image]['name'];
	$dest = __CFG_Image_Path.$modePath.$imageName;
	storeImage('image',$dest);
	}

		$sql = "update $mode set image = '$imageName' where id = $id";
				mysqli_query($sql)or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
				$tpl->assign('image',$imageName);
				$size = getimagesize(__CFG_Image_Path.$mode.'/'.$imageName);
				if($size[0] > '300'){
					$tpl->assign('width','300');
				}
}
else
{
$sql = "select * from $mode order by id asc limit 1";
		$row = mysqli_query($sql)or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
		$result = mysqli_fetch_array($row);
		$title = $result['title'];
		$body = $result['body'];
		$image = $result['image'];
		$id = $result['id'];
		$tpl->assign('body',$body);
		$tpl->assign('title',$title);
		$tpl->assign('image',$image);
		$tpl->assign('id',$id);
		$size = getimagesize(__CFG_Image_Path.$mode.'/'.$image);
		if($size[0] > '300'){
			$tpl->assign('width','300');
		}
	}



?>
