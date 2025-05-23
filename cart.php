<?php

$hpage = "Cart";
include "header.php";
include "list-products.php" ?>

<body>

    <div class="container text-center cart">
        <div class="row align-items-start">
            <div class="col-3">
                Produit
            </div>
            <div class="col-2">
                Prix
            </div>
            <div class="col-2">
                Prix après réduction
            </div>

            <div class="col-2">
                Quantité
            </div>
            <div class="col-3">
                Total
            </div>

        </div>
    </div>

    <!-- x est la key y value-->
     
    <?php 
    
    foreach ($_POST as $i => $j) {
        echo '<pre>';
        var_dump($_POST);
        var_dump($products[$i]);
        echo '</pre>';
       if ($_POST[$i] != 0) { ?>
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col-3">
                        <?= $products[$i]["name"]; ?>
                    </div>
                    <div class="col-2">
                        <?= formatPrice($products[$i]["price"]); ?>
                        <?= "(" . priceExcludingVAT($products[$i]["price"]) . "HT )"; ?>

                    </div>
                    <div class="col-2">
                        <!--Prix après Promo-->
                        <?php
                        //trim permet de supprimer les espaces dans les chaines de caracteres
                        if (trim($_POST["discountPrice"]) === $_POST["productPrice"]) { ?>
                            <?= "Pas de réduction applicable";  ?>
                        <?php } else { ?>
                            <?= formatPrice($_POST["discountPrice"]); ?>
                        <?php };  ?>

                    </div>
                    <div class="col-2">
                        <!--Quantité-->
                        <?= $_POST["quantity"]; ?>
                    </div>
                    <div class="col-3">
                        <!--Total-->
                        <?php
                        if ($_POST["discountPrice"] === $_POST["productPrice"]) { ?>
                            <?= formatPrice(totalCost($_POST["productPrice"], $_POST["quantity"]));  ?>
                        <?php } else { ?>
                            <?= formatPrice(totalCost($_POST["discountPrice"], $_POST["quantity"]));  ?>
                        <?php };  ?>
                    </div>

                </div>
            </div>
       <?php } ?>
    <?php } ?>





</body>


<?php include "footer.php"; ?>