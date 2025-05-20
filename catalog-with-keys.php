<?php

$hpage = "Catalog with keys";
include "header.php";

$basket = [
    "name" => "Nike Red Edition",
    "price" => 149,
    "color" => "red",
    "discount" => 10,
    "src" => "https://cdn.pixabay.com/photo/2015/10/29/01/24/shoes-1011596_960_720.jpg",
];

$summer = [
    "name" => "Nike Summer Edition",
    "price" => 125,
    "color" => "blue and black",
    "discount" => 15,
    "src" => "https://cdn.pixabay.com/photo/2020/04/09/08/38/nike-5020363_960_720.jpg",
];

$winter = [
    "name" => "Nike Winter Edition",
    "price" => 95,
    "color" => "blue, white and pink",
    "discount" => 15,
    "src" => "https://cdn.pixabay.com/photo/2020/04/14/09/53/nike-5041716_960_720.jpg",
] ?>

<body>
    <div class="groupeCard">

        <div class="card">
            <img src=<?php echo $basket["src"] ?>>
            <div class="card-img-overlay">
                <h5 class="card-title"><?php echo $basket["name"] ?></h5>
                <p class="card-text"><?php echo $basket["price"] ?> €</p>
            </div>
        </div>

        <div class="card">
            <img src=<?php echo $summer["src"] ?>>
            <div class="card-img-overlay">
                <h5 class="card-title"><?php echo $summer["name"] ?></h5>
                <p class="card-text"><?php echo $summer["price"] ?> €</p>
            </div>
        </div>

        <div class="card">
            <img src=<?php echo $winter["src"] ?>>
            <div class="card-img-overlay">
                <h5 class="card-title"><?php echo $winter["name"] ?></h5>
                <p class="card-text"><?php echo $winter["price"] ?> €</p>
            </div>
        </div>

    </div>
</body>

<?php include "footer.php"; ?>