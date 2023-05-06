<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b6c1befcd7.js" crossorigin="anonymous"></script>
  <title>My portfolio</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<!-- header -->
<header class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <h1>
          <a href="/">My portfolio</a>
        </h1>
      </div>
      <nav class="col-8">
        <ul>
          <li><a href="#">Главная</a></li>
          <li><a href="#">О нас</a></li>
          <li><a href="#">Услуги</a></li>

          <li>
            <a href="#">
              <i class="fa fa-user"></i>
              Кабинет
            </a>
            <ul>
              <li><a href="#">Админ панель</a></li>
              <li><a href="#">Выход</a></li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </div>

</header>
<!-- header end -->

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

<!-- footer -->
<footer class="container-fluid">
  <div class="footer-content container">
    <div class="row">
      <div class="footer-section about col-md-4 col-12">
        <h3 class="logo-text">Мой блог</h3>
        <p>
          Lorem Ipsum is simply dummy text of the printing and
          Lorem Ipsum is simply dummy text of the printing and
        </p>
        <div class="contact">
          <span><i class="fas fa-phone"> &nbsp; 123-456-789 </i></span>
          <span><i class="fas fa-envelope"> &nbsp; info@myblog.com</i></span>
        </div>
        <div class="socials">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>

        </div>
      </div>
      <div class="footer-section links col-md-4 col-12">
        <h3>Quick Links</h3>
        <br>
        <ul>
          <a href="">
            <li>События</li>
          </a>
          <a href="">
            <li>Команда</li>
          </a>
          <a href="">
            <li>Упражнения</li>
          </a>
          <a href="">
            <li>Галерея</li>
          </a>
          <a href="">
            <li>Что-то ещё</li>
          </a>
        </ul>
      </div>

      <div class="footer-section contact-form col-md-4 col-12">
        <h3>Контакты</h3>
        <br>
        <form action="/" method="post">
          <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
          <textarea  name="message" rows="4" class="text-input contact-input" placeholder="Your message..."></textarea>
          <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Отправить
          </button>
        </form>
      </div>

    </div>

    <div class="footer-bottom">
      &copy; myblog.com | Designed my
    </div>
  </div>
</footer>
<!-- footer end -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>