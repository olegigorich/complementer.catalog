<?php

namespace Complementer\Catalog\ORM\Data;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Fields\FloatField;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\Entity\Query\Join;

/**
 * ORM таблица Продукты
 */
class ProductTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'complementer_catalog_product';
    }

    public static function getMap(): array
    {
        return [
            (new IntegerField('ID'))->configurePrimary()->configureAutocomplete(),
            (new StringField('NAME'))->configureRequired(),
            (new IntegerField('YEAR'))->configureRequired(),
            (new FloatField('PRICE'))->configureRequired(),
            (new IntegerField('MODEL_ID')),
            (new Reference('MODEL', ModelTable::class,
                Join::on('this.MODEL_ID', 'ref.ID')))
                ->configureJoinType('inner')
        ];
    }
}