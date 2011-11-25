<?php /* Smarty version 2.6.3, created on 2005-03-20 20:36:39
         compiled from email_list/unsubscribe_noid.tpl */ ?>
<!-- <?php echo 'email_list/unsubscribe_noid.tpl'; ?>
 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => "DINSHAW - Original Blues-Rock band in New York City")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr><td align="center">


<h3>We know you want off the list but we are not sure who you are.</h3>
<h3>Please type the email address you want removed in the box below.</h3>
<p class="error" align="center"><?php echo $this->_tpl_vars['error']; ?>
</p>
<div id="emailForm">
<form action="index.php" method="post">
<input type="hidden" name="mode" value="email">
<input type="hidden" name="action" value="unsubscribe">

<table>
<tr>
  <td class="lbl right bld">Email to be removed:</td>
  <td class="left"><input type="text" name="removeEmail" value="<?php echo $this->_tpl_vars['removeEmail']; ?>
" class="txt"></td>
    <td class="bt"><input type="submit" name="submit" value="Remove me" class="txt"></td>
  
 </tr>
</table>
</form>

</td>
</tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>