<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\UI\Toolbar\Facade\Toolbar;

defined('B_PROLOG_INCLUDED') || die;

/**
 * @var CMain $APPLICATION
 * @var array $arResult
 */

Loc::loadLanguageFile('/local/modules/complementer.catalog/lib/catalogcursor.php');

$APPLICATION->SetTitle(Loc::getMessage('CATALOG_PAGE_TITLE'));

Toolbar::deleteFavoriteStar();
?>
<?=$arResult['pathway']?->render()?>
<?

$APPLICATION->IncludeComponent(
    'bitrix:main.ui.grid',
    '.default',
    $arResult['grid']
);