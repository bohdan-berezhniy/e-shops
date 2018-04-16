<?php
/*
 * Файл настройок
 * 
 */
//Constans for called controllers
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');



//>Використовуваний шаблон
$template = 'default';
// шляхи до файлів шаблонів
define("TemplatePrefix", "../views/{$template}/");
define("TemplatePostfix", '.tpl');

// Шлязи до файліф шаблонів в вебпросторі www
define("TemplateWebPath",  "/templates/{$template}/");

// includes Smarty
require '../library/Smarty/libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
        