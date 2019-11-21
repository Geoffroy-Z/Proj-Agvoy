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
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "owner", [], "any", false, false, false, 8))) {
                // line 9
                echo "    <h1>Your rooms</h1>
    
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
                // line 25
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OWNER")) {
                    // line 26
                    echo "        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "owner", [], "any", false, false, false, 26), "room", [], "any", false, false, false, 26))) {
                        // line 27
                        echo "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "owner", [], "any", false, false, false, 27), "room", [], "any", false, false, false, 27));
                        $context['_iterated'] = false;
                        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                            // line 28
                            echo "            <tr>
                <td>";
                            // line 29
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 29), "html", null, true);
                            echo "</td>
                <td>";
                            // line 30
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "summary", [], "any", false, false, false, 30), "html", null, true);
                            echo "</td>
                <td>";
                            // line 31
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 31), "html", null, true);
                            echo "</td>
                <td>";
                            // line 32
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "capacity", [], "any", false, false, false, 32), "html", null, true);
                            echo "</td>
                <td>";
                            // line 33
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "superficy", [], "any", false, false, false, 33), "html", null, true);
                            echo "</td>
                <td>";
                            // line 34
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 34), "html", null, true);
                            echo "</td>
                <td>";
                            // line 35
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "address", [], "any", false, false, false, 35), "html", null, true);
                            echo "</td>
                <td>
                    <a href=\"";
                            // line 37
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_show", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                            echo "\">show</a>
                    
                    ";
                            // line 39
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 39), "username", [], "any", true, true, false, 39)) {
                                echo "                                                
                    <a href=\"";
                                // line 40
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                                echo "\">edit</a>
                    ";
                            }
                            // line 42
                            echo "                    
                    
                </td>
            </tr>
        ";
                            $context['_iterated'] = true;
                        }
                        if (!$context['_iterated']) {
                            // line 47
                            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "        ";
                    }
                    // line 52
                    echo "        ";
                }
                echo "          
        </tbody>
    </table>
    


";
            }
        }
        // line 59
        echo "          

    <h1>Room index</h1>
    <div>Filtrer les annonces:
    
<form style=\"text-align:center;\" method=\"get\" action=\"/room/\" method=\"post\">
<label>
\t<label>Départ
\t<input type=\"date\" name=\"startDate\" value= >
  </label>
  <label>Arrivée
\t<input type=\"date\" name=\"endDate\" value=>
\t</label>
<select name=\"region\" value= >
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 74
            echo "  <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
        // line 97
        if ((isset($context["rooms"]) || array_key_exists("rooms", $context))) {
            // line 98
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 98, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                // line 99
                echo "            <tr>
                <td>";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 100), "html", null, true);
                echo "</td>
                <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "summary", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
                <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
                <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "capacity", [], "any", false, false, false, 103), "html", null, true);
                echo "</td>
                <td>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "superficy", [], "any", false, false, false, 104), "html", null, true);
                echo "</td>
                <td>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 105), "html", null, true);
                echo "</td>
                <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "address", [], "any", false, false, false, 106), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_show", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\">show</a>
                    
                    ";
                // line 110
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 110), "username", [], "any", true, true, false, 110)) {
                    // line 111
                    echo "                        ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 111), (isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 111, $this->source); })()))) {
                        // line 112
                        echo "                    \t<a href=\"/room/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 112), "html", null, true);
                        echo "/like\"> Dislike </a>
                        ";
                    } else {
                        // line 114
                        echo "                \t\t<a href=\"/room/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 114), "html", null, true);
                        echo "/like\"> Like </a>
                        ";
                    }
                    // line 117
                    echo "                    \t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                    echo "\">edit</a>
                    <a href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 118)]), "html", null, true);
                    echo "\">Book</a>
                    
                    ";
                }
                // line 121
                echo "                    
                    
                </td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 126
                echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "        ";
        }
        // line 131
        echo "        </tbody>
    </table>
    ";
        // line 133
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 133), "username", [], "any", true, true, false, 133)) {
            // line 134
            echo "        ";
            if ((isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 134, $this->source); })())) {
                echo "\t
\t\t\t<div><a href=\"";
                // line 135
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_new");
                echo "\">Create new</a></div>
\t\t";
            } else {
                // line 137
                echo "\t\t\t<div><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("owner_new");
                echo "\">Create new</a></div>
\t    ";
            }
            // line 139
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_likes");
            echo "\">See the rooms you liked</a>
    ";
        }
        
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
        return array (  373 => 139,  367 => 137,  362 => 135,  357 => 134,  355 => 133,  351 => 131,  348 => 130,  339 => 126,  330 => 121,  324 => 118,  319 => 117,  313 => 114,  307 => 112,  304 => 111,  302 => 110,  297 => 108,  292 => 106,  288 => 105,  284 => 104,  280 => 103,  276 => 102,  272 => 101,  268 => 100,  265 => 99,  259 => 98,  257 => 97,  234 => 76,  223 => 74,  219 => 73,  203 => 59,  191 => 52,  188 => 51,  179 => 47,  170 => 42,  165 => 40,  161 => 39,  156 => 37,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  124 => 28,  118 => 27,  115 => 26,  113 => 25,  95 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baselayout.html.twig' %}

{% block title %}Room index{% endblock %}

{% block main %}

{% if app.user %}
{% if user.owner is not null %}
    <h1>Your rooms</h1>
    
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
        {% if is_granted('ROLE_OWNER') %}
        {% if user.owner.room is not null %}
        {% for room in user.owner.room %}
            <tr>
                <td>{{ room.id }}</td>
                <td>{{ room.summary }}</td>
                <td>{{ room.description }}</td>
                <td>{{ room.capacity }}</td>
                <td>{{ room.superficy }}</td>
                <td>{{ room.price }}</td>
                <td>{{ room.address }}</td>
                <td>
                    <a href=\"{{ path('room_show', {'id': room.id}) }}\">show</a>
                    
                    {% if app.user.username is defined %}                                                
                    <a href=\"{{ path('room_edit', {'id': room.id}) }}\">edit</a>
                    {% endif %}
                    
                    
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        {% endif %}
        {% endif %}          
        </tbody>
    </table>
    


{% endif %}
{% endif %}          

    <h1>Room index</h1>
    <div>Filtrer les annonces:
    
<form style=\"text-align:center;\" method=\"get\" action=\"/room/\" method=\"post\">
<label>
\t<label>Départ
\t<input type=\"date\" name=\"startDate\" value= >
  </label>
  <label>Arrivée
\t<input type=\"date\" name=\"endDate\" value=>
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
                    <a href=\"{{ path('room_show', {'id': room.id}) }}\">show</a>
                    
                    {% if app.user.username is defined %}
                        {% if room.id in likes %}
                    \t<a href=\"/room/{{room.id}}/like\"> Dislike </a>
                        {% else %}
                \t\t<a href=\"/room/{{room.id}}/like\"> Like </a>
                        {% endif %}
{#                         {% if room.owner.user is same as likes %}#}
                    \t<a href=\"{{ path('room_edit', {'id': room.id}) }}\">edit</a>
                    <a href=\"{{ path('reservation_new', {'id': room.id}) }}\">Book</a>
                    
                    {% endif %}
                    
                    
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
    {% if app.user.username is defined %}
        {% if owner %}\t
\t\t\t<div><a href=\"{{ path('room_new') }}\">Create new</a></div>
\t\t{% else %}
\t\t\t<div><a href=\"{{ path('owner_new') }}\">Create new</a></div>
\t    {% endif %}
    <a href=\"{{ path('room_likes') }}\">See the rooms you liked</a>
    {% endif %}
{% endblock %}
", "room/index.html.twig", "/home/geoffroy/Documents/CSC4101/proj-agvoy/agvoy-app-03/templates/room/index.html.twig");
    }
}
