<?php /* Smarty version 2.6.3, created on 2004-11-09 16:56:42
         compiled from admin/pages/standard.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'admin/pages/standard.tpl', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr>
<td align="center" colspan="3" class="text"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['errors'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</strong></td></tr>
<tr>
<form action="admin.php" method="post" enctype="multipart/form-data" name="main">
<input type="hidden" name="MAX_FILE_SIZE" value="1048576">
<input type="hidden" name="mode" value="<?php echo $this->_tpl_vars['mode']; ?>
">
<input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
<input type="hidden" name="errorCheckVar" value="on">

<td valign="top" class="xsmall" <?php if ($this->_tpl_vars['mode'] == 'events'): ?>width="300"<?php endif; ?> ><?php if ($this->_tpl_vars['mode'] != 'events'): ?><img src="/userImages/<?php echo $this->_tpl_vars['mode']; ?>
/<?php echo $this->_tpl_vars['image']; ?>
" <?php if ($this->_tpl_vars['width']): ?>width="300"<?php endif; ?>>
<p>Change Image</p>
<p><input type="file" name="image" value=""></p><?php endif; ?>
<?php if ($this->_tpl_vars['mode'] == 'events'): ?><input type="hidden" name="placHolderReplacmentForImage" value=""><?php endif; ?>
</td>

<td class="text" align="left">

TITLE:</br>
<input type="text" name="title" value="<?php echo $this->_tpl_vars['title']; ?>
" size="50">
<textarea name="body" cols="80" rows="30">
<?php echo $this->_tpl_vars['body']; ?>

</textarea>
<p><input type="submit" name="submit" value="Post"></p>
</td>
</form>
</tr>
<tr>
<td colspan="2" align="right">

<form name="cmsLink">
<p id="xsmall">Add a link:
Text: <input type="text" name="text" id="xsmall">
Link to: <input type="text" name="link" id="xsmall">
<strong><a href="#" onClick="addLink(0,7);">ADD</a></strong></p>
</form>

<form name="cmsEmailLink">
<p id="xsmall">Add a email link:
Text: <input type="text" name="emailText" id="xsmall">
Link to: <input type="text" name="emailLink" id="xsmall">
<strong><a href="#" onClick="addEmailLink(0,7);">ADD</a></strong></p>
</form>

<form name="cmsBold" id="xsamll">
<p id="xsmall">Add <strong>BOLD</strong> text
Text: <input type="text" name="bold" id="xsmall">
<strong><a href="#" onClick="addBold(0,7)">ADD</a></strong></p></form>

<form name="cmsItalic">
<p id="xsmall">Add <em>Italic</em> text
Text: <input type="text" name="italic" id="xsmall">
<strong><a href="#" onClick="addItalic(0,7)">ADD</a></strong></p></form>

<form name="cmsBoldItalic">
<p id="xsmall">Add <em><strong>BOLD Italic</strong></em> text
Text: <input type="text" name="boldItalic" id="xsmall">
<strong><a href="#" onClick="addBoldItalic(0,7)">ADD</a></strong></p></form>


</td>
</tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>