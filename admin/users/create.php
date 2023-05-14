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
                <a href="index.php " class="col-3 btn btn-warning">Управление</a>
            </div>
            <div class="row title-table">
                <h2>Создать пользователя</h2>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                        <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name='email' value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш email...">
                        <div id="emailHelp" class="form-text">Ваш email адрес не будет использован для спама!</div>
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Подтвердите пароль</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите ваш пароль...">
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>User</option>
                        <option value="1">Admin</option>

                    </select>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Сохранить запись</button>
                    </div>

                </form>
            </div>



        </div>
    </div>
</div>

<?php
include_once "../../app/include/footer.php";
?>



