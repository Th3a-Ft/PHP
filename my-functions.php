<?php

declare(strict_types=1);

function formatPrice(float $price)
{
    $price = number_format(($price / 100), 2, ",", " ");
    return $price . " € " . priceExcludingVAT($price);
    //return $price . " € " . priceExcludingVAT($price);
};

function priceExcludingVAT($price)
{
    return "(" . number_format($price / 1.2, 2, ",") . "€ HT)";
    //return "(" . $price / 1.2 . "€ HT)";
    
}


function discountedPrice($price, $discount)
{
    $discount = $price * ($discount / 100);
    
    return "Prix après réduction : " . number_format($price - $discount, 2, ",") . " €";
    //return "Prix après réduction : " . $price - $discount . " €";
}



//echo discountedPrice(10,50)
