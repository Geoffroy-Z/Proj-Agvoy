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

/* room/index.html.twig */
class __TwigTemplate_40803591969b3b07efbc3d710a1d691783460d5effee8829eebd5f9fc496a75e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $this->parent = $this->loadTemplate("baselayout.html.twig", "room/index.html.twig", 1);
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

        echo "Room index";
        
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
        echo "    <h1>Room index</h1>
    <div>Filtrer les annonces:
    
<form style=\"text-align:center;\" method=\"get\" action=\"/room/\" method=\"post\">
<label>
\t<label>Départ
\t<input type=\"date\" name=\"startDate\" value= >
  </label>
  <label>Arrivée
\t<input type=\"date\" name=\"endDate value= \">
\t</label>
<select name=\"region\" value= >
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 19
            echo "  <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  
</select>

  <input type=\"submit\" value=\"Search\"><br>
</form>
\t

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Summary</th>
                <th>Description</th>
                <th>Capacity</th>
                <th>Superficy</th>
                <th>Price</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        if ((isset($context["rooms"]) || array_key_exists("rooms", $context))) {
            // line 43
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 43, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                // line 44
                echo "            <tr>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "summary", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "capacity", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "superficy", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "address", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                <td>
                ";
                // line 53
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 53), (isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 53, $this->source); })()))) {
                    // line 54
                    echo "                    <a href=\"/room/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 54), "html", null, true);
                    echo "/like\"> Dislike </a>
                ";
                } else {
                    // line 56
                    echo "                \t<a href=\"/room/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 56), "html", null, true);
                    echo "/like\"> Like </a>
                ";
                }
                // line 58
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_show", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\">show</a>
                    <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">edit</a>
                    <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\">Book</a>
                    
                    
                </td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 66
                echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        ";
        }
        // line 71
        echo "        </tbody>
    </table>

    <div><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_new");
        echo "\">Create new</a></div>
    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_likes");
        echo "\">See the rooms you liked</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 75,  231 => 74,  226 => 71,  223 => 70,  214 => 66,  203 => 60,  199 => 59,  194 => 58,  188 => 56,  182 => 54,  180 => 53,  175 => 51,  171 => 50,  167 => 49,  163 => 48,  159 => 47,  155 => 46,  151 => 45,  148 => 44,  142 => 43,  140 => 42,  117 => 21,  106 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baselayout.html.twig' %}

{% block title %}Room index{% endblock %}

{% block main %}
    <h1>Room index</h1>
    <div>Filtrer les annonces:
    
<form style=\"text-align:center;\" method=\"get\" action=\"/room/\" method=\"post\">
<label>
\t<label>Départ
\t<input type=\"date\" name=\"startDate\" value= >
  </label>
  <label>Arrivée
\t<input type=\"date\" name=\"endDate value= \">
\t</label>
<select name=\"region\" value= >
        {% for region in regions %}
  <option value={{ region.id }}>{{ region.name }}</option>
          {% endfor %}
  
</select>

  <input type=\"submit\" value=\"Search\"><br>
</form>
\t

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Summary</th>
                <th>Description</th>
                <th>Capacity</th>
                <th>Superficy</th>
                <th>Price</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% if rooms is defined %}
        {% for room in rooms %}
            <tr>
                <td>{{ room.id }}</td>
                <td>{{ room.summary }}</td>
                <td>{{ room.description }}</td>
                <td>{{ room.capacity }}</td>
                <td>{{ room.superficy }}</td>
                <td>{{ room.price }}</td>
                <td>{{ room.address }}</td>
                <td>
                {% if room.id in likes %}
                    <a href=\"/room/{{room.id}}/like\"> Dislike </a>
                {% else %}
                \t<a href=\"/room/{{room.id}}/like\"> Like </a>
                {% endif %}
                    <a href=\"{{ path('room_show', {'id': room.id}) }}\">show</a>
                    <a href=\"{{ path('room_edit', {'id': room.id}) }}\">edit</a>
                    <a href=\"{{ path('reservation_new', {'id': room.id}) }}\">Book</a>
                    
                    
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        {% endif %}
        </tbody>
    </table>

    <div><a href=\"{{ path('room_new') }}\">Create new</a></div>
    <a href=\"{{ path('room_likes') }}\">See the rooms you liked</a>
{% endblock %}
", "room/index.html.twig", "/home/geoffroy/Documents/CSC4101/proj-agvoy/agvoy-app-03/templates/room/index.html.twig");
    }
}
