<?php

$hpage = "Multidimensional Catalog";
include "header.php";
include "list-products.php";
?>

<body>
    <div class="pres_catalogue">
        <!--Formulaire-->
        <form class="form" action="cart.php" method="POST">
            <?php foreach ($products as $i => $j) { 
               //var_dump($j["name"])?>
                <div class='card mb-3'>
                    <div class='row g-0'>
                        <div class='col-md-4'>
                            <img class='img-fluid rounded-start' src=<?= $j["src"] ?>>
                        </div>
                        <div class='col-md-8'>
                            <div class='card-body'>
                                <h3 class='card-title'> <?= $j["name"] ?></h3>
                                <p class='card-text'><small class='text-body-secondary'><?= formatPrice($j["price"]) . "(" . priceExcludingVAT($j["price"]) . "HT)" ?></small></p>
                                <h5>Commander</h5>
                                <label name="quantity">Quantité </label>
                                <input type="number" min="0" value="0" name="<?= $i ?>"></input>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <button type="submit">Commander</button>
            <!-- </form> -->
        </form>
    </div>
</body>


<?php include "footer.php"; ?>