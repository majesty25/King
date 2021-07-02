<?php

session_start();

// $servername = "localhost";
// $username = "Majesty";
// $password = "JOE892550.bitcoin";
// $dbname = "majesty_store";
include('config.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM item";
$result = $conn->query($sql);
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="w3school.css">
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
        * {
            box-sizing: border-box;
        }

        body {
            /* font: 16px Arial; */
        }
    </style>

    <style>
        .MySlides {
            display: none;
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


        function openUser() {
            var categoryPanel = document.getElementById("user_panel");
            categoryPanel.style.display = "block";

        }

        function closeUser() {
            var categoryPanel = document.getElementById("user_panel");
            categoryPanel.style.display = "none";

        }

        function showFassionSub() {
            var categoryPanel = document.getElementById("category_panel");
            categoryPanel.style.display = "block"
        }

        function hideFassionSub() {
            var categoryPanel = document.getElementById("category_panel");
            categoryPanel.style.display = "none"
        }
    </script>




</head>

<body>
    <header>
        <div onclick="openNav()" id="openNav_SmallDevice">&#9776;</div>

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
            <a href="HomeUnlogged.php"><img id="logo" src="font/1622072964755.png" alt="" srcset=""></a>
        </div>
        <!-- <div id="searchLargeScreen"> -->


        <form autocomplete="off" action="/action_page.php">
            <div class="autocomplete">
                <input style="font-family: candara" id="myInput" type="text" name="myCountry" placeholder="I'm searching for">
            </div>
            <input id="search-submit" type="submit" value="Search" style="font-family: candara">
        </form>


        <div onmouseover="openCategory()" onmouseout="closeCategory()" id="openNav_LargeDevice"><i style="font-size: 14px;" class="fas fa-question-circle"></i> Help <i style="margin-top: 3px; font-size: 16px" class="fas fa-chevron-down "></i></div>

        <a href="login.php" id="login">Log In</a>
        <!-- <div id="user" onmouseover="openUser()" onmouseout="closeUser()"> <i class="far fa-user"></i> <i style="font-size: 14px" class="fas fa-chevron-down "></i></div> -->



        <div id="user_panel" onmouseout="closeUser()" onmouseover="openUser()">
            <i id="arrow-up" class="fas fa-caret-up"></i>
            <div class="head">
                <h5>Stephen Nyankson</h5>
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





        <form id="fa-cart" action="login.php" method="post">
            <button id="fa-btn" type="submit"><i class="fas fa-cart-plus"></i> <sup>0</sup></button>
        </form>




    </header>

    <div id="Bottom_Nav">
        <form action="HomeUnlogged.php" method="post">
            <button type="submit" id="fa-home"><i class='fa fa-home'></i><br>
                <div class="nav-name">Home</div>
            </button>
        </form>
        <form action="login.php" method="post">
            <button id="fa-cart-plus"><i class='fas fa-cart-plus'></i><br>
                <div class="nav-name">Carts</div>
            </button>
        </form>
        <form action="login.php" method="post">
            <button id="fa-user"><i class='fas fa-sign-in-alt'></i><br>
                <div class="nav-name">Login</div>
            </button>
        </form>
        <!-- <i id="fa-category" class='fa fa-sitemap'></i>
        <i id="fa-cart-plus" class="fas fa-cart-plus"></i>
        <i id="fa-setting" class='fa'>&#xf01 3;</i>
        <i id="fa-user" class='far fa-user'></i> -->
        login
    </div>
    <br>
    <div class="space"></div>
    <div class="scroll-pics">
        <div id="scroll-pics">

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <!-- <div class="numbertext">1 / 3</div> -->
                    <img src="font/b.jpg" style="width:100%; border-radius: 10px">
                    <!-- <div class="text">Caption Text</div> -->
                </div>

                <div class="mySlides fade">
                    <!-- <div class="numbertext">2 / 3</div> -->
                    <img src="font/new3-removebg-preview.png" style="width:100%; border-radius: 10px">
                    <!-- <div class="text"></div> -->
                </div>

                <div class="mySlides fade">
                    <!-- <div class="numbertext"></div> -->
                    <img src="font/back.jpg" style="width:100%; border-radius: 10px">
                    <!-- <div class="text"></div> -->
                </div>

            </div>


            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </div>

        <!-- <div id="scroll-pics"> -->

        <!-- </div> -->
    </div>


    <div id="row">


        <div id="slide1">
            <ol>
                <div class="head">
                    <h5>CATEGORIES</h5>
                </div>
                <form action="category.php" method="POST">
                    <button name="fassion" onmouseout="hideFassionSub()" id="category_list" type="submit"><i class='fas fa-tshirt'></i> Men's Fassion</button>
                    <button name="fassion" onmouseout="hideFassionSub()" id="category_list" type="submit"><i class='fas fa-tshirt'></i> Women's Fassion</button>
                    <button name="computers" id="category_list" type="submit"><i class='fas fa-desktop'></i> Computers</button>
                    <button name="electronics" id="category_list" type="submit"><i class='fas fa-bolt'></i> Electronics</button>
                    <button name="food" id="category_list" type="submit"><i class='fas fa-utensils'></i> Utensils</button>
                    <button id="category_list" type="submit"><i class='fas fa-eye'></i> View carts</button>
                </form>
                <!-- <li>hllo world</li> -->
            </ol>
            <!-- <img id="img" src="font/tie.jpg" alt="" srcset=""> -->
        </div>


        <div id="slide2">

            <div class="" style="max-width: 100%; height: 10px">
                <img class="mySlides1 w3-animate-top" src="font/back.jpg" style="width:100%; min-height: 340px">
                <img class="mySlides1 w3-animate-bottom" src="font/b.JPG" style="width:100%; min-height: 340px">
                <img class=" mySlides1 w3-animate-top" src="font/Desk---2021-04-26T042930.976.JPG" style="width:100%; min-height: 340px">
                <img class=" mySlides1 w3-animate-top" src="font/new3-removebg-preview.png" style="width:100%; min-height: 340px">
                <img class=" mySlides1 w3-animate-top" src="font/jason-leung-Xaanw0s0pMk-unsplash.jpg.png" style="width:100%; min-height: 340px">
                <!-- <img class=" mySlides1 w3-animate-bottom" src="img_rr_04.jpg" style="width:100%"> -->
            </div>

            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides1");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 6000);
                }
            </script>

            <!-- <video src=" font/istoc1.mp4" autoplay loop></video> -->
            <!-- <img id="logo2" src="font/back.jpg" alt="" srcset=""> -->

        </div>


        <div id="slide3">
            <!-- <div id="div1">
                <h4>Hi, Stephen Nyankson</h4>
            </div> -->
            <div id="div1">
                <h5>Hi, Cherished customer</h5>
                <h4>Welcome to Unique</h4>
                <button id="round"><i id="round1" class="fa fa-shopping-bag "></i>
                    <h4>hhghh</h4>
                </button>
                <button id="round"><i id="round1" class="fas fa-shield-alt "></i>
                    <h4>hhghh</h4>
                </button>
                <button id="round"><i id="round1" class="fas fa-sms "></i>
                    <h4>hhghh</h4>
                </button>
            </div>
            <div id="div2">
                <video style="width: 100%; height: 120%;" autoplay loop src="font/istoc1.mp4"></video>
            </div>
            <!-- <img id="img" src="font/tie.jpg" alt="" srcset=""> -->
        </div>


        <!-- <?php $val = md5(1) ?> -->
        <div id="Div1">
            <a href="#"> <img class="IMG" src="font/gettyimages-168290889-2048x2048.jpg" alt="" srcset=""></a>
            <a href="#"><img class="IMG" src="font/new1.jpg" alt="" srcset=""></a>
            <a href="#"><img class="IMG" src="font/ce14a9d1e6c3492393c2183336a0f98f.jpg" alt="" srcset=""></a>
            <a href="#"> <img class="IMG" src="font/lap5 - Copy.jpg" alt="" srcset=""></a>
            <!-- <img class="IMG" src="font/ce14a9d1e6c3492393c2183336a0f98f.jpg" alt="" srcset=""> -->
        </div>
        <div id="Div">Weekly Deal</div>


        <?php


        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $y = ($row["Item_percent_off"] / 100) * $row["Item_new_price"];
                $old_price = round(($row["Item_new_price"] + $y), 0);

                // $ID = $row['Item_id'];
                // echo($ID);


        ?>
                <div style="back-ground-color: white;">

                    <form action="detailUnlogged.php" method="POST">
                        <div class="column">

                            <button type="submit" id="pic" name="<?php echo ($row["Index_Num"]); ?>">
                                <img id="imgm" src="font/<?php echo ($row["Item_image_name"]); ?>" alt="" srcset="">

                            </button>
                            <br>
                            <div id="name">
                                <?php echo (substr($row["Item_name"], 0, 15)); ?>...
                            </div>
                            <br>
                            <div id="price">
                                GH₵ <?php echo ($row["Item_new_price"]); ?>.00
                            </div>
                            <br>
                            <div id="oldPrice">
                                GH₵ <?php echo ($old_price); ?>.00
                            </div>
                            <div id="PercentOff">
                                -<?php echo ($row["Item_percent_off"]); ?>%
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
                    </form>
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

<script src="javascript.js"></script>
<!-- https://www.gettyimages.com/search/more-like-this/958437054?assettype=image&family=creative&license=rf&phrase=bags -->
<!-- https://unsplash.com/s/photos/tecno-phones -->

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
