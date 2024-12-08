<?php

use Complementer\Catalog\Service\Reference;
use Complementer\Catalog\Service\CatalogCursor;
use Complementer\Catalog\Service\ReferenceManager;
use Complementer\Catalog\Service\BrandReference;
use Complementer\Catalog\Service\ModelReference;
use Complementer\Catalog\UI\Pathway;

use Bitrix\Main\Error as BitrixError;
use Bitrix\Main\Errorable;
use Bitrix\Main\ErrorableImplementation;
use Bitrix\Main\ErrorCollection;
use Bitrix\Main\Loader;
use Bitrix\Main\UI\PageNavigation;
use Bitrix\UI\Buttons\CreateButton;
use Bitrix\Main\Application;

use Bitrix\Main\Grid\Options as GridService;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Localization\Loc;


defined('B_PROLOG_INCLUDED') || die;

class CatalogListComponent extends CBitrixComponent implements Errorable, Controllerable
{
    use ErrorableImplementation;

    private const UI_PREFIX = 'complementer-catalog-list-';

    private CComponentEngine $engine;
    private ?Reference $reference = null;
    private ?CatalogCursor $cursor = null;
    private ?int $prevSelectionCriteria = null;
    private ?int $selectionCriteria = null;
    private ?string $gridId;
    private ?string $navId;

    public function __construct(
        ?CBitrixComponent $component = null,
    ) {
        parent::__construct($component);

        Loader::requireModule('complementer.catalog');

        $this->engine = $engine ?? new CComponentEngine();

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
        $this->gridId = self::UI_PREFIX . 'grid-' . $this->cursor->name;
        $this->navId = self::UI_PREFIX . 'nav-' . $this->cursor->name;

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
        }

        $paramName = 'PREV_SELECTION_CRITERIA';
        if (isset($arParams[$paramName])) {
            $selectionCriteria = $arParams[$paramName];
            if (!is_numeric($selectionCriteria)) {
                $this->errorCollection->setError(
                    new BitrixError(Loc::GetMessage('INVALID_PARAMETER_FORMAT', ["#param#" => $paramName . ' = ' . $selectionCriteria]))
                );
                return $arParams;
            }
            $this->prevSelectionCriteria = $selectionCriteria;
        }

        return $arParams;
    }

    public function executeComponent(): void
    {

        if ($this->hasErrors()) {
            $this->displayErrors();
            return;
        }

        $gridService = new GridService($this->gridId);

        if ($this->selectionCriteria !== null) {
            $filter = [
                '=' . $this->reference->foreignKeyName => $this->selectionCriteria,
            ];
            if ($this->prevSelectionCriteria !== null) {
                $filter[] = [
                    '=' . $this->reference->prevForeignKeyName => $this->prevSelectionCriteria,
                ];
            }
        }

        $sort = $gridService->getSorting(['sort' => ['NAME' => 'ASC']]);

        $navigationParameters = $gridService->GetNavParams();

        $navigation = new PageNavigation($this->navId);
        $navigation->setPageSize($navigationParameters['nPageSize']);
        $navigation->setRecordCount($this->reference->count($filter ?? []));
        $navigation->setPageSizes([
            ['NAME' => '5', 'VALUE' => '5'],
            ['NAME' => '10', 'VALUE' => '10'],
            ['NAME' => '20', 'VALUE' => '20'],
            ['NAME' => '50', 'VALUE' => '50'],
            ['NAME' => '100', 'VALUE' => '100'],
        ]);
        $navigation->initFromUri();

        $visibleColumns = $gridService->GetVisibleColumns();
        if (empty($visibleColumns)) {
            $visibleColumns = $this->reference->getDefaultFieldIDs();
            $gridService->SetVisibleColumns($visibleColumns);
        }

        $items = $this->reference->getItems($navigation, $sort['sort'], $filter ?? []);

        if ($items) {
            $rows = array_map(
                fn ($item): array => [
                    'id' => $item['ID'],
                    'columns' => $this->reference->prepareItemRow($item, $this->arParams['ITEM_PAGE_URL'], $visibleColumns),
                ],
                $items
            );
        } else if ($filter) {
            $attributes = $this->reference->foreignKeyName . ' = ' . $this->selectionCriteria;
            if ($this->prevSelectionCriteria !== null) {
                $attributes .= ', ' . $this->reference->prevForeignKeyName . ' = ' . $this->prevSelectionCriteria;
            }
            $stub = [
                'title' => Loc::GetMessage("ITEM_NO_EXIST", [
                    "#attributes#" => $attributes,
                    "#reference#" => $this->reference->getFullName()
                ])
            ];
        }

        reset($items);
        $pathway = new Pathway($this->arParams['CATALOG_ROOT'], $this->cursor, current($items));

        $this->arResult = [
            'grid' => [
                'GRID_ID'       => $gridService->getId(),
                'COLUMNS'       => $this->reference->getListColumns(),
                'ROWS'          => $rows,
                'AJAX_MODE'     => 'Y',
                'AJAX_OPTION_HISTORY' => 'N',
                'NAV_OBJECT' => $navigation,
                'TOTAL_ROWS_COUNT' => $navigation->getRecordCount(),
                'SHOW_PAGESIZE' => true,
                'PAGE_SIZES' => $navigation->getPageSizes(),
                'STUB' => $stub ?? null,
            ],
            'pathway' => $pathway,
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
