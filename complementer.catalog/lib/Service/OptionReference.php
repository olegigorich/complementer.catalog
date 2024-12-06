<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\OptionTable;

class OptionReference extends Reference
{

    public function __construct() {
        parent::__construct(
            OptionTable::getTableName(),
            CatalogCursor::Option
        );
    }

    public function entity(): mixed
    {
        return OptionTable::getEntity();
    }

}
