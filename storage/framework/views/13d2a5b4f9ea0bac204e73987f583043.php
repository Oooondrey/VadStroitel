<?php $__env->startSection('title'); ?>
    Редактирование объекта
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
                <div class="col">
                    <div class="card-body">
                        <div class=" d-flex justify-content-center mb-5">
                            <form action="<?php echo e(route('EditObject',['object'=>$object])); ?>" class="w-50 mt-5" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                                <div class="mb-3">
                                    <label for="title" class="form-label" style="font-weight:bold">Название объекта</label>
                                    <input  type="text" class="form-control inp <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title" value="<?php echo e($object->title); ?>">
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
                                <div class="mb-3">
                                    <label for="address" class="form-label" style="font-weight:bold">Адрес</label>
                                    <input type="text" class="form-control inp <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="address" name="address" value="<?php echo e($object->address); ?>">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['address'];
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
                                <div class="mb-3">
                                    <label for="type" class="form-label "style="font-weight:bold">Тип объекта </label>
                                    <select class="form-select inp" name="type" id="type">
                                        <option class="form-select" value="Жилой дом">
                                            Жилой дом
                                        </option>
                                        <option class="form-select" value="2">
                                            Промышленное сооружение
                                        </option>
                                        <option class="form-select" value="3">
                                            Реконструкция
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="square" class="form-label" style="font-weight:bold">Площадь м2</label>
                                    <input class="form-control inp <?php $__errorArgs = ['square'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="square" id="square" value="<?php echo e($object->square); ?>">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['square'];
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
                                <div class="mb-3">
                                    <label for="img" class="form-label" style="font-weight:bold">Изображение</label>
                                    <input type="file" class="form-control inp <?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="img" name="img[]" multiple>
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['img'];
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
                                <div class="mb-3">
                                    <label for="year" class="form-label" style="font-weight:bold">Год ввода</label>
                                    <input type="month" class="form-control inp <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="year" name="year" value="<?php echo e($object->year); ?>">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['year'];
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
                                <div class="mb-3">
                                    <label for="year" class="form-label" style="font-weight:bold">Описание</label>
                                    <textarea type="text" class="form-control inp <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="description" name="description" cols="30" rows="5"><?php echo e($object->description); ?></textarea>
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['description'];
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
                                <button  type="submit" class="w-100 btn btn-primary orange-btn shadow-none mt-5" >Изменить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/admin/edit_object.blade.php ENDPATH**/ ?>