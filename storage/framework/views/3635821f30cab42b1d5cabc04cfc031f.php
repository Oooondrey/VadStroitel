<?php $__env->startSection('title'); ?>
    Авторизация
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h2 class="header-text">Авторизация</h2>
                        </div>
                        <div class=" d-flex justify-content-center mb-5">
                            <form class="w-50 mt-5">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label "style="font-weight:bold">Адрес почты </label>
                                    <input type="password" class="form-control inp" id="exampleInputPassword1">
                                </div>
                                <div class="mb-5">
                                    <label for="exampleInputPassword1" class="form-label "style="font-weight:bold">Пароль </label>
                                    <input type="password" class="form-control inp" id="exampleInputPassword1">
                                </div>
                                <button  type="submit" class="w-100 btn btn-primary orange-btn shadow-none mt-1 mb-5">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/user/authpage.blade.php ENDPATH**/ ?>
