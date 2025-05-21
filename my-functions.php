<?php
declare(strict_types=1);

function formatPrice(float $price) : float {
 return (float)($price/100);

};

echo formatPrice(1050) . " €";



?>