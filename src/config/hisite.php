<?php

/*
 * Stock Module for Hipanel
 *
 * @link      https://github.com/hiqdev/hipanel-module-stock
 * @package   hipanel-module-stock
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'aliases' => [
        '@model'    => '/stock/model',
        '@part'     => '/stock/part',
        '@move'     => '/stock/move',
        '@hwconfig' => '/stock/hwconfig',
    ],
    'modules' => [
        'stock' => [
            'class' => \hipanel\modules\stock\Module::class,
        ],
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                'hipanel/stock*' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/modules/stock/messages',
                    'fileMap' => [
                        'hipanel/stock' => 'stock.php',
                        'hipanel/stock/model-types' => 'model-types.php',
                    ],
                ],
            ],
        ],
        'menuManager' => [
            'menus' => [
                'stock' => \hipanel\modules\stock\SidebarMenu::class,
            ],
        ],
    ],
];