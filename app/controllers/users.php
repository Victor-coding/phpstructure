<?php
include_once "app/database/db.php";
include_once "app/database/tableConfiguration.php";


$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);


    if ($login === '' ||  $email === '' || $passF === ''){
        $errMsg = "Не все поля заполнены";
    }elseif (mb_strlen($login, 'UTF8') < 2 ){
        $errMsg = "Слишком короткий логин";
    }elseif ($passF !== $passS){
        $errMsg = "Пароли в обоих полях должны соответствовать!";
    }

    else{
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                ':adm' => $admin,
                ':log' => $login,
                ':mail' => $email,
                ':pass' => $passF
            ];
            $isSubmit = true;
            insert('users', $tableUsers, $post);

            $errMsg = "Пользователь " . "<strong>" . $login . "</strong>" . " успешно зарегистрирован!";
        }
    }




}else {
    $login = '';
    $email = '';
}





