<?php
// return [
//     [
//     'pattern' => 'products/<categories:.*>',
//     'route' => 'product/category',
//     'encodeParams' => false,
//     ],
// ];
return [
    '<controller:\w+>/<id:\d+>' => '<controller>/view',
    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    [
        'pattern' => 'products/<categories:.*>',
        'route' => 'product/category',
        'encodeParams' => false,
    ],
];
