<?
if($_REQUEST['action'] == "unsubscribe"){

	if($_REQUEST['id']){
		$id = $_REQUEST['id'];
		$sql ="select * from users where id = '$id'";
		$query = mysqli_query($sql);
		$rows = mysqli_fetch_array($query);
		$removeEmail = $rows['email'];
		$sql = "delete from users where id = '$id'";
		$msg = "The email $removeEmail has been removed from the database.";
		$query = mysqli_query($sql);
		$tpl->assign('error',$msg);
		$tpl->assign('removeEmail',$removeEmail);
		$tpl->display('email_list/unsubscribe_confirm.tpl');
	}elseif($_REQUEST['removeEmail']){
		$removeEmail = $_REQUEST['removeEmail'];
		$sql ="select * from users where email = '$removeEmail'";
		$query = mysqli_query($sql);
		$rows = mysqli_fetch_array($query);
		$num = mysql_num_rows($query);
		if($num>=1){
			$id = $rows['id'];
			$sql = "delete from users where id = '$id'";
			$msg = "The email $removeEmail has been removed from the database.";
			$query = mysqli_query($sql);
			$tpl->assign('error',$msg);
			$tpl->assign('removeEmail',$removeEmail);
			$tpl->display('email_list/unsubscribe_confirm.tpl');
		}else{
			$tpl->assign('error','That email is not in our database.
			It may have been removed already or you may have typed it wrong.');
			$tpl->display('email_list/unsubscribe_noid.tpl');
		}
	}else{
		$tpl->display('email_list/unsubscribe_noid.tpl');
	}
}
?>
