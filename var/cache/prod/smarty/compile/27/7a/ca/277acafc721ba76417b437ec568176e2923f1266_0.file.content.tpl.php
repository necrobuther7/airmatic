<?php
/* Smarty version 4.2.1, created on 2024-01-22 20:38:36
  from 'C:\xampp\htdocs\airmatic\admin487j9cbs1jljrtipdi4\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65af189cabdca6_58146702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277acafc721ba76417b437ec568176e2923f1266' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\admin487j9cbs1jljrtipdi4\\themes\\default\\template\\content.tpl',
      1 => 1679925208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65af189cabdca6_58146702 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}