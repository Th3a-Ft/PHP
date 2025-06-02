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
    $totalWeight = 0;

    foreach ($_POST as $i => $j) {
        /*       echo '<pre>';
        var_dump($_POST);
        var_dump($products[$i]);
        echo '</pre>';
 */
        /*Si la quantité submit est différente de 0, récupère les infos du produit concerné*/
        if ($_POST[$i] != 0) { ?>
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col-3">
                        <?= $products[$i]["name"]; ?>
                    </div>
                    <div class="col-2">
                        <!--Récupère et formate le prix du produit commandé via le Post -->
                        <?= formatPrice($products[$i]["price"]); ?>
                        <!--Calcule & affiche le prix sans TVA (formatage dans la fct priceExcludingVAT)-->
                        <?= "(" . priceExcludingVAT($products[$i]["price"]) . "HT )"; ?>

                    </div>
                    <div class="col-2">
                        <!--Prix après Promo-->
                        <!--Si le montant après discount est = prix avant discount affiche pas de réduction... sinon calcule, formate, affiche le nouveau prix-->
                        <?php
                        if (discountedPrice($products[$i]["price"], $products[$i]["discount"]) === $products[$i]["price"]) { ?>
                            <?= "Pas de réduction applicable";  ?>
                        <?php } else { ?>
                            <?= formatPrice(discountedPrice($products[$i]["price"], $products[$i]["discount"])); ?>
                        <?php };  ?>

                    </div>
                    <div class="col-2">
                        <!--Quantité-->
                        <!--Récupère la quantité du produit commander-->
                        <?= $_POST[$i]; ?>
                    </div>
                    <div class="col-3">
                        <!--Total-->
                        <!--Si le montant après discount est = prix avant discount affiche le total de la commande basée sur prix sans discount * quantité sinon mantant avec discount-->
                        <!--$totalOrder = montant total de la commande de tous les articles-->
                        <?php
                        if (trim(discountedPrice($products[$i]["price"], $products[$i]["discount"])) === $products[$i]["price"]) {
                            $totalOrder += totalCost($products[$i]["price"], $_POST["quantity"]);
                            $totalWeight += totalWeight($products[$i]["weight"], $_POST[$i]);
                        ?>
                            <?= formatPrice(totalCost($products[$i]["price"], $_POST["quantity"]));  ?>

                        <?php } else {
                            $totalOrder += totalCost(discountedPrice($products[$i]["price"], $products[$i]["discount"]), $_POST[$i]);
                            $totalWeight += totalWeight($products[$i]["weight"], $_POST[$i], $totalOrder);
                        ?>
                            <?= formatPrice(totalCost(discountedPrice($products[$i]["price"], $products[$i]["discount"]), $_POST[$i]));  ?>
                        <?php };  ?>
                    </div>
                </div>
            </div>
        <?php } ?>

    <?php } ?>
    <!--Total de la commande-->
    <!--Affichage et formatage du montant total de la commande (sans frais de port)-->
    <div class="container text-center">
        <div class="d-flex flex-row-reverse">
            <div class="col-3">
                <hr>
                <p>Total de la commande :</p>
                <p><?= formatPrice($totalOrder) ?></p>
            </div>
        </div>
    </div>

    <!--Calcul des frais de transport-->
    <div class="container text-center">
        <hr>
        <div class="d-flex justify-content-end">
            <div class="col-3">
                <!--Choix du transporteur-->
                <p><strong>Choix du transporteur</strong></p>
                <select name="transports" id="transports-select">
                    <option value="">Choisissez un transporteur</option>
                    <option value="ups">UPS</option>
                    <option value="colissimo">La Poste - Colissimo</option>
                </select>
            </div>
            <div class="col-3">
                <!--Calcule et formatage des coûts de transport selon le poid du colis-->
                <?php formatPrice(transportFees($totalWeight, $totalOrder)); ?>
            </div>
            <div class="col-3">
                <p><strong>Montant total à régler</strong></p>
                <p><strong>
                        <!--Calcule et formatage des coûts de transport selon le poid du colis-->
                        <?php
                        if ($totalWeight <= 500) {
                            echo formatPrice($totalOrder  + 500);
                        } else if ($totalWeight > 500 && $totalWeight <= 2000) {
                            echo formatPrice($totalOrder = $totalOrder * 1.10);
                        } else {
                            echo formatPrice($totalOrder);
                        };
                        ?>
                    </strong></p>
            </div>
        </div>
    </div>




</body>


<?php include "footer.php"; ?>