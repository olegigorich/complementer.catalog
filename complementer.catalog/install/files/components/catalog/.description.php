<?
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = [
    'NAME' => Loc::getMessage('COMPONENT_NAME'),
    'DESCRIPTION' => Loc::getMessage('COMPONENT_DESCRIPTION'),
    'COMPLEX' => 'Y',
    'PATH' => [
        'ID' => 'complementer.catalog', 
        'NAME' => Loc::getMessage('MODULE_NAME'),
	],
];