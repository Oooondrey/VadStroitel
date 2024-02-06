@extends('layout.app')
@section('title')
    Администратор
@endsection
@section('main')
    <div class="container" id="Admin">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h2 class="header-text">Войти как администратор</h2>
                        </div>
                        <div :class="message ? 'alert alert-danger' : ''">
                            @{{ message }}
                        </div>
                        <div class=" d-flex justify-content-center mb-5">
                            <form id="form" @submit.prevent="Admin" class="w-50 mt-5">
                                <div class="mb-3">
                                    <label for="login" class="form-label "style="font-weight:bold" >Логин </label>
                                    <input type="text" class="form-control inp" id="login" name="login" :class="errors.login ? 'is-invalid' : ''">
                                    <div :class="errors.login ? 'invalid-feedback' : ''" v-for="error in errors.login">
                                        @{{ error }}
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="password" class="form-label "style="font-weight:bold">Пароль </label>
                                    <input type="password" class="form-control inp" id="password" name="password" :class="errors.password ? 'is-invalid' : ''">
                                    <div :class="errors.password ? 'invalid-feedback' : ''" v-for="error in errors.password">
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
        const Admin={
            data(){
                return{
                    errors:[],
                    message:''
                }
            },
            methods:{
                async Admin(){
                    const form=document.querySelector('#form');
                    const form_data=new FormData(form);
                    const response=await fetch('{{route('AdminLogin')}}',{
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
                            this.message=null
                        },10000)
                    }
                }
            }
        }
        Vue.createApp(Admin).mount('#Admin')
    </script>
@endsection
