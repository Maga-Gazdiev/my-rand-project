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
                                Отчет НИР ФМФ 08.12.2022 ИСиТ
                            </h2>
                            <div class="mb-3"></div>
                            <div class="text-center">
                                <a href="{{ route('aboutCaf.nir.public') }}" class="link btn btn-light">1) Публикации за 2022</a>
                                <div class="mb-2"></div>
                                <a href="{{ route('aboutCaf.nir.study') }}" class="link btn btn-light">2) Учебно-методическая культура</a>
                                <div class="mb-2"></div>
                                <a href="{{ route('aboutCaf.nir.qualic') }}" class="link btn btn-light">3) Повышение квалификации преподавателей кафедры в 2022</a>
                                <div class="mb-2"></div>
                                <a href="{{ route('aboutCaf.nir.desert') }}" class="link btn btn-light">4) Диссертации, защищенные сотрудниками кафедры</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection