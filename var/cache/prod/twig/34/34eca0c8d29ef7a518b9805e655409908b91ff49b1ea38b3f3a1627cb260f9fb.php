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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig */
class __TwigTemplate_e10be8a129ef5c2e10cd2f98220ac4490ca18f4c34c505ecd727a76d04d3abdb extends Template
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
<div class=\"card d-none\" id=\"cart-rules-block\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vouchers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      <label class=\"col-md-3 text-md-right col-form-label\" for=\"search-cart-rules-input\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a voucher", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</label>
      <div class=\"col-md-4 mb-2\" id=\"cart-rules-search-block\">
        <div class=\"col p-0\">
          <input type=\"text\" class=\"form-control\" id=\"search-cart-rules-input\">
          <ul id=\"search-cart-rules-result-box\" class=\"position-absolute bg-white w-100 form-control d-none list-unstyled\"></ul>
          <div class=\"text-danger align-top d-none\" id=\"js-cart-rule-error-block\">
            <i class=\"material-icons form-error-icon\">error_outline</i>
            <span id=\"js-cart-rule-error-text\"></span>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <span class=\"mr-2\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
        <a class=\"btn btn-primary\" id=\"js-add-cart-rule-btn\"
          href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCartRules", true, ["liteDisplaying" => 1, "submitFormAjax" => 1, "addcart_rule" => 1]), "html", null, true);
        echo "\">
          ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new voucher", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </a>
      </div>
    </div>

    <table class=\"table d-none mt-2\" id=\"cart-rules-table\">
      <thead>
      <tr>
        <th>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th></th>
      </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<script id=\"cart-rules-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-cart-rule-name\"></td>
    <td class=\"js-cart-rule-description\"></td>
    <td class=\"js-cart-rule-value\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-cart-rule-delete-btn\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove", [], "Admin.Global"), "html", null, true);
        echo "</button>
    </td>
  </tr>
</script>

<script id=\"cart-rules-not-found-template\" type=\"text/template\">
  <li>";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No voucher was found", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</li>
</script>

<script id=\"found-cart-rule-template\" type=\"text/template\">
  <li data-cart-rule-id=\"\" class=\"js-found-cart-rule found-cart-rule\"></li>
</script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 78,  110 => 72,  92 => 57,  88 => 56,  84 => 55,  73 => 47,  69 => 46,  64 => 44,  49 => 32,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig", "C:\\xampp\\htdocs\\airmatic\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\cart_rules.html.twig");
    }
}
