<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_newsletter = "localhost";
$database_newsletter = "pierredezbase";
$username_newsletter = "pierredezbase";
$password_newsletter = "cF3kqmdXxqpx";
$newsletter = mysql_pconnect($hostname_newsletter, $username_newsletter, $password_newsletter) or trigger_error(mysql_error(),E_USER_ERROR); 
?>