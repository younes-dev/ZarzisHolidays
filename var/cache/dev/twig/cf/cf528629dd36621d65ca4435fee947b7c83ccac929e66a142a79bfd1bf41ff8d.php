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

/* user/index.html.twig */
class __TwigTemplate_086f19abb25af77a0429901a9d22d46a5d788833a60b302cc888fa147fa7e094 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "User index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"title text-center\"> <h1>User Dashboard </h1></div>
        <div class=\"container-fluid mb-5 mt-5\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Address</th>
                    <th>Validate</th>
                    <th>CreatedAt</th>
                    <th>UpdatedAt</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "                    <tr>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>

";
            // line 36
            echo "
";
            // line 42
            echo "
";
            // line 46
            echo "
";
            // line 50
            echo "
";
            // line 60
            echo "
";
            // line 62
            echo "                            ";
            $context["ADMIN"] = "ROLE_ADMIN";
            // line 63
            echo "                            ";
            $context["USER"] = "ROLE_USER";
            // line 64
            echo "                            ";
            $context["EDITOR"] = "ROLE_EDITOR";
            // line 65
            echo "
                            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 67
                echo "                                ";
                if (($context["role"] === (isset($context["USER"]) || array_key_exists("USER", $context) ? $context["USER"] : (function () { throw new RuntimeError('Variable "USER" does not exist.', 67, $this->source); })()))) {
                    // line 68
                    echo "                                    USER
                                ";
                } elseif ((                // line 69
$context["role"] === (isset($context["ADMIN"]) || array_key_exists("ADMIN", $context) ? $context["ADMIN"] : (function () { throw new RuntimeError('Variable "ADMIN" does not exist.', 69, $this->source); })()))) {
                    // line 70
                    echo "                                    ADMIN
                                ";
                } elseif ((                // line 71
$context["role"] === (isset($context["EDITOR"]) || array_key_exists("EDITOR", $context) ? $context["EDITOR"] : (function () { throw new RuntimeError('Variable "EDITOR" does not exist.', 71, $this->source); })()))) {
                    // line 72
                    echo "                                    EDITOR
                                ";
                }
                // line 74
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "

                        </td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "isValide", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            ((twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 80)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 80), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 81
            ((twig_get_attribute($this->env, $this->source, $context["user"], "updatedAt", [], "any", false, false, false, 81)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "updatedAt", [], "any", false, false, false, 81), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\">show</a>
                            <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">edit</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "                    <tr>
                        <td colspan=\"17\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                </tbody>
            </table>
            <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\">Create new</a>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 94,  233 => 92,  224 => 88,  215 => 84,  211 => 83,  206 => 81,  202 => 80,  198 => 79,  194 => 78,  189 => 75,  183 => 74,  179 => 72,  177 => 71,  174 => 70,  172 => 69,  169 => 68,  166 => 67,  162 => 66,  159 => 65,  156 => 64,  153 => 63,  150 => 62,  147 => 60,  144 => 50,  141 => 46,  138 => 42,  135 => 36,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  114 => 28,  109 => 27,  88 => 8,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
{#    <div class=\"container\">#}
{#        <div class=\"row\">#}
    <div class=\"title text-center\"> <h1>User Dashboard </h1></div>
        <div class=\"container-fluid mb-5 mt-5\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Address</th>
                    <th>Validate</th>
                    <th>CreatedAt</th>
                    <th>UpdatedAt</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.username }}</td>
                        <td>{{ user.email }}</td>
                        <td>

{#                            {{ user.roles }}#}

{#                        {% set mappingRoles={\"ROLE_ADMIN\" : \"ADMIN\",\"ROLE_USER\" : \"USER\",\"ROLE_EDITOR\" : \"EDITOR\"} %}#}
{#                            {% for role  in user.roles  %}#}
{#                                {{ mappingRoles[role] }}#}
{#                                {{ role }}#}
{#                            {% endfor %}#}

{#                            {% set ADMIN=\"\\\"\"~\"ROLE_ADMIN\"~\"\\\"\" %}#}
{#                            {% set USER=\"\\\"\"~\"ROLE_USER\"~\"\\\"\" %}#}
{#                            {% set EDITOR=\"\\\"\"~\"ROLE_EDITOR\"~\"\\\"\" %}#}

{#                            {% set ADMIN=\"ROLE_ADMIN\" %}#}
{#                            {% set USER=\"ROLE_USER\" %}#}
{#                            {% set EDITOR=\"ROLE_EDITOR\" %}#}

{#                            {% if user.roles is same as (ADMIN)  %}#}
{#                                ADMIN#}
{#                            {% endif %}#}
{#                            {% if user.roles is same as (USER)  %}#}
{#                                USER#}
{#                            {% endif %}#}
{#                            {% if user.roles is same as (EDITOR)  %}#}
{#                                EDITOR#}
{#                            {% endif %}#}

{#                        {% set mappingRoles={\"ROLE_ADMIN\" : \"ADMIN\",\"ROLE_USER\" : \"USER\",\"ROLE_EDITOR\" : \"EDITOR\"} %}#}
                            {% set ADMIN=\"ROLE_ADMIN\" %}
                            {% set USER=\"ROLE_USER\" %}
                            {% set EDITOR=\"ROLE_EDITOR\" %}

                            {% for role  in user.roles %}
                                {% if role is same as (USER) %}
                                    USER
                                {% elseif role is same as (ADMIN) %}
                                    ADMIN
                                {% elseif role is same as (EDITOR) %}
                                    EDITOR
                                {% endif %}
                            {% endfor %}


                        </td>
                        <td>{{ user.adresse }}</td>
                        <td>{{ user.isValide }}</td>
                        <td>{{ user.createdAt ? user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ user.updatedAt ? user.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                        <td>
                            <a href=\"{{ path('user_show', {'id': user.id}) }}\">show</a>
                            <a href=\"{{ path('user_edit', {'id': user.id}) }}\">edit</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"17\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <a href=\"{{ path('user_new') }}\">Create new</a>
        </div>
    </div>

{% endblock %}
", "user/index.html.twig", "/application/templates/user/index.html.twig");
    }
}
