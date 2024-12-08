<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;

if (!check_bitrix_sessid()) {
    return;
}

global $APPLICATION;
$moduleId = 'complementer.catalog';

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
                                    <?= Loc::getMessage("COMPLEMENTER_UNINSTALL_SETTINGS") ?>
                                </h2>
                                <hr />
                                <p>
                                    <?= Loc::getMessage("COMPLEMENTER_UNINSTALL_STEP_1_INFO") ?>
                                </p>
                                <form action="<?= $APPLICATION->GetCurPage() ?>">
                                    <?= bitrix_sessid_post() ?>
                                    <input type="hidden" name="lang" value="<?= LANGUAGE_ID ?>">
                                    <input type="hidden" name="id" value="<?= $moduleId ?>">
                                    <input type="hidden" name="uninstall" value="Y">
                                    <input type="hidden" name="step" value="2">
                                    <p>
                                        <input type="checkbox" name="deleteTables" id="deleteTables" value="Y" checked">
                                        <label for="deleteTables">
                                            <?= Loc::getMessage("COMPLEMENTER_DELETE_DB_TABLES") ?>
                                        </label>
                                    </p>
                                    <input type="submit" class="adm-btn-save" name="" value="<?= Loc::getMessage('COMPLEMENTER_UNINSTALL_SUBMIT') ?>">
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