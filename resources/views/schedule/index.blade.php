@extends('layouts.apps')

@section('content')
<main class="container py-4 px-5">
    <div class="container-fluid">
        <form class="d-flex w-100 " action="{{ route('search.index') }}">
            <input for="name" name="name" class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
            <button class="btn btn-outline-success" type="submit">Поиск</button>
        </form>
        @auth
        <a href="{{ route('schedule.create') }}" class="btn btn-primary">Добавить рассписание</a>
        @endauth       
    </div>
</main>
@endsection