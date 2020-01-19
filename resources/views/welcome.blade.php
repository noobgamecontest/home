<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NGC - Noob Game Contest</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- source : https://github.com/tailwindtoolbox/Landing-Page -->

    <!-- Font Awesome if you need it
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
    <!--Replace with your tailwind.css once created-->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#16abd5+0,400583+50,bd0080+100 */
            background: #16abd5; /* Old browsers */
            background: -moz-linear-gradient(-45deg,  #16abd5 0%, #400583 50%, #bd0080 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg,  #16abd5 0%,#400583 50%,#bd0080 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg,  #16abd5 0%,#400583 50%,#bd0080 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#16abd5', endColorstr='#bd0080',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }



    </style>

</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

<!--Nav-->
<nav id="header" class="w-full z-30 top-0 text-white">

    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">

        <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="#">
                NGC
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-orange-800 hover:text-gray-900">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block text-white no-underline hover:text-pink-600 font-extrabold hover:text-underline py-2 px-4" href="#">Qui sommes nous ?</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-white no-underline hover:text-pink-600 font-extrabold hover:text-underline py-2 px-4" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>

    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>




<!--Hero-->
<div class="pt-12 border-b">

    <div class="container px-3 pb-24 mx-auto items-center">

        <div class="w-full text-center">
            <img class="w-full z-50 object-scale-down h-64 w-full" src="hero.png">
        </div>
        <!--Left Col-->
        <div class="w-full items-start text-center">
            <h1 class="my-4 text-5xl font-bold leading-tight uppercase">Noob Game Contest</h1>
            <p class="leading-normal text-2xl mb-8">Organisateurs d'événements sportifs & e-sportifs !</p>
        </div>
        <!--Right Col-->


    </div>
</div>

<section class="bg-pink-600 border-b py-8">

    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 items-start text-center md:text-left">
            <p class="leading-normal text-2xl uppercase underline">Prochain événement</p>
            <p class="leading-normal uppercase">21/01 & 23/01 : Tournoi Bomberman</p>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center text-2xl uppercase md:text-right">
            <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRlEm07flRk8vi_KscCaE-zhiKN-Pa902sNOBbj_BlUdF-EuhbA4Wk3QN3kSzeX2sj5hDoJwHjANzO1/pubhtml" class="uppercase bg-transparent hover:bg-pink-900 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
                A suivre ici
            </a>
        </div>

    </div>
</section>

<section class="bg-white border-b py-8">

    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 items-start text-center md:text-left">
            <p class="leading-normal text-2xl uppercase underline">Prochain événement</p>
            <p class="leading-normal uppercase">21/01 & 23/01 : Tournoi Bomberman</p>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center text-2xl uppercase md:text-right">
            <button class="uppercase bg-transparent hover:bg-pink-900 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
                A suivre ici
            </button>
        </div>

    </div>
</section>


<section class="container mx-auto text-center py-6 mb-12">

    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">Call to Action</h1>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    <h3 class="my-4 text-3xl leading-tight">Main Hero Message to sell yourself!</h3>

    <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">Action!</button>

</section>






<!-- jQuery if you need it
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->

</body>

</html>
