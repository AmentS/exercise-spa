<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:400, 700 mb-4" rel="stylesheet">
</head>
<body class="font-sans">

<div id="app">

    <div class="container mx-auto">
        <header class="py-6">
           <h3 style="font-size: 33px"><img src="/images/logo.svg" alt=""></h3>

        </header>

        <main class="flex">
            <aside class="w-1/5">

                <section class="mb-8">
                    <h5 class="uppercase font-bold mb-4">The Brand</h5>
                    <ul class="list-reset">
                        <li class="leading-10">
                            <router-link to="/" exact>Logo</router-link>
                        </li>
                        <li class="leading-10">
                            <router-link to="/about">Logo Symbol</router-link>
                        </li>
                        <li class="leading-10">
                            <router-link to="/colors">Colors</router-link>
                        </li>
                        <li class="leading-10">
                            <router-link to="/typography">Typography</router-link>
                        </li>
                    </ul>
                </section>

                <section>
                    <h5 class="uppercase font-bold mb-4">Doodles</h5>
                    <ul class="list-reset">
                        <li class="leading-10">
                            <router-link to="/mascot">Mascot</router-link>
                        </li>
                        <li class="leading-10">
                            <router-link to="/illustrations">Illustrations</router-link>
                        </li>
                        <li class="leading-10">
                            <router-link to="/loaders">Loaders and Animations</router-link>
                        </li>
                        <li class="leading-10">
                            <router-link to="/wallpapers">Wallpapers</router-link>
                        </li>
                    </ul>
                </section>





            </aside>
            <div class="primary flex-1">
                <router-view></router-view>
            </div>


        </main>










    </div>

</div>

<script src="/js/app.js"></script>
</body>
</html>
