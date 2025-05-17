<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:41:13
  from 'C:\xampp\htdocs\airmatic\themes\revostore\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cd199d0681_37250659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee7cf79b24937af97822cc6f3b4492fe65c39bbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\templates\\contact.tpl',
      1 => 1747274152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827cd199d0681_37250659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15940986426827cd199b2998_35573506', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18648208366827cd199b3765_03394081', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_15940986426827cd199b2998_35573506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_15940986426827cd199b2998_35573506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_18648208366827cd199b3765_03394081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_18648208366827cd199b3765_03394081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'] == 'contact_layout1') {?>
      <div class="page_contact_layout1 col-xs-12 col-sm-12">
          <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] != '') {?>
            <div class="embe_map_contact">
                <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'];?>

            </div>
          <?php }?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

      </div>
    <?php }?>
    
    
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'] == 'contact_layout2') {?>
        <div class="page_contact_layout2 col-xs-12 col-sm-12">
            <div class="row">
              <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] != '') {?>
                
                    <div class="embe_map_contact col-xs-12 col-sm-6">
                        <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'];?>

                    </div>
                    <div class="embe_map_contact col-xs-12 col-sm-6">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                    </div>
                
              <?php } else { ?>
                <div class="embe_map_contact col-xs-12 col-sm-12">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                </div>
              <?php }?>
              <div class="col-xs-12 col-sm-12">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

              </div>
            </div>
        </div> 
    <?php }?>
    
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'] == 'contact_layout3') {?>
        <div class="page_contact_layout3">  
          <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] != '') {?>
                <div class="col-sm-6 col-md-4">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="embe_map_contact">
                        <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'];?>

                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                </div>
          <?php } else { ?>
                <div class="col-sm-6 col-md-6">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

                </div>
                <div class="col-sm-6 col-md-6">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                </div>
          <?php }?>
        </div>
    <?php }
}
}
/* {/block 'page_content'} */
}
