<?php

include_once "../../app/database/db.php";
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
                <div class="row post">
                    <div class="id col-1">1</div>
                    <div class="title col-5">Название ggggghjdhgjgh</div>
                    <div class="author col-2">Автор admin</div>
                    <div class="red col-2"><a href="">edit</a></div>
                    <div class="del col-2"><a href="">delete</a></div>
                </div>
                <div class="row post">
                    <div class="id col-1">1</div>
                    <div class="title col-5">Название ggggghjdhgjgh</div>
                    <div class="author col-2">Автор admin</div>
                    <div class="red col-2"><a href="">edit</a></div>
                    <div class="del col-2"><a href="">delete</a></div>
                </div>


            </div>
        </div>
    </div>

<?php
include_once "../../app/include/footer.php";
?>

