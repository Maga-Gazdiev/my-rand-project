@extends('layouts.apps')

@section('content')
<main class="container py-4 px-5">


    <div class="mb-3 rigth"></div>
    <div class="group mb-5">

        @auth
        <a href="{{ route('news.create') }}" class="btn btn-primary">Рассказать новость</a>
        @endauth
        <div class="mb-5"></div>
        <a>
            <h1 class="mb-3">Новости на сегодня</h1>
        </a>
        <table class="table mt-2">
            <thead>
                <tr>
                    <th>Тема</th>
                    <th>Текст</th>
                    <th>Дата создания</th>
                </tr>
            </thead>
            <tbody>   
            @foreach ($new as $newc)        
                <tr>
                    <td>{{ $newc->name }}</td>
                    <td>{{ $newc->description }}</td>
                    <td>{{ $newc->created_at->format('d.m.Y') }}</td>
                </tr>  
            @endforeach            
            </tbody>
        </table>


        <div class="mb-5"></div>
        <a>
            <h1 class="mb-3">Новости за все время</h1>
        </a>
        <table class="table mt-2">
            <thead>
                <tr>
                    <th>Тема</th>
                    <th>Текст</th>
                    <th>Дата создания</th>
                </tr>
            </thead>
            <tbody>   
            @foreach ($news->all() as $new)        
                <tr>
                    <td>{{ $new->name }}</td>
                    <td>{{ $new->description }}</td>
                    <td>{{ $new->created_at->format('d.m.Y') }}</td>
                </tr>  
            @endforeach            
            </tbody>
        </table>
    </div>


</main>
@endsection