<?php
/* Smarty version 4.2.1, created on 2024-01-22 20:24:33
  from 'C:\xampp\htdocs\airmatic\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65af1551f20ad3_89301035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74a8ea609ec7e5ad66b9f8a7d687425982d2d91d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65af1551f20ad3_89301035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '174540052865af1551f1cc38_37003717';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137404870265af1551f1dd26_11905305', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_137404870265af1551f1dd26_11905305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_137404870265af1551f1dd26_11905305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}