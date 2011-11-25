<?php /* Smarty version 2.6.3, created on 2005-03-20 21:00:31
         compiled from admin/email/preview_email.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'admin/email/preview_email.tpl', 1, false),)), $this); ?>
<!-- <?php echo 'admin/email/preview_email.tpl'; ?>
 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<tr><td>

<h1 align="center">Send an email</h1>


<table class="left" align="center">
<form action="admin.php" method="post">
<input type="hidden" name="mode" value="email">
	
	<tr>
		<td><strong>Subject:</strong><br /><?php echo $this->_tpl_vars['subject']; ?>
</td>
	</tr>
	<tr>
		<td><strong>Body HTML:</strong><br /><?php echo $this->_tpl_vars['html']; ?>
</td>
	</tr>
	<tr>
		<td><strong>Body Plain Text:</strong><br /><?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td><input type="submit" name="post" value="Send email"></td>
		<td><input type="submit" name="edit" value="Edit"></td>
	</tr>
</form>
</table>

</td></tr>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>