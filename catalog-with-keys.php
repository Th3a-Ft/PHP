<?php

$hpage = "Catalog with keys";
include "header.php";

$basket = [
    "name" => "Nike Red Edition",
    "price" => formatPrice(14999),
    "color" => "red",
    "discount" => 10,
    "src" => "https://cdn.pixabay.com/photo/2015/10/29/01/24/shoes-1011596_960_720.jpg",
];

$summer = [
    "name" => "Nike Summer Edition",
    "price" => formatPrice(12500),
    "color" => "blue and black",
    "discount" => 15,
    "src" => "https://cdn.pixabay.com/photo/2020/04/09/08/38/nike-5020363_960_720.jpg",
];

$winter = [
    "name" => "Nike Winter Edition",
    "price" => formatPrice(9500),
    "color" => "blue, white and pink",
    "discount" => 15,
    "src" => "https://cdn.pixabay.com/photo/2020/04/14/09/53/nike-5041716_960_720.jpg",
] ?>

<body>
    <div class="groupeCard">

        <div class="card">
            <img src=<?= $basket["src"] ?>>
            <div class="card-img-overlay">
                <h5 class="card-title"><?= $basket["name"] ?></h5>
                <p class="card-text"><?= $basket["price"] ?></p>
                <p class="card-text"><?= discountedPrice($basket["price"], $basket["discount"]) ?></p>
            </div>
        </div>

        <div class="card">
            <img src=<?= $summer["src"] ?>>
            <div class="card-img-overlay">
                <h5 class="card-title"><?= $summer["name"] ?></h5>
                <p class="card-text"><?= $summer["price"] ?></p>
                <p class="card-text"><?= discountedPrice($summer["price"], $summer["discount"]) ?></p>

            </div>
        </div>

        <div class="card">
            <img src=<?= $winter["src"] ?>>
            <div class="card-img-overlay">
                <h5 class="card-title"><?= $winter["name"] ?></h5>
                <p class="card-text"><?= $winter["price"] ?></p>
                <p class="card-text"><?= discountedPrice($winter["price"], $winter["discount"]) ?></p>

            </div>
        </div>

    </div>
</body>

<?php include "footer.php"; ?>