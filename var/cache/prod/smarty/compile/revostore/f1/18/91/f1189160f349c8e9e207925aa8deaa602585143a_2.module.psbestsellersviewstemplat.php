<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'module:psbestsellersviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce0bacb30_53140406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1189160f349c8e9e207925aa8deaa602585143a' => 
    array (
      0 => 'module:psbestsellersviewstemplat',
      1 => 1747274151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_6827cce0bacb30_53140406 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="bestseller_products" class="featured-products home-block-section col-xs-12 col-sm-12">
  <div class="products product_list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>

<?php }
}
