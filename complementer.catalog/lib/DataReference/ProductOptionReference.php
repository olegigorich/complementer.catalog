<?

namespace Complementer\Catalog\DataReference;

use Complementer\Catalog\ORM\Data\ProductOptionTable;

class ProductOptionReference extends DataReference
{

    public function __construct()
    {
        parent::__construct(
            ProductOptionTable::getTableName(),
            CatalogCursor::ProductOption
        );
    }

    /**
     *
     * @return string
     * 
     */
    public function getTableClass(): string
    {
        return ProductOptionTable::class;
    }
}
