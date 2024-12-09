<?php

namespace Complementer\Catalog\Generator;

use Complementer\Catalog\ORM\Data\BrandTable;
use Complementer\Catalog\ORM\Data\ModelTable;
use Complementer\Catalog\ORM\Data\ProductTable;
use Complementer\Catalog\ORM\Data\OptionTable;
use Complementer\Catalog\ORM\Data\ProductOptionTable;
use Complementer\Catalog\Service\CatalogCursor;

use Bitrix\Main\Localization\Loc;
use Exception;

Loc::loadLanguageFile(__FILE__);

/**
 * Генерирует тестовые данные
 */
class CatalogGenerator
{
    public const YEAR_FROM = 2020;
    public const YEAR_TO = 2024;
    public const PRICE_MIN = 50000;
    public const PRICE_MAX = 150000;

    /**
     *
     * @param CatalogCursor $level
     * @param string $ownerName
     * @param int $number
     * 
     * @return string
     * 
     */
    public static function doName(CatalogCursor $level, string $ownerName = '', int $number = 0): string
    {
        $name = match ($level) {
            CatalogCursor::Brand => DataGenerator::get2PartName(),
            CatalogCursor::Model => $ownerName . ' ' . DataGenerator::get3PartName(),
            CatalogCursor::Product => $ownerName . ' ' . DataGenerator::getProductSpecific($number),
            default => '',
        };
        return $name;
    }

    /**
     *
     * @return void
     * 
     */
    public static function fillOptionTable(): void
    {
        foreach (DataGenerator::PRODUCT_OPTIONS as $name) {
            try {
                $addResult = OptionTable::add([
                    'NAME' => $name
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

            if (!$addResult->isSuccess()) {
                throw new Exception($name . Loc::getMessage('NOT_ADDED'));
            }
        }
    }

    /**
     *
     * @param int $modelId
     * @param string $modelName
     * @param int $count
     * 
     * @return void
     * 
     */
    public static function fillProductTable(
        int $modelId,
        string $modelName,
        int $count
    ): void {
        for ($i = 1; $i <= $count; $i++) {
            try {
                $name = self::doName(CatalogCursor::Product, $modelName, $i);
                $addResult = ProductTable::add([
                    'NAME' => $name,
                    'MODEL_ID' => $modelId,
                    'YEAR' => random_int(self::YEAR_FROM, self::YEAR_TO),
                    'PRICE' => random_int(self::PRICE_MIN, self::PRICE_MAX),
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

            if (!$addResult->isSuccess()) {
                throw new Exception($name . Loc::getMessage('NOT_ADDED'));
            }
        }
    }

    /**
     *
     * @return void
     * 
     */
    public static function fillProductOptionTable(): void
    {
        $products = ProductTable::getList([
            'select' => ['ID']
        ]);

        $options = OptionTable::getList([
            'select' => ['ID']
        ])->fetchAll();

        $countOptions = count($options);
        while ($row = $products->fetch()) {
            $countProductOptions = random_int(0, $countOptions);
            $addedOptions = [];
            for ($i = 1; $i < $countProductOptions; $i++) {
                $optionId = $options[array_rand($options)]['ID'];
                if (!in_array($optionId, $addedOptions)) {
                    try {
                        $addResult = ProductOptionTable::add([
                            'PRODUCT_ID' => $row['ID'],
                            'OPTION_ID' => $optionId,
                        ]);
                    } catch (Exception $e) {
                        throw new Exception($e->getMessage());
                    }

                    if (!$addResult->isSuccess()) {
                        throw new Exception($row['ID'] . ' - '. $optionId. Loc::getMessage('NOT_ADDED'));
                    }
                    $addedOptions[] = $optionId;
                }
            }
        }
    }

    /**
     *
     * @param int $brandId
     * @param string $brandName
     * @param int $count
     * @param int $countProducts
     * 
     * @return void
     * 
     */
    public static function fillModelTable(
        int $brandId,
        string $brandName,
        int $count,
        int $countProducts
    ): void {
        for ($i = 1; $i <= $count; $i++) {
            try {
                $name = self::doName(CatalogCursor::Model, $brandName);
                $addResult = ModelTable::add([
                    'NAME' => $name,
                    'BRAND_ID' => $brandId
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

            if (!$addResult->isSuccess()) {
                throw new Exception($name . Loc::getMessage('NOT_ADDED'));
            }

            self::fillProductTable($addResult->getId(), $name, $countProducts);
        }
    }

    /**
     *
     * @param int $countBrands
     * @param int $countModels
     * @param  int
     * 
     * @return void
     * 
     */
    public static function fillCatalog(
        int $countBrands,
        int $countModels = 0,
        int $countProducts =0
    ): void {
        for ($i = 1; $i <= $countBrands; $i++) {
            try {
                $name = self::doName(CatalogCursor::Brand);
                $addResult = BrandTable::add([
                    'NAME' => $name
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

            if (!$addResult->isSuccess()) {
                throw new Exception($name . Loc::getMessage('NOT_ADDED'));
            }

            self::fillModelTable($addResult->getId(), $name, $countModels, $countProducts);
        }
    }
}
