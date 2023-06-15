<?php

namespace App\Enums;

enum InteractionTypeEnum: string
{
    case PHONE = 'phone';
    case EMAIL = 'email';
    case MEETING = 'meeting';

    public static function all(): array
    {
        return [
            self::PHONE,
            self::EMAIL,
            self::MEETING,
        ];
    }
}
