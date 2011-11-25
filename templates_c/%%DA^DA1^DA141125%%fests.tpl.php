<?php /* Smarty version 2.6.3, created on 2004-10-11 17:19:26
         compiled from fests.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'fests.tpl', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<tr>
		<td width="300" valign="top" align="right">
	
<img src="userImages/<?php echo $this->_tpl_vars['mode']; ?>
/<?php echo $this->_tpl_vars['image']; ?>
" width="<?php echo $this->_tpl_vars['width']; ?>
">
	

		</td>
		<td valign="top">

<p id="title"><?php echo $this->_tpl_vars['title']; ?>
</p>

<p id="content"><?php echo ((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

		</td>
	</tr>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>