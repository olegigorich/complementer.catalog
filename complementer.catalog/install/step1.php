<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;

if (!check_bitrix_sessid()) {
    return;
}

global $APPLICATION;
$moduleId = 'complementer.catalog';
$session = Application::getInstance()->getSession();
if ($session->has($moduleId)) {
    $module = $session->get($moduleId);
} else {
    $module = [];
}
?>

<div class="adm-detail-block">
    <div class="adm-detail-content-wrap">
        <div class="adm-detail-content">
            <div class="adm-detail-content-item-block">
                <div class="adm-profit-block">
                    <div class="adm-profit-scale-block">
                        <div class="stat-item-container item-detailed">
                            <div class="stat-graph-container">
                                <h2>
                                    <?= Loc::getMessage("COMPLEMENTER_INSTALL_DESCRIPTION") ?>
                                </h2>
                                <hr />
                                <p>
                                    <?= Loc::getMessage("COMPLEMENTER_INSTALL_STEP_1_INFO") ?>
                                </p>
                                <hr />
                                <h3>
                                    <?= Loc::getMessage("COMPLEMENTER_INSTALL_SETTINGS_TEST_DATA") ?>
                                </h3>
                                <form action="<?= $APPLICATION->GetCurPage() ?>">
                                    <?= bitrix_sessid_post() ?>
                                    <input type="hidden" name="lang" value="<?= LANGUAGE_ID ?>">
                                    <input type="hidden" name="id" value="<?=$moduleId?>">
                                    <input type="hidden" name="install" value="Y">
                                    <input type="hidden" name="step" value="2">
                                    <p>
                                        <input type="checkbox" name="createTables" id="createTables" value="Y" checked onclick="switchCounts();">
                                        <label for="createTables">
                                            <?= Loc::getMessage("COMPLEMENTER_DELL_AND_CREATE_DB_TABLES") ?>
                                        </label>
                                    </p>
                                    <div id="complementer_counts">
                                        <h3>
                                            <?= Loc::getMessage("COMPLEMENTER_COUNT_ENTITIES") ?>
                                        </h3>
                                        <p>
                                            <label for="countBrands">
                                                <?= Loc::getMessage("COMPLEMENTER_COUNT_BRANDS") ?>
                                            </label>
                                            <input type="text" name="countBrands" id="countBrands" value="<?= $module['defCountBrands'] ?>" size="3" min="1">
                                            <?= Loc::getMessage("COMPLEMENTER_COUNT_DIAPASON") ?> <?= $module['maxCountBrands'] ?>
                                        </p>
                                        <p>
                                            <label for="countModels">
                                                <?= Loc::getMessage("COMPLEMENTER_COUNT_MODELS") ?>
                                            </label>
                                            <input type="text" name="countModels" id="countModels" value="<?= $module['defCountModels'] ?>" size="3" min="1">
                                            <?= Loc::getMessage("COMPLEMENTER_COUNT_DIAPASON") ?> <?= $module['maxCountModels'] ?>
                                        </p>
                                        <p>
                                            <label for="countProducts">
                                                <?= Loc::getMessage("COMPLEMENTER_COUNT_PRODUCTS") ?>
                                            </label>
                                            <input type="text" name="countProducts" id="countProducts" value="<?= $module['defCountProducts'] ?>" size="3" min="1">
                                            <?= Loc::getMessage("COMPLEMENTER_COUNT_DIAPASON") ?> <?= $module['maxCountProducts'] ?>
                                        </p>
                                        <p>
                                            <?= Loc::getMessage('COMPLEMENTER_PRODUCTS_OPTIONS') ?>

                                        </p>
                                    </div>
                                    <input type="submit" class="adm-btn-save" name="" value="<?= Loc::getMessage('COMPLEMENTER_INSTALL_SUBMIT') ?>">
                                    <input type="button" value="<?= Loc::getMessage('COMPLEMENTER_INSTALL_CANCEL') ?>" name="cancel" onclick="top.window.location='<?= $APPLICATION->GetCurPage() ?>'">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="adm-detail-content-btns-wrap">
            <div class="adm-detail-content-btns adm-detail-content-btns-empty"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function switchCounts() {
        var style = document.getElementById('complementer_counts').style
        if (style.visibility == "hidden")
            style.visibility = "visible";
        else
            style.visibility = "hidden";
    }
</script>