<?php /* Smarty version 2.6.3, created on 2005-03-20 20:47:02
         compiled from admin/config/config.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/config/config.tpl', 1, false),array('modifier', 'nl2br', 'admin/config/config.tpl', 1, false),array('modifier', 'capitalize', 'admin/config/config.tpl', 1, false),)), $this); ?>
<!-- <?php echo 'admin/config/config.tpl'; ?>
 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_header.tpl", 'smarty_include_vars' => array('title' => "DINSHAW - Original Blues-Rock band in New York City")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr>
<td>

<h1>Configuration Parameters</h1>

<table class="form">
	<tr>
		<th>Last modified</th>
		<th>Modified by</th>
		<th>Name</th>
		<th>Value</th>
		<th>Description</th>
		<th>ID#</th>
		<th>Action</th>
		<th>Submit</th>
	</tr>
<?php unset($this->_sections['configList']);
$this->_sections['configList']['name'] = 'configList';
$this->_sections['configList']['loop'] = is_array($_loop=$this->_tpl_vars['configLoop']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['configList']['show'] = true;
$this->_sections['configList']['max'] = $this->_sections['configList']['loop'];
$this->_sections['configList']['step'] = 1;
$this->_sections['configList']['start'] = $this->_sections['configList']['step'] > 0 ? 0 : $this->_sections['configList']['loop']-1;
if ($this->_sections['configList']['show']) {
    $this->_sections['configList']['total'] = $this->_sections['configList']['loop'];
    if ($this->_sections['configList']['total'] == 0)
        $this->_sections['configList']['show'] = false;
} else
    $this->_sections['configList']['total'] = 0;
if ($this->_sections['configList']['show']):

            for ($this->_sections['configList']['index'] = $this->_sections['configList']['start'], $this->_sections['configList']['iteration'] = 1;
                 $this->_sections['configList']['iteration'] <= $this->_sections['configList']['total'];
                 $this->_sections['configList']['index'] += $this->_sections['configList']['step'], $this->_sections['configList']['iteration']++):
$this->_sections['configList']['rownum'] = $this->_sections['configList']['iteration'];
$this->_sections['configList']['index_prev'] = $this->_sections['configList']['index'] - $this->_sections['configList']['step'];
$this->_sections['configList']['index_next'] = $this->_sections['configList']['index'] + $this->_sections['configList']['step'];
$this->_sections['configList']['first']      = ($this->_sections['configList']['iteration'] == 1);
$this->_sections['configList']['last']       = ($this->_sections['configList']['iteration'] == $this->_sections['configList']['total']);
?>

<form action="admin.php" method="post">
<input type="hidden" name="mode" value="config">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['configLoop'][$this->_sections['configList']['index']]['id']; ?>
">	
	
	<tr>
		<td class="small"><?php echo ((is_array($_tmp=$this->_tpl_vars['configLoop'][$this->_sections['configList']['index']]['lastChange'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D %l:%M %p") : smarty_modifier_date_format($_tmp, "%D %l:%M %p")); ?>
</td>
		<td><?php echo $this->_tpl_vars['configLoop'][$this->_sections['configList']['index']]['changeBy']; ?>
</td>
		<td><?php echo $this->_tpl_vars['configLoop'][$this->_sections['configList']['index']]['name']; ?>
</td>
		<td><?php echo $this->_tpl_vars['configLoop'][$this->_sections['configList']['index']]['value']; ?>
</td>
		<td class="ctr"><?php echo $this->_tpl_vars['configLoop'][$this->_sections['configList']['index']]['description']; ?>
</td>
		<td><?php echo $this->_tpl_vars['configLoop'][$this->_sections['configList']['index']]['id']; ?>
</td>
		<td><select name="action">
			<option value="edit">Edit</option>
			<option value="delete">Delete</option>
			</select></td>
		<td><input type="submit" name="submit" value="Do it"></td>
	</tr>
</form>

<?php endfor; endif; ?>
	<tr>
		<th colspan="8">Add / Edit<?php if ($this->_tpl_vars['msg']): ?><p class="error"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p><?php endif; ?></th>
	</tr>
	<tr>
	<form action="admin.php" method="post">
	<input type="hidden" name="mode" value="config">
	<input type="hidden" name="adminID" value="<?php echo $this->_tpl_vars['adminID']; ?>
">
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
	
		<td class="small"><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D %l:%M %p") : smarty_modifier_date_format($_tmp, "%D %l:%M %p")); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['adminName'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</td>
		<td><input type="text" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
"></td>
		<td><input type="text" name="value" value="<?php echo $this->_tpl_vars['value']; ?>
"></td>
		<td><input type="text" name="description" value="<?php echo $this->_tpl_vars['description']; ?>
"></td>
		<td colspan="3"><input type="submit" name="add_edit" value="Add / Save"></td>
	</form>
	</tr>
</table>


</td>
</tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>