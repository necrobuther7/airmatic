<?php
/* Smarty version 4.2.1, created on 2024-01-23 02:17:50
  from 'C:\xampp\htdocs\airmatic\themes\classic\templates\customer\history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65af13bebf4309_80282749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3605f61b062d5cb4ad3da58917cc3ff330e418c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\classic\\templates\\customer\\history.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65af13bebf4309_80282749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136146504265af13bebe7086_37510325', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171578931365af13bebe7c91_82022411', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_136146504265af13bebe7086_37510325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_136146504265af13bebe7086_37510325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_171578931365af13bebe7c91_82022411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_171578931365af13bebe7c91_82022411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here are the orders you\'ve placed since your account was created.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h6>

  <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <table class="table table-striped table-bordered table-labeled hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th class="hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th class="hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
          <tr>
            <th scope="row"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
</th>
            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['order_date'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-xs-right"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="hidden-md-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['payment'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td>
              <span
                class="label label-pill <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'], ENT_QUOTES, 'UTF-8');?>
"
                style="background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['history']['current']['color'], ENT_QUOTES, 'UTF-8');?>
"
              >
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'], ENT_QUOTES, 'UTF-8');?>

              </span>
            </td>
            <td class="text-sm-center hidden-md-down">
              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE415;</i></a>
              <?php } else { ?>
                -
              <?php }?>
            </td>
            <td class="text-sm-center order-actions">
              <a class="view-order-details-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

              </a>
              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
                <a class="reorder-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
              <?php }?>
            </td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>

    <div class="orders hidden-md-up">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
        <div class="order">
          <div class="row">
            <div class="col-xs-10">
              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
"><h3><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
</h3></a>
              <div class="date"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['order_date'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="total"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="status">
                <span
                  class="label label-pill <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'], ENT_QUOTES, 'UTF-8');?>
"
                  style="background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['history']['current']['color'], ENT_QUOTES, 'UTF-8');?>
"
                >
                  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'], ENT_QUOTES, 'UTF-8');?>

                </span>
              </div>
            </div>
            <div class="col-xs-2 text-xs-right">
                <div>
                  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
                    <i class="material-icons">&#xE8B6;</i>
                  </a>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
                  <div>
                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                      <i class="material-icons">&#xE863;</i>
                    </a>
                  </div>
                <?php }?>
            </div>
          </div>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php } else { ?>
    <div class="alert alert-info" role="alert" data-alert="info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have not placed any orders.','d'=>'Shop.Notifications.Warning'),$_smarty_tpl ) );?>
</div>
  <?php }
}
}
/* {/block 'page_content'} */
}
