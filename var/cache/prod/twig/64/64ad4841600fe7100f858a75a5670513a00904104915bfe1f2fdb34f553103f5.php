<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__260459eebc478f34c1564ca0505fcdc622c938aaf9c433b088f33e82a11e51b9 */
class __TwigTemplate_625f577dcf532d30f7cd28f23fab3c640505687f48f0feebf27cd5a5f90e4dbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/airmatic/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/airmatic/img/app_icon.png\" />

<title>Facturas • airmatic-art</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminInvoices';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CO';
    var _PS_VERSION_ = '8.0.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '38fd00300c49b3b89dea57598e715bc2';
    var token_admin_orders = tokenAdminOrders = '419988616db74b809cb80d622a8e0f9a';
    var token_admin_customers = 'e06cd7eb366c46296f4e554accde90a2';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'd357a929ea573c82e564f302993c21ab';
    var currentIndex = 'index.php?controller=AdminInvoices';
    var employee_token = 'a4913a14c877c173dacfb89bd940eb72';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/modules/manage?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc';
    var admin_notification_get_link = '/airmatic/admin487j9cbs1jljrtipdi4/index.php/common/notifications?_toke";
        // line 42
        echo "n=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc';
    var admin_notification_push_link = adminNotificationPushLink = '/airmatic/admin487j9cbs1jljrtipdi4/index.php/common/notifications/ack?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/airmatic/admin487j9cbs1jljrtipdi4/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/airmatic/admin487j9cbs1jljrtipdi4/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/airmatic/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/airmatic/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/airmatic\\/admin487j9cbs1jljrtipdi4\\/\";
var baseDir = \"\\/airmatic\\/\";
var changeFormLanguageUrl = \"\\/airmatic\\/admin487j9cbs1jljrtipdi4\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\";
var currency = {\"iso_code\":\"COP\",\"sign\":\"\$\",\"name\":\"Peso colombiano\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"COP\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":6,\"minFractionDigits\":6,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minF";
        // line 67
        echo "ractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/airmatic/admin487j9cbs1jljrtipdi4/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/airmatic/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/airmatic/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/airmatic/js/admin.js?v=8.0.3\"></script>
<script type=\"text/javascript\" src=\"/airmatic/admin487j9cbs1jljrtipdi4/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/airmatic/js/tools.js?v=8.0.3\"></script>

  

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es admininvoices\"
  data-base-url=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php\"  data-token=\"6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\"></a>
      <span id=\"shop_version\">8.0.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=562c46d7692c77788ad8c5c51e165861\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/modules/manage?token=2b2a51d5be8f70bbbd762b1fbc469840\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/categories/new?token=2b2a51d5be8f70bbbd762b1fbc469840\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/products/new?token=2b2a51d5be8f70bbbd762b1fbc469840\"
                 dat";
        // line 117
        echo "a-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a7774f1aeafd4d51a9c664b3c6e937ad\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders?token=2b2a51d5be8f70bbbd762b1fbc469840\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"106\"
        data-icon=\"icon-AdminParentOrders\"
        data-method=\"add\"
        data-url=\"index.php/sell/orders/invoices/?-wWCSSfYgc\"
        data-post-link=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminQuickAccesses&token=97435d02e06334e2c54ba7d5f495c2c4\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Facturas - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminQuickAccesses&token=97435d02e06334e2c54ba7d5f495c2c4\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminSearch&amp;token=83e8280632441d570e431d1c03fbfdaa\"
      role=\"search\">
  <inpu";
        // line 157
        echo "t type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" da";
        // line 172
        echo "ta-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=562c46d7692c77788ad8c5c51e165861\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/modules/manage?token=2b2a51d5be8f70bbbd762b1fbc469840\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/categories/new?token=2b2a51d5be8f70bbbd762b1fbc469840\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/products/new?token=2b2a51d5be8f70bbbd762b1fbc469840\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrti";
        // line 209
        echo "pdi4/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a7774f1aeafd4d51a9c664b3c6e937ad\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders?token=2b2a51d5be8f70bbbd762b1fbc469840\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"148\"
      data-icon=\"icon-AdminParentOrders\"
      data-method=\"add\"
      data-url=\"index.php/sell/orders/invoices/?-wWCSSfYgc\"
      data-post-link=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminQuickAccesses&token=97435d02e06334e2c54ba7d5f495c2c4\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Facturas - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminQuickAccesses&token=97435d02e06334e2c54ba7d5f495c2c4\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/airmatic/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"bt";
        // line 254
        echo "n notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus &lt;strong&gt;&lt;a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=504fec024fddc61dee5a8949cc3156bb\"&gt;carritos abandonados&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>


          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"ma";
        // line 303
        echo "terial-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/airmatic/img/pr/default.jpg\" alt=\"Juan\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Juan</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/employees/2/edit?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminLogin&amp;logout=1&amp;token=b1a3022e1c84f27e1f188cca8f3fca3b\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/employees/toggle-navigation?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.3</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-su";
        // line 349
        echo "bmenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/invoices/?_toke";
        // line 380
        echo "n=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/credit-slips/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCarts&amp;token=504fec024fddc61dee5a8949cc3156bb\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/products?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons s";
        // line 412
        echo "ub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/products?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/categories?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/brands/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                              </ul>";
        // line 441
        echo "
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/addresses/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/addresses/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/customer-servi";
        // line 473
        echo "ce/order-messages/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/customer-service/order-messages/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminSearchConf&amp;token=3f474b8293e6673d4af20a2abe2fed0d\" class=\"link";
        // line 508
        echo "\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminSearchConf&amp;token=3f474b8293e6673d4af20a2abe2fed0d\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/webservice-keys/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                              ";
        // line 539
        echo "                      keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/webservice-keys/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Pedidos</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/invoices/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" aria-current=\"page\">Facturas</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Facturas          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/";
        // line 593
        echo "airmatic/admin487j9cbs1jljrtipdi4/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminInvoices%253Fversion%253D8.0.3%2526country%253Des/Ayuda?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminInvoices%253Fversion%253D8.0.3%2526country%253Des/Ayuda?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 640
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/?_token=6ARKNgH50j8_G4bqaCESCqiJ2Yy8wkxWc-wWCSSfYgc\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 674
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 640
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 674
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__260459eebc478f34c1564ca0505fcdc622c938aaf9c433b088f33e82a11e51b9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  805 => 674,  784 => 640,  773 => 82,  764 => 674,  724 => 640,  675 => 593,  619 => 539,  586 => 508,  549 => 473,  515 => 441,  484 => 412,  450 => 380,  417 => 349,  369 => 303,  318 => 254,  271 => 209,  232 => 172,  215 => 157,  173 => 117,  133 => 82,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__260459eebc478f34c1564ca0505fcdc622c938aaf9c433b088f33e82a11e51b9", "");
    }
}
