<?php

$array = [
    'firstname' => 'Nasim',
    'lastname' => 'Rahaman',
    'movies' => [
        'name' => 'The Dark Knight',
        'price' => '$ 4.95',
        'rating' => 'PG-13',
        'score' => 9,
        'another one' => [
            'name2' => 'Intersteller',
            'price2' => '$ 14.99',
            'rating2' => 'PG-13',
            'score2' => 8.6
        ]
    ],
    'planet' => [
        'P-name' => 'Mars',
        'gravity' => '3.71 m/s²',
        'legnth of day' => '1d 0h 37m',
        'orbital period' => 687
    ]
];
echo $array['firstname'], ' ', $array['lastname'], '<br/><br/>';
echo $array['movies']['name'], ' || ', $array['movies']['price'], ' || ', $array['movies']['rating'], ' || ', $array['movies']['score'], '<br/><br/>';
echo $array['movies']['another one']['name2'], ' || ', $array['movies']['another one']['price2'], ' || ', $array['movies']['another one']['rating2'], ' || ', $array['movies']['another one']['score2'], '<br/><br/>';
echo $array['planet']['P-name'], ' || ', $array['planet']['gravity'], ' || ', $array['planet']['legnth of day'], ' || ', $array['planet']['orbital period'], '<br/><br/>';