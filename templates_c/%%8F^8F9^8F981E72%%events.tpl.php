<?php /* Smarty version 2.6.3, created on 2004-10-11 17:14:05
         compiled from admin/pages/events.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'admin/pages/events.tpl', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>

<div align="center">
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<p>Add an event:</p>
<form action="admin.php" method="post" name="addEvent"  onsubmit="return errorCheck()">
<input type="hidden" name="action" value="add">
<input type="hidden" name="errorCheckVar" value="on">
<input type="hidden" name="mode" value="<?php echo $this->_tpl_vars['mode']; ?>
">
<p>Title: <input type="text" name="title" value="<?php echo $this->_tpl_vars['title']; ?>
">
Where: <input type="text" name="location" value="<?php echo $this->_tpl_vars['location']; ?>
"></p>
<p>What: <textarea name="what" rows="10" cols="50"><?php echo $this->_tpl_vars['what']; ?>
</textarea></p>
<p>Date:<select name="month">
<option value="month">Month</option>
<option value="01" <?php if ($this->_tpl_vars['month'] == '01'): ?>selected<?php endif; ?> >Jan</option>
<option value="02" <?php if ($this->_tpl_vars['month'] == '02'): ?>selected<?php endif; ?> >Feb</option>
<option value="03" <?php if ($this->_tpl_vars['month'] == '03'): ?>selected<?php endif; ?> >Mar</option>
<option value="04" <?php if ($this->_tpl_vars['month'] == '04'): ?>selected<?php endif; ?> >Apr</option>
<option value="05" <?php if ($this->_tpl_vars['month'] == '05'): ?>selected<?php endif; ?> >May</option>
<option value="06" <?php if ($this->_tpl_vars['month'] == '06'): ?>selected<?php endif; ?> >Jun</option>
<option value="07" <?php if ($this->_tpl_vars['month'] == '07'): ?>selected<?php endif; ?> >Jul</option>
<option value="08" <?php if ($this->_tpl_vars['month'] == '08'): ?>selected<?php endif; ?> >Aug</option>
<option value="09" <?php if ($this->_tpl_vars['month'] == '09'): ?>selected<?php endif; ?> >Sep</option>
<option value="10" <?php if ($this->_tpl_vars['month'] == '10'): ?>selected<?php endif; ?> >Oct</option>
<option value="11" <?php if ($this->_tpl_vars['month'] == '11'): ?>selected<?php endif; ?> >Nov</option>
<option value="12" <?php if ($this->_tpl_vars['month'] == '12'): ?>selected<?php endif; ?> >Dec</option>
</select>

<select name="day" >
<option value="day">Day</option>
<option value="01" <?php if ($this->_tpl_vars['day'] == '01'): ?>selected<?php endif; ?> >1</option>
<option value="02" <?php if ($this->_tpl_vars['day'] == '02'): ?>selected<?php endif; ?> >2</option>
<option value="03" <?php if ($this->_tpl_vars['day'] == '03'): ?>selected<?php endif; ?> >3</option>
<option value="04" <?php if ($this->_tpl_vars['day'] == '04'): ?>selected<?php endif; ?> >4</option>
<option value="05" <?php if ($this->_tpl_vars['day'] == '05'): ?>selected<?php endif; ?> >5</option>
<option value="06" <?php if ($this->_tpl_vars['day'] == '06'): ?>selected<?php endif; ?> >6</option>
<option value="07" <?php if ($this->_tpl_vars['day'] == '07'): ?>selected<?php endif; ?> >7</option>
<option value="08" <?php if ($this->_tpl_vars['day'] == '08'): ?>selected<?php endif; ?> >8</option>
<option value="09" <?php if ($this->_tpl_vars['day'] == '09'): ?>selected<?php endif; ?> >9</option>
<option value="10" <?php if ($this->_tpl_vars['day'] == '10'): ?>selected<?php endif; ?> >10</option>
<option value="11" <?php if ($this->_tpl_vars['day'] == '11'): ?>selected<?php endif; ?> >11</option>
<option value="12" <?php if ($this->_tpl_vars['day'] == '12'): ?>selected<?php endif; ?> >12</option>
<option value="13" <?php if ($this->_tpl_vars['day'] == '13'): ?>selected<?php endif; ?> >13</option>
<option value="14" <?php if ($this->_tpl_vars['day'] == '14'): ?>selected<?php endif; ?> >14</option>
<option value="15" <?php if ($this->_tpl_vars['day'] == '15'): ?>selected<?php endif; ?> >15</option>
<option value="16" <?php if ($this->_tpl_vars['day'] == '16'): ?>selected<?php endif; ?> >16</option>
<option value="17" <?php if ($this->_tpl_vars['day'] == '17'): ?>selected<?php endif; ?> >17</option>
<option value="18" <?php if ($this->_tpl_vars['day'] == '18'): ?>selected<?php endif; ?> >18</option>
<option value="19" <?php if ($this->_tpl_vars['day'] == '19'): ?>selected<?php endif; ?> >19</option>
<option value="20" <?php if ($this->_tpl_vars['day'] == '20'): ?>selected<?php endif; ?> >20</option>
<option value="21" <?php if ($this->_tpl_vars['day'] == '21'): ?>selected<?php endif; ?> >21</option>
<option value="22" <?php if ($this->_tpl_vars['day'] == '22'): ?>selected<?php endif; ?> >22</option>
<option value="23" <?php if ($this->_tpl_vars['day'] == '23'): ?>selected<?php endif; ?> >23</option>
<option value="24" <?php if ($this->_tpl_vars['day'] == '24'): ?>selected<?php endif; ?> >24</option>
<option value="25" <?php if ($this->_tpl_vars['day'] == '25'): ?>selected<?php endif; ?> >25</option>
<option value="26" <?php if ($this->_tpl_vars['day'] == '26'): ?>selected<?php endif; ?> >26</option>
<option value="27" <?php if ($this->_tpl_vars['day'] == '27'): ?>selected<?php endif; ?> >27</option>
<option value="28" <?php if ($this->_tpl_vars['day'] == '28'): ?>selected<?php endif; ?> >28</option>
<option value="29" <?php if ($this->_tpl_vars['day'] == '29'): ?>selected<?php endif; ?> >29</option>
<option value="30" <?php if ($this->_tpl_vars['day'] == '30'): ?>selected<?php endif; ?> >30</option>
<option value="31" <?php if ($this->_tpl_vars['day'] == '31'): ?>selected<?php endif; ?> >31</option>
</select>

<select name="year" >
<option value="year">Year</option>
<option value="2004" <?php if ($this->_tpl_vars['year'] == '2004'): ?>selected<?php endif; ?> >2004</option>
<option value="2005" <?php if ($this->_tpl_vars['year'] == '2005'): ?>selected<?php endif; ?> >2005</option>
<option value="2006" <?php if ($this->_tpl_vars['year'] == '2006'): ?>selected<?php endif; ?> >2006</option>
<option value="2007" <?php if ($this->_tpl_vars['year'] == '2007'): ?>selected<?php endif; ?> >2007</option>
</select>
Time:<select name="hour">
<option value="hour">hour</option>
<option value="01" <?php if ($this->_tpl_vars['hour'] == '01'): ?>selected<?php endif; ?> >1AM</option>
<option value="02" <?php if ($this->_tpl_vars['hour'] == '02'): ?>selected<?php endif; ?> >2AM</option>
<option value="03" <?php if ($this->_tpl_vars['hour'] == '03'): ?>selected<?php endif; ?> >3AM</option>
<option value="04" <?php if ($this->_tpl_vars['hour'] == '04'): ?>selected<?php endif; ?> >4AM</option>
<option value="05" <?php if ($this->_tpl_vars['hour'] == '05'): ?>selected<?php endif; ?> >5AM</option>
<option value="06" <?php if ($this->_tpl_vars['hour'] == '06'): ?>selected<?php endif; ?> >6AM</option>
<option value="07" <?php if ($this->_tpl_vars['hour'] == '07'): ?>selected<?php endif; ?> >7AM</option>
<option value="08" <?php if ($this->_tpl_vars['hour'] == '08'): ?>selected<?php endif; ?> >8AM</option>
<option value="09" <?php if ($this->_tpl_vars['hour'] == '09'): ?>selected<?php endif; ?> >9AM</option>
<option value="10" <?php if ($this->_tpl_vars['hour'] == '10'): ?>selected<?php endif; ?> >10AM</option>
<option value="11" <?php if ($this->_tpl_vars['hour'] == '11'): ?>selected<?php endif; ?> >11AM</option>
<option value="12" <?php if ($this->_tpl_vars['hour'] == '12'): ?>selected<?php endif; ?> >12AM</option>
<option value="13" <?php if ($this->_tpl_vars['hour'] == '13'): ?>selected<?php endif; ?> >1PM</option>
<option value="14" <?php if ($this->_tpl_vars['hour'] == '14'): ?>selected<?php endif; ?> >2PM</option>
<option value="15" <?php if ($this->_tpl_vars['hour'] == '15'): ?>selected<?php endif; ?> >3PM</option>
<option value="16" <?php if ($this->_tpl_vars['hour'] == '16'): ?>selected<?php endif; ?> >4PM</option>
<option value="17" <?php if ($this->_tpl_vars['hour'] == '17'): ?>selected<?php endif; ?> >5PM</option>
<option value="18" <?php if ($this->_tpl_vars['hour'] == '18'): ?>selected<?php endif; ?> >6PM</option>
<option value="19" <?php if ($this->_tpl_vars['hour'] == '19'): ?>selected<?php endif; ?> >7PM</option>
<option value="20" <?php if ($this->_tpl_vars['hour'] == '20'): ?>selected<?php endif; ?> >8PM</option>
<option value="21" <?php if ($this->_tpl_vars['hour'] == '21'): ?>selected<?php endif; ?> >9PM</option>
<option value="22" <?php if ($this->_tpl_vars['hour'] == '22'): ?>selected<?php endif; ?> >10PM</option>
<option value="23" <?php if ($this->_tpl_vars['hour'] == '23'): ?>selected<?php endif; ?> >11PM</option>
<option value="24" <?php if ($this->_tpl_vars['hour'] == '24'): ?>selected<?php endif; ?> >12PM</option>
</select>
:
<select name="minute">
<option value="minute">min</option>
<option value="00" <?php if ($this->_tpl_vars['minute'] == '00'): ?>selected<?php endif; ?> >00</option>
<option value="15" <?php if ($this->_tpl_vars['minute'] == '15'): ?>selected<?php endif; ?> >15</option>
<option value="30" <?php if ($this->_tpl_vars['minute'] == '30'): ?>selected<?php endif; ?> >30</option>
<option value="33" <?php if ($this->_tpl_vars['minute'] == '33'): ?>selected<?php endif; ?> >33</option>
<option value="45" <?php if ($this->_tpl_vars['minute'] == '45'): ?>selected<?php endif; ?> >45</option>
</select></P>


<P><input type="submit" name="submit" value="Add <?php echo $this->_tpl_vars['mode']; ?>
">
</form></p>


<form name="cmsLink">
<p id="xsmall">Add a link:
Text: <input type="text" name="text" id="xsmall">
Link to: <input type="text" name="link" id="xsmall">
<strong><a href="#" onClick="addLink(0,5);">ADD</a></strong></p>
</form>

<form name="cmsBold" id="xsamll">
<p id="xsmall">Add <strong>BOLD</strong> text
Text: <input type="text" name="bold" id="xsmall">
<strong><a href="#" onClick="addBold(0,5)">ADD</a></strong></p></form>

<form name="cmsItalic">
<p id="xsmall">Add <em>Italic</em> text
Text: <input type="text" name="italic" id="xsmall">
<strong><a href="#" onClick="addItalic(0,5)">ADD</a></strong></p></form>

<form name="cmsBoldItalic">
<p id="xsmall">Add <em><strong>BOLD Italic</strong></em> text
Text: <input type="text" name="boldItalic" id="xsmall">
<strong><a href="#" onClick="addBoldItalic(0,5)">ADD</a></strong></p></form>

</div>


			
<table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>