@extends('layouts.apps')

@section('content')
<style>
    .link {
        text-decoration: none;
    }
</style>
<div class="container-lg">
    @auth()
    <x-title>

        <div class="mb-5"></div>
        <div class="btn btn-primary btn-lg">
            <x-button-link href="{{ route('teacher.create') }}">
                {{ __('Добавить') }}
            </x-button-link>
        </div>
    </x-title>
    @endauth
    @if(!empty($posts))
    @foreach($posts as $post)
    <div class="container-lg">
        <div class="mb-3">
            <h2 class="h1">
                <a href="{{ route('teacher.sea', $post->id) }}" class="link">
                    {{ $post->name }}
                </a>
            </h2>

            <div class="small text-muted">
                {{ substr($post->biog, 0, 1050) }}...
            </div>
        </div>
        <x-title></x-title>
    </div>

    @endforeach
    @endif
</div>
@endsection