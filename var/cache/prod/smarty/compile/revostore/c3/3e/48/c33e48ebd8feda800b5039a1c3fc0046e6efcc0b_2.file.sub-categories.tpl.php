<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:15
  from 'C:\xampp\htdocs\airmatic\themes\revostore\modules\ets_homecategories\views\templates\hook\sub-categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827ccdf920264_73600677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c33e48ebd8feda800b5039a1c3fc0046e6efcc0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\modules\\ets_homecategories\\views\\templates\\hook\\sub-categories.tpl',
      1 => 1747274150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827ccdf920264_73600677 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['children']->value)) && $_smarty_tpl->tpl_vars['children']->value) {?>
    <ul class="homcat_tab_sub_categroies<?php if ($_smarty_tpl->tpl_vars['sort_options']->value) {?> inline_sortby<?php }?>">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['children']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li>
                <a class="homcat_tab_<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_OPEN_CAT_BY_LINK']->value) {?>homecat_ajax_tab<?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_TABS_GROUPED']->value) {?>_list<?php }?> homecat_ajax_tab_<?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_TABS_GROUPED']->value) {?>list_<?php }
echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');
}?> is_sub_cat homecat_tab_name" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-id-category="<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html' )), ENT_QUOTES, 'UTF-8');?>
</a>                
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
