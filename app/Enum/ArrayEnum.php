<?php

namespace App\Enum;

trait ArrayEnum
{
    public static function toArray(): array
    {
        $reflection = new \ReflectionClass(static::class);

        return $reflection->getConstants();
    }

    public static function combined($array = [])
    {
        if (!count($array)) {
            $array = self::toArray();
        }

        return array_combine(self::toArray(), $array);
    }
}
