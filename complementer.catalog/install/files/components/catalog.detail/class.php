<?php

use Complementer\Catalog\Service\Reference;
use Complementer\Catalog\Service\CatalogCursor;
use Complementer\Catalog\Service\ReferenceManager;
use Complementer\Catalog\UI\Pathway;

use Bitrix\Main\Error as BitrixError;
use Bitrix\Main\Errorable;
use Bitrix\Main\ErrorableImplementation;
use Bitrix\Main\ErrorCollection;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Loader;
use Bitrix\Main\Engine\Contract\Controllerable;

final class CatalogDetailComponent extends CBitrixComponent implements Controllerable, Errorable
{
    use ErrorableImplementation;

    private ?Reference $reference = null;
    private ?CatalogCursor $cursor = null;
    private ?int $selectionCriteria = null;
    private ?array $instance = null;

    public function __construct(?CBitrixComponent $component = null)
    {
        parent::__construct($component);
        Loader::requireModule('complementer.catalog');
        $this->errorCollection = new ErrorCollection();
    }

    public function onPrepareComponentParams($arParams): array
    {
        if (!isset($arParams['CURSOR'])) {
            $this->errorCollection->setError(
                new BitrixError(Loc::GetMessage('NO_REQUIRED_PARAM', ["#param#" => 'CURSOR']))
            );
            return $arParams;
        }
        $this->cursor = $arParams['CURSOR'];

        $reference = ReferenceManager::pullReference($this->cursor);
        if (!$reference?->exist()) {
            $this->errorCollection->setError(
                new BitrixError(Loc::GetMessage('REFERENCE_NO_EXIST', ["#reference#" => $reference->getFullName()]))
            );
            return $arParams;
        }
        $this->reference = $reference;

        $paramName = 'SELECTION_CRITERIA';
        if (isset($arParams[$paramName])) {
            $selectionCriteria = $arParams[$paramName];
            if (!is_numeric($selectionCriteria)) {
                $this->errorCollection->setError(
                    new BitrixError(Loc::GetMessage('INVALID_PARAMETER_FORMAT', ["#param#" => $paramName . ' = ' . $selectionCriteria]))
                );
                return $arParams;
            }
            $this->selectionCriteria = $selectionCriteria;
        } else {
            $this->errorCollection->setError(
                new BitrixError(Loc::GetMessage('NO_REQUIRED_PARAM', ["#param#" => $paramName]))
            );
            return $arParams;
        }

        return $arParams;
    }

    public function executeComponent(): void
    {
        if ($this->hasErrors()) {
            $this->displayErrors();
            return;
        }

        $instance = $this->reference->getItem($this->selectionCriteria);
        if (!$instance) {
            $this->errorCollection->setError(
                new BitrixError(Loc::GetMessage("ITEM_NO_EXIST", [
                    "#attributes#" => $this->selectionCriteria,
                    "#reference#" => $this->reference->getFullName()
                ]))
            );
            $this->displayErrors();
            return;
        }
        $this->instance = $instance;

        $this->instance['NAME'] = $this->instance['NAME'];

        $pathway = new Pathway($this->arParams['CATALOG_ROOT'], $this->cursor, $this->instance);

        $this->arResult = [
            'instance' => $this->instance,
            'productTitle' => $this->cursor->title(),
            'pathway' => $pathway
        ];

        $this->includeComponentTemplate();
    }

    private function displayErrors(): void
    {
        foreach ($this->getErrors() as $error) {
            ShowError($this->GetName());
            ShowError($error->getMessage());
        }
    }

    public function configureActions(): array
    {
        return [];
    }
}
