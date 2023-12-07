<nav class="flex h-[72px] bg-blue-500 text-sm relative">
    <a href="/" class="logo w-[72px] grid place-items-center cursor-pointer">
        <img class="w-[70px] h-14" src="images/main/logo.png" alt="">
    </a>
    <ul class="flex space-x-2 justify-center items-center text-white">
        <li>
            <a href="info.php?t=about" class="bg-blue-600 p-2 px-3 rounded-full hover:bg-blue-700">About</a>
        </li>
        <li>
            <a href="info.php?t=contact" class="bg-blue-600 p-2 px-3 rounded-full hover:bg-blue-700">Contact Us</a>
        </li>
        <li>
            <a href="info.php?t=faq" class="bg-blue-600 p-2 px-3 rounded-full hover:bg-blue-700">FAQ</a>
        </li>
    </ul>
    <form action="search.php" method="get" class="search absolute top-[72px] w-full h-14 bg-blue-600 flex items-center justify-center md:static md:w-3/5 md:h-[72px] md:bg-transparent">
        <input type="search" name="q" placeholder="Search"
            class="h-6 py-5 px-3 rounded-l-md focus:outline-none w-1/2" autocomplete="off" value="<?php if (isset($_GET["q"]) && $_GET["q"] != "") { echo $_GET["q"]; }?>">
        <button>
            <img src="images/main/search.png" alt="" class="bg-blue-100 h-10 p-2 rounded-r-md active:bg-blue-200">
        </button>
        <a href="side/cart.html" class="w-12 ml-6 p-2 bg-blue-600 rounded-full md:hover:bg-blue-700">
            <img src="images/main/cart.png" alt="" class="cart invert">
        </a>
    </form>
    <a class="top-1/2 translate-y-[-50%] right-4 absolute rounded-full" href="side/login.html">
        <img src="images/main/account.png" alt="" class="w-10 bg-[#f7941c] rounded-full">
    </a>
</nav>