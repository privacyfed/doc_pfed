<?php

declare(strict_types=1);

return [
    'Installazione' => [
        'url' => 'docs/installation',
        'children' => [
            'Aggiornare il progetto' => 'docs/update-project',
            'Moduli' => 'docs/modules',
            'Configurazione' => 'docs/configuration',
        ],
    ],
    'Pagine' => [
        'children' => [
            'Registrazione' => 'docs/signup',
            'Profilo' => 'docs/profile',
            'I Miei Servizi' => 'docs/services',
        ],
    ],
    'Servizi' => [
        'Creazione' => 'service/create',
    ],

    // 'Base' => [
    //     // 'url' => 'docs/base',
    //     'children' => [
    //         'Customizing Your Site' => 'docs/customizing-your-site',
    //         'Navigation' => 'docs/navigation',
    //         'Algolia DocSearch' => 'docs/algolia-docsearch',
    //         'Custom 404 Page' => 'docs/custom-404-page',
    //     ],
    // ],
    // 'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
];
