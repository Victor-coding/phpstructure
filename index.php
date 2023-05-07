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
    <!-- блок карусели -->
    <div class="container">
        <div class="row">
            <h2 class="slider-title">Топ публикации</h2>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/image_1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="">First slide label</a></h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/image_2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="">Second slide label</a></h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="">Third slide label</a></h5>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- блок карусели end-->

    <!-- блок main -->
    <div class="container">
        <div class="content row">
            <div class="main-content col-md-9 col-12">
                <h2>Последние публикация</h2>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/image_small.png" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья на тему динамического сайта...</a>
                        </h3>
                        <i class="far fa-user"> Имя автора</i>
                        <i class="far fa-calendar"> Mar 11, 2021</i>
                        <p class="preview-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/image_small.png" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья на тему динамического сайта...</a>
                        </h3>
                        <i class="far fa-user"> Имя автора</i>
                        <i class="far fa-calendar"> Mar 11, 2021</i>
                        <p class="preview-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
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