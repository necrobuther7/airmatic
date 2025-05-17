<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce0caf5e2_64890045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1747274151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827cce0caf5e2_64890045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9474398796827cce0caa511_62615748';
?>
<div id="block_myaccount_infos" class="links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
         <i class="material-icons add">expand_more</i>
         <i class="material-icons remove">expand_less</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
        <li>
            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'my account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</a>
        </li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_account_urls']->value, 'my_account_url');
$_smarty_tpl->tpl_vars['my_account_url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['my_account_url']->value) {
$_smarty_tpl->tpl_vars['my_account_url']->do_else = false;
?>
        <li>
          <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['my_account_url']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['my_account_url']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['my_account_url']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

          </a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   
    	</ul>
</div>
<?php }
}
