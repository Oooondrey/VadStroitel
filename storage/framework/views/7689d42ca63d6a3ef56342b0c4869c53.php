<div class="" style="background-color: #252422">
    <nav class="navbar container navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex ">
            <a class="navbar-brand" href="<?php echo e(route('Welcome')); ?>">
                <img src="<?php echo e(asset('public/imgs/Logo.png')); ?>" alt="" class="logo"  >
            </a>

            <button class="navbar-toggler navtog" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-image: url('/public/imgs/menu_icon.png')"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-nav">
                    <a class="nav-link nav-txt <?php if(auth()->guard()->guest()): ?> pe-5  <?php endif; ?> <?php if(auth()->guard()->check()): ?>  pe-3 <?php endif; ?>"  href="<?php echo e(route('Welcome')); ?>">Главная</a>
                    <a class="nav-link nav-txt <?php if(auth()->guard()->guest()): ?> pe-5  <?php endif; ?> <?php if(auth()->guard()->check()): ?>  pe-3 <?php endif; ?>"  href="<?php echo e(route('Objects')); ?>">Объекты</a>
                    <a class="nav-link nav-txt <?php if(auth()->guard()->guest()): ?> pe-5  <?php endif; ?> <?php if(auth()->guard()->check()): ?>  pe-3 <?php endif; ?>"  href="<?php echo e(route('Vacancy')); ?>">Вакансии</a>
                    <a class="nav-link nav-txt <?php if(auth()->guard()->guest()): ?> pe-5  <?php endif; ?> <?php if(auth()->guard()->check()): ?>  pe-3 <?php endif; ?>"  href="<?php echo e(route('Contacts')); ?>">Контакты</a>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(\Illuminate\Support\Facades\Auth::user()->role==1 and \Illuminate\Support\Facades\Auth::user()): ?>
                            <li class="d-flex flex-column justify-content-start nav-item dropdown ms-0">
                                <a class="nav-link nav-txt dropdown-toggle "  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Админ
                                </a>
                                <ul class="dropdown-menu" style="background-color:#403D39; border:#CCC5B9 2px solid">
                                    <li><a class="dropdown-item dp-i" style="font-family: Franklin-Gothic-Medium" href="<?php echo e(route('WorksheetList')); ?>" >Список заявок</a></li>
                                    <li><a class="dropdown-item dp-i"  style="font-family: Franklin-Gothic-Medium" href="<?php echo e(route('FilesPage')); ?>" >Личные файлы</a></li>
                                    <li><hr class="dropdown-divider" style="color: #CCC5B9; height: 2px; opacity: 100%"></li>
                                    <li><a class="dropdown-item dp-i"  style="font-family: Franklin-Gothic-Medium" href="<?php echo e(route('Userlist')); ?>" >Список сотрудников</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if(\Illuminate\Support\Facades\Auth::user()->role==0 and \Illuminate\Support\Facades\Auth::user()): ?>
                            <a class="nav-link nav-txt"  href="<?php echo e(route('FilesPage')); ?>">Файлы</a>
                        <?php endif; ?>

                        <a class="nav-link nav-txt"  href="<?php echo e(route('Exit')); ?>">Выход</a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</div>

<?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/layout/navbar.blade.php ENDPATH**/ ?>