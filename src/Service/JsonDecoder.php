<?php

namespace Pavelgaponenko\PgOtusComposerPackage\Service;

class JsonDecoder
{
    public function toArray(string $json): array
    {
        if (!$this->validateJson($json)) {
            return [];
        }

        return json_decode($json, true);
    }

    public function toJson(array $array): string
    {
        return json_encode($array);
    }

    private function validateJson(string $json): bool
    {
        return preg_match(
            '/[^,:{}\\[\\]0-9.\\-+Eaeflnr-u \\n\\r\\t]/',
            preg_replace('/"(\\.|[^"\\\\])*"/', '', $json)
        );
    }
}
