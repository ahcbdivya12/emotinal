<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM musics WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product dsddoes not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Productdsd does not exist!');
}

?>
<?=template_header('Product')?>

<div class="cart content-wrapper">
    <h1>Shopping Cart</h1>
    <form action=" index.php?page=sing-up "method="post">
    <table style="padding: 30px">
    <thead>
    <tr>
        <th >Product</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>

            <tr>
                 <td class="img">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="img/<?=$product['img']?>" width="50" height="50" alt="<?=$product['name']?>">
                        </a>
                    </td>
                   <td >
                        <a href="index.php?page=product&id=<?=$product['id']?>" style="margin-left: 350px;"><?=$product['name']?></a>
                        <br><!-- 
                        <a href="index.php?page=cart&remove=<?=$product['id']?>" class="remove"style="margin-left: 390px;">Remove</a> -->
                    </td>
                   
                 <td class="price">&dollar;<?=$product['price']?></td>
                </tr>
            
    </tbody>
</table>
 <div class="subtotal" style="padding: 30px">
            <span class="text">Total</span>
            <span class="price">&dollar;<?=$product['price']?></span>
        </div>
        <div class="buttons" style="padding: 30px">
            <input type="submit" value="Place Order" name="placeorder" >
        </div>

<?=template_footer()?>