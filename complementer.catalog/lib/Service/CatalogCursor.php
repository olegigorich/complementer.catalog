<?php

namespace Complementer\Catalog\Service;

use Bitrix\Main\Localization\Loc;

enum CatalogCursor : string
{
    CASE Catalog = 'catalog';
    CASE Brand = 'brand';
    CASE Model = 'model';
    CASE Product = 'product';
    CASE Option = 'option';
    CASE ProductOption = 'product_option';

    public function title(): string 
    {
        Loc::loadLanguageFile(__FILE__);
        return  Loc::getMessage('NAMED_'.mb_strtoupper($this->name));
	}

}
