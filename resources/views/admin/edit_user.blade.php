@extends('layout.app')
@section('title')
    Редактирование сотрудника
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
                        <div class=" d-flex justify-content-center mb-5">
                            <form method="post" action="{{route('EditUser',['user'=>$user])}}" class="w-50 mt-5">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="fio" class="form-label" style="font-weight:bold">Фамилия Имя Отчество</label>
                                    <input  type="text" class="form-control inp @error('fio') is-invalid @enderror" id="fio" name="fio" value="{{$user->fio}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('fio')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label" style="font-weight:bold">Номер телефона</label>
                                    <input type="tel" class="form-control inp @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{$user->phone}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('phone')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label "style="font-weight:bold">Адрес почты </label>
                                    <input type="email" class="form-control inp @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label" style="font-weight:bold">Пароль</label>
                                    <input type="password" class="form-control inp @error('password') is-invalid @enderror" id="password" name="password" value="{{$user->password}}">
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
                                <button  type="submit" class="w-100 btn btn-primary orange-btn shadow-none mt-5" style="height: 2.375rem; font-size: 1rem">Изменить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



