<?php
session_start();
if(!$_SESSION[username] and
!$_SESSION[password] and
!$_SESSION[akses] and !$_SESSION[id_kasir]) {

echo "<script>alert('Mohon Anda Login terlebih dahulu')</script>";

print("<html><head><meta http-equiv='refresh' content='0;url=../login_page/'></head><body></body></html>");
exit;
}
?>
