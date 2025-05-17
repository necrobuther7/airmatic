<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:15
  from 'C:\xampp\htdocs\airmatic\themes\revostore\modules\ets_homecategories\views\templates\hook\homecat-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827ccdf8de2e1_59542739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3743f415a7f17d93a672f2815c46be1cf90dcadf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\modules\\ets_homecategories\\views\\templates\\hook\\homecat-list.tpl',
      1 => 1747274150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product-block-list.tpl' => 2,
  ),
),false)) {
function content_6827ccdf8de2e1_59542739 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE Home categories PRO -->
<div class="block products_block ets_home_categories clearfix homecat-tab-list <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_LOADING_ENABLED']->value) {?>loading-enabled<?php } else { ?>loading-disabled<?php }?>">	
	<?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_ENBLE_ALL_PRODUCT_TAB']->value || $_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_SUB']->value && $_smarty_tpl->tpl_vars['categories']->value) {?>
        <ul class="ets_homecat_category_list">
        <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_ENBLE_ALL_PRODUCT_TAB']->value) {?>
            <li class="is_parent_cat_li is_parent_cat_li_all col-xs-12 col-sm-12" data-id-category="all">
                <span data-id-category="all" class="<?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_OPEN_CAT_BY_LINK']->value) {?>homecat_ajax_tab_list homecat_ajax_tab_list_all<?php }?> is_parent_cat homecat_tab_name homcat_tab_all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All products','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_SUB']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySubCategories','id_category'=>2),$_smarty_tpl ) );?>

                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:./product-block-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_category'=>false), 0, false);
?>
            </li>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li class="is_parent_cat_li is_parent_cat_li_<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_CATEGORY_BANNER']->value != 'inline') {?>col-xs-12 col-sm-12<?php }?>" data-id-category="<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_CATEGORY_BANNER']->value == 'inline') {?>
                    <div class="banner_inline_listproduct">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryBanner','id_category'=>$_smarty_tpl->tpl_vars['category']->value['id_category']),$_smarty_tpl ) );?>

                    <div class="content_list_cat">
                <?php }?>
                        <a class="<?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_OPEN_CAT_BY_LINK']->value) {?>active homecat_ajax_tab_list homecat_ajax_tab_list_<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');
}?> is_parent_cat homecat_tab_name homcat_tab_<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-id-category="<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html' )), ENT_QUOTES, 'UTF-8');?>
</a>
                          
                        <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_SUB']->value) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySubCategories','id_category'=>$_smarty_tpl->tpl_vars['category']->value['id_category']),$_smarty_tpl ) );?>

                        <?php }?>                
                        <?php $_smarty_tpl->_subTemplateRender("file:./product-block-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_category'=>$_smarty_tpl->tpl_vars['category']->value['id_category']), 0, true);
?>    
                <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_CATEGORY_BANNER']->value == 'inline') {?>
                    </div>
                    </div>
                <?php }?>              
                <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_CATEGORY_BANNER']->value == 'below') {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryBanner','id_category'=>$_smarty_tpl->tpl_vars['category']->value['id_category']),$_smarty_tpl ) );?>

                <?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var homecat_ajax_link = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_dir']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    var ETS_HOMECAT_ENBLE_CAROUSEL = <?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['ETS_HOMECAT_ENBLE_CAROUSEL']->value), ENT_QUOTES, 'UTF-8');?>
;
    var ets_homecat_order_seed = <?php if ((isset($_smarty_tpl->tpl_vars['ets_homecat_order_seed']->value)) && (int)$_smarty_tpl->tpl_vars['ets_homecat_order_seed']->value > 0 && (int)$_smarty_tpl->tpl_vars['ets_homecat_order_seed']->value <= 10000) {
echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['ets_homecat_order_seed']->value), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>;
<?php echo '</script'; ?>
>
<!-- /MODULE Home categories PRO -->
<?php }
}
