<?php

namespace Complementer\Catalog\Service;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;
use Bitrix\Main\UI\PageNavigation;
use Exception;

abstract class Reference
{

    public function __construct(
        public readonly string $tableName,
        public readonly CatalogCursor $cursor,
        public readonly string $foreignKeyName = '',
        public readonly string $prevForeignKeyName = '',
    ) {
        Loc::loadLanguageFile(__FILE__);
    }

    public function entity(): mixed
    {
    }

    public function exist(): bool
    {
        return Application::getConnection()->isTableExists($this->tableName);
    }

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

    public function getFullName(): string
    {
        return $this->cursor->title().' ('.$this->cursor->name.') ('.$this->tableName.')'; 
    }    

    public function deleteTable(): void
    {
        try {
            Application::getConnection()->queryExecute('DROP TABLE IF EXISTS ' . $this->tableName);
        } catch (Exception $e) {
            throw new Exception($this->tableName . ' - ' . $e->getMessage());
        }
    }

    public function count(array $filter = []): int
    {
        return 0;
    }
 
    public function getItem(?int $id): ?array
    {
        return null;
    }

    public function getItems(PageNavigation $nav, array $order = [], array $filter = []): array
    {
        return [];
    }

    public function itemLink(
        array $item,
        string $urlTemplate
    ): string {
        return '';
    }

    public function getDefaultFieldIDs(): array
    {
        return [
            'ID',
            'NAME',
        ];
    }    

    public function getListColumns(): array
    {
        return [
            ['id' => 'ID', 'name' => 'ID', 'sort' => 'ID', 'default' => true],
            ['id' => 'NAME', 'name' => Loc::getMessage('NAMED_NAME'), 'sort' => 'NAME', 'default' => true],
        ];
    }

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
