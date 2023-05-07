<!doctype html>
<html lang="en">
<?php
include_once "app/include/head.php";
?>
<body>
<!-- header -->
<?php
include_once "app/include/header.php";
?>
<!-- header end -->
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
<?php
include_once "app/include/footer.php";
?>
<!-- footer end -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>