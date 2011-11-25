<?php /* Smarty version 2.6.3, created on 2005-03-21 04:22:46
         compiled from info/pp.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'mailto', 'info/pp.tpl', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "popup_header.tpl", 'smarty_include_vars' => array('title' => 'Crazy Legs Conti')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- <?php echo 'info/pp.tpl'; ?>
 -->

<div id="pp">

<h1><?php echo $this->_tpl_vars['homePage']; ?>
 Privacy Policy</h1>

<p class="txt_ind"><?php echo $this->_tpl_vars['homePage']; ?>
 respects your privacy.  Email addresses and other information collected on this site, <?php echo $this->_tpl_vars['homePage']; ?>
, will be used for the sole purpose of letting you know about appearances and performances by Crazy Legs Conti.  Your information will <strong><em>never be used for any other reason</em></strong>. Your information will <strong><em>never be given, sold or traded</em></strong> to any other organization, group, individual or body.
If at any point you choose to take your name off of our list all of your information will be immediately deleted and no further contact or attempt to contact will be made and you will never hear from us again, for real.</p>

<p><strong>To remove your self form the list</strong>:<br>
Scroll to the bottom of the next email you receive and click the link "<em>Unsubscribe</em>".</p>

<p><strong>Or</strong></p>

<p>Send an email to <?php echo smarty_function_mailto(array('address' => ($this->_tpl_vars['contactEmail']),'subject' => 'REMOVE FROM LIST','encode' => 'javascript'), $this);?>
 with the subject "REMOVE FROM LIST" and the email address that you would like removed in the body.</p>


<p>- CLC</p>
</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "popup_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>