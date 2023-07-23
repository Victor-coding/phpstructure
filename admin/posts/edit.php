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
                <h2>Редактирование</h2>
            </div>
            <div class="mb-3 col-12 col-md-4 err">
                <p><?=$errMsg?></p>
            </div>
            <div class="row add-post">
                <form action="edit.php" method="post">
                    <input name="id" value="<?=$id?>" type="hidden">
                    <div class="col">
                        <input name="name" value="<?=$name?>" type="text" class="form-control" placeholder="Имя категории" aria-label="Имя категории">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Описание категории</label>
                        <textarea name="description" class="form-control" id="content" rows="6"><?=$description?></textarea>
                    </div>

                    <div class="col">
                        <button name="post-edit" class="btn btn-primary" type="submit">Обновить</button>
                    </div>

                </form>
            </div>



        </div>
    </div>
</div>

<?php
include_once "../../app/include/footer.php";
?>



