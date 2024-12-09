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
     * @return mixed
     * 
     */
    public function entity(): mixed
    {
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
                $this->entity()->createDbTable();
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
        return $this->cursor->title().' ('.$this->cursor->name.') ('.$this->tableName.')'; 
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
        return 0;
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
        return [];
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
        return '';
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
            ['id' => 'NAME', 'name' => Loc::getMessage('NAMED_NAME'), 'sort' => 'NAME', 'default' => true],
        ];
    }

    /**
     *
     * @param array $item
     * @param string $urlTemplate
     * @param array $visibleColumns
     * 
     * @return array
     * 
     */
    public function prepareItemRow(array $item, string $urlTemplate, array $visibleColumns): array
    {
        $row = [];
        foreach ($visibleColumns as $column) {
            $row[$column] = match ($column) {
                'ID' => $item['ID'],
                'NAME' => $this->itemLink($item, $urlTemplate),
            };
        }
        return $row;
    } 
}
