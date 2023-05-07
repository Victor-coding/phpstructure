
<?php
include_once "app/include/header.php";
?>


<!-- form -->
<div class="container reg_form">
  <form class="row justify-content-center" method="post" action="log.php">
    <h2>Авторизация</h2>
    <div class="mb-3 col-12 col-md-4">
      <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <button type="submit" class="btn btn-secondary">Войти</button>
      <a href="/aut.html">Зарегистрироваться</a>
    </div>

  </form>
</div>
<!-- form end -->

<?php
include_once "app/include/footer.php";
?>
