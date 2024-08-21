<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-[url('../../public/background.svg')]">
    <x-nav-bar></x-nav-bar>
        <div class="grid mx-10 grid-cols-3 grid-rows-4 gap-8 mt-3 ">
            <div class="bg-red-500 col-span-3 flex justify-center items-center p-5 mt-9 rounded-2xl">Imie i nazwisko</div>
            <div class="bg-amber-600 rounded-2xl ">2</div>
            <div class="bg-yellow-500 rounded-2xl">3</div>
            <div class="bg-blue-900 rounded-2xl">1</div>
            <div class="bg-emerald-400 rounded-2xl">2</div>
            <div class="bg-purple-700 rounded-2xl">3</div>
        </div>

</body>

</html>
