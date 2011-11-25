<%include file="header.tpl"%>
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
	<%if $events %>
		<tr>
		<td align="center" valign="top" colspan="2">
		<div id="events">
			<% section name=eventLoop loop=$events %>
				<p id="bold"><%$events[eventLoop].title%></p>
				<p><%$events[eventLoop].body|nl2br%></p>
				<%/section%>
			</div></td>
	</tr>
	<%/if%>
	
	
	
	<% section name=standardList loop=$standardLoop %>
	<tr>
		<td width="300" valign="top" align="right">
	
<img src="http://www.crazylegsconti.com/userImages/<%$mode%>/<%$standardLoop[standardList].image%>" <%if $standardLoop[standardList].size %>width="<%$standardLoop[standardList].size%>"<%/if%> >

		</td>
		<td valign="top">

<p id="title"><%$standardLoop[standardList].title%></p>

<p id="content"><%$standardLoop[standardList].body|nl2br%></p>

		</td>
	</tr>
	<tr>
		<td colspan="2"><hr size="1" color="#ffffff" width="50%"></td>
<%/section%>
	
<%include file="footer.tpl"%>
