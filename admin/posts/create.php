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
                <h2>Добавление записи</h2>
           </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="col mb-4">
                        <input type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Содержимое записи</label>
                        <textarea class="form-control" id="editor" rows="6"></textarea>
                    </div>
                    <div class="input-group col mb-4 mt-4">
                        <input type="file" class="form-control" id="inputFile">
                        <label for="inputFile" class="input-group-text" >Upload</label>

                    </div>
                    <select class="form-select mb-4" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="col mb-4">
                        <button class="btn btn-primary" type="submit">Сохранить запись</button>
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


