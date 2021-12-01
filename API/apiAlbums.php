<?php
require_once __DIR__ . "/../Database-Dischi/arrDischi.php";

header("Content-Type: application/json");


echo json_encode($albums);
