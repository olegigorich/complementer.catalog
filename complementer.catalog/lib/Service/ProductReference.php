<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\ProductTable;
use Complementer\Catalog\ORM\Data\ProductOptionTable;

use Bitrix\Main\Localization\Loc;
use CComponentEngine;

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
     * @param array $item
     * 
     * @return array
     * 
     */
    public function completeItem(array $item): array
    {
        if (!empty($item)) {
            $result = ProductOptionTable::getList([
                'select'  => [
                    'OPTION-NAME' => 'OPTION.NAME',
                ],
                'filter' => [
                    'PRODUCT_ID' =>  $item['ID']
                ],
                'data_doubling' => false
            ]);
            $item['OPTIONS'] = $result->fetchAll() ?: [];
            return $item;
        } else {
            return [];
        }
    }

    /**
     *
     * @return string
     * 
     */
    public function getTableClass(): string
    {
        return ProductTable::class;
    }

    /**
     *
     * @return array
     * 
     */
    public function getSpecificFields(): array
    {
        return  [
            'BRAND-' => 'MODEL.BRAND',
            'MODEL-' => 'MODEL'
        ];
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
            ...parent::getDefaultFieldIDs(),
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
            ...parent::getListColumns(),
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
