<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@extends('layouts.apps')

@section('content')
<style>
  main {
    background-color: #FFE4E1;
  }
</style>

<main class="container-lg py-4">

  <h1 align="center">Личный кабинет</h1>
  <h5 class="py-2 px-4 px-5">Ник:<a class="px-3">{{$all->name}}</a></h5>
  <h5 class="py-2 px-4 px-5">Имя:<a class="px-3">{{$all->firstName}}</a></h5>
  <h5 class="py-2 px-4 px-5">Фамилия:<a class="px-3">{{$all->lastName}}</a></h5>
  <h5 class="py-2 px-4 px-5">Email:<a class="px-3">{{$email}}</a></h5>

  @auth()
  <div class="flex items-center lg:order-2">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    <div class='py-3' align="right">
      <a href="{{ route('logout') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <button type="button" class="btn btn-primary">Выход</button>
      </a>
    </div>
    <div align="right">
      <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded px-5">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >Удалить учетную запсь</button>
      </a>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Вы точно хотите удалить учетную запись?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
            <button type="button" class="btn btn-primary">Да</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endauth

</main>

@endsection