@extends('layouts.apr')

@section('mvcontent')
<div class="container th">
    <main class="container py-4 page-footer shadow">
        <div class="container py-4 px-5">
            <div class="mb-5"></div>
            <div class="mb-5"></div>
            <div class="container-lg">
                <div class="d-grid gap-2 d-md-block">
                    <div class="fs-1 text-center">Расписание</div>
                    @auth
                    <x-title></x-title>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="{{ route('schedule.create') }}" class="btn btn-light bbbt">Добавить рассписание</a>
                    </div>
                    <x-title></x-title>
                    @endauth
                    @if(!empty($schedule))
                    @foreach($schedule as $schedules)
                    <div class="container-lg">
                        <div class="mb-5">
                            <table class="table">
                                <div class="fs-1 mb-3 text-center">Курс {{ $schedules->name }}</div>

                                <div>
                                    <div class="fs-5 text-center">Неделя-1</div>
                                    <thead>
                                        <tr>
                                            <th scope="col">Понедельник</th>
                                            <th scope="col">Вторник</th>
                                            <th scope="col">Среда</th>
                                            <th scope="col">Четверг</th>
                                            <th scope="col">Пятница</th>
                                            <th scope="col">Суббота</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $schedules->firstWeekMonday }}</td>
                                            <td>{{ $schedules->firstWeekTuesday }}</td>
                                            <td>{{ $schedules->firstWeekWednesday }}</td>
                                            <td>{{ $schedules->firstWeekThursday }}</td>
                                            <td>{{ $schedules->firstWeekFriday }}</td>
                                            <td>{{ $schedules->firstWeekSaturday }}</td>
                                        </tr>
                                    </tbody>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <div class="fs-5 text-center">Неделя-2</div>
                                        <thead>
                                            <tr>
                                                <th scope="col">Понедельник</th>
                                                <th scope="col">Вторник</th>
                                                <th scope="col">Среда</th>
                                                <th scope="col">Четверг</th>
                                                <th scope="col">Пятница</th>
                                                <th scope="col">Суббота</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>{{ $schedules->secondWeekMonday }}</td>
                                                <td>{{ $schedules->secondWeekTuesday }}</td>
                                                <td>{{ $schedules->secondWeekWednesday }}</td>
                                                <td>{{ $schedules->secondWeekThursday }}</td>
                                                <td>{{ $schedules->secondWeekFriday }}</td>
                                                <td>{{ $schedules->secondWeekSaturday }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <x-title></x-title>
            </div>
        </div>
    </main>
</div>
@endsection