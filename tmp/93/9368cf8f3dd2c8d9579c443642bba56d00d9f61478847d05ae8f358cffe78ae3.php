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

/* layout.twig */
class __TwigTemplate_bd4395a644f771bc388a0998d254e1476bbc5e0e93a631031b48e755ff948d32 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>

    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />

    <!-- Bootstrap CSS -->
    <link
      rel=\"stylesheet\"
      href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
      integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\"
      crossorigin=\"anonymous\"
    />
    ";
        // line 27
        echo "  </head>

  <body>
    <nav class=\"navbar navbar-expand-sm navbar-light bg-light\">
      <a class=\"navbar-brand\" href=\"#\"></a>
      <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\"
          aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
          <li class=\"nav-item ";
        // line 38
        echo (((($context["current_page"] ?? null) == "home")) ? ("active") : (""));
        echo "\">
            <a class=\"nav-link\" href=\"index.php?page=home\">Home</a>
          </li>
          <li class=\"nav-item ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['MonExtension']->activeClass($context, "contact"), "html", null, true);
        echo "\">
            <a class=\"nav-link\" href=\"index.php?page=contact\">Contact</a>
          </li>
        </ul>
      </div>
    </nav>


      
    .<div class=\"container\">
      ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
      integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
      integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
      integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
      crossorigin=\"anonymous\"
    ></script>
  </body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  120 => 5,  96 => 52,  94 => 51,  81 => 41,  75 => 38,  62 => 27,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>

    {% block head %}{% endblock %}

    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />

    <!-- Bootstrap CSS -->
    <link
      rel=\"stylesheet\"
      href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
      integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\"
      crossorigin=\"anonymous\"
    />
    {# <style>
      body {
        padding-top: 3rem;
        padding-left: 1rem;
      }
    </style> #}
  </head>

  <body>
    <nav class=\"navbar navbar-expand-sm navbar-light bg-light\">
      <a class=\"navbar-brand\" href=\"#\"></a>
      <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\"
          aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
          <li class=\"nav-item {{ current_page == 'home' ? 'active' : ''}}\">
            <a class=\"nav-link\" href=\"index.php?page=home\">Home</a>
          </li>
          <li class=\"nav-item {{ activeClass('contact')}}\">
            <a class=\"nav-link\" href=\"index.php?page=contact\">Contact</a>
          </li>
        </ul>
      </div>
    </nav>


      
    .<div class=\"container\">
      {% block content %}{% endblock %}
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
      integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
      integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
      integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
      crossorigin=\"anonymous\"
    ></script>
  </body>
</html>", "layout.twig", "/home/nicola/Documents/WWW/TWIG/templates/layout.twig");
    }
}
