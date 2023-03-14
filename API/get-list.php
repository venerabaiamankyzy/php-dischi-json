<?php
$data = file_get_contents(__DIR__. "/../data/dischi.json");

header('Content-Type: application/json; charset=utf-8');

echo $data;