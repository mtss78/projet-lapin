<?php
     include 'partials/head.php';
     require 'data.php';
?>

<h1 class="mt-5">L'ALIMENTATION</h1>
<div class="products-container">
    <?php
    // $nourritures = [
    //     ["nom" => "harnais pour lapins", "image" => "/public/img/a1.jpg", "prix" => 22.99,   "description" => "La laisse de lapin se fixe par un ruban adhésif et une boucle de réglage, facile à mettre et à enlever pour les petits animaux, facile à transporter."],
    //     ["nom" => "vetement pour lapins", "image" => "/public/img/a2.jpg", "prix" => 26.98,   "description" => "vous allez craquer pour ce costume adapté à la petite taille de votre lapinou. Ce déguisement Noël pour lapin est l’accessoire parfait qui ne laissera personne indifférent!"],
    //     ["nom" => "Le sac à foin", "image" => "/public/img/a3.jpg", "prix" => 24.98,   "description" => "sac anti-gaspillage.Avec un système de ventouses nul besoin de faire des trous dans vos murs. vous mettez la quantité de foin désirée et votre lapin pourra grignoter"],
    //     ["nom" => "Crème/accessoire bain", "image" => "/public/img/a4.jpg", "prix" => 23.98,   "description" => "Les triplés Lapin Crème et accessoires de bain est un set complet comprenant 3 figurines et leurs accessoires. Il sera parfait pour compléter sa collection et meubler la salle de bains des Sylvanian Families."],
    //     ["nom" => "Bac à litière pour lapin", "image" => "/public/img/a5.webp", "prix" => 34.98,   "description" => "idéal pour gardez votre lapinou propre. La grille permet à votre lapin de ne pas marcher dans sa litière souiller,ce qui est beaucoup plus propre pour lui.Disposez de la litière de chanvre dans le fond de la litière"],
    //     ["nom" => "Barrière Pour Lapin", "image" => "/public/img/a6.jpg", "prix" => 21.99,   "description" => "fabriquée en bois et recouverte d'une peinture à base d'eau, la rendant inoffensive pour vos lapinous. Ainsi, si vos lapins ont une furieuse envie de la mordiller, ils pourront le faire sans danger"]
    // ];
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