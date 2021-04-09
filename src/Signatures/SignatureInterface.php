<?php
/**
 * User: 96jasonccs
 * Date: 2018/4/16
 * Time: 下午3:19
 */

namespace jasonccs\LaravelApiAuth\Signatures;

interface SignatureInterface
{
    public static function sign(string $string, string $secret): string;

    public static function check(string $string, string $secret, string $signature): bool;

}