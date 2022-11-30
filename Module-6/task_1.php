<?php

$textStorage = [];

function add(string $title, string $text, &$arr): void
{
    $arr[] = [
        'title' => $title,
        'text' => $text,
    ];
}

function remove(int $textNumber, &$textArray): bool
{
    foreach ($textArray as $key => $item) {
        if ($key == $textNumber) {
            $check = true;
            unset($textArray[$key]);
        }
    }
    return $check ?? false;
}

function edit(int $textNumber, string $title, string $text, &$textArray): bool
{
    foreach ($textArray as $key => $item) {
        if ($key == $textNumber) {
            $textArray[$key]['title'] = $title;
            $textArray[$key]['text'] = $text;
            $check = true;
        }
    }
    return $check ?? false;
}

add('first', 'text1', $textStorage);
add('second', 'text2', $textStorage);

echo "Origin array: \n";
var_dump($textStorage);
echo PHP_EOL;

//var_dump(remove(0, $textStorage));
//var_dump(remove(5, $textStorage));


var_dump(edit(1, 'testTitle', $textStorage[1]['text'], $textStorage));
echo PHP_EOL;

echo "Edited array: \n";
var_dump($textStorage);
echo PHP_EOL;

var_dump(edit(5, '', '', $textStorage));