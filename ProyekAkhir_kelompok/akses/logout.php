<?php
// Cek apakah sesi sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

session_destroy();
header("Location: login.php");
exit;
?>