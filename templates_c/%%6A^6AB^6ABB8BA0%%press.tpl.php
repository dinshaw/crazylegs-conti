<?php /* Smarty version 2.6.3, created on 2004-10-11 16:16:14
         compiled from press.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'press.tpl', 1, false),)), $this); ?>
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


<?php unset($this->_sections['archiveLoop']);
$this->_sections['archiveLoop']['name'] = 'archiveLoop';
$this->_sections['archiveLoop']['loop'] = is_array($_loop=$this->_tpl_vars['archives']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['archiveLoop']['show'] = true;
$this->_sections['archiveLoop']['max'] = $this->_sections['archiveLoop']['loop'];
$this->_sections['archiveLoop']['step'] = 1;
$this->_sections['archiveLoop']['start'] = $this->_sections['archiveLoop']['step'] > 0 ? 0 : $this->_sections['archiveLoop']['loop']-1;
if ($this->_sections['archiveLoop']['show']) {
    $this->_sections['archiveLoop']['total'] = $this->_sections['archiveLoop']['loop'];
    if ($this->_sections['archiveLoop']['total'] == 0)
        $this->_sections['archiveLoop']['show'] = false;
} else
    $this->_sections['archiveLoop']['total'] = 0;
if ($this->_sections['archiveLoop']['show']):

            for ($this->_sections['archiveLoop']['index'] = $this->_sections['archiveLoop']['start'], $this->_sections['archiveLoop']['iteration'] = 1;
                 $this->_sections['archiveLoop']['iteration'] <= $this->_sections['archiveLoop']['total'];
                 $this->_sections['archiveLoop']['index'] += $this->_sections['archiveLoop']['step'], $this->_sections['archiveLoop']['iteration']++):
$this->_sections['archiveLoop']['rownum'] = $this->_sections['archiveLoop']['iteration'];
$this->_sections['archiveLoop']['index_prev'] = $this->_sections['archiveLoop']['index'] - $this->_sections['archiveLoop']['step'];
$this->_sections['archiveLoop']['index_next'] = $this->_sections['archiveLoop']['index'] + $this->_sections['archiveLoop']['step'];
$this->_sections['archiveLoop']['first']      = ($this->_sections['archiveLoop']['iteration'] == 1);
$this->_sections['archiveLoop']['last']       = ($this->_sections['archiveLoop']['iteration'] == $this->_sections['archiveLoop']['total']);
?>
				<p id="bold"><a href="<?php echo $this->_tpl_vars['mode']; ?>
.php?id=<?php echo $this->_tpl_vars['archives'][$this->_sections['archiveLoop']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['archives'][$this->_sections['archiveLoop']['index']]['title']; ?>
</a> - <span id="xsmall"><?php echo $this->_tpl_vars['archives'][$this->_sections['archiveLoop']['index']]['date']; ?>
</span></p>
				<?php endfor; endif; ?>
	
<p id="xsmall">&copy;2004 REUTERS.</p>

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