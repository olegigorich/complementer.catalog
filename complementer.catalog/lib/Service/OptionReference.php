<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\OptionTable;

/**
 * Справочник Опции
 */
class OptionReference extends Reference
{

    public function __construct() {
        parent::__construct(
            OptionTable::getTableName(),
            CatalogCursor::Option
        );
    }

    /**
     *
     * @return string
     * 
     */
    public function getTableClass(): string
    {
        return OptionTable::class;
    }

}
