<?php

/**
 * @see       https://github.com/laminas/laminas-i18n for the canonical source repository
 * @copyright https://github.com/laminas/laminas-i18n/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-i18n/blob/master/LICENSE.md New BSD License
 */

return [
    'code' => '351',
    'patterns' => [
        'national' => [
            'general' => '/^[2-46-9]\\d{8}$/',
            'fixed' => '/^2(?:[12]\\d|[35][1-689]|4[1-59]|6[1-35689]|7[1-9]|8[1-69]|9[1256])\\d{6}$/',
            'mobile' => '/^9(?:[136]\\d{2}|2[0-79]\\d|480)\\d{5}$/',
            'tollfree' => '/^80[02]\\d{6}$/',
            'premium' => '/^76(?:0[1-57]|1[2-47]|2[237])\\d{5}$/',
            'shared' => '/^80(?:8\\d|9[1579])\\d{5}$/',
            'personal' => '/^884[128]\\d{5}$/',
            'voip' => '/^30\\d{7}$/',
            'uan' => '/^70(?:7\\d|8[17])\\d{5}$/',
            'emergency' => '/^112$/',
        ],
        'possible' => [
            'general' => '/^\\d{9}$/',
            'emergency' => '/^\\d{3}$/',
        ],
    ],
];
