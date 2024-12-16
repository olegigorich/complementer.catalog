<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\BrandTable;

use CComponentEngine;

/**
 * Справочник Бренды
 */
class BrandReference extends Reference
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
                    "BRAND" => $item['ID'],
                ],
            ),
            $item['NAME'],
        );
    }

}
