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

/* form.twig */
class __TwigTemplate_fe4b9e29948b42445fcda47d58e33e695c815d0d67f4c826f685d68130b316c0 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<!-- macro -->
";
        // line 9
        echo "
";
    }

    // line 2
    public function macro_input($__name__ = null, $__label__ = null, $__value__ = null, $__options__ = [], ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", []), "html", null, true);
            echo "\">
        <label for=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 5
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
        <input type=\"";
            // line 6
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [])) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [])) : ("text")), "html", null, true);
            echo "\" class=\"form-control\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"/>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 10
    public function macro_textarea($__name__ = null, $__label__ = null, $__value__ = null, $__options__ = [], ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 11
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", []), "html", null, true);
            echo "\">
        <label for=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 13
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
        <textarea type=\"text\" class=\"form-control\" id=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</textarea>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 14,  113 => 13,  109 => 12,  104 => 11,  89 => 10,  71 => 6,  67 => 5,  63 => 4,  58 => 3,  43 => 2,  38 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- macro -->
{% macro input(name,label,value = null,options = []) %}
    <div class=\"form-group {{ options.class }}\">
        <label for=\"{{ name }}\">
            {{ label }}</label>
        <input type=\"{{ options.type ? options.type : 'text' }}\" class=\"form-control\" id=\"{{ name }}\" name=\"{{ name }}\" value=\"{{ value }}\"/>
    </div>
{% endmacro %}

{% macro textarea(name,label, value = null, options = []) %}
    <div class=\"form-group {{ options.class }}\">
        <label for=\"{{ name }}\">
            {{ label }}</label>
        <textarea type=\"text\" class=\"form-control\" id=\"{{ name }}\" name=\"{{ name }}\">{{ value }}</textarea>
    </div>
{% endmacro %}", "form.twig", "/home/nicola/Documents/WWW/TWIG/templates/form.twig");
    }
}
