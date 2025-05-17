<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'C:\xampp\htdocs\airmatic\themes\revostore\modules\ets_megamenu\views\templates\hook\product-list-17.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce0811da6_71104321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '276f6984c97277b1066c10c713435fe8f26df53e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\modules\\ets_megamenu\\views\\templates\\hook\\product-list-17.tpl',
      1 => 1747274150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_6827cce0811da6_71104321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?>	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
          <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
          <div class="thumbnail-container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18025398416827cce0805225_80159469', 'product_thumbnail');
?>

            <div class="product-description">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2190129016827cce08081a9_22689618', 'product_name');
?>

                <div class="mm_short_description">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],80,'...' ));?>

                </div>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19788151286827cce080a2b3_17862843', 'product_price_and_shipping');
?>

            </div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19735743916827cce080e469_33864546', 'product_flags');
?>

            <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
              <a href="#" class="quick-view" data-link-action="quickview" >
                <i class="material-icons search">search</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </a>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10543060056827cce0810a35_05093174', 'product_variants');
?>

            </div>
        
          </div>
        </article>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
<?php }
}
/* {block 'product_thumbnail'} */
class Block_18025398416827cce0805225_80159469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_18025398416827cce0805225_80159469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                <img src = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
              </a>
            <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_2190129016827cce08081a9_22689618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_2190129016827cce08081a9_22689618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
              <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_19788151286827cce080a2b3_17862843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_19788151286827cce080a2b3_17862843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                  <div class="product-price-and-shipping">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

        
                    <span itemprop="price" class="price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
        
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

        
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

        
                      <span class="regular-price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['regular_price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                      <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                        <span class="discount-percentage"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_percentage'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                      <?php }?>
                    <?php }?>
        
                    
                  </div>
                <?php }?>
              <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_flags'} */
class Block_19735743916827cce080e469_33864546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_19735743916827cce080e469_33864546',
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
                  <li class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['flag']->value['type'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['flag']->value['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_variants'} */
class Block_10543060056827cce0810a35_05093174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_10543060056827cce0810a35_05093174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
                <?php }?>
              <?php
}
}
/* {/block 'product_variants'} */
}
