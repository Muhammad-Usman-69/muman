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
    <form action="search.php" method="get"
        class="search absolute top-[72px] w-full h-14 bg-blue-600 flex items-center justify-center md:static md:w-3/5 md:h-[72px] md:bg-transparent">
        <input type="search" name="q" placeholder="Search" class="h-6 py-5 px-3 rounded-l-md focus:outline-none w-1/2"
            autocomplete="off" value="<?php if (isset($_GET["q"]) && $_GET["q"] != "") {
                echo $_GET["q"];
            } ?>">
        <button>
            <img src="images/main/search.png" alt="" class="bg-blue-100 h-10 p-2 rounded-r-md active:bg-blue-200">
        </button>
        <a href="side/cart.html" class="w-12 ml-6 p-2 bg-blue-600 rounded-full md:hover:bg-blue-700">
            <img src="images/main/cart.png" alt="" class="cart invert">
        </a>
    </form>
    <div onclick="showUser()" class="top-1/2 translate-y-[-50%] right-4 absolute rounded-full z-10">
        <img src="images/main/account.png"
            class="cursor-pointer w-10 bg-[#f7941c] hover:bg-[#ff8f10e5] active:bg-[#f7941c] rounded-full">
        <div
            class="user opacity-0 transition-all ease-in-out duration-300 absolute right-0 top-14 bg-[#0c3880] p-2 rounded-md">
            <span
                class="border-[transparent_transparent_#0c3880_transparent] border-[10px] content-[0] border-solid absolute -top-5 right-3"></span>
            <div class="space-y-2 w-48 flex flex-col z-20">
                <?php
                $l = false;
                if ($l == true) {
                    echo '<button
                        class="border-blue-500 border py-2 bg-slate-50 text-[#0c3880] rounded-md hover:bg-slate-100 active:bg-slate-200 font-semibold">View
                        Profile</button>
                    <button
                        class="border-blue-500 border py-2 bg-slate-50 text-[#0c3880] rounded-md hover:bg-slate-100 active:bg-slate-200 font-semibold">Log
                        out</button>';
                } else {
                    echo '<button data-modal-target="log-modal"         data-modal-toggle="log-modal" class="border-blue-500 border py-2 bg-slate-50 text-[#0c3880] rounded-md hover:bg-slate-100 active:bg-slate-200 font-semibold">Log in</button>
                    <button data-modal-target="sign-modal"         data-modal-toggle="sign-modal" class="border-blue-500 border py-2 bg-slate-50 text-[#0c3880] rounded-md hover:bg-slate-100 active:bg-slate-200 font-semibold">Sign up</button>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>

<?php 
    $l = false;
    if ($l == false) {
        include("partials/_l-modal.php");
        include("partials/_s-modal.php");
    }
?> 

<?php 
    if (isset($_GET["alert"]) && $_GET["alert"] != "") {
        $alert = $_GET["alert"];
            echo '<div id="alert-border-3"
            class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                A simple success alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>.
                Give it a click if you like.
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>';
    } 


/*     echo '<div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ms-3 text-sm font-medium">
      A simple danger alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
      <span class="sr-only">Dismiss</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
    </button>
</div>

<div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ms-3 text-sm font-medium">
      A simple success alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
      <span class="sr-only">Dismiss</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
    </button>
</div>' */

?>
