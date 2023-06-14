<?php

namespace App\Enums;

use Illuminate\Support\Arr;
use Spatie\Enum\Laravel\Enum;

final class PronounsEnum extends Enum
{
    protected static string $ae_aer = 'ae/aer';
    protected static string $e_em = 'e/em';
    protected static string $he_him = 'he/him';
    protected static string $per_per = 'per/per';
    protected static string $she_her = 'she/her';
    protected static string $they_them = 'they/them';
    protected static string $ve_ver = 've/ver';
    protected static string $xe_xem = 'xe_xem';
    protected static string $ze_hir = 'ze_hir';

    /**
     * @return array<int,string>
     */
    public static function all(): array
    {
        return [
            self::$ae_aer,
            self::$e_em,
            self::$he_him,
            self::$per_per,
            self::$she_her,
            self::$they_them,
            self::$ve_ver,
            self::$xe_xem,
            self::$ze_hir,
        ];
    }

    public static function random(): string
    {
        return strval(Arr::random(array: self::all()));
    }
}
