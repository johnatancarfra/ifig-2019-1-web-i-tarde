<?php

include 'init.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

if ( login($email, $senha) ) {
    redirect('index.php');
}
redirect('reg_login.php?mes_log=Email ou senha incorreto');

?>