<?php

namespace Complementer\Catalog\Generator;

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
       'золотая черепашка'
    ];

    public static function letter(array $letters): string
    {
        return $letters[array_rand($letters)];
    }

    public static function get2PartName(): string
    {
        return self::mbFirst(self::letter(self::CONSONANT)) .
           self::letter(self::VOWEL) .
            self::letter(self::CONSONANT) .
            self::letter(self::VOWEL) .
            self::letter(self::CONSONANT);
    }

    public static function get3PartName(): string
    {
        return self::get2PartName() .
            self::letter(self::VOWEL) .
            self::letter(self::CONSONANT);
    }

    public static function getProductSpecific(int $number): string
    {
        return self::mbFirst(self::letter(self::CONSONANT)).
            random_int(1,150).
            '-'.
            '0'.
            $number;
    }

    public static function mbFirst(string $str): string
    {
        return mb_strtoupper(mb_substr($str, 0, 1));
    }
    
}

