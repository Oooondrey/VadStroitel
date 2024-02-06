@extends('layout.app')
@section('title')
    Авторизация
@endsection
@section('main')
    <div class="container" id="Authorization">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h2 class="header-text">Авторизация</h2>
                        </div>
                        <div :class="message ? 'alert alert-danger' : ''">
                            @{{ message }}
                        </div>
                        <div class=" d-flex justify-content-center mb-5">
                            <form id="form" @submit.prevent="Authorization" class="w-50 mt-5">
                                <div class="mb-3">
                                    <label for="email" class="form-label "style="font-weight:bold" >Адрес почты </label>
                                    <input type="email" class="form-control inp" id="email" name="email" :class="errors.email ? 'is-invalid' : ''">
                                    <div :class="errors.email ? 'invalid-feedback' : ''" v-for="error in errors.email">
                                        @{{ error }}
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="password" class="form-label "style="font-weight:bold">Пароль </label>
                                    <input type="password" class="form-control inp" id="password" name="password" :class="errors.password ? 'is-invalid' : ''">
                                    <div :class="errors.password ? 'invalid-feedback' : ''" v-for="error in errors.password" >
                                        @{{ error }}
                                    </div>
                                </div>
                                <button  type="submit" class="w-100 btn btn-primary orange-btn shadow-none mt-1 mb-5">Войти</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const Authorization={
            data(){
                return{
                    errors:[],
                    message:''
                }
            },
            methods:{
                async Authorization(){
                    const form=document.querySelector('#form');
                    const form_data=new FormData(form);
                    const response=await fetch('{{route('AuthUser')}}',{
                        method:'post',
                        headers:{
                            "X-CSRF-TOKEN":'{{csrf_token()}}'
                        },
                        body:form_data
                    });
                    if(response.status===400){
                        this.errors=await response.json();
                        setTimeout(()=>{
                            this.errors=[]
                        },10000)
                    };
                    if (response.status===200){
                        window.location=response.url
                    };
                    if (response.status===403){
                        this.message=await response.json();
                        setTimeout(()=>{
                            this.message=[]
                        },10000)
                    }
                }

            }
        }
        Vue.createApp(Authorization).mount('#Authorization')
    </script>
@endsection

