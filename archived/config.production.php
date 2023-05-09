<?php

declare(strict_types=1);

return [
    'baseUrl' => 'https://privacyfed.github.io/doc_pfed/',
    'production' => true,

    // DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),
];
