<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include("_dbconnect.php");
        if (isset($_POST["delete"]) && $_POST["delete"] == true && $_POST["delete"] != "") {
            //take array
            $array = $_POST["delete"];
            //check the number selected checkbox
            $len = count($_POST["delete"]);
            //check the value of each
            for ($i = 0 ; $i < $len ; $i++) {
                $id = $array[$i];
                $sql = "DELETE FROM `cart` WHERE `cart_product_id` = ?";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                if ($i == ($len - 1)) {
                    header("location: /cart.php");
                    exit();
                }
            }
        } else {
            header("location: /cart.php");
            exit();
        }
    } else {
        header("location: /index.php?error=Access denied");
        exit();
    }
?>