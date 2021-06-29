<?php
session_start();

// $ID = $_SESSION['index'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$index = $_SESSION['index'];

// $_SESSION['index'] = $ID;

$_SESSION['index'] = $index;
$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;

// echo $index;


include('config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="viewCart.css">
    <script src='fontawesome-free-5.13.0-web/js/all.js'></script>
    <!-- <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    <title>Document</title>
    <!-- <script src="javascript.js"></script> -->

    <style>
        header {
            /* position: absolute; */
        }
    </style>


    <script>
        function openNav() {
            document.getElementById("sidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("sidenav").style.width = "0px";
        }

        function openCategory() {
            var categoryPanel = document.getElementById("category_panel");
            categoryPanel.style.display = "block";

        }

        function closeCategory() {
            var categoryPanel = document.getElementById("category_panel");
            categoryPanel.style.display = "none";

        }

        function showFassionSub() {
            var subCategory = document.getElementById("fassion_sub_category");
            var categoryPanel = document.getElementById("category_panel");
            subCategory.style.display = "block";
            categoryPanel.style.display = "block"
        }

        function hideFassionSub() {
            var subCategory = document.getElementById("fassion_sub_category");
            var categoryPanel = document.getElementById("category_panel");
            subCategory.style.display = "none";
            categoryPanel.style.display = "none"
        }

        window.onscroll = function() {
            var disappear = document.getElementById("searchSmallScreen");
            if (window.pageYOffset >= 10) {

                disappear.style.display = "none";
                // window.onscroll = null;
                // alert("Into view");
            } else if (window.pageXOffset <= 10) {
                disappear.style.display = "block";
            }
        }

        function openUser() {
            var categoryPanel = document.getElementById("user_panel");
            categoryPanel.style.display = "block";

        }

        function closeUser() {
            var categoryPanel = document.getElementById("user_panel");
            categoryPanel.style.display = "none";

        }
    </script>
</head>

<body>
    <header>
        <form action="Homepage.php">
            <button type="submit" id="openNav_SmallDevice"><i style="font-size: 21px;" class="fa fa-home"></i></button>
        </form>
        <div id="sidenav" class="SideNav">
            <div onclick="closeNav()" id="closeNav">&times;</div>

            <div id="head">
                <h3>CATEGORIES</h3>
            </div>
            <form action="category.php" method="POST">
                <button name="fassion" id="category_list" type="submit"><i class='fas fa-tshirt'></i> Fassion</li></button>
                <button id="category_list" type="submit"><i class='fas fa-desktop'></i> Computers</li></button>
                <button id="category_list" type="submit"><i class='fas fa-bolt'></i> Electronics</li></button>
                <button id="category_list" type="submit"><i class='fas fa-utensils'></i> Utensils</li></button>
            </form>
            <form action="viewCart.php" method="POST">
                <button id="category_list" type="submit"><i class='fas fa-eye'></i> View carts</li> </button>
            </form>
        </div>


        <div id="category_panel" onmouseout="closeCategory()" onmouseover="openCategory()">
            <i id="arrow1-up" class="fas fa-caret-up"></i>
            <div class="head">
                <h3>HELP</h3>
            </div>
            <form action="category.php" method="POST">
                <button name="fassion" onmouseover="showFassionSub()" onmouseout="hideFassionSub()" id="help_list" type="submit"><i class='fas fa-tshirt'></i>Contact us</button>
                <!-- <button name="computers" id="help_list" type="submit"><i class='fas fa-desktop'></i> FAQ</button> -->
                <button name="electronics" id="help_list" type="submit"><i class='fas fa-bolt'></i> Leave message</button>
                <button name="electronics" id="help_list" type="submit"><i class='fas fa-bolt'></i> About us</button>
                <button name="food" class="chat" type="submit"><i class='fas fa-utensils'></i> Live chat</button>
                <!-- <button id="help_list" type="submit"><i class='fas fa-eye'></i> View carts</button> -->
            </form>

        </div>
        <!-- 
        <div id="fassion_sub_category" onmouseover="showFassionSub()" onmouseout="hideFassionSub()">
            <button id="category_sub_list" type="submit">▣ Men</button>
            <button id="category_sub_list" type="submit">▣ Women</button>
            <button id="category_sub_list" type="submit">▣ Boys</button>
            <button id="category_sub_list" type="submit">▣ Girls</button>
        </div> -->


        <div>
            <a href="Homepage.php"><img id="logo" src="font/1622072964755.png" alt="" srcset=""></a>
        </div>
        <!-- <div id="searchLargeScreen"> -->


        <form autocomplete="off" action="/action_page.php">
            <div class="autocomplete">
                <input id="myInput" type="text" name="myCountry" placeholder="What are you looking for?">
            </div>
            <input id="search-submit" type="submit" value="Search">
        </form>


        <div onmouseover="openCategory()" onmouseout="closeCategory()" id="openNav_LargeDevice"><i style="font-size: 14px;" class="fas fa-question-circle"></i> Help <i style="margin-top: 3px; font-size: 16px" class="fas fa-chevron-down "></i></div>

        <!-- <div id="login">Log In</div> -->
        <div id="user" onmouseover="openUser()" onmouseout="closeUser()"> <i class="far fa-user"></i> <i style="font-size: 14px" class="fas fa-chevron-down "></i></div>



        <div id="user_panel" onmouseout="closeUser()" onmouseover="openUser()">
            <i id="arrow-up" class="fas fa-caret-up"></i>
            <div class="head">
                <h5><?php echo (" " . $first_name . " " . $last_name);  ?></h5>
            </div>
            <form action="account.php" method="POST">
                <button name="fassion" id="user_list" type="submit"><i style="margin-right: 15px;" class='far fa-user'></i> Account</button>
            </form>
            <form action="orderlist.php" method="POST">
                <button name="computers" id="user_list" type="submit"><i style="margin-right: 15px;" class='fas fa-store-alt'></i> My Orders</button>
            </form>
            <button name="electronics" id="user_list" type="submit"><i style="margin-right: 15px;" class='far fa-heart'></i> Saved items</button>
            <!-- <button disabled name="food" id="user_list" type="submit"><i style="margin-right: 15px;" class='fas fa-help'></i> Help</button> -->
            <!-- <button id="user_list" type="submit"><i style="margin-right: 15px;" class='fas fa-wallet'></i> Majesty Prepaid</button> -->
            <button id="user_list" type="submit"><i style="margin-right: 15px;" class='fas fa-sign-out-alt'></i> Log out</button>


        </div>





        <form id="fa-cart" action="viewCart.php" method="post">
            <button id="fa-btn" type="submit"><i class="fas fa-cart-plus"></i> <sup>

                    <?php
                    $total = "SELECT count(Price) as price FROM carts WHERE User_id = '{$index}'";
                    $Totals = $conn->query($total);
                    if ($Totals->num_rows > 0) {
                        while ($Fetch = $Totals->fetch_assoc()) {
                            $TOTAL = $Fetch['price'];
                            echo ($TOTAL);
                        }
                    }

                    ?>


                </sup></button>
        </form>




    </header>
    <br>
    <div class="space"></div>

    <div id="cart-Num">


        <?php
        $total = "SELECT count(Price) as price FROM carts WHERE User_id = '{$index}'";
        $Totals = $conn->query($total);
        if ($Totals->num_rows > 0) {
            while ($Fetch = $Totals->fetch_assoc()) {
                $TOTAL = $Fetch['price'];
                echo ("Carts(" . $TOTAL) . " items)";
            }
        }

        ?>


    </div>



    <?php



    $item = "SELECT * FROM carts WHERE User_id = '{$index}'";
    $Items = $conn->query($item);

    // if (isset($_REQUEST['viewcart'])) {
    if ($Items->num_rows > 0) {
        while ($items = $Items->fetch_assoc()) {
            $Name = $items['Item_name'];
            $Pic = $items['Pic_name'];
            $Price = $items['Price'];
            $Status = $items['Status'];
            $ItemId = $items['Item_id'];
            $Quanti = $items['Quantity'];
            $Item_index = $items['Item_index'];
            $IndexNum = $items['Index_Num'];

            if (isset($_POST['jkjf'])) {
                $update = "UPDATE carts SET Quantity = $Quanti + 1 WHERE User_id = '{$index}' and Index_Num = '{$IndexNum}'";
                $updates = $conn->query($update);
                // echo($ItemId);
            } else if (isset($_POST[$IndexNum])) {
                $delete = "DELETE from carts WHERE Index_Num = '{$IndexNum}'";
                $deletes = $conn->query($delete);
            } else if (isset($_POST['glfkg'])) {
                $update = "UPDATE carts SET Quantity = $Quanti - 1 WHERE User_id = '{$index}' and Item_id = '{$ItemId}'";
                $updates = $conn->query($update);
            } else {
                echo ($conn->error);
            }
            // echo($Name);

    ?>



            <button class="cart" type="submit">
                <div id="Picture">
                    <img class="Picture" src="<?php echo ("" . $Pic); ?>" alt="" srcset="">
                </div>
                <div id="Name">
                    <form action="detail.php" method="post">
                        <br>

                        <?php echo ($Name); ?><div id="small-price"><b style="margin-right: 20%;"><?php echo ('GHS ' . $Price * $Quanti); ?></b><br>
                            <!-- <div id="link"><i class="fab fa-staylinked"></i> view</div> -->
                            <!-- <input id="decrease" onclick="Pop()" name="<?php echo ($ItemId . '2'); ?>" type="submit" value="-"> -->
                            <input id="quanti" disabled name="<?php echo ($ItemId); ?>" type="text" value="X<?php echo ($Quanti) ?>">
                            <input id="increase" name="<?php echo ($Item_index); ?>" type="submit" value="+ ADD" onclick="">
                    </form>
                    <form action="viewCart.php" method="post">
                        <input name="<?php echo ($IndexNum); ?>" id="Remove" type="submit" value="Remove">
                    </form>

                </div>


                <!-- <button> Remove</button> -->
                </div>
                <div id="Price">
                    <b><?php echo ('GHS ' . $Price); ?></b>
                </div>
                <div id="Quantity">
                    <form action="viewCart.php" method="post">
                        <input name="<?php echo ($IndexNum); ?>" type="submit" id="Remove" value="Remove">

                    </form>
                </div>
                <div id="Status"><b><?php echo ($Status); ?></b></div>

            </button>

    <?php



        }
    }
    // $carts = $ID;
    // }

    //   echo(3*7);
    ?>



    </div>








    <div class="checkout">
        <form action="payment.php" method="post">
            <div id="prepaid">Unique prepaid: GHS 12.90</div>
            <div id="total">

                <?php
                $total = "SELECT sum(Price) as price FROM carts WHERE User_id = '{$index}'";
                $Totals = $conn->query($total);
                if ($Totals->num_rows > 0) {
                    while ($Fetch = $Totals->fetch_assoc()) {
                        $TOTAL = $Fetch['price'];
                        echo ("Total: " . round($TOTAL) . ".00");
                    }
                }

                ?>
            </div>

            <div id="checkout"><button id="checkout-button" type="submit">CHECKOUT</button></div>
        </form>

    </div>
</body>


<script>
    var counter = 1;
    var count = document.getElementById("Ch-quanti");

    function increaseQuantity() {

        // var count = document.getElementById("Ch-quanti");

        counter++;
        count.value = counter;
        document.getElementById("Ch-decrease").disabled = false;
        document.getElementById("Ch-decrease").style.cursor = "pointer";
    }

    // if (count.value < 1) {
    function decreaseQuantity() {
        // var counter = 1;

        counter--;
        count.value = counter;
        if (count.value < 2) {
            document.getElementById("Ch-decrease").disabled = true;
            document.getElementById("Ch-decrease").style.cursor = "no-drop";

        }
    }

    function fav(x) {
        x.classList.toggle("fa-heart");
    }


    function pop() {
        var Pop = document.querySelector("#Change-Quantity");
        Pop.style.display = "block";
    }

    function pophide() {
        var Pop = document.querySelector("#Change-Quantity");
        Pop.style.display = "none";
    }

    // }
</script>


</html>