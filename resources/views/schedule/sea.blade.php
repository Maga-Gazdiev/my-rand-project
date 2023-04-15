@extends('layouts.apps')

@section('content')
<main class="container py-4 px-5">
    <div class="container-fluid">
        @auth
        <a href="{{ route('schedule.create') }}" class="btn btn-primary">Добавить рассписание</a>
        @endauth
        <div class="mb-5"></div>
        <h1>Курс {{$name}}</h1>
        
        <div class="mb-4"></div>
        <table class="table mt-2">
            <h1>Первая неделя</h2>
                <thead>
                    <tr>
                        <th class="g-col-6">Понедельник</th>
                        <th class="g-col-6">Вторник</th>
                        <th class="g-col-6">Среда</th>
                        <th class="g-col-6">Четверг</th>
                        <th class="g-col-6">Пятница</th>
                        <th class="g-col-6">Суббота</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedule->all() as $news)
                    <tr>
                        <td>{{ $news->firstWeekMonday }}</td>
                        <td>{{ $news->firstWeekTuesday }}</td>
                        <td>{{ $news->firstWeekWednesday }}</td>
                        <td>{{ $news->firstWeekThursday }}</td>
                        <td>{{ $news->firstWeekFriday }}</td>
                        <td>{{ $news->firstWeekSaturday }}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        <table class="table mt-2">
            <h1>Вторая неделя</h2>
                <thead>
                    <tr>
                        <th class="g-col-6">Понедельник</th>
                        <th class="g-col-6">Вторник</th>
                        <th class="g-col-6">Среда</th>
                        <th class="g-col-6">Четверг</th>
                        <th class="g-col-6">Пятница</th>
                        <th class="g-col-6">Суббота</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedule->all() as $news)
                    <tr>
                        <td>{{ $news->secondWeekMonday }}</td>
                        <td>{{ $news->secondWeekTuesday }}</td>
                        <td>{{ $news->secondWeekWednesday }}</td>
                        <td>{{ $news->secondWeekThursday }}</td>
                        <td>{{ $news->secondWeekFriday }}</td>
                        <td>{{ $news->secondWeekSaturday }}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>

</main>
@endsection