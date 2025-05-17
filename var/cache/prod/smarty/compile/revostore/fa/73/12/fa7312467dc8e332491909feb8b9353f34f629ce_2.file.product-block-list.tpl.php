<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:15
  from 'C:\xampp\htdocs\airmatic\themes\revostore\modules\ets_homecategories\views\templates\hook\product-block-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827ccdf96b0c8_98051225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa7312467dc8e332491909feb8b9353f34f629ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\modules\\ets_homecategories\\views\\templates\\hook\\product-block-list.tpl',
      1 => 1747274150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827ccdf96b0c8_98051225 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['sort_options']->value) {?>
    <form action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_dir']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <label for="homecat_sort_by_<?php if ($_smarty_tpl->tpl_vars['id_category']->value) {
echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['id_category']->value), ENT_QUOTES, 'UTF-8');
} else { ?>all<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</label>
        <select name="homecat_sort_by" id="homecat_sort_by_<?php if ($_smarty_tpl->tpl_vars['id_category']->value) {
echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['id_category']->value), ENT_QUOTES, 'UTF-8');
} else { ?>all<?php }?>" class="homecat_sort_by">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort_options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['sort_by']->value == $_smarty_tpl->tpl_vars['option']->value['id_option']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id_option'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </form>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_CATEGORY_BANNER']->value == 'above') {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryBanner','id_category'=>$_smarty_tpl->tpl_vars['id_category']->value),$_smarty_tpl ) );?>

<?php }?>       
<div class="homecat_tabs <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_ENBLE_CAROUSEL']->value) {?>homecat_tab_carousel_enabled<?php } else { ?>homecat_tab_type_list<?php }?> homecat_tabs_<?php if ($_smarty_tpl->tpl_vars['id_category']->value) {
echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['id_category']->value), ENT_QUOTES, 'UTF-8');
} else { ?>all<?php }?>">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductList','id_category'=>$_smarty_tpl->tpl_vars['id_category']->value,'wrapper'=>true),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_LOADING_ENABLED']->value) {?>
        <div class="sk-fading-circle">
          <div class="sk-circle1 sk-circle"></div>
          <div class="sk-circle2 sk-circle"></div>
          <div class="sk-circle3 sk-circle"></div>
          <div class="sk-circle4 sk-circle"></div>
          <div class="sk-circle5 sk-circle"></div>
          <div class="sk-circle6 sk-circle"></div>
          <div class="sk-circle7 sk-circle"></div>
          <div class="sk-circle8 sk-circle"></div>
          <div class="sk-circle9 sk-circle"></div>
          <div class="sk-circle10 sk-circle"></div>
          <div class="sk-circle11 sk-circle"></div>
          <div class="sk-circle12 sk-circle"></div>
        </div>
    <?php }?>
</div><?php }
}
