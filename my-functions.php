<?php


function formatPrice(int $price)
{
    $price = $price / 100;
    return number_format($price, 2, ",") . " € ";
};

function priceExcludingVAT($priceTTC)
{
    $priceHT = $priceTTC / 1.2;
    return (string) formatPrice($priceHT) . "HT)";
}


function discountedPrice($price, $discount)
{
    $discount = $price * ($discount / 100);
    return formatPrice($price - $discount);
}

function totalCost($price, $quantity)
{
    $cost = $price * $quantity;
    return formatPrice($cost);
}

//echo totalCost(1000, 5, 0);
