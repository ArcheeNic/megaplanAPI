# MegaplanAPI
Работа с API Megaplan на базе его структуры.

Цель: Простая навигация и работа с API

Сделано на базе megaplan/simple_client

## Установка

composer require archee-nic/megaplan-api:dev-master

## Работа

Вначале задаются параметры через setter`ы

Потом вызывается метод выполнения запроса - run

### Вариант №2 - используя Builder
```php
<?
use \ArcheeNic\MegaplanAPI;
// Авторизуемся
$megaplan = new MegaplanAPI\Builder('myhost','pupkin@megaplan.ru', 'idclip');

// Получаем информацию
$megaplan->contractor->card(1)->setRequestedFields(['my_field'])->run();

// Получаем список
$megaplan->contractor->listing()->setOffset(0)->setLimit(1000)->run();

```

### Вариант №2 - много кода, больше свободы, больше думать
```php
<?
use \Megaplan\SimpleClient\Client;
use \ArcheeNic\MegaplanAPI;
// Авторизуемся
$response = (new Client('myhost'))->auth('pupkin@megaplan.ru', 'idclip');
// Получаем информацию
$card = (new MegaplanAPI\libs\Contractor\card($response))->setRequestedFields([])->setId(1)->run();
```

## Спасибо
Созонову Антону за консультации и помощь при создании репозитория.
