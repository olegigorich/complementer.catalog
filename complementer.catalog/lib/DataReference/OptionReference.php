<?

namespace Complementer\Catalog\DataReference;

use Complementer\Catalog\ORM\Data\OptionTable;

/**
 * Справочник Опции
 */
class OptionReference extends DataReference
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
