<?php $__env->startSection('title'); ?>
    Главная
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container ">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col adaptive">
                    <div class="card-body">
                        <h2>О Компании</h2>
                        <p class="dark-txt" style="margin-top: 1rem">
                            ООО «ВАД.СТРОИТЕЛЬ» создана в 2005 году после
                            реорганизации компании существовавшей с 1971 года.
                        </p>
                        <p class="dark-txt">
                            Основными видами деятельности компании являются:
                        </p>
                            <ul class="dark-txt">
                                <li>
                                    строительство жилых зданий
                                </li>
                                <li>
                                    строительство промышленных зданий, сооружений, <br>
                                    объектов инженерной инфрастурктуры
                                </li>
                                <li>
                                    Реконструкция и капительный ремонт зданий и сооружений
                                </li>
                            </ul>
                        <a href="<?php echo e(route('About_company')); ?>">
                            <button type="button" class="mt-2 btn dark-btn2 shadow-none position-absolute" style="z-index: 1000">Узнать больше</button>
                        </a>
                    </div>
                </div>
                <div class="col adaptive" >
                    <div class="card-body d-flex justify-content-end position-relative " style="z-index: 1">
                        <img src="<?php echo e(asset('public/imgs/Строитель пнг.png')); ?>" class="img-bilder user-select-none" style="pointer-events: none" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" position-absolute dark-line" style="">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col ">
                    <div class="card-body">
                        <h4 class="header-text">Наши заслуги</h4>
                        <p class="white-txt" >
                            Только за последние 15 лет было построено и введено в эксплуатацию 29
                            многоквартирных жилых домов в разных районах Нижегородского региона
                            Общая площадь построенного жилья превышает 60 тысяч квадратных метров
                        </p>
                    </div>
                </div>
        </div>
    </div>
    <div class="container">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="header-text">Последние проекты</h2>
                    </div>
                </div>
            </div>
            <?php $__currentLoopData = $objects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row row-cols-2 row-cols-md-2 g-4  mb-5">
                <div class="col" style="width: 40%;">
                    <div class="card-body">
                        <img src="<?php echo e(asset('public/'.$imgs->where('objects_id',$object->id)->first()->img)); ?>"  class="pic" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body" style="width: 122%">
                        <h2 class="header-text"><?php echo e($object->title); ?></h2>
                        <p class="dark-txt" style="margin-top:  1rem; width: 100%">
                           <?php echo e($object->description); ?>

                        </p>
                        <div class="mt-3">
                            <a href="<?php echo e(route('MoreInfo',['object'=>$object])); ?>">
                                <button type="button" class="btn  dark-btn2 shadow-none " style="width: 7rem;height: 2.6rem">Подробнее</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/welcome.blade.php ENDPATH**/ ?>