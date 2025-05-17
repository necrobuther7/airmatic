<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'C:\xampp\htdocs\airmatic\themes\revostore\modules\ybc_blog_free\views\templates\hook\home_blocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce0005a88_36374446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abba58c5629431c907f84c9da6e75c12a3d2f245' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\modules\\ybc_blog_free\\views\\templates\\hook\\home_blocks.tpl',
      1 => 1747274151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827cce0005a88_36374446 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogNewsBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogPopularPostsBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogFeaturedPostsBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogGalleryBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
}
}
