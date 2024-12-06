<?

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = [
    'PARAMETERS' => [
        'SEF_MODE' => [
            'brand' => [
                'NAME' => Loc::getMessage('PATTERN_PATH_MODELS'),
                'DEFAULT' => '#BRAND#/',
                'VARIABLES' => [
                    'BRAND',
                ],
            ],
            'model' => [
                'NAME' => Loc::getMessage('PATTERN_PATH_PRODUCTS'),
                'DEFAULT' => '#BRAND#/#MODEL#/',
                'VARIABLES' => [
                    'BRAND',
                    'MODEL',
                ],
            ],
            'product' => [
                'NAME' => Loc::getMessage('PATTERN_PATH_PRODUCT_DETAIL'),
                'DEFAULT' => 'detail/#NOTEBOOK#/',
                'VARIABLES' => [
                    'NOTEBOOK',
                ],
            ],
        ],
    ],
];
