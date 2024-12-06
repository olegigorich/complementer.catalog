<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\ModelTable;

use Bitrix\Main\UI\PageNavigation;
use CComponentEngine;
use Exception;

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

    public function entity(): mixed
    {
        return ModelTable::getEntity();
    }

    public function count(array $filter = []): int
    {
        return ModelTable::query()->setFilter($filter)->queryCountTotal();
    }

    public function getItem(?int $id): ?array
    {
        try {
            $result = ModelTable::getByPrimary($id, [
                'select' => [
                    '*',
                    'BRAND-' => 'BRAND'
                ]
            ]);
            $item = $result->fetch();

            return $item;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return null;
    }
    
    public function getItems(PageNavigation $nav, array $order = [], array $filter = []): array
    {
        $result = ModelTable::getList([
            'order' => $order,
            'filter' => $filter,
            'select' => [
                '*',
                'BRAND-' => 'BRAND'
            ],
            'offset' => $nav->getOffset(),
            'limit' => $nav->getLimit(),
            'count_total' => true,
        ]);

        $items = [];
        while ($item = $result->fetch()) {
            $items[$item['ID']] = $item;
        }

        $nav->setRecordCount($result->getCount());

        return $items;
    }

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
