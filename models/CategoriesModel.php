<?php
/**
 * Модель для таблиці категорій
 * 
 */
/**
 * Получити дочірні категорії для категорії $catId
 * 
 * @param type $catId
 */
function getChildrenForCat($catId){
   $sql = "SELECT *
           FROM categories
           WHERE parent_id = '{$catId}'";
           
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}
/**
 * Получити головні категорії з привязками дочірних
 * 
 * @return type
 */
function getAllMainCatsWithChildren(){
   $sql = "SELECT *
           FROM categories
           WHERE parent_id = 0";
   $rs = mysql_query($sql);
   $smartyRs = array();
   
   while ($row = mysql_fetch_assoc($rs)){
       $reChildren = getChildrenForCat($row['id']);
       
       if($reChildren){
           $row['children'] = $reChildren;
       }
       $smartyRs[] = $row;   
     
   }
   //d($smartyRs, 0);
   return $smartyRs;
}


/**
 * Получити данні категорії по Id
 * 
 * @param type $catId id категорії
 * @return array масив - стрічка категорії
 */
function getCatById($catId){
    $catId = intval($catId);
      $sql = "SELECT *
           FROM categories
           WHERE id = '{$catId}'";
   $rs = mysql_query($sql);
   
   return mysql_fetch_assoc($rs);
}