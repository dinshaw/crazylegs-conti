<?php /* Smarty version 2.6.3, created on 2004-11-08 08:51:59
         compiled from eventPopup.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'eventPopup.tpl', 1, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/clc.css" rel="stylesheet" type="text/css">
</head>

<body>
<table align="center" border="0">
	<tr>
		<td align="center">

<img id="popup" src="templates/images/popup/events.jpg">
<p id="bold"><?php echo $this->_tpl_vars['title']; ?>
</p>

<div id="eventsPopup">
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

</div>
		</td>
	</tr>
</table>


</body>
</html>