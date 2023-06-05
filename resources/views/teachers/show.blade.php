@extends('layouts.apr')

@section('mvcontent')

<div class="container th">
    <main class="container py-4 page-footer shadow">
        <div class="container py-4 px-5">
            <div class="mb-5"></div>
            <x-slot name="link">
                <a href="{{ route('news.index') }}">
                    {{ __('Назад') }}
                </a>
            </x-slot>

            @auth()
            @endauth

            <div class="container-lg">
                <div class="mb-3">
                    <h2 class="h1 text-center">
                        {{ $posts->name }}
                    </h2>

                    <div class="text-center">
                        {{ $posts->biog }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection