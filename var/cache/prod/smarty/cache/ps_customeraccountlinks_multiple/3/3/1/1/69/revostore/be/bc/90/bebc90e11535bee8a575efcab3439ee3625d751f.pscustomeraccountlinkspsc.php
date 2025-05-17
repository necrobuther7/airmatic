<?php
/* Smarty version 4.2.1, created on 2025-05-16 18:40:16
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cce0cc8786_11543225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1747274151,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6827cce0cc8786_11543225 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="block_myaccount_infos" class="links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/airmatic/index.php?controller=my-account" rel="nofollow">
      My account
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
         <i class="material-icons add">expand_more</i>
         <i class="material-icons remove">expand_less</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
        <li>
            <a href="http://localhost/airmatic/index.php?controller=my-account" title="my account"> My account</a>
        </li>
            <li>
          <a href="http://localhost/airmatic/index.php?controller=identity" title="Información personal" rel="nofollow">
            Información personal
          </a>
        </li>
            <li>
          <a href="http://localhost/airmatic/index.php?controller=history" title="Pedidos" rel="nofollow">
            Pedidos
          </a>
        </li>
            <li>
          <a href="http://localhost/airmatic/index.php?controller=order-slip" title="Facturas por abono" rel="nofollow">
            Facturas por abono
          </a>
        </li>
            <li>
          <a href="http://localhost/airmatic/index.php?controller=addresses" title="Direcciones" rel="nofollow">
            Direcciones
          </a>
        </li>
       
    	</ul>
</div>
<?php }
}
