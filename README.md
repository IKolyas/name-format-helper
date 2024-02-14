# Генератор формата имени

Генерирует имена пользователей в заданном формате

## Установка

composer require i-kolyas/person-name-format

## Использование

```php
$userName = new PersonName(surname: 'Сидоров', firstname: 'Пётр', patronymic: 'Николаевич');
echo $userName->short() . PHP_EOL; // Сидоров П.
echo $userName->fullShort() . PHP_EOL; // Сидоров П.Н.
echo $userName->long() . PHP_EOL; // Сидоров Пётр
echo $userName->fullLong() . PHP_EOL; // Сидоров Пётр Николаевич
```
