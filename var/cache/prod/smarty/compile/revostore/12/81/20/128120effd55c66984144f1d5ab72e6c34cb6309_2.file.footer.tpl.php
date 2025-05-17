<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'C:\xampp\htdocs\airmatic\themes\revostore\modules\ybc_blog_free\views\templates\hook\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce0dfdbc2_01649860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '128120effd55c66984144f1d5ab72e6c34cb6309' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\modules\\ybc_blog_free\\views\\templates\\hook\\footer.tpl',
      1 => 1747274151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827cce0dfdbc2_01649860 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    ybc_blog_free_like_url = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['like_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    ybc_like_error ='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_like_error']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    YBC_BLOG_FREE_GALLERY_SPEED = <?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['YBC_BLOG_FREE_GALLERY_SPEED']->value), ENT_QUOTES, 'UTF-8');?>
;
    YBC_BLOG_FREE_SLIDER_SPEED = <?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['YBC_BLOG_FREE_SLIDER_SPEED']->value), ENT_QUOTES, 'UTF-8');?>
;
    YBC_BLOG_FREE_GALLERY_SKIN = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_BLOG_FREE_GALLERY_SKIN']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    YBC_BLOG_FREE_GALLERY_AUTO_PLAY = <?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['YBC_BLOG_FREE_GALLERY_AUTO_PLAY']->value), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
><?php }
}
