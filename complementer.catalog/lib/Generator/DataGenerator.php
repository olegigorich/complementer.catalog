<?php

namespace Complementer\Catalog\Generator;

/**
 * Генератор демо-данных Каталога
 */
class DataGenerator
{
    private const CONSONANT = [
        'б', 'в', 'д', 'к', 'м', 'н', 'т', 'р'
    ];

    private const VOWEL = [
        'а', 'о', 'у', 'и', 'е',
    ];

    public const PRODUCT_OPTIONS = [
       'игровая мышь',
       'внешний диск',
       'пуленепробиваемая сумка',
       'док-станция',
       '3D-очки',
       'usb-разветвитель',
       'влагозащищенный блок-питания',
       'адаптер MegaLink',
       'золотая черепашка',
       'push-адаптер для rest-ноутбука',
       'DRY-салфетки для экрана'
    ];

    /**
     *
     * @param array $letters
     * 
     * @return string
     * 
     */
    public static function letter(array $letters): string
    {
        return $letters[array_rand($letters)];
    }

    /**
     *
     * @return string
     * 
     */
    public static function get2PartName(): string
    {
        return self::mbFirst(self::letter(self::CONSONANT)) .
           self::letter(self::VOWEL) .
            self::letter(self::CONSONANT) .
            self::letter(self::VOWEL) .
            self::letter(self::CONSONANT);
    }

    /**
     *
     * @return string
     * 
     */
    public static function get3PartName(): string
    {
        return self::get2PartName() .
            self::letter(self::VOWEL) .
            self::letter(self::CONSONANT);
    }

    /**
     *
     * @param int $number
     * 
     * @return string
     * 
     */
    public static function getProductSpecific(int $number): string
    {
        return self::mbFirst(self::letter(self::CONSONANT)).
            random_int(1,150).
            '-'.
            '0'.
            $number;
    }

    /**
     *
     * @param string $str
     * 
     * @return string
     * 
     */
    public static function mbFirst(string $str): string
    {
        return mb_strtoupper(mb_substr($str, 0, 1));
    }
    
}

