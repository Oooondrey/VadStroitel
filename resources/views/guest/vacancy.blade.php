@extends('layout.app')
@section('title')
    Вакансии
@endsection
@section('main')
    <div class="container">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="" >Вакансии</h2>
                    </div>
                </div>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col " style="">
                    <div class="card-body">
                        <div class="">
                            <p class="dark-txt" style="width: 70%">
                                На этой странице вы сможете просмотреть доступные вакансии и заполнить анкету
                            </p>
                        </div>
                    </div>
                </div>
                    @auth()
                        @if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user())
                        <div class="col" >
                            <div class="card-body  me-0" style="width:100%">
                                <a href="{{route('AddVacancyPage')}}">
                                    <button class="btn dark-btn  " style="width: 20rem;height: 2.5rem; font-size: 1.1rem">Добавить вакансию</button>
                                </a>
                            </div>
                        </div>
                      @endif
                    @endauth()
            </div>

            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                @foreach($vacancies as $vacancy)
                <div class="col">
                    <div class="card-body">
                        <h2 class="header-text" style="color: #252422">{{$vacancy->title}}</h2>
                        <div class="row row-cols-3 row-cols-md-3 g-4 " >
                            <div class="col">
                                <div class="card-body ps-0 " >
                                    <h4 class="h-description">Обязанности</h4>
                                    <p class="grey-txt">{{$vacancy->dutys}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ms-3 ">
                                    <h4 class="h-description">Общие требования</h4>
                                    <p class="grey-txt">{{$vacancy->requirements}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ms-3">
                                    <h4 class="h-description">Требования к образованию </h4>
                                    <p class="grey-txt">{{$vacancy->education}}</p>
                                    <div class="d-flex">
                                        <h4 class="h-description" style="color: #EB5E28; font-weight: bold">Зарплата от {{$vacancy->pay}} руб. </h4>
                                    </div>
                                    @auth()
                                        @if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user())
                                            <div class="row row-cols-1 row-cols-lg-2 g-4  mt-2">
                                                <div class="col ps-0 ">
                                                    <div class="card-body pb-0 pt-0">
                                                        <div class="me-3">
                                                            <a href="{{route('EditVacancyPage',['vacancy'=>$vacancy])}}">
                                                                <button class="btn grey-btn shadow-none bts" >
                                                                    Изменить
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col ps-0">
                                                    <div class="card-body pt-0">
                                                        <div class="">
                                                            <form action="{{route('DelVacancy',['vacancy'=>$vacancy])}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn orange-btn shadow-none bts" >
                                                                    Удалить
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col">
                    <div class="card-body">

                        <div class="d-flex justify-content-center">
                            <h2 class="header-text">Заполните анкету</h2>
                        </div>
                        <div class=" d-flex justify-content-center mb-5">
                            <form method="post" action="{{route('AddWorksheet')}}" class="w-50 mt-5">
                                @csrf
                                @method('post')
                                <div class="mb-3">
                                    <label for="fio" class="form-label" style="font-weight:bold">Фамилия Имя Отчество</label>
                                    <input  type="text" class="form-control inp @error('fio') is-invalid @enderror" id="fio" name="fio">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('fio')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label" style="font-weight:bold">Номер телефона</label>
                                    <input type="tel" class="form-control inp @error('phone') is-invalid @enderror" id="phone" name="phone">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('phone')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label "style="font-weight:bold">Адрес почты </label>
                                    <input type="email" class="form-control inp @error('email') is-invalid @enderror" id="email" name="email">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label" style="font-weight:bold">Выбор вакансии </label>
                                    <select class="form-select inp" name="vacancy" id="">
                                        @foreach($vacancies as $vacancy)
                                            <option class="form-select" value="{{$vacancy->id}}">
                                                {{$vacancy->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 mt-5 form-check ">
                                    <input type="checkbox" class="form-check-input mt-0 inpcheck" id="exampleCheck1" style="width: 1.5rem;height: 1.5rem" name="rules">
                                    <label class="form-check-label ms-2 mb-2" for="exampleCheck1" style="font-size: 1.1rem">Даю согласие на обработку персональных данных</label>
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('rules')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <button  type="submit" class="w-100 btn btn-primary orange-btn shadow-none">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


