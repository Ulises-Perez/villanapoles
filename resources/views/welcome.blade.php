<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Villa N&aacutepoles</title>
    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Sans Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- Estilos Propios -->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <header>
        <div class="flex flex-wrap relative">
            <div class="w-full fixed z-10 transition duration-700 ease-in-out">
              <nav class="menu relative flex flex-wrap items-center justify-between px-4 py-3">
                <div class="container mx-auto flex flex-wrap items-center justify-between">
                  <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                    <img src="https://www.gtxgaming.co.uk/wp-content/uploads/2018/05/DayZ_logo_1-invt-clrs.png" class="w-auto h-10" alt="">
                    <button class="text-white cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
                      <i class="fas fa-bars"></i>
                    </button>
                  </div>
                  <div class="lg:flex lg:flex-grow items-center hidden" id="example-collapse-navbar">
                    <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                      <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#comunidades">
                           Comunidades
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#noticias">
                           Noticias
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="btn-discord px-3 py-2 flex items-center justify-center text-white text-xs uppercase font-bold leading-snug rounded-xl transition ease-in-out delay-75 duration-300 bg-red-500 shadow" href="https://discord.gg/xHPudsHMMD">
                            Unirse
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
    </header>

    <main>
        
        <section id="content-sliders">
            <div class="w-full">
                <div class="owl-carousel owl-theme owl-carousel-1">
                    <div class="item">
                        <div class="sliders relative bg-cover bg-center object-fill"
                            style="background-image: url(img/bg/bg_villanapoles_1.jpeg);">
                            <div class="absolute inset-0 flex items-center text-center">
                                <div class="container mx-auto px-4 xl:px-0">
                                    <h6 class="text-3xl lg:text-5xl font-bold uppercase text-white mb-10" id="movie-name">
                                        Villa Napoles
                                    </h6>
                                    <a href="https://discord.gg/xHPudsHMMD" class="bg-sangre py-4 px-8 text-black font-bold uppercase text-xs rounded-xl bg-black shadow hover:shadow-xl transition duration-300 ease-in animate-pulse hover:animate-none shadow-lg shadow-red-800 hover:shadow-md hover:shadow-red-900" id="movie-btn-discord">
                                        <i class="fa-brands fa-discord mr-2"></i> Unete a Discord
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="temporada">
            <div class="container mx-auto py-20 px-4 xl:px-0">
                <div class="grid-img-bg rounded-xl">
                    <div class="flex flex-col md:flex-row md:justify-between bg-black bg-opacity-50 rounded-xl">
                        <div class="complemento-free px-10 py-6 text-white flex flex-col justify-center">
                            <div class="title mb-5">
                                <h1 class="text-5xl" id="movie-btn-discord">Villa Napoles:</h1>
                                <h1 class="text-5xl">Temporada 1</h1>
                            </div>
                            <div class="decription mb-6">
                                <p class="text-md">
                                    ¡Tu historia y las comunidades, han llegado a Villa Napoles!
                                </p>
                            </div>
                            <div class="button-more">
                                <a href="https://discord.gg/xHPudsHMMD" class="py-4 px-8 text-white font-bold uppercase text-xs rounded-xl bg-indigo-600 shadow hover:shadow-xl transition duration-300 ease-in" id="movie-btn-discord">
                                    <i class="fa-brands fa-discord mr-2"></i> Unete a Discord
                                </a>
                            </div>
                        </div>
                        <div class="img-complemento px-10 py-6 -mt-5 md:-mt-16 flex justify-end">
                            <img class="rounded" src="img/avatar/zombie_1.png"
                                alt="imagen complemento">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="comunidades">
            <div class="w-full py-20 bg-black bg-opacity-75">
                <div class="container mx-auto px-4 xl:px-0 text-white mb-10">
                    <p class="text-2xl md:text-3xl tracking-wide" id="movie-btn-discord">
                        Comunidades
                    </p>
                    <p class="text-sm text-zinc-400">Elige la tuya en Villa Napoles.</p>
                </div>
                <div class="container mx-auto flex justify-center content-center px-4 xl:px-0 mb-6">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-center content-center text-white">
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="img/comunity/ng.jpeg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">North Group</p>
                                        </a>
                                        <time datetime="2022">
                                            1º
                                        </time>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="img/comunity/napolitana.jpeg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Familia Napolitana</p>
                                        </a>
                                        <time datetime="2022">
                                            2º
                                        </time>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="img/comunity/jasons.jpeg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Jasons</p>
                                        </a>
                                        <time datetime="2022">
                                            3º
                                        </time>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="img/comunity/wh.jpeg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Walker Hunters</p>
                                        </a>
                                        <time datetime="2022">
                                            4º
                                        </time>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="quepuedesser">
            <div class="w-full py-20">
                <div class="container mx-auto px-4 xl:px-0 text-white mb-10">
                    <p class="text-2xl md:text-3xl tracking-wide" id="movie-btn-discord">
                        Que puedes ser?
                    </p>
                    <p class="text-sm text-zinc-400">Todo lo que te imagines.</p>
                </div>
                <div class="container mx-auto flex justify-center content-center px-4 xl:px-0 mb-6">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 justify-center content-center text-white">
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://http2.mlstatic.com/D_NQ_NP_689302-MLC27866774122_072018-O.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Policía</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://static.studyusa.com/article/aws_9CZM8SOpRgaVQQ1MnX8HxiuLzY8AOMoD_sm_2x.jpg?format=webp" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Medic@</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://st2.depositphotos.com/4249115/8739/i/450/depositphotos_87390562-stock-photo-terrorist-during-the-special-secret.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Mercenario</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://www.larazon.es/resizer/il7m3p2nTLl0l14JhcQB-nlgYwU=/600x400/smart/filters:format(jpg)/cloudfront-eu-central-1.images.arcpublishing.com/larazon/QGWWC2VLXBGLZETIAVITJ23HHU.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Cazador</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://w0.peakpx.com/wallpaper/112/503/HD-wallpaper-thomas-shelby-birmingham-michael-shelby-peaky-blinders-cillian-murphy-family-shelby-family-blinders.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Mafioso</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://us.123rf.com/450wm/luckybusiness/luckybusiness1609/luckybusiness160900204/62462188-alegre-agricultor-con-hortalizas-org%C3%A1nicas-en-jard%C3%ADn.jpg?ver=6" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Agricultor</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://img.freepik.com/fotos-premium/joven-taxista-macho-feliz-sienta-al-volante-taxi-muestra-como_170532-3462.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Taxista</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Pablo_Escobar_Mug.jpg/1200px-Pablo_Escobar_Mug.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Traficante</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://www.beckerabogados.cl/wp-content/uploads/2020/12/Dise%C3%B1o-sin-t%C3%ADtulo.png" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Abogad@</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://www.legaltoday.com/wp-content/uploads/2021/01/juez.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Juez(@)</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://www.24horas.cl/elecciones-2021/site/artic/20211219/imag/foto_0000000220211219173611.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Presidente</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="https://static8.depositphotos.com/1002111/989/i/600/depositphotos_9899978-stock-photo-builder-shows-gesture-ok.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Constructor</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="noticias">
            <div class="w-full py-20 bg-black bg-opacity-75">
                <div class="container mx-auto px-4 xl:px-0 text-white mb-10">
                    <p class="text-2xl md:text-3xl tracking-wide" id="movie-btn-discord">
                        Noticias
                    </p>
                    <p class="text-sm text-zinc-400">¿Ya sabes lo que agregarón nuevo a Day Z?.</p>
                </div>
                <div class="container mx-auto px-4 xl:px-0 mb-6">
                    <div>
                        <a class="twitter-timeline" data-lang="es" data-height="400" data-width="600" data-dnt="true"  data-theme="dark" href="https://twitter.com/DayZ?ref_src=twsrc%5Etfw">
                            Tweets by DayZ
                        </a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="w-full bg-zinc-900 bg-opacity-75">
            <div class="container mx-auto">
                <div class="container px-4 py-2 mx-auto flex items-center justify-between items-center">
                    <div class="VillaNapoles mx-auto sm:m-0">
                        <a class="text-md font-bold leading-relaxed inline-block whitespace-no-wrap text-white"
                            href="#ElReySupremo">
                            Solo en PS4 & PS5
                        </a>
                    </div>
                    <div class="redes-sociales mx-auto sm:m-0">
                        <!--<a href="https://discord.gg/xHPudsHMMD"
                            class="btn-discord text-white bg-indigo-600 font-bold uppercase text-xs px-4 py-2 rounded-xl outline-none focus:outline-none mr-1 mb-1"
                            type="button" style="transition: all .15s ease">
                            <i class="fa-brands fa-discord mr-1"></i> Villa Napoles
                        </a>-->
                        <a href="https://dayz.com/buy"
                            class="btn-discord text-white bg-red-500 font-bold uppercase text-xs px-4 py-2 rounded-xl outline-none focus:outline-none mr-1 mb-1"
                            type="button" style="transition: all .15s ease">
                            <i class="fa-solid fa-link mr-1"></i> Day Z
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Universal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src='https://cdn.rawgit.com/gijsroge/tilt.js/38991dd7/dest/tilt.jquery.js'></script>
    <script src="js/script.js"></script>
    <!-- JS Universal -->
    
</body>
</html>