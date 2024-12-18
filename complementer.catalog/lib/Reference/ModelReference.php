<?

namespace Complementer\Catalog\Reference;

use Complementer\Catalog\ORM\Data\ModelTable;

/**
 * Справочник Модели
 */
class ModelReference extends Reference
{

    public function __construct()
    {
        parent::__construct(
            ModelTable::getTableName(),
            CatalogCursor::Model,
            'BRAND_ID',
        );
    }

    /**
     *
     * @return string
     * 
     */
    public function getTableClass(): string
    {
        return ModelTable::class;
    }

    /**
     *
     * @return array
     * 
     */
    public function getSpecificFields(): array
    {
        return  [
            'BRAND-' => 'BRAND',
        ];
    }

}
