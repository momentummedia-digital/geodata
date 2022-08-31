<?php

$area = file_get_contents('area.json');
$areas = file_get_contents('areas.json');

$area = json_decode($area);
$areas = json_decode($areas);

//var_dump($area->features);
//var_dump($areas->features);

$data = new stdClass();
$data->type = 'Feature';
$data->geometry = $area->geometries[0];
$data->id = 11;
$data->properties = new stdClass();
$data->properties->state = "wa";
$data->properties->link = "/reports/kimberley-region-smart-property-investment";
$data->properties->area = "The Kimberley";

$areas->features [] = $data;

file_put_contents('areas.json', json_encode($areas));