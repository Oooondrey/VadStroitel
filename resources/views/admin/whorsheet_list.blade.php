@extends('layout.app')
@section('title')
    Список заявок
@endsection
@section('main')
    <div class="container">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="" style="color: #EB5E28; font-weight: bold">@yield('title')</h2>

                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                @foreach($worksheets as $worksheet)
                    <div class="col">
                        <div class="card-body">
                            <div class="row row-cols-1 row-cols-md-1 g-4 mt-4">
                                <div class="col ps-0" style="width: 66.5%">
                                    <div class="card-body">
                                        <h2 class="header-text" style="color: #252422">{{$worksheet->fio}}</h2>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 g-4 mt-4"style="width: 33.5%">
                                    <div class="col ps-0 mt-0" style="width: 8rem;height: 3rem">
                                        <div class="card-body">
                                            <form method="post" action="{{route('DelWorksheet',['worksheet'=>$worksheet])}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn orange-btn  shadow-none bts " >Удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=""></div>
                            <div class="row row-cols-3 row-cols-md-3 g-4 mt-4">
                                <div class="col">
                                    <div class="card-body ps-0">
                                        <h4 class="h-description">Вакансия</h4>
                                        <p class="dark-txt mt-3">{{$worksheet->vacancy->title}}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body ps-0">
                                        <h4 class="h-description">Адрес почты</h4>
                                        <p class="dark-txt mt-3">{{$worksheet->email}}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body ps-0 ">
                                        <h4 class="h-description ">Телефон</h4>
                                        <p class="dark-txt mt-3">{{$worksheet->phone}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
