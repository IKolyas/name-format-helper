# Генератор формата имени

Генерирует имена пользователей в заданном формате

## Требования

- PHP >= 8.1

## Установка

composer require i-kolyas/person-name-format

## Использование

```php
$userName = new PersonName(surname: 'Сидоров', firstname: 'Пётр', patronymic: 'Николаевич');
echo $userName->short(); // Сидоров П.
echo $userName->fullShort(); // Сидоров П.Н.
echo $userName->long(); // Сидоров Пётр
echo $userName->fullLong(); // Сидоров Пётр Николаевич
```
