<?php

namespace Complementer\Catalog\DataReference;

use Bitrix\Main\Localization\Loc;

enum CatalogCursor: string
{
    case Catalog = 'catalog';
    case Brand = 'brand';
    case Model = 'model';
    case Product = 'product';
    case Option = 'option';
    case ProductOption = 'product_option';

    /**
     *
     * @return string
     * 
     */
    public function title(): string
    {
        Loc::loadLanguageFile(__FILE__);
        return  Loc::getMessage('NAMED_' . mb_strtoupper($this->name));
    }

    /**
     *
     * @return DataReference|null
     * 
     */
    public function reference(): ?DataReference
    {
        return match ($this) {
            self::Catalog => BrandReference::getInstance(),
            self::Brand => ModelReference::getInstance(),
            self::Model, CatalogCursor::Product => ProductReference::getInstance(),
            default => null
        };
    }
}
