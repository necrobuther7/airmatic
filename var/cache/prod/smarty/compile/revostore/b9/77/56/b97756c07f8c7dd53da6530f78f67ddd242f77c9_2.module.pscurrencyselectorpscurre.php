<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'module:pscurrencyselectorpscurre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce054aef0_41797800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:pscurrencyselectorpscurre',
      1 => 1747274151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827cce054aef0_41797800 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_currency_selector">
  <div class="currency-selector dropdown js-dropdown">
    <span class="expand-more _gray-darker">
        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_currency']->value['sign'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_currency']->value['iso_code'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)
        <i class="material-icons material-icons-expand_more"></i>
    </span>
    <ul class="dropdown-menu">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
          <a title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['sign'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['iso_code'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)</a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <select class="link hidden-md-up hidden-sm-down">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
        <option value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['sign'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['iso_code'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)</option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
</div><?php }
}
