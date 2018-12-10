<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

abstract class WorkerTypes
{
    const TYPE_WAREHOUSEKEEPER = 'warehousekeeper';
    const TYPE_ADMINISTRATOR = 'administrator';
    const TYPE_REPAIRER = 'repairer';
    const TYPE_ACCOUNTANT = 'accountant';
    const TYPE_SELLER = 'seller';
    const TYPE_CONSULTANT = 'consultant';

    protected static $typeName = [
        self::TYPE_WAREHOUSEKEEPER => 'WAREHOUSEKEEPER',
        self::TYPE_ADMINISTRATOR => 'ADMINISTRATOR',
        self::TYPE_REPAIRER => 'REPAIRER',
        self::TYPE_ACCOUNTANT => 'ACCOUNTANT',
        self::TYPE_SELLER => 'SELLER',
        self::TYPE_CONSULTANT => 'CONSULTANT',
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
            self::TYPE_WAREHOUSEKEEPER,
            self::TYPE_ADMINISTRATOR,
            self::TYPE_REPAIRER,
            self::TYPE_ACCOUNTANT,
            self::TYPE_SELLER,
            self::TYPE_CONSULTANT,
        ];
    }
}
