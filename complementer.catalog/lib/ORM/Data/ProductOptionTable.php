<?php

namespace Complementer\Catalog\ORM\Data;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\Entity\Query\Join;

/**
 * ORM таблица Продукты-Опции
 */
class ProductOptionTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'complementer_catalog_product_option';
    }

    public static function getMap(): array
    {
        return [
            (new IntegerField('ID'))->configurePrimary()->configureAutocomplete(),
            (new IntegerField('PRODUCT_ID')),
            (new Reference(
                'PRODUCT',
                ProductTable::class,
                Join::on('this.PRODUCT_ID', 'ref.ID')))
                ->configureJoinType('inner'),
            (new IntegerField('OPTION_ID')),
            (new Reference(
                'OPTION',
                OptionTable::class,
                Join::on('this.OPTION_ID', 'ref.ID')))
                ->configureJoinType('inner')
            ];
    }
}
