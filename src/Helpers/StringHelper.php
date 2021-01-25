<?php


namespace Drystack\Helpers;


class StringHelper {
    public static function initials(string $string): string {
        if (strlen($string) < 1) return "";
        if (strlen($string) < 2) return ucfirst($string);
        $exploded = explode(' ', $string);
        $res = '';
        foreach ($exploded as $item) {
            $res .= ucfirst($item);
        }
        return substr($res, 0, 2);
    }
}
