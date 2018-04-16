<?php /* Smarty version Smarty-3.1.6, created on 2018-03-29 16:31:24
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66165abb6f942be9e2-71172787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1522333543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66165abb6f942be9e2-71172787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5abb6f9434fd8',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abb6f9434fd8')) {function content_5abb6f9434fd8($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
       <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/css/main.css" type="text/css" /> 
    </head>
    <body>
        <div id="header">
            <h1>Інтернет магазин - myshop</h1>
        </div>

        
       <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        

        <div id="centerColumn">
        
            
   
<?php }} ?>