<?php
session_start();
session_destroy();
header('location: index-clientes.php?login=logout');
?>
