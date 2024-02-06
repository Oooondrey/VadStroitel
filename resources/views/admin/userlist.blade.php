@extends('layout.app')
@section('title')
    Список сотрудников
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
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h2 class="header-text">Добавление сотрудника</h2>
                        </div>
                        <div class=" d-flex justify-content-center mb-5">
                            <form method="post" action="{{route('AddUser')}}" class="w-50 mt-5">
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
                                    <label for="password" class="form-label" style="font-weight:bold">Пароль</label>
                                    <input type="password" class="form-control inp @error('password') is-invalid @enderror" id="password" name="password">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('password')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="vacancy" class="form-label" style="font-weight:bold">Выбор вакансии </label>
                                    <select class="form-select inp" name="vacancy_id" id="vacancy_id">
                                        @foreach($vacancies as $vacancy)
                                            <option class="form-select" value="{{$vacancy->id}}">
                                                {{$vacancy->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button  type="submit" class="w-100 btn btn-primary dark-btn shadow-none mt-5" style="height: 2.375rem; font-size: 1rem">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                @foreach($users as $user)
                <div class="col">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-1 g-4 mt-4">
                            <div class="col ps-0" style="width: 66.5%">
                                <div class="card-body">
                                    <h2 class="header-text" style="color: #252422">{{$user->fio}}</h2>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 g-4 mt-4"style="width: 33.5%">
                                <div class="col mt-0 me-3" style="width: 8rem;height: 3rem">
                                    <div class="card-body">
                                        <a href="{{route('EditUserPage',['user'=>$user])}}">
                                            <button type="submit" class="btn grey-btn  shadow-none bts" >Изменить</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col mt-0" style="width: 8rem;height: 3rem">
                                    <div class="card-body">
                                        <form method="post" action="{{route('DelUser',['user'=>$user])}}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn orange-btn  shadow-none bts" >Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=""></div>
                        <div class="row row-cols-3 row-cols-md-3 g-4 mt-4">
                            <div class="col">
                                <div class="card-body ps-0">
                                    <h4 class="h-description">Должность</h4>
                                    <p class="dark-txt mt-3">{{$user->vacancy->title}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ps-0">
                                    <h4 class="h-description">Адрес почты</h4>
                                    <p class="dark-txt mt-3">{{$user->email}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ps-0 ">
                                    <h4 class="h-description ">Телефон</h4>
                                    <p class="dark-txt mt-3">{{$user->phone}}</p>
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
