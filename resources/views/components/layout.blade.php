<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Musiclab</title>
    <link rel="shortcut icon" href="/media/favicon.svg" type="image/x-icon">
    
    {{-- 𝗖𝗗𝗡 𝗳𝗼𝗻𝘁𝗮𝘄𝗲𝘀𝗼𝗺𝗲 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- 𝗖𝗗𝗡 𝗳𝗼𝗻𝘁𝗮𝗱𝗼𝗯𝗲 --}}
    <link rel="stylesheet" href="https://use.typekit.net/ero7caa.css">
    {{-- 𝗖𝗦𝗦 𝘀𝘄𝗶𝗽𝗲𝗿 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    {{-- 𝗯𝘂𝗶𝗹𝗱𝗶𝗻𝗴 𝗱𝗲𝗴𝗹𝗶 𝗮𝘀𝘀𝗲𝘁 --}}
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <x-navbar/>
    
    {{$slot}}
    


    
    
 
    {{-- 𝗯𝘂𝗶𝗹𝗱𝗶𝗻𝗴 𝗱𝗲𝗴𝗹𝗶 𝗮𝘀𝘀𝗲𝘁 --}}
    @livewireScripts
</body>
</html>