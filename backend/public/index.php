<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
if ($_SERVER["REQUEST_METHOD"] == 'OPTIONS') {
    header("Access-Control-Allow-Origin: " . $_SERVER["HTTP_ORIGIN"]);
    header("Access-Control-Allow-Methods: *");
    http_response_code(200);
}
echo "<pre>";
var_dump($_SERVER["REQUEST_METHOD"]);
var_dump($_SERVER["HTTP_ORIGIN"]?? '*');
echo "</pre>";
