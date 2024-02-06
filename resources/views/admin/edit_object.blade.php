@extends('layout.app')
@section('title')
    Редактирование объекта
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
                            <form action="{{route('EditObject',['object'=>$object])}}" class="w-50 mt-5" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="title" class="form-label" style="font-weight:bold">Название объекта</label>
                                    <input  type="text" class="form-control inp @error('title') is-invalid @enderror" id="title" name="title" value="{{$object->title}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('title')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label" style="font-weight:bold">Адрес</label>
                                    <input type="text" class="form-control inp @error('address') is-invalid @enderror" id="address" name="address" value="{{$object->address}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('address')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label "style="font-weight:bold">Тип объекта </label>
                                    <select class="form-select inp" name="type" id="type">
                                        <option class="form-select" value="Жилой дом">
                                            Жилой дом
                                        </option>
                                        <option class="form-select" value="2">
                                            Промышленное сооружение
                                        </option>
                                        <option class="form-select" value="3">
                                            Реконструкция
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="square" class="form-label" style="font-weight:bold">Площадь м2</label>
                                    <input class="form-control inp @error('square') is-invalid @enderror" name="square" id="square" value="{{$object->square}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('square')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="img" class="form-label" style="font-weight:bold">Изображение</label>
                                    <input type="file" class="form-control inp @error('img') is-invalid @enderror" id="img" name="img[]" multiple>
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('img')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="year" class="form-label" style="font-weight:bold">Год ввода</label>
                                    <input type="month" class="form-control inp @error('year') is-invalid @enderror" id="year" name="year" value="{{$object->year}}">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('year')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="year" class="form-label" style="font-weight:bold">Описание</label>
                                    <textarea type="text" class="form-control inp @error('description') is-invalid @enderror" id="description" name="description" cols="30" rows="5">{{$object->description}}</textarea>
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        @error('description')
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



