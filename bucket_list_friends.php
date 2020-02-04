<?php

$results      = [];
$friendsCount = readLine('Hoeveel vrienden zal ik hun droom vragen ? ');

for ($i = 1; $i <= $friendsCount; $i++) {
    $name = readline('Wat is jouw naam ? ');
    $questionDream = readline('Wat is jouw droom ? ');
    
    $results[$name] = [
        'dream' => $questionDream,
    ];
}

foreach ($results as $name => $data) {
    echo "{$name} Heeft als droom : {$data['dream']}" . PHP_EOL;
}
?>
