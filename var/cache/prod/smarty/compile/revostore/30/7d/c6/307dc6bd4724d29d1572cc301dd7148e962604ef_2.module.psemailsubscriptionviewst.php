<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce0da7451_72614764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1747274151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827cce0da7451_72614764 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block_newsletter links col-lg-3 col-md-3 col-sm-12">
    <h4 class="text-uppercase title-footer-block hidden-xs-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h4>
    <div class="title clearfix hidden-md-up" data-target="#footer_nlt" data-toggle="collapse">
        <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</span>
        <span class="pull-xs-right">
            <span class="navbar-toggler collapse-icons">
                <i class="material-icons add">expand_more</i>
                <i class="material-icons remove">expand_less</i>
            </span>
        </span>
    </div>
    <div id="footer_nlt" class="col-md-12 col-xs-12 collapse">
      <form action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['index'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
                <p><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['conditions']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
            <div class="block_newsletter_form">
                <div class="newsletter_submit">
                <input
                  class="btn btn-primary pull-xs-right"
                  name="submitNewsletter" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" >
                <input
                  class="btn btn-primary pull-xs-right hidden-sm-up hidden-xs-down"
                  name="submitNewsletter"
                  type="submit"
                  value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                >
                </div>
                <div class="input-wrapper">
                  <input
                    name="email"
                    type="text"
                    value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                    placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                  >
                </div>
                <input type="hidden" name="action" value="0">
                <div class="clearfix"></div>
            </div>
          <div class="col-xs-12">
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['msg']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
          </div>
        </div>
      </form>
    </div>
</div>
<?php }
}
