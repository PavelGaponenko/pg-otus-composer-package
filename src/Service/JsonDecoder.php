<?php

namespace Pavelgaponenko\PgOtusComposerPackage\Service;

class JsonDecoder
{
    public function toArray(string $json): array
    {
        return json_decode($json, true);
    }

    public function toJson(array $array): string
    {
        return json_encode($array);
    }
}