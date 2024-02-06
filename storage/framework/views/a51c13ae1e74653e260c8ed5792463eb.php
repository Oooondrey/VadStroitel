<?php $__env->startSection('title'); ?>
    Вакансии
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class=" mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card-body">
                        <h2 class="" >Вакансии</h2>
                    </div>
                </div>
            </div>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col " style="">
                    <div class="card-body">
                        <div class="">
                            <p class="dark-txt" style="width: 70%">
                                На этой странице вы сможете просмотреть доступные вакансии и заполнить анкету
                            </p>
                        </div>
                    </div>
                </div>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user()): ?>
                        <div class="col" >
                            <div class="card-body  me-0" style="width:100%">
                                <a href="<?php echo e(route('AddVacancyPage')); ?>">
                                    <button class="btn dark-btn  " style="width: 20rem;height: 2.5rem; font-size: 1.1rem">Добавить вакансию</button>
                                </a>
                            </div>
                        </div>
                      <?php endif; ?>
                    <?php endif; ?>
            </div>

            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <?php $__currentLoopData = $vacancies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vacancy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card-body">
                        <h2 class="header-text" style="color: #252422"><?php echo e($vacancy->title); ?></h2>
                        <div class="row row-cols-3 row-cols-md-3 g-4 " >
                            <div class="col">
                                <div class="card-body ps-0 " >
                                    <h4 class="h-description">Обязанности</h4>
                                    <p class="grey-txt"><?php echo e($vacancy->dutys); ?></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ms-3 ">
                                    <h4 class="h-description">Общие требования</h4>
                                    <p class="grey-txt"><?php echo e($vacancy->requirements); ?></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body ms-3">
                                    <h4 class="h-description">Требования к образованию </h4>
                                    <p class="grey-txt"><?php echo e($vacancy->education); ?></p>
                                    <div class="d-flex">
                                        <h4 class="h-description" style="color: #EB5E28; font-weight: bold">Зарплата от <?php echo e($vacancy->pay); ?> руб. </h4>
                                    </div>
                                    <?php if(auth()->guard()->check()): ?>
                                        <?php if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user()): ?>
                                            <div class="row row-cols-1 row-cols-lg-2 g-4  mt-2">
                                                <div class="col ps-0 ">
                                                    <div class="card-body pb-0 pt-0">
                                                        <div class="me-3">
                                                            <a href="<?php echo e(route('EditVacancyPage',['vacancy'=>$vacancy])); ?>">
                                                                <button class="btn grey-btn shadow-none bts" >
                                                                    Изменить
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col ps-0">
                                                    <div class="card-body pt-0">
                                                        <div class="">
                                                            <form action="<?php echo e(route('DelVacancy',['vacancy'=>$vacancy])); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('delete'); ?>
                                                                <button type="submit" class="btn orange-btn shadow-none bts" >
                                                                    Удалить
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 ">
                <div class="col">
                    <div class="card-body">

                        <div class="d-flex justify-content-center">
                            <h2 class="header-text">Заполните анкету</h2>
                        </div>
                        <div class=" d-flex justify-content-center mb-5">
                            <form method="post" action="<?php echo e(route('AddWorksheet')); ?>" class="w-50 mt-5">
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
                                    <label for="exampleInputPassword1" class="form-label" style="font-weight:bold">Выбор вакансии </label>
                                    <select class="form-select inp" name="vacancy" id="">
                                        <?php $__currentLoopData = $vacancies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vacancy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option class="form-select" value="<?php echo e($vacancy->id); ?>">
                                                <?php echo e($vacancy->title); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="mb-3 mt-5 form-check ">
                                    <input type="checkbox" class="form-check-input mt-0 inpcheck" id="exampleCheck1" style="width: 1.5rem;height: 1.5rem" name="rules">
                                    <label class="form-check-label ms-2 mb-2" for="exampleCheck1" style="font-size: 1.1rem">Даю согласие на обработку персональных данных</label>
                                    <div id="ValidationServerUsernameFeedback" class="is-invalid text-danger">
                                        <?php $__errorArgs = ['rules'];
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
                                <button  type="submit" class="w-100 btn btn-primary orange-btn shadow-none">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/guest/vacancy.blade.php ENDPATH**/ ?>