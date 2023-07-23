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
                <h2>Добавление записи</h2>
           </div>
            <div class="mb-3 col-12 col-md-4 err">
                <p><?=$errMsg?></p>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="col mb-4">
                        <input name="title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Содержимое записи</label>
                        <textarea name="content" class="form-control" id="editor" rows="6"></textarea>
                    </div>
                    <div class="input-group col mb-4 mt-4">
                        <input name="img" type="file" class="form-control" id="inputFile">
                        <label for="inputFile" class="input-group-text" >Upload</label>

                    </div>
                    <select name="topic" class="form-select mb-4" aria-label="Default select example">
                        <option selected>Категория поста:</option>
                         <?php foreach ($topics as $topic):?>
                        <option value="<?=$topic['id'];?>"><?=$topic['name'];?></option>
                         <?php endforeach;?>
                    </select>
                    <div class="col mb-4">
                        <button name="add_post" class="btn btn-primary" type="submit">Добавить запись</button>
                    </div>

                </form>
            </div>



        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
<script src="../../assets/js/script.js"></script>
<?php
include_once "../../app/include/footer.php";
?>


