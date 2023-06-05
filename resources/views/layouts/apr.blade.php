<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кафедра "Информационные системы и технологии" в РИ</title>
</head>

<style>
    .bb {
        margin-top: 25px;
        letter-spacing: 15px;
    }

    body {
        background-color: #A9A9A9;
        font-family: cursive;
        letter-spacing: 8px;
    }

    .nn {
        margin-top: 50px;
    }

    .cnnn {
        background-color: #A9A9A9;
        margin-top: 25px;
        margin-left: 123px;
        margin-right: 123px;
        text-decoration: none;
        font-family: Verdana;
        color: black;
    }

    .text {
        writing-mode: vertical-lr;
        text-orientation: upright;
        margin-top: 115px;
        margin-left: 35px;
        margin-right: 35px;
        text-decoration: none;
        font-family: Verdana, Helvetica, Arial, sans-serif;
        color: black;
    }

    .footer {
        margin-left: 105px;
        margin-right: 105px;
        text-decoration: none;
        font-family: Verdana;
        letter-spacing: 0;
        color: black;
    }

    .cdd {
        margin-bottom: 15px;
        color: black;
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: stretch;
        color: black;
    }

    .link {
        text-decoration: none;
        color: black;
    }
    
    .text-center {
        word-break: break-all;
        color: black;
    }
</style>

<body>
    <header class="flex-shrink-0">
        <div class="cnnn">
            <nav class="cnnn navbar navbar-light bg-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand text-dark" href="{{ route('welcome') }}">Кафедра "Информационные системы и технологии" в ИнгГУ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Панель</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Главная</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('teacher.index') }}">Преподаватели</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('schedule.index') }}">Расписание</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('news.index') }}">Новости</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('aboutCaf.index') }}">О кафедре</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="mb-5 nn">
        <div>
            @yield('mvcontent')
        </div>
        <div class="container-lg">
            @extends('layouts.footer')
        </div>
</body>