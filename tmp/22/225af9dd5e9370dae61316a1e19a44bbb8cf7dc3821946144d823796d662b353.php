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

/* contact.twig */
class __TwigTemplate_b575c44f2ea04a2a9cbbf8778100df2d12273dfb83bb285f60c8cd3878906be0 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "contact.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["form"] = $this->loadTemplate("form.twig", "contact.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "    <title>Contact me</title>
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "    <h1>Contact me </h1>
    <p>
        Lorem ipsum dolor sit amet.
    </p>
    <form action=\"?page=contact\" method=\"post\">
        <div class=\"row\">
            ";
        // line 13
        echo $context["form"]->macro_input("name", "Name", ($context["name"] ?? null), ["class" => "col-lg col-xs"]);
        echo "
            ";
        // line 14
        echo $context["form"]->macro_input("email", "email", ($context["email"] ?? null), ["class" => "col-lg col-xs", "type" => "email"]);
        echo "
        </div>
        ";
        // line 16
        echo $context["form"]->macro_textarea("message", "Your message");
        echo "
        <div class=\"form-group\">
            <button class=\"btn btn-primary\">Send</button>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  71 => 14,  67 => 13,  59 => 7,  56 => 6,  51 => 4,  48 => 3,  44 => 1,  42 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% import 'form.twig' as form %}
{% block head %}
    <title>Contact me</title>
{% endblock %}
{% block content %}
    <h1>Contact me </h1>
    <p>
        Lorem ipsum dolor sit amet.
    </p>
    <form action=\"?page=contact\" method=\"post\">
        <div class=\"row\">
            {{ form.input('name','Name', name, {class: 'col-lg col-xs'})}}
            {{ form.input('email','email', email, {class: 'col-lg col-xs', type: 'email'})}}
        </div>
        {{ form.textarea('message','Your message')}}
        <div class=\"form-group\">
            <button class=\"btn btn-primary\">Send</button>
        </div>
    </form>
{% endblock %}", "contact.twig", "/home/nicola/Documents/WWW/TWIG/templates/contact.twig");
    }
}
