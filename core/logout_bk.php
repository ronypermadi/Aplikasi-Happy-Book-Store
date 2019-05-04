<?php
session_start();
session_unregister("username");
session_unregister("password");
session_unregister("akses");

session_destroy();

print ("<html><head><meta http-equiv='refresh' content='0;url=../login_page/index.php'></head><body></body></html>");
exit;
?>
