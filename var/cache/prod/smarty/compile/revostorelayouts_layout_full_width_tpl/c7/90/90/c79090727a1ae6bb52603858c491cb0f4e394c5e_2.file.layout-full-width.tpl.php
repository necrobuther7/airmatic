<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'C:\xampp\htdocs\airmatic\themes\revostore\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce03f9d02_40926217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c79090727a1ae6bb52603858c491cb0f4e394c5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\revostore\\templates\\layouts\\layout-full-width.tpl',
      1 => 1747274152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827cce03f9d02_40926217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1376234946827cce03f82a9_04871813', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12779921576827cce03f8bf6_32152519', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15064250066827cce03f92a1_95267170', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_1376234946827cce03f82a9_04871813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1376234946827cce03f82a9_04871813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_12779921576827cce03f8bf6_32152519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_12779921576827cce03f8bf6_32152519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_14583987226827cce03f95a0_16919059 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_15064250066827cce03f92a1_95267170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_15064250066827cce03f92a1_95267170',
  ),
  'content' => 
  array (
    0 => 'Block_14583987226827cce03f95a0_16919059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14583987226827cce03f95a0_16919059', 'content', $this->tplIndex);
?>

        </div>
    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
