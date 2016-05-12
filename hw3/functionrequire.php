<?php
$fml = [
    'wife' => [
        'name' => 'Natalya',
        'old'  => '30',
        'height' => 172,
        'babyboy'  => [
            'name' => 'Петя',
            'old'  => 2,
        ],
        'babygirl' => [
            'name' => 'Аня',
            'old'  => 2.5,
        ],
    ],
    'husband' => [
        'name' => 'Sasha',
        'old'  => '30',
        'height' => 178,
        'babyboy'  => [

        ],
        'babygirl' => [
            'name' => 'Маня',
            'old'  => 2.9,
        ],
    ],

];

echo $data = serialize($fml);

$d = fopen('/Applications/XAMPP/xamppfiles/htdocs/hw3/functionrequire.txt',"w+");
fwrite($d, $data);
fclose($d);