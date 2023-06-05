<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кафедра "Информационные системы и технологии" в РИ</title>
</head>

<style>
    body {
        background-color: #A9A9A9;
        font-family: cursive;
        letter-spacing: 8px;
    }
</style>

<div class="footer">
    <x-title></x-title>
    <div class="blockcode">
        <footer class="page-footer shadow">
            <div class="d-flex flex-column mx-auto py-5" style="width: 80%">
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        <a href="/" class="d-flex align-items-center p-0 text-dark">
                            <span class="h5 font-weight-bold">О нас</span>
                        </a>
                        <p class="my-3" style="width: 250px">
                            Мы рады, что вы зашли на сайт нашей кафедры!
                        </p>
                        <span class="mt-4">
                            <button class="btn btn-dark btn-flat p-2">
                                <i class="fa fa-facebook"></i>
                            </button>
                            <button class="btn btn-dark btn-flat p-2">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button class="btn btn-dark btn-flat p-2">
                                <i class="fa fa-instagram"></i>
                            </button>
                        </span>
                    </div>
                    <div>
                        <p class="h5 mb-4" style="font-weight: 600">Поступление</p>
                        <ul class="p-0" style="list-style: none; cursor: pointer">
                            <li class="my-2">
                                <a class="text-dark" href="/">Студентам</a>
                            </li>
                            <li class="my-2">
                                <a class="text-dark" href="/">Абитуриентам</a>
                            </li>
                            <li class="my-2">
                                <a class="text-dark" href="/">Магистратура</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="h5 mb-4" style="font-weight: 600">Помощь</p>
                        <ul class="p-0" style="list-style: none; cursor: pointer">
                            <li class="my-2">
                                <a class="text-dark" href="/">Тех поддержка</a>
                            </li>
                            @guest()
                            <li class="my-2">
                                <a class="text-dark" href="{{ route('login') }}">Войти</a>
                            </li>
                            <li class="my-2">
                                <a class="text-dark" href="{{ route('register') }}">Регистрация</a>
                            </li>
                            @endguest
                            @auth()

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li class="my-2">
                                <a class="text-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Выход</a>
                            </li>
                            @endauth
                        </ul>
                    </div>
                    <div>
                        <p class="h5 mb-4" style="font-weight: 600">Контакты</p>
                        <ul class="p-0" style="list-style: none; cursor: pointer">
                            <li class="my-2">
                                <a class="text-dark" href="/">+7(988)-822-62-39</a>
                            </li>
                            <li class="my-2">
                                <a class="text-dark" href="/">@bk7334</a>
                            </li>
                            <li class="my-2">
                                <a class="text-dark" href="/">@tm.moker</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>