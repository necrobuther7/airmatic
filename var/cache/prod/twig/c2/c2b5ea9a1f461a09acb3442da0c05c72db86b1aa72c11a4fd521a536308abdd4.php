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

/* __string_template__0dda8a731566912597ec1fdf88e8bbc96843b7890ded44bc6b70879fdced9cc6 */
class __TwigTemplate_16819fa2d35e03a60b71dd1731ba471de92a77775d5b4b4093491ccb70451109 extends Template
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

<title>Tema Email • airmatic-art</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMailTheme';
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
    var token = 'e0c199bd3151841f45f0c265a7eb3b83';
    var token_admin_orders = tokenAdminOrders = 'bb4a680a71a3e01da5db1863e3f93e94';
    var token_admin_customers = 'ad3f1c9c064352d6ea478ab4cbe14e67';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '9b4c1580a13500c95016e79a5eaa4af8';
    var currentIndex = 'index.php?controller=AdminMailTheme';
    var employee_token = '6d66bb67a6717ea3127475f54bac8655';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/modules/manage?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto';
    var admin_notification_get_link = '/airmatic/admin487j9cbs1jljrtipdi4/index.php/common/notifications?_";
        // line 42
        echo "token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto';
    var admin_notification_push_link = adminNotificationPushLink = '/airmatic/admin487j9cbs1jljrtipdi4/index.php/common/notifications/ack?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto';
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
      <link href=\"/airmatic/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/airmatic/admin487j9cbs1jljrtipdi4/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/airmatic\\/admin487j9cbs1jljrtipdi4\\/\";
var baseDir = \"\\/airmatic\\/\";
var changeFormLanguageUrl = \"\\/airmatic\\/admin487j9cbs1jljrtipdi4\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\";
var currency = {\"iso_code\":\"COP\",\"sign\":\"\$\",\"name\":\"Peso colombiano\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"COP\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":6,\"minFractionDigits\":6,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"s";
        // line 69
        echo "ymbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
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
<script type=\"text/javascript\" src=\"/airmatic/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/airmatic/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/airmatic/admin487j9cbs1jljrtipdi4/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/airmatic/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/airmatic/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/airmatic/admin487j9cbs1jljrtipdi4/index.php/common/notifications?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh ever";
        // line 96
        echo "y 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminmailtheme\"
  data-base-url=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php\"  data-token=\"l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminDashboard&amp;token=7114797535b96c50a5aee3961164d4d0\"></a>
      <span id=\"shop_version\">8.0.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=343e2bfa51bc6a91471ec61380f95dde\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/modules/manage?token=734072739761768f3e309b7d78091a16\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/categories/new?token=734072739761768f3e309b7d78091a16\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/products/new?token=734072739761768f3e309b7d78091a16";
        // line 136
        echo "\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=635202f2d081d30d08c9edd24b64bcb9\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders?token=734072739761768f3e309b7d78091a16\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"61\"
        data-icon=\"icon-AdminParentMailTheme\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/mail_theme\"
        data-post-link=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminQuickAccesses&token=e5072b8f02681bc1a67e03a68491f85b\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Tema Email - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminQuickAccesses&token=e5072b8f02681bc1a67e03a68491f85b\">
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
      action=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminSearch&amp;token=a2322739f8f3cf19111ae131a4504fc6\"
      rol";
        // line 176
        echo "e=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
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
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placehol";
        // line 192
        echo "der=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
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
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=343e2bfa51bc6a91471ec61380f95dde\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/modules/manage?token=734072739761768f3e309b7d78091a16\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/categories/new?token=734072739761768f3e309b7d78091a16\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/products/new?token=734072739761768f3e309b7d78091a16\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/a";
        // line 229
        echo "dmin487j9cbs1jljrtipdi4/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=635202f2d081d30d08c9edd24b64bcb9\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders?token=734072739761768f3e309b7d78091a16\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"151\"
      data-icon=\"icon-AdminParentMailTheme\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/mail_theme\"
      data-post-link=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminQuickAccesses&token=e5072b8f02681bc1a67e03a68491f85b\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Tema Email - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminQuickAccesses&token=e5072b8f02681bc1a67e03a68491f85b\">
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
  ";
        // line 274
        echo "<button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
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
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus &lt;strong&gt;&lt;a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=55b8e7b72795af3c896aa17c3";
        // line 324
        echo "d155d03\"&gt;carritos abandonados&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
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

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
";
        // line 373
        echo "  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/airmatic/img/pr/default.jpg\" alt=\"Airmatic\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Airmatic</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/employees/1/edit?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminLogin&amp;logout=1&amp;token=c95b6621f65e652305fa88ed00f2a5a8\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/employees/toggle-navigation?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminDashboard&amp;token=7114797535b96c50a5aee3961164d4d0\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.3</span>
      </div>

      <ul class=\"main-menu\">
              
                    
      ";
        // line 418
        echo "              
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminDashboard&amp;token=7114797535b96c50a5aee3961164d4d0\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">";
        // line 454
        echo " Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/invoices/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/credit-slips/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/orders/delivery-slips/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                 ";
        // line 486
        echo "               <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCarts&amp;token=55b8e7b72795af3c896aa17c3d155d03\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/products?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/products?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                       ";
        // line 517
        echo "                     
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/categories?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/monitoring/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminAttributesGroups&amp;token=e516157a4f17a4fe515c0e64bae761ba\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/catalog/brands/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Marcas y Proveedores
         ";
        // line 544
        echo "                       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/attachments/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCartRules&amp;token=635202f2d081d30d08c9edd24b64bcb9\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/stocks/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_subm";
        // line 577
        echo "enu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/customers/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/customers/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/addresses/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
   ";
        // line 606
        echo "                                           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCustomerThreads&amp;token=9b4c1580a13500c95016e79a5eaa4af8\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCustomerThreads&amp;token=9b4c1580a13500c95016e79a5eaa4af8\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/sell/customer-service/order-messages/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link";
        // line 633
        echo "\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminReturn&amp;token=b06bc984f0c05c8cc592f6696034842c\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminStats&amp;token=343e2bfa51bc6a91471ec61380f95dde\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

   ";
        // line 672
        echo "                           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/modules/manage?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/modules/manage?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/";
        // line 702
        echo "airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/design/themes/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/design/themes/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/design/mail_theme/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo";
        // line 731
        echo "\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/design/cms-pages/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/design/modules/positions/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminImages&amp;token=85a5808f514ad08966d1f33ded3a1610\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/modules/link-widget/list?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                    ";
        // line 760
        echo "                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCarriers&amp;token=8a8dea59d224327443166a6fafa9e40e\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminCarriers&amp;token=8a8dea59d224327443166a6fafa9e40e\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/shipping/preferences/?";
        // line 789
        echo "_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/payment/payment_methods?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/payment/payment_methods?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leve";
        // line 821
        echo "ltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/payment/preferences?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/international/localization/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/international/localization/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Localización
                                </a>
                              </li>

                       ";
        // line 851
        echo "                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/international/zones/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/international/taxes/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/international/translations/settings?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
      ";
        // line 884
        echo "          <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/shop/preferences/preferences?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/shop/preferences/preferences?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/shop/order-preferences/?_token=";
        // line 914
        echo "l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/shop/product-preferences/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/shop/customer-preferences/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/shop/contacts/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                  ";
        // line 944
        echo "                          
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/shop/seo-urls/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminSearchConf&amp;token=834c8344a8d65d925fdf4e8a2d231fde\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/system-information/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                       ";
        // line 973
        echo "     </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/system-information/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/performance/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/administration/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=";
        // line 1002
        echo "\"subtab-AdminEmails\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/emails/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/import/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/employees/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/sql-requests/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                              ";
        // line 1031
        echo "    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/logs/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/webservice-keys/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/feature-flags/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
               ";
        // line 1059
        echo "                 <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/configure/advanced/security/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" class=\"link\"> Seguridad
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
                      <li class=\"breadcrumb-item\">Tema Email</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tema Email          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminMailTheme%253Fversion%253D8.0.3%2526country%253Des/Ayuda?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                            ";
        // line 1117
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class=\"nav-item\">
                    <a href=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/improve/design/mail_theme/?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\" id=\"subtab-AdminMailTheme\" class=\"nav-link tab active current\" data-submenu=\"46\">
                      Tema Email
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"f";
        // line 1129
        echo "alse\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/airmatic/admin487j9cbs1jljrtipdi4/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminMailTheme%253Fversion%253D8.0.3%2526country%253Des/Ayuda?_token=l0sHb935x8Q7A3UOTRsqzVZk3H83KtpszkGAo1BJcto\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1161
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
  <a href=\"http://localhost/airmatic/admin487j9cbs1jljrtipdi4/index.php?controller=AdminDashboard&amp;token=7114797535b96c50a5aee3961164d4d0\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1195
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1161
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

    // line 1195
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
        return "__string_template__0dda8a731566912597ec1fdf88e8bbc96843b7890ded44bc6b70879fdced9cc6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1362 => 1195,  1341 => 1161,  1330 => 102,  1321 => 1195,  1281 => 1161,  1247 => 1129,  1233 => 1117,  1173 => 1059,  1143 => 1031,  1112 => 1002,  1081 => 973,  1050 => 944,  1018 => 914,  986 => 884,  951 => 851,  919 => 821,  885 => 789,  854 => 760,  823 => 731,  792 => 702,  760 => 672,  719 => 633,  690 => 606,  659 => 577,  624 => 544,  595 => 517,  562 => 486,  528 => 454,  490 => 418,  443 => 373,  392 => 324,  340 => 274,  293 => 229,  254 => 192,  236 => 176,  194 => 136,  155 => 102,  147 => 96,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0dda8a731566912597ec1fdf88e8bbc96843b7890ded44bc6b70879fdced9cc6", "");
    }
}
