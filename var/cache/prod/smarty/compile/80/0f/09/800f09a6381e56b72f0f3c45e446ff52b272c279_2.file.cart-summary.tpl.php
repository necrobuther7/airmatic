<?php
/* Smarty version 4.2.1, created on 2024-01-23 02:17:50
  from 'C:\xampp\htdocs\airmatic\themes\classic\templates\checkout\_partials\cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65af13be8eddc0_49986973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '800f09a6381e56b72f0f3c45e446ff52b272c279' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\classic\\templates\\checkout\\_partials\\cart-summary.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-top.tpl' => 1,
    'file:checkout/_partials/cart-summary-products.tpl' => 1,
    'file:checkout/_partials/cart-summary-subtotals.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
  ),
),false)) {
function content_65af13be8eddc0_49986973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164803631265af13be8ea869_61183209', 'hook_checkout_summary_top');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24803826165af13be8eb4a2_25170878', 'cart_summary_products');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23520518965af13be8ebf82_54682566', 'cart_summary_subtotals');
?>

  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73507905665af13be8eca65_97712446', 'cart_summary_totals');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145727612565af13be8ed511_28176157', 'cart_summary_voucher');
?>


</section>
<?php }
/* {block 'hook_checkout_summary_top'} */
class Block_164803631265af13be8ea869_61183209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
    0 => 'Block_164803631265af13be8ea869_61183209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'hook_checkout_summary_top'} */
/* {block 'cart_summary_products'} */
class Block_24803826165af13be8eb4a2_25170878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
    0 => 'Block_24803826165af13be8eb4a2_25170878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
class Block_23520518965af13be8ebf82_54682566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
    0 => 'Block_23520518965af13be8ebf82_54682566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-subtotals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_totals'} */
class Block_73507905665af13be8eca65_97712446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
    0 => 'Block_73507905665af13be8eca65_97712446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
/* {block 'cart_summary_voucher'} */
class Block_145727612565af13be8ed511_28176157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
    0 => 'Block_145727612565af13be8ed511_28176157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
}
