@extends('layouts.apps')

@section('content')
<div class="mb-5"></div>
<main class="container by-4">
    <form method="POST" action="{{ route('teacher.store') }}" accept-charset="UTF-8" class="w-50">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Имя</label>
            <input class="form-control" name="name" type="text" id="name">
        </div>

        <div class="form-group mb-3">
            <label for="biog">Описание</label>
            <textarea class="form-control" name="biog" type="text" rows="10" id="biog"></textarea>
        </div>

        <input class="btn btn-primary mt-3" type="submit" value="Добавить">
    </form>
</main>
@endsection