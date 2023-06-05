@extends('layouts.apr')

@section('mvcontent')

<div class="container th">
    <main class="container py-4 page-footer shadow">
        <div class="container py-4 px-5">
            <div class="mb-5"></div>
            <div class="container-lg">
                <div class="mb-3 rigth"></div>
                <div class="group mb-5">
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
                </div>
            </div>
        </div>
    </main>
</div>
@endsection