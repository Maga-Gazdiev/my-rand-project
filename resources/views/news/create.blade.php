@extends('layouts.apr')

@section('mvcontent')

<div class="container th">
    <main class="container py-4 page-footer shadow">
        <div class="container py-4 px-5">
            <div class="mb-5"></div>
            <div class="container-lg">
                <div class="mb-3 rigth"></div>
                <div class="group mb-5">
                    <h1>Объявить новость</h1>
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
                        <input class="btn btn-light" type="submit" value="Создать">
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection