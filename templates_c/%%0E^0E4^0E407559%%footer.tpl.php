<?php /* Smarty version 2.6.3, created on 2005-03-21 03:56:47
         compiled from footer.tpl */ ?>
	<tr>
		<td colspan="3" align="center">
		<a name="emailList"></a>

<iframe src="scripts/email_list/email_iframe.php" width="530" height="130" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" name="EmailList" bgcolor="#EEEFF0">
<div id="emailForm">



	<form action="index.php" method="post">
	<input type="hidden" name="mode" value="addEmail">
	<input type="hidden" name="errorCheck" value="on">


	<table>
	 <tr>
		<td colspan="5" align="center">Join the email list!:</td>
	</tr>
	
	<tr>
		<td class="lbl">Name:</td>
		<td class="fld"><input name="name" type="text" value="<?php echo $this->_tpl_vars['name']; ?>
" id="email"></td>
		<td class="lbl">Email:</td>
		<td class="fld"><input name="email" type="text" value="<?php echo $this->_tpl_vars['email']; ?>
" id="email"></td>
		<td class="btn"><input name="submit" type="submit" value="Join Now" id="email"></td>
	 </tr>
	 <tr>
	 	<td colspan="5">This email list will send information about Crazy Legs and his appearances and events. You can <a href="<?php echo $this->_tpl_vars['homePage']; ?>
/index.php?mode=email&action=unsubscribe">remove yourself</a> from our list at any time and we will never share or sell your information (<a href="#" onClick="window.open('<?php echo $this->_tpl_vars['homePage']; ?>
/index.php?mode=pp','www.crazylegsconti.com&nbsp;Privacy&nbsp;Policy','width=550,height=600,scrollbars=yes,resizable=yes')">read our privacy policy</a>).</td>
	</tr>
	</table>
	
	</form>
		</div>


	
	</iframe> 
		
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center" >

<img src="templates/images/footer/eat.gif" id="footer">
<div id="footer">
<h4>&copy;2004 Oyster Productions.</h4>
<h4>Design and HTML by Leslie Padgett. Development by <a id="xsmall" href="http://www.fingerfunk.com">Fingerfunk Productions</a>.</h4>
<h4><a id="xsmall" href="mailto:daniellefranco1@aol.com">Contact Us</a>.</h4>
</div>
		</td>
	</tr>
</table>

</body>
</html>