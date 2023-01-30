<?php

function winkelwagen_result()
{
    if(isset($_COOKIE['winkelwagen']))
    {
        return $_COOKIE['winkelwagen'];
    }
    else
    {
        return 0;
    }
}

function elias_berekeningen()
{
    $result_q1
    if($result_q1 == 1)
    {
        $f1 = 0;
    }
    else if($result_q1 == 2)
    {
        $f1 = 350;
    }
    else if($result_q1 == 3)
    {
        $f1 = 1050;
    }
    else if($result_q1 == 4)
    {
        $f1 = 1750;
    }

    $result_q2 = $_COOKIE['q2']
    if($result_q2 == 1)
    {
        $f2 = 0;
    }
    else if($result_q2 == 2)
    {
        $f2 = 213.75;
    }
    else if($result_q2 == 3)
    {
        $f2 = 356.25;
    }
    else if($result_q2 == 4)
    {
        $f2 = 498.75;
    }

    $result_q3 = $_COOKIE['q3'];
    if($result_q3 == 1)
    {
        $f3 = 1882.1;
    }
    else if($result_q3 == 2)
    {
        $f3 = 811.25;
    }
    else if($result_q3 == 3)
    {
        $f3 = 1135.75;
    }
    else if($result_q3 == 4)
    {
        $f3 = 1460.25;
    }
    else if($result_q3 == 5)
    {
        $f3 = 1784.75;
    }
    else if($result_q3 == 6)
    {
        $f3 = 2109.25;
    }
    else if($result_q3 == 7)
    {
        $f3 = 2433.75;
    }
    else if($result_q3 == 8)
    {
        $f3 = 2758.25;
    }

    $result_q4 = $_COOKIE['q4'];
    if($result_q4 == 1) {
        $f4 = 1500;
    } else if($result_q4 == 2) {
        $f4 = 6000;
    } else if($result_q4 == 3) {
        $f4 = 12000;
    } else if($result_q4 == 4) {
        $f4 = 18000;
    }

    $result_q5
    if($result_q5 == 1)
    {
        $f5 = 0;
    }
    else if($result_q5 == 2)
    {
        $f5 = 21.9;
    }
    else if($result_q5 == 3)
    {
        $f5 = 43.8;
    }
    else if($result_q5 == 4)
    {
        $f5 = 65.7;
    }
    else if($result_q5 == 5)
    {
        $f5 = 87.6;
    }
    else if($result_q5 == 6)
    {
        $f5 = 164.25;
    }

    return $f1 + $f2 + $f3 + $f4 + $f5;
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
    $quizresult = elias_berekeningen();
    // calc from food; foodsum to be determined.
    $food_emmission = winkelwagen_result();

    $result = $food_emmission + $quizresult;

    return $result;
}

?>
