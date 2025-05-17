<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'C:\xampp\htdocs\airmatic\themes\revostore\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce04f2b87_94275084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9f1572512179740fd5461aac5e18cdcbc14f20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\templates\\_partials\\header.tpl',
      1 => 1747274152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827cce04f2b87_94275084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="header_content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14188755686827cce04e0e35_24651611', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18761457726827cce04e9615_66905442', 'header_top');
?>

</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLS'),$_smarty_tpl ) );?>

<?php }
/* {block 'header_nav'} */
class Block_14188755686827cce04e0e35_24651611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_14188755686827cce04e0e35_24651611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
        <div class="nav">
            <div class="left-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

            </div>
            <div class="right-nav">
                <span class="toogle_nav">
                    <i class="material-icons d-inline menu">menu</i>
                </span>
                <div class="toogle_nav_right">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_TRACK_ORDER'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_TRACK_ORDER'] == 1) {?>
    					<a class="nav_link" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Track your order','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
">
    						<i class="fa fa-random"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Track your order','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>

    					</a>
    				<?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_STORE_LINK'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_STORE_LINK'] == 1) {?>
    					<a class="nav_link" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store locator','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
">
    						<i class="fa fa-map-marker"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store locator','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>

    					</a>
    				<?php }?>
                </div>
            </div>
        </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_18761457726827cce04e9615_66905442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_18761457726827cce04e9615_66905442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="mobile_logo">
    <div class="" id="_mobile_logo">
      <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['base_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <img class="logo img-responsive" src="<?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value && (isset($_smarty_tpl->tpl_vars['logo_url']->value)) && $_smarty_tpl->tpl_vars['logo_url']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['logo'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
      </a>
    </div>
  </div>
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="pull-xs-left hidden-md-up text-xs-center mobile closed" id="menu-icon">
          <i class="material-icons d-inline menu">menu</i>
        </div>
        <div class="col-md-4 hidden-sm-down" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['base_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value && (isset($_smarty_tpl->tpl_vars['logo_url']->value)) && $_smarty_tpl->tpl_vars['logo_url']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['logo'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

      </div>
    </div>
    <div class="menu_and_cattree">
        <div class="container">
            <div class="row">
             <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_CATE_BLOCK'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_CATE_BLOCK']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'customcategories'),$_smarty_tpl ) );?>

                <div class="custom_menu col-md-9 col-sm-9">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegaMenu'),$_smarty_tpl ) );?>

                </div>
             <?php } else { ?>
                <div class="custom_menu col-md-12 col-sm-12">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegaMenu'),$_smarty_tpl ) );?>

                </div>
             <?php }?>
            </div>
        </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

  
<?php
}
}
/* {/block 'header_top'} */
}
