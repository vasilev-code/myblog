<!DOCTYPE html>
<html>
    <head>
        <title>Programmer blog and not only</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <header>
            <div class="container">
                <div class="row">
                    <ul>
                        <a>Программирование</a>
                        <a>Тестирование приложений</a>
                        <a>Информационная безопасность</a>
                        <a>Саморазвитие</a>
                        <a>Полезные ресурсы</a>
                        <a>Философия</a>
                        <a>Обо мне</a>
                    </ul>
                </div>
            </div>
</header>
        <div class="container-fluid">
            <div class="row">
            <div id="mySidenav" class="sidenav">
  
  <a href="#" class="alert alert-secondary">Программирование</a>
  <a href="#" class="python">Python</a>
  <a href="#">PHP</a>
  <a href="#">Фреймворк Laravel</a>
  <a href="#" class="alert alert-secondary">Тестирование приложений</a>
  <a href="#">Java</a>
  <a href="#">Python</a>
  <a href="#">JavaScript</a>
  <a href="#">PHP</a>
  <a href="#" class="alert alert-secondary">Информационная безопасность</a>
  <a href="#">Пентест веб-приложений</a>
  <a href="#" class="alert alert-secondary">Прочее</a>
  <a href="#">Саморазвитие</a>
  <a href="#">Философия</a>

            </div>
        <main class="container">
        
        <div id="skySlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#skySlider" data-slide-to="0" class="active"></li>
        <li data-target="#skySlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner ">
    
        <div class="carousel-item active">
            
            <div class="carousel-caption d-none d-md-block">
          <h3>Laravel 8.0</h3>
          <p>Обновление</p>
          
        </div>
        </div>
        <div class="carousel-item">
            <img src="nature/042.jpg" class="d-block w-50 h-50 mx-auto carousel2" alt="Природа">
        </div>
        
    </div>
    <a class="carousel-control-prev" href="#skySlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#skySlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

            @yield('main')
            @yield('adminpanel')
            @yield('content')
            @yield('adminregistration')
        </main>
        </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <ul>
                        <a>Связь со мной</a>
                        <a>Copyright, 2021</a>
                    </ul>
                    
                </div>
            </div>
        </footer>
        <script src="jquery-3.5.1.min.js"></script><!-- Scripts begin -->
        <script src="js/bootstrap.bundle.js"></script><!-- Scripts -->
    </body>
    <style>
            .bg-white {
                background-color: #B5B3B3 !important;
            }
            nav {
                margin-left: 38%;
            }
            a {
                color: black;
            }
            a:hover {
                color: black;
            }
            .border {
                border: 4px solid #B5B3B3 !important;
            }
            </style>
</html>