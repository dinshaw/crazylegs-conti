<?php /* Smarty version 2.6.3, created on 2004-11-08 08:44:38
         compiled from admin/add_or_edit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<div align="center">
<p>Please choose an  option:</p>
<p><form action="admin.php" method="post">
<input type="hidden" name="action" value="add">
<input type="hidden" name="mode" value="<?php echo $this->_tpl_vars['mode']; ?>
">
<input type="submit" name="submit" value="Add <?php echo $this->_tpl_vars['mode']; ?>
">
</form></p>
<p>



<?php unset($this->_sections['standardLoop']);
$this->_sections['standardLoop']['name'] = 'standardLoop';
$this->_sections['standardLoop']['loop'] = is_array($_loop=$this->_tpl_vars['standardList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['standardLoop']['show'] = true;
$this->_sections['standardLoop']['max'] = $this->_sections['standardLoop']['loop'];
$this->_sections['standardLoop']['step'] = 1;
$this->_sections['standardLoop']['start'] = $this->_sections['standardLoop']['step'] > 0 ? 0 : $this->_sections['standardLoop']['loop']-1;
if ($this->_sections['standardLoop']['show']) {
    $this->_sections['standardLoop']['total'] = $this->_sections['standardLoop']['loop'];
    if ($this->_sections['standardLoop']['total'] == 0)
        $this->_sections['standardLoop']['show'] = false;
} else
    $this->_sections['standardLoop']['total'] = 0;
if ($this->_sections['standardLoop']['show']):

            for ($this->_sections['standardLoop']['index'] = $this->_sections['standardLoop']['start'], $this->_sections['standardLoop']['iteration'] = 1;
                 $this->_sections['standardLoop']['iteration'] <= $this->_sections['standardLoop']['total'];
                 $this->_sections['standardLoop']['index'] += $this->_sections['standardLoop']['step'], $this->_sections['standardLoop']['iteration']++):
$this->_sections['standardLoop']['rownum'] = $this->_sections['standardLoop']['iteration'];
$this->_sections['standardLoop']['index_prev'] = $this->_sections['standardLoop']['index'] - $this->_sections['standardLoop']['step'];
$this->_sections['standardLoop']['index_next'] = $this->_sections['standardLoop']['index'] + $this->_sections['standardLoop']['step'];
$this->_sections['standardLoop']['first']      = ($this->_sections['standardLoop']['iteration'] == 1);
$this->_sections['standardLoop']['last']       = ($this->_sections['standardLoop']['iteration'] == $this->_sections['standardLoop']['total']);
?>
<form action="admin.php" method="post">
<input type="hidden" name="mode" value="<?php echo $this->_tpl_vars['mode']; ?>
">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['standardList'][$this->_sections['standardLoop']['index']]['id']; ?>
">
<p>
				<p id="bold"><font color="#000000"><?php echo $this->_tpl_vars['standardList'][$this->_sections['standardLoop']['index']]['status']; ?>
</font> | <?php echo $this->_tpl_vars['standardList'][$this->_sections['standardLoop']['index']]['title']; ?>
 <?php if ($this->_tpl_vars['mode'] != 'events'): ?>- <?php echo $this->_tpl_vars['standardList'][$this->_sections['standardLoop']['index']]['date'];  endif; ?></span>
				<select name="action">
<option value="edit">Edit</option>
<option value="active">Activate</option>
<option value="archive">Archive</option>
<option value="delete">Delete</option>
</select>
				<input type="submit" name="submit" value="Do it"></p>
				<hr width="50%">
</form>
				<?php endfor; endif; ?>
</div>
<table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>