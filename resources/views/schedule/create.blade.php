@extends('layouts.apps')

@section('content')
<main class="container py-4 px-5">
<form method="POST" action="{{ route('schedule.store') }}" accept-charset="UTF-8" class="w-50">
    @csrf
        <div class="form-group mb-3">
            <label for="name"><h1>Курс</h1></label>
            <input class="form-control" placeholder="Цифра вашего курса" name="name" type="text" id="name">
            
            <label for="firstWeekMonday">Понедельник первой недели</label>
            <input class="form-control" name="firstWeekMonday" type="text" id="firstWeekMonday">

            <label for="firstWeekTuesday">Вторник первой недели</label>
            <input class="form-control" name="firstWeekTuesday" type="text" id="firstWeekTuesday">

            <label for="firstWeekWednesday">Среда первой недели</label>
            <input class="form-control" name="firstWeekWednesday" type="text" id="firstWeekWednesday">

            <label for="firstWeekThursday">Четверг первой недели</label>
            <input class="form-control" name="firstWeekThursday" type="text" id="firstWeekThursday">

            <label for="firstWeekFriday">Пятница первой недели</label>
            <input class="form-control" name="firstWeekFriday" type="text" id="firstWeekFriday">

            <label for="firstWeekSaturday">Суббота первой недели</label>
            <input class="form-control" name="firstWeekSaturday" type="text" id="firstWeekSaturday">

            <label for="secondWeekMonday">Понедельник второй недели</label>
            <input class="form-control" name="secondWeekMonday" type="text" id="secondWeekMonday">

            <label for="secondWeekTuesday">Вторник второй недели</label>
            <input class="form-control" name="secondWeekTuesday" type="text" id="secondWeekTuesday">

            <label for="secondWeekWednesday">Среда второй недели</label>
            <input class="form-control" name="secondWeekWednesday" type="text" id="secondWeekWednesday">

            <label for="secondWeekThursday">Четверг второй недели</label>
            <input class="form-control" name="secondWeekThursday" type="text" id="secondWeekThursday">

            <label for="secondWeekFriday">Пятница второй недели</label>
            <input class="form-control" name="secondWeekFriday" type="text" id="secondWeekFriday">

            <label for="secondWeekSaturday">Суббота второй недели</label>
            <input class="form-control" name="secondWeekSaturday" type="text" id="secondWeekSaturday">
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