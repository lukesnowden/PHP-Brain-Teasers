<?php
function solution($string) {

    // Get the first letter
    $frst = substr($string, 0, 1);

    // Set the first letter to upper
    $frstUpper = strtoupper($frst);

    // Compare and return
    return ($frst === $frstUpper);

}