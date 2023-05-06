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
<!-- блок main -->
<div class="container">
  <div class="content row">
    <div class="main-content col-md-9 col-12">
      <h2>Прикольная статья на тему динамического сайта...
        Прикольная статья на тему динамического сайта...</h2>

      <div class="single_post row">
        <div class="img col-12">
          <img src="assets/images/image_1.png" alt="" class="img-thumbnail">
        </div>
        <div class="info">
          <i class="far fa-user"> Имя автора</i>
          <i class="far fa-calendar"> Mar 11, 2021</i>
        </div>
        <div class="single_post_text col-12">
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text.
            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
            This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
          </p>
        </div>
      </div>
    </div>
    <!-- sidebar Content -->
    <div class="sidebar col-md-3 col-12">
      <div class="section search">
        <h3>Search</h3>
        <form action="/" method="post">
          <input type="text" name="search-term" class="text-input" placeholder="Search...">
        </form>
      </div>

      <div class="section topics">
        <h3>Категории</h3>
        <ul>
          <li><a href="#">Програмирование</a></li>
          <li><a href="#">Дизайн</a></li>
          <li><a href="#">Визуализация</a></li>
          <li><a href="#">Кейсы</a></li>
          <li><a href="#">Мотивация</a></li>
        </ul>
      </div>


    </div>
  </div>
</div>
<!-- блок main end -->
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