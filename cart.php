<?php

$hpage = "Cart";
include "header.php"; ?>

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
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col-3">
                <?= $_POST["nameProduct"]; ?>
            </div>
            <div class="col-2">
                <?= formatPrice($_POST["productPrice"]); ?>
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






</body>


<?php include "footer.php"; ?>