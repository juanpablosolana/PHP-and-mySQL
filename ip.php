<?php
$Codigo = uniqid();
$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
$referred = $_SERVER['HTTP_REFERER'];
print "<br />\n"; print "<br />\n"; print "<strong><center>IP: $ip</strong>";
print "<br /><br /><strong>Navegador</strong>:<br />";
print "$browser<br /><br />\n";
print "<strong>iD de moviemto: $Codigo </strong>";
?>
