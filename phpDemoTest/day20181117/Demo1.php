<?php
/**
 * Created by PhpStorm.
 * User: leixu
 * Date: 2018/11/27
 * Time: 23:04
 */

    echo "Hello World! <br/>";

    $numId = 11;

    echo $numId, "<br/>";

    $a = 10;

    $b = $a;

    echo $a, "<br/>";

    echo $b, "<br/>";

    $addressOne = 15;

    $addRessTwo = &$addressOne;

    echo $addressOne, "<br/>";

    echo $addRessTwo, "<br/>";

    $addRessTwo = 16;

    echo $addressOne, "<br/>";

    echo $addRessTwo, "<br/>";

?>