<?php declare(strict_types=1);
/**
 * データ型とStrictモード
 */
function add1 (int $val): string {
    return (string) ($val + 1);
}
$result = add1(1);
var_dump($result);