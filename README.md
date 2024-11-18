## Hash калькулятор

Вычисляет хэш для заданной строки

## Требования

 - PHP 7.4

## Установка

composer require sergey-shirykalov/hash-calculator

## Использование

$hashCalulator = new HashCalculator();
echo $hashCalculator->md5('test string'); // 6f8db599de986fab7a21625b7916589c
