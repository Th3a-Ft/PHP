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


function totalWeight($productWeight, $quantity)
{
    $totalWeight = $productWeight * $quantity;
    return $totalWeight;
}


function transportFees($totalWeight, $totalOrder)
{
    if ($totalWeight <= 500) {
        echo "Frais de port de 5€";
        return $totalOrder = $totalOrder + 500;
    } else if ($totalWeight > 500 && $totalWeight <= 2000) {
        echo "Frais de port de " . formatPrice($totalOrder * 0.10);
        return $totalOrder = $totalOrder * 1.10;
    } else {
        echo "Frais de port offerts";
        return $totalOrder;
    }
}


