<?php /* Smarty version 2.6.3, created on 2005-03-20 20:26:47
         compiled from email_list/unsubscribe.tpl */ ?>
<!-- <?php echo 'email_list/unsubscribe.tpl'; ?>
 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => "DINSHAW - Original Blues-Rock band in New York City")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content">

<img alt="DINSHAW logo" src="templates/images/logo.jpg">

<h2>Hello <span class="red"><?php echo $this->_tpl_vars['removeEmail']; ?>
</span>, Tired of all our party invites?</h2>
<h2>Would you like to <u>ONLY</u> receive emails for DINSHAW (the band)?</h2>

<div id="emailForm">
<form action="index.php" method="post">
<input type="hidden" name="mode" value="email">
<input type="hidden" name="action" value="unsubscribe">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">

<table>
  <tr>
  <td colspan="2" class="bld">Choose one option below and click the bar:</td>
 </tr>
  <tr>
  <td colspan="2"><hr></td>
 </tr>
 <tr>
  <td colspan="2" class="bld"><input type="submit" name="2" value="Recieve ONLY emails for DINSHAW shows, no more party invites."></td>
 </tr>
 <tr>
  <td colspan="2"><hr></td>
 </tr>
<tr>
  <td colspan="2" class="bld"><input type="submit" name="x" value="Completly remove me from the database!"></td>
</tr>
  <tr>
  <td colspan="2"><hr></td>
 </tr>
 
 
</table>
</form>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>