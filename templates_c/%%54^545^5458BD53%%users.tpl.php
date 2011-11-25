<?php /* Smarty version 2.6.3, created on 2005-03-21 16:35:21
         compiled from admin/users/users.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/users/users.tpl', 1, false),)), $this); ?>
<!-- <?php echo 'admin/users/users.tpl'; ?>
 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr>
<td>

<h1>User List</h1>
<p><a href="admin.php?mode=email">Click here to send an email to the group</a>.</p>
		
<table class="form">
	<tr>
		<th>Added</th>
		<th>Email adderss</th>
		<th>Username</th>
		<th>Status</th>
		<th>Email List</th>
		<th>ID#</th>
		<th>Action</th>
		<th>Submit</th>
	</tr>
<?php unset($this->_sections['usersList']);
$this->_sections['usersList']['name'] = 'usersList';
$this->_sections['usersList']['loop'] = is_array($_loop=$this->_tpl_vars['usersLoop']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['usersList']['show'] = true;
$this->_sections['usersList']['max'] = $this->_sections['usersList']['loop'];
$this->_sections['usersList']['step'] = 1;
$this->_sections['usersList']['start'] = $this->_sections['usersList']['step'] > 0 ? 0 : $this->_sections['usersList']['loop']-1;
if ($this->_sections['usersList']['show']) {
    $this->_sections['usersList']['total'] = $this->_sections['usersList']['loop'];
    if ($this->_sections['usersList']['total'] == 0)
        $this->_sections['usersList']['show'] = false;
} else
    $this->_sections['usersList']['total'] = 0;
if ($this->_sections['usersList']['show']):

            for ($this->_sections['usersList']['index'] = $this->_sections['usersList']['start'], $this->_sections['usersList']['iteration'] = 1;
                 $this->_sections['usersList']['iteration'] <= $this->_sections['usersList']['total'];
                 $this->_sections['usersList']['index'] += $this->_sections['usersList']['step'], $this->_sections['usersList']['iteration']++):
$this->_sections['usersList']['rownum'] = $this->_sections['usersList']['iteration'];
$this->_sections['usersList']['index_prev'] = $this->_sections['usersList']['index'] - $this->_sections['usersList']['step'];
$this->_sections['usersList']['index_next'] = $this->_sections['usersList']['index'] + $this->_sections['usersList']['step'];
$this->_sections['usersList']['first']      = ($this->_sections['usersList']['iteration'] == 1);
$this->_sections['usersList']['last']       = ($this->_sections['usersList']['iteration'] == $this->_sections['usersList']['total']);
?>

<form action="admin.php" method="post">
<input type="hidden" name="mode" value="users">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['id']; ?>
">	
	
	<tr>
		<td class="small"><?php echo ((is_array($_tmp=$this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['dateTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
		<td><a href="mailTo:<?php echo $this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['email']; ?>
"><?php echo $this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['email']; ?>
</a></td>
		<td><?php echo $this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['username']; ?>
</td>
		<td><?php echo $this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['status']; ?>
</td>
		<td class="ctr"><?php if ($this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['email_list'] == '0'): ?>No<?php elseif ($this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['email_list'] == '1'): ?>Yes<?php elseif ($this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['email_list'] == '2'): ?>D<?php endif; ?></td>
		<td><?php echo $this->_tpl_vars['usersLoop'][$this->_sections['usersList']['index']]['id']; ?>
</td>
		<td><select name="action">
			<option value="delete">Delete</option>
			<option value="edit">Edit</option>
			<option value="suspend">Suspend</option>
			</select></td>
		<td><input type="submit" name="submit" value="Do it"></td>
	</tr>
</form>

<?php endfor; endif; ?>
	<tr>
		<th colspan="8">Search</th>
	</tr>
	<tr>
	<form action="admin.php" method="post">
	<input type="hidden" name="mode" value="users">
	<input type="hidden" name="action" value="search">
		<td></td>
		<td><input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
"></td>
		<td><input type="text" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
"></td>
		<td class="small ctr"><input type="text" name="status" value="<?php echo $this->_tpl_vars['status']; ?>
"></td>
		<td><select name="emailList">
		<option value=""></option>
		<option value="1" <?php if ($this->_tpl_vars['emailList'] == '1'): ?>selected="selected"<?php endif; ?>>Yes</option>
		<option value="0" <?php if ($this->_tpl_vars['emailList'] == '0'): ?>selected="selected"<?php endif; ?>>No</option>
		</select></td>
		<td class="small ctr"><input type="text" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
"></td>
		<td colspan="2" class="ctr"><input type="submit" name="submit" value="Search"></td>
	</form>
	</tr>
</table>

<p><?php echo $this->_tpl_vars['fullCount']; ?>
 users in database<?php if ($this->_tpl_vars['search']): ?> match your search criteria<?php endif; ?>.</p> 
<span id="pager"><?php if ($this->_tpl_vars['pages']): ?>Page:  <a href="admin.php?mode=users&start=<?php echo $this->_tpl_vars['prev'];  if ($this->_tpl_vars['search']): ?>&action=search<?php endif;  if ($this->_tpl_vars['email']): ?>&email=<?php echo $this->_tpl_vars['email'];  endif;  if ($this->_tpl_vars['username']): ?>&username=<?php echo $this->_tpl_vars['username'];  endif;  if ($this->_tpl_vars['status']): ?>&status=<?php echo $this->_tpl_vars['status'];  endif;  if ($this->_tpl_vars['emailList']): ?>&emailList=<?php echo $this->_tpl_vars['emailList'];  endif; ?>">&#8249;</a><?php endif;  unset($this->_sections['pageLoop']);
$this->_sections['pageLoop']['name'] = 'pageLoop';
$this->_sections['pageLoop']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pageLoop']['show'] = true;
$this->_sections['pageLoop']['max'] = $this->_sections['pageLoop']['loop'];
$this->_sections['pageLoop']['step'] = 1;
$this->_sections['pageLoop']['start'] = $this->_sections['pageLoop']['step'] > 0 ? 0 : $this->_sections['pageLoop']['loop']-1;
if ($this->_sections['pageLoop']['show']) {
    $this->_sections['pageLoop']['total'] = $this->_sections['pageLoop']['loop'];
    if ($this->_sections['pageLoop']['total'] == 0)
        $this->_sections['pageLoop']['show'] = false;
} else
    $this->_sections['pageLoop']['total'] = 0;
if ($this->_sections['pageLoop']['show']):

            for ($this->_sections['pageLoop']['index'] = $this->_sections['pageLoop']['start'], $this->_sections['pageLoop']['iteration'] = 1;
                 $this->_sections['pageLoop']['iteration'] <= $this->_sections['pageLoop']['total'];
                 $this->_sections['pageLoop']['index'] += $this->_sections['pageLoop']['step'], $this->_sections['pageLoop']['iteration']++):
$this->_sections['pageLoop']['rownum'] = $this->_sections['pageLoop']['iteration'];
$this->_sections['pageLoop']['index_prev'] = $this->_sections['pageLoop']['index'] - $this->_sections['pageLoop']['step'];
$this->_sections['pageLoop']['index_next'] = $this->_sections['pageLoop']['index'] + $this->_sections['pageLoop']['step'];
$this->_sections['pageLoop']['first']      = ($this->_sections['pageLoop']['iteration'] == 1);
$this->_sections['pageLoop']['last']       = ($this->_sections['pageLoop']['iteration'] == $this->_sections['pageLoop']['total']);
?>
<?php if ($this->_tpl_vars['pages'][$this->_sections['pageLoop']['index']]['start'] == ($this->_tpl_vars['curr'])): ?><span class="currPage"><?php endif; ?><a href="admin.php?mode=users&start=<?php echo $this->_tpl_vars['pages'][$this->_sections['pageLoop']['index']]['start']; ?>
">
<?php echo $this->_tpl_vars['pages'][$this->_sections['pageLoop']['index']]['pagenumber']; ?>
</a><?php if ($this->_tpl_vars['curr'] == $this->_tpl_vars['pages'][$this->_sections['pageLoop']['index']]['start']): ?></span><?php endif; ?>
<?php endfor; endif; ?> <?php if ($this->_tpl_vars['pages']): ?><a href="admin.php?mode=users&start=<?php echo $this->_tpl_vars['next'];  if ($this->_tpl_vars['search']): ?>&action=search<?php endif;  if ($this->_tpl_vars['email']): ?>&email=<?php echo $this->_tpl_vars['email'];  endif;  if ($this->_tpl_vars['username']): ?>&username=<?php echo $this->_tpl_vars['username'];  endif;  if ($this->_tpl_vars['status']): ?>&status=<?php echo $this->_tpl_vars['status'];  endif;  if ($this->_tpl_vars['emailList']): ?>&emailList=<?php echo $this->_tpl_vars['emailList'];  endif; ?>">&#8250;</a><?php endif; ?>
</span>
<p><?php echo $this->_tpl_vars['emailCount']; ?>
 users are on the email list.</p>

</td>
</tr>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
