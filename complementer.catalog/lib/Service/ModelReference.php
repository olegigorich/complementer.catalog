<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\ModelTable;

use CComponentEngine;

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
                    "MODEL" => $item['ID'],
                    "BRAND" => $item['BRAND-ID'],
                ],
            ),
            $item['NAME'],
        );
    }

}
