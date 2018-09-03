<?php 

    global $connection;
    require_once "config.php";
    require_once "db_config.php";


  $name = isset($_POST['name']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['name'])))) : "";
  $brand = isset($_POST['brand']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['brand'])))) : "";
  $category = isset($_POST['category']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['category'])))) : "";
  $weight = isset($_POST['weight']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['weight'])))) : "";
  $unit = isset($_POST['unit']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['unit'])))) : "";
  $price = isset($_POST['price']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['price'])))) : "";
  $promo = isset($_POST['promo']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['promo'])))) : "";
  $barcode = isset($_POST['barcode']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['barcode'])))) : "";
  $img = isset($_POST['img']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['img'])))) : "";
  $status = isset($_POST['status']) ? strip_tags(trim(mysqli_real_escape_string($connection,trim($_POST['status'])))) : "";




    // $insert = mysqli_query($connection, "INSERT INTO products
    // VALUES(NULL, '{$name}', '{$brand}', '{$category}', '{$weight}', '{$unit}', '{$price}', '{$promo_price}', '{$barcode}', '{$img}', '{$status}', NOW()") or die($connection);

    
    $sql = "INSERT INTO products VALUES (NULL, '$name', '$brand', '$category', '$weight', '$unit', '$price', '$promo' , '$barcode', '$img', '$status', NOW())";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "success";
    }

?>