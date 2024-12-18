<?

namespace Complementer\Catalog\DataReference;

use Complementer\Catalog\ORM\Data\BrandTable;

/**
 * Справочник Бренды
 */
class BrandReference extends DataReference
{
    public function __construct()
    {
        parent::__construct(
            BrandTable::getTableName(),
            CatalogCursor::Brand
        );
    }

    /**
     *
     * @return string
     * 
     */
    public function getTableClass(): string
    {
        return BrandTable::class;
    }

}
