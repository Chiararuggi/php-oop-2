<?php

require_once __DIR__ . '/Modules/Product.php';

$products = [
    new product(
        "Crocchette",
        "Crocchette per cani",
        ["Cani", "Cibo"],
        19,
    ),

    new product(
        "Cibo in scatola",
        "Cibo in scatola per gatti",
        ["Gatti", "Cibo"],
        30,
    ),
    
];