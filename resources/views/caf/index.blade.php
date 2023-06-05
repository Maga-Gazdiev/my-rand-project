@extends('layouts.apr')

@section('mvcontent')
<div class="container th">
    <main class="container py-4 page-footer shadow">
        <div class="container py-4 px-5">
            <div class="mb-5"></div>
            <div class="container-lg">
                <div class="d-grid gap-2 d-md-block">
                    <div class="container-lg">
                        <div class="mb-3">
                            <h2 class="h1 text-center">
                                О кафедре
                            </h2>
                            <div class="mb-3"></div>
                            <div class="text-center">
                              <a href="{{ route('aboutCaf.nir.index') }}" class="link btn btn-light">Отчет НИР ФМФ 08.12.2022 ИСиТ</a>
                              <a href="{{ route('aboutCaf.ymn.index') }}" class="link btn btn-light">Отчет кафедры на 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection