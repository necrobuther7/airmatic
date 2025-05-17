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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig */
class __TwigTemplate_6558adb4aeda57c3e8127c575053a23eb3ca34d15d3062a579c13887d6fd8087 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cart_summary_form_rest' => [$this, 'block_cart_summary_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig", 26)->unwrap();
        // line 27
        echo "
<div class=\"card d-none\" id=\"summary-block\">
  <h3 class=\"card-header\">
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Summary", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-success d-none\" id=\"js-summary-success-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"alert alert-danger d-none\" id=\"js-summary-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"row\">
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-products\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total vouchers (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-discounts\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total shipping (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-shipping\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-md-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total taxes", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-taxes\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-md-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-without-tax\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-md-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total (Tax incl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <span class=\"js-total-with-tax badge rounded badge-dark\"></span>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["summaryForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_place")]);
        echo "
    <div class=\"mt-4 row\">
      <div class=\"col-lg-11\">

        <div id=\"js-order-message-wrap\">
          ";
        // line 87
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["summaryForm"] ?? null), "order_message", [], "any", false, false, false, 87), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order message", [], "Admin.Orderscustomers.Feature")]], 87, $context, $this->getSourceContext());
        // line 89
        echo "
        </div>

        ";
        // line 92
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["summaryForm"] ?? null), "payment_module", [], "any", false, false, false, 92), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment", [], "Admin.Global")]], 92, $context, $this->getSourceContext());
        // line 94
        echo "

        ";
        // line 96
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["summaryForm"] ?? null), "order_state", [], "any", false, false, false, 96), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order status", [], "Admin.Orderscustomers.Feature")]], 96, $context, $this->getSourceContext());
        // line 98
        echo "

        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["summaryForm"] ?? null), "cart_id", [], "any", false, false, false, 100), 'row', ["attr" => ["class" => "js-place-order-cart-id"]]);
        echo "

        ";
        // line 102
        $this->displayBlock('cart_summary_form_rest', $context, $blocks);
        // line 105
        echo "
        <div class=\"form-group row mt-2 mb-2\">
          <div class=\"col offset-sm-4\">
            <button class=\"btn btn-primary my-1\" type=\"submit\" id=\"create-order-button\">
              ";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </button>

            <div class=\"btn-group\">
              <button
                class=\"btn btn-outline-primary dropdown-toggle my-1\"
                type=\"button\"
                id=\"dropdown-menu-actions\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
              >
                ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("More actions", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
              </button>

              <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-menu-actions\">
                <button type=\"button\" class=\"dropdown-item\" id=\"js-send-process-order-email-btn\">
                  ";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send pre-filled order to the customer by email", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </button>
                <a class=\"dropdown-item\" id=\"js-process-order-link\" target=\"_blank\">
                  ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Proceed to checkout in the front office", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </a>

                ";
        // line 132
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminOrderCreateExtraButtons");
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["summaryForm"] ?? null), 'form_end');
        echo "

  </div>
</div>
";
    }

    // line 102
    public function block_cart_summary_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["summaryForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 103,  215 => 102,  206 => 139,  196 => 132,  190 => 129,  184 => 126,  176 => 121,  161 => 109,  155 => 105,  153 => 102,  148 => 100,  144 => 98,  142 => 96,  138 => 94,  136 => 92,  131 => 89,  129 => 87,  121 => 82,  110 => 74,  101 => 68,  92 => 62,  83 => 56,  74 => 50,  65 => 44,  48 => 30,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig", "C:\\xampp\\htdocs\\airmatic\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\summary.html.twig");
    }
}
