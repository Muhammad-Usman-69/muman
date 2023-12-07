<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Muhammad Usman">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muman - E-commerce Store</title>
    <link rel="stylesheet" href="side/style.css">
    <link rel="shortcut icon" href="images/main/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f5f4f4] hide-scrollbar">

    <?php include("partials/_header.php"); ?>
    <?php include("partials/_dbconnect.php"); ?>

    <div class="mt-[72px] mx-4 md:mt-4">
        <div class="relative lg:w-[1000px] lg:-translate-x-1/2 lg:left-1/2">
            <button
                class="group absolute bg-[grey] active:bg-opacity-30 bg-opacity-0 w-20 h-full top-1/2 left-0 -translate-y-1/2 grid place-items-center hover:bg-opacity-20 transition-all duration-300" onclick="scrollLeft()">
                <img src="images/main/left.png" class="hidden group-hover:block" alt="Scroll Icon">
            </button>
            <div class="rounded-t-xl flex overflow-x-scroll banner scroll-smooth hide-scrollbar">
                <img class="flex-shrink-0 h-full" src="images/main/banner1.jpg" alt="">
                <img class="flex-shrink-0 h-full" src="images/main/banner2.jpg" alt="">
                <img class="flex-shrink-0 h-full" src="images/main/banner3.jpg" alt="">
                <img class="flex-shrink-0 h-full" src="images/main/banner4.jpg" alt="">
            </div>
            <button
                class="group absolute bg-[grey] active:bg-opacity-30 bg-opacity-0 w-20 h-full top-1/2 right-0 -translate-y-1/2 grid place-items-center hover:bg-opacity-20 transition-all duration-300" onclick="scrollRight()">
                <img src="images/main/right.png" class="hidden group-hover:block" alt="Scroll Icon">
            </button>
        </div>
    </div>
    <div class="sale_info mt-4 bg-blue-600 text-white font-bold text-lg p-1 flex justify-center items-center">
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
                <a href="products.php" class="font-bold text-blue-800">View All</a>
            </div>
            <div class="grid grid-cols-2 scroll-smooth p-0 bg-slate-100 w-full md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 border-[grey] border-t-[1px] md:border-none">
                <?php 
                    $sql = "SELECT * FROM `products` WHERE `product_rating` <= 4";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);
                    $row = mysqli_fetch_assoc($result);
                    $prod_name = $row["product_name"];
                    $prod_msin = $row["product_msin"];
                    $prod_old_price = $row["product_old_price"];
                    $prod_new_price = $row["product_new_price"];
                ?>
                <a href="product.php?msin=<?php echo $prod_msin; ?>"
                    class="bg-[#e8e8e8] h-72 w-full p-2 border-[grey] border-r md:h-auto border-b md:border-b-0">
                    <img class="rounded-md w-full sm:w-[56%] md:h-auto md:w-full" src="images/<?php echo $prod_name; ?>/prod1.jpg" alt="">
                    <div>
                        <p class="line-clamp-2 leading-5 break-all mx-2 mt-2"><?php echo $prod_name; ?></p>
                        <p class="font-extrabold text-blue-700 mx-2 leading-none">
                            <span class="text-xs">$</span><del><?php echo $prod_old_price; ?></del>
                            <span class="w-4"> </span>
                            <span class="text-sm">$</span><span class="text-lg"><?php echo $prod_new_price; ?><span>
                        </p>
                    </div>
                </a>
                <div class="sidehot grid grid-rows-3 grid-cols-[h-24] bg-[#e8e8e8] h-72 w-full md:col-span-3 md:grid-rows-1 md:grid-cols-3 md:h-auto">
                <?php 
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                                $prod_name = $row["product_name"];
                                $prod_msin = $row["product_msin"];
                                $prod_old_price = $row["product_old_price"];
                                $prod_new_price = $row["product_new_price"];
                                echo '<a href="product.php?msin='.$prod_msin.'"
                                class="p-2 flex border-[grey] border-b-[1px] md:block md:border-b-0 md:border-r">

                                <img class="rounded-md h-full md:h-auto md:w-full" src="images/'.$prod_name.'/prod1.jpg">
                                    <div class="hot-detail flex flex-col md:static">
                                        <p class="line-clamp-2 leading-5 mx-2 break-all md:mt-2">'.$prod_name.'</p>
                                        <p class="font-extrabold text-sm text-blue-700 mx-2 leading-none mt-2 md:mt-0 md:text-base">
                                            <span class="text-[10px] md:text-xs">$</span><del>'.$prod_old_price.'</del>
                                            <span class="block md:inline-block"></span>
                                            <span class="text-xs md:text-sm">$</span><span
                                            class="text-[16px] md:text-lg">'.$prod_new_price.'<span>
                                        </p>
                                    </div>
                                </a>';
                           }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="categories">
        <div class="flex justify-between py-2 px-4 bg-white">
            <span class="font-bold text-lg">Categories</span>
        </div>
        <div
            class="category grid grid-cols-3 grid-rows-3 grid-templete-rows-12 bg-slate-100 md:grid-cols-7 md:grid-rows-none lg:grid-cols-8 xl:grid-cols-10 border-t border-[grey] md:border-none">
            <?php
                $sql = "SELECT * FROM `categories`";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                if($num != 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $cat_name = $row["category_name"];
                        $cat_id = $row["category_id"];
                        echo '<a href="categories.php?category='.$cat_name.'"
                                class="bg-[#e8e8e8] grid grid-cols-1 place-items-center  border-[grey] border-b border-r md:border-b-0">

                                <img class="h-20" src="images/main/'.$cat_name.'.png" alt="">
                                <span class="text-xl text-blue-700 font-bold">'.$cat_name.'</span>
                            </a>';
                    }
                }
            ?>
        </div>
    </div>
    <div class="flex justify-between py-2 px-4 bg-white">
        <span class="font-bold text-lg">Connect</span>
    </div>

    <?php include("partials/_footer.php") ?>
    
    <script src="side/script.js"></script>

</body>

</html>