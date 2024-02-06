<?php $__env->startSection('title'); ?>
    Объекты
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container" id="Img">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="" style="color: #EB5E28; font-weight: bold">Объекты</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col " >
                    <div class="card-body">
                        <div class="">
                            <p class="dark-txt" style="width: 70%">
                                На данной странице представлены все объекты построенные за последнее время
                            </p>
                        </div>
                    </div>
                </div>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user()): ?>
                        <div class="col " >
                            <div class="card-body  me-0 d-flex  pe-0" style="width:100%">
                                <a href="<?php echo e(route('AddObjectPage')); ?>">
                                    <button class="btn dark-btn2  shadow-none " style="width: 20rem; height: 2.5rem; font-size: 1.1rem">Добавить объект</button>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php $__currentLoopData = $objects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row row-cols-1 row-cols-lg-2 g-4 mt-5 mb-5">
                <div class="col ">
                    <div class="card-body" >
                        <img src="<?php echo e(asset('public/'.$imgs->where('objects_id',$object->id)->first()->img)); ?>" style="height: 14rem; object-fit: cover" class="pic" alt="">
                    </div>
                </div>
                <div class="col ps-2">
                    <div class="card-body" >
                        <h2 class="header-text"><?php echo e($object->title); ?></h2>
                        <p class="dark-txt mt-1"  >
                            <?php echo e($object->description); ?>

                        </p>
                        <div class="row row-cols-1 row-cols-sm-3 g-4 mt-2" >
                            <div class="col">
                                <a href="<?php echo e(route('MoreInfo',['object'=>$object])); ?>">
                                    <button type="button" class="btn  dark-btn2 shadow-none " style="width: 7rem;height: 2.6rem">Подробнее</button>
                                </a>
                            </div>
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user()): ?>
                                    <div class="col">
                                        <a href="<?php echo e(route('ObjectEditPage',['object'=>$object])); ?>">
                                            <button type="button" class="btn   grey-btn shadow-none " style="width: 7rem;height: 2.6rem">Изменить</button>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <form method="post" action="<?php echo e(route('DelObject',['object'=>$object])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn   orange-btn shadow-none" style="width: 7rem;height: 2.6rem">Удалить</button>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <script>
        const Img={
            data(){
                return{
                    objects:<?php print json_encode($objects)?>,
                    errors:[],
                    message:''
                }
            },
            methods:{


            },

        }
        Vue.createApp(Img).mount('#Img')
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/guest/objects.blade.php ENDPATH**/ ?>