<?php
return [
    'quantifier' => [
        'browserLanguage' => [
            'totalMatch' => 7,
            'wildCardMatch' => 3
        ],
        'countryBasedOnIp' => [
            'totalMatch' => 13,
            'wildCardMatch' => 5
        ],
        'actions' => [
            'referrers' => [
                'totalMatch' => 7,
                'wildCardMatch' => 3,
            ]
        ]
    ],
    'actions' => [
        [
            'referrers' => [
                'google.',
                'bing.',
                'yahoo.',
                't-online.',
                'yandex.',
                'baidu.',
                'links.playground.localhost.de',
            ],
            'events' => [
                'redirect'
            ]
        ],
        [
            'referrers' => [
                '*'
            ],
            'events' => [
                'redirect'
            ]
        ],
        [
            // Disable redirect for pages inside the given pid
            'pidInRootline' => [
                '1041',
            ],
            'events' => [
                'none',
            ],
        ],
    ],
    'noMatchingConfiguration' => [
        'identifierUsage' => '',
        'matchMinQuantifier' => 15 // dont touch it
    ],
    'redirectConfiguration' => [
        // this number means: pid
        
        // USA, South America
        915 => [
            0 => [
                'identifier' => 'america_english',
                'browserLanguage' => [
                    '*'
                ],
                'countryBasedOnIp' => [
                    
                    'us',
                    
                ]
            ],
        ],

        
    ]
];
