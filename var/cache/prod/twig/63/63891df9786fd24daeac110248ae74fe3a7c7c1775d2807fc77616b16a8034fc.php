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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig */
class __TwigTemplate_ad364431792b575a79c15dcd21b2f6fea9c3ee25f3934732390a85b22f9aaaf6 extends Template
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
        echo "
<div class=\"card d-none\" id=\"addresses-block\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"d-none\" id=\"addresses-warning\">
        <div class=\"alert alert-warning\">
          <div class=\"alert-text\">
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must add at least one address to process the order.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
          </div>
        </div>
    </div>
    <div class=\"row d-none\" id=\"addresses-content\">
      <div class=\"col-md-6\">
        <label for=\"delivery-address-select\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery", [], "Admin.Global"), "html", null, true);
        echo "</label>
        <select class=\"form-control js-address-select custom-select\" id=\"delivery-address-select\"></select>

        <div class=\"card mt-3\">
          <div class=\"card-body clearfix\">
            <a class=\"btn btn-outline-primary float-right\" id=\"js-delivery-address-edit-btn\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "</a>
            <div id=\"delivery-address-details\"></div>
          </div>
        </div>
      </div>
      <div class=\"col-md-6\">
        <label for=\"invoice-address-select\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "</label>
        <select class=\"form-control js-address-select custom-select\" id=\"invoice-address-select\"></select>

        <div class=\"card mt-3\">
          <div class=\"card-body clearfix\">
            <a class=\"btn btn-outline-primary float-right\" id=\"js-invoice-address-edit-btn\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "</a>
            <div id=\"invoice-address-details\"></div>
          </div>
        </div>
      </div>
    </div>

    <a class=\"btn btn-primary\" id=\"js-add-address-btn\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_addresses_create", ["liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
        echo "\">
      ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </a>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 64,  95 => 63,  85 => 56,  77 => 51,  68 => 45,  60 => 40,  51 => 34,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig", "C:\\xampp\\htdocs\\airmatic\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\addresses.html.twig");
    }
}
