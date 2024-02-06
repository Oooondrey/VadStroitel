@extends('layout.app')
@section('title')
    Поделиться файлом
@endsection
@section('main')
    <div class="container">
        <div class="mt-3" style="margin-bottom: 6rem">
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="" style="color: #EB5E28; font-weight: bold">@yield('title')</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-1 g-4 ">
                            <h2 class="" style="color: #252422; font-weight: bold">Отправить файл</h2>
                            <div class="col ">
                                <div class="card-body ">
                                    <form method="post" action="{{route('SendFile',['file'=>$file])}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="row row-cols-1 row-cols-md-2 g-4 ">
                                            <div class="col mt-0 ps-0 d-flex align-items-end " style="width: 60%">
                                                <div class="card-body ps-0">
                                                    <label for="file" class="form-label" style="font-weight:bold">Получатель</label>
                                                    <select class="form-select inp" name="user" id="">
                                                        <option value="1">
                                                            Выберите получателя
                                                        </option>
                                                        @foreach($users as $user)
                                                            <option value="{{$user->id}}">
                                                                {{$user->fio}}
                                                                @if($user->role!=1)
                                                                     -----
                                                                    {{$user->vacancy->title}}
                                                                @endif
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                                        @error('title')
                                                        {{$message}}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col ps-0 mt-0 d-flex align-items-end" style="width: 40%">
                                                <div class="card-body ">
                                                    <button type="submit" class="btn dark-btn w-100 " style="height: 2.5rem; font-size: 1.1rem">Отправить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


