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

/* @Modules/ps_linklist/views/templates/admin/fields.html.twig */
class __TwigTemplate_0f65d8ab2bc231c9985f2baa955c8f2e65465e83a9a8e18d89fd1a4f48e6bb56 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'form_row' => [$this, 'block_form_row'],
            'form_row_class' => [$this, 'block_form_row_class'],
            'unlabeled_form_group_class' => [$this, 'block_unlabeled_form_group_class'],
            'custom_url_widget' => [$this, 'block_custom_url_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 47
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_row', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('form_row_class', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('unlabeled_form_group_class', $context, $blocks);
        // line 92
        $this->displayBlock('custom_url_widget', $context, $blocks);
    }

    // line 20
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 22), "choices", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["name"] => $context["choices"]) {
            // line 23
            echo "            ";
            if (twig_test_iterable($context["choices"])) {
                // line 24
                echo "
                <label class=\"choice_category\">
                    <strong>
                        ";
                // line 27
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["name"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["name"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "
                    </strong>
                </label>
                <div>
                    ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["choices"]);
                foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                    // line 32
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_0 = ($context["form"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 'widget');
                    echo "
                        ";
                    // line 33
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_1 = ($context["form"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null), 'label');
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                </div>

            ";
            } else {
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_2 = ($context["form"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["name"]] ?? null) : null), 'widget');
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_3 = ($context["form"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["name"]] ?? null) : null), 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
            }
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['choices'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>";
    }

    // line 47
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 49
        $context["switch"] = ((array_key_exists("switch", $context)) ? (_twig_default_filter(($context["switch"] ?? null), "")) : (""));
        // line 50
        ob_start(function () { return ''; });
        // line 51
        echo "        <input type=\"checkbox\" class=\"js-bulk-action-checkbox\"
               ";
        // line 52
        if (($context["switch"] ?? null)) {
            echo "data-toggle=\"switch\"";
        }
        echo " ";
        if (($context["switch"] ?? null)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["switch"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
        <i class=\"md-checkbox-control\"></i>
    ";
        $context["checkbox_input"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
    ";
        // line 56
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 57
            echo "        <div class=\"md-checkbox md-checkbox-inline\">";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => ($context["checkbox_input"] ?? null)]);
            // line 59
            echo "</div>
    ";
        } else {
            // line 61
            echo "<div class=\"md-checkbox my-1\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => ($context["checkbox_input"] ?? null)]);
            // line 63
            echo "</div>";
        }
    }

    // line 67
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        ob_start(function () { return ''; });
        // line 69
        echo "        <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        echo " ";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 70
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 70), "label", [], "any", false, false, false, 70) === false)) {
            // line 71
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
                ";
            // line 72
            $context["formGroupClasses"] =             $this->renderBlock("form_group_class", $context, $blocks);
            // line 73
            echo "            ";
        } else {
            // line 74
            echo "                ";
            $context["formGroupClasses"] =             $this->renderBlock("unlabeled_form_group_class", $context, $blocks);
            // line 75
            echo "            ";
        }
        // line 76
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["formGroupClasses"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo twig_spaceless($___internal_parse_0_);
    }

    // line 84
    public function block_form_row_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "form-group row";
    }

    // line 88
    public function block_unlabeled_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "col-sm-12";
    }

    // line 92
    public function block_custom_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "<div class=\"form-control ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 93), "html", null, true);
        echo "\">
        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 94), 'row');
        echo "
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 95), 'row');
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/views/templates/admin/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  272 => 95,  268 => 94,  263 => 93,  259 => 92,  255 => 89,  251 => 88,  247 => 85,  243 => 84,  239 => 68,  232 => 78,  228 => 77,  223 => 76,  220 => 75,  217 => 74,  214 => 73,  212 => 72,  207 => 71,  205 => 70,  196 => 69,  194 => 68,  190 => 67,  185 => 63,  183 => 62,  181 => 61,  177 => 59,  175 => 58,  173 => 57,  171 => 56,  168 => 55,  144 => 52,  141 => 51,  139 => 50,  137 => 49,  135 => 48,  131 => 47,  127 => 44,  121 => 43,  118 => 40,  116 => 39,  111 => 35,  103 => 33,  98 => 32,  94 => 31,  87 => 27,  82 => 24,  79 => 23,  75 => 22,  70 => 21,  66 => 20,  62 => 92,  60 => 88,  57 => 87,  55 => 84,  52 => 83,  50 => 67,  47 => 66,  45 => 47,  43 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/views/templates/admin/fields.html.twig", "C:\\xampp\\htdocs\\airmatic\\modules\\ps_linklist\\views\\templates\\admin\\fields.html.twig");
    }
}
