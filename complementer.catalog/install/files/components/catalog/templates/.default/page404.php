<?php

defined('B_PROLOG_INCLUDED') || die;

/**
 * @var CMain  $APPLICATION
 */

if (!defined("ERROR_404")) define("ERROR_404", "Y");

\CHTTP::setStatus("404 Not Found");

if ($APPLICATION->RestartWorkarea()) {
    require(\Bitrix\Main\Application::getDocumentRoot() . "/404.php");
}
