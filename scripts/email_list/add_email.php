<?php
if($_POST['errorCheck'] =="on"){
	$errors = array(
	'email' => "Enter your email address.\n",
	'validEmail' => "That does not appear to be a valid email address.\n",
	'emailDouble' => "That email address is already in our database.\n"
	);

	if (!$_POST['email'])
	{
		$error .= $errors['email'];
	}
	else
	{
		$goodEmail = valid_email($_POST['email']);
		if (!$goodEmail)
		{
			$error .= $errors['validEmail'];
		}

		$email = $_POST['email'];
		$name = $_POST['name'];

		$sql = "select * from users where email = '$email'";
		$result = mysqli_query($sql);
		$rows = mysqli_fetch_array($result);
		$listStatus = $rows['email_list'];
		$id = $rows['id'];

		if (mysql_num_rows($result)>0)
		{
			//are they already getting the email? If so, show the found double msg
			if($listStatus == '1'){
				unset($email);
				$error .= $errors['emailDouble'];
			}
		}
	}

	if (!$error)
	{
		$sql = "insert into users (username, email, status, email_list, dateTime) values ('$name', '$email','0','1',NOW())";
		$result = mysqli_query($sql);

		$id = mysql_insert_id() or die (mysql_error());

		$text = "Hello $name,
		Thanks for signing up for the DINSHAW.us email list.  You are officially dialed in  now so sit back and enjoy the whatever....
		If you got this by mistake there are instructions at the bottom to get off.
		-Uncle Din
		http://www.dinshaw.us";
		$html = "Hello $name,<br />
		Thanks for signing up for the <a href='http://www.dinshaw.us'>DINSHAW.us</a> email list.  You are officially dialed in now so sit back and enjoy the whatever....<br />
		If you got this by mistake there are instructions at the bottom to get off.<br />
		-Uncle Din<br />
		<a href=''http://www.dinshaw.us'>DINSHAW.us</a><br />";

		$msg = "Thank you, your email address has been added to the list.";
		mail_multi_alt($email,"==1234wahsnid4321","Welcome to the party!",$text,$html,$id);

		unset($name);
		unset($email);

		$tpl->assign('error',$msg);
	}else{
		$tpl->assign('error',$error);
	}
}


?>
