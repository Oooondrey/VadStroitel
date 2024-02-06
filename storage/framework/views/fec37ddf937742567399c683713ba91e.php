<?php $__env->startSection('title'); ?>
    Объекты
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="header-text">Объекты</h2>
                        <p class="dark-txt mt-4" style="width: 70%">
                            На данной странице представлены все объекты построенные за последнее время
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-2 g-4 ">
                <div class="col" style="width: 40%;">
                    <div class="card-body">
                        <img src="<?php echo e(asset('public/imgs/Rectangle 8.png')); ?>" class="pic" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body" style="width: 122%">
                        <h2 class="header-text">Название объекта</h2>
                        <p class="dark-txt" style="margin-top:  1rem; width: 100%">
                            С учётом сложившейся международной обстановки,
                            экономическая повестка сегодняшнего дня позволяет
                            оценить значение как самодостаточных, так и внешне
                            зависимых концептуальных решений.
                        </p>
                        <button type="button " class="btn mt-2 mb-5 dark-btn" >Подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/guest/objects.blade.php ENDPATH**/ ?>
