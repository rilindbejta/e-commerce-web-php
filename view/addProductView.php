<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="name" placeholder="name"> <br><br>
        <input type="text" name="image1" placeholder="image1"> <br><br>
        <input type="text" name="image2" placeholder="image2"> <br><br>
        <input type="text" name="image3" placeholder="image3"> <br><br>
        <input type="text" name="image4" placeholder="image4"> <br><br>
        <input type="text" name="image5" placeholder="image5"> <br><br>
        <input type="text" name="image6" placeholder="image6"> <br><br>
        <input type="text" name="brand" placeholder="brand"> <br><br>
        <input type="text" name="old_price" placeholder="old_price"> <br><br>
        <input type="text" name="current_price" placeholder="current_price"> <br><br>
        <input type="submit" name="add" value="Add Product"> <br><br>
    </form> 
    
    <?php
        include_once '../controller/productController.php';
    ?>

</body>
</html>