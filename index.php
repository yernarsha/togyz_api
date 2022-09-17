<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Access-Control-Allow-Methods: *');
header("Access-Control-Allow-Credentials: true");

require 'connection.php';
require 'games.php';

header('Content-type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0];
$id = $params[1];

if ($method === 'GET') {
    if ($type === 'games') {
        if (isset($id)) {
            getGame($pdo, intval($id));
        } else {
            getGames($pdo);
        }
    }

} elseif ($method  === "POST") {

} elseif ($method  === "PATCH") {

} elseif ($method  === "DELETE") {

}