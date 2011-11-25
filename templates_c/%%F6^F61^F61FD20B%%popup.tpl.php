<?php /* Smarty version 2.6.3, created on 2004-10-11 17:14:11
         compiled from admin/pages/popup.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<table border="1" align="center" id="hours">
	<form action="admin.php" method="post">
	<input type="hidden" name="mode" value="popup">
	<input type="hidden" name="action" value="edit">
	<input type="hidden" name="errorCheckVar" value="on">
	<tr>
	  <td colspan="2" align="center">Edit your home page popup here</td>
    </tr>
  <tr>
          
      <td align="center">Title</td>
	   <td align="center"><input name="title" type="text" value="<?php echo $this->_tpl_vars['title']; ?>
"></td>
  </tr>
    <tr>
          
      <td align="center">Text</td>
	   <td align="center"><textarea name="body"  rows="5" cols="30"><?php echo $this->_tpl_vars['body']; ?>
</textarea></td>
  </tr>
  
	<tr>
	<td>ON<input type="radio" name="status" value="on" <?php if ($this->_tpl_vars['status'] == 'on'): ?>checked<?php endif; ?>>
	 - OFF<input type="radio" name="status" value="off" <?php if ($this->_tpl_vars['status'] == 'off'): ?>checked<?php endif; ?>></td>
	<td align="right"><input name="submit" type="submit" value="Update"></td>
	</tr>
</form>
 <tr>
 <td colspan="2" align="right">
 
<form name="cmsLink">
<p id="xsmall">Add a link:
Text: <input type="text" name="text" id="xsmall">
Link to: <input type="text" name="link" id="xsmall">
<strong><a href="#" onClick="addLink(0,4);">ADD</a></strong></p>
</form>

<form name="cmsEmailLink">
<p id="xsmall">Add a email link:
Text: <input type="text" name="emailText" id="xsmall">
Link to: <input type="text" name="emailLink" id="xsmall">
<strong><a href="#" onClick="addEmailLink(0,4);">ADD</a></strong></p>
</form>

<form name="cmsBold" id="xsamll">
<p id="xsmall">Add <strong>BOLD</strong> text
Text: <input type="text" name="bold" id="xsmall">
<strong><a href="#" onClick="addBold(0,4)">ADD</a></strong></p></form>

<form name="cmsItalic">
<p id="xsmall">Add <em>Italic</em> text
Text: <input type="text" name="italic" id="xsmall">
<strong><a href="#" onClick="addItalic(0,4)">ADD</a></strong></p></form>

<form name="cmsBoldItalic">
<p id="xsmall">Add <em><strong>BOLD Italic</strong></em> text
Text: <input type="text" name="boldItalic" id="xsmall">
<strong><a href="#" onClick="addBoldItalic(0,4)">ADD</a></strong></p></form>
</td>
</tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>