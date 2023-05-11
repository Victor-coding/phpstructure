<?php
include_once "app/database/db.php";
include_once "app/database/tableConfiguration.php";

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];

    if($_SESSION['admin']){
        header('location: ' . '/admin/admin.php');
    }else{
        header('location: ' . '/');
    }
}

function numOfAttempts($email){
    if (!empty($_SESSION['mail']) && $_SESSION['mail'] === trim($_POST['email'])){
        if (!empty($_SESSION['numOfAttempts']) && $_SESSION['numOfAttempts'] > 3){
            $_SESSION['timeAuth'] = time();
        }else{
            $_SESSION['numOfAttempts'] += 1;
        }
    }else {
        $_SESSION['mail'] = $email;
    }
}

function isTheUserBanned():string{
    if (!empty($_SESSION['timeAuth'])){
        $country = time() - $_SESSION['timeAuth'];
        if ($country < 300){
            $_SESSION['isTheUserBanned'] = 1;
            return '<p>Вы слишком много раз пытались ввести пароль. Попробуйте еще через 5 минут</p>';
        }else{
            $_SESSION['numOfAttempts'] = 0;
            $_SESSION['timeAuth'] = 0;
            $_SESSION['mail'] = '';
            $_SESSION['isTheUserBanned'] = 0;
            return '';
        }
    }else{
        return '';
    }
}

$errMsg = '';
// Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
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
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                ':adm' => $admin,
                ':log' => $login,
                ':mail' => $email,
                ':pass' => $pass
            ];
            $isSubmit = true;
            $id =insert('users', $tableUsers, $post);
            $user = selectOne('users', ['id' => $id]);
           // $errMsg = "Пользователь " . "<strong>" . $login . "</strong>" . " успешно зарегистрирован!";
            userAuth($user);
        }
    }
}else {
    $login = '';
    $email = '';
}

// Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    if ($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            userAuth($existence);
        }else{
            $errMsg = "Неверная почта или пароль";
            numOfAttempts($email);
        }
    }
}else{
    $email = '';
}





