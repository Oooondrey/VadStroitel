@extends('layout.app')
@section('title')
    Редактирование вакансии
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
                            <form action="{{route('EditVacancy',['vacancy'=>$vacancy])}}" class="w-50 mt-5" method="post">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="title" class="form-label" style="font-weight:bold">Должность</label>
                                    <input  type="text" class="form-control inp @error('title') is-invalid @enderror" id="title" name="title" value="{{$vacancy->title}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('title')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="education" class="form-label" style="font-weight:bold">Требования к образованию</label>
                                    <input type="text" class="form-control inp @error('education') is-invalid @enderror" id="education" name="education" value="{{$vacancy->education}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('education')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pay" class="form-label "style="font-weight:bold">Зарплата </label>
                                    <input type="text" class="form-control inp @error('pay') is-invalid @enderror" id="pay" name="pay" value="{{$vacancy->pay}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('pay')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="requirements" class="form-label" style="font-weight:bold">общие требования </label>
                                    <textarea class="form-control inp @error('requirements') is-invalid @enderror" name="requirements" id="requirements" cols="30" rows="5" >{{$vacancy->requirements}}</textarea>
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('requirements')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="dutys" class="form-label" style="font-weight:bold">Обязанности </label>
                                    <textarea class="form-control inp @error('dutys') is-invalid @enderror" name="dutys" id="dutys" cols="30" rows="5">{{$vacancy->dutys}}</textarea>
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('dutys')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <button  type="submit" class="w-100 btn btn-primary orange-btn shadow-none mt-5" >Изменить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


