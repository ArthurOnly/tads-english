<?php

$names_pt = ['X BURGUER', 'X BACON', 'X QUEIJO', 'X ALFACE', 'X TOMATE', 'X PORCO', 'X PARMESÃO'];
$names_en = ['X BURGUER', 'X BACON', 'X CHEESE', 'X LETTUCE', 'X TOMATO', 'X PORK', 'X PARMESAN'];

$prices_pt = ['15,00', '20,00', '18,00', '17,00', '13,00', '30,00', '24,00'];
$prices_en = ['2,00', '3,00', '2,50', '2,00', '1,50', '5,00', '4,00'];

$descriptions_pt = ['Burguer de carne de porco, queijo, alface, tomate, bacon e queijo parmesão.', 'Burguer de carne, tomate, alface, bacon e queijo parmesão.', 'Burguer de carne, queijo, tomate, bacon e queijo parmesão.', 'Burguer de carne, queijo, alface, bacon e queijo parmesão.', 'Burguer de carne, queijo, tomate, bacon e queijo parmesão.', 'Burguer de carne de porco, queijo, alface, tomate, bacon e queijo parmesão.', 'Burguer de carne de porco, queijo, alface, tomate, bacon e queijo parmesão.'];
$description_en = ['Burguer of pork meat, cheese, lettuce, tomato, bacon and parmesan cheese.', 'Burguer of meat, tomato, lettuce, bacon and parmesan cheese.', 'Burguer of meat, cheese, tomato, bacon and parmesan cheese.', 'Burguer of meat, cheese, lettuce, bacon and parmesan cheese.', 'Burguer of meat, cheese, tomato, bacon and parmesan cheese.', 'Burguer of pork meat, cheese, lettuce, tomato, bacon and parmesan cheese.', 'Burguer of pork meat, cheese, lettuce, tomato, bacon and parmesan cheese.'];

function generateProduct() {
    return [
        'portuguese' => [
            'name' => $GLOBALS['names_pt'][rand(0, count($GLOBALS['names_pt']) - 1)],
            'price' => $GLOBALS['prices_pt'][rand(0, count($GLOBALS['prices_pt']) - 1)],
            'priceSim' => 'R$',
            'description' => $GLOBALS['descriptions_pt'][rand(0, count($GLOBALS['descriptions_pt']) - 1)],
        ], 'english' => [
            'name' => $GLOBALS['names_en'][rand(0, count($GLOBALS['names_en']) - 1)],
            'price' => $GLOBALS['prices_en'][rand(0, count($GLOBALS['prices_en']) - 1)],
            'priceSim' => '$',
            'description' => $GLOBALS['description_en'][rand(0, count($GLOBALS['description_en']) - 1)],
        ]
    ];
}