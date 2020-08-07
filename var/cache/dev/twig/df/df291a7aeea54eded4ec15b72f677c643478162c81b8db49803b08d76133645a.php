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

/* appartement/index.html.twig */
class __TwigTemplate_8f679c55cdba2339e7d7177a32a7c6a82dae922b331f7849244eb3e083b0f422 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appartement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appartement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appartement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid mb-2 mt-2\">
        <h1 class=\"text-center\">Appartement index</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Adress</th>
                <th>Espace</th>
                <th>Nbrpersonne</th>
                <th>Description</th>
                <th>PostalCode</th>
                <th>IsPublished</th>
                <th>Id</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appartements"]) || array_key_exists("appartements", $context) ? $context["appartements"] : (function () { throw new RuntimeError('Variable "appartements" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["appartement"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "price", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "adress", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "espace", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "nbrpersonne", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "postalCode", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo ((twig_get_attribute($this->env, $this->source, $context["appartement"], "isPublished", [], "any", false, false, false, 35)) ? ("Yes") : ("No"));
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["appartement"], "createdAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "createdAt", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["appartement"], "updatedAt", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "updatedAt", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appartement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["appartement"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">show</a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appartement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["appartement"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                <tr>
                    <td colspan=\"12\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appartement_new");
        echo "\">Create new</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appartement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  165 => 49,  156 => 45,  147 => 41,  143 => 40,  138 => 38,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  95 => 27,  90 => 26,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{#{% block title %}Appartement index{% endblock %}#}

{% block body %}
    <div class=\"container-fluid mb-2 mt-2\">
        <h1 class=\"text-center\">Appartement index</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Adress</th>
                <th>Espace</th>
                <th>Nbrpersonne</th>
                <th>Description</th>
                <th>PostalCode</th>
                <th>IsPublished</th>
                <th>Id</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            {% for appartement in appartements %}
                <tr>
                    <td>{{ appartement.title }}</td>
                    <td>{{ appartement.price }}</td>
                    <td>{{ appartement.adress }}</td>
                    <td>{{ appartement.espace }}</td>
                    <td>{{ appartement.nbrpersonne }}</td>
                    <td>{{ appartement.description }}</td>
                    <td>{{ appartement.postalCode }}</td>
                    <td>{{ appartement.isPublished ? 'Yes' : 'No' }}</td>
                    <td>{{ appartement.id }}</td>
                    <td>{{ appartement.createdAt ? appartement.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                    <td>{{ appartement.updatedAt ? appartement.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                    <td>
                        <a href=\"{{ path('appartement_show', {'id': appartement.id}) }}\">show</a>
                        <a href=\"{{ path('appartement_edit', {'id': appartement.id}) }}\">edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"12\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <a href=\"{{ path('appartement_new') }}\">Create new</a>
    </div>
{% endblock %}
", "appartement/index.html.twig", "/application/templates/appartement/index.html.twig");
    }
}
