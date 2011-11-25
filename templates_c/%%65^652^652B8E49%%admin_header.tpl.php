<?php /* Smarty version 2.6.3, created on 2005-03-20 20:49:25
         compiled from admin/admin_header.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Crazy Legs Conti: Zen and the Art of Competitive Eating</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="includes/clc.css" rel="stylesheet" type="text/css">
<script src="includes/clc.js" language="javascript" type="text/javascript"></script>

</head>

<body bgcolor="#009933">
	
<table align="center" border="0" cellpadding="5" cellspacing="0">
        <tr>
          <td align="center" colspan="3"><img src="templates/images/header/clcHead.gif"></td>
</tr>
<tr align="center">
<td colspan="3" id="nav" align="center">


<!-- Trailer | About Crazy Legs | Upcoming Events | News | Links | Photos  | Contact--> 
<?php if ($this->_tpl_vars['mode'] != 'home'): ?> <a href="admin.php?mode=home">Home</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'press'): ?> <a href="admin.php?mode=press">Crazy Legs Press</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'plate'): ?> <a href="admin.php?mode=plate">This Month ON THE PLATE</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'contact'): ?> <a href="admin.php?mode=contact&action=edit">Contact</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'fests'): ?> <a href="admin.php?mode=screenings">Screenings</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'events'): ?> <a href="admin.php?mode=events">Events</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'popup'): ?> <a href="admin.php?mode=popup">Pop-Up</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'movie'): ?> <a href="admin.php?mode=movie">About The Movie</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'config'): ?> <a href="admin.php?mode=config">Config Vars</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'users'): ?> <a href="admin.php?mode=users">Users</a> |<?php endif;  if ($this->_tpl_vars['mode'] != 'post'): ?> <a href="admin.php?mode=email">Post Email</a> |<?php endif; ?>
</td></tr>