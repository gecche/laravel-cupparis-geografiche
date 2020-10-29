<?php


/*
 * 'model' => <MODELNAME>
 * <FORMNAME> =>  [ //nome del form da route
 *      type => <FORMTYPE>, //tipo di form (opzionale se non c'è viene utilizzato il nome)
 *              //search, list, edit, insert, view, csv, pdf
 *      fields => [ //i campi del modello principale
 *          <FIELDNAME> => [
 *              'default' => <DEFAULTVALUE> //valore di default del campo (null se non presente)
 *              'options' => array|relation:<RELATIONNAME>:<COLUMNS>|dboptions|boolean
 *                          //le opzioni possibili di un campo, prese da un array associativo,
 *                              da una relazione (gli id del modello correlato
 *                              con <COLUMNS> serie di campi separati da virgola da inviare,
 *                              dal database (enum ecc...)
 *                              booleano
 *              'nulloption' => true|false|onchoice //onchoice indica che l'opzione nullable è presente solo se i valori
 *                                  delle options sono più di uno; default: true,
 *          ]
 *      ],
 *      relations => [ // le relazioni del modello principale
 *          <RELATIONNAME> => [
 *              fields => [ //i campi del modello principale
 *                  <FIELDNAME> => [
 *                      'default' => <DEFAULTVALUE> //valore di default del campo (null se non presente)
 *                      'options' => array|relation:<RELATIONNAME>|dboptions|boolean
 *                          //le opzioni possibili di un campo, prese da un array associativo,
 *                              da una relazione (gli id del modello correlato,
 *                              dal database (enum ecc...)
 *                              booleano
 *                      'nulloption' => true|false|onchoice //onchoice indica che l'opzione nullable è presente solo se i valori
 *                                    delle options sono più di uno; default: true,
 *                  ]
 *              ],
 *              savetype => [ //metodo di salvataggio della relazione
 *                              (in caso di edit/insert) da definire meglio
 *              ]
 *          ]
 *      ],
 *      params => [ // altri parametri opzionali
 *
 *      ],
 * ]
 */

return [

    'search' => [
        'model' => 'cup_geo_comuni_istat',
        'models_namespace' => "App\\DatafileModels\\",
    ],
    'list' => [
        'model' => 'cup_geo_comuni_istat',
        'models_namespace' => "App\\DatafileModels\\",

        'pagination' => [
            'per_page' => 20,
            'pagination_steps' => [10, 25, 50, 300],
        ],

        'fields' => [

            'codice_istat' => [],
            'comune' => [],
            'cap' => [],
            'prefisso' => [],
            'lat' => [],
            'lng' => [],


        ],
        'relations' => [
            'errors' => [
                'fields' => [
                    'id' => [

                    ],
                    'field_name' => [
                    ],
                    'error_name' => [
                    ],
                    'row' => [
                    ],
                    'type' => [
                    ],
                    'value' => [
                    ],
                    'param' => [
                    ],
                ],

            ],
        ],
        'params' => [

        ],
    ],
    'edit' => [
        'model' => 'cup_geo_comuni_istat',
        'models_namespace' => "App\\DatafileModels\\",
        "actions" => [
            'uploadfile' => [
                'allowed_fields' => [
                    'resource',
                ],
                'fields' => [
                    'resource' => [
                        'resource_type' => 'attachment',
                    ],
                ],
            ],
        ],
        'fields' => [
            'id' => [

            ],
            'resource' => [
                'resource_type' => 'attachment',
            ]

//            'username' => [
//                //'default' => 'user'
//            ],
//            'cliente_id' => [
//                'nullable' => true,
//                'options' => 'relation:cliente',
//            ],
//            'attivo' => [
//                'options' => 'boolean',
//            ],
        ],
//        'relations' => [
//            'tickets' => [
//                'fields' => [
//                    'id' => [
//
//                    ],
//                    'codice' => [
//                        'nullable' => true,
//                        'options' => 'relation:cliente',
//                        //'default' => 'pippo',
//                    ],
//                    'descrizione' => [
//
//                    ],
//                ],
//
//            ],
//        ],
        'params' => [

        ],
    ],
//    'insert' => [
//
//    ],

];
