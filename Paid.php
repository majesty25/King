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
</head>

<body>
    <?php

    

    $Order = "SELECT * FROM carts WHERE User_id = '{$index}'";
    $order = $conn->query($Order);
    $OrderId = "889437639848";
    $Quantity = $_REQUEST[''];
    $OrderDate = date("Y-m-d h:i:sa");
    $OrderStatus = "Pending";   
    $Size = "2";
    if (isset($_POST['order'])){
        if ($order->num_rows > 0) {
            while ($ORDERS = $order->fetch_assoc()) {            
                $img = $ORDERS['Pic_name'];
                $Name = $ORDERS['Item_name'];                                
                $ItemId = $ORDERS['Item_id'];

                $Insert = "INSERT INTO Order_table (User_id, Order_id, Item_id, Item_name, Pic_name, Delivery_period, Order_status, Quantity, Size)
                        VALUES('{$index}', '{$OrderId}','{$ItemId}', '{$Name}', '{$img}', '{$OrderDate}', '{$OrderStatus}', '{$Quantity}', '{$Size}')";
                $insert = $conn->query($Insert);        

            }
        }
    }





    ?>
</body>

</html>