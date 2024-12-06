<?php

namespace Complementer\Catalog\Main;

class Singleton
{
    private static $instances = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    public function __wakeup()
    {
    }

    public static function getInstance(): static
    {
        $clsName = static::class;
        if (!isset(self::$instances[$clsName])) {
            self::$instances[$clsName] = new static();
        }

        return self::$instances[$clsName];
    }
}