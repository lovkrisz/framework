<?php

return [
    'number' => [
        'generator' => 'time_hash', //possible values: time_hash, sequential_number
        'sequential_number' => [
            'start_sequence_from' => 1,
            'prefix'              => '',
            'pad_length'          => 1,
            'pad_string'          => '0'
        ],
        'time_hash' => [
            'high_variance' => false
        ]
    ]
];

