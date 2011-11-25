<?php /* Smarty version 2.6.3, created on 2004-11-09 18:03:31
         compiled from standard.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'standard.tpl', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- templates/standard.tpl -->
<?php unset($this->_sections['standardList']);
$this->_sections['standardList']['name'] = 'standardList';
$this->_sections['standardList']['loop'] = is_array($_loop=$this->_tpl_vars['standardLoop']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['standardList']['show'] = true;
$this->_sections['standardList']['max'] = $this->_sections['standardList']['loop'];
$this->_sections['standardList']['step'] = 1;
$this->_sections['standardList']['start'] = $this->_sections['standardList']['step'] > 0 ? 0 : $this->_sections['standardList']['loop']-1;
if ($this->_sections['standardList']['show']) {
    $this->_sections['standardList']['total'] = $this->_sections['standardList']['loop'];
    if ($this->_sections['standardList']['total'] == 0)
        $this->_sections['standardList']['show'] = false;
} else
    $this->_sections['standardList']['total'] = 0;
if ($this->_sections['standardList']['show']):

            for ($this->_sections['standardList']['index'] = $this->_sections['standardList']['start'], $this->_sections['standardList']['iteration'] = 1;
                 $this->_sections['standardList']['iteration'] <= $this->_sections['standardList']['total'];
                 $this->_sections['standardList']['index'] += $this->_sections['standardList']['step'], $this->_sections['standardList']['iteration']++):
$this->_sections['standardList']['rownum'] = $this->_sections['standardList']['iteration'];
$this->_sections['standardList']['index_prev'] = $this->_sections['standardList']['index'] - $this->_sections['standardList']['step'];
$this->_sections['standardList']['index_next'] = $this->_sections['standardList']['index'] + $this->_sections['standardList']['step'];
$this->_sections['standardList']['first']      = ($this->_sections['standardList']['iteration'] == 1);
$this->_sections['standardList']['last']       = ($this->_sections['standardList']['iteration'] == $this->_sections['standardList']['total']);
?>
	<tr>
		<td width="300" valign="top" align="right">
	
<?php if ($this->_tpl_vars['standardLoop'][$this->_sections['standardList']['index']]['image']): ?> <img src="/userImages/<?php echo $this->_tpl_vars['mode']; ?>
/<?php echo $this->_tpl_vars['standardLoop'][$this->_sections['standardList']['index']]['image']; ?>
"<?php if ($this->_tpl_vars['standardLoop'][$this->_sections['standardList']['index']]['size']): ?> width="<?php echo $this->_tpl_vars['standardLoop'][$this->_sections['standardList']['index']]['size']; ?>
"<?php endif; ?> ><?php endif; ?>

		</td>
		<td valign="top">

<p id="title"><?php echo $this->_tpl_vars['standardLoop'][$this->_sections['standardList']['index']]['title']; ?>
</p>

<p id="content"><?php echo ((is_array($_tmp=$this->_tpl_vars['standardLoop'][$this->_sections['standardList']['index']]['body'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

		</td>
	</tr>
	<tr>
		<td colspan="2"><hr size="1" color="#ffffff" width="50%"></td>
<?php endfor; endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>