<?php

include_once '../../path.php';
include_once "../../app/controllers/topics.php";
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
                <h2>Управление категориями</h2>
                <div class="col-1">ID</div>
                <div class="col-5">Название</div>

                <div class="col-4">Управление</div>

            </div>
            <?php foreach ($topics as $key => $topic):?>
            <div class="row post">
                <div class="id col-1"><?=$key + 1?></div>
                <div class="title col-5"><?=$topic['name']?></div>
                <div class="red col-2"><a href="edit.php?id=<?=$topic['id'];?>">edit</a></div>
                <div class="del col-2"><a href="edit.php?del_id=<?=$topic['id'];?>">delete</a></div>
            </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>

<?php
include_once "../../app/include/footer.php";
?>


