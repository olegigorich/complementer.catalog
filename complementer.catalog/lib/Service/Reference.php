<?php

namespace Complementer\Catalog\Service;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;
use Bitrix\Main\UI\PageNavigation;
use Exception;

/**
 * Справочник
 */
abstract class Reference
{

    /**
     *
     * @param public readonly
     * @param public readonly
     * @param mixed public
     * @param mixed public
     * @param mixed 
     * 
     */
    public function __construct(
        public readonly string $tableName,
        public readonly CatalogCursor $cursor,
        public readonly string $foreignKeyName = '',
        public readonly string $prevForeignKeyName = '',
    ) {
        Loc::loadLanguageFile(__FILE__);
    }

    /**
     *
     * @return bool
     * 
     */
    public function exist(): bool
    {
        return Application::getConnection()->isTableExists($this->tableName);
    }

    /**
     *
     * @return void
     * 
     */
    public function createTable(): void
    {
        try {
            if (!$this->exist()) {
                static::getTableClass()::getEntity()->createDbTable();
            }
        } catch (Exception $e) {
            throw new Exception($this->tableName . ' - ' . $e->getMessage());
        }
    }

    /**
     *
     * @return string
     * 
     */
    public function getFullName(): string
    {
        return $this->cursor->title() . ' (' . $this->cursor->name . ') (' . $this->tableName . ')';
    }

    /**
     *
     * @return void
     * 
     */
    public function deleteTable(): void
    {
        try {
            Application::getConnection()->queryExecute('DROP TABLE IF EXISTS ' . $this->tableName);
        } catch (Exception $e) {
            throw new Exception($this->tableName . ' - ' . $e->getMessage());
        }
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
        return $this->getTableClass()::query()->setFilter($filter)->queryCountTotal();
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

            $result = $this->getTableClass()::getByPrimary($id, [
                'select' => [
                    '*',
                    ...$this->getSpecificFields()
                ]
            ]);
            $item = $result->fetch();

            return $this->completeItem($item);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return null;
    }

    /**
     *
     * @param array $item
     * 
     * @return array
     * 
     */
    public function completeItem(array $item): array
    {
        return $item;
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
        $result = $this->getTableCLass()::getList([
            'order' => $order,
            'filter' => $filter,
            'select' => [
                '*',
                ...$this->getSpecificFields()
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
     * @return string
     * 
     */
    public function getTableClass(): string
    {
        return static::class;
    }

    /**
     *
     * @return array
     * 
     */
    public function getSpecificFields(): array
    {
        return  [];
    }

    /**
     *
     * @return array
     * 
     */
    public function getDefaultFieldIDs(): array
    {
        return [
            'ID',
            'NAME',
        ];
    }

    /**
     *
     * @return array
     * 
     */
    public function getListColumns(): array
    {
        return [
            ['id' => 'ID', 'name' => 'ID', 'sort' => 'ID', 'default' => true],
            ['id' => 'NAME', 'name' => Loc::getMessage('NAMED_NAME').' ('.$this->cursor->title().')', 'sort' => 'NAME', 'default' => true],
        ];
    }

    public function getFieldValue(array $item, string $fieldName): mixed
    {
        return  match ($fieldName) {
            $fieldName => $item[$fieldName],
            default => null,
        };
    }
}
