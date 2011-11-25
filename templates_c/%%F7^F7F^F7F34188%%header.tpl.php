<?php /* Smarty version 2.6.3, created on 2005-03-19 09:42:15
         compiled from header.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Crazy Legs Conti: Zen and the Art of Competitive Eating</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="includes/clc.css" rel="stylesheet" type="text/css">
<script src="includes/clc.js" language="javascript" type="text/javascript"></script>

</head>

<body bgcolor="#009933"  <?php if ($this->_tpl_vars['mode'] == 'home' && $this->_tpl_vars['popupStatus'] == 'on'): ?>onLoad="doPopup()"<?php endif; ?> >
	
<table align="center">
	<tr>
		<td colspan="2" align="center">
		<img src="templates/images/header/clcHead.gif">
<div id="nav">
<?php if ($this->_tpl_vars['mode'] != 'home'): ?><a href="index.php">Home</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'press'): ?> <a href="press.php">Crazy Legs Press</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'plate'): ?> <a href="plate.php">This Month ON THE PLATE</a> |<?php endif; ?> <?php if ($this->_tpl_vars['mode'] != 'movie'): ?><a href="movie.php">About the Movie</a> |<?php endif; ?> <?php if ($this->_tpl_vars['mode'] != 'contact'): ?><a href="contact.php">Contact</a> |<?php endif; ?> <?php if ($this->_tpl_vars['mode'] != 'filmMakers'): ?><a href="filmMakers.php">About the Filmmakers</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'screenings'): ?>  <a href="screenings.php">Screenings</a><?php endif; ?> | <?php if ($this->_tpl_vars['mode'] != 'press'): ?> <a href="#emailList">Join the email list</a><?php endif; ?></b>
</div>
</td></tr>