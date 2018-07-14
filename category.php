<?php
$categories = [
    'currency' => [
        'parent' => 'root',
        'name' => 'Currency'
    ],
    'gamecards' => [
        'parent' => 'root',
        'name' => 'Keys gamecards'
    ],
    'battle_net' => [
        'parent' => 'gamecards',
        'name' => 'Battle.net'
    ],
    'bethesda_net' => [
        'parent' => 'gamecards',
        'name' => 'Bethesda.net'
    ],
    'gog_com' => [
        'parent' => 'gamecards',
        'name' => 'GOG.com'
    ],
    'itunes' => [
        'parent' => 'gamecards',
        'name' => 'iTunes'
    ],
    'origin' => [
        'parent' => 'gamecards',
        'name' => 'Origin'
    ],
    'psn' => [
        'parent' => 'gamecards',
        'name' => 'PSN'
    ],
    'rockstar' => [
        'parent' => 'gamecards',
        'name' => 'Rockstar Social Club'
    ],
    'steam' => [
        'parent' => 'gamecards',
        'name' => 'Steam'
    ],
    'switch' => [
        'parent' => 'gamecards',
        'name' => 'Switch'
    ],
    'ubi_com' => [
        'parent' => 'gamecards',
        'name' => 'Ubi.com'
    ],
    'uplay' => [
        'parent' => 'gamecards',
        'name' => 'Uplay'
    ],
    'windows_store' => [
        'parent' => 'gamecards',
        'name' => 'Windows store'
    ],
    'xbox_live' => [
        'parent' => 'gamecards',
        'name' => 'Xbox live'
    ],
    'also' => [
        'parent' => 'gamecards',
        'name' => 'Also'
    ],
    'top_up' => [
        'parent' => 'root',
        'name' => 'Top up'
    ],
    'accounts' => [
        'parent' => 'root',
        'name' => 'Accounts'
    ]
];

$fp = fopen('csv/category.csv', 'w');

foreach ($categories as $fields) {
    fputcsv($fp, $fields);
}