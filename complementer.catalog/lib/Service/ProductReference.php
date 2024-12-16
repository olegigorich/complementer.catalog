<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\ProductTable;
use Complementer\Catalog\ORM\Data\ProductOptionTable;

use Bitrix\Main\Localization\Loc;

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

    public function getFieldValue( array $item, string $fieldName): mixed
    {
        return match ($fieldName) {
            'PRICE' => number_format($item['PRICE'], 2, ', ', ' '),
            default => parent::getFieldValue($item, $fieldName),
        };
    }

}
