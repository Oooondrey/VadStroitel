<?php $__env->startSection('title'); ?>
    Список заявок
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="" style="color: #EB5E28; font-weight: bold"><?php echo $__env->yieldContent('title'); ?></h2>

                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <?php $__currentLoopData = $worksheets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worksheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <div class="card-body">
                            <div class="row row-cols-1 row-cols-md-1 g-4 mt-4">
                                <div class="col ps-0" style="width: 66.5%">
                                    <div class="card-body">
                                        <h2 class="header-text" style="color: #252422"><?php echo e($worksheet->fio); ?></h2>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 g-4 mt-4"style="width: 33.5%">
                                    <div class="col ps-0 mt-0" style="width: 8rem;height: 3rem">
                                        <div class="card-body">
                                            <form method="post" action="<?php echo e(route('DelWorksheet',['worksheet'=>$worksheet])); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="btn orange-btn  shadow-none bts " >Удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=""></div>
                            <div class="row row-cols-3 row-cols-md-3 g-4 mt-4">
                                <div class="col">
                                    <div class="card-body ps-0">
                                        <h4 class="h-description">Вакансия</h4>
                                        <p class="dark-txt mt-3"><?php echo e($worksheet->vacancy->title); ?></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body ps-0">
                                        <h4 class="h-description">Адрес почты</h4>
                                        <p class="dark-txt mt-3"><?php echo e($worksheet->email); ?></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body ps-0 ">
                                        <h4 class="h-description ">Телефон</h4>
                                        <p class="dark-txt mt-3"><?php echo e($worksheet->phone); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/admin/whorsheet_list.blade.php ENDPATH**/ ?>