<?php $__env->startSection('title'); ?>
    Вакансии
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="" style="color: #EB5E28; font-weight: bold">Вакансии</h2>
                        <p class="dark-txt mt-4" style="width: 70%">
                            На этой странице вы сможете просмотреть доступные вакансии и заполнить анкету
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="header-text" style="color: #252422">Разнорабочий</h2>
                        <div class="row row-cols-3 row-cols-md-3 g-4 " >
                            <div class="col">
                                <div class="card-body ps-0 " >
                                    <h4 class="h-description">Обязанности</h4>
                                    <p class="grey-txt">Перемещение необходимых материалов по территории строительной площадки. Уборка территории от строительного мусора</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ms-3 ">
                                    <h4 class="h-description">Общие требования</h4>
                                    <p class="grey-txt">Квотируемое рабочее место Ответственность</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ms-3">
                                    <h4 class="h-description">Требования к образованию </h4>
                                    <p class="grey-txt">Среднее профессиональное</p>
                                    <div class="d-flex">
                                        <h4 class="h-description" style="color: #EB5E28; font-weight: bold">Зарплата от 16242 руб. </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h2 class="header-text">Заполните анкету</h2>
                        </div>
                        <div class=" d-flex justify-content-center mb-5">
                            <form class="w-50 mt-5">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label" style="font-weight:bold">Фамилия Имя Отчество</label>
                                    <input  type="email" class="form-control inp" id="exampleInputEmail1" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label" style="font-weight:bold">Номер телефона</label>
                                    <input type="password" class="form-control inp" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label "style="font-weight:bold">Адрес почты </label>
                                    <input type="password" class="form-control inp" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label" style="font-weight:bold">Выбор вакансии </label>
                                    <select class="form-select inp" name="" id="">
                                        <option class="form-select" value="" >
                                            Разнорабочий
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3 mt-5 form-check ">
                                    <input type="checkbox" class="form-check-input mt-0 inpcheck" id="exampleCheck1" style="width: 1.5rem;height: 1.5rem">
                                    <label class="form-check-label ms-2 mb-2" for="exampleCheck1" style="font-size: 1.1rem">Даю согласие на обработку персональных данных</label>
                                </div>
                                <button  type="submit" class="w-100 btn btn-primary orange-btn shadow-none">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/guest/vacancy.blade.php ENDPATH**/ ?>
