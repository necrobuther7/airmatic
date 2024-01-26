<?php
/* Smarty version 4.2.1, created on 2024-01-23 02:17:49
  from 'C:\xampp\htdocs\airmatic\admin\themes\default\template\helpers\tree\tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65af13bd92cc24_20015651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '179da1c52140940119e7b09bf108019bee10d314' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\admin\\themes\\default\\template\\helpers\\tree\\tree.tpl',
      1 => 1679925208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65af13bd92cc24_20015651 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<?php }
}
