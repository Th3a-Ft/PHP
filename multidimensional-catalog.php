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
        "price" => 12500,
        "color" => "blue and black",
        "discount" => 15,
        "src" => "https://cdn.pixabay.com/photo/2020/04/09/08/38/nike-5020363_960_720.jpg",
    ],
    "winter" => [
        "name" => "Nike Winter Edition",
        "price" => 9500,
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
                            <h5 class='card-title'> <?= $j["name"] ?></h5>
                            <p class='card-text'>Réduction exceptionnelle de <?= $j["discount"] ?> %</p>
                            <p class='card-text'><small class='text-body-secondary'><?= formatPrice($j["price"]) ?></small></p>
                            <p class='card-text'><?= discountedPrice($j["price"], $j["discount"]) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


    </div>

</body>


<?php include "footer.php"; ?>