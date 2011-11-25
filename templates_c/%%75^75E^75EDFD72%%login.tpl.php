<?php /* Smarty version 2.6.3, created on 2004-10-11 16:20:24
         compiled from admin/login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_header.tpl', 'smarty_include_vars' => array('title' => 'Admin Page')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<div align="center">
<h1>Log into your ADMIN area here.</h1>
<hr>
<form action="admin.php" method="post" name="adminLogin">
<input type="hidden" name="mode" value="login">
<p class='error'><?php echo $this->_tpl_vars['errors']; ?>
</p>
<p>Username: <input name="username" type="text" value="<?php echo $this->_tpl_vars['username']; ?>
" size="10"></p>
<p>Password: <input name="password" type="password" size="10"></p>
<p><input name="submit" type="submit" value="Login"></p>

</form>
<p class='forgot'>Forgot your username or password? <a href='admin.php?mode=forgot'>Click Here</a>.</p>
<hr>
</div>
<table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>