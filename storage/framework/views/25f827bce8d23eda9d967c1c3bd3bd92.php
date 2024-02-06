<?php $__env->startSection('title'); ?>
    Список сотрудников
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
                        <div class="d-flex justify-content-center">
                            <h2 class="header-text">Добавление сотрудника</h2>
                        </div>
                        <div class=" d-flex justify-content-center mb-5">
                            <form method="post" action="<?php echo e(route('AddUser')); ?>" class="w-50 mt-5">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('post'); ?>
                                <div class="mb-3">
                                    <label for="fio" class="form-label" style="font-weight:bold">Фамилия Имя Отчество</label>
                                    <input  type="text" class="form-control inp <?php $__errorArgs = ['fio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="fio" name="fio">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['fio'];
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
                                    <label for="phone" class="form-label" style="font-weight:bold">Номер телефона</label>
                                    <input type="tel" class="form-control inp <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="phone" name="phone">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['phone'];
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
                                    <label for="email" class="form-label "style="font-weight:bold">Адрес почты </label>
                                    <input type="email" class="form-control inp <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['email'];
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
                                    <label for="password" class="form-label" style="font-weight:bold">Пароль</label>
                                    <input type="password" class="form-control inp <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password">
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['password'];
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
                                    <label for="vacancy" class="form-label" style="font-weight:bold">Выбор вакансии </label>
                                    <select class="form-select inp" name="vacancy_id" id="vacancy_id">
                                        <?php $__currentLoopData = $vacancies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vacancy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option class="form-select" value="<?php echo e($vacancy->id); ?>">
                                                <?php echo e($vacancy->title); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <button  type="submit" class="w-100 btn btn-primary dark-btn shadow-none mt-5" style="height: 2.375rem; font-size: 1rem">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-1 g-4 mt-4">
                            <div class="col ps-0" style="width: 66.5%">
                                <div class="card-body">
                                    <h2 class="header-text" style="color: #252422"><?php echo e($user->fio); ?></h2>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 g-4 mt-4"style="width: 33.5%">
                                <div class="col mt-0 me-3" style="width: 8rem;height: 3rem">
                                    <div class="card-body">
                                        <a href="<?php echo e(route('EditUserPage',['user'=>$user])); ?>">
                                            <button type="submit" class="btn grey-btn  shadow-none bts" >Изменить</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col mt-0" style="width: 8rem;height: 3rem">
                                    <div class="card-body">
                                        <form method="post" action="<?php echo e(route('DelUser',['user'=>$user])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn orange-btn  shadow-none bts" >Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=""></div>
                        <div class="row row-cols-3 row-cols-md-3 g-4 mt-4">
                            <div class="col">
                                <div class="card-body ps-0">
                                    <h4 class="h-description">Должность</h4>
                                    <p class="dark-txt mt-3"><?php echo e($user->vacancy->title); ?></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ps-0">
                                    <h4 class="h-description">Адрес почты</h4>
                                    <p class="dark-txt mt-3"><?php echo e($user->email); ?></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ps-0 ">
                                    <h4 class="h-description ">Телефон</h4>
                                    <p class="dark-txt mt-3"><?php echo e($user->phone); ?></p>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/admin/userlist.blade.php ENDPATH**/ ?>