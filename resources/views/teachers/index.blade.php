@extends('layouts.apr')
@section('mvcontent')

<div class="container th">
    <main class="container py-4 page-footer shadow">
        <div class="container py-4 px-5">
            <div class="mb-5"></div>
            <div class="container-lg">
                <div class="mb-3 rigth"></div>
                <div class="fs-1 text-center">Преподаватели</div>
                @auth
                <x-title></x-title>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="{{ route('teacher.create') }}" class="btn btn-light">Добавить</a>
                </div>
                <x-title></x-title>
                @endauth
                @if(!empty($posts))
                @foreach($posts as $post)
                <div class="container-lg">
                    <div class="mb-3">
                        <figure>
                            <blockquote class="blockquote">
                                <a href="{{ route('teacher.show', $post->id) }}" class="link text-dark">
                                    <h2>{{ $post->name }}</h2>
                                </a>
                            </blockquote>
                            <figcaption class="blockquote-footer text-dark">
                                {{ substr($post->biog, 0, 1050) }}...
                            </figcaption>
                        </figure>
                    </div>
                    <x-title></x-title>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </main>
</div>
@endsection