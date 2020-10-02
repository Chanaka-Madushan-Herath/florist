<?php
include "db.php";
$sql = "SELECT * FROM `products` WHERE `Id`='".$_GET['id']."'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll();
$product_name=$result[0]['product_name'];
$product_description=$result[0]['product_description'];
$product_price=$result[0]['product_price'];
$image_mime=$result[0]['image_mime'];
$image_data=$result[0]['image_data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body >
    <header>
            
        <section class="topnav">
        <?php 
           include "navbar.php";
           ?>      
            </section>
    </header>
<div class="wrapper">
    <div class="row">
  <div class="column">
    <div>
        <?php 
        echo "<img src='data:".$image_mime.";base64,".base64_encode($image_data)."'>";
        ?>
    </div>
    <br>
    <h3>Price(dilivery included)</h3><hr><br>
    <div class="prices">
        <span><p><input type="radio" id="standard" name="price" value="<?php echo $product_price;?> &#128;" onclick="price()" ><label for="standard">Standard <?php echo $product_price;?> &#128;</label></p><i class="fa fa-info-circle"></i></span><br>
        <span><p><input type="radio" id="deluxe" name="price" value="<?php echo $product_price;?> &#128;" onclick="price()"><label for="deluxe" >Deluxe <?php echo $product_price;?> &#128;</label></p><i class="fa fa-info-circle"></i></span><br>
        <span><p><input type="radio" id="premium" name="price" value="<?php echo $product_price;?> &#128;" onclick="price()"><label for="premium">Premium <?php echo $product_price;?> &#128;</label></p><i class="fa fa-info-circle"></i></span><br>
    </div>
    
    <div class="total">
        <script src="main.js">    </script>
        <p id="demo"></p>
    </div>
    <div>
        <script src="main.js">    </script>
        <p id="demo1"></p>
    </div>
  </div>
  <div class="column1">
    
<h1> <?php echo $product_name;?></h1><br>
   <h3>
Bouquet of roses and mixed seasonal flowers in vivid colors, decorated with greenery. Suitable for every occasion. Conveys joy.</h3><br>
<p><i class="fa fa-info-circle"></i>
Seasonal Flowers or Plants may be changed if unavailable. However, we will try to stick to the type of the chosen flowers as much as possible. The vase is not included. The picture usually referring the "Deluxe" arrangement.</p><br><hr>
<br>
<div class="delivery">
    <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
    <div class="get">
    <div class="lab0">
        <label>Dilivery date</label>
    </div>
    <div class="in">
        <input type="date" name="date" required>
    </div>
</div>

<div class="get">
    <div class="lab">
        <label>Delivery time </label>
    </div>
    <div class="in">
        <span><p> <input type="radio" name="time" id="workingday" checked ><label for="workingday">Working Day-Free(9 a.m-9 p.m)</label></p><i class="fa fa-info-circle"></i></span>
         <span><p><input type="radio" name="time" id="holiday"><label for="holiday">Sunday and Public Holidays 4 &#128;</label></p><i class="fa fa-info-circle"></i></span>
    </div>
</div>

    <div class="get">
    <div class="lab0">
        <label>Quantity </label>
    </div>
    <div class="in">
        <input type="number" name="quantity"required>
    </div>
</div>

<div class="get">
   <p class="messagefield">
    <div class="lab">
    <label for="message">Message</label><br>
    <label >Out of ideas? Chose a message!</label></div>
    <div class="in">
    <textarea id="message" name="message" placeholder="250 characters remaining" style="height:100px"required></textarea>
    </div></p>
</div>

<div class="get">
    <div class="lab">
        <label>Signature </label>
    </div>
    <div class="in">
        <input type="text" name="signature">
    </div>
</div>
<input class="btn" type="submit" value="Continue >>">
</form>
</div>
  </div>
</div>
</div>

</body>
</html>