<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Продукты</title>
       
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </head>
    <div class="container">
        <h2>Product lists</h2>
    <div class="product">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="row">
                <?php 
                for($i=1; $i<5; $i++) {
                ?>
                
                <div class="col-md-4">
                    <img src="images/products/product_<?= $i;?>.png">
                    <input type="text" name='product[]' value="Product <?= $i; ?>" readonly="readonly">
                    <span class="pricetag">Price: <?= $i * 5; ?>$</span>
                </div>
               <?php
                }
               ?>
                
            </div>
            <input type="submit" value="Send" name="submit_button">
        </form>
    </div>
    <?php
    if(isset($_POST['submit_button'])) {
        foreach ($_REQUEST['product'] as $product=>$value){
            echo  $value.'<br/>';
        }
    }
    ?>
    </div>
</html>
