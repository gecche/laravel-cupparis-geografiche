<?php


return [

    'delete' => [

    ],

    'search' => [
        "fields" => [
            "descrizione" => []
        ]
    ],
    'list' => [

        'allowed_actions' => [

        ],

        'actions' => [
//            'set' => [
//                'allowed_fields' => [
//                    'banned',
//                    'email_verified_at',
//                ],
//            ],
        ],

        'dependencies' => [
//            'search' => 'search',
        ],

        'pagination' => [
            //'per_page' => 20,
            'pagination_steps' => [10, 20, 50],
        ],

        'fields' => [
            "id" => [

            ],
            "codice" => [

            ],
            "descrizione" => [

            ]
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],
    'list_csv_export' => [

        'allowed_actions' => [

        ],

        'actions' => [
//            'set' => [
//                'allowed_fields' => [
//                    'banned',
//                    'email_verified_at',
//                ],
//            ],
        ],

        'dependencies' => [
//            'search' => 'search',
        ],

        'pagination' => [
            //'per_page' => 20,
            'pagination_steps' => [10, 20, 50],
        ],

        'fields' => [
            "id" => [

            ],
            "codice" => [

            ],
            "descrizione" => [

            ]
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],

    'edit' => [
        'fields' => [
            'id' => [

            ],
            "codice" => [

            ],
            "descrizione" => [

            ]
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],
//    'insert' => [
//
//    ],

];
