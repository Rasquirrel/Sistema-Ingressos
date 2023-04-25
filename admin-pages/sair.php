<?php
session_start();
session_destroy();
header('location: index-admins.php?login=logout');
?>
