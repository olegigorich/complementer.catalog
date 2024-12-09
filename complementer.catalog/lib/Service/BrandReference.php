<?

namespace Complementer\Catalog\Service;

use Complementer\Catalog\ORM\Data\BrandTable;

use Bitrix\Main\UI\PageNavigation;
use CComponentEngine;
use Exception;

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
     * @return mixed
     * 
     */
    public function entity(): mixed
    {
        return BrandTable::getEntity();
    }

    /**
     *
     * @param array $filter
     * 
     * @return int
     * 
     */
    public function count(array $filter = []): int
    {
        return BrandTable::query()->setFilter($filter)->queryCountTotal();
    }

    
    /**
     *
     * @param int|null $id
     * 
     * @return array|null
     * 
     */
    public function getItem(?int $id): ?array
    {
        try {
            $result = BrandTable::getByPrimary($id, [
                'select' => [
                    '*'
                ]
            ]);
            $item = $result->fetch();

            return $item;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return null;
    }
    

    /**
     *
     * @param PageNavigation $nav
     * @param array $order
     * @param array $filter
     * 
     * @return array
     * 
     */
    public function getItems(PageNavigation $nav, array $order = [], array $filter = []): array
    {
        $result = BrandTable::getList([
            'order' => $order,
            'filter' => $filter,
            'select' => [
                'ID',
                'NAME'
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
