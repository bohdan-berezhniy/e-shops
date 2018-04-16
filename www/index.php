<?php
include_once '../config/config.php'; // Загальні настройки
include_once '../config/db.php'; // Підключення БД
include_once '../library/mainFunctions.php'; //ОСновні функції
// визначаємо контролер з яким працюватимемо
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $controllerName, $actionName);
//d($smarty);