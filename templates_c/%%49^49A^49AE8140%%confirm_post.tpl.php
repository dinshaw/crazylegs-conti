<?php /* Smarty version 2.6.3, created on 2005-03-20 21:06:07
         compiled from admin/email/confirm_post.tpl */ ?>
<!-- <?php echo 'admin/email/confirm_post.tpl'; ?>
 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_header.tpl', 'smarty_include_vars' => array('title' => 'Admin Page')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr><td>
<?php if ($this->_tpl_vars['error']): ?><p id="error"><?php echo $this->_tpl_vars['error'];  else: ?><h1 align="center">SUCCESS!</h1><?php endif; ?>
<h1>Your email has been posted to <?php echo $this->_tpl_vars['count']; ?>
 members.</h1>
</td></tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>