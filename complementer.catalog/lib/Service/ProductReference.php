<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\ProductTable;
use Complementer\Catalog\ORM\Data\ProductOptionTable;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\UI\PageNavigation;
use CComponentEngine;
use Exception;

/**
 * Справочник Продукты
 */
class ProductReference extends Reference
{

    public function __construct()
    {
        parent::__construct(
            ProductTable::getTableName(),
            CatalogCursor::Product,
            'MODEL_ID',
            'MODEL.BRAND_ID',
        );

        Loc::loadLanguageFile(__FILE__);
    }

    /**
     *
     * @return mixed
     * 
     */
    public function entity(): mixed
    {
        return ProductTable::getEntity();
    }

    /**
     *
     * @param array $filter
     * 
     * @return int
     * 
     */
    public function count(array $filter = []): int
    {
        return ProductTable::query()->setFilter($filter)->queryCountTotal();
    }
    
    /**
     *
     * @param int|null $id
     * 
     * @return array|null
     * 
     */
    public function getItem(?int $id): ?array
    {
        try {

            $result = ProductTable::getByPrimary($id, [
                'select' => [
                    '*',
                    'MODEL-' => 'MODEL',
                    'BRAND-' => 'MODEL.BRAND'
                ]
            ]);
            $item = $result->fetch();

            if (!empty($item)) {
                $result = ProductOptionTable::getList([
                    'select'  => [
                        'OPTION-NAME' => 'OPTION.NAME',
                    ],
                    'filter' => [
                        'PRODUCT_ID' => $id
                    ],
                    'data_doubling' => false
                ]);
                $item['OPTIONS'] = $result->fetchAll() ?: [];
                return $item;
            } else {
                return [];
            }

            return $item;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return null;
    }

    /**
     *
     * @param PageNavigation $nav
     * @param array $order
     * @param array $filter
     * 
     * @return array
     * 
     */
    public function getItems(PageNavigation $nav, array $order = [], array $filter = []): array
    {
        $result = ProductTable::getList([
            'order' => $order,
            'filter' => $filter,
            'select' => [
                '*',
                'BRAND-' => 'MODEL.BRAND',
                'MODEL-' => 'MODEL'
            ],
            'offset' => $nav->getOffset(),
            'limit' => $nav->getLimit(),
            'count_total' => true,
        ]);

        $items = [];
        while ($item = $result->fetch()) {
            $items[$item['ID']] = $item;
        }

        $nav->setRecordCount($result->getCount());

        return $items;
    }

    /**
     *
     * @param array $item
     * @param string $urlTemplate
     * 
     * @return string
     * 
     */
    public function itemLink(
        array $item,
        string $urlTemplate
    ): string {
        return sprintf(
            '<a href="%s">' . $this->cursor->title() . ' ' . '%s</a>',
            CComponentEngine::makePathFromTemplate(
                $urlTemplate,
                [
                    "NOTEBOOK" => $item['ID'],
                ],
            ),
            $item['NAME'],
        );
    }

    /**
     *
     * @return array
     * 
     */
    public function getDefaultFieldIDs(): array
    {
        return [
            ... parent::getDefaultFieldIDs(),
            'YEAR',
            'PRICE'
        ];
    }    

    /**
     *
     * @return array
     * 
     */
    public function getListColumns(): array
    {
        return [
            ... parent::getListColumns(),
            ['id' => 'YEAR', 'name' => Loc::getMessage('NAMED_YEAR'), 'sort' => 'YEAR', 'default' => true],
            ['id' => 'PRICE', 'name' => Loc::getMessage('NAMED_PRICE'), 'sort' => 'PRICE', 'default' => true],
        ];
    } 
 
    /**
     *
     * @param array $item
     * @param string $urlTemplate
     * @param array $visibleColumns
     * 
     * @return array
     * 
     */
    public function prepareItemRow(array $item, string $urlTemplate, array $visibleColumns): array
    {
        $row = [];
        foreach ($visibleColumns as $column) {
            $row[$column] = match ($column) {
                'ID' => $item['ID'],
                'NAME' => $this->itemLink($item, $urlTemplate),
                'YEAR' => $item['YEAR'],
                'PRICE' => number_format($item['PRICE'], 2, ', ', ' '),
            };
        }
        return $row;
    }
}
