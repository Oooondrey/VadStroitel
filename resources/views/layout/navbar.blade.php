<div class="" style="background-color: #252422">
    <nav class="navbar container navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex ">
            <a class="navbar-brand" href="{{route('Welcome')}}">
                <img src="{{asset('public/imgs/Logo.png')}}" alt="" class="logo"  >
            </a>

            <button class="navbar-toggler navtog" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-image: url('/public/imgs/menu_icon.png')"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-nav">
                    <a class="nav-link nav-txt @guest() pe-5  @endguest @auth()  pe-3 @endauth"  href="{{route('Welcome')}}">Главная</a>
                    <a class="nav-link nav-txt @guest() pe-5  @endguest @auth()  pe-3 @endauth"  href="{{route('Objects')}}">Объекты</a>
                    <a class="nav-link nav-txt @guest() pe-5  @endguest @auth()  pe-3 @endauth"  href="{{route('Vacancy')}}">Вакансии</a>
                    <a class="nav-link nav-txt @guest() pe-5  @endguest @auth()  pe-3 @endauth"  href="{{route('Contacts')}}">Контакты</a>
                    @auth()
                        @if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user())
                            <li class="d-flex flex-column justify-content-start nav-item dropdown ms-0">
                                <a class="nav-link nav-txt dropdown-toggle "  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Админ
                                </a>
                                <ul class="dropdown-menu" style="background-color:#403D39; border:#CCC5B9 2px solid">
                                    <li><a class="dropdown-item dp-i" style="font-family: Franklin-Gothic-Medium" href="{{route('WorksheetList')}}" >Список заявок</a></li>
                                    <li><a class="dropdown-item dp-i"  style="font-family: Franklin-Gothic-Medium" href="{{route('FilesPage')}}" >Личные файлы</a></li>
                                    <li><hr class="dropdown-divider" style="color: #CCC5B9; height: 2px; opacity: 100%"></li>
                                    <li><a class="dropdown-item dp-i"  style="font-family: Franklin-Gothic-Medium" href="{{route('Userlist')}}" >Список сотрудников</a></li>
                                </ul>
                            </li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->role==0 and \Illuminate\Support\Facades\Auth::user())
                            <a class="nav-link nav-txt"  href="{{route('FilesPage')}}">Файлы</a>
                        @endif

                        <a class="nav-link nav-txt"  href="{{route('Exit')}}">Выход</a>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>

