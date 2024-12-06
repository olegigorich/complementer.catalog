<?php

namespace Complementer\Catalog\ORM\Data;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\StringField;

final class BrandTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'complementer_catalog_brand';
    }

    public static function getMap(): array
    {
        return [
            (new IntegerField('ID'))->configurePrimary()->configureAutocomplete(),
            (new StringField('NAME'))->configureRequired()
        ];
    }
}