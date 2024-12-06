<?php

use Bitrix\Main\UI\Extension;
use Bitrix\Main\Localization\Loc;
use Bitrix\UI\Toolbar\Facade\Toolbar;

defined('B_PROLOG_INCLUDED') || die;

/**
 * @var CMain $APPLICATION
 * @var array $arResult
 */

Extension::load([
    'ui.sidepanel.layout',
    'ui.sidepanel-content',
    'ui.layout-form',
	'ui.fonts.ruble',
]);

Loc::loadLanguageFile('/local/modules/complementer.catalog/lib/catalogcursor.php');

$APPLICATION->SetTitle(Loc::getMessage('CATALOG_PAGE_TITLE').' \ '. $arResult['instance']['NAME']);

Toolbar::deleteFavoriteStar();

?>

<?=$arResult['pathway']->render()?>

<div class="ui-slider-page">
<div class="ui-form ui-form-line">
    <div class="ui-form-row">
        <div class="catalog-text-lg rub">
        <span class="rub">р</span> 
        <?= number_format($arResult['instance']['PRICE'], 2, ', ', ' ') ?>
        </div>
    </div>
    <div class="ui-form-row">
        <div class="ui-form-label">
            <div class="ui-ctl-label-text"><?= Loc::getMessage('NAMED_BRAND') ?></div>
        </div>
        <div class="ui-form-content">
            <div class="ui-ctl ui-ctl-textbox ui-ctl-w100">
                <?= $arResult['instance']['BRAND-NAME'] ?>
            </div>
        </div>
    </div>
    <div class="ui-form-row">
        <div class="ui-form-label">
            <div class="ui-ctl-label-text"><?= Loc::getMessage('NAMED_MODEL') ?></div>
        </div>
        <div class="ui-form-content">
            <div class="ui-ctl ui-ctl-textbox ui-ctl-w100">
                <?= $arResult['instance']['MODEL-NAME'] ?>
            </div>

        </div>
    </div>
    <div class="ui-form-row">
        <div class="ui-form-label">
            <div class="ui-ctl-label-text"><?= Loc::getMessage('NAMED_RELEASE_YEAR') ?></div>
        </div>
        <div class="ui-form-content">
            <div class="ui-ctl ui-ctl-textbox ui-ctl-w100">
                <?= $arResult['instance']['YEAR'] ?>
            </div>
        </div>
    </div>
</div>
</div>

<div class="ui-slider-section">
    <div class="ui-slider-content-box">
        <div class="ui-slider-heading-3"><?= Loc::getMessage('NAMED_OPTION_MANY') ?></div>
        <? if (!empty($arResult['instance']['OPTIONS'])) {    ?>
            <p class="ui-slider-paragraph-1">
            <ul>
                <?
                foreach ($arResult['instance']['OPTIONS'] as $option) {
                ?>
                    <li>
                        <p>
                            <?= $option['OPTION-NAME'] ?>
                        </p>
                    </li>
                <?
                } ?>
            </ul>
            </p>
        <? } else {
        ?>
            <p class="ui-slider-paragraph-2">
                <em>
                    <?= Loc::getMessage('PRODUCT_HAS_NOT_OPTIONS') ?>
                </em>
            </p>
        <?
        }
        ?>
    </div>
</div>
