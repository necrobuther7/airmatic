<?php
/* Smarty version 4.2.1, created on 2024-01-22 20:24:34
  from 'C:\xampp\htdocs\airmatic\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65af15523ba058_84329038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '160ed72a5f7d8992ab903d17ca775b9c2caf3cb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airmatic\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65af15523ba058_84329038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\airmatic\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\16\\0e\\d7\\160ed72a5f7d8992ab903d17ca775b9c2caf3cb8_2.file.helpers.tpl.php',
    'uid' => '160ed72a5f7d8992ab903d17ca775b9c2caf3cb8',
    'call_name' => 'smarty_template_function_renderLogo_27100455465af15523b3fa4_48062819',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_27100455465af15523b3fa4_48062819 */
if (!function_exists('smarty_template_function_renderLogo_27100455465af15523b3fa4_48062819')) {
function smarty_template_function_renderLogo_27100455465af15523b3fa4_48062819(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_27100455465af15523b3fa4_48062819 */
}
