<?
require '../../includes/functions.php';

db_connect();
include '../../includes/get_config_vars.php';

$homePageUrl = __CFG_HomePageUrl;

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
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result);		
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
		$result = mysql_query($sql) or die(mysql_error());
		
		$id = mysql_insert_id();
		
		$text = "Hello $name,
		Thanks for signing up for the CrazyLegsConti.com email list.  We will update you about all the important eating events, Crazy Legs oriented stuff, and some parties too! 
		If you got this by mistake there are instructions at the bottom to get off.
		Eat all you can...
		-CLC
		$hamePage";
		$html = "Hello $name,<br />
		Thanks for signing up for the <a href='".__CFG_HomePage."'>CrazyLegsConti.com</a> email list.   We will update you about all the important eating events, Crazy Legs oriented stuff, and some parties too!<br />
		Eat all you can...<br />
		-CLC
		<br />
		<a href='".__CFG_HomePage."'>CrazyLegsConti.com</a><br />";
		
		$msg = "Thank you, your email address has been added to the list.";
		mail_multi_alt($email,"==1234wahsnid4321","Welcome to Crazy  Legs' list",$text,$html,$id);
		
		unset($name);
		unset($email);
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Crazy Legs Conti Email list - Sign-Up / Join</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../includes/clc.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="window.focus()">

<div id="content">

<div id="emailForm">

<p class="error" align="center"><? echo $msg; echo $error;?></p>

	<form action="email_iframe.php" method="post">
	<input type="hidden" name="mode" value="emailIframe">
	<input type="hidden" name="errorCheck" value="on">


	<table>
	 <tr>
		<td colspan="5" align="center">Join the email list!:</td>
	</tr>
	
	<tr>
		<td class="lbl">Name:</td>
		<td class="fld"><input name="name" type="text" value="<? echo $name ?>" id="email"></td>
		<td class="lbl">Email:</td>
		<td class="fld"><input name="email" type="text" value="<? echo $email ?>" id="email"></td>
		<td class="btn"><input name="submit" type="submit" value="Join Now" id="email"></td>
	 </tr>
	 <tr>
	 	<td colspan="5">This email list will send information about Crazy Legs and his appearances and events. You can <a href="<? echo $homePageUrl?>/index.php?mode=email&action=unsubscribe" target="_top">remove yourself</a> from our list at any time and we will never share or sell your information (<a href="#" onClick="window.open('<? echo $hamePageUrl ?>/index.php?mode=pp','<%$homePage%>&nbsp;Privacy&nbsp;Policy','width=550,height=600,scrollbars=yes,resizable=yes')">read our privacy policy</a>).</td>
	</tr>
	</table>
	
	
	</form>
		</div>
	</div>
 </BODY>
</HTML>