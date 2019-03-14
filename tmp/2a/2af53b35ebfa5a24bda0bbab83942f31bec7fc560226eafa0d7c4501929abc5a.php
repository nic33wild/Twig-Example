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

/* with-sidebar.twig */
class __TwigTemplate_d4b680ced113c3318b00aa69436e5283cbbb05524c7dc51be42488cdce6ee295 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "with-sidebar.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-lg-9 col-xs-9\">
            ";
        // line 5
        $this->displayBlock('main', $context, $blocks);
        // line 6
        echo "        </div>
        <div class=\"col-lg-3 col-xs-3\">
        ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 11
        echo "        </div>
    </div>
";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
    }

    // line 8
    public function block_sidebar($context, array $blocks = [])
    {
        // line 9
        echo "            <h1>My sidebar</h1>
            ";
    }

    public function getTemplateName()
    {
        return "with-sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  72 => 8,  67 => 5,  61 => 11,  59 => 8,  55 => 6,  53 => 5,  49 => 3,  46 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"row\">
        <div class=\"col-lg-9 col-xs-9\">
            {% block main%}{% endblock %}
        </div>
        <div class=\"col-lg-3 col-xs-3\">
        {% block sidebar%}
            <h1>My sidebar</h1>
            {% endblock %}
        </div>
    </div>
{% endblock content %}", "with-sidebar.twig", "/home/nicola/Documents/WWW/TWIG/templates/with-sidebar.twig");
    }
}
