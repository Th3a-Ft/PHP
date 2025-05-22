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
                <?= $_POST["discountPrice"]; ?>
            </div>
            <div class="col-2">
                <?= $_POST["quantity"]; ?>
            </div>
            <div class="col-3">
                <?= totalCost($_POST["productPrice"], $_POST["quantity"]); ?>
            </div>

        </div>
    </div>






</body>


<?php include "footer.php"; ?>