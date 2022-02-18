# Json Decoder

Пакет предназначен для конвертирования массива в JSON и обратно.

## Требования

PHP 7.0

##Установка

```bash
    composer require pavelgaponenko/pg-otus-composer-package
```

##Использование

```php
    <?php
        $decoder = new JsonDecoder();
        $array = $decoder->toArray('{"test": "json"}');
        $json = $decoder->toJson(['test' => 'json']);
```
