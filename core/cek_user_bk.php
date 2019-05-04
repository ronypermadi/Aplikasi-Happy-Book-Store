<?php
session_start();
if(!session_is_registered(username) and
!session_is_registered(password) and
!session_is_registered(akses) and !session_is_registered(id_kasir)) {

echo "<script>alert('Mohon Anda Login terlebih dahulu')</script>";

print("<html><head><meta http-equiv='refresh' content='0;url=../login_page/'></head><body></body></html>");
exit;
}
?>
