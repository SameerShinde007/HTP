<?php
session_start();

session_unset();
session_destroy();

echo "<script>alert('you have logged out');
window.location.href='index.php';
</script>";
?>

