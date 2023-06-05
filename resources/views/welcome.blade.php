@extends('layouts.welcome')

@section('mvcontent')

<style>
  .text {
    writing-mode: vertical-lr;
    text-orientation: upright;
    margin-top: 115px;
    margin-left: 35px;
    margin-right: 35px;
    text-decoration: none;
    font-family: Verdana, Helvetica, Arial, sans-serif;
  }

  .footer {
    margin-left: 105px;
    margin-right: 105px;
    text-decoration: none;
    font-family: Verdana;
    letter-spacing: 0;
  }

  .th {
    font-family: cursive;
    letter-spacing: 8px;
  }

  .cdd {
    margin-bottom: 15px;
  }

  .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: stretch;
  }
</style>

<div class="container-lg th">
  <x-title></x-title>
  <main class="container py-4 page-footer shadow">

    <div class="d-flex flex-column mx-auto">
      <div class="container">
        <div class="col">
          <div class="fs-5">
            <div class="text">*****MENU*****</div>
          </div>
        </div>
        <div class="rubbery">
          <div class="cdd">
            <div class="text-center fs-5">2023</div>
          </div>
          <div class="container">
            <div class="row align-items-start">
              <div class="col">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://i.ibb.co/YRXKqTs/photo-5451747369617049594-x-3ew-Q3.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block top">
                        <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="https://i.ibb.co/dKfrrVq/photo-5451747369617049601-x-2fxe6.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block top">
                        <p>Некоторый репрезентативный заполнитель для второго слайда.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="https://i.ibb.co/pfYTnYt/photo-5451747369617049603-x-1-5ne-Ua.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block top">
                        <p>Некоторый репрезентативный заполнитель для третьего слайда.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="fixed">
          <div class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            <div class="text">*****MENU*****</div>
          </div>
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
      </div>
    </div>
  </main>
</div>
@endsection