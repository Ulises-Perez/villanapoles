<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Caida de Chernarus</title>
    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Sans Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sono:wght@500;700&display=swap" rel="stylesheet">

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
            <div class="w-full fixed z-20 transition duration-700 ease-in-out">
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
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#noticias">
                           Noticias
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#comunidades">
                           Comunidades
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="btn-discord px-3 py-2 flex items-center justify-center text-white text-xs uppercase font-bold leading-snug rounded-xl bg-red-500 shadow" href="#redesociales">
                            Seguir
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
                                <div class="container mx-auto px-4">
                                    <h6 class="text-3xl lg:text-6xl font-bold text-white mb-10" id="movie-name">
                                        La Caida de Chernarus
                                    </h6>
                                    <a href="https://discord.gg/EA4UygXPdn" class="bg-sangre py-4 px-8 text-black font-bold uppercase text-xs rounded-xl bg-black shadow hover:shadow-xl transition duration-300 ease-in animate-pulse hover:animate-none shadow-lg shadow-red-800 hover:shadow-md hover:shadow-red-900" id="movie-btn-discord">
                                        <i class="fa-brands fa-discord mr-2"></i> Unete a Discord
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<section id="temporada">
            <div class="container mx-auto py-20 px-4">
                <div class="grid-img-bg rounded-xl shadow-lg shadow-red-800/25">
                    <div class="flex flex-col md:flex-row md:justify-between bg-black bg-opacity-50 rounded-xl">
                        <div class="complemento-free px-10 py-6 text-white flex flex-col justify-center">
                            <div class="title mb-5">
                                <h1 class="text-5xl" id="movie-btn-discord">La Caida de Chernarus:</h1>
                                <h1 class="text-5xl">Temporada 1</h1>
                            </div>
                            <div class="decription mb-6">
                                <p class="text-md">
                                    ¡Tu historia y las comunidades, han llegado a Chernarus!
                                </p>
                            </div>
                        </div>
                        <div class="img-complemento px-10 py-6 -mt-5 md:-mt-16 flex justify-end">
                            <img class="rounded" src="img/avatar/zombie_1.png"
                                alt="imagen complemento">
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <section id="temporada">
            <div class="w-full py-20 px-4">
                <div class="container mx-auto relative">
                    <!-- Image-1 -->
                    <div class="imageContainer">
                        <img class="foregroundImg rounded-xl object-cover" src="img/bg/bg_bunker.jpg">
                        <img class="backgroundImg" src="img/bg/bg_bunker.jpg">
                    </div>
                    <div class="absolute inset-0 z-10 flex items-center text-start">
                        <div class="container mx-auto px-4 text-white">
                            <div class="title mb-5">
                            <h6 class="text-5xl font-ujungle">La Caida de Chernarus</h6>
                            <h1 class="text-4xl font-ujungle">Temporada 1</h1>
                        </div>
                         <div class="decription mb-6">
                            <p class="text-md font-poppins">
                                ¡Tu historia y las comunidades, han llegado a Chernarus!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="noticias">
            <div class="w-full py-20 px-4 bg-black bg-opacity-75">
                <div class="container mx-auto text-white mb-10">
                    <p class="text-2xl md:text-3xl tracking-wide font-ujungle" id="movie-btn-discord">
                        Noticias
                    </p>
                    <p class="text-sm text-zinc-400">Descubre lo nuevo en La Caída de Chernarus .</p>
                </div>
                <div class="container mx-auto mb-6">
                    <div class="grid grid-cols-2 gap-4 justify-center content-center">
                        <div class="max-w-sm w-full lg:max-w-full lg:flex rounded-xl">
                            <div class="bg-black bg-opacity-25 p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-8">
                                    <!--<div class="text-black font-bold text-xl mb-2 carta-font">Existe un lugar seguro en Chernarus?</div>-->
                                    <div class="contenedor">
                                        <h1 class="maquina-texto font-bold text-xl mb-2 carta-font">¿Existe un lugar seguro en Chernarus?.<span>&#160;</span></h1>
                                    </div>
                                    <p class="text-black text-white carta-font">Se han escuchado rumores sobre un bunker, dicen que hay comida, armas y municion, por lo que he escuchado esta por los alrededores de Skalka.</p>
                                    </div>
                                    <div class="flex items-center text-white">
                                        <i class="fa-solid fa-radio mr-2"></i>
                                    <div class="text-sm">
                                        <p class="text-black leading-none carta-font text-white">Radio Chernarus</p>
                                        <p class="text-black carta-font text-white">Frecuencia 60.0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm w-full lg:max-w-full lg:flex rounded-xl">
                            <div class="bg-black bg-opacity-25 p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-8">
                                    <!--<div class="text-black font-bold text-xl mb-2 carta-font">Existe un lugar seguro en Chernarus?</div>-->
                                    <div class="contenedor">
                                        <h1 class="maquina-texto font-bold text-xl mb-2 carta-font">ИЗБАВЬТЕСЬ ОТ ВСЕХ ЭТИХ УБЛЮДКОВ<span>&#160;</span></h1>
                                    </div>
                                    <p class="text-black text-white carta-font">He vivido meses muy duros de los extremos calores hasta los frios inviernos, ya no puedo más!, creo que hoy mi vida se acabara para siempre, despues de todas las cosas, ya la vida no es lo mismo, ver a una persona, es un amenaza, es morir o matar?, ya no puedo más... suerte a todos, MALDITOS Z.</p>
                                    </div>
                                    <div class="flex items-center text-white">
                                        <i class="fa-solid fa-radio mr-2"></i>
                                    <div class="text-sm">
                                        <p class="text-black leading-none carta-font text-white">Polana</p>
                                        <p class="text-black carta-font text-white">Sobreviviente Dmitry</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="max-w-sm w-full lg:max-w-full lg:flex bg-up1 rounded-xl">
                            <div class="bg-black bg-opacity-25 p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-8">
                                    <div class="text-black font-bold text-xl mb-2 carta-font">ИЗБАВЬТЕСЬ ОТ ВСЕХ ЭТИХ УБЛЮДКОВ</div>
                                    <p class="text-black text-base carta-font">He vivido meses muy duros de los extremos calores hasta los frios inviernos, ya no puedo más!, creo que hoy mi vida se acabara para siempre, despues de todas las cosas, ya la vida no es lo mismo, ver a una persona, es un amenaza, es morir o matar?, ya no puedo más... suerte a todos, MALDITOS Z.</p>
                                    </div>
                                    <div class="flex items-center ">
                                        <i class="fa-solid fa-radio mr-2"></i>
                                    <div class="text-sm">
                                        <p class="text-black leading-none carta-font">Polana</p>
                                        <p class="text-black carta-font">Sobreviviente Dmitry</p>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </section>

        <section id="comunidades">
            <div class="w-full py-20 px-4">
                <div class="container mx-auto text-white mb-10">
                    <p class="text-2xl md:text-3xl tracking-wide font-ujungle" id="movie-btn-discord">
                        Comunidades
                    </p>
                    <p class="text-sm text-zinc-400">Elige la tuya en La Caída de Chernarus.</p>
                </div>
                <div class="container mx-auto flex justify-center content-center mb-6">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-center content-center text-white">
                        <ul class="movie-list">
                            <li>
                                <div class="movie-card">
                                    <a href="#!">
                                        <figure class="card-banner">
                                            <img src="img/tulga.jpg" alt="title">
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
                                            <img src="https://i.redd.it/c7hhprz5h7281.jpg" alt="title">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="#!" class="truncate">
                                            <p class="card-title truncate">Familia Gales</p>
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

        <section id="redesociales">
            <div class="w-full py-20 px-4 bg-black bg-opacity-75">
                <div class="container mx-auto text-white mb-10">
                    <p class="text-2xl md:text-3xl tracking-wide font-ujungle" id="movie-btn-discord">
                        Redes Sociales
                    </p>
                    <p class="text-sm text-zinc-400">¿Ya sabes lo nuevo de DayZ?</p>
                </div>
                <div class="container mx-auto mb-6">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 justify-center content-center">
                        <div class="box-twitter col-span-1 lg:col-span-8">
                            <a class="twitter-timeline" data-lang="es" data-height="500" data-width="600" data-dnt="true"  data-theme="dark" href="https://twitter.com/DayZ?ref_src=twsrc%5Etfw">
                                Tweets by DayZ
                            </a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="box-discord col-span-1 lg:col-span-4 flex justify-center">
                            <iframe src="https://discord.com/widget?id=1072346859231776809&theme=dark" width="600" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solo quita los < -- y podras disfrutar de este genial mando
            <section id="unirse">
            <div class="w-full py-5 px-4 bg-zinc-500">
                <div class="container mx-auto flex flex-col justify-center items-center">
                    <div class="presentation-content">
                        <h1 class="presentation-title">Unete YA!</h1>
                    </div>
                    <div class="top-button-group">
                        <button class="retro-button w-32" onclick="location.href='https://discord.gg/EA4UygXPdn'">Start</button>
                        <button class="retro-button w-32">Select</button>
                    </div>
                    <div class="bottom-button-group">
                        <button class="retro-button red-button" onclick="location.href='https://discord.gg/EA4UygXPdn'"><i class="fa-brands fa-discord"></i></button>
                        <button class="retro-button yellow-button">B</button>
                        <button class="retro-button blue-button">X</button>
                        <button class="retro-button green-button">Y</button>
                    </div>
                </div>
            </div>
        </section>
          Solo quita los -- > y podras disfrutar de este genial mando -->

    </main>

    <footer>
        <div class="w-full bg-zinc-900 bg-opacity-75">
            <div class="container mx-auto">
                <div class="container px-4 py-2 mx-auto flex items-center justify-between items-center">
                    <div class="mx-auto sm:m-0">
                        <a class="text-md font-bold leading-relaxed inline-block whitespace-no-wrap text-white"
                            href="#ElReySupremo">
                            Only in <i class="fa-brands fa-steam"></i> PC
                        </a>
                    </div>
                    <div class="redes-sociales mx-auto sm:m-0">
                        <!--<a href="https://discord.gg/xHPudsHMMD"
                            class="btn-discord text-white bg-indigo-600 font-bold uppercase text-xs px-4 py-2 rounded-xl outline-none focus:outline-none mr-1 mb-1"
                            type="button" style="transition: all .15s ease">
                            <i class="fa-brands fa-discord mr-1"></i> Villa Napoles
                        </a>-->
                        <a href="#"
                            class="btn-discord text-white bg-red-500 font-bold uppercase text-xs px-4 py-4 rounded-xl outline-none focus:outline-none mr-1 mb-1"
                            type="button" style="transition: all .15s ease">
                            <i class="fa-solid fa-arrow-up"></i>
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