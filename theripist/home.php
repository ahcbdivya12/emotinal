<?php
include 'slide.php';

// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM therapist');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?><?=template_header('Home')?>
<style type="text/css">
     form {
    display: flex;
    flex-flow: column;
    margin: 40px 0;
}
form input[type="submit"] {
    background: #4e5c70;
    border: 0;
    color: #FFFFFF;
    width: 400px;
    padding: 12px 0;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    width: 200px;
}
form input[type="submit"]:hover {
    background: #434f61;
}

</style>
   <main style="background-color: #EEE;">
<div class="featured"style="background-size: cover;
        background-position: center;
width: 100%">

    <h2  style="margin-top: 470px; color: black;">Emotinal Funds By Therapist</h2>

  <?//slide('Home')?>
</div>

<hr width="500px">

<div class="recentlyadded content-wrapper">
    <h2>Recently Added </h2>
    <div class="products"style="margin-left: -10px;">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="img/<?=$product['img']?>" width="300" height="300" alt="<?=$product['name']?>">
          <h3 style="font-size: 20px;"><?=$product['name']?></h3>
            <span class="name"><?=$product['desc']?></span>
            <span class="name"><?=$product['address']?></span> 
        </a>
        <?php endforeach; ?>
    </div>

</div>

            

<?=template_footer()?>