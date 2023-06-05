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
                            Отчет кафедры на 2022
                            </h2>
                            <div class="mb-3"></div>
                            <div class="text-center">
                              <a href="{{ route('aboutCaf.ymn.organ') }}" class="link btn btn-light">1) Организационная работа на кафедре</a>
                              <div class="mb-2"></div>
                              <a href="{{ route('aboutCaf.ymn.prov') }}" class="link btn btn-light">2) Организация и проведение практик</a>
                              <div class="mb-2"></div>
                              <a href="{{ route('aboutCaf.ymn.study') }}" class="link btn btn-light">3) Учебная и учебно-методичекая работа</a>
                              <div class="mb-2"></div>
                              <a href="{{ route('aboutCaf.ymn.vosp') }}" class="link btn btn-light">4) Воспитательная работа</a>
                              <div class="mb-2"></div>
                              <a href="{{ route('aboutCaf.ymn.nauch') }}" class="link btn btn-light">5) Научно-исследовательская работа</a>
                              <div class="mb-2"></div>
                              <a href="{{ route('aboutCaf.ymn.libr') }}" class="link btn btn-light">6) Библиотечно-информационное обеспечение реализуемых образовательных программ</a>
                              <div class="mb-2"></div>
                              <a href="{{ route('aboutCaf.ymn.sost') }}" class="link btn btn-light">7) Состояние материально-технической базы по направлениям подготовки</a>
                              <div class="mb-2"></div>
                              <a href="{{ route('aboutCaf.ymn.pps') }}" class="link btn btn-light">8) Организация повышении квалификации ППС</a>
                              <div class="mb-2"></div>
                              <a href="{{ route('aboutCaf.ymn.work') }}" class="link btn btn-light">9) Взаимодействие с работадателями и трудоустройство выпусников</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection