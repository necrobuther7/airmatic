<?php
/* Smarty version 4.2.1, created on 2024-01-23 02:17:49
  from 'C:\xampp\htdocs\airmatic\admin\themes\default\template\helpers\list\list_action_default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65af13bd5a6537_72877414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f9cbe0acb9adccf61b6adf56c97a8234a3ccb34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\admin\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1679925208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65af13bd5a6537_72877414 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?> name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
