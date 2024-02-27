<?php

// $Numero = 89;

// $Numero2 = 8.5;

// $testo = 'ciao';

// $booleano = true;

// var_dump($Numero ." ". $Numero2 ." ". $testo ." ". $booleano);


// const Numero = 89;

// const Numero2 = 8.5;

// const testo = 'ciao';

// const booleano = true;


// traccia 2

// $1text = "Marco";
// $text2 = "hai";
// $text.3 = "sete";
// $text4 = "?";
// @text5 = "Perchè";
// $te-xt6 = '$text2';
// $text 7 = 'bevuto';
// $text8 = "tutto"

// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $te_xt6 = 'hai';
// $text7 = 'bevuto';
// $text8 = "tutto";

// echo $text1 . " " . $text2 . " " . $text3 . " " . $text4 . " " . $text5 . " " . $te_xt6 . " " . $text7 . " " . $text8



$words1 = ['una',67,'vita','colle','mi', 'rosso',
         ['oscura','era', 89,
         [ 'mezzo',
         ['cammin',  'Nel',
         ['selva','la',
        ['via','una',true, ] ], ] ],
    'ritrovai',
    'per'
    ],
    'diritta'
    ];
    $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
    ]
    ];

    $words3 = ['di'];

    //Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che la diritta via era smarrita


    $result = $words1[6][3][1][1] . " " . $words1[6][3][0] . " " . $words3[0] . " " . $words1[6][3][1][0] . " " . $words3[0] . " " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words1[0] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . ", " . $words2['elemento3'][2] . " " . $words1[6][3][1][2][1] . " " . $words1[7] . " " . $words1[6][3][1][2][2][0] ." " . $words1[6][1] ." " . $words2['elemento3'][1];

    echo $result;

    




















?>