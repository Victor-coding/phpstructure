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
                <h2>Создать категорию</h2>
            </div>
            <div class="mb-3 col-12 col-md-4 err">
                <p><?=$errMsg?></p>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="col">
                        <input name="name" value="<?=$name?>" type="text" class="form-control" placeholder="Имя категории" aria-label="Имя категории">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Описание категории</label>
                        <textarea name="description" class="form-control" id="content" rows="6"><?=$description?></textarea>
                    </div>

                    <div class="col">
                        <button name="topic-create" class="btn btn-primary" type="submit">Создать категорию</button>
                    </div>

                </form>
            </div>



        </div>
    </div>
</div>

<?php
include_once "../../app/include/footer.php";
?>


