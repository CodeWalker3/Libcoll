<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libcoll</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

</head>

<body>

    <header class="header">

        <div class="header-1">

            <a href="<?php echo e(route('home')); ?>" class="logo"> <i class="fas fa-book"></i> Libcoll </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="<?php echo e(route('home')); ?>">Início</a>
                <a href="catalogo.html">Catálogo</a>
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('dashboard')); ?>">Profile</a>
                    <?php ( $logout_url = View::getSection('logout_url') ?? config('adminlte.logout_url', 'logout') ); ?>
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <?php echo e(__('adminlte::adminlte.log_out')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e($logout_url); ?>" method="POST" style="display: none;">
                        <?php if(config('adminlte.logout_method')): ?>
                            <?php echo e(method_field(config('adminlte.logout_method'))); ?>

                        <?php endif; ?>
                        <?php echo e(csrf_field()); ?>

                    </form>
                    <?php else: ?>
                    <a href="#" id="login-btn">Entrar</a>
                    <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
    </header>


    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <form  method="POST" action="<?php echo e(route('login')); ?>">
            <h3>Entrar</h3>
            <?php echo csrf_field(); ?>
            <span for="email" value="<?php echo e(__('Email')); ?>" >Usuário</span>
            <input id="email" class="box" type="email" name="email" :value="old('email')" required autofocus>
            <span for="password" value="<?php echo e(__('Password')); ?>">Senha</span>
            <input id="password" class="box" type="password" name="password" required autocomplete="current-password">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"><?php echo e(__('Remember me')); ?></ </label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <?php if(Route::has('password.request')): ?>
            <p>Esqueceu sua senha? <a href="<?php echo e(route('password.request')); ?>">Clique aqui</a></p>

                <?php endif; ?>
            <p>Ainda não tem uma conta? <a href="#">Criar conta</a></p>
        </form>

    </div>

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>Adicionados recentemente</h3>
                <a href="#" class="btn">Reserve agora</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">

                    <a href="#" class="swiper-slide"><img src="/images/books/c7e6c117447f8a40dddbc8252fa609cd.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
                </div>
                <img src="image/stand.png" class="stand" alt="">
            </div>

        </div>

    </section>

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Entre em contato:</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> minhabiblioteca@gmail.com </a>

            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="<?php echo e(asset('js/script.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Libcoll-main\resources\views/index.blade.php ENDPATH**/ ?>