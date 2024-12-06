<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Web\Json;

defined('B_PROLOG_INCLUDED') || die;

/**
 * @var array  $arResult
 * @var CMain  $APPLICATION
 * @var array  $arParams
 * @var object $component 
 */

Loc::loadLanguageFile('/local/modules/complementer.catalog/lib/catalogcursor.php');

$APPLICATION->IncludeComponent(
    'complementer.catalog:catalog.list',
    '.default',
    [
        ...$arResult['COMPONENT_PARAMS'],
    ],
    $component
);

$jsonData = Json::encode([
    'looking_slider_path' => $arResult['COMPONENT_PARAMS']['PRODUCT_SLIDER_PAGE_URL'],
    'slider_title' => Loc::getMessage('NAMED_PRODUCT'),
]);
?>

<script>
    BX.ready(() => {
        const data = <?= $jsonData; ?>;

        BX.SidePanel.Instance.bindAnchors({
            rules: [{
                condition: [new RegExp(data.looking_slider_path)],
                options: {
                    cacheable: false,
                    allowChangeHistory: false,
                    label: {
                        text: data.slider_title
                    }
                }
            }]
        });

    })
</script>