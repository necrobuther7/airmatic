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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig */
class __TwigTemplate_d93fbd7a4a448a771158dc187c7490700181586e8f04e508698169eee25ba577 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<div class=\"card d-none\" id=\"shipping-block\">
  <h3 class=\"card-header\">
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">

    <form class=\"js-shipping-form d-none\">
      <div class=\"form-group row\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"delivery-option-select\">
          ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery option", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <select class=\"form-control\" id=\"delivery-option-select\" name=\"carrier-id\"></select>
        </div>
      </div>
      <div class=\"form-group row\">
        <span class=\"col-md-6 col-xl-3 text-md-right col-form-label\">
          ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping price (Tax incl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
        <div class=\"col-md-6 col-xl-4\">
          <span class=\"js-total-shipping-tax-inc font-weight-bold\"></span>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"free-shipping_0\">
          ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free shipping", [], "Admin.Shipping.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
        <span class=\"ps-switch\">
          <input id=\"free-shipping_0\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"0\" type=\"radio\">
          <label for=\"free-shipping_0\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <input id=\"free-shipping_1\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"1\" checked=\"\" type=\"radio\">
          <label for=\"free-shipping_1\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <span class=\"slide-button\"></span>
        </span>
        </div>
      </div>
      <div class=\"form-group row ";
        // line 62
        if ( !($context["recycledPackagingEnabled"] ?? null)) {
            echo "d-none";
        }
        echo "\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"recycled-packaging_0\">
          ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recycled packaging", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <span class=\"ps-switch\">
            <input id=\"recycled-packaging_0\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"recycled-packaging_0\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <input id=\"recycled-packaging_1\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"1\" type=\"radio\">
            <label for=\"recycled-packaging_1\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>
      </div>
      <div class=\"form-group row ";
        // line 76
        if ( !($context["giftSettingsEnabled"] ?? null)) {
            echo "d-none";
        }
        echo "\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"is-gift_0\">
          ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <span class=\"ps-switch\">
            <input id=\"is-gift_0\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"is-gift_0\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <input id=\"is-gift_1\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"1\" type=\"radio\">
            <label for=\"is-gift_1\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>

      </div>
      <div class=\"form-group row type-text ";
        // line 91
        if ( !($context["giftSettingsEnabled"] ?? null)) {
            echo "d-none";
        }
        echo "\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"cart_gift_message\">
          ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift message", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <textarea id=\"cart_gift_message\" name=\"cart_gift_message\" class=\"form-control\" cols=\"40\" rows=\"4\"></textarea>
        </div>
      </div>
    </form>

    <div class=\"js-no-carrier-block d-none\">
      <div class=\"alert alert-warning\">
        <div class=\"alert-text\">
          ";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No carrier can be applied to this order", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 104,  158 => 93,  151 => 91,  142 => 85,  137 => 83,  129 => 78,  122 => 76,  114 => 71,  109 => 69,  101 => 64,  94 => 62,  86 => 57,  81 => 55,  73 => 50,  62 => 42,  51 => 34,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig", "C:\\xampp\\htdocs\\airmatic\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\shipping.html.twig");
    }
}
