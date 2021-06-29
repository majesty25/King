<?php
$servername = "localhost";
$username = "Majesty";
$password = "JOE892550.bitcoin";
$dbname = "majesty_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['fassion'])) {
    $sql = "SELECT * FROM item where Item_category = 'FASSION' ";
} elseif (isset($_POST['computers'])) {
    $sql = "SELECT * FROM item where Item_category = 'COMPUTERS' ";
} elseif (isset($_POST['electronics'])) {
    $sql = "SELECT * FROM item where Item_category = 'ELECTRONICS' ";
} elseif (isset($_POST['food'])) {
    $sql = "SELECT * FROM item where Item_category = 'FOOD' ";
}
$result = $conn->query($sql);
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <script src='fontawesome-free-5.13.0-web/js/all.js'></script>
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <script src="jquery.js"></script>
    <title>Document</title>
    <!-- <script src="javascript.js"></script> -->




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
            if (window.pageYOffset >= 50) {

                disappear.style.display = "none";
                // window.onscroll = null;
                // alert("Into view");
            } else if (window.pageXOffset <= 10) {
                disappear.style.display = "block";
            }
        }

        window.onscroll = function() {
            var disappear = document.getElementById("searchLargeScreen");
            if (window.pageYOffset >= 15) {

                disappear.style.display = "none";
                // window.onscroll = null;
                // alert("Into view");
            } else if (window.pageXOffset === 0) {
                disappear.style.display = "block";
            }
        }
    </script>




</head>

<body>
    <header>
        <div onclick="openNav()" id="openNav_SmallDevice">&#9776;</div>
        <div onmouseover="openCategory()" onmouseout="closeCategory()" id="openNav_LargeDevice">&#9776;</div>
        <div id="sidenav" class="SideNav">
            <div onclick="closeNav()" id="closeNav">&times;</div>

            <div id="head">
                <h3>CATEGORIES</h3>
            </div>
            <button id="category_list" type="submit"><i class='fas fa-tshirt'></i> Fassion</li></button>
            <button id="category_list" type="submit"><i class='fas fa-desktop'></i> Computers</li></button>
            <button id="category_list" type="submit"><i class='fas fa-bolt'></i> Electronics</li></button>
            <button id="category_list" type="submit"><i class='fas fa-utensils'></i> Utensils</li></button>
            <button id="category_list" type="submit"><i class='fas fa-eye'></i> View carts</li> </button>
        </div>


        <div id="category_panel" onmouseout="closeCategory()" onmouseover="openCategory()">
            <div id="head">
                <h3>CATEGORIES</h3>
            </div>
            <button onmouseover="showFassionSub()" onmouseout="hideFassionSub()" id="category_list" type="submit"><i class='fas fa-tshirt'></i>Fassion</button>
            <button id="category_list" type="submit"><i class='fas fa-desktop'></i> Computers</button>
            <button id="category_list" type="submit"><i class='fas fa-bolt'></i> Electronics</button>
            <button id="category_list" type="submit"><i class='fas fa-utensils'></i> Utensils</button>
            <button id="category_list" type="submit"><i class='fas fa-eye'></i> View carts</button>


        </div>

        <div id="fassion_sub_category" onmouseover="showFassionSub()" onmouseout="hideFassionSub()">
            <button id="category_sub_list" type="submit">▣ Men</button>
            <button id="category_sub_list" type="submit">▣ Women</button>
            <button id="category_sub_list" type="submit">▣ Boys</button>
            <button id="category_sub_list" type="submit">▣ Girls</button>
        </div>


        <div>
            <img id="logo" src="font/logo.jpg" alt="" srcset="">
        </div>


        <form autocomplete="off" action="/action_page.php">
            <div class="autocomplete">
                <input id="myInput" type="text" name="myCountry" placeholder="What are you looking for?">
            </div>
            <input id="search-submit" type="submit">
        </form>


        <!-- <div id="searchLargeScreen"> -->
            <?php

            // include("search.html");

            ?>
        <!-- </div> -->

        <!-- <div id="searchSmallScreen"> -->
            <?php

            // include("search.html");

            ?>
        <!-- </div> -->

        <!-- <div id="login">Log In</div> -->
        <i id="user" class="far fa-user"></i>
        <form id="fa-cart" action="viewCart.php" method="post">
            <button id="fa-btn" type="submit"><i class="fas fa-cart-plus"></i> 3</button>
        </form>



    </header>

    <div id="Bottom_Nav">
        <a href="#"><i id="fa-home" class='fa fa-home'></i></a>
        <i id="fa-category" class='fa fa-sitemap'></i>
        <i id="fa-cart-plus" class="fas fa-cart-plus"></i>
        <i id="fa-setting" class='fa'>&#xf013;</i>
        <i id="fa-user" class='far fa-user'></i>

    </div>
    <br>
    <div id="row">

        <div id="slide1">
            <img id="img" src="font/tie.jpg" alt="" srcset="">
        </div>

        <div id="slide2">
            <!-- <video src="font/istoc1.mp4" autoplay loop></video> -->
            <img id="logo2" src="font/a.jpg" alt="" srcset="">

        </div>
        <!-- <?php $val = md5(1) ?> -->
        <div id="Div">Today's Deal</div>


        <?php

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $x = ($row["Item_percent_off"] / 100) * $row["Item_new_price"];
                $old_price = $row["Item_new_price"] + $x;

        ?>


                <form action="detail.php" method="POST">
                    <div class="column">

                        <button type="submit" id="pic" name="<?php echo ($row["Index_Num"]); ?>">
                            <img src="font/<?php echo ($row["Item_image_name"]); ?>" alt="" srcset="">
                        </button>
                        <br>
                        <div id="name">
                            <?php echo ($row["Item_name"]); ?>
                        </div>
                        <br>
                        <div id="price">
                            GH₵ <?php echo ($row["Item_new_price"] + 778); ?>
                        </div>
                        <br>
                        <div id="oldPrice">
                            GH₵ <?php echo ($old_price); ?>
                        </div>
                        <div id="PercentOff">
                            <?php echo ($row["Item_percent_off"]); ?>%
                        </div>
                        <br>
                        <div id="star">
                            <?php for ($i = 1; $i <= $row["Starf_Num"]; $i++) {
                                echo ("&starf;");
                            }
                            for ($i = 1; $i <= $row["Star_Num"]; $i++) {
                                echo ("&star;");
                            } ?>

                        </div>
                        <div id="rate">
                            (<?php echo ($row["Rate"]); ?>)
                        </div>
                        <br>
                        <div>
                            <button id="ADD">ADD TO CART</button>
                        </div>

                    </div>

            <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
            ?>
                </form>






    </div>
</body>


</html>
<!-- https://www.gettyimages.com/search/more-like-this/958437054?assettype=image&family=creative&license=rf&phrase=bags -->
<!-- https://unsplash.com/s/photos/tecno-phones -->