@extends('layout.app')
@section('title')
    Объекты
@endsection
@section('main')
    <div class="container" id="Img">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="" style="color: #EB5E28; font-weight: bold">Объекты</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col " >
                    <div class="card-body">
                        <div class="">
                            <p class="dark-txt" style="width: 70%">
                                На данной странице представлены все объекты построенные за последнее время
                            </p>
                        </div>
                    </div>
                </div>
                @auth()
                    @if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user())
                        <div class="col " >
                            <div class="card-body  me-0 d-flex  pe-0" style="width:100%">
                                <a href="{{route('AddObjectPage')}}">
                                    <button class="btn dark-btn2  shadow-none " style="width: 20rem; height: 2.5rem; font-size: 1.1rem">Добавить объект</button>
                                </a>
                            </div>
                        </div>
                    @endif
                @endauth()
            </div>
            @foreach($objects as $object)
            <div class="row row-cols-1 row-cols-lg-2 g-4 mt-5 mb-5">
                <div class="col ">
                    <div class="card-body" >
                        <img src="{{asset('public/'.$imgs->where('objects_id',$object->id)->first()->img)}}" style="height: 14rem; object-fit: cover" class="pic" alt="">
                    </div>
                </div>
                <div class="col ps-2">
                    <div class="card-body" >
                        <h2 class="header-text">{{$object->title}}</h2>
                        <p class="dark-txt mt-1"  >
                            {{$object->description}}
                        </p>
                        <div class="row row-cols-1 row-cols-sm-3 g-4 mt-2" >
                            <div class="col">
                                <a href="{{route('MoreInfo',['object'=>$object])}}">
                                    <button type="button" class="btn  dark-btn2 shadow-none " style="width: 7rem;height: 2.6rem">Подробнее</button>
                                </a>
                            </div>
                            @auth()
                                @if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user())
                                    <div class="col">
                                        <a href="{{route('ObjectEditPage',['object'=>$object])}}">
                                            <button type="button" class="btn   grey-btn shadow-none " style="width: 7rem;height: 2.6rem">Изменить</button>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <form method="post" action="{{route('DelObject',['object'=>$object])}}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn   orange-btn shadow-none" style="width: 7rem;height: 2.6rem">Удалить</button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script>
        const Img={
            data(){
                return{
                    objects:<?php print json_encode($objects)?>,
                    errors:[],
                    message:''
                }
            },
            methods:{


            },

        }
        Vue.createApp(Img).mount('#Img')
    </script>
@endsection


