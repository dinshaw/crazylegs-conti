<?php /* Smarty version 2.6.3, created on 2005-03-20 20:51:16
         compiled from admin/email/post_email.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'admin/email/post_email.tpl', 1, false),)), $this); ?>
<!-- <?php echo 'admin/email/post_email.tpl'; ?>
 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr><td>

<h1 align="center">Send an email</h1>

<p class="error" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<table class="left" align="center">
<form action="admin.php" method="post">
<input type="hidden" name="mode" value="email">
	<tr>
		<td>Subject:<br /><input type="text" name="subject" value="<?php echo $this->_tpl_vars['subject']; ?>
" size="60"></td>
	</tr>
	
	<tr>
		<td>HTML Body:<br /><textarea name="html" rows="10" cols="57"><?php echo $this->_tpl_vars['html']; ?>
</textarea></td>
	</tr>
	<tr>
		<td>Plain Text Body:<br /><textarea name="text" rows="10" cols="57"><?php echo $this->_tpl_vars['text']; ?>
</textarea></td>
	</tr>
	<tr>
		<td><input type="submit" name="preview" value="Preview email"></td>
	</tr>
</form>
</table>

</td></tr>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>