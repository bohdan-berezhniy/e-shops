<?php

/* 
 * categoryController.php
 * 
 * Контролер сторінки категорій (/category/1)
 * 
 */

// підкулючаємо моделі
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формування сторінки категорії
 * 
 */
function indexAction($smarty){
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if($catId == null) exit();
    
    $rsProduct = null;
    $rsChildCats = null;
    
    $rsCategory = getCatById($catId);
    
    //якщо категорія головна то показуємо дочірні категорії
    //інакше виводимо товар
    if($rsCategory['parent_id'] == 0){
        $rsChildCats = getChildrenForCat($catId);
     
    } else {
        $rsProducts = getProductsByCat($catId);
    }
  
    
    $rsCategories = getAllMainCatsWithChildren();

   //сторення змінних й передача даних в smarty
    $smarty->assign('pageTitle', 'Товари категорії'.$rsCategory['name']);
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);
    
    $smarty->assign('rsCategories', $rsCategories);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer'); 
}