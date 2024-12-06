<?php

namespace Complementer\Catalog\ORM\Data;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\Entity\Query\Join;

final class ModelTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'complementer_catalog_model';
    }

    public static function getMap(): array
    {
        return [
            (new IntegerField('ID'))->configurePrimary()->configureAutocomplete(),
            (new StringField('NAME'))->configureRequired(),
            (new IntegerField('BRAND_ID')),
			(new Reference('BRAND', BrandTable::class,
				Join::on('this.BRAND_ID', 'ref.ID')))
				->configureJoinType('inner')
        ];
    }
}