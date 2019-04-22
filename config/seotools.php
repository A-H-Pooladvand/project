<?php

return [
    'meta' => [
        'defaults' => [
            'title' => config('app.name'), // set false to total remove
            'description' => config('app.locale') === 'en' ? 'Main page' : 'صفحه اصلی', // set false to total remove
            'separator' => ' - ',
            'keywords' => [],
            'canonical' => null, // Set null for using Url::current(), set false to total remove
            'robots' => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],

        'webmaster_tags' => [
            'google' => null,
            'bing' => null,
            'alexa' => null,
            'pinterest' => null,
            'yandex' => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title' => config('app.name'), // set false to total remove
            'description' => config('app.locale') === 'en' ? 'Main page' : 'صفحه اصلی', // set false to total remove
            'url' => null, // Set null for using Url::current(), set false to total remove
            'type' => false,
            'site_name' => false,
            'images' => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
];
