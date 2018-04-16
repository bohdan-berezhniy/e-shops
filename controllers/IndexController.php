<?php
/**
 * Контролер головної сторінки
 * 
 */

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function testAction(){
    echo "IndexController.php -> testAction";
}
/**
 * формування головної сторінки
 * 
 * @param type $smarty
 */
function indexAction($smarty){
    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(16);
   //сторення змінних й передача даних в smarty
    $smarty->assign('pageTitle', 'Головна сторінка сайту');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);
    
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
