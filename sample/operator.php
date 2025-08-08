<?php


function coinDeduction($value)
{
    $get_coin = file_get_contents("coins");
    file_put_contents("coins", $get_coin - $value);
}

function coinIncrease($value)
{
    $get_coin = file_get_contents("coins");
    file_put_contents("coins", $get_coin + $value);
}

function A()
{
    coinIncrease("5");
}

function B()
{
    coinDeduction("5");
}

include "../api.php";
