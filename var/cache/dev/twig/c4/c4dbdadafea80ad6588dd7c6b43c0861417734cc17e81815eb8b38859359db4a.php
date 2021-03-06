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

/* baselayout.html.twig */
class __TwigTemplate_e81b33190a038b4087861331bed0acdd85adec52ca81f6c27c217f1da200d5f1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'custompage_style' => [$this, 'block_custompage_style'],
            'body' => [$this, 'block_body'],
            'menu' => [$this, 'block_menu'],
            'alerts' => [$this, 'block_alerts'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'custompage_script' => [$this, 'block_custompage_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baselayout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baselayout.html.twig"));

        // line 21
        echo "<!DOCTYPE HTML>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "</head>
<body>
\t";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 152
        echo " ";
        // line 153
        echo "</body>
";
        // line 154
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo " ";
        // line 159
        $this->displayBlock('custompage_script', $context, $blocks);
        // line 161
        echo "
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Couette et café";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "<!-- Bootstrap -->
  <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    
";
        // line 34
        $this->displayBlock('custompage_style', $context, $blocks);
        // line 38
        echo "<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_custompage_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custompage_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custompage_style"));

        // line 35
        echo "<!-- Custom styles for this template -->
<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        // line 49
        echo "             <header>
\t\t";
        // line 50
        $this->displayBlock('menu', $context, $blocks);
        // line 99
        echo " ";
        // line 100
        echo "\t\t
\t\t";
        // line 101
        $this->displayBlock('alerts', $context, $blocks);
        // line 115
        echo " ";
        // line 116
        echo "
             </header>

\t<div style=\"min-height: 90%\" class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">

\t\t\t</div>
\t\t</div>

\t\t<div class=\"container body-container\">
<main>
\t\t\t";
        // line 128
        $this->displayBlock('main', $context, $blocks);
        // line 138
        echo " ";
        // line 139
        echo "</main>
\t\t</div> <!-- /.body-container -->
\t\t";
        // line 141
        $this->displayBlock('footer', $context, $blocks);
        // line 149
        echo "
\t</div>
\t<!-- /.container -->
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 51
        echo "\t\t\t\t";
        // line 52
        echo "\t\t\t\t  <!-- Navigation -->
                  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
                    <div class=\"container\">
                      <a class=\"navbar-brand\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                      </button>
                      <div class=\"collapse navbar-collapse\" id=\"navbarsMainDefault\">
                        <ul class=\"navbar-nav mr-auto\">
                            ";
        // line 61
        echo $this->extensions['Camurphy\BootstrapMenuBundle\Twig\Extension\MenuExtension']->renderMenu($this->env, "main");
        echo "
                        </ul>
                      </div>
                      ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64)) {
            // line 65
            echo "                      <div class=\"collapse navbar-collapse\" id=\"navbarsAccountDefault\">
                        <ul class=\"navbar-nav ml-auto\">
                          ";
            // line 67
            echo $this->extensions['Camurphy\BootstrapMenuBundle\Twig\Extension\MenuExtension']->renderMenu($this->env, "account");
            echo "
                        </ul>
                      </div>
                      ";
        } else {
            // line 71
            echo "                      <div class=\"collapse navbar-collapse\" id=\"navbarsAnonAccountDefault\">
                        <ul class=\"navbar-nav ml-auto\">
                          ";
            // line 73
            echo $this->extensions['Camurphy\BootstrapMenuBundle\Twig\Extension\MenuExtension']->renderMenu($this->env, "anonymousaccount");
            echo "
                        </ul>
                      </div>
                      ";
        }
        // line 77
        echo "                    </div>
    <h1>Menu</h1>

</div>
                      ";
        // line 96
        echo "                    </div>
                  </nav>
\t\t\t\t
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_alerts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alerts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alerts"));

        // line 102
        echo "         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "session", [], "any", false, false, false, 102), "flashBag", [], "any", false, false, false, 102), "all", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 103
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 104
                echo "                ";
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 105
                echo "                ";
                if (($context["type"] == "message")) {
                    echo " ";
                    $context["type"] = "info";
                    echo " ";
                }
                // line 106
                echo "        \t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert-dismissible\" role=\"alert\">
            \t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                \t\t<span aria-hidden=\"true\">&times;</span>
                \t\t<span class=\"sr-only\">Close</span>
            \t\t</button>
            \t\t<p>";
                // line 111
                echo $context["message"];
                echo "</p>
       \t\t\t </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 129
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<div class=\"example-wrapper\">
    \t\t\t\t\t<h1>Hello There !</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 142
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<footer>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "  <!-- Bootstrap core JavaScript -->
  <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_custompage_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custompage_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custompage_script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baselayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  467 => 159,  455 => 157,  451 => 156,  448 => 155,  438 => 154,  422 => 142,  412 => 141,  393 => 129,  383 => 128,  373 => 115,  367 => 114,  358 => 111,  349 => 106,  342 => 105,  335 => 104,  330 => 103,  325 => 102,  315 => 101,  302 => 96,  296 => 77,  289 => 73,  285 => 71,  278 => 67,  274 => 65,  272 => 64,  266 => 61,  257 => 55,  252 => 52,  250 => 51,  240 => 50,  227 => 149,  225 => 141,  221 => 139,  219 => 138,  217 => 128,  203 => 116,  201 => 115,  199 => 101,  196 => 100,  194 => 99,  192 => 50,  189 => 49,  178 => 48,  166 => 36,  163 => 35,  153 => 34,  137 => 38,  135 => 34,  129 => 31,  126 => 30,  116 => 29,  97 => 28,  85 => 161,  83 => 159,  81 => 158,  79 => 154,  76 => 153,  74 => 152,  72 => 48,  68 => 46,  66 => 29,  62 => 28,  53 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/baselayout.html.twig

   Implémente un gabarit HTML 5 de base pour Bootstrap.

   Les blocs suivants sont surchargeables :
   - title : titre de la page pour <title>
   - description : description de la page pour
     <meta name=\"description...
   - stylesheets : styles ou links pour le CSS
     déclaré dans le <head>
   - custompage_style : balise(s) <style>
     additionnelles spécifiques à chaque page
   - header : premiers éléments
     contenus dans le <div class=\"container\"> bootstrap (une row par ex.)
   - main : milieu du contenu bootstrap (deuxième row)
   - footer : fin des éléments du container bootstrap. Typiquement
     un <footer>
   - javascripts : Javascripts de fin de <body>
   - custompage_script : javascript additionnel spécifique à chaque page
#}
<!DOCTYPE HTML>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>{% block title %}Couette et café{% endblock %}</title>
{% block stylesheets %}
<!-- Bootstrap -->
  <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    
{% block custompage_style %}
<!-- Custom styles for this template -->
<link href=\"{{ asset('css/shop-homepage.css') }}\" rel=\"stylesheet\">
{% endblock %}
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
{% endblock %}
{# stylesheets #}
</head>
<body>
\t{% block body %} {# Bootstrap container #}
             <header>
\t\t{% block menu %}
\t\t\t\t{# Collect the nav links, forms, and other content for toggling #}
\t\t\t\t  <!-- Navigation -->
                  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
                    <div class=\"container\">
                      <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Home</a>
                      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                      </button>
                      <div class=\"collapse navbar-collapse\" id=\"navbarsMainDefault\">
                        <ul class=\"navbar-nav mr-auto\">
                            {{ render_bootstrap_menu('main') }}
                        </ul>
                      </div>
                      {% if app.user %}
                      <div class=\"collapse navbar-collapse\" id=\"navbarsAccountDefault\">
                        <ul class=\"navbar-nav ml-auto\">
                          {{ render_bootstrap_menu('account') }}
                        </ul>
                      </div>
                      {% else %}
                      <div class=\"collapse navbar-collapse\" id=\"navbarsAnonAccountDefault\">
                        <ul class=\"navbar-nav ml-auto\">
                          {{ render_bootstrap_menu('anonymousaccount') }}
                        </ul>
                      </div>
                      {% endif %}
                    </div>
    <h1>Menu</h1>

</div>
                      {#
                      {% if app.user %}
                      <div class=\"collapse navbar-collapse\" id=\"navbarsAccountDefault\">
                        <ul class=\"navbar-nav ml-auto\">
                          {{ render_bootstrap_menu('account') }}
                        </ul>
                      </div>
                      {% else %}
                      <div class=\"collapse navbar-collapse\" id=\"navbarsAnonAccountDefault\">
                        <ul class=\"navbar-nav ml-auto\">
                          {{ render_bootstrap_menu('anonymousaccount') }}
                        </ul>
                      </div>
                      {% endif %}
                      #}
                    </div>
                  </nav>
\t\t\t\t
\t\t{% endblock %} {# menu #}
\t\t
\t\t{%  block alerts %}
         {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                {%if type == 'error'%} {% set type = 'danger' %} {%endif%}
                {%if type == 'message'%} {% set type = 'info' %} {%endif%}
        \t\t<div class=\"alert alert-{{ type }} alert-dismissible\" role=\"alert\">
            \t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                \t\t<span aria-hidden=\"true\">&times;</span>
                \t\t<span class=\"sr-only\">Close</span>
            \t\t</button>
            \t\t<p>{{ message|raw }}</p>
       \t\t\t </div>
            {% endfor %}
        {% endfor %}
        {% endblock %} {# alerts #}

             </header>

\t<div style=\"min-height: 90%\" class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">

\t\t\t</div>
\t\t</div>

\t\t<div class=\"container body-container\">
<main>
\t\t\t{% block main %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<div class=\"example-wrapper\">
    \t\t\t\t\t<h1>Hello There !</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endblock %} {# main #}
</main>
\t\t</div> <!-- /.body-container -->
\t\t{% block footer %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<footer>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>
\t\t{% endblock %}{# footer #}

\t</div>
\t<!-- /.container -->
\t{% endblock %} {# body #}
</body>
{% block javascripts %}
  <!-- Bootstrap core JavaScript -->
  <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
{% endblock %} {# javascripts #}
{% block custompage_script %}
{% endblock %}

</html>
", "baselayout.html.twig", "/home/geoffroy/Documents/CSC4101/proj-agvoy/agvoy-app-03/templates/baselayout.html.twig");
    }
}
