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
                            <?php if (isset($_SESSION['id'])): ?>
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <?php  echo $_SESSION['login']; ?>
                                </a>
                                <ul>
                                    <?php  if( $_SESSION['admin']): ?>
                                    <li><a href="#">Админ панель</a></li>
                                    <?php endif; ?>
                                    <li><a href="/logout.php">Выход</a></li>
                                </ul>
                            <?php else: ?>
                                <a href="/log.php">
                                    <i class="fa fa-user"></i>
                                    Войти
                                </a>
                                <ul>
                                    <li><a href="/reg.php">Регистрация</a></li>

                                </ul>
                            <?php endif; ?>


                        </li>

                    </ul>
                </nav>
            </div>
        </div>

    </header>

