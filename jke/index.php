<?php
require_once('Route.php');
require_once('osoby.php');

$db = new mysqli('localhost', 'root', '', 'hampter');

$db->set_charset('utf8');

use Steampixel\Route;
use osoby\osoby;
//  Route::add('/', function () {
//    echo 'Hello world!';
//  });

// Route::add('/login', function () {
//   return var_dump($_POST);
// }, 'post');

Route::add('/osoby/main', function () use ($db) {

  header('Content-Type: application/json');

  return json_encode(['osoby'=>osoby::main($db)]);
});

Route::add('/osoby/search1', function () use ($db) {

  header('Content-Type: application/json');

  return json_encode(['osoby'=>osoby::search1($db)]);
});

Route::add('/osoby/search2', function () use ($db) {

  header('Content-Type: application/json');

  return json_encode(['osoby'=>osoby::search2($db)]);
});

Route::add('/osoby/top10', function () use ($db) {

  header('Content-Type: application/json');

  return json_encode(['osoby'=>osoby::top10($db)]);
});

Route::run('/jke');

$db->close();
