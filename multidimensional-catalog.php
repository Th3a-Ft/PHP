<?php

$hpage = "Multidimensional Catalog";
include "header.php";


$products = [
    "basket" => [
        "name" => "Nike Red Edition",
        "price" => 149,
        "color" => "red",
        "discount" => 10,
        "src" => "https://cdn.pixabay.com/photo/2015/10/29/01/24/shoes-1011596_960_720.jpg",
    ],
    "summer" => [
        "name" => "Nike Summer Edition",
        "price" => 125,
        "color" => "blue and black",
        "discount" => 15,
        "src" => "https://cdn.pixabay.com/photo/2020/04/09/08/38/nike-5020363_960_720.jpg",
    ],
    "winter" => [
        "name" => "Nike Winter Edition",
        "price" => 95,
        "color" => "blue, white and pink",
        "discount" => 15,
        "src" => "https://cdn.pixabay.com/photo/2020/04/14/09/53/nike-5041716_960_720.jpg",
    ],
]; 


/* foreach ($products as $i =>$j){
    echo $j["name"];
}; */

?>

<body>
<div class="pres_catalogue">
       
        <?php foreach ($products as $i =>$j){
            echo "
        <div class='card mb-3'>
            <div class='row g-0'>
                <div class='col-md-4'>
                    <img src=" . $j["src"] . "class='img-fluid rounded-start' >
                </div>
                <div class='col-md-8'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $j["name"] . "</h5>
                        <p class='card-text'>Réduction exceptionnelle de " . $j["discount"] . "%</p>
                        <p class='card-text'><small class='text-body-secondary'><?php echo" . $j["price"] . "€</small></p>
                    </div>
                </div>
            </div>
        </div>";


        }?>



<!--          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src=<?php echo $products["summer"]["src"] ?> class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $products["summer"]["name"] ?></h5>
                        <p class="card-text">Réduction exceptionnelle de <?php echo $products["summer"]["discount"] ?>%</p>
                        <p class="card-text"><small class="text-body-secondary"><?php echo $products["summer"]["price"] ?>€</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src=<?php echo $products["winter"]["src"] ?> class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $products["winter"]["name"] ?></h5>
                        <p class="card-text">Réduction exceptionnelle de <?php echo $products["winter"]["discount"] ?>%</p>
                        <p class="card-text"><small class="text-body-secondary"><?php echo $products["winter"]["price"] ?>€</small></p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>




</body>










<?php include "footer.php"; ?>