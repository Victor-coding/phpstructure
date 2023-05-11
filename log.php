<?php
include_once "app/controllers/users.php";
include_once "app/include/header.php";
?>


<!-- form -->
<?=isTheUserBanned()?>
<div class="container reg_form">
  <form class="row justify-content-center" method="post" action="log.php">
    <h2>Авторизация</h2>
    <div class="mb-3 col-12 col-md-4 err">
      <p><?=$errMsg?></p>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputEmail1" class="form-label">Ваша почта</label>
        <input name='email' value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш email...">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <?php if (empty($_SESSION['isTheUserBanned'])) echo '<button name="button-log" type="submit" class="btn btn-secondary" >Войти</button>'; ?>

      <a href="/reg.php">Зарегистрироваться</a>
    </div>

  </form>
</div>
<!-- form end -->

<?php
include_once "app/include/footer.php";
?>
