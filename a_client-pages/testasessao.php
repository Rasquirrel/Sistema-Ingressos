<?php
session_start();
if(!$_SESSION['login']){
 header('Location: index-admins.php?login=semsessao');
} 
?>