<?php

$textStorage = []; //создали массив-переменную

function add ($title, $text, &$textStorage) { //функция на добавление text и title в массив-переменную
    
    $textStorage[] = array('title' => $title, 'text' => $text); //переменная в которой ассоциативный массив
}

add('Заголовок номер 0 ', 'Содержание номер 0 ', $textStorage); // функция отрабатывает добавляя вручную "Заголовок номер 0" итд
add('Заголовок номер 1', 'Содержание номер 1 ', $textStorage); // функция отрабатывает добавляя еще данных
print_r($textStorage);


function remove ($index, array &$textStorage): bool //функция на удаление. bool потому что нужно return false или true
{
    if (isset($textStorage[$index])) { // isset поиск по массиву [index] и по индексу
        unset($textStorage[$index]);    //unset удаление по индексу
        echo "Запись с индексом $index Удалена " . PHP_EOL;
        return true;    // : bool в случае нахождения индекса вернет true и удалится запись по index
    }
        echo "Запись с индексом $index не найдена  " . PHP_EOL;
        return false;   // : bool
}

remove(0, $textStorage); //вызов функции для удаления по индексу 0
remove(5, $textStorage); //вызов функции для удаления по индексу 5 (проверить что будет если такого индекса нет и увидеть возврат false)
print_r($textStorage);


function edit ($index, $title, $text, array &$textStorage): bool // функция для удаления, в нее кладется индекс [0,1 итд] и по нему идет поиск isset
{
    if (isset($textStorage[$index])) {
        $textStorage[$index] = array('title' => $title, 'text' => $text);
        echo "Запись с индексом $index обновлена " . PHP_EOL;
        return true;
    }
        echo "Запись с индексом $index не найдена  " . PHP_EOL;
        return false;
}
edit(1, "Новое название заголовка 1 ", "Новый текст 1 ", $textStorage) . PHP_EOL; // (1,) значит мы кладем сюда в индекс [1] Новое название...итд
print_r($textStorage);
edit(2, "Новое название заголовка 2 ", "Новый текст 2 ", $textStorage);
