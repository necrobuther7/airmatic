<?php
/* Smarty version 4.2.1, created on 2024-01-23 00:17:55
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65af4c0305dff0_94464712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1671890849,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_65af4c0305dff0_94464712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\airmatic\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\16\\0e\\d7\\160ed72a5f7d8992ab903d17ca775b9c2caf3cb8_2.file.helpers.tpl.php',
    'uid' => '160ed72a5f7d8992ab903d17ca775b9c2caf3cb8',
    'call_name' => 'smarty_template_function_renderLogo_27100455465af15523b3fa4_48062819',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/airmatic/es/mi-cuenta" rel="nofollow">
      Su cuenta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/airmatic/es/datos-personales" title="Información" rel="nofollow">Información</a></li>
                  <li><a href="http://localhost/airmatic/es/direccion" title="Añadir primera dirección" rel="nofollow">Añadir primera dirección</a></li>
                          <li><a href="http://localhost/airmatic/es/historial-compra" title="Pedidos" rel="nofollow">Pedidos</a></li>
                          <li><a href="http://localhost/airmatic/es/facturas-abono" title="Facturas por abono" rel="nofollow">Facturas por abono</a></li>
                                  <li>
    <a href="http://localhost/airmatic/es/module/blockwishlist/lists" title="Mi lista de deseos" rel="nofollow">
      Lista de deseos
    </a>
  </li>
<li>
  <a href="//localhost/airmatic/es/module/ps_emailalerts/account" title="Mis alertas">
    Mis alertas
  </a>
</li>

        <li><a href="http://localhost/airmatic/es/?mylogout=" title="Cerrar sesión" rel="nofollow">Cerrar sesión</a></li>
       
	</ul>
</div>
<?php }
}
