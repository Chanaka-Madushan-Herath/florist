<?php
include "db.php";
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
<body>
    <header>
            
        <section class="topnav">
           <?php 
           include "navbar.php";
           ?>  
            </section>
    </header>
    <div class="wrapper">
        <section class="two">
            <h1><span>Malshan Flora </span> your online Florist to deliver Flowers in Kotikawatta</h1>
            <div class="imagesection"> 
                <div class="image" id="image1">
                    <img src="images/euroflora-florist-flower-bouquet.jpg" alt="" height="200px" width="100%">
                    <div class="text" id="text1">
                        <h3>SEPTEMBER OFFERS: TODAY -15%</h3><br><br>
                        <hr>
                        <h4>Delivery service included</h4>
                    </div>
                </div>
                <div class="image" id="image2">
                    <img src="images/Cheyanne.jpg" alt="" height="200px" width="100%">
                    <div class="text" id="text2">
                        <h3>Roses and mixed flowers from 78.80 €</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="four">
            <hr>
            <br>
            <hr>
            <br>
            <h3>We offer a same day Flowers and Plants delivery service in Kotikawatta even in a few hours.
            From our online Flower shop can order nice Bouquets and Flowers Gifts quickly and easily.
            Choose your Bouquet from 68 € delivery included. Payments accepted: Credit Card and Paypal.
            </h3>
        </section>
        <section class="five">
            <?php
if (isset($_GET["startingnumber"])) {
            $startingnumber=$_GET["startingnumber"];
        }else{
            $startingnumber=0;
        }
         $rows_count=0;
            $sql = "SELECT * FROM products LIMIT ".$startingnumber.",5";
            if($stmt = $conn->prepare($sql)){
                $stmt->execute();
                while($row = $stmt->fetch()){
                    echo "<a href='display.php?id=".$row['Id']."'><div class='product' id='product1'>";
                    echo "<img src='data:".$row['image_mime'].";base64,".base64_encode($row['image_data'])."'>";
                    echo "<h4>".$row['product_name']."</h4>";
                    echo "<p>".$row['product_description']."</p>";
                    echo"<span><i class='fa fa-info-circle'></i><p> From ".$row['product_price']."&#128;</p></span>";
                    echo "</div></a>";

                }
            }else{
                echo "there was an error";
            }?>
          
        </section>
        <div class="pagination">
        <?php
            $sql0 = "SELECT product_name FROM products ";
$result0 = $conn->query($sql0);
  while($row = $result0->fetch()) {
    $rows_count++;}

    echo"<br>";
    echo"<br>";
    echo"<br>";
    

if($rows_count%5==0){
$pages=$rows_count/5;
}else{
$pages=($rows_count/5)+1;
}

foreach (range('1',$pages )as $number) {
    $startingnumber= ($number-1)*5;
    echo "<div>";
    echo  "&nbsp;<a href='index.php?startingnumber=".$startingnumber."'><button>".$number."</button></a>&nbsp;";
    echo"</div>";
    

}
            
        ?>
        
    </div>
    </div>
    
</body>
</html>