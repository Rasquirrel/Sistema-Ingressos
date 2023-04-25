<?php
$conexao = new mysqli('localhost','root','','dbingressos');

if (mysqli_connect_errno()) {
    trigger_error(msqli_connect_erro());
    echo mysqli_connect_error;
}
?>