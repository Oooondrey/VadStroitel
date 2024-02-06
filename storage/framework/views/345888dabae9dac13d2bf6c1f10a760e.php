<?php $__env->startSection('title'); ?>
    Мои файлы
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="mt-3" style="margin-bottom: 6rem">
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="" style="color: #EB5E28; font-weight: bold"><?php echo $__env->yieldContent('title'); ?></h2>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-1 g-4 ">
                            <h2 class="" style="color: #252422; font-weight: bold">Загрузить файлы</h2>
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="col ">
                                <div class="card-body ">
                                    <form method="post" action="<?php echo e(route('AddFile')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('post'); ?>
                                    <div class="row row-cols-1 row-cols-md-2 g-4 ">
                                        <div class="col mt-0 ps-0 d-flex align-items-end " style="width: 60%">
                                            <div class="card-body ps-0">
                                                <label for="file" class="form-label" style="font-weight:bold">Название файла</label>
                                                <input type="text" class="form-control inp w-100 <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title">
                                                <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <label for="file" class="form-label" style="font-weight:bold">Файл</label>
                                                <input type="file" class="form-control inp w-100  <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="file" name="file">
                                                <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                                    <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col ps-0 mt-0 d-flex align-items-end" style="width: 40%">
                                            <div class="card-body ">
                                                <button type="submit" class="btn dark-btn w-100 " style="height: 2.5rem; font-size: 1.1rem">Загрузить</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row row-cols-1 row-cols-md-2 g-4 ">
                        <div class="col ps-3 " >
                            <div class="card-body ">
                                <div class="">
                                    <a href="<?php echo e(asset('public/'.$file->file)); ?>" download="">
                                        <h3>
                                            <?php echo e($file->title); ?>

                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col ps-0 w-50 " >
                            <div class="row row-cols-1 row-cols-md-2 g-4 ms-2 ">
                                <div class="col ">
                                    <div class="card-body pt-0 pb-0">
                                        <div class="">
                                            <a href="<?php echo e(route('SendFilePage',['file'=>$file])); ?>">
                                                <button class="btn grey-btn shadow-none bts me-5">Поделиться</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0">
                                        <div class="">
                                            <form method="post" action="<?php echo e(route('DelFile',['file'=>$file])); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="btn orange-btn  shadow-none bts " >Удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/user/files.blade.php ENDPATH**/ ?>