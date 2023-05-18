<?php
include_once SITE_ROOT . "/app/database/db.php";
include_once SITE_ROOT . "/app/database/tableConfiguration.php";

$errMsg = '';
$id = '';
$name = '';
$description = '';
$topics = selectAll('topics');
// Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' ||  $description === ''){
        $errMsg = "Не все поля заполнены";
    }elseif (mb_strlen($name, 'UTF8') < 2 ) {
        $errMsg = "Слишком короткое название категории";
    }else{
        $existence = selectOne('topics', ['name' => $name]);
        if (!empty($existence['name']) && $existence['name'] === $name){
            $errMsg = "Такая категория уже есть!";
        }else {
            $topic = [
                ':nm' => $name,
                ':desc' => $description,

            ];
            $isSubmit = true;
            $id =insert('topics', $tableTopics, $topic);
            $topic = selectOne('users', ['id' => $id]);
            header('location: ' . '/admin/topics/index.php');

        }
    }
}else {
    $name = '';
    $description = '';
}
// Редактирование категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' ||  $description === ''){
        $errMsg = "Не все поля заполнены";
    }elseif (mb_strlen($name, 'UTF8') < 2 ) {
        $errMsg = "Слишком короткое название категории";
    }else{
        $existence = selectOne('topics', ['name' => $name]);
        if (!empty($existence['name']) && $existence['name'] === $name && $existence['id'] != $id){
            $errMsg = "Такая категория уже есть!";
        }else {
            $topic = [
                ':nm' => $name,
                ':desc' => $description,

            ];


            update('topics', $id, $topic, $tableTopics);
            $topic_id = selectOne('users', ['id' => $id]);
            header('location: ' . '/admin/topics/index.php');

        }
    }
}
// Удаление категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('topics', $id);
    header('location: ' . '/admin/topics/index.php');
}