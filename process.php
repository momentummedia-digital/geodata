<?php

$area = file_get_contents('area.json');
$areas = file_get_contents('areas.json');

$area = json_decode($area);
$areas = json_decode($areas);

//var_dump($area->features);
//var_dump($areas->features);

$areas->features [] = $area->features;

file_put_contents('areas.json', json_encode($areas));