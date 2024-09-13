<?php
     include 'partials/head.php';
     require 'data.php';
?>
<h1 class="mt-5">LES JOUETS</h1>

<div class="products-container">



    <?php
    // $jouets = [
    //     ["nom" => "Relaxdays Arbre à lapin", "image" => "/public/img/j1.jpg", "prix" => 38.98,   "description" => "Ce lot est parfait pour que votre lapin s’amuse dans sa cage.En cachant des friandises dans l’arbre, votre petit animal pourra s’étirer.Avec le jouet en forme de rondelle, il pourra stimuler son intelligence."],
    //     ["nom" => "porte-nouriture", "image" => "/public/img/j2.jpg", "prix" => 37.45,   "description" => "Jouet suspendu personnalisé pour lapin, jouets de lapin, porte-nourriture, mangeoire, jouets en bois.Le jouet est fait de pin non traité et sans danger pour votre animal de compagnie à mâcher."],
    //     ["nom" => "Balle pour lapin", "image" => "/public/img/j3.jpg", "prix" => 25.98,   "description" => "Voici un trio de balles en bois pour lapin qui va ravir ton lapinou. ❤️Ce jouet à ronger pour lapin est 100% naturel et donnera envie à ton lapin de courir dernière la petite balle pour la ronger. "],
    //     ["nom" => "Jouets à Mâcher", "image" => "/public/img/j4.jpg", "prix" => 30.98,   "description" => "le jouet à mâcher lapin carotte est fabriqué en luffa, les animaux sont libres de mâcher.utilisés pour broyer et nettoyer les dents, mais ils peuvent également favoriser la digestion intestinale."],
    //     ["nom" => "Balle à Friandise", "image" => "/public/img/j5.jpg", "prix" => 24.98,   "description" => "La Balle à Friandise est une révolution dans l’univers des jeux pour lapins Pensée spécialement pour piquer la curiosité de votre pinou, cette balle n’est pas seulement un jouet, c’est une aventure en soi."],
    //     ["nom" => "Arbre à lapin", "image" => "/public/img/j6.jpg", "prix" => 30.99,   "description" => "Nos lapinous sont de vrais gourmands, voici une activité d'éveil qui devrait leur plaire !😋Cet arbre à lapin est spécialement conçu pour y accrocher arbre a lapin"]

    // ];

    foreach ($jouets as $produit) {
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