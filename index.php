<?php
    include 'partials/head.php';
?>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f4f2;
            color: #333;
        }
        header {
            background-color: #f4f4f9;
            padding: 20px;
            text-align: center;
        }

        p{
            font-weight: bold;
        }

        .hero {
            background-image: url('/public/img/lapin1.jpg');
            background-size: cover;
            background-position: center;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .content h2 {
            color: #0056b3;
            font-weight: bold;
        }
        header h1{
            font-weight: bold;
        }
        .product-card {
            display: inline-block;
            width: 300px;
            height: 380px;
            margin: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
        }
        .product-card img {
            width: 100%;
            height: 270px;
            border-radius: 10px;
        }
        h3{
            margin-top: 20px;
            color: #0056b3;
        }
        </style>
</head>
<body>
    <header>
        <h1>Produits pour Lapins</h1>
        <p>Le meilleur pour vos petits compagnons</p>
    </header>

    <div class="hero">
        <div></div>
    </div>
    <div class="content" id="products">
        <h2>Nos Catégories</h2>
        <p>Découvrez nos produits pour lapins</p>
        <div class="product-card">
            <a href="accessoires.php"><img src="public/img/accessoire.jpg" alt="Produit 1"></a>
            <h3>Accessoires</h3>

        </div>
        <div class="product-card">
            <a href="jouets.php"><img src="public/img/jouets.jpg" alt="Produit 2"></a>
            <h3>Jouets</h3>

        </div>
        <div class="product-card">
        <a href="nourriture.php"><img src="public/img/alimentation.jpg" alt="Produit 3"></a>
            <h3>Nourritures</h3>

        </div>
    </div>

</body>
</html>

<?php

    include 'partials/footer.php';
?>