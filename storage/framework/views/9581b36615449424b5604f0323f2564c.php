<?php $__env->startSection('title'); ?>
    <?php echo e($object->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="mt-3">
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col ">
                    <div class="card-body ms-0">
                        <h2 style="color: #EB5E28; font-weight: bold"><?php echo $__env->yieldContent('title'); ?></h2>
                        <div class="row row-cols-1 row-cols-lg-2 g-4 mb-5" style="margin-top: 3rem;">
                            <div class="col ps-0 slider" >
                                <div class="card-body">
                                    <div id="carouselExample" class="carousel slide">
                                        <div class="carousel-inner">
                                            <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="carousel-item <?php echo e($key==0? 'active':''); ?> ">
                                                    <img src="<?php echo e(asset('public/'.$img->img)); ?>" class="d-block w-100  img-fluid slider-img" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" style="max-width: 986px; max-height: 800px">
                                                        <div class="modal-body" >
                                                            <img src="<?php echo e(asset('public/'.$img->img)); ?>" class="d-block  img-fluid slider-img" style="width: 100% ;object-fit: contain;" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="card-body desc">
                                    <div class="">
                                        <h3  style="color: #EB5E28;font-weight: bold"> Адрес</h3>
                                        <p class="dark-txt"><?php echo e($object->address); ?></p>
                                    </div>
                                    <div class="">
                                        <h3  style="color: #EB5E28;font-weight: bold"> Тип объекта</h3>
                                        <p class="dark-txt"><?php echo e($object->type); ?></p>
                                    </div>
                                    <div class="">
                                        <h3  style="color: #EB5E28;font-weight: bold"> Площадь</h3>
                                        <p class="dark-txt"><?php echo e($object->square); ?> м2</p>
                                    </div>
                                    <div class="">
                                        <h3  style="color: #EB5E28;font-weight: bold"> Год ввода</h3>
                                        <p class="dark-txt"><?php echo e(\Carbon\Carbon::createFromFormat('Y-m', $object->year)->format('Y')); ?> г</p>
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



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/guest/object_moreinfo.blade.php ENDPATH**/ ?>