<?
//see if "Add / Edit" submit button was pressed on config.tpl
if($_POST['add_edit']){
	if(!$_POST['name'] || !$_POST['value'] || !$_POST['description']){
		$errors = "Please fill in all the fields";
	}else{
		$name = $_POST['name'];
		$sql = "select * from config where name = '$name'";
		$query = mysql_query($sql);
		$num = mysql_num_rows($query);
		if(!$_POST['id'] && $num >= 1){
			$errors = "That name is already in use.";
		}
	}
	if(!$errors){
		$id = $_POST['id'];
		$adminID = $_POST['adminID'];
		$name = $_POST['name'];
		$value = $_POST['value'];
		$description = $_POST['description'];
		$description = ereg_replace('"','&quot;',$description);
		
		if(!$id){
			$sql = "insert into config (name,value,description,changeBy) values ('$name','$value','$description','$adminID')";
			$query = mysql_query($sql);
			$tpl->assign('msg',$name.' was added to the config DB.');
		}else{
			$sql = "update config set name = '$name', value = '$value', description = '$description', changeBy = '$adminID' where id = '$id'";
			$query = mysql_query($sql);
			$tpl->assign('msg',$name.' was updated.');
		}
			
	}else{
		$tpl->assign('msg',$errors);
	}
}elseif($_POST['action'] == "delete"){
	$id = $_POST['id'];
	$sql = "delete from config where id = '$id'";
	$query = mysql_query($sql);
}elseif($_POST['action'] == "edit"){
	$id = $_POST['id'];
	$sql = "select * from config where id = '$id'";
	$query = mysql_query($sql);
	$row = mysql_fetch_array($query);
	
	$name = $row['name'];
	$value = $row['value'];
	$description = $row['description'];
	
	$tpl->assign('id',$id);
	$tpl->assign('name',$name);
	$tpl->assign('value',$value);
	$tpl->assign('description',$description);
}
	
	
		
include 'scripts/admin/config/get_config.php';
$tpl->display('admin/config/config.tpl');
?>

