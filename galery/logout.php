<?php

session_start();
session_destroy();

echo "<script>
alert('Anda Telah LogOut');
window.location.assign('index.php');
</script>";

?>