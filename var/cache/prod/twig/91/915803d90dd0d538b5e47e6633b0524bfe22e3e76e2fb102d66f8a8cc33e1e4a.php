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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig */
class __TwigTemplate_60c5780d128ff07eb52269642ced270c938bf72f009891e60b35e444685986c3 extends Template
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
<div class=\"card d-none\" id=\"cart-block\">
  <h3 class=\"card-header\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h3>
  <div class=\"card-body\">
    <div class=\"alert alert-danger d-none\" id=\"js-cart-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"row\">
      <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"product-search\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</label>
      <div class=\"col-md-6 col-xl-4\">
        <input id=\"product-search\" type=\"text\" class=\"form-control\">
        <small class=\"form-text\">
          ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for an existing product by typing the first letters of its name.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
        </small>
      </div>
    </div>

    <div class=\"js-no-products-found d-none\">
        <div class=\"alert alert-danger\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No products found", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"js-searching-products d-none\">
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for products", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <hr class=\"mt-3 mb-3\">

        <div id=\"product-search-results\" class=\"d-none\">
          <form id=\"js-add-product-form\">

            <div class=\"row js-product-select-row\">
              <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"product-select\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 col-xl-4\">
                <select name=\"product_id\" id=\"product-select\" class=\"form-control custom-select\" data-customization-label=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"></select>
              </div>
            </div>

            <div class=\"row mt-3 js-combinations-row d-none\">
              <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"combination-select\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 col-xl-4\">
                <select name=\"combination_id\" id=\"combination-select\" class=\"form-control custom-select\"></select>
              </div>
            </div>

            <div class=\"row mt-3 d-none\" id=\"js-customization-container\">
              <span class=\"col-md-6 col-xl-3 text-md-right col-form-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
              <div class=\"col-md-6 col-xl-4 custom-fields-container\" id=\"js-custom-fields-container\"></div>
            </div>

            <div class=\"row mt-3 js-quantity-row\">
              <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"quantity-input\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</label>
              <div class=\"col-6 col-xl-3\">
                <input name=\"product_quantity\" id=\"quantity-input\" type=\"number\" min=\"1\" value=\"1\" class=\"form-control\">
                ";
        // line 82
        if (($context["stockManagementEnabled"] ?? null)) {
            // line 83
            echo "                  <small class=\"form-text\">
                    ";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In stock", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
                    <span class=\"js-in-stock-counter\"></span>
                  </small>
                ";
        }
        // line 88
        echo "              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-md-6 offset-md-6 offset-xl-3\">
                <button id=\"add-product-to-cart-btn\" type=\"button\" class=\"btn btn-primary\">
                  ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </button>
              </div>
            </div>

          </form>
          <hr>
        </div>
        <div class=\"js-no-records-found\"></div>
          <div class=\"table-responsive\">
            <table id=\"products-table\" class=\"table d-none\">
              <thead>
              <tr>
                <th>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price per unit", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                <th>";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th></th>
              </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        <div class=\"row js-tax-warning d-none\">
          <div class=\"col-xl-6 offset-xl-3\">
            <div class=\"alert alert-warning\">
              <div class=\"alert-text\">
                ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The prices are without taxes.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"js-cart-currency-select\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <div class=\"col-md-6 col-xl-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-currency-select\">
              ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["id"]) {
            // line 132
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            </select>
          </div>
        </div>
        <div class=\"row mt-3\">
          <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"js-cart-language-select\">";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <div class=\"col-md-6 col-xl-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-language-select\">
              ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["id"]) {
            // line 142
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "            </select>
          </div>
        </div>
  </div>
</div>

";
        // line 150
        $context["requiredFieldMarkTemplate"] = ('' === $tmp = "  <span class=\"js-required-field-mark text-danger d-none\">*</span>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 153
        echo "
<script id=\"js-product-custom-text-template\" type=\"text/template\">
  <div class=\"js-product-custom-text\">
    ";
        // line 156
        echo twig_escape_filter($this->env, ($context["requiredFieldMarkTemplate"] ?? null), "html", null, true);
        echo "
    <label for=\"\" class=\"js-product-custom-input-label\"></label>
    <input name=\"\" type=\"text\" class=\"form-control js-product-custom-input\">
  </div>
</script>

<script id=\"js-product-custom-file-template\" type=\"text/template\">
  <div class=\"mt-3\">
      ";
        // line 164
        echo twig_escape_filter($this->env, ($context["requiredFieldMarkTemplate"] ?? null), "html", null, true);
        echo "
      <label for=\"\" class=\"js-product-custom-input-label\"></label>
      <div class=\"custom-file\">
        <input name=\"\" type=\"file\" class=\"custom-file-input js-product-custom-input\">
        <label class=\"custom-file-label\">
          ";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true);
        echo "
        </label>
      </div>
  </div>
</script>

<script id=\"products-table-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td><input class=\"form-control js-product-unit-input\" type=\"text\"></td>
    <td>
      <input type=\"number\" min=\"1\" class=\"form-control js-product-qty-input\" style=\"max-width: 100px;";
        // line 185
        if ( !($context["stockManagementEnabled"] ?? null)) {
            echo "margin-top:0px;";
        }
        echo "\">
      ";
        // line 186
        if (($context["stockManagementEnabled"] ?? null)) {
            // line 187
            echo "        <small class=\"form-text\">
          ";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In stock", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          <span class=\"js-product-qty-stock\"></span>
        </small>
      ";
        }
        // line 192
        echo "    </td>
    <td class=\"js-product-total-price\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-product-remove-btn\">";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </td>
  </tr>
</script>

<script id=\"products-table-gift-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td>";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
    <td class=\"js-product-gift-qty\"></td>
    <td class=\"js-product-total-price\">";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
    <td></td>
  </tr>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-text-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"></span>
    </small>
  </div>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-file-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"> <img src=\"\" alt=\"\"></span>
    </small>
  </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 210,  345 => 208,  329 => 195,  324 => 192,  317 => 188,  314 => 187,  312 => 186,  306 => 185,  287 => 169,  279 => 164,  268 => 156,  263 => 153,  260 => 150,  252 => 144,  241 => 142,  237 => 141,  231 => 138,  225 => 134,  214 => 132,  210 => 131,  204 => 128,  195 => 122,  181 => 111,  177 => 110,  173 => 109,  169 => 108,  165 => 107,  161 => 106,  145 => 93,  138 => 88,  131 => 84,  128 => 83,  126 => 82,  120 => 79,  112 => 74,  102 => 67,  94 => 62,  89 => 60,  76 => 50,  67 => 44,  57 => 37,  50 => 33,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig", "C:\\xampp\\htdocs\\airmatic\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\cart.html.twig");
    }
}
