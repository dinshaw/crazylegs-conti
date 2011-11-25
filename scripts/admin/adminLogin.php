<?

if ($_GET['mode'] == 'forgot' || $_POST['mode'] == 'forgot'){

	if (!$_POST['email']){
	
		if ($_POST['action']){
		$tpl->assign('errors','Please enter your email address.');
		}
	
	$tpl->display('admin/forgot.tpl');
	
	}else{

	$email = $_POST['email'];
	$sql = "select * from adminLogin where email = '$email'";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	$rows = mysql_fetch_array($result);
	$username = $rows['username'];
	$email = $rows['email'];
	$password = $rows['passwd'];
	
		if ($num < 1){
		$tpl->assign('errors','That email does not exsist in the admin database.');
		$tpl->display('admin/forgot.tpl');
		
		}else{
		
		$adminEmail = 'Hello,<br>
		Your admin username is: <b>$username.
		Your admin password is: <b>$password</b>
		<a href="__CFG_URL/admin.php">Click here to return to the Admin login area</a>.<br>
		Thanks,<br>
		__CFG_EMAIL_SIG';
		
		$adminHeaders .= "MIME-Version: 1.0\r\n";
		$adminHeaders .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$adminHeaders .= "From:FingerFunk <dinnshaw@finngerfunk.com>\r\n";
		$adminHeaders .= "Return-Path: dinshaw@fingerfunk.com\r\n";
	
		mail($email,'Your new admin password',$adminEmail,$adminHeaders);
	
		$tpl->assign('email',$email);
		$tpl->display('admin/forgot_thankyou.tpl');
		}
	}
}

if ($_GET['mode'] == 'login' || $_POST['mode'] == 'login'){

	if (!$_POST['username'] || !$_POST['password']){
	$tpl->assign('errors','Please enter your login details.');
	$tpl->display('admin/login.tpl');
	exit;
	
	}else{	
	
	$password = $_POST['password'];
	$username = $_POST['username'];
	
	$sql = "select * from adminLogin where username = '$username' and passwd = '$password'";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	
		if ($num < 1){
		$tpl->assign('errors','Login failed.');
		$tpl->display('admin/login.tpl');
		exit;
		
		}else{
		
		$_SESSION['cl_admin_ses'] = $username;
		$tpl->display('admin/pages/admin_home.tpl');
		}	
	}
}
else
{
$tpl->assign('errors','How about you login first?');
$tpl->display('admin/login.tpl');
}
	
	
	
?>
