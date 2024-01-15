<?php

require_once __DIR__ . '/Modules/Product.php';

$products = [
    new product(
        "Crocchette Schesir",
        "Crocchette per cani",
        new category ("Cane"),
        30,
    ),

    new product(
        "Cibo in scatola Purina",
        "Cibo in scatola per gatti",
        new category ("Gatto"),
        2,
    ),

    new product(
        "Topolino",
        "Topolino attaccato ad un bastone",
        new category ("Gatto"),
        4,
    ),
    
];