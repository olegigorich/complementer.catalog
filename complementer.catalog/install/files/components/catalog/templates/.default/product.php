<?php

defined('B_PROLOG_INCLUDED') || die;

/**
 * @var array $arResult
 * @var CMain $APPLICATION
 */

if ((isset($_REQUEST['IFRAME']) && $_REQUEST['IFRAME'] == 'Y') ||
    (isset($arResult['COMPONENT_PARAMS']['IFRAME']) && $arResult['COMPONENT_PARAMS']['IFRAME'])
) {
    $APPLICATION->IncludeComponent(
        'bitrix:ui.sidepanel.wrapper',
        '.default',
        [
            'POPUP_COMPONENT_NAME' => 'complementer.catalog:catalog.detail',
            'POPUP_COMPONENT_TEMPLATE_NAME' => '.default',
            'POPUP_COMPONENT_PARAMS' => [
                ...$arResult['COMPONENT_PARAMS'],
            ],
            'USE_UI_TOOLBAR' => 'Y',
            'PAGE_MODE' => false,
            'RELOAD_PAGE_AFTER_SAVE' => false,
            'PAGE_MODE_OFF_BACK_URL' => $arResult['COMPONENT_PARAMS']['CATALOG_ROOT']
        ]
    );
} else {
    $APPLICATION->IncludeComponent(
        'complementer.catalog:catalog.detail',
        '.default',
        [
            ...$arResult['COMPONENT_PARAMS'],
        ],
        $component
    );
}
