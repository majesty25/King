<?php

session_start();

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$index = $_SESSION['index'];

// $_SESSION['index'] = $ID;

$_SESSION['index'] = $index;
$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;

include('config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$User = "SELECT * FROM user WHERE Index_Num = '{$index}'";
$Users = $conn->query($User);
if ($Users->num_rows > 0){
    while ($USER = $Users->fetch_assoc()){
        $FirstName = $USER['First_name'];
        $LastName = $USER['Last_name'];
        $Email = $USER['Email'];
        $Phone = $USER['Phone'];
        $City = $USER['City'];
        $Address = $USER['Residential_address'];
    }
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='fontawesome-free-5.13.0-web/js/all.js'></script>
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <link rel="stylesheet" href="account.css">
    <title>Document</title>
</head>

<body>
    <!-- <button class="back">BACK</button> -->
    <a href="Homepage.php"><img id="IMG" src="font/1622072964755.png" alt=""></a>
    <div class="container">
        <div id="personal-info">
            <span class="Head">
                <span class="name">Account</span>
                <!-- <button class="edit"><i style="font-size: 24px;" class="fa fa-edit"></i></button> -->
                <br>
            </span>
            <hr><br>
            <i class="fa fa-user"></i> <?php echo($FirstName. " " . $LastName); ?>
            <hr><br><br><br>
            <i class="fas fa-phone-alt"></i> <?php echo($Phone); ?>
            <hr><br><br><br>
            <i class="fas fa-mail-bulk"></i> <?php echo($Email); ?>
            <hr><br><br><br>
            <i class="fas fa-dollar-sign"></i> Credit: 0.00
            <hr><br><br><br>
            <i class="fas fa-map-marker-alt"></i> <?php echo($City. ", ". $Address); ?>


            <!-- <br><br>
            <input id="input" type="text" name="" placeholder="First name"  autofocus>
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
            <br><br>
            <input id="input" type="text" name="" placeholder="First name" >
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
            <br><br>
            <input id="input" type="text" name="" placeholder="First name" >
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
            <br><br>
            <input id="input" type="text" name="" placeholder="First name" >
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
            <br><br>
            <input id="input" type="text" name="" placeholder="First name" >
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
            <p> -->

            <!-- <button>Cancel</button> -->
            <!-- <button>Change passworrd</button> -->

        </div>


        <!-- <div id="personal-info">
            <span class="Head"></form>
                <span class="name">Address info</span>
                <button class="edit"><i style="font-size: 24px;" class="fa fa-edit"></i></button><br>
            </span>
            <br><br>
            <input id="input" type="text" name="" placeholder="First name" >
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
            <br><br>
            <input id="input" type="text" name="" placeholder="First name" >
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
            <br><br>
            <input id="input" type="text" name="" placeholder="First name" >
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
            <br><br>
            <input id="input" type="text" name="" placeholder="First name" >
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
            <br><br>
            <input id="input" type="text" name="" placeholder="First name" >
            <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button>
        </div> -->
    </div>

    <div class="container1">
        <input id="input" type="text" name="" placeholder="First name" autofocus>
        <!-- <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button> -->
        <br><br>
        <input id="input" type="text" name="" placeholder="Last name">
        <!-- <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button> -->
        <br><br>
        <input id="input" type="email" name="" placeholder="Email">
        <!-- <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button> -->
        <br><br>
        <input id="input" type="text" name="" placeholder="Phone">
        <!-- <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button> -->
        <br><br>
        <input id="input" type="text" name="" placeholder="Address">
        <br><br>
        <input id="input" type="password" name="" placeholder="Old Password">
        <br><br>
        <input id="input" type="password" name="" placeholder="New Password">
        <br><br>
        <input id="input" class="Submit" type="submit" name="" value="Save">
        <!-- <button class="edit"><i style="font-size: 24px;" class="far fa-edit"></i></button> -->
    </div>
</body>

</html>