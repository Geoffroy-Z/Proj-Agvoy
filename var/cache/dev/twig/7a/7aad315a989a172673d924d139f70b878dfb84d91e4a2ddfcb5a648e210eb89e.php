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

/* room/list.html.twig */
class __TwigTemplate_0513fb1c4a0f3e46ea71301eff74135cbae2800b70e6715353262cf4911f54a3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baselayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/list.html.twig"));

        $this->parent = $this->loadTemplate("baselayout.html.twig", "room/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "List of rooms!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
        <h1>Rooms list</h1>
        <p>Here are the rooms you liked</p>
\t
    <table class=\"table\">
        <tbody>
        \t
            <tr>
            <th>Id</th>
            <th>Summary</th>
            <th>Capacity</th>
            <th>Price</th>
            <th>Superficie</th>
            </tr>
                        
           
           ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 23
            echo "           <tr>
             <td> <a href=\"/room/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</a> </td>
             <td> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "summary", [], "any", false, false, false, 25), "html", null, true);
            echo " </td>
             <td> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "capacity", [], "any", false, false, false, 26), "html", null, true);
            echo " </td>
             <td> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 27), "html", null, true);
            echo " </td>
             <td> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "superficy", [], "any", false, false, false, 28), "html", null, true);
            echo " </td>
             <td>";
            // line 29
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 29), (isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 29, $this->source); })()))) {
                // line 30
                echo "                    <a href=\"/room/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "/like\"> Dislike </a>
                ";
            } else {
                // line 32
                echo "                \t<a href=\"/room/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "/like\"> Like </a>
                ";
            }
            // line 33
            echo "</td>
           </tr> 
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            
            </tbody>
    </table>
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 36,  149 => 33,  143 => 32,  137 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  119 => 25,  113 => 24,  110 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baselayout.html.twig' %}

{% block title %}List of rooms!{% endblock %}

{% block main %}

        <h1>Rooms list</h1>
        <p>Here are the rooms you liked</p>
\t
    <table class=\"table\">
        <tbody>
        \t
            <tr>
            <th>Id</th>
            <th>Summary</th>
            <th>Capacity</th>
            <th>Price</th>
            <th>Superficie</th>
            </tr>
                        
           
           {% for room in rooms %}
           <tr>
             <td> <a href=\"/room/{{ room.id }}\">{{ room.id }}</a> </td>
             <td> {{ room.summary }} </td>
             <td> {{ room.capacity }} </td>
             <td> {{ room.price }} </td>
             <td> {{ room.superficy }} </td>
             <td>{% if room.id in likes %}
                    <a href=\"/room/{{room.id}}/like\"> Dislike </a>
                {% else %}
                \t<a href=\"/room/{{room.id}}/like\"> Like </a>
                {% endif %}</td>
           </tr> 
           {% endfor %}
            
            </tbody>
    </table>
            
{% endblock %}
", "room/list.html.twig", "/home/geoffroy/Documents/CSC4101/proj-agvoy/agvoy-app-03/templates/room/list.html.twig");
    }
}
