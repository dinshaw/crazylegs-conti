<?php /* Smarty version 2.6.3, created on 2008-04-21 21:25:58
         compiled from home.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'home.tpl', 23, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- home.tpl -->

<!--
	<tr>
		<td align="center" valign="top" colspan="2">
<img id="home" src="templates/images/photos/clc1.jpg">
<img id="home" src="templates/images/photos/clc2.jpg">
<img id="home" src="templates/images/photos/clc3.jpg"></td>
	</tr>
-->
<tr>
 <td align="center">
  <h1>DVD available now... in Taste-O-Vision!</h1> 
 </td>
</tr>
	<?php if ($this->_tpl_vars['events']): ?>
		<tr>
		<td align="center" valign="top" colspan="2">
		<div id="events">
			<?php unset($this->_sections['eventLoop']);
$this->_sections['eventLoop']['name'] = 'eventLoop';
$this->_sections['eventLoop']['loop'] = is_array($_loop=$this->_tpl_vars['events']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['eventLoop']['show'] = true;
$this->_sections['eventLoop']['max'] = $this->_sections['eventLoop']['loop'];
$this->_sections['eventLoop']['step'] = 1;
$this->_sections['eventLoop']['start'] = $this->_sections['eventLoop']['step'] > 0 ? 0 : $this->_sections['eventLoop']['loop']-1;
if ($this->_sections['eventLoop']['show']) {
    $this->_sections['eventLoop']['total'] = $this->_sections['eventLoop']['loop'];
    if ($this->_sections['eventLoop']['total'] == 0)
        $this->_sections['eventLoop']['show'] = false;
} else
    $this->_sections['eventLoop']['total'] = 0;
if ($this->_sections['eventLoop']['show']):

            for ($this->_sections['eventLoop']['index'] = $this->_sections['eventLoop']['start'], $this->_sections['eventLoop']['iteration'] = 1;
                 $this->_sections['eventLoop']['iteration'] <= $this->_sections['eventLoop']['total'];
                 $this->_sections['eventLoop']['index'] += $this->_sections['eventLoop']['step'], $this->_sections['eventLoop']['iteration']++):
$this->_sections['eventLoop']['rownum'] = $this->_sections['eventLoop']['iteration'];
$this->_sections['eventLoop']['index_prev'] = $this->_sections['eventLoop']['index'] - $this->_sections['eventLoop']['step'];
$this->_sections['eventLoop']['index_next'] = $this->_sections['eventLoop']['index'] + $this->_sections['eventLoop']['step'];
$this->_sections['eventLoop']['first']      = ($this->_sections['eventLoop']['iteration'] == 1);
$this->_sections['eventLoop']['last']       = ($this->_sections['eventLoop']['iteration'] == $this->_sections['eventLoop']['total']);
?>
				<p id="bold"><?php echo $this->_tpl_vars['events'][$this->_sections['eventLoop']['index']]['title']; ?>
</p>
				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['events'][$this->_sections['eventLoop']['index']]['body'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
				<?php endfor; endif; ?>
			</div></td>
	</tr>
	<?php endif; ?>
	
	
	
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
	
<img src="http://www.crazylegsconti.com/userImages/<?php echo $this->_tpl_vars['mode']; ?>
/<?php echo $this->_tpl_vars['standardLoop'][$this->_sections['standardList']['index']]['image']; ?>
" <?php if ($this->_tpl_vars['standardLoop'][$this->_sections['standardList']['index']]['size']): ?>width="<?php echo $this->_tpl_vars['standardLoop'][$this->_sections['standardList']['index']]['size']; ?>
"<?php endif; ?> >

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