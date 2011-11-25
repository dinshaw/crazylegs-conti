<?php /* Smarty version 2.6.3, created on 2009-03-17 12:36:54
         compiled from admin/forgot.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_header.tpl', 'smarty_include_vars' => array('title' => 'Admin Page')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<div align="center">
<h3>Enter your email address here and we will send you your username and password.</h3>
<hr>
<p class='error'><?php echo $this->_tpl_vars['errors']; ?>
</p>
<form action="admin.php" method="post" name="adminLogin">
<input type="hidden" name="mode" value="forgot">
<input type="hidden" name="action" value="forgot">

<p>Email address: <input name="email" type="text" value="<?php echo $this->_tpl_vars['email']; ?>
" size="30"></p>
<p><input name="submit" type="submit" value="Get new password."></p>
</form>
<hr>
<table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>