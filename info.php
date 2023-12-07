<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Muhammad Usman">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muman - Search All Products</title>
    <link rel="shortcut icon" href="images/main/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="side/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f5f4f4] hide-scrollbar flex min-h-[100vh] flex-col">
    <?php include("partials/_header.php");?>
    <?php 
        if (isset($_GET["t"]) && $_GET["t"] != "") {
            $type = $_GET["t"];
            if ($type == "about") {
                include("partials/_about.php");
            } else if ($type == "contact") {
                include("partials/_contact.php");
            } else if ($type == "faq") {
                include("partials/_faq.php");
            } else {
                header("location:/?unknown info");
            }
        } else {
            header("location:/?info not specified");
        }
    ?>
    <?php include("partials/_footer.php"); ?>
    <script src="side/script.js"></script>
</body>

</html>