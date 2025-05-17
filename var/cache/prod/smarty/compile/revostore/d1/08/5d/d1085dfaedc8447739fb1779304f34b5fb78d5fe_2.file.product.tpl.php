<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'C:\xampp\htdocs\airmatic\themes\revostore\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce0bde441_67112171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1085dfaedc8447739fb1779304f34b5fb78d5fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1747274151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_6827cce0bde441_67112171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="image_item_product">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7491830436827cce0bcb694_58349926', 'product_thumbnail');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12516004886827cce0bd1224_78814933', 'product_variants');
?>

    </div>
    <div class="product-description">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19782079176827cce0bd2d36_44762086', 'product_name');
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['description_short'])) && $_smarty_tpl->tpl_vars['product']->value['description_short'] != '') {?>
        <div class="short_description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],100,'...' ));?>
</div>
      <?php }?>
      
      <div class="hook-reviews">
	      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

	  </div>
      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10823382386827cce0bd6e93_91970787', 'product_price_and_shipping');
?>

      <div class="highlighted-informations">
         <div class="add_to_cart_button atc_div">
               <input name="qty" type="hidden" class="form-control atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>
                <button class="add_to_cart btn btn-primary" onclick="mypresta_productListCart.add($(this));">
                    <i class="fa fa-shopping-cart"></i>
                </button>
         </div>
         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          <a href="#" class="quick-view" data-link-action="quickview">
            <i class="material-icons">zoom_in</i>
          </a>
        </div>
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11186831646827cce0bda934_85879834', 'product_flags');
?>

  </div>
</article>
<?php }
/* {block 'product_thumbnail'} */
class Block_7491830436827cce0bcb694_58349926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_7491830436827cce0bcb694_58349926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
            <img src = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
          </a>
        <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_variants'} */
class Block_12516004886827cce0bd1224_78814933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_12516004886827cce0bd1224_78814933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_name'} */
class Block_19782079176827cce0bd2d36_44762086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_19782079176827cce0bd2d36_44762086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h4 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h4>
      <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_10823382386827cce0bd6e93_91970787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_10823382386827cce0bd6e93_91970787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="product-price-and-shipping">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


              <span class="regular-price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['regular_price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                          <?php }?>
            <span itemprop="price" class="price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

          </div>
        <?php }?>
      <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_flags'} */
class Block_11186831646827cce0bda934_85879834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_11186831646827cce0bda934_85879834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] != 'discount') {?>
              <li class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['flag']->value['type'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['flag']->value['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
              </li>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                <li class="product-discount">
                    <span class="discount-percen"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_percentage'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                </li>
              <?php }?>
            <?php }?>
        <?php }?>
      </ul>
    <?php
}
}
/* {/block 'product_flags'} */
}
