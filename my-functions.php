<?php


function formatPrice(int $price)
{
    $price = $price / 100;
    //number_format = création d'une chaine de caract
    return number_format($price, 2, ",") . " € ";
};

function priceExcludingVAT($priceTTC)
{
    $priceHT = $priceTTC / 1.2;
    return (string) formatPrice($priceHT);
}


function discountedPrice($price, $discount)
{    
    $discount = $price * ($discount / 100);
    //var_dump($price, $discount);
    //return formatPrice($price - $discount);
    return $price - $discount;
}


function totalCost($price, $quantity)
{
   // var_dump($price, $quantity);
    $cost = $price * $quantity;
    return $cost;
}

//var_dump (totalCost(1000, 5));
//echo discountedPrice(5000,10);
//var_dump(discountedPrice(5000,10));
