<?php $__env->startSection('title'); ?>
    Контакты
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="mt-3">
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col ">
                    <div class="card-body ms-0">
                        <h2 style="color: #EB5E28; font-weight: bold">Контакты</h2>
                        <div class="row row-cols-1 row-cols-md-2 g-4 mb-5" style="margin-top: 3rem;">
                            <div class="col">
                                <div class="card-body ps-0">
                                    <div class="shadow">
                                        <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A349c2532bb257d4c2adc3db7bc1e21f5491b5e12201beb8d5a302e28e8b72d40&amp;source=constructor" width="100%" height="392" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="card-body desc">
                                    <div class="">
                                        <h3  style="color: #EB5E28;font-weight: bold"> Адрес</h3>
                                        <p class="dark-txt">Нижегородская область, Вадский район, с.Вад, ул. 1 Мая, д. 25</p>
                                    </div>
                                    <div class="">
                                        <h3  style="color: #EB5E28;font-weight: bold"> Контактные номера</h3>
                                        <p class="dark-txt">
                                            +7 831 404-19-79 <br>
                                            +7 910 880-19-49 <br>
                                            +7 831 404-16-69</p>
                                    </div>
                                    <div class="">
                                        <h3 style="color: #EB5E28;font-weight: bold"> Почта</h3>
                                        <p class="dark-txt">vad_stroitel@bk.ru</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/guest/contacts.blade.php ENDPATH**/ ?>
