<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Muhammad Usman">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muman - E-commerce Store</title>
    <link rel="stylesheet" href="/styles.css">
    <link rel="shortcut icon" href="images/main/favicon.ico" type="image/x-icon">
</head>

<body class="bg-[#f5f4f4] hide-scrollbar">

    <?php include("partials/_header.php") ?>

    <div class="mt-[72px] mx-4 md:mt-4">
        <div class="relative lg:w-[1000px] lg:-translate-x-1/2 lg:left-1/2">
            <button class="group absolute bg-[grey] active:bg-opacity-30 bg-opacity-0 w-20 h-full top-1/2 left-0 -translate-y-1/2 grid place-items-center hover:bg-opacity-20 transition-all duration-300 left">
                <img src="images/main/left.png" class="hidden group-hover:block" alt="Scroll Icon">
            </button>
            <div class="rounded-t-xl flex overflow-x-scroll banner scroll-smooth hide-scrollbar">
                <img class="flex-shrink-0 h-full" src="images/main/banner1.jpg" alt="">
                <img class="flex-shrink-0 h-full" src="images/main/banner2.jpg" alt="">
                <img class="flex-shrink-0 h-full" src="images/main/banner3.jpg" alt="">
                <img class="flex-shrink-0 h-full" src="images/main/banner4.jpg" alt="">
            </div>
            <button class="group absolute bg-[grey] active:bg-opacity-30 bg-opacity-0 w-20 h-full top-1/2 right-0 -translate-y-1/2 grid place-items-center hover:bg-opacity-20 transition-all duration-300 right">
                <img src="images/main/right.png" class="hidden group-hover:block" alt="Scroll Icon">
            </button>
        </div>
    </div>
    <div class="info mt-4 bg-blue-600 text-white font-bold text-lg p-1 flex justify-center items-center">
        <img class="h-6" src="images/main/sale_info.png" alt="">
        <span class="mx-2">Sale Ending in</span>
        <span class="hours text-blue-600 bg-white w-9 text-center mx-[2px] h-7 rounded-sm"></span><span
            class="text-white">:</span>
        <span class="minutes text-blue-600 bg-white w-9 text-center mx-[2px] h-7 rounded-sm"></span><span
            class="text-white">:</span>
        <span class="seconds text-blue-600 bg-white w-9 text-center mx-[2px] h-7 rounded-sm"></span>
    </div>
    <div class="popular">
        <div class="items">
            <div class="flex justify-between py-2 px-4 bg-white">
                <span class="font-bold text-lg">Hot Selling</span>
                <a href="" class="font-bold text-blue-800">View All</a>
            </div>
            <div class="grid grid-cols-2 scroll-smooth p-0 bg-slate-100 w-full md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
                <a href="product/Cowin-Blue-Wholesale-Aviation-Active-Noise-Cancelling-Headphones-Wired-Gaming-Earphones-Headsets-Bluetooth-Headphones-Wireless.html" class="bg-[#e8e8e8] h-72 w-full p-2 border-[grey] border-r-[1px] md:h-auto">
                    <img class="rounded-md w-full sm:w-[56%] md:h-auto md:w-full" src="images/main/hot1.webp" alt="">
                    <div>
                        <p class="line-clamp-2 leading-5 break-all mx-2 mt-2">Cowin Blue Wholesale: Aviation Active Noise Cancelling Headphones, Wired Gaming Earphones, Headsets, Bluetooth Headphones, Wireless</p>
                        <p class="font-extrabold text-blue-700 mx-2 leading-none">
                            <span class="text-xs">$</span><del>79.99</del>
                            <span class="w-4"> </span>
                            <span class="text-sm">$</span><span class="text-lg">59.99<span>
                        </p>
                    </div>
                </a>
                <div class="sidehot grid grid-rows-3 grid-cols-[h-24] bg-[#e8e8e8] h-72 w-full md:col-span-3 md:grid-rows-1 md:grid-cols-3 md:h-auto">
                    <a href="product/Modern-soft-and-comfortable-office-E-sports-club-chair-designed-for-ergonomic-gaming-on-computers.html" class="p-2 flex border-[grey] border-b-[1px] md:block md:border-b-0 md:border-r-[1px]">
                        <img class="rounded-md h-full md:h-auto md:w-full" src="images/main/hot2.webp" alt="">
                        <div class="hot-detail flex flex-col md:static">
                            <p class="line-clamp-2 leading-5 mx-2 break-all md:mt-2">Modern, soft, and comfortable office E-sports club chair designed for ergonomic gaming on computers.</p>
                            <p class="font-extrabold text-sm text-blue-700 mx-2 leading-none mt-2 md:mt-0 md:text-base">
                                <span class="text-[10px] md:text-xs">$</span><del>119.99</del>
                                <span class="block md:inline-block"></span>
                                <span class="text-xs md:text-sm">$</span><span class="text-[16px] md:text-lg">99.99<span>
                            </p>
                        </div>
                    </a>
                    <a href="product/New-and-stylish-Auricularess-Bluetooth-earbuds-custom-waterproof-design-perfect-for-immersive-gaming-experiences.html" class="p-2 flex border-[grey] border-b-[1px] md:block md:border-b-0 md:border-r-[1px]">
                        <img class="rounded-md h-full md:h-auto md:w-full" src="images/main/hot3.webp" alt="">
                        <div class="hot-detail flex flex-col md:static">
                            <p class="line-clamp-2 leading-5 mx-2 break-all md:mt-2">New and stylish Auricularess Bluetooth earbuds, custom waterproof design, perfect for immersive gaming experiences.</p>
                            <p class="font-extrabold text-sm text-blue-700 mx-2 leading-none mt-2 md:mt-0 md:text-base">
                                <span class="text-[10px] md:text-xs">$</span><del>29.99</del>
                                <span class="block md:inline-block"></span>
                                <span class="text-xs md:text-sm">$</span><span class="text-[16px] md:text-lg">24.99<span>
                            </p>
                        </div>
                    </a>
                    <a href="product/4K-LCD-screen,-offering-crisp-visuals-and-optimal-gaming-performance.html" class="p-2 flex border-[grey] md:block md:border-b-0 lg:border-r">
                        <img class="rounded-md h-full md:h-auto md:w-full" src="images/main/hot4.png" alt="">
                        <div class="hot-detail flex flex-col md:static">
                            <p class="line-clamp-2 leading-5 mx-2 break-all md:mt-2">High-quality 24" - 27" computer monitor with a 2K/4K LCD screen, offering crisp visuals and optimal gaming performance.</p>
                            <p class="font-extrabold text-sm text-blue-700 mx-2 leading-none mt-2 md:mt-0 md:text-base">
                                <span class="text-[10px] md:text-xs">$</span><del>79.99</del>
                                <span class="block md:inline-block"></span>
                                <span class="text-xs md:text-sm">$</span><span class="text-[16px] md:text-lg">59.99<span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="categories">
        <div class="flex justify-between py-2 px-4 bg-white">
            <span class="font-bold text-lg">Categories</span>
        </div>
        <div
            class="category grid grid-cols-3 grid-rows-2 grid-templete-rows-12 bg-[#e8e8e8] md:grid-cols-6 md:grid-rows-none lg:grid-cols-8 xl:grid-cols-10">
            <a href="categories/console.html"
                class="border-[grey] border-r border-b grid grid-cols-1 place-items-center grid-rows-[fit-content_fit-content] md:border-b-0">
                <img class="h-20" src="images/main/cat1.png" alt="">
                <span class="text-xl text-blue-700 font-bold">Console</span>
            </a>
            <a href="categories/flashdrive.html"
                class="border-[grey] border-r border-b grid grid-cols-1 place-items-center grid-rows-[fit-content_fit-content] md:border-b-0">
                <img class="h-20" src="images/main/cat2.png" alt="">
                <span class="text-xl text-blue-700 font-bold">Flash Drive</span>
            </a>
            <a href="categories/chair.html"
                class="border-[grey] border-b grid grid-cols-1 place-items-center grid-rows-[fit-content_fit-content] md:border-b-0 md:border-r">
                <img class="h-20" src="images/main/cat3.png" alt="">
                <span class="text-xl text-blue-700 font-bold">Chair</span>
            </a>
            <a href="categories/earbuds.html" class="border-[grey] border-r grid grid-cols-1 place-items-center grid-rows-[fit-content_fit-content]">
                <img class="h-20" src="images/main/cat4.png" alt="">
                <span class="text-xl text-blue-700 font-bold">Ear Buds</span>
            </a>
            <a href="categories/mouse.html" class="border-[grey] border-r grid grid-cols-1 place-items-center grid-rows-[fit-content_fit-content]">
                <img class="h-20" src="images/main/cat5.png" alt="">
                <span class="text-xl text-blue-700 font-bold">Mouse</span>
            </a>
            <a href="categories/keyboard.html" class="border-[grey] grid grid-cols-1 place-items-center grid-rows-[fit-content_fit-content] lg:border-r">
                <img class="h-20" src="images/main/cat6.png" alt="">
                <span class="text-xl text-blue-700 font-bold">Keyboard</span>
            </a>
        </div>
    </div>
    <div class="flex justify-between py-2 px-4 bg-white">
        <span class="font-bold text-lg">Connect</span>
    </div>
    <?php include("partials/_footer.php") ?>

    <script src="script.js"></script>
</body>

</html>