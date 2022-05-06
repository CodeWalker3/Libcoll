<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="index.html" class="logo"> <i class="fas fa-book"></i> Libcoll </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="index.html">Início</a>
                <a href="test.html">Catálogo</a>
                <a href="#" id="login-btn">Entrar</a>

            </div>

        </div>



    </header>

    

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="">
            <h3>Entrar</h3>
            <span>Usuário</span>
            <input type="email" name="" class="box" placeholder="email" id="">
            <span>Senha</span>
            <input type="password" name="" class="box" placeholder="senha" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Lembre-se de mim </label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>Esqueceu sua senha? <a href="#">Clique aqui</a></p>
            <p>Ainda não tem uma conta ? <a href="#">Criar conta</a></p>
        </form>

    </div>


    <section class="featured" id="featured">

        <h1 class="heading"> <span>Livros</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                    </div>
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nome do livro</h3>
                        <a href="#" class="btn">Reservar</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

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

    <script src="js/script.js"></script>

</body>

</html>