<?php

defined('B_PROLOG_INCLUDED') || die;

/**
 * @var array  $arResult
 * @var CMain  $APPLICATION
 * @var array  $arParams
 * @var object $component 
 */

$APPLICATION->IncludeComponent(
    'complementer.catalog:catalog.list',
    '.default',
    [
        ... $arResult['COMPONENT_PARAMS'],
    ],
    $component
);
