@extends('layout.app')
@section('title')
    Мои файлы
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
                            <h2 class="" style="color: #252422; font-weight: bold">Загрузить файлы</h2>
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                            <div class="col ">
                                <div class="card-body ">
                                    <form method="post" action="{{route('AddFile')}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                    <div class="row row-cols-1 row-cols-md-2 g-4 ">
                                        <div class="col mt-0 ps-0 d-flex align-items-end " style="width: 60%">
                                            <div class="card-body ps-0">
                                                <label for="file" class="form-label" style="font-weight:bold">Название файла</label>
                                                <input type="text" class="form-control inp w-100 @error('title') is-invalid @enderror" id="title" name="title">
                                                <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                                    @error('title')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <label for="file" class="form-label" style="font-weight:bold">Файл</label>
                                                <input type="file" class="form-control inp w-100  @error('file') is-invalid @enderror" id="file" name="file">
                                                <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                                    @error('file')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col ps-0 mt-0 d-flex align-items-end" style="width: 40%">
                                            <div class="card-body ">
                                                <button type="submit" class="btn dark-btn w-100 " style="height: 2.5rem; font-size: 1.1rem">Загрузить</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    @foreach($files as $file)
                    <div class="row row-cols-1 row-cols-md-2 g-4 ">
                        <div class="col ps-3 " >
                            <div class="card-body ">
                                <div class="">
                                    <a href="{{asset('public/'.$file->file)}}" download="">
                                        <h3>
                                            {{$file->title}}
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col ps-0 w-50 " >
                            <div class="row row-cols-1 row-cols-md-2 g-4 ms-2 ">
                                <div class="col ">
                                    <div class="card-body pt-0 pb-0">
                                        <div class="">
                                            <a href="{{route('SendFilePage',['file'=>$file])}}">
                                                <button class="btn grey-btn shadow-none bts me-5">Поделиться</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0">
                                        <div class="">
                                            <form method="post" action="{{route('DelFile',['file'=>$file])}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn orange-btn  shadow-none bts " >Удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

