<?php
     include 'partials/head.php';
     require 'data.php';
?>

<h1 class="mt-5">L'ALIMENTATION</h1>
<div class="products-container">
    <?php

    foreach ($nourritures as $produit) {
        echo "<div class='product container-fluid'>
                <img src='public/img/{$produit['image']}' alt='{$produit['nom']}'>
                <h2>{$produit['nom']}</h2>
                <p>{$produit['description']}</p>
                <p>Prix: {$produit['prix']}€ pour 100g</p>
                <button class='add-to-cart'>Ajouter au panier</button>
              </div>";
    }
    ?>
</div>



<?php
     include 'partials/footer.php';
?>