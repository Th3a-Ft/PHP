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
    $totalOrder = 0;

    foreach ($_POST as $i => $j) {
        /*       echo '<pre>';
        var_dump($_POST);
        var_dump($products[$i]);
        echo '</pre>';
 */

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
                        if (discountedPrice($products[$i]["price"], $products[$i]["discount"]) === $products[$i]["price"]) { ?>
                            <?= "Pas de réduction applicable";  ?>
                        <?php } else { ?>
                            <?= formatPrice(discountedPrice($products[$i]["price"], $products[$i]["discount"])); ?>
                        <?php };  ?>

                    </div>
                    <div class="col-2">
                        <!--Quantité-->
                        <?= $_POST[$i]; ?>
                    </div>
                    <div class="col-3">
                        <!--Total-->
                        <?php
                        if (trim(discountedPrice($products[$i]["price"], $products[$i]["discount"])) === $products[$i]["price"]) {
                            $totalOrder += totalCost($products[$i]["price"], $_POST["quantity"]) ?>
                            <?= formatPrice(totalCost($products[$i]["price"], $_POST["quantity"]));  ?>

                        <?php } else {
                            $totalOrder += totalCost(discountedPrice($products[$i]["price"], $products[$i]["discount"]), $_POST[$i]) ?>
                            <?= formatPrice(totalCost(discountedPrice($products[$i]["price"], $products[$i]["discount"]), $_POST[$i]));  ?>
                        <?php };  ?>
                    </div>
                </div>
            </div>
        <?php } ?>

    <?php } ?>
    <div class="container text-center">
        <div class="d-flex flex-row-reverse">
            <div class="col-3">
                <!--Total de la commande-->
                <p><strong>Total de la commande :</strong></p>
                <p><strong><?= formatPrice($totalOrder) ?></strong></p>
            </div>
        </div>
    </div>






</body>


<?php include "footer.php"; ?>