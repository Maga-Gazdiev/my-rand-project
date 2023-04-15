@extends('layouts.apps')

@section('content')
<main class="container-lg py-4">
    <h1 class="mb-5">Рассказать новость</h1>
    <form method="POST" action="{{ route('news.store') }}" accept-charset="UTF-8" class="w-50">
    @csrf
        <div class="form-group mb-3">
            <label for="name">Тема новости</label>
            <input class="form-control" name="name" type="text" id="name">
            <div class="mb-3"></div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" id="description" name="description" class="form-label">Текст</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <input class="btn btn-primary mt-3" type="submit" value="Создать">
    </form>
</main>
@endsection