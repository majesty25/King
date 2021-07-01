<?php

session_start();

if (!isset($_POST['login'])) {
    $Id = $_SESSION['index'];



    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $index1 = $_SESSION['index'];
    // $index1 = $_SESSION['index'];
    // echo($Id);
} else {
    $Id = "";



    $first_name = "";
    $last_name = "";
    $index1 = "";
}
include('config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM item where Index_Num < 11";
$sql1 = "SELECT * FROM item where Index_Num < 11";

$result = $conn->query($sql);
$res = $conn->query($sql1);



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
    <link rel="icon" href="font/57a85364f950491caa217f675d9fd663.jpg" type="image/x-icon">
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
            document.getElementById("sidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("sidenav").style.width = "0%";
        }

        function openAccount() {
            document.getElementById("Account").style.width = "100%";
        }

        function closeAccount() {
            document.getElementById("Account").style.width = "0%";
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
            // window.pageYOffset
        }

        function hideFassionSub() {
            var categoryPanel = document.getElementById("category_panel");
            categoryPanel.style.display = "none"
        }
        window.onscroll = function() {
            var subheader = document.getElementById("subheader");
            var header = document.getElementById('header');
            if (window.pageYOffset >= 100) {
                subheader.style.display = "none";
                header.style.display = "block";
                header.style.position = "fixed";
            } else if (window.pageYOffset <= 10) {
                subheader.style.display = "block";
                header.style.position = "absolute";
                header.style.display = "none";
            }
        }
        // page();
    </script>




</head>

<body>
    <!-- <div id="subheader" class='w3-aniim'><img src="font/payment.png" style="width: 100%; " alt="" srcset=""></div> -->
    <header id="header">
        <div onclick="openNav()" id="openNav_SmallDevice">&#9776;</div>

        <div id="sidenav" class="SideNav">
            <div onclick="closeNav()" id="closeNav">&times;</div>

            <div id="head">
                <h3>CATEGORIES</h3>
            </div>


            <div class="topnav">
                <a href="#home" class="active" onclick="myFunct()">Logo</a>
                <div id="myLinks">
                    <a href="#news">News</a>
                    <a href="#contact">Contact</a>
                    <a href="#about">About</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunct()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>


            <script>
                function myFunct() {
                    var x = document.getElementById("myLinks");
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                    }
                }
            </script>


            <!-- <form action="category.php" method="POST">
                <button name="fassion" id="category_list_Small" type="submit"><i class='fas fa-tshirt'></i> Fassion</li></button>
                <button id="category_list_Small" type="submit"><i class='fas fa-desktop'></i> Computers</li></button>
                <button id="category_list_Small" type="submit"><i class='fas fa-bolt'></i> Electronics</li></button>
                <button id="category_list_Small" type="submit"><i class='fas fa-utensils'></i> Utensils</li></button>
            </form>
            <form action="viewCart.php" method="POST">
                <button id="category_list_Small" type="submit"><i class='fas fa-eye'></i> View carts</li> </button>
            </form> -->
        </div>


        <div id="category_panel" onmouseout="closeCategory()" onmouseover="openCategory()">
            <i id="arrow1-up" class="fas fa-caret-up"></i>
            <div class="head">
                <h3>HELP</h3>
            </div>
            <form action="" method="POST">
                <button name="fassion" onmouseover="showFassionSub()" onmouseout="hideFassionSub()" id="help_list" type="submit"><i class='fas fa-tshirt'></i>Contact us</button>
                <!-- <button name="computers" id="help_list" type="submit"><i class='fas fa-desktop'></i> FAQ</button> -->
                <button name="electronics" id="help_list" type="submit"><i class='fas fa-bolt'></i> Leave message</button>
                <button name="electronics" id="help_list" type="submit"><i class='fas fa-bolt'></i> About us</button>
                <button name="food" class="chat" type="submit"><i class='fab fa-rocketchat'></i> Live chat</button>
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
            <a href="Homepage.php"><img id="logo" src="https://i.imgur.com/1OJp6hB.png" alt="" srcset=""></a>
        </div>
        <!-- <div id="searchLargeScreen"> -->


        <form autocomplete="off" action="">
            <div class="autocomplete">
                <input id="myInput" type="text" name="myCountry" placeholder="What are you looking for?" style="font-family: candara;">
            </div>
            <input id="search-submit" type="submit" value="Search">
        </form>


        <div onmouseover="openCategory()" onmouseout="closeCategory()" id="openNav_LargeDevice"><i style="font-size: 14px;" class="fas fa-question-circle"></i> Help <i style="margin-top: 3px; font-size: 16px" class="fas fa-chevron-down "></i></div>

        <!-- <div id="login">Log In</div> -->
        <div id="user" onmouseover="openUser()" onmouseout="closeUser()"> <i class="far fa-user"></i> <i style="font-size: 14px" class="fas fa-chevron-down "></i></div>



        <div id="user_panel" onmouseout="closeUser()" onmouseover="openUser()">
            <!-- <i id="arrow-up" class="fas fa-caret-up"></i> -->
            <div class="head">
                <h5>

                    <?php

                    if (isset($_REQUEST['login'])) {
                        $Email = $_REQUEST['email'];
                        $Pword = $_REQUEST['password'];
                        $user = "SELECT * FROM user where Email = '{$Email}' AND Password = '{$Pword}'";
                        $User = $conn->query($user);
                        if (!$User == "") {
                            while ($Customer = $User->fetch_assoc()) {                                
                                $first_name = $Customer['First_name'];
                                $last_name = $Customer['Last_name'];
                                $email = $Customer['Email'];
                                $index = $Customer['Index_Num'];

                                $_SESSION['index'] = $index;
                                $_SESSION['first_name'] = $first_name;
                                $_SESSION['last_name'] = $last_name;
                                // $_SESSION['email'] = $email;
                            }
                        }
                    } else {
                        // include('error.html');
                    }


                    echo (" " . $first_name . " " . $last_name);

                    // $_SESSION['email'] = $Email;

                    ?>

                </h5>
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

            <form action="HomeUnlogged.php" method="post">
                <button id="user_list" type="submit"><i style="margin-right: 15px;" class='fas fa-sign-out-alt'></i> Log out</button>
            </form>

        </div>





        <form id="fa-cart" action="viewCart.php" method="post">
            <button id="fa-btn" type="submit" name="viewcart"><i class="fas fa-cart-plus"></i> <sup>

                    <?php
                    $total = "SELECT count(Price) as price FROM carts WHERE (User_id = '{$index1}')";
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

    <div id="Bottom_Nav" >
        <form action="Homepage.php" method="post">
            <button type="submit" id="fa-home"><i class='fa fa-home'></i><br>
                <div class="nav-name" style="font-size: 13px; font-family: calibri">Home</div>
            </button>
        </form>
        <form action="viewCart.php" method="post">
            <button id="fa-cart-plus" name="viewcart"><i class='fas fa-cart-plus'></i><sup>

                    <?php
                    $total = "SELECT count(Price) as price FROM carts WHERE (User_id = '{$index1}')";
                    $Totals = $conn->query($total);
                    if ($Totals->num_rows > 0) {
                        while ($Fetch = $Totals->fetch_assoc()) {
                            $TOTAL = $Fetch['price'];
                            echo ($TOTAL);
                        }
                    }

                    ?>

                </sup><br>
                <div class="nav-name" style="font-size: 13px; font-family: calibri">Carts</div>
            </button>
        </form>
        <form>
            <button id="fa-chat"><i class='fab fa-rocketchat'></i><br>
                <div class="nav-name" style="font-size: 13px; font-family: calibri">Live chat</div>
            </button>
        </form>

        <!-- <form>
            <button id="fa-user"><i class='fa fa-question'></i><br>
                <div class="nav-name">Help</div>
            </button>
        </form> -->


        <button id="fa-user" onclick="openAccount()"><i class='far fa-user'></i><br>
            <div class="nav-name" style="font-size: 13px; font-family: calibri">User</div>
        </button>


        <div id="Account" class="Account">
            <div onclick="closeAccount()" id="closeAccount"><i class="fas fa-arrow-left"></i> Account</div>
            <!-- <div style="margin-top: 10%; ">Account </div> -->
            <br>

            <div id="AccountHead">


                <div id="UserPic"><img class="PIC" src="font/68607264_192642631728885_5369799831239786496_n.jpg" alt="" srcset="" width="100%" height="100%"></div>
                <div id="UserInfo">
                    <div id="userHead"><?php echo ("Hi, " . $first_name . " " . $last_name); ?>
                        <!-- <?php echo ($email); ?> -->
                        <h3>Welcome to Unique</h3>

                    </div>

                </div>


                <!-- <button style="float: right"><i class="fas fa-pen-alt"></i></button> -->
            </div>
            <form action="account.php" method="post">
                <button type="submit" class="btnlist">Account <i id="arrow" class="fas fa-angle-right "></i></button>
            </form>
            <form action="orderlist.php" method="post">
                <button type="submit" class="btnlist">My Orders <i id="arrow" class="fas fa-angle-right "></i></button>
            </form>

            <button class="btnlist">Saved items <i id="arrow" class="fas fa-angle-right "></i></button>
            <form action="HomeUnlogged.php" method="post">
                <button type="submit" class="btnlist">Log out <i id="arrow" class="fas fa-angle-right "></i></button>

            </form>

        </div>


    </div>
    <br><br>
    <div class="space"></div>
    <div class="scroll-pics">
        <div id="scroll-pics">

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <!-- <div class="numbertext">1 / 3</div> -->
                    <img src="font/b.jpg" style="width:100%; border-radius: 7px">
                    <!-- <div class="text">Caption Text</div> -->
                </div>

                <div class="mySlides fade">
                    <!-- <div class="numbertext">2 / 3</div> -->
                    <img src="font/new3-removebg-preview.png" style="width:100%; border-radius: 7px">
                    <!-- <div class="text"></div> -->
                </div>

                <div class="mySlides fade">
                    <!-- <div class="numbertext"></div> -->
                    <img src="font/back.jpg" style="width:100%; border-radius: 7px">
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
                    <button name="fassion" onmouseout="hideFassionSub()" id="category_list" type="submit"><i class='fas fa-tshirt'></i> Fassion</button>
                    <!-- <button name="fassion" onmouseout="hideFassionSub()" id="category_list" type="submit"><i class='fas fa-tshirt'></i> Women's Fassion</button> -->
                    <button name="computers" id="category_list" type="submit"><i class='fas fa-desktop'></i> Computers</button>
                    <button name="electronics" id="category_list" type="submit"><i class='fas fa-bolt'></i> Cosmetics</button>
                    <button name="electronics" id="category_list" type="submit"><i class='fas fa-bolt'></i> Super market</button>
                    <button name="food" id="category_list" type="submit"><i class='fas fa-utensils'></i> Phones</button>
                    <button id="category_list" type="submit"><i class='fas fa-eye'></i> Home & office</button>
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
                <img class=" mySlides1 w3-animate-top" src="font/online-shopping-horizontal-banner-template_23-2148944455.jpg" style="width:100%; min-height: 340px">
                <img class=" mySlides1 w3-animate-top" src="font/sales-banner-origami-style_23-2148396985.jpg" style="width:100%; min-height: 340px">
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


                <div id="userHead"><?php echo ("Hi, " . $first_name . " " . $last_name); ?></div>



                <h4>Welcome to Unique</h4>
                <button id="round"><i id="round1" class="fa fa-shopping-bag "></i>
                    <h4>Hot sale</h4>
                </button>
                <button id="round"><i id="round1" class="fas fa-shield-alt "></i>
                    <h4>Security</h4>
                </button>
                <button id="round"><i id="round1" class="fas fa-sms "></i>
                    <h4>SMS</h4>
                </button>
            </div>
            <div id="div2">
                <!-- <video style="width: 100%; height: 120%;" autoplay loop src="font/istoc1.mp4"></video> -->
                <img src="font/shopping-supermarket-cart-with-grocery-pictogram_1284-11697.jpg" alt="" srcset="">
                <!-- <div class="slideshow-containerSmall">

                    <div class="mySlidesSmall">
                        <div class="numbertext"></div>
                        <img src="font/sale-promotion-ad-poster-design-template_53876-57882.jpg" style="width:100%: border-radius: 8px;">
                        <div class="text"></div>
                    </div>

                    <div class="mySlidesSmall">
                        <div class="numbertext"></div>
                        <img src="font/origami-new-arrival-confetti-background_23-2147887408.jpg" style="width:100%: border-radius: 8px;">
                        <div class="text"></div>
                    </div>

                    <div class="mySlidesSmall">
                        <div class="numbertext"></div>
                        <img src="font/mega-sale-best-offer-shop-promotion-advertisement-vector_53876-64197.jpg" style="width:100%: border-radius: 8px;">
                        <div class="text"></div>
                    </div>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dotSmall"></span>
                    <span class="dotSmall"></span>
                    <span class="dotSmall"></span>
                </div> -->

            </div>
            <!-- <img id="img" src="font/tie.jpg" alt="" srcset=""> -->
        </div>


        <!-- <?php $val = md5(1) ?> -->
        <div id="Div1">
            <a href="#"> <img class="IMG" src="font/sales-banner-origami-style_23-2148396985.jpg" alt="" srcset=""></a>
            <a href="#"><img class="IMG" src="font/abstract-sale-banner-template_23-2148755464.jpg" alt="" srcset=""></a>
            <a href="#"><img class="IMG" src="font/soccer-jersey-template-sport-t-shirt-design_29096-1247.jpg" alt="" srcset=""></a>
            <a href="#"> <img class="IMG" src="font/online-store-banner-template_23-2148960207.jpg" alt="" srcset=""></a>
            <a href="#"> <img class="IMG" id="IMG" src="font/season-sale_62951-24.jpg" alt="" srcset=""></a>
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

                    <form action="detail.php" method="POST">
                        <div class="column">

                            <button type="submit" id="pic" name="<?php echo ($row["Index_Num"]); ?>">
                                <img id="imgm" src="<?php echo ($row["Item_image_name"]); ?>" alt="" srcset="">

                            </button>
                            <br>
                            <div id="NAME" style="font-family: candara;">
                                <?php echo (substr($row["Item_name"], 0, 15)); ?>...
                            </div>
                            <br>
                            <div id="price" style="font-family: candara;">
                                GH₵ <?php echo ($row["Item_new_price"]); ?>.00
                            </div>
                            <br>
                            <div id="oldPrice" style="font-family: candara;">
                                GH₵ <?php echo ($old_price); ?>.00
                            </div>
                            <div id="PercentOff" style="font-family: candara;">
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
                            <div id="rate" style="font-family: candara;">
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
        <p>

            <img src="font/realistic-3d-super-sale-background_52683-62854.jpg" alt="" id="i" srcset="">
            <img src="font/pretty-young-stylish-sexy-woman-pink-luxury-dress-summer-fashion-trend-chic-style-sunglasses-blue-studio-background-shopping-holding-paper-bags-talking-mobile-phone-shopaholic_285396-2957.jpg" alt="" id="j" srcset="">



            <?php


            if ($res->num_rows > 0) {
                // output data of each row
                while ($row1 = $res->fetch_assoc()) {
                    $y = ($row1["Item_percent_off"] / 100) * $row1["Item_new_price"];
                    $old_price = round(($row1["Item_new_price"] + $y), 0);

                    // $ID = $row1['Item_id'];
                    // echo($ID);


            ?>
        <div style="back-ground-color: white;">

            <form action="detail.php" method="POST">
                <div class="column">

                    <button type="submit" id="pic" name="<?php echo ($row1["Index_Num"]); ?>">
                        <img id="imgm" src="<?php echo ($row1["Item_image_name"]); ?>" alt="" srcset="">

                    </button>
                    <br>
                    <div id="name" style="font-family: candara;">
                        <?php echo (substr($row1["Item_name"], 0, 15)); ?>...
                    </div>
                    <br>
                    <div id="price" style="font-family: candara;">
                        GH₵ <?php echo ($row1["Item_new_price"]); ?>.00
                    </div>
                    <br>
                    <div id="oldPrice" style="font-family: candara;">
                        GH₵ <?php echo ($old_price); ?>.00
                    </div>
                    <div id="PercentOff" style="font-family: candara;">
                        -<?php echo ($row1["Item_percent_off"]); ?>%
                    </div>
                    <br>
                    <div id="star">
                        <?php for ($i = 1; $i <= $row1["Starf_Num"]; $i++) {
                            echo ("&starf;");
                        }
                        for ($i = 1; $i <= $row1["Star_Num"]; $i++) {
                            echo ("&star;");
                        } ?>

                    </div>
                    <div id="rate" style="font-family: candara;">
                        (<?php echo ($row1["Rate"]); ?>)
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
            // $conn->close();
?>
</form>


    </div>
</body>


</html>

<script src="javascript.js"></script>
