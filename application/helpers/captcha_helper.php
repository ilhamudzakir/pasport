<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function randomCaptcha($length) {
    $alphabet = "56789abcdefghijklABCDEFGHIJKL1234mnpqrstuwxyzMNPQRSTUWXYZ56789";
    $alphabet .= $alphabet.$alphabet;
    $captcha = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, $alphaLength-1);
        $captcha[] = $alphabet[$n];
    }
    return implode($captcha); //turn the array into a string
}