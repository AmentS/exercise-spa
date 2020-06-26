<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div id="app">

    <div class="container mx-auto">
        <header class="py-6">
           <h3>Laracast</h3>

        </header>

        <main class="flex">
            <aside class="w-1/5">

                <router-link to="/">Home</router-link>
                <router-link to="/about">About</router-link>

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
