<?php
echo "I like coding <br>";

$name = "Nabil";
$food = "pizza";
$email = "mdNabil@gmail.com";

$age = 21;
$salary = 9999.98;
$gpa = "3.41";
$bank_balance = "99999999999999999.99";

$employed = true;
$online = false;

echo "Hello {$name} <br>";
echo "You like {$food} <br>";
echo "Your Email address is {$email} <br>";
echo "You are {$age} years old <br>";
echo "Your salary is {$salary} <br>";
echo "Your GPA is: {$gpa} <br>";
echo "Your bank balance is \${$bank_balance} <br>";
echo "Your online: {$online} <br>";

$x = 10;
$y = 2;
$z = null;


$z = $x ** $y;


echo $z;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <label for="name">UserNnme</label><br>
        <input type="text" name="name"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
    <?php

    echo "{$_GET["name"]} <br>";
    echo "{$_GET["password"]} <br>";

    ?>
    <form action="index.php" method="post">
        <h1>Price = $5.99</h1>
        <label for="quantity">Quantity</label><br>
        <input type="number" name="quantityJ"><br>
        <input type="submit" value="Total">
    </form>

    <?php
    $item = "Pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $price * $quantity;
    echo "You have ordered {$quantity} X {$item}s <br>";
    echo "Your Total is: \${$total}";
    ?>
</body>

</html>