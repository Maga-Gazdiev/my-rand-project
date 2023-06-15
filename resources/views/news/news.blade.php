@extends('layouts.apr')

@section('mvcontent')

<div class="container th">
  <main class="container py-4 page-footer shadow">
    <div class="container py-4 px-5">
      <div class="mb-5"></div>
      <div class="container-lg">
        <div class="mb-3 rigth"></div>
        <div class="group mb-5">
          <div class="fs-1 text-center">Новости</div>
          @auth
          <x-title></x-title>
          <div class="d-grid gap-2 col-6 mx-auto">
            <a href="{{ route('news.create') }}" class="btn btn-light">Объявить новость</a>
          </div>
          <x-title></x-title>
          @endauth
          @if(!empty($news))
          @foreach($news as $new)
          <div class="container-lg">
            <div class="mb-3">
              <figure>
                <blockquote class="blockquote">
                  <a href="{{ route('news.show', $new->id) }}" class="link text-dark">
                    <h2>{{ $new->name }}</h2>
                  </a>
                </blockquote>
                <figcaption class="blockquote-footer text-dark">
                  {{ substr($new->description, 0, 650) }}...
                </figcaption>
              </figure>
            </div>
            <x-title></x-title>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </main>
</div>
@endsection