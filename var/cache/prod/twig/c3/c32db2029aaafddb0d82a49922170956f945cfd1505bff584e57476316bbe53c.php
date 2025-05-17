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

/* @PrestaShop/Admin/Sell/Order/Order/create.html.twig */
class __TwigTemplate_fcd2dccdfe8be3f80f64a3228e9583754cf3ec56e46f4928f04fbddbf33088db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create order", [], "Admin.Orderscustomers.Feature");
        // line 53
        $context["js_translatable"] = twig_array_merge(["Customer search - group default" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("default", [], "Admin.Orderscustomers.Feature"), "Customer search - group label single" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Orderscustomers.Feature"), "Customer search - group label multiple" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups", [], "Admin.Orderscustomers.Feature")],         // line 57
($context["js_translatable"] ?? null));
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/orders" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  <div id=\"order-creation-container\">
    ";
        // line 36
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 36)->display($context);
        // line 37
        echo "    <div id=\"js-cart-info-wrapper\">
      ";
        // line 38
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 38)->display($context);
        // line 39
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 39)->display($context);
        // line 40
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 40)->display($context);
        // line 41
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 41)->display($context);
        // line 42
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 42)->display($context);
        // line 43
        echo "    </div>
  </div>
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/order_create.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 50,  101 => 48,  97 => 47,  91 => 43,  88 => 42,  85 => 41,  82 => 40,  79 => 39,  77 => 38,  74 => 37,  72 => 36,  69 => 35,  65 => 34,  58 => 31,  54 => 30,  49 => 26,  47 => 57,  46 => 53,  44 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", "C:\\xampp\\htdocs\\airmatic\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\create.html.twig");
    }
}
