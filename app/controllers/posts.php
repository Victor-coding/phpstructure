<?php
include_once SITE_ROOT . "/app/database/db.php";
include_once SITE_ROOT . "/app/database/tableConfiguration.php";

$errMsg = '';
$id = '';
$title = '';
$content = '';
$img = '';
$topic = '';
$topics = selectAll('topics');
$posts = selectAll('posts');
// Код для формы создания записи
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])){
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);


    if ($title === '' ||  $content === '' || $topic === ''){
        $errMsg = "Не все поля заполнены";

    }elseif (mb_strlen($title , 'UTF8') < 7) {
        $errMsg = "Слишком короткое название статьи";
    }else{
           $post = [
               ':us' => $_SESSION['id'],
               ':tlt' => $title,
               ':con' => $content,
               ':top' => $topic,
               ':im' => $_POST['img'],
               ':st' => 1


            ];

            $isSubmit = true;
            $id =insert('posts', $tablePosts, $post);
        $post = selectOne('users', ['id' => $id]);
            header('location: ' . '/admin/posts/index.php');

    }
}else {
    $title = '';
    $content = '';
}
// Редактирование категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $post = selectOne('posts', ['id' => $id]);

    $id = $post['id'];
    $name = $post['title'];
    $description = $post['content'];
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post-edit'])){
    $id = trim($_POST['id']);
    $name = trim($_POST['title']);
    $description = trim($_POST['content']);

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


            update('topics', $id, $post, $tablePosts);
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
