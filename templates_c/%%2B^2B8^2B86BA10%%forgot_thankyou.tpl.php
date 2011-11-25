<?php /* Smarty version 2.6.3, created on 2011-09-11 11:26:49
         compiled from admin/forgot_thankyou.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_header.tpl', 'smarty_include_vars' => array('title' => 'Admin Page')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<div align="center">
<h2>Thank you.</h2>
<h3>Your admin username and password have been sent to <?php echo $this->_tpl_vars['email']; ?>
.</h3>
<hr>
<form action="admin.php" method="post" name="adminLogin">
<p class='error'><?php echo $this->_tpl_vars['errors']; ?>
</p>
<p>Username: <input name="username" type="text" value="<?php echo $this->_tpl_vars['username']; ?>
" size="10"></p>
<p>Password: <input name="password" type="password" size="10"></p>
<p><input name="submit" type="submit" value="Login"></p>

</form>
<p class='forgot'>Forgot your username or password? <a href='admin.php?mode=forgot'>Click Here</a>.</p>
<hr>
<table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>