<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Music App Player</title>
    @vite(['resources/css/app.css', 'resources/js/script.js']);
    <script src="https://kit.fontawesome.com/c78150c242.js" crossorigin="anonytmous"></script>
</head>
<body class="m-0 font-[Poppins] min-h-screen text-xs flex items-center justify-center select-none">

    <div class="bg-[#e7e7e7] h-[550px] w-[400px] rounded-[15px] transition-all duration-500 ease-in-out shadow-[1px_1px_0px_#a7a7a7,2px_2px_0px_#a7a7a7,3px_3px_0px_#a7a7a7,4px_4px_0px_#a7a7a7,5px_5px_0px_#a7a7a7,6px_8px_0px_#a7a7a7]">
        <div class="w-[300px] h-[300px] relative -top-[50px] left-[50px]">
            <img src="" alt="player-img" id="cover"
                 class="object-fill rounded-[15px] w-full h-full transition-all duration-500 opacity-100">
        </div>

        <h2 id="music-title" title=""
            class="text-[25px] text-center font-bold m-0"></h2>
        <h3 id="music-artist" title=""
            class="text-[15px] text-center font-normal relative top-5"></h3>

        <div class="bg-white rounded-[5px] cursor-pointer mx-5 my-[40px_20px_35px] h-[7px] w-[90%] relative top-16"
             id="player-progress">
            <div class="bg-[#212121] rounded-[5px] h-full w-0 transition-[width] duration-100 linear cursor-pointer"
                 id="progress"></div>
            <div class="relative -top-7 flex justify-between" id="music-duration">
                <div id="current-time">00:00</div>
                <div id="duration-time">00:00</div>
            </div>
            <div id="circle"
                 class="relative h-[15px] w-[15px] rounded-full bg-[#666] transition-all duration-100 linear -top-[28px] -left-2"></div>
        </div>

        <div class="relative top-20 left-[15%] w-[400px]">
            <i class="fa-solid fa-shuffle text-[18px] text-[#666] cursor-pointer mr-[30px] transition-all duration-300 p-[5px] relative -top-1 hover:brightness-75"
               title="Shuffle" id="shuffle"></i>
            <i class="fa-solid fa-backward text-[30px] text-[#666] cursor-pointer mr-[30px] transition-all duration-300 hover:brightness-40"
               title="Previous" id="previous"></i>
            <i class="fa-solid fa-play text-[#666] cursor-pointer mr-[30px] transition-all duration-300 relative top-[3px] hover:brightness-40"
               title="Play" id="play"></i>
            <i class="fa-solid fa-forward text-[30px] text-[#666] cursor-pointer mr-[30px] transition-all duration-300 hover:brightness-40"
               title="Forward" id="forward"></i>
            <i class="fa-solid fa-repeat text-[18px] text-[#666] cursor-pointer mr-[30px] transition-all duration-300 p-[5px] relative -top-1 hover:brightness-75"
               title="Repeat" id="repeat"></i>
        </div>
        <div class="text-center relative top-32">
            <p class="cursor-pointer">
                <a href="{{ route("add-music-page") }}"
                   class="text-[14px] text-[#212121] no-underline hover:underline">Add your music here!</a>
            </p>
        </div>
    </div>
</body>
</html>
