<?php

namespace Pavelgaponenko\PgOtusComposerPackage\Service;

class JsonDecoder
{
    public function toArray(string $json): array
    {
        if ($array = json_decode($json, true)) {
            return $array;
        }

        return [];
    }

    public function toJson(array $array): string
    {
        return json_encode($array);
    }
}
