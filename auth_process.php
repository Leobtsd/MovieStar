<?php 

require_once("models/user.php");
require_once("conection.php");
require_once("dao/userDAO.php");
require_once("url.php");
require_once("models/message.php");

$message = new Message($BASE_URL);

// Resgata o tipo de formulário

$type = filter_input(INPUT_POST, "type");

// Verificação do tipo de formulário

if ($type === "register") {
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, 'password');
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

    // verificação de dados mínimos
    if($name && $lastname && $email && $password) {
        // Aqui você pode realizar o registro do usuário
    } else {
        $message->setMessege("Por favor preencha todos os campos.", "error", "back");
    }
} else if ($type === "login") {
    // Aqui você pode realizar o login do usuário
}


?>