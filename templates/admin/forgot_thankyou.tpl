<%include file='admin/admin_header.tpl' title='Admin Page'%></table><div align="center"><h2>Thank you.</h2><h3>Your admin username and password have been sent to <%$email%>.</h3><hr><form action="admin.php" method="post" name="adminLogin"><p class='error'><%$errors%></p><p>Username: <input name="username" type="text" value="<%$username%>" size="10"></p><p>Password: <input name="password" type="password" size="10"></p><p><input name="submit" type="submit" value="Login"></p></form><p class='forgot'>Forgot your username or password? <a href='admin.php?mode=forgot'>Click Here</a>.</p><hr><table></div><%include file='admin/admin_footer.tpl'%>