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

/* home.twig */
class __TwigTemplate_852b505395174616b6262eab4c6e8f20d7687d28b5acaca9d448bbecfcb55a37 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("with-sidebar.twig", "home.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'sidebar' => [$this, 'block_sidebar'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "with-sidebar.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "<title>Films</title>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = [])
    {
        // line 8
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
Sidebar from home
";
    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        // line 13
        echo "
<h1>Films</h1>

<div class=\"row\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 18
            echo "  <div class=\"col-lg-3 col-xs\">
    <div class=\"card\">
      <img src=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "photo", []), "html", null, true);
            echo " alt=\"\" class=\"card-img-top\" width=\"100%\" />
      <div class=\"card-block\">
        ";
            // line 23
            echo "        <h4 class=\"card-title\" style='padding-top: 1rem'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "title", []), "html", null, true);
            echo " </h4>
        ";
            // line 25
            echo "        <p class=\"card-text\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags($this->extensions['MonExtension']->markdownParse(twig_get_attribute($this->env, $this->source, $context["film"], "plot", []))), 100, true, "..."), "html", null, true);
            echo "</p>
        <a href=\"#\">Follow the link</a>
        ";
            // line 28
            echo "      </div>
    </div>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  97 => 28,  91 => 25,  86 => 23,  81 => 20,  77 => 18,  73 => 17,  67 => 13,  64 => 12,  57 => 8,  54 => 7,  49 => 4,  46 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'with-sidebar.twig' %}

{% block head %}
<title>Films</title>
{% endblock %}

{% block sidebar %}
{{ parent() }}
Sidebar from home
{% endblock %}

{% block main %}

<h1>Films</h1>

<div class=\"row\">
  {% for film in movies %}
  <div class=\"col-lg-3 col-xs\">
    <div class=\"card\">
      <img src={{ film.photo }} alt=\"\" class=\"card-img-top\" width=\"100%\" />
      <div class=\"card-block\">
        {# <h4 class=\"card-title\" style='padding-top: 1rem'>{{ 'Title: ' ~  film.title }} </h4> #}
        <h4 class=\"card-title\" style='padding-top: 1rem'>{{ film.title }} </h4>
        {# <p class=\"card-text\">{{ markdown(film.plot) }}</p> #}
        <p class=\"card-text\">{{ film.plot | markdown | striptags | truncate(100, true, '...') }}</p>
        <a href=\"#\">Follow the link</a>
        {# {{ loop.index }} #}
      </div>
    </div>
  </div>

  {% endfor %}
</div>
{% endblock %}
", "home.twig", "/home/nicola/Documents/WWW/TWIG/templates/home.twig");
    }
}
