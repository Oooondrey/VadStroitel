<?php $__env->startSection('title'); ?>
    Поделиться файлом
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
                            <h2 class="" style="color: #252422; font-weight: bold">Отправить файл</h2>
                            <div class="col ">
                                <div class="card-body ">
                                    <form method="post" action="<?php echo e(route('SendFile',['file'=>$file])); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('post'); ?>
                                        <div class="row row-cols-1 row-cols-md-2 g-4 ">
                                            <div class="col mt-0 ps-0 d-flex align-items-end " style="width: 60%">
                                                <div class="card-body ps-0">
                                                    <label for="file" class="form-label" style="font-weight:bold">Получатель</label>
                                                    <select class="form-select inp" name="user" id="">
                                                        <option value="1">
                                                            Выберите получателя
                                                        </option>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($user->id); ?>">
                                                                <?php echo e($user->fio); ?>

                                                                <?php if($user->role!=1): ?>
                                                                     -----
                                                                    <?php echo e($user->vacancy->title); ?>

                                                                <?php endif; ?>
                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
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
                                            </div>
                                            <div class="col ps-0 mt-0 d-flex align-items-end" style="width: 40%">
                                                <div class="card-body ">
                                                    <button type="submit" class="btn dark-btn w-100 " style="height: 2.5rem; font-size: 1.1rem">Отправить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/user/sendfilepage.blade.php ENDPATH**/ ?>