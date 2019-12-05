<?php

use Arcanedev\LogViewer\Contracts\Utilities\Filesystem;

return [

    /* -----------------------------------------------------------------
     |  Log files storage path
     | -----------------------------------------------------------------
     */

    'storage-path'  => storage_path('logs'),

    /* -----------------------------------------------------------------
     |  Log files pattern
     | -----------------------------------------------------------------
     */

    'pattern'       => [
        'prefix'    => Filesystem::PATTERN_PREFIX,    // 'laravel-'
        'date'      => Filesystem::PATTERN_DATE,      // '[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]'
        'extension' => Filesystem::PATTERN_EXTENSION, // '.log'
    ],

    /* -----------------------------------------------------------------
     |  Locale
     | -----------------------------------------------------------------
     |  Supported locales :
     |    'auto', 'ar', 'bg', 'de', 'en', 'es', 'et', 'fa', 'fr', 'hu', 'hy', 'id', 'it', 'ja', 'ko', 'nl',
     |    'pl', 'pt-BR', 'ro', 'ru', 'sv', 'th', 'tr', 'zh-TW', 'zh'
     */

    'locale'        => 'auto',

    /* -----------------------------------------------------------------
     |  Route settings
     | -----------------------------------------------------------------
     */

    'route'         => [
        'enabled'    => false,

        'attributes' => [
            'prefix'     => 'admin/log-viewer',

            'middleware' => env('ARCANEDEV_LOGVIEWER_MIDDLEWARE') ? explode(',', env('ARCANEDEV_LOGVIEWER_MIDDLEWARE')) : 'admin',
        ],
    ],

    /* -----------------------------------------------------------------
     |  Log entries per page
     | -----------------------------------------------------------------
     |  This defines how many log entries are displayed per page.
     */

    'per-page'      => 10,


    /* -----------------------------------------------------------------
     |  LogViewer's Facade
     | -----------------------------------------------------------------
     */

    'facade'        => 'LogViewer',

    /* -----------------------------------------------------------------
     |  Download settings
     | -----------------------------------------------------------------
     */

    'download'      => [
        'prefix'    => 'laravel-',

        'extension' => 'log',
    ],

    /* -----------------------------------------------------------------
     |  Menu settings
     | -----------------------------------------------------------------
     */

    'menu'  => [
        'filter-route'  => 'log-viewer::logs.filter',

        'icons-enabled' => true,
    ],

    /* -----------------------------------------------------------------
     |  Icons
     | -----------------------------------------------------------------
     */

    'icons' =>  [
        /**
         * Font awesome >= 4.3
         * http://fontawesome.io/icons/
         */
        'all'       => 'fa fa-fw fa-list',                 // http://fontawesome.io/icon/list/
        'emergency' => 'fa fa-fw fa-bug',                  // http://fontawesome.io/icon/bug/
        'alert'     => 'fa fa-fw fa-bullhorn',             // http://fontawesome.io/icon/bullhorn/
        'critical'  => 'fa fa-fw fa-heartbeat',            // http://fontawesome.io/icon/heartbeat/
        'error'     => 'fa fa-fw fa-times-circle',         // http://fontawesome.io/icon/times-circle/
        'warning'   => 'fa fa-fw fa-exclamation-triangle', // http://fontawesome.io/icon/exclamation-triangle/
        'notice'    => 'fa fa-fw fa-exclamation-circle',   // http://fontawesome.io/icon/exclamation-circle/
        'info'      => 'fa fa-fw fa-info-circle',          // http://fontawesome.io/icon/info-circle/
        'debug'     => 'fa fa-fw fa-life-ring',            // http://fontawesome.io/icon/life-ring/
    ],

    /* -----------------------------------------------------------------
     |  Colors
     | -----------------------------------------------------------------
     */

    'colors' =>  [
        'levels'    => [
            'empty'     => '#D1D1D1',
            'all'       => '#1DA1F2',
            'emergency' => '#DA2723',
            'alert'     => '#D32F2F',
            'critical'  => '#D54B3D',
            'error'     => '#EF6F6C',
            'warning'   => '#F89A14',
            'notice'    => '#418bca',
            'info'      => '#67C5DF',
            'debug'     => '#90CAF9',
        ],
    ],

    /* -----------------------------------------------------------------
     |  Strings to highlight in stack trace
     | -----------------------------------------------------------------
     */

    'highlight' => [
        '^#\d+',
        '^Stack trace:',
    ],

];
