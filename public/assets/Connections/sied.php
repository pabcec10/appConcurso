<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Garantia = "localhost";
$database_Garantia = "siedunsj_BDSied";
$username_Garantia = "siedunsj_BDSied";
$password_Garantia = "Sied@unsj2";
$Garantia = mysql_pconnect($hostname_Garantia, $username_Garantia, $password_Garantia) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
