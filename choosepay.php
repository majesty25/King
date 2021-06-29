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
    session_start();

    $first_name = $_SESSION['last_name'];
    $last_name = $_SESSION['first_name'];
    $index = $_SESSION['index'];

    // $_SESSION['index'] = $ID;

    $_SESSION['index'] = $index;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;



    ?>








    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="choosepay.css">
    </head>

    <body>

        <!-- <h2>Make Payment</h2> -->
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="payment.php" method="post">

                        <div class="row">

                            <div class="address">weguyegwuy <br>kjerjieu</div>
                            <!-- <div class="address"> -->
                                <h3>Choose how you want to pay for your package</h3>
                                <!-- <input type="radio" name="pay" id="online" value="online"><b>Pay with MoMo: </b> Make pay <br>
                                <input type="radio" name="pay" id="online" value="online">Pay with MoMo -->
                                <!-- <label for="online">Pay with MoMo</label> -->
                            <!-- </div> -->

                            


                        </div>
                        <!-- <label> -->
                            <!-- <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing -->
                        <!-- </label> -->
                        
                        <input type="submit" value="Pay with Mobile Money" class="btn" name="order">
                        <p>

                        <input type="submit" value="Pay on delivery" class="btn" name="order">
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container">
                    <h4><button>MTN</button>
                        <button id="vodafone">AirtelTigo</button>
                        <span class="price" style="color:black"></i> <b>
                                <button>Vodafone</button></b></span>
                    </h4>
                    <div id="mtn-procedure">

                        <ol>
                            <li>Dial *170#</li>
                            <li>Choose option 1 - Transfer Money</li>
                            <li>The choose option 1 - MoMo User</li>
                            <li>Enter the mobile number: <b>0555089255</b></li>
                            <li>Repeat the mobile number: <b>0555089255</b></li>
                            <li>Enter Amount <b>(The amount must be greater than or the same as the total price
                                    of your carts. If the amount is greater, the remaining amount will be in your prepaid account)</b></li>
                            <li>Enter this reference code: <b> fr28spLdj </b></li>
                            <li>The name associated with this MTN MoMo account number is: <b> STEPHEN NYANKSON </b></li>
                            <li>Click on <b>I have made complete payment</b> after complete payment is made</li>
                        </ol>


                        <!-- <p>Total <span class="price" style="color:black"><b>$30</b></span></p> -->
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>


    <?php

    include('config.php');

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $cart = "SELECT * FROM carts WHERE User_id = '{$index}'";

    $carts = $conn->query($cart);


    $OrderId = rand(10000000000, 99999999999);
    $s = 10;
    $date = date("Y/m/D");
    // echo($date);

    if ($carts->num_rows > 0) {
        while ($CART = $carts->fetch_assoc()) {
            $Name = $CART['Item_name'];
            $Pic = $CART['Pic_name'];
            $Price = $CART['Price'];
            $Status = "Pending";
            $ItemId = $CART['Item_id'];
            $Quanti = $CART['Quantity'];
            $Item_index = $CART['Item_index'];
            $IndexNum = $CART['Index_Num'];
            // $date = $CART['Order_date'];
            $Size =  $CART['Size'];
            // echo($Name);
            if (isset($_REQUEST['order'])) {
                $Order = "INSERT INTO order_table (User_id, Order_id, Item_id, Item_name, Pic_name, Order_date, Delivery_period, Order_status, Quantity, Size)
                VALUES($index, '{$OrderId}', '{$ItemId}', '{$Name}',  '{$Pic}', '{$date}', '{$date}', '{$Status}', '{$Quanti}', '{$Size}')";

                // $ord = $conn->query($Order);
                if ($conn->query($Order) === TRUE) {
                    // echo "New record created successfully";
                } else {
                    echo "Error: " . "" . "<br>" . $conn->error;
                }

                // $conn->close();
                // echo($index);
                // $conn->close();
            }
        }
    }



    ?>
</body>

</html>