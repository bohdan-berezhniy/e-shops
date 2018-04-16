<?php
/**
 * Модель для таблиці продукти
 * 
 */

/**
 * Получаємо останні добавлені товари
 * @param type $limit - кількість товарів
 * @return type
 */
function getLastProducts($limit = null){
    $sql = "SELECT *
            FROM products 
            ORDER by id DESC";
    if($limit){
         $sql .=" LIMIT {$limit}";
         $rs = mysql_query($sql);
        
         return createSmartyRsArray($rs);
    }
            
}

/**
 * Получити продукти для категорії $itemId
 * @param int $itemId id категорії
 * @return array масив продуктів
 */
function getProductsByCat($itemId){
    $itemId = intval($itemId);
      $sql = "SELECT *
           FROM products
           WHERE category_id = '{$itemId}'";
   $rs = mysql_query($sql);
   
   return createSmartyRsArray($rs);
}