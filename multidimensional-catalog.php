<?php

$hpage = "Multidimensional Catalog";
include "header.php";


$products = [
    "basket" => [
        "name" => "Nike Red Edition",
        "price" => formatPrice(14999),
        "color" => "red",
        "discount" => 10,
        "src" => "https://cdn.pixabay.com/photo/2015/10/29/01/24/shoes-1011596_960_720.jpg",
    ],
    "summer" => [
        "name" => "Nike Summer Edition",
        "price" => formatPrice(12500),
        "color" => "blue and black",
        "discount" => 15,
        "src" => "https://cdn.pixabay.com/photo/2020/04/09/08/38/nike-5020363_960_720.jpg",
    ],
    "winter" => [
        "name" => "Nike Winter Edition",
        "price" => formatPrice(12500),
        "color" => "blue, white and pink",
        "discount" => 15,
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
                            <h3 class='card-title'> <?= $j["name"] ?></h3>
                            <p class='card-text'>Réduction exceptionnelle de <?= $j["discount"] ?> %</p>
                            <p class='card-text'><small class='text-body-secondary'><?= $j["price"] ?></small></p>
                            <p class='card-text'><?= discountedPrice($j["price"], $j["discount"]) ?></p>
                            <form>
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