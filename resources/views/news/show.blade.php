@extends('layouts.apps')

@section('content')
<div class="mb-5"></div>
<div class="container-lg">
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

            <div class="text">
                {{ $posts->description }}
            </div>
        </div>
    </div>
</div>
@endsection