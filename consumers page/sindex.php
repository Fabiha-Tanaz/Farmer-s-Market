<?php
//start session for storing product id
session_start();

require_once('php/CreateDb.php');
require_once('./php/component.php');

//create instance of db class
$database = new CreateDb("Productdb","Producttdb");//1:name of db,2.tablename
//if session variable set,else..
if(isset($_POST['add'])){
    if (isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'sindex.php'</script>";
    }else{
        $count = count($_SESSION['cart']);//number of elements in array
        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        $_SESSION['cart'][$count] = $item_array;
    }
}else{

    $item_array = array(
            'product_id' => $_POST['product_id']
    );

    // Create new session variable
    $_SESSION['cart'][0] = $item_array;
    print_r($_SESSION['cart']);
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="product.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- bootstrap and fontawesome link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="cartstyle.css">
    

</head>
<body>
<?php
require_once("php/header.php")
?>
<div class="container">
    <div class="row text-center py-5">

<?php

//getting data from database
    
$result = $database->getData();
while ($row = mysqli_fetch_assoc($result)){
    component($row['product_name'], $row['product_price'], $row['product_image'],$row['id']);
}
 ?>
</div>
</div>
   <!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>