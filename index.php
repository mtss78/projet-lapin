<?php
    include 'partials/head.php';
?>
    <!-- <h1>Bienvenue dans notre site </h1>
    <div class="imgContenaire">
  <img src="/public/img/lapin1.jpg" alt="" id="img">
  </div>
<script>
let num = 0;
let img = document.querySelector('#img');
      let interval = true; 

    function slide(){ 
        setInterval(function(event){
            num += 1;
            img.src = "/public/img/lapin" + num + ".jpg"
            if(num == 3){
                num = 0;
            }
        }, 1500);
    }


    slide()</script> -->

   
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
       
        .hero {
            background-image: url('https://via.placeholder.com/1200x400?text=Bienvenue+sur+le+site+de+produits+pour+lapins');
            background-size: cover;
            background-position: center;
            height: 400px;
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
            color: #8ec5a1;
        }
        .product-card {
            display: inline-block;
            width: 200px;
            margin: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
        }
        .product-card img {
            width: 100%;
            border-radius: 10px;
        }
      
    </style>
</head>
<body>
    <header>
        <h1>Produits pour Lapins</h1>
        <p>Le meilleur pour vos petits compagnons</p>
    </header>
    
    <!-- <div class="hero">
        <div>Découvrez nos produits pour lapins</div>
    </div> -->
    <div class="content" id="products">
        <h2>Nos Produits</h2>
        <div class="product-card">
            <img src="public/img/a1.jpg" alt="Produit 1">
            <h3>Accessoires</h3>
           
        </div>
        <div class="product-card">
            <img src="public/img/j1.jpg" alt="Produit 2">
            <h3>Jouets</h3>
            
        </div>
        <div class="product-card">
        <img src="public/img/j2.jpg" alt="Produit 2">
            <h3>Nourritures</h3>
            
        </div>
    </div>
    
</body>
</html>

<?php

    include 'partials/footer.php';
?>