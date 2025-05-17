<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:15
  from 'C:\xampp\htdocs\airmatic\themes\revostore\modules\ybc_widget\views\templates\hook\widgets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827ccdff1aba8_92268687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a2ccc94ed1d7825225f5bb6ae9cd971e79bc866' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\modules\\ybc_widget\\views\\templates\\hook\\widgets.tpl',
      1 => 1747274151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827ccdff1aba8_92268687 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['widget_hook']->value == "display-top-column") {?>
            <div class="ybc-widget-display-home">
            <div class="ybc-widget-display-home-content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <div class="sang ybc-widget-item<?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FLOAT_CSS3'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FLOAT_CSS3'] == 1) {?> wow zoomIn<?php }?>">
                        <div class="ybc-widget-item-content">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?>
                                <div class="item-icon"><div class="table"><div class="table-cell">
                                    <i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i>
                                </div></div></div>
                            <?php }?>
                            <div class="parala_content"> 
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?>
                                    <h4 class="ybc-widget-title">
                                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    </h4>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                    <div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                    <a class="button_widget" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <?php }?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop now','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                    </a>
                                <?php }?>
                            </div>
                        </div>  
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php } elseif (($_smarty_tpl->tpl_vars['widget_hook']->value == "display-left-column" || $_smarty_tpl->tpl_vars['widget_hook']->value == "display-right-column")) {?>
        <div class="block">
            <ul class="ybc-widget-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_hook']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 block_content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                        
                        
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['description'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "ybc-footer-links") {?>
            <ul class="ybc-widget-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_hook']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class=""><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                        <div class="block_content toggle-footer">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['description'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "ybc-custom-4") {?>
        <ul class="ybc-widget-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_hook']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                <li class="ybc-widget-item">
                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div><?php }?>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php } elseif (($_smarty_tpl->tpl_vars['widget_hook']->value == "ybc-custom-3")) {?>
             <ul class="ybc-widget-ybc-custom-1 col-xs-12 col-sm-12 <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_BANNER'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_BANNER'] != 1) {?> hidden-xs-down<?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <div class="ybc-widget-item-content">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                    <a class="ybc_widget_link_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                    </a>
                                <?php }?>
                            <?php }?>
                            <div class="ybc-widget-description-content">
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                
                                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['subtitle']) {?><h5 class="ybc-widget-subtitle"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['subtitle'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h5><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                    <div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div>
                                <?php }?>
                            </div>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
    <?php } elseif (($_smarty_tpl->tpl_vars['widget_hook']->value == "ybc-custom-2")) {?>
             <ul class="ybc-widget-ybc-custom-2 col-xs-12 col-sm-12 <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_SEARCHED'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_SEARCHED'] != 1) {?> hidden-xs-down<?php }?>">
                <li class="widget_title_custom"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Most searched keywords:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                <a class="ybc_widget_link_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                </a>
                            <?php }?>
                        <?php }?>
                        <div class="ybc-widget-description-content">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?>
                                <h4 class="ybc-widget-title">
                                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?>
                                </h4>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['subtitle']) {?><h5 class="ybc-widget-subtitle"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['subtitle'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h5><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                <div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div>
                            <?php }?>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
    <?php } elseif (($_smarty_tpl->tpl_vars['widget_hook']->value == 'ybc-custom-1')) {?>
             <ul class="ybc-widget-ybc-custom-1 col-xs-12 col-sm-12 <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_SERVICES_MOBILE'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_SERVICES_MOBILE'] != 1) {?> hidden-xs-down<?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="line_ver">
                        
                    </li>
                    <li class="ybc-widget-item">
                        <div class="ybc-widget-item-content">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                    <a class="ybc_widget_link_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                    </a>
                                <?php }?>
                            <?php }?>
                            <div class="ybc-widget-description-content">
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                
                                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['subtitle']) {?><h5 class="ybc-widget-subtitle"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['subtitle'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h5><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                    <div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div>
                                <?php }?>
                            </div>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "ybc-custom-6") {?>
        <section class="footer-block">
            <h4 class="" style="display: none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h4>
            <ul class="ybc-widget-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_hook']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 block_content toggle-footer">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <div class="ybc-widget-item-content">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                    <a class="ybc_widget_link_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LAYOUT'] == 'LAYOUT3') {?>style="background-image:url(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
);"<?php }
}?>>
                                        <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                    </a>
                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><span class="title"><?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php } else { ?></span><?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                <div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div>
                            <?php }?>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>  
        </section>      
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "ybc-custom-5") {?>
        <ul class="ybc-widget-ybc-custom-1<?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_BANNER'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_BANNER']) {
} else { ?> hidden-xs<?php }?>">                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <div class="ybc-widget-item-content">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                    <a class="ybc_widget_link_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LAYOUT'] == 'LAYOUT3') {?>style="background-image:url(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
);"<?php }
}?>>
                                        <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                    </a>
                                <?php }?>
                            <?php }?>
                            <div class="ybc-widget-description-content">
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                    <div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div>
                                <?php }?>
                            </div>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "display-home") {?>
        <ul class="ybc-widget-ybc-custom-3 col-xs-12 col-sm-12 <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_BANNER'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_ENABLE_BANNER'] != 1) {?> hidden-xs-down<?php }?>">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                <li class="ybc-widget-item">
                    <div class="ybc-widget-item-content">
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                <a class="ybc_widget_link_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                </a>
                            <?php }?>
                        <?php }?>
                        <div class="ybc-widget-description-content">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                            
                            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['subtitle']) {?><h5 class="ybc-widget-subtitle"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['subtitle'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h5><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                <div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div>
                            <?php }?>
                        </div>
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php } else { ?>
            <div class="container">
            <?php if (($_smarty_tpl->tpl_vars['layouts']->value == 'layout2')) {?> <div class="row"><?php }?>
            <ul  class="ybc-widget-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_hook']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item<?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FLOAT_CSS3'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FLOAT_CSS3'] == 1) {?> wow zoomIn<?php }?>">
                        <div class="ybc-widget-item-content"> 
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title'] || $_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                <div class="ybc-widget-description-content"> 
                                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?>
                                        <h4 class="ybc-widget-title">
                                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?>
                                        </h4>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                        <div class="ybc-widget-description">
                                            <?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>

                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php if (($_smarty_tpl->tpl_vars['layouts']->value == 'layout2')) {?></div><?php }?>
            </div>
    <?php }
}?>

<?php }
}
