<?php

/**
 * Debugger une variable
 * @param mixed $var La variable a afficher
 * @param bool $die Arrêter l'execution
 */
function debug($var, bool $die = true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die) {
        die;
    }
}

function getHeader(string $title, string $filename = "header.php") {
    require_once 'layout/' . $filename;
}

function getFooter() {
    require_once 'layout/footer.php';
}

function getMenu() {
    require_once 'layout/menu.php';
}
