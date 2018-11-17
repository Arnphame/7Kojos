<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


abstract class ProductTypes
{
    const TYPE_MOTHERBOARD = 'mb';
    const TYPE_MEMORY = 'ram';
    const TYPE_HD = 'hd';
    const TYPE_CPU = 'cpu';
    const TYPE_GPU = 'gpu';
    const TYPE_PSU = 'psu';
    const TYPE_CASE = 'case';
    const TYPE_PSU_COOLER = 'psu_cooler';
    const TYPE_CASE_COOLER = 'case_cooler';
    const TYPE_OS = 'os';

    protected static $typeName = [
        self::TYPE_MOTHERBOARD => 'MOTHERBOARD',
        self::TYPE_MEMORY => 'MEMORY',
        self::TYPE_HD => 'HARD DISK',
        self::TYPE_CPU => 'CPU',
        self::TYPE_GPU => 'GPU',
        self::TYPE_PSU => 'PSU',
        self::TYPE_CASE => 'CASE',
        self::TYPE_PSU_COOLER => 'PSU COOLER',
        self::TYPE_CASE_COOLER => 'CASE COOLER',
        self::TYPE_OS => 'OPERATING SYSTEM',
    ];

    public static function getTypeName($shortTypeName)
    {
        if(!isset(static::$typeName[$shortTypeName])){
            return "Unknown type ($shortTypeName";
        }
        return static::$typeName[$shortTypeName];
    }

    public static function getTypes()
    {
        return [
            self::TYPE_MOTHERBOARD,
            self::TYPE_MEMORY,
            self::TYPE_HD,
            self::TYPE_CPU,
            self::TYPE_GPU,
            self::TYPE_PSU,
            self::TYPE_CASE,
            self::TYPE_PSU_COOLER,
            self::TYPE_CASE_COOLER,
            self::TYPE_OS,
        ];
    }
}
