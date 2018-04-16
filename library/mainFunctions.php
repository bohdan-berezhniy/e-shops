<?php
/**
 * Основні функції
 */
/**
 * Формування запитуваної сторінки
 * 
 * @param string $controllerName назва контролера
 * @param string $actionName назва функції обробки запиту
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix. $controllerName .PathPostfix;
    
    $functions = $actionName . 'Action';
    $functions($smarty);
}
/**
 * Загрузка шаблону
 * 
 * @param type $smarty
 * @param type $templateName
 */
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName.TemplatePostfix);    
}
/**
 * Перевірка 
 * 
 * @param type $value
 * @param type $die if 1 die without parameters die, 0  for life
 */
function d($value = null, $die = 1){
    echo 'Debug:<br>,<pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}
/**
 * Записуємо дочірні категорії в масив і повертаємо їх
 * 
 * @param type $rs
 * @return boolean
 */
function createSmartyRsArray($rs){
    if(!$rs)        return false;
    
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
         $smartyRs[] = $row;   
    }
   
    return $smartyRs;
}