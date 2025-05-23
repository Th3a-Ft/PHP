<?php

$hpage = "Multidimensional Catalog";
include "header.php";


$products = [
    "basket" => [
        "name" => "Nike Red Edition",
        "price" => 14999,
        "color" => "red",
        "discount" => 10,
        "src" => "https://cdn.pixabay.com/photo/2015/10/29/01/24/shoes-1011596_960_720.jpg",
    ],
    "summer" => [
        "name" => "Nike Summer Edition",
        "price" => 14999,
        "color" => "blue and black",
        "discount" => 20,
        "src" => "https://cdn.pixabay.com/photo/2020/04/09/08/38/nike-5020363_960_720.jpg",
    ],
    "winter" => [
        "name" => "Nike Winter Edition",
        "price" => 14999,
        "color" => "blue, white and pink",
        "discount" => 0,
        "src" => "https://cdn.pixabay.com/photo/2020/04/14/09/53/nike-5041716_960_720.jpg",
    ],
];
?>

<body>
    <div class="pres_catalogue">

        <?php foreach ($products as $i => $j) { ?>

            <div class='card mb-3'>
                <div class='row g-0'>
                    <div class='col-md-4'>
                        <img class='img-fluid rounded-start' src=<?= $j["src"] ?>>
                    </div>
                    <div class='col-md-8'>
                        <div class='card-body'>
                            <!--Formulaire-->
                            <form action="cart.php" method="POST">
                                <h3 class='card-title'> <?= $j["name"] ?></h3>
                                <p class='card-text'><small class='text-body-secondary'><?= formatPrice($j["price"]) ?></small></p>

                                <!-- Si pas de discount les éléments concernant la discount ne s'affiche pas -->
                                <?php if ($j["discount"] != 0) { ?>
                                    <p class='card-text'>Réduction exceptionnelle de <?= $j["discount"] ?> %</p>
                                    <p class='card-text'>Prix après réduction <?= formatPrice(discountedPrice($j["price"], $j["discount"])) ?></p>
                                <?php } else { ?>
                                    <p class='card-text'></p>
                                <?php } ?>


                                <!--input caché des données vers la page panier-->
                                <input type="hidden" name="nameProduct" value="<?= $j["name"] ?>">
                                <input type="hidden" name="productPrice" value="<?= $j["price"]; ?>">

                                <!-- Affichage si discount est = 0 -->
                                <!-- Retour à la ligne dans value créé une chaine de caract avec un espace au deb et fin -->
                                <input type="hidden" name="discountPrice" value="
                                <?php
                                if ($j["discount"] != 0) { ?>
                                    <?= discountedPrice($j["price"], $j["discount"]) ?>
                                <?php } else { ?>
                                    <?= $j["price"] ?>
                                <?php }  ?>">


                                <h5>Commander</h5>
                                <label name="quantity">Quantité </label>
                                <input type="number" min="0" value="0" id="quantity" name="quantity"></input>
                                <button type="submit">Commander</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>


<?php include "footer.php"; ?>