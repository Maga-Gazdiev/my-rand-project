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
</style>

<body>
    <header class="flex-shrink-0">
        <div class="bb text-center fs-3">WELCOME IN "ISIT"</div>
    </header>
    <div class="mb-5">
        <div>
            @yield('mvcontent')
        </div>
        <div class="container-lg">
            @extends('layouts.footer')
        </div>
</body>