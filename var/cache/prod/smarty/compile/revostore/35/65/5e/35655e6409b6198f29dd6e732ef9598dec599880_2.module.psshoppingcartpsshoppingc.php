<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce05a2b11_42835237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1747274151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_6827cce05a2b11_42835237 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_cart" data-refresh-url="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['refresh_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['refresh_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <a rel="nofollow" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
      <i class="fa fa-shopping-basket"></i>
      <span class="hidden-sm-down checkout_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
      <span class="checkout_total"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value['products_count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] <= 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?> - <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="cart-products-count"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value['products_count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
    </a>

    <!-- begin -->
    <div class="body cart-hover-content">
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
          <li class="cart-wishlist-item"><?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <?php if ((isset($_smarty_tpl->tpl_vars['cart']->value['subtotals']))) {?>
        <div class="cart-subtotals">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
?>
            <div class="<?php if ((isset($_smarty_tpl->tpl_vars['subtotal']->value['type']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subtotal']->value['type'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
              <span class="label"><?php if ((isset($_smarty_tpl->tpl_vars['subtotal']->value['label']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subtotal']->value['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></span>
              <span class="value"><?php if ((isset($_smarty_tpl->tpl_vars['subtotal']->value['value']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subtotal']->value['value'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></span>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['cart']->value['totals']['total']))) {?>
          <div class="cart-total">
            <span class="label"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="value"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
          </div>

        <?php }?>
      <?php }?>
      <div class="cart-wishlist-action">
                <a class="cart-wishlist-checkout" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['order'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      </div>
    </div>
    <!-- end -->
  </div>


</div>
<?php }
}
