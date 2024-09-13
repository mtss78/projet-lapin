<?php
     include 'partials/head.php';
     require 'data.php';
?>

<h1 class="mt-5">LES ACCESSOIRES</h1>
<div class="products-container">
    <?php

    foreach ($accessoires as $produit) {
        echo "<div class='product'>
                <img src='{$produit['image']}' alt='{$produit['nom']}'>
                <h2>{$produit['nom']}</h2>
                <p>{$produit['description']}</p>
                <p>Prix: {$produit['prix']}€</p>
                <button class='add-to-cart'>Ajouter au panier</button>
              </div>";
    }
    ?>
</div>



<?php
     include 'partials/footer.php';
?>