<?php

function winkelwagen_result()
{

}

function berekening_joseph()
{
    $var
    $d;
    // kg uitstoot pp per jaar
    $uitstoot_pp;
    // opname per gha per jaar
    $opname;
    // ecologische voetafdruk ingha pp per jaar
    $afdruk;
    $uitstoot_pp = $var + ((365 * $uitstoot_pp) / $d)
}

function result_footprint()
{
    $result = 0;

    // calc from fuel; multiplier is a placeholder
//    $fuel_emmission = $_COOKIE['q3'] * 10;
    $fuel_emmission = 5;
    // calc from gas & electricity; multiplier is a placeholder
//    $power_emmission = ($_COOKIE['q4'] * 20) + ($_COOKIE['q5'] * 20);
    $power_emmission = 10;
    // calc from food; foodsum to be determined.
//    $food_emmission = $_COOKIE['food_sum'];
    $food_emmission = 0;

    $result = $food_emmission + $fuel_emmission + $power_emmission;

    return $result;
}

?>
