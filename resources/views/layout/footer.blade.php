<footer class="footer text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h4 class="footer-text">ВАД СТРОИТЕЛЬ</h4>
                <ul class="list-unstyled mb-0">
                    <li class="fut-li ">
                        <a href="{{route('About_company')}}" class="fut-link">О компании</a>
                    </li>
                    <li class="fut-li">
                        <a href="{{route('Objects')}}" class="fut-link">Объекты</a>
                    </li>
                    <li class="fut-li">
                        <a href="{{route('Vacancy')}}" class="fut-link">Вакансии</a>
                    </li>
                    <li class="fut-li">
                        <a href="{{route('Contacts')}}" class="fut-link">Контакты</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <h4 class="footer-text">Документы</h4>

                <ul class="list-unstyled mb-0">
                    <li class="fut-li ">
                        <a href="{{route('Policy')}}" class="fut-link">Политика <br> конфиденциальности </a>
                    </li>
                    <li class="fut-li">
                        <a href="{{route('Processing')}}" class="fut-link">Согласие на обработку <br>персональных данных</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h4 class="footer-text mb-0">Контакты</h4>

                <ul class="list-unstyled ">
                    <li class="fut-li d-flex ">
                        <div class="">
                            <a class="" href="{{route('Contacts')}}" style="text-decoration: none; margin-right: 0.7rem">
                                <img src="{{asset('public/imgs/email_icon.svg')}}" style="width: 2.3rem"  alt="">
                            </a>
                        </div>
                        <div class="">
                            <a href="{{route('Contacts')}}" class="fut-link">vad_stroitel@bk.ru</a>

                        </div>
                    </li>
                    <li class="fut-li d-flex ">
                        <div class="">
                            <a class="" href="{{route('Contacts')}}" style="text-decoration: none; margin-right: 0.7rem">
                                <img src="{{asset('public/imgs/map_icon.svg')}}" style="width: 2.3rem" alt="">
                            </a>
                        </div>
                        <div class="">
                            <a href="{{route('Contacts')}}" class="fut-link">+7 831 404-19-79</a>
                        </div>
                    </li>
                    <li class="fut-li d-flex ">
                        <div class="">
                            <a class="" href="{{route('Contacts')}}" style="text-decoration: none; margin-right: 0.7rem">
                                <img src="{{asset('public/imgs/phone_icon.svg')}}" style="width: 2.3rem" alt="">
                            </a>
                        </div>
                        <div class="">
                            <a href="{{route('Contacts')}}" class="fut-link" style="width: 2rem">Вадский район, с. Вад, ул. 1 Мая, д. 25</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

