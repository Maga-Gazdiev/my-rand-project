<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кафедра "Информационные системы и технологии" в РИ</title>
</head>

<style>
    body {
        background-color: #EDC7B7;
    }
</style>


<body class="container-lg">
    <header class="flex-shrink-0">
        <div>
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="navbar navbar-expand-md px-5">
                        <a class="navbar-brand flex items-center" href="{{ route('welcome') }}">
                            <img src="https://i.ibb.co/85wwWX2/photo-5451824120682628183-x-ri-UQ1.jpg">
                        </a>

                        <div style="width: 90px;"></div>
                        <nav>
                            <div class="dropdown">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="https://i.ibb.co/qNT1fy6/i-wsYh9.webp" alt="Панель навигации">
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                                <li><a class="dropdown-item" href="{{ route('welcome') }}">Главная</a></li>
                                                <li><a class="dropdown-item" href="{{ route('news.index') }}">Новости</a></li>
                                                <li><a class="dropdown-item" href="{{ route('schedule.index') }}">Расписание</a></li>
                                                <li><a class="dropdown-item" href="{{ route('teacher.index') }}">Преподователи</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
                            <ul class="flex flex-col font-medium lg:flex-row lg:space-x-8 lg:mt-0 navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link"></a>
                                </li>
                                <li class="nav-item active">
                                    <a href="{{ route('welcome') }}" class="text-primary block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0 nav-link">
                                        Главная</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="{{ route('news.index') }}" class="text-primary block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0 nav-link">
                                        Новости</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="{{ route('schedule.index') }}" class="text-primary block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0 nav-link">
                                        Расписание</a>
                                </li>
                                <li class="nav-item active" style="width: 220px;">
                                    <a href="{{ route('teacher.index') }}" class="text-primary block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0 nav-link">
                                        Преподаватели </a>
                                </li>
                            </ul>
                        </div>
                        @guest()
                        <div class="flex items-center lg:order-2">
                            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded">
                                <button type="button" class="btn btn-primary">Вход</button>
                            </a>
                            <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded ml-2">
                                <button type="button" class="btn btn-primary">Регистрация</button>
                            </a>
                        </div>
                        @endguest
                    </div>

                </nav>
            </div>

        </div>
    </header>
    @yield('content')
</body>