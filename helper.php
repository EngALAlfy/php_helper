<?php

/*
* Dump php vars to page
* @param $vars
*/
function dd(...$vars) {
    echo '<pre style="background-color: #f5f5f5; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 20px; font-family: monospace;">';
    foreach ($vars as $varValue) {
        $type = gettype($varValue);
        echo '<span style="color: #888; font-size: 80%;">(' . $type . ')</span><br>';
        echo '<code>';
        print_r($varValue);
        echo '</code><br>';
    }
    echo '</pre>';
    die;
}