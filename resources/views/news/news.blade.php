@extends('layouts.apps')

@section('content')
<style>
    .link {
        text-decoration: none;
    }
</style>
<main class="container py-4 px-5">

    <div class="container-lg">
        <div class="mb-3 rigth"></div>
        <div class="group mb-5">
            <x-title>
                @auth
                <a href="{{ route('news.create') }}" class="btn btn-primary">Рассказать новость</a>
                @endauth
            </x-title>
            @if(!empty($news))
            @foreach($news as $new)       
                <div class="container-lg">
                    <div class="mb-3">
                        <h2 class="h1">
                            <a href="{{ route('news.sea', $new->id) }}" class="link">
                                {{ $new->name }}
                            </a>
                        </h2>

                        <div class="small text-muted">
                            {{ substr($new->description, 0, 650) }}...
                        </div>
                    </div>
                    <x-title></x-title>
                </div>
            @endforeach
            @endif
        </div>
    </div>


</main>
@endsection