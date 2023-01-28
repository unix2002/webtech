<?php

function result_footprint()
{
    $result = 0;

    // calc from fuel; multiplier is a placeholder
    $fuel_emmission = $_COOKIE['q3'] * 10;

    // calc from gas & electricity; multiplier is a placeholder
    $power_emmission = ($_COOKIE['q4'] * 20) + ($_COOKIE['q5'] * 20);

    // calc from food; foodsum to be determined.
    $food_emmission = $_COOKIE['food_sum'];

    $result = $food_emmission + $fuel_emmission + $power_emmission;

    return $result;
}

?>