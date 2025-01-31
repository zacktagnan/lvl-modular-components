<?php

namespace App\Enums;

enum ArticleStatus: int
{
    case APPROVED = 1;
    case PENDING = 2;
    case REJECTED = 3;

    public static function forMigration(): array
    {
        return collect(self::cases())
            ->map(function ($enum) {
                if (property_exists($enum, 'value')) return $enum->value;
            })
            ->values()
            ->toArray();
    }
}
