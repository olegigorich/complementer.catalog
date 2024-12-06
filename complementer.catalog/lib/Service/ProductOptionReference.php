<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\ProductOptionTable;

class ProductOptionReference extends Reference
{

    public function __construct() {
        parent::__construct(
            ProductOptionTable::getTableName(),
            CatalogCursor::ProductOption
        );
    }

    public function entity(): mixed
    {
        return ProductOptionTable::getEntity();
    }

}
