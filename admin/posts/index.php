<?php

include_once '../../path.php';
include_once "../../app/controllers/posts.php";
include_once "../../app/include/header-admin.php";

?>

    <div class="container">
        <div class="row">
<?php include_once "../../app/include/sidebar-admin.php";?>

            <div class="posts col-9">
                <div class="button row">
                    <a href="create.php" class="col-3 btn btn-success">Создать</a>
                    <span class="col-1"></span>
                    <a href="index.php " class="col-3 btn btn-warning">Редактировать</a>
                </div>
                <div class="row title-table">
                    <h2>Управление записями</h2>
                    <div class="col-1">ID</div>
                    <div class="col-5">Название</div>
                    <div class="col-2">Автор</div>
                    <div class="col-4">Управление</div>
                </div>
                <?php foreach ($posts as $post):?>
                    <div class="row post">
                        <div class="id col-1"><?=$post['id'];?></div>
                        <div class="title col-5"><?=$post['title'];?></div>
                        <div class="author col-2"><?=$post['id_user'];?></div>
                        <div class="red col-1"><a href="edit.php?id=<?=$post['id'];?>">edit</a></div>
                        <div class="del col-1"><a href="edit.php?del_id=<?=$post['id'];?>">delete</a></div>
                        <div class="status col-2"><a href="">в черновик</a></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php
include_once "../../app/include/footer.php";
?>

