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

/* home/index.html.twig */
class __TwigTemplate_684cc818b8fdc8ee79ee8de7aa7a2835de637bd0df168ec21c2795247ab2692b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<body>

\t\t<div
\t\t\tclass=\"page-wraper\">

\t\t\t<!-- HEADER START -->
\t\t\t<header class=\"site-header header-style-1\">
\t\t\t\t<div class=\"sticky-header main-bar-wraper\">
\t\t\t\t\t<div class=\"main-bar bg-white p-t5\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"logo-header\">
\t\t\t\t\t\t\t\t<div class=\"logo-header-inner logo-header-one\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/zarzis_logo.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- NAV Toggle Button -->
\t\t\t\t\t\t\t<button data-target=\".header-nav\" data-toggle=\"collapse\" type=\"button\" class=\"navbar-toggle collapsed\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<!-- ETRA Nav -->
\t\t\t\t\t\t\t<div class=\"extra-nav\">
\t\t\t\t\t\t\t\t<div class=\"extra-cell\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"contact-slide-show text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"extra-cell\">
\t\t\t\t\t\t\t\t\t<a href=\"#search\" class=\" text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"extra-cell\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"socialicon_show  text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share-alt\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ETRA Nav -->

\t\t\t\t\t\t\t<!-- Social Nav -->
\t\t\t\t\t\t\t<div class=\"social_hide\">
\t\t\t\t\t\t\t\t<div class=\"side-social-nav\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"socialicon_close\">&times;</a>
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltip\">Facebook</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-linkedin\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltip\">Linkedin</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-google-plus\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltip\">Google Plus</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltip\">Instagram</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Contact Nav -->
\t\t\t\t\t\t\t<div class=\"contact-slide-hide\">
\t\t\t\t\t\t\t\t<div class=\"contact-nav\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"contact_close\">&times;</a>
\t\t\t\t\t\t\t\t\t<div class=\"contact-nav-form p-a30\">
\t\t\t\t\t\t\t\t\t\t<form class=\"cons-contact-form\" method=\"post\" action=\"form-handler.php\">
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"contact-one m-b30\">

\t\t\t\t\t\t\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"section-head text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Form\">Get In Touch</h2>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- TITLE END -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group wt-inputicon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"username\" type=\"text\" required class=\"form-control\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-input-icon sl-icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group wt-inputicon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"email\" type=\"text\" class=\"form-control\" required placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-input-icon sl-icon-envolope-letter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group wt-inputicon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" rows=\"3\" class=\"form-control \" required placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-input-icon sl-icon-envolope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button name=\"submit\" type=\"submit\" value=\"Submit\" class=\"btn-half site-button button-lg m-b15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Submit</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"contact-info text-black m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"section-head text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Info\">Contact Info</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- TITLE END -->
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center p-b40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sl-icon-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-t0 font-weight-500\">Phone number</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>(456) 789 10 12</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center p-b40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sl-icon-envolope-letter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-t0 font-weight-500\">Email address</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>demo@gmail.com</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sl-icon-map\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-t0 font-weight-500\">Address info</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>55/11 Land Street, Modern New Yourk City, USA</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- SITE Search -->
\t\t\t\t\t\t\t<div id=\"search\">
\t\t\t\t\t\t\t\t<span class=\"close\"></span>
\t\t\t\t\t\t\t\t<form role=\"search\" id=\"searchform\" action=\"/search\" method=\"get\" class=\"radius-xl\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input value=\"\" name=\"q\" type=\"search\" placeholder=\"Type to search\"/>
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"search-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- MAIN Vav -->
\t\t\t\t\t\t\t<div class=\"header-nav navbar-collapse collapse\">
\t\t\t\t\t\t\t\t<ul class=\" nav navbar-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">LELLA MERIEM
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">About us</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        echo "\">RÉSERVATION
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"post-image.html\">Search</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu-direction\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        echo "\">GALLERIE
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">CONTACT</a>

\t\t\t\t\t\t\t\t\t</li>
<li>
<a href=\"#\">Login as\t</a>
\t<ul class=\"sub-menu\">
\t\t<li>
<a href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Administrator</a>

\t\t</li>
<li>
<a href=\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">client</a>

</li>

\t</ul>
</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<!-- HEADER END -->

\t\t\t<!-- CONTENT START -->
\t\t\t<div
\t\t\t\tclass=\"page-content\">


\t\t\t\t<!-- SLIDER START -->
\t\t\t\t<div id=\"welcome_wrapper\" class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"goodnews-header\" data-source=\"gallery\" style=\"background:#eeeeee;padding:0px;\">
\t\t\t\t\t<div id=\"welcome\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\" data-version=\"5.4.3.1\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<!-- SLIDE 1 -->
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-901\" data-transition=\"fadethroughdark\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"zarzis/images/bbbb.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"300\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Click\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img src=\"zarzis/images/bbbb.jpg\" alt=\"\" data-lazyload=\"zarzis/images/bbbb.jpg\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgparallax=\"4\" class=\"rev-slidebg\" data-no-retina><!-- LAYERS -->
\t\t\t\t\t\t\t\t<!-- LAYER NR. 0 [ for overlay ] --><div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-901-layer-0\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"opacity:0;\",\"ease\":\"Power4.easeOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;\"> </div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 [ Black Box ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-901-layer-1\" data-x=\"['left','left','left','left']\" data-hoffset=\"['30','30','30','30']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','250']\" data-fontsize=\"['46','46','46','32']\" data-lineheight=\"['56','56','56','50']\" data-width=\"['0','0','0','0']\" data-height=\"['','','','']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":500,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div class=\" rev-slider-style-1\"></div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 [ for title ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-901-layer-2\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['270','270','270','270']\" data-fontsize=\"['56','56','38','28']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['700','700','96%','96%']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[5,5,5,5]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[20,20,20,20]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div style=\"font-family: 'DM Serif Text', serif;text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary\">
\t\t\t\t\t\t\t\t\t\t\tVivez bien les vacances</span><br>
\t\t\t\t\t\t\t\t\t\tDES APPARTEMENTS CONVIVIALS ET DES PRIX IMBATTABLES
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-901-layer-3\" data-x=\"['right','right','right','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','570','570','180']\" data-fontsize=\"['400','400','400','80']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['800','800','800','800']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['right','right','right','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:rgba(0,0,0,0);\">
\t\t\t\t\t\t\t\t\t<span class=\"slider-text-outline\" style=\"font-family: 'Roboto', sans-serif;text-transform:uppercase;\">01</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 [ for see all service botton ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-901-layer-4\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['570','570','520','460']\" data-lineheight=\"['none','none','none','none']\" data-width=\"['300','300','300','300']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index:13; text-transform:uppercase;\"></div>


\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<!-- SLIDE 2 -->
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-902\" data-transition=\"fadethroughdark\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"zarzis/images/img_slide1.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"300\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Click\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img src=\"zarzis/images/img_slide1.jpg\" alt=\"\" data-lazyload=\"zarzis/images/img_slide1.jpg\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgparallax=\"4\" class=\"rev-slidebg\" data-no-retina><!-- LAYERS -->
\t\t\t\t\t\t\t\t<!-- LAYER NR. 0 [ for overlay ] --><div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-902-layer-0\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"opacity:0;\",\"ease\":\"Power4.easeOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;\"> </div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 [ Black Box ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-902-layer-1\" data-x=\"['left','left','left','left']\" data-hoffset=\"['30','30','30','30']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','250']\" data-fontsize=\"['46','46','46','32']\" data-lineheight=\"['56','56','56','50']\" data-width=\"['0','0','0','0']\" data-height=\"['','','','']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":500,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div class=\" rev-slider-style-1\"></div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 [ for title ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-902-layer-2\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['270','270','270','270']\" data-fontsize=\"['56','56','38','28']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['700','700','96%','96%']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[5,5,5,5]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[20,20,20,20]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div style=\"font-family: 'DM Serif Text', serif;text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary\">Appartements Lella Meriem</span><br>
\t\t\t\t\t\t\t\t\t\tVotre partenaire en vacances  Calme et propre  meublés et équipés
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-902-layer-3\" data-x=\"['right','right','right','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','570','570','180']\" data-fontsize=\"['400','400','400','80']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['800','800','800','800']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['right','right','right','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:rgba(0,0,0,0);\">
\t\t\t\t\t\t\t\t\t<span class=\"slider-text-outline\" style=\"font-family: 'Roboto', sans-serif;text-transform:uppercase;\">02</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 [ for see all service botton ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-902-layer-4\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['570','570','520','460']\" data-lineheight=\"['none','none','none','none']\" data-width=\"['300','300','300','300']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index:13; text-transform:uppercase;\"></div>

\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<!-- SLIDE 3 -->
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-903\" data-transition=\"fadethroughdark\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"zarzis/images/img_slide2.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"300\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Click\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img src=\"zarzis/images/img_slide2.jpg\" alt=\"\" data-lazyload=\"zarzis/images/img_slide2.jpg\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgparallax=\"4\" class=\"rev-slidebg\" data-no-retina><!-- LAYERS -->
\t\t\t\t\t\t\t\t<!-- LAYER NR. 0 [ for overlay ] --><div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-903-layer-0\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"opacity:0;\",\"ease\":\"Power4.easeOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;\"> </div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 [ Black Box ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-903-layer-1\" data-x=\"['left','left','left','left']\" data-hoffset=\"['30','30','30','30']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','250']\" data-fontsize=\"['46','46','46','32']\" data-lineheight=\"['56','56','56','50']\" data-width=\"['0','0','0','0']\" data-height=\"['','','','']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":500,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div class=\" rev-slider-style-1\"></div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 [ for title ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-903-layer-2\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['270','270','270','270']\" data-fontsize=\"['56','56','38','28']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['700','700','96%','96%']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[5,5,5,5]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[20,20,20,20]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div style=\"font-family: 'DM Serif Text', serif;text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary\">
\t\t\t\t\t\t\t\t\t\t\tProfitez
\t\t\t\t\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t\t\t\t\tDE NOS MEILLEURS PLANS
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-903-layer-3\" data-x=\"['right','right','right','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','570','570','180']\" data-fontsize=\"['400','400','400','80']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['800','800','800','800']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['right','right','right','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:rgba(0,0,0,0);\">
\t\t\t\t\t\t\t\t\t<span class=\"slider-text-outline\" style=\"font-family: 'Roboto', sans-serif;text-transform:uppercase;\">03</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 [ for see all service botton ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-903-layer-4\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['570','570','520','460']\" data-lineheight=\"['none','none','none','none']\" data-width=\"['300','300','300','300']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index:13; text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"site-button slider-btn-left btn-half\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMore About</span>
\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- SLIDER END -->

\t\t\t\t<!--BOOKING SECTION START-->
\t\t\t\t<div class=\"section-full p-t25 booking-bar\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"booking-bar-inner bg-primary\">
\t\t\t\t\t\t\t<div class=\"booking-fram-name\">
\t\t\t\t\t\t\t\t<h3 class=\"m-a0\">Book A Room</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"booking-form\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"date-cal-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>In-Out Time</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"t-datepicker\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"t-check-in form-control\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"t-check-out form-control\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"room-type-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Room Type</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" disabled=\"disabled\">Single room</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Single\">Single room</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Double\">Double Room</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Deluxe\">Deluxe room</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"adult-type-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Adult</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"No-adult\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" disabled=\"disabled\">Adult</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"one\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"two\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"three\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"children-type-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Childrens</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"No-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" disabled=\"disabled\">Childrens</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"one\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"two\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"three\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"booking-form-btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"site-button-secondry btn-half\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCHECK AVAILABILITY</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--BOOKING SECTION END-->

\t\t\t\t<!-- WELCOME SECTION START -->
\t\t\t\t<div class=\"section-full p-tb90 bg-white overflow-hide\">

\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"section-content\">

\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-sm-12 text-black\">
\t\t\t\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t\t\t\t<div class=\"section-head text-left\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\" m-b5\" data-title=\"About\">About Lella Meriem</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- TITLE END -->
\t\t\t\t\t\t\t\t\t<h4 class=\" m-t0\">Sur les côtes ocre du sud Tunisien,
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tZARZIS, l'une des plus anciennes cités méditerranéennes, elle jouit d’un climat exceptionnel,
\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t<div class=\"row equal-wraper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper left bg-gray p-a20 hover-box-effect v-icon-effect  equal-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-room-service v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte\">Restaurants</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Des restaurants avec un large choix à quelques mètres</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper left bg-gray p-a20 hover-box-effect v-icon-effect  equal-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-stones v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Piscine commune</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>A l’intérieur, il se trouve des allées piétonnières  et une piscine commune.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6  m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper left bg-gray p-a20 hover-box-effect v-icon-effect  equal-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-wifi v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Parkings
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDes bâtiments contournée par des parkings sécurisés
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6  m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper left bg-gray p-a20 hover-box-effect v-icon-effect  equal-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-cards v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tZone touristique
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSituée au cœur de la zone touristique de la région
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn-half site-button button-lg m-b30\">
\t\t\t\t\t\t\t\t\t\t<span>EN SAVOIR PLUS</span>
\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"home-about-block-outer bg-repeat bg-white\" style=\"background-image:url(images/background/bg-dot.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-block-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider owl-carousel owl-btn-vertical-center\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/salon2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/piscine_prive.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/parking.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/plage.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/lella_night.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- WELCOME  SECTION END -->

\t\t\t\t<!-- ROOMS SLIDER START -->
\t\t\t\t<div class=\"section-full p-tb90 bg-gray\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container\">

\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t<div class=\"section-head text-center\">
\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Lella Meriem\">Meilleurs Appartements</h2>
\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- TITLE END -->

\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<ul class=\"btn-filter-wrap2\">
\t\t\t\t\t\t\t\t<li class=\"btn-filter btn-active\" data-filter=\"*\">All Rooms</li>
\t\t\t\t\t\t\t\t<li class=\"btn-filter\" data-filter=\".col-1\">Classic</li>
\t\t\t\t\t\t\t\t<li class=\"btn-filter\" data-filter=\".col-1\">Superior</li>
\t\t\t\t\t\t\t\t<li class=\"btn-filter\" data-filter=\".col-3\">Delux</li>
\t\t\t\t\t\t\t\t<li class=\"btn-filter\" data-filter=\".col-4\">Executive
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t\t<!-- IMAGE CAROUSEL START -->
\t\t\t\t\t\t<div class=\"section-content\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"owl-carousel owl-carousel-filter2 owl-btn-bottom-center\">
\t\t\t\t\t\t\t\t<!-- COLUMNS 1 -->
\t\t\t\t\t\t\t\t<div class=\"item col-1\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/img_1215_scaled.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. Rez de Chaussée Bougainvillier</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$40 /night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t100m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t5
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 2 -->
\t\t\t\t\t\t\t\t<div class=\"item col-2\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/img_1103_scaled.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. 1er étage Bougainvillier</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$90 /night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t80m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t3
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 3 -->
\t\t\t\t\t\t\t\t<div class=\"item col-3\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/bbbb.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. rez de chaussée Jasmin</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$100/night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t150m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t6
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 4 -->
\t\t\t\t\t\t\t\t<div class=\"item col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/ff.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. Rez de Chaussée Bougainvillier</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$20/night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t30m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t1
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 5 -->
\t\t\t\t\t\t\t\t<div class=\"item col-3\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/img_1103_scaled.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. Rez de Chaussée
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$700/night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t60m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t4
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 6 -->
\t\t\t\t\t\t\t\t<div class=\"item col-2\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/dji_0942_scaled.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App jasmin
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$50/night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t55m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t2
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- ROOMS  SLIDER END -->

\t\t\t\t<!-- OUR BLOG START -->
\t\t\t\t<div class=\"section-full p-t80 p-b50 bg-white\">

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container\">

\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t<div class=\"section-head text-left\">
\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Appartment\">Our Latest Appartment</h2>
\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- TITLE END -->

\t\t\t\t\t\t<!-- IMAGE CAROUSEL START -->
\t\t\t\t\t\t<div class=\"section-content\">


\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-post latest-blog-1 date-style-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-media wt-img-effect zoom-slow\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\"><img style=\" height:350px;\" src=\"zarzis/images/zeze.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>20 Mar 2019
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"post-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-author-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"zarzis/images/img_1103_scaled.jpg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBy</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Zarzis Holiday</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"post-comment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-comments text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">10 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Your first source for architecture, dsign and art news.</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusd veritatis quisquam laboriosam asperiores, tenetur, blanditiis,quaerat odit ex exercitationem pariatur.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"readmore-line\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"site-button-ink text-primary font-weight-900 \">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-post latest-blog-1 date-style-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-media wt-img-effect zoom-slow\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\"><img style=\" height:350px;\"src=\"zarzis/images/bbbb.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>20 Mar 2019
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"post-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-author-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img   src=\"zarzis/images/img_1103_scaled.jpg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBy</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Zarzis Holidays</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"post-comment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-comments text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">10 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Your first source for architecture, dsign and art news.</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusd veritatis quisquam laboriosam asperiores, tenetur, blanditiis,quaerat odit ex exercitationem pariatur.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"readmore-line\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"site-button-ink text-primary font-weight-900 \">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- OUR BLOG END -->
\t\t\t\t 
\t\t\t                   <!-- YOUTUBE VIDEO WITH POPUP -->
                                    <div class=\"m-b30\">
                                        <!-- TITLE START -->
                                        <div class=\"section-head\">
                                            <h2 class=\" m-b5\">Video Youtube with popup</h2>
                                            <div class=\"wt-separator-outer\">
                                                <div class=\"wt-separator bg-primary\"></div>
                                            </div>
                                        </div>
                                        <!-- TITLE END -->                                        
                                        <div class=\"wt-box\">
\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"wt-thum-bx wt-img-overlay1 wt-img-effect zoom yt-thum-box\">
                                                <img src=\"zarzis/images/dji_0942_scaled.jpg\" alt=\"\">
                                                <div class=\"overlay-bx\">
                                                    <div class=\"overlay-icon\">
                                                        <a class=\"mfp-video\" href=\"https://www.youtube.com/watch?v=KdDKU0GNbAM\">
                                                            <i class=\"fa fa-play wt-icon-box-xs\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t 
            <!-- OUR SPECIALLIZATION START -->
            <div class=\"section-full bg-change-section overlay-wraper p-tb80\"   data-toggle=\"tab-hover\">
                <div class=\"overlay-main bg-black opacity-06\"></div>
                <div class=\"bg-changer\">
                    <div  class=\" section-bg active\" style=\"background-image:url(\"images/background/room.jpg\")\"></div>
                    <div  class=\"section-bg\" style=\"background-image:url(\"images/background/appartment.jpg\")\"></div>
                    <div  class=\"section-bg\" style=\"background-image:url(\"images/background/architecture.jpg\")\"></div> 
                    <div  class=\"section-bg\" style=\"background-image:url(\"images/background/interior.jpg\")\"></div> 
                </div>
                                          
                <div class=\"container\">
                    <!-- TITLE START -->
                    <div class=\"section-head text-left\">
                        <h2 class=\"m-b5 text-white\" data-title=\"Specialization\">Our Specialization</h2>
                        <div class=\"wt-separator-outer\">
                            <div class=\"wt-separator bg-primary\"></div>
                        </div>
                    </div>
                    <!-- TITLE END -->                                   
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"services-part-left \">
                            \t<div class=\"text-white\">
                                <h3 class=\" m-t0\">Discover a hotel that defines a new dimension of luxury.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris ferme ntum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                </div>
                                <div class=\"section-content\">
                                    <div class=\"row\">
                                                
                                        <div class=\"col-md-4 col-sm-4 col-xs-4 col-xs-100pc\">
                                            <div class=\"m-b30 wt-icon-box-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-primary m-b5 font-weight-800\"><span class=\"counter m-r5\">406</span><b>+</b></h2>                                            
                                                <h5 class=\"wt-tilte m-b0 text-white\">International Guests</h5>
                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-4 col-sm-4 col-xs-4 col-xs-100pc\">
                                            <div class=\"m-b30  wt-icon-box-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-primary m-b5 font-weight-800\"><span class=\"counter m-r5\">132</span><b>+</b></h2>                                                
                                                <h5 class=\"wt-tilte m-b0 text-white\">Five stars rating</h5>
                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-4 col-sm-4 col-xs-4 col-xs-100pc\">
                                            <div class=\"m-b30 wt-icon-box-wraper\">
                                                <h2 class=\"text-primary m-b5 font-weight-800\"><span class=\"counter m-r5\">207</span><b>+</b></h2> 
                                                <h5 class=\"wt-tilte m-b0 text-white\">Served Breakfast</h5>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"row no-col-gap\">
                                <div class=\"col-md-6 col-sm-6 col-xs-6 col-xs-100pc\">
                                    <div class=\"wt-icon-box-wraper p-tb20 center bdr-1 bdr-solid bdr-white  bgcall-block hover-box-effect\" >
                                        <div class=\"icon-md text-primary\">
                                            <span class=\"icon-cell text-white\"><i class=\"flaticon-hotel\"></i></span>
                                        </div>
                                        <div class=\"icon-content text-white\">
                                            <h4 class=\"wt-tilte m-b10\">Rooms</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-6 col-xs-100pc\">
                                    <div class=\"wt-icon-box-wraper p-tb20 center bdr-1 bdr-solid bdr-white  bgcall-block  hover-box-effect\" >
                                        <div class=\"icon-md text-primary\">
                                            <span class=\"icon-cell text-white\"><i class=\"flaticon-coffee-cup\"></i></span>
                                        </div>
                                        <div class=\"icon-content  text-white\">
                                            <h4 class=\"wt-tilte m-b10\">Restaurant</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-6 col-xs-100pc\">
                                    <div class=\"wt-icon-box-wraper p-tb20 center bdr-1 bdr-solid bdr-white  bgcall-block  hover-box-effect\">
                                        <div class=\"icon-md text-primary\">
                                            <span class=\"icon-cell text-white\"><i class=\"flaticon-cheers\"></i></span>
                                        </div>
                                        <div class=\"icon-content  text-white\">
                                            <h4 class=\"wt-tilte m-b10\">Luxury Bars</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6  col-sm-6 col-xs-6 col-xs-100pc\">
                                    <div class=\"wt-icon-box-wraper p-tb20 center bdr-1 bdr-solid bdr-white bgcall-block hover-box-effect\">
                                        <div class=\"icon-md text-primary\">
                                            <span class=\"icon-cell text-white\"><i class=\"flaticon-seats-at-the-hall\"></i></span>
                                        </div>
                                        <div class=\"icon-content  text-white\">
                                            <h4 class=\"wt-tilte m-b10\">Meeting Hall</h4>
                                        </div>
                                    </div>
                                </div>                                                                                
                            </div>                        
                        </div>
                    </div>                                     
                </div>
            </div>   
            <!-- OUR SPECIALLIZATION END -->

\t\t\t\t<!-- OUR SERVICES START -->
\t\t\t\t<div class=\"section-full p-tb80\">

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container\">
\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t<div class=\"section-head text-left\">
\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Services\">Our Services</h2>
\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- TITLE END -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-wifi v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Accès direct à la piscine</h4>
\t\t\t\t\t\t\t\t\t\t<p>La résidence dispose d'un accès direct et sécurisé par un tunnel à la piscine et la plage de l'hôtel.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-room-service v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Des restaurants à 3 minutes</h4>
\t\t\t\t\t\t\t\t\t\t<p> Des restaurants avec un large choix et des salons de thé chaleureux sont à 4 min de votre logement.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-smartphone v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Des balades régulièrement planifiés</h4>
\t\t\t\t\t\t\t\t\t\t<p>Des balades sur des quads motos, des carrosses à cheval, des voitures 4X4 et des balades en mer sont planifiées régulièrement.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-business-cards v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Téléviseur disponible</h4>
\t\t\t\t\t\t\t\t\t\t<p>Vous trouverez dans l’appartement un téléviseur branché sur plusieurs satellites.
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-calendar v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Location des voitures</h4>
\t\t\t\t\t\t\t\t\t\t<p>Des agences de location de voitures sont disponibles avec des prix raisonnables.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-time-passing v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Place Parking</h4>
\t\t\t\t\t\t\t\t\t\t<p> Une place de stationnement est garantie pour votre véhicule.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn-half site-button button-lg m-b15 m-t50\">
\t\t\t\t\t\t\t\t<span>View All</span>
\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- OUR SERVICES END -->
    
            <!-- TESTIMONIALS SECTION START -->
            <div class=\"section-full p-t80 p-b80  overlay-wraper\" data-stellar-background-ratio=\"0.5\" style=\"background-image:url(images/background/bg-2.jpg);\">
            <div class=\"overlay-main opacity-05 bg-black\"></div>
 
                <div class=\"container\">
                    <div class=\"section-content\">
                    
                        <!-- TITLE START -->
                        <div class=\"section-head text-left\">
                            <h2 class=\"m-b5 text-white\" data-title=\"Clients\">Our Client Says</h2>
                            <div class=\"wt-separator-outer\">
                                <div class=\"wt-separator bg-primary\"></div>
                            </div>
                        </div>
                        <!-- TITLE END --> 
                    
                        <!-- TESTIMONIAL 4 START ON BACKGROUND -->   
                        <div class=\"section-content\">
                            <div class=\"testimonial-home owl-carousel  owl-btn-top-right\">
                                <div class=\"item\">
                                    <div class=\"testimonial-6\">
                                        <div class=\"testimonial-pic-block\"> 
                                            <div class=\"testimonial-pic\">
                                                <img src=\"sharan/images/testimonials_pic1.jpg\" width=\"132\" height=\"132\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"testimonial-text clearfix text-white\">
                                            <div class=\"testimonial-detail \">
                                                <h4 class=\"testimonial-name m-t0 m-b10\">Andi Smith</h4>
                                            </div>
                                            <div class=\"testimonial-paragraph text-black p-t5\">
                                                <p>“Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered us the most beautiful house great looks.</p>
                                            </div>
                                            <div class=\"testimonial-detail \">
                                            \t<span class=\"testimonial-position\">Newyork city</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"testimonial-6\">
                                        <div class=\"testimonial-pic-block\"> 
                                            <div class=\"testimonial-pic\">
<img src=\"sharan/images/testimonials/pic2.jpg\" width=\"132\" height=\"132\" alt=\"\">

                                            </div>
                                        </div>
                                        <div class=\"testimonial-text clearfix text-white\">
                                            <div class=\"testimonial-detail \">
                                                <h4 class=\"testimonial-name m-t0 m-b10\">Poul Anderson</h4>
                                            </div>
                                            <div class=\"testimonial-paragraph text-black p-t5\">
                                                <p>“Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered us the most beautiful house great looks.</p>
                                            </div>
                                            <div class=\"testimonial-detail \">
                                            \t<span class=\"testimonial-position\">Mexico city</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class=\"item\">
                                    <div class=\"testimonial-6\">
                                        <div class=\"testimonial-pic-block\"> 
                                            <div class=\"testimonial-pic\">
<img src=\"sharan/images/testimonials/pic3.jpg\" width=\"132\" height=\"132\" alt=\"\">

                                            </div>
                                        </div>
                                        <div class=\"testimonial-text clearfix text-white\">
                                            <div class=\"testimonial-detail \">
                                                <h4 class=\"testimonial-name m-t0 m-b10\">Kayra gray</h4>
                                            </div>
                                            <div class=\"testimonial-paragraph text-black p-t5\">
                                                <p>“Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered us the most beautiful house great looks.</p>
                                            </div>
                                            <div class=\"testimonial-detail \">
                                            \t<span class=\"testimonial-position\">Newyork city</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"testimonial-6\">
                                        <div class=\"testimonial-pic-block\"> 
                                            <div class=\"testimonial-pic\">
<img src=\"sharan/images/testimonials/pic4.jpg\" width=\"132\" height=\"132\" alt=\"\">

                                            </div>
                                        </div>
                                        <div class=\"testimonial-text clearfix text-white\">
                                            <div class=\"testimonial-detail \">
                                                <h4 class=\"testimonial-name m-t0 m-b10\">Anna Smith</h4>
                                            </div>
                                            <div class=\"testimonial-paragraph text-black p-t5\">
                                                <p>“Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered us the most beautiful house great looks.</p>
                                            </div>
                                            <div class=\"testimonial-detail \">
                                            \t<span class=\"testimonial-position\">Newyork city</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- TESTIMONIALS SECTION END --> 

\t\t\t\t<!-- OUR TEAM START -->
\t\t\t\t<div class=\"section-full p-t80 p-b80 bg-white\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container\">

\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t<div class=\"section-head text-left\">
\t\t\t\t\t\t\t<h2 class=\"  m-b5\" data-title=\"Des adresses\">Des adresses</h2>
\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- TITLE END -->

\t\t\t\t\t\t<!-- IMAGE CAROUSEL START -->
\t\t\t\t\t\t<div class=\"our-team-two p-lr15\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"wt-team-arc2\">

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/fatroucha.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-social-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"team-social-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-detail  text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t0\">Chez Fatroucha</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Restaurant</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"wt-team-arc2\">

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/base_nautique.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-social-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"team-social-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-detail  text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t0\">Base nautique
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Odyssée</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"wt-team-arc2\">

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/aqua_parc.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-social-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"team-social-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-detail  text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t0\">Aqua Parc Le pirate</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Centre de loisir
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- OUR TEAM END -->

\t\t\t</div>
\t\t\t<!-- CONTENT END -->

\t\t\t<!-- FOOTER START -->
\t\t\t<footer
\t\t\t\tclass=\"site-footer footer-large footer-dark\tfooter-wide\">

\t\t\t\t<!-- FOOTER BLOCKES START -->
\t\t\t\t<div class=\"footer-top overlay-wraper\">
\t\t\t\t\t<div class=\"overlay-main\"></div>
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"news-letter-footer\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"newsletter-f-left\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-uppercase m-t0 m-b10\">Subscribe to our newsletter!</h4>
\t\t\t\t\t\t\t\t\t\t<p>Never Miss Anything about us .
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"newsletter-f-right text-center\">
\t\t\t\t\t\t\t\t\t\t<form role=\"search\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"news-letter\" class=\"form-control\" placeholder=\"ENTER YOUR EMAIL\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Submit</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"m-b10\">
\t\t\t\t\t\t\t<div class=\"wt-divider bg-gray-dark\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- ABOUT COMPANY -->
\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"widget widget_about\">
\t\t\t\t\t\t\t\t\t<!--<h4 class=\"widget-title\">About Company</h4>-->
\t\t\t\t\t\t\t\t\t<div class=\"logo-footer clearfix p-b15\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"zarzis/images/zarzis_logo.png\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"max-w400\">MAKE YOUR HOLIDAY BETTER .</p>

\t\t\t\t\t\t\t\t\t<ul class=\"social-icons social-tooltips-outer  wt-social-links\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltips\">Facebook</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-linkedin\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltips\">Linkedin</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-google-plus\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltips\">Google Plus</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltips\">Instagram</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"widget widget_services inline-links\">
\t\t\t\t\t\t\t\t\t<h4 class=\"widget-title\">Our location
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about-1.html\">zarzis ...</a></li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"widget widget_services inline-links\">
\t\t\t\t\t\t\t\t\t<h4 class=\"widget-title\">Useful links</h4>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about-1.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"post-gallery.html\">Reservation</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"post-gallery.html\">Gallery</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"project-detail.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"widget widget_services inline-links\">
\t\t\t\t\t\t\t\t\t<h4 class=\"widget-title\"></h4>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about-1.html\"></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"post-gallery.html\"></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"post-gallery.html\"></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"project-detail.html\"></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
 
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"widget widget_address_outer\">
                                <h4 class=\"widget-title\">Contact Us</h4>
                                <ul class=\"widget_address\">
                                    <li><i class=\"sl-icon-map text-primary\"></i> 92 Princess Road, parkvenue,Greater London, NW18JR, United Kingdom</li>
                                    <li><i class=\"sl-icon-envolope-letter text-primary\"></i>sharandemo@gmail.com</li>
                                    <li><i class=\"sl-icon-phone text-primary\"></i>(+0091) 912-3456-073</li>
                                    <li><i class=\"sl-icon-printer text-primary\"></i>(+0091) 912-3456-084</li>
                                </ul>
                           
                            </div>                                                  
                        </div>              
\t\t\t\t\t\t</div>
                </div>
            </div>
\t\t\t\t<!-- FOOTER COPYRIGHT -->
\t\t\t\t<div class=\"footer-bottom overlay-wraper\">
\t\t\t\t\t<div class=\"overlay-main\"></div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"wt-footer-bot-center\">
\t\t\t\t\t\t\t\t<p style=\"color: #ffffff\">© 2020. Tous droits réservés. ZARZIS  HOLIDAYS made with ❤ by
\t\t\t\t\t\t\t\t\t<a style=\"color: #878787\" href=\"https://www.octaplus-technology.com/\">
\t\t\t\t\t\t\t\t\t\tOcta+ technology
\t\t\t\t\t\t\t\t\t</a>.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<!-- FOOTER END -->


\t\t\t<!-- BUTTON TOP START -->
\t\t\t<button class=\"scroltop\">
\t\t\t\t<span class=\"fa fa-angle-up  relative\" id=\"btn-vibrate\"></span>
\t\t\t</button>


\t\t</div>

\t\t<!-- LOADING AREA START ===== -->
\t<!--\t<div class=\"loading-area\">
\t\t\t<div class=\"loading-box\"></div>
\t\t\t<div class=\"loading-pic\">
\t\t\t\t<div class=\"cssload-thecube\">
\t\t\t\t\t<div class=\"cssload-cube cssload-c1\"></div>
\t\t\t\t\t<div class=\"cssload-cube cssload-c2\"></div>
\t\t\t\t\t<div class=\"cssload-cube cssload-c4\"></div>
\t\t\t\t\t<div class=\"cssload-cube cssload-c3\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
-->

\t\t<!-- STYLE SWITCHER END ==== -->
\t</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 228,  320 => 224,  310 => 217,  302 => 212,  289 => 202,  276 => 192,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}
\t<body>

\t\t<div
\t\t\tclass=\"page-wraper\">

\t\t\t<!-- HEADER START -->
\t\t\t<header class=\"site-header header-style-1\">
\t\t\t\t<div class=\"sticky-header main-bar-wraper\">
\t\t\t\t\t<div class=\"main-bar bg-white p-t5\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"logo-header\">
\t\t\t\t\t\t\t\t<div class=\"logo-header-inner logo-header-one\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/zarzis_logo.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- NAV Toggle Button -->
\t\t\t\t\t\t\t<button data-target=\".header-nav\" data-toggle=\"collapse\" type=\"button\" class=\"navbar-toggle collapsed\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<!-- ETRA Nav -->
\t\t\t\t\t\t\t<div class=\"extra-nav\">
\t\t\t\t\t\t\t\t<div class=\"extra-cell\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"contact-slide-show text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"extra-cell\">
\t\t\t\t\t\t\t\t\t<a href=\"#search\" class=\" text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"extra-cell\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"socialicon_show  text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share-alt\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ETRA Nav -->

\t\t\t\t\t\t\t<!-- Social Nav -->
\t\t\t\t\t\t\t<div class=\"social_hide\">
\t\t\t\t\t\t\t\t<div class=\"side-social-nav\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"socialicon_close\">&times;</a>
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltip\">Facebook</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-linkedin\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltip\">Linkedin</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-google-plus\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltip\">Google Plus</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltip\">Instagram</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Contact Nav -->
\t\t\t\t\t\t\t<div class=\"contact-slide-hide\">
\t\t\t\t\t\t\t\t<div class=\"contact-nav\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"contact_close\">&times;</a>
\t\t\t\t\t\t\t\t\t<div class=\"contact-nav-form p-a30\">
\t\t\t\t\t\t\t\t\t\t<form class=\"cons-contact-form\" method=\"post\" action=\"form-handler.php\">
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"contact-one m-b30\">

\t\t\t\t\t\t\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"section-head text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Form\">Get In Touch</h2>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- TITLE END -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group wt-inputicon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"username\" type=\"text\" required class=\"form-control\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-input-icon sl-icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group wt-inputicon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"email\" type=\"text\" class=\"form-control\" required placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-input-icon sl-icon-envolope-letter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group wt-inputicon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" rows=\"3\" class=\"form-control \" required placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-input-icon sl-icon-envolope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button name=\"submit\" type=\"submit\" value=\"Submit\" class=\"btn-half site-button button-lg m-b15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Submit</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"contact-info text-black m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"section-head text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Info\">Contact Info</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- TITLE END -->
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center p-b40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sl-icon-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-t0 font-weight-500\">Phone number</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>(456) 789 10 12</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center p-b40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sl-icon-envolope-letter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-t0 font-weight-500\">Email address</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>demo@gmail.com</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sl-icon-map\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-t0 font-weight-500\">Address info</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>55/11 Land Street, Modern New Yourk City, USA</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- SITE Search -->
\t\t\t\t\t\t\t<div id=\"search\">
\t\t\t\t\t\t\t\t<span class=\"close\"></span>
\t\t\t\t\t\t\t\t<form role=\"search\" id=\"searchform\" action=\"/search\" method=\"get\" class=\"radius-xl\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input value=\"\" name=\"q\" type=\"search\" placeholder=\"Type to search\"/>
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"search-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- MAIN Vav -->
\t\t\t\t\t\t\t<div class=\"header-nav navbar-collapse collapse\">
\t\t\t\t\t\t\t\t<ul class=\" nav navbar-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('home') }}\">LELLA MERIEM
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">About us</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('reservation_index') }}\">RÉSERVATION
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"post-image.html\">Search</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu-direction\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('gallery') }}\">GALLERIE
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('contact') }}\">CONTACT</a>

\t\t\t\t\t\t\t\t\t</li>
<li>
<a href=\"#\">Login as\t</a>
\t<ul class=\"sub-menu\">
\t\t<li>
<a href=\"{{ path('login') }}\">Administrator</a>

\t\t</li>
<li>
<a href=\"{{ path('login') }}\">client</a>

</li>

\t</ul>
</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<!-- HEADER END -->

\t\t\t<!-- CONTENT START -->
\t\t\t<div
\t\t\t\tclass=\"page-content\">


\t\t\t\t<!-- SLIDER START -->
\t\t\t\t<div id=\"welcome_wrapper\" class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"goodnews-header\" data-source=\"gallery\" style=\"background:#eeeeee;padding:0px;\">
\t\t\t\t\t<div id=\"welcome\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\" data-version=\"5.4.3.1\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<!-- SLIDE 1 -->
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-901\" data-transition=\"fadethroughdark\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"zarzis/images/bbbb.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"300\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Click\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img src=\"zarzis/images/bbbb.jpg\" alt=\"\" data-lazyload=\"zarzis/images/bbbb.jpg\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgparallax=\"4\" class=\"rev-slidebg\" data-no-retina><!-- LAYERS -->
\t\t\t\t\t\t\t\t<!-- LAYER NR. 0 [ for overlay ] --><div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-901-layer-0\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"opacity:0;\",\"ease\":\"Power4.easeOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;\"> </div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 [ Black Box ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-901-layer-1\" data-x=\"['left','left','left','left']\" data-hoffset=\"['30','30','30','30']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','250']\" data-fontsize=\"['46','46','46','32']\" data-lineheight=\"['56','56','56','50']\" data-width=\"['0','0','0','0']\" data-height=\"['','','','']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":500,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div class=\" rev-slider-style-1\"></div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 [ for title ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-901-layer-2\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['270','270','270','270']\" data-fontsize=\"['56','56','38','28']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['700','700','96%','96%']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[5,5,5,5]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[20,20,20,20]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div style=\"font-family: 'DM Serif Text', serif;text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary\">
\t\t\t\t\t\t\t\t\t\t\tVivez bien les vacances</span><br>
\t\t\t\t\t\t\t\t\t\tDES APPARTEMENTS CONVIVIALS ET DES PRIX IMBATTABLES
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-901-layer-3\" data-x=\"['right','right','right','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','570','570','180']\" data-fontsize=\"['400','400','400','80']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['800','800','800','800']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['right','right','right','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:rgba(0,0,0,0);\">
\t\t\t\t\t\t\t\t\t<span class=\"slider-text-outline\" style=\"font-family: 'Roboto', sans-serif;text-transform:uppercase;\">01</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 [ for see all service botton ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-901-layer-4\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['570','570','520','460']\" data-lineheight=\"['none','none','none','none']\" data-width=\"['300','300','300','300']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index:13; text-transform:uppercase;\"></div>


\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<!-- SLIDE 2 -->
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-902\" data-transition=\"fadethroughdark\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"zarzis/images/img_slide1.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"300\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Click\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img src=\"zarzis/images/img_slide1.jpg\" alt=\"\" data-lazyload=\"zarzis/images/img_slide1.jpg\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgparallax=\"4\" class=\"rev-slidebg\" data-no-retina><!-- LAYERS -->
\t\t\t\t\t\t\t\t<!-- LAYER NR. 0 [ for overlay ] --><div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-902-layer-0\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"opacity:0;\",\"ease\":\"Power4.easeOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;\"> </div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 [ Black Box ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-902-layer-1\" data-x=\"['left','left','left','left']\" data-hoffset=\"['30','30','30','30']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','250']\" data-fontsize=\"['46','46','46','32']\" data-lineheight=\"['56','56','56','50']\" data-width=\"['0','0','0','0']\" data-height=\"['','','','']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":500,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div class=\" rev-slider-style-1\"></div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 [ for title ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-902-layer-2\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['270','270','270','270']\" data-fontsize=\"['56','56','38','28']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['700','700','96%','96%']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[5,5,5,5]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[20,20,20,20]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div style=\"font-family: 'DM Serif Text', serif;text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary\">Appartements Lella Meriem</span><br>
\t\t\t\t\t\t\t\t\t\tVotre partenaire en vacances  Calme et propre  meublés et équipés
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-902-layer-3\" data-x=\"['right','right','right','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','570','570','180']\" data-fontsize=\"['400','400','400','80']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['800','800','800','800']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['right','right','right','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:rgba(0,0,0,0);\">
\t\t\t\t\t\t\t\t\t<span class=\"slider-text-outline\" style=\"font-family: 'Roboto', sans-serif;text-transform:uppercase;\">02</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 [ for see all service botton ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-902-layer-4\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['570','570','520','460']\" data-lineheight=\"['none','none','none','none']\" data-width=\"['300','300','300','300']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index:13; text-transform:uppercase;\"></div>

\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<!-- SLIDE 3 -->
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-903\" data-transition=\"fadethroughdark\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"zarzis/images/img_slide2.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"300\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Click\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img src=\"zarzis/images/img_slide2.jpg\" alt=\"\" data-lazyload=\"zarzis/images/img_slide2.jpg\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgparallax=\"4\" class=\"rev-slidebg\" data-no-retina><!-- LAYERS -->
\t\t\t\t\t\t\t\t<!-- LAYER NR. 0 [ for overlay ] --><div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-903-layer-0\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"opacity:0;\",\"ease\":\"Power4.easeOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;\"> </div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 [ Black Box ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-903-layer-1\" data-x=\"['left','left','left','left']\" data-hoffset=\"['30','30','30','30']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','250']\" data-fontsize=\"['46','46','46','32']\" data-lineheight=\"['56','56','56','50']\" data-width=\"['0','0','0','0']\" data-height=\"['','','','']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":500,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div class=\" rev-slider-style-1\"></div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 [ for title ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" id=\"slide-903-layer-2\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['270','270','270','270']\" data-fontsize=\"['56','56','38','28']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['700','700','96%','96%']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[5,5,5,5]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[20,20,20,20]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            border-width:0px;\">
\t\t\t\t\t\t\t\t\t<div style=\"font-family: 'DM Serif Text', serif;text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary\">
\t\t\t\t\t\t\t\t\t\t\tProfitez
\t\t\t\t\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t\t\t\t\tDE NOS MEILLEURS PLANS
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-903-layer-3\" data-x=\"['right','right','right','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','570','570','180']\" data-fontsize=\"['400','400','400','80']\" data-lineheight=\"['66','66','48','38']\" data-width=\"['800','800','800','800']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['right','right','right','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 13;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            white-space: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            font-weight: 900;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            color:rgba(0,0,0,0);\">
\t\t\t\t\t\t\t\t\t<span class=\"slider-text-outline\" style=\"font-family: 'Roboto', sans-serif;text-transform:uppercase;\">03</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 [ for see all service botton ] -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-resizeme\" id=\"slide-903-layer-4\" data-x=\"['left','left','left','left']\" data-hoffset=\"['40','40','40','40']\" data-y=\"['top','top','top','top']\" data-voffset=\"['570','570','520','460']\" data-lineheight=\"['none','none','none','none']\" data-width=\"['300','300','300','300']\" data-height=\"['none','none','none','none']\" data-whitespace=\"['normal','normal','normal','normal']\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"from\":\"y:100px(R);opacity:0;\",\"speed\":2000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power4.easeOut\"},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {\"delay\":\"wait\",\"speed\":1000,\"to\":\"y:-50px;opacity:0;\",\"ease\":\"Power2.easeInOut\"}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index:13; text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"site-button slider-btn-left btn-half\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMore About</span>
\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- SLIDER END -->

\t\t\t\t<!--BOOKING SECTION START-->
\t\t\t\t<div class=\"section-full p-t25 booking-bar\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"booking-bar-inner bg-primary\">
\t\t\t\t\t\t\t<div class=\"booking-fram-name\">
\t\t\t\t\t\t\t\t<h3 class=\"m-a0\">Book A Room</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"booking-form\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"date-cal-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>In-Out Time</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"t-datepicker\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"t-check-in form-control\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"t-check-out form-control\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"room-type-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Room Type</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" disabled=\"disabled\">Single room</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Single\">Single room</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Double\">Double Room</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Deluxe\">Deluxe room</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"adult-type-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Adult</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"No-adult\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" disabled=\"disabled\">Adult</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"one\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"two\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"three\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"children-type-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Childrens</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"No-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" disabled=\"disabled\">Childrens</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"one\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"two\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"three\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"booking-form-btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"site-button-secondry btn-half\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCHECK AVAILABILITY</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--BOOKING SECTION END-->

\t\t\t\t<!-- WELCOME SECTION START -->
\t\t\t\t<div class=\"section-full p-tb90 bg-white overflow-hide\">

\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"section-content\">

\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-sm-12 text-black\">
\t\t\t\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t\t\t\t<div class=\"section-head text-left\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\" m-b5\" data-title=\"About\">About Lella Meriem</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- TITLE END -->
\t\t\t\t\t\t\t\t\t<h4 class=\" m-t0\">Sur les côtes ocre du sud Tunisien,
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tZARZIS, l'une des plus anciennes cités méditerranéennes, elle jouit d’un climat exceptionnel,
\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t<div class=\"row equal-wraper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper left bg-gray p-a20 hover-box-effect v-icon-effect  equal-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-room-service v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte\">Restaurants</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Des restaurants avec un large choix à quelques mètres</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper left bg-gray p-a20 hover-box-effect v-icon-effect  equal-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-stones v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Piscine commune</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>A l’intérieur, il se trouve des allées piétonnières  et une piscine commune.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6  m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper left bg-gray p-a20 hover-box-effect v-icon-effect  equal-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-wifi v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Parkings
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDes bâtiments contournée par des parkings sécurisés
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6  m-b30\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper left bg-gray p-a20 hover-box-effect v-icon-effect  equal-col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-cards v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tZone touristique
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSituée au cœur de la zone touristique de la région
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn-half site-button button-lg m-b30\">
\t\t\t\t\t\t\t\t\t\t<span>EN SAVOIR PLUS</span>
\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"home-about-block-outer bg-repeat bg-white\" style=\"background-image:url(images/background/bg-dot.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-block-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider owl-carousel owl-btn-vertical-center\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/salon2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/piscine_prive.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/parking.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/plage.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"home-about-slider-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/lella_night.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- WELCOME  SECTION END -->

\t\t\t\t<!-- ROOMS SLIDER START -->
\t\t\t\t<div class=\"section-full p-tb90 bg-gray\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container\">

\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t<div class=\"section-head text-center\">
\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Lella Meriem\">Meilleurs Appartements</h2>
\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- TITLE END -->

\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<ul class=\"btn-filter-wrap2\">
\t\t\t\t\t\t\t\t<li class=\"btn-filter btn-active\" data-filter=\"*\">All Rooms</li>
\t\t\t\t\t\t\t\t<li class=\"btn-filter\" data-filter=\".col-1\">Classic</li>
\t\t\t\t\t\t\t\t<li class=\"btn-filter\" data-filter=\".col-1\">Superior</li>
\t\t\t\t\t\t\t\t<li class=\"btn-filter\" data-filter=\".col-3\">Delux</li>
\t\t\t\t\t\t\t\t<li class=\"btn-filter\" data-filter=\".col-4\">Executive
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t\t<!-- IMAGE CAROUSEL START -->
\t\t\t\t\t\t<div class=\"section-content\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"owl-carousel owl-carousel-filter2 owl-btn-bottom-center\">
\t\t\t\t\t\t\t\t<!-- COLUMNS 1 -->
\t\t\t\t\t\t\t\t<div class=\"item col-1\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/img_1215_scaled.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. Rez de Chaussée Bougainvillier</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$40 /night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t100m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t5
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 2 -->
\t\t\t\t\t\t\t\t<div class=\"item col-2\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/img_1103_scaled.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. 1er étage Bougainvillier</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$90 /night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t80m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t3
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 3 -->
\t\t\t\t\t\t\t\t<div class=\"item col-3\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/bbbb.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. rez de chaussée Jasmin</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$100/night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t150m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t6
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 4 -->
\t\t\t\t\t\t\t\t<div class=\"item col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/ff.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. Rez de Chaussée Bougainvillier</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$20/night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t30m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t1
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 5 -->
\t\t\t\t\t\t\t\t<div class=\"item col-3\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/img_1103_scaled.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App. Rez de Chaussée
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$700/night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t60m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t4
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- COLUMNS 6 -->
\t\t\t\t\t\t\t\t<div class=\"item col-2\">
\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section-outer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"room-rent-section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rooms-pic-section\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"widht:100px;height:300px;\" src=\"zarzis/images/dji_0942_scaled.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bx-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b0 wt-title\">App jasmin
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"room-info-section text-black\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>\$50/night</span>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Size:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t55m²
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t2
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>View:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbalcony
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"room-detail.html\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t<span>FULL INFO
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- ROOMS  SLIDER END -->

\t\t\t\t<!-- OUR BLOG START -->
\t\t\t\t<div class=\"section-full p-t80 p-b50 bg-white\">

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container\">

\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t<div class=\"section-head text-left\">
\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Appartment\">Our Latest Appartment</h2>
\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- TITLE END -->

\t\t\t\t\t\t<!-- IMAGE CAROUSEL START -->
\t\t\t\t\t\t<div class=\"section-content\">


\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-post latest-blog-1 date-style-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-media wt-img-effect zoom-slow\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\"><img style=\" height:350px;\" src=\"zarzis/images/zeze.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>20 Mar 2019
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"post-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-author-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"zarzis/images/img_1103_scaled.jpg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBy</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Zarzis Holiday</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"post-comment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-comments text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">10 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Your first source for architecture, dsign and art news.</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusd veritatis quisquam laboriosam asperiores, tenetur, blanditiis,quaerat odit ex exercitationem pariatur.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"readmore-line\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"site-button-ink text-primary font-weight-900 \">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-post latest-blog-1 date-style-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-media wt-img-effect zoom-slow\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\"><img style=\" height:350px;\"src=\"zarzis/images/bbbb.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>20 Mar 2019
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"post-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-author-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img   src=\"zarzis/images/img_1103_scaled.jpg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBy</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Zarzis Holidays</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"post-comment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-comments text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">10 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Your first source for architecture, dsign and art news.</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"wt-post-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusd veritatis quisquam laboriosam asperiores, tenetur, blanditiis,quaerat odit ex exercitationem pariatur.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"readmore-line\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"site-button-ink text-primary font-weight-900 \">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- OUR BLOG END -->
\t\t\t\t 
\t\t\t                   <!-- YOUTUBE VIDEO WITH POPUP -->
                                    <div class=\"m-b30\">
                                        <!-- TITLE START -->
                                        <div class=\"section-head\">
                                            <h2 class=\" m-b5\">Video Youtube with popup</h2>
                                            <div class=\"wt-separator-outer\">
                                                <div class=\"wt-separator bg-primary\"></div>
                                            </div>
                                        </div>
                                        <!-- TITLE END -->                                        
                                        <div class=\"wt-box\">
\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"wt-thum-bx wt-img-overlay1 wt-img-effect zoom yt-thum-box\">
                                                <img src=\"zarzis/images/dji_0942_scaled.jpg\" alt=\"\">
                                                <div class=\"overlay-bx\">
                                                    <div class=\"overlay-icon\">
                                                        <a class=\"mfp-video\" href=\"https://www.youtube.com/watch?v=KdDKU0GNbAM\">
                                                            <i class=\"fa fa-play wt-icon-box-xs\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t 
            <!-- OUR SPECIALLIZATION START -->
            <div class=\"section-full bg-change-section overlay-wraper p-tb80\"   data-toggle=\"tab-hover\">
                <div class=\"overlay-main bg-black opacity-06\"></div>
                <div class=\"bg-changer\">
                    <div  class=\" section-bg active\" style=\"background-image:url(\"images/background/room.jpg\")\"></div>
                    <div  class=\"section-bg\" style=\"background-image:url(\"images/background/appartment.jpg\")\"></div>
                    <div  class=\"section-bg\" style=\"background-image:url(\"images/background/architecture.jpg\")\"></div> 
                    <div  class=\"section-bg\" style=\"background-image:url(\"images/background/interior.jpg\")\"></div> 
                </div>
                                          
                <div class=\"container\">
                    <!-- TITLE START -->
                    <div class=\"section-head text-left\">
                        <h2 class=\"m-b5 text-white\" data-title=\"Specialization\">Our Specialization</h2>
                        <div class=\"wt-separator-outer\">
                            <div class=\"wt-separator bg-primary\"></div>
                        </div>
                    </div>
                    <!-- TITLE END -->                                   
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"services-part-left \">
                            \t<div class=\"text-white\">
                                <h3 class=\" m-t0\">Discover a hotel that defines a new dimension of luxury.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris ferme ntum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                </div>
                                <div class=\"section-content\">
                                    <div class=\"row\">
                                                
                                        <div class=\"col-md-4 col-sm-4 col-xs-4 col-xs-100pc\">
                                            <div class=\"m-b30 wt-icon-box-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-primary m-b5 font-weight-800\"><span class=\"counter m-r5\">406</span><b>+</b></h2>                                            
                                                <h5 class=\"wt-tilte m-b0 text-white\">International Guests</h5>
                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-4 col-sm-4 col-xs-4 col-xs-100pc\">
                                            <div class=\"m-b30  wt-icon-box-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-primary m-b5 font-weight-800\"><span class=\"counter m-r5\">132</span><b>+</b></h2>                                                
                                                <h5 class=\"wt-tilte m-b0 text-white\">Five stars rating</h5>
                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-4 col-sm-4 col-xs-4 col-xs-100pc\">
                                            <div class=\"m-b30 wt-icon-box-wraper\">
                                                <h2 class=\"text-primary m-b5 font-weight-800\"><span class=\"counter m-r5\">207</span><b>+</b></h2> 
                                                <h5 class=\"wt-tilte m-b0 text-white\">Served Breakfast</h5>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"row no-col-gap\">
                                <div class=\"col-md-6 col-sm-6 col-xs-6 col-xs-100pc\">
                                    <div class=\"wt-icon-box-wraper p-tb20 center bdr-1 bdr-solid bdr-white  bgcall-block hover-box-effect\" >
                                        <div class=\"icon-md text-primary\">
                                            <span class=\"icon-cell text-white\"><i class=\"flaticon-hotel\"></i></span>
                                        </div>
                                        <div class=\"icon-content text-white\">
                                            <h4 class=\"wt-tilte m-b10\">Rooms</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-6 col-xs-100pc\">
                                    <div class=\"wt-icon-box-wraper p-tb20 center bdr-1 bdr-solid bdr-white  bgcall-block  hover-box-effect\" >
                                        <div class=\"icon-md text-primary\">
                                            <span class=\"icon-cell text-white\"><i class=\"flaticon-coffee-cup\"></i></span>
                                        </div>
                                        <div class=\"icon-content  text-white\">
                                            <h4 class=\"wt-tilte m-b10\">Restaurant</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-6 col-xs-100pc\">
                                    <div class=\"wt-icon-box-wraper p-tb20 center bdr-1 bdr-solid bdr-white  bgcall-block  hover-box-effect\">
                                        <div class=\"icon-md text-primary\">
                                            <span class=\"icon-cell text-white\"><i class=\"flaticon-cheers\"></i></span>
                                        </div>
                                        <div class=\"icon-content  text-white\">
                                            <h4 class=\"wt-tilte m-b10\">Luxury Bars</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6  col-sm-6 col-xs-6 col-xs-100pc\">
                                    <div class=\"wt-icon-box-wraper p-tb20 center bdr-1 bdr-solid bdr-white bgcall-block hover-box-effect\">
                                        <div class=\"icon-md text-primary\">
                                            <span class=\"icon-cell text-white\"><i class=\"flaticon-seats-at-the-hall\"></i></span>
                                        </div>
                                        <div class=\"icon-content  text-white\">
                                            <h4 class=\"wt-tilte m-b10\">Meeting Hall</h4>
                                        </div>
                                    </div>
                                </div>                                                                                
                            </div>                        
                        </div>
                    </div>                                     
                </div>
            </div>   
            <!-- OUR SPECIALLIZATION END -->

\t\t\t\t<!-- OUR SERVICES START -->
\t\t\t\t<div class=\"section-full p-tb80\">

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container\">
\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t<div class=\"section-head text-left\">
\t\t\t\t\t\t\t<h2 class=\"m-b5\" data-title=\"Services\">Our Services</h2>
\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- TITLE END -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-wifi v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Accès direct à la piscine</h4>
\t\t\t\t\t\t\t\t\t\t<p>La résidence dispose d'un accès direct et sécurisé par un tunnel à la piscine et la plage de l'hôtel.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-room-service v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Des restaurants à 3 minutes</h4>
\t\t\t\t\t\t\t\t\t\t<p> Des restaurants avec un large choix et des salons de thé chaleureux sont à 4 min de votre logement.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-smartphone v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Des balades régulièrement planifiés</h4>
\t\t\t\t\t\t\t\t\t\t<p>Des balades sur des quads motos, des carrosses à cheval, des voitures 4X4 et des balades en mer sont planifiées régulièrement.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-business-cards v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Téléviseur disponible</h4>
\t\t\t\t\t\t\t\t\t\t<p>Vous trouverez dans l’appartement un téléviseur branché sur plusieurs satellites.
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-calendar v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Location des voitures</h4>
\t\t\t\t\t\t\t\t\t\t<p>Des agences de location de voitures sont disponibles avec des prix raisonnables.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"wt-icon-box-wraper center bdr-1 bdr-gray-light bdr-solid m-b30 p-a20 hover-box-effect  v-icon-effect\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-md m-b20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cell\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-time-passing v-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"wt-tilte \">Place Parking</h4>
\t\t\t\t\t\t\t\t\t\t<p> Une place de stationnement est garantie pour votre véhicule.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn-half site-button button-lg m-b15 m-t50\">
\t\t\t\t\t\t\t\t<span>View All</span>
\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- OUR SERVICES END -->
    
            <!-- TESTIMONIALS SECTION START -->
            <div class=\"section-full p-t80 p-b80  overlay-wraper\" data-stellar-background-ratio=\"0.5\" style=\"background-image:url(images/background/bg-2.jpg);\">
            <div class=\"overlay-main opacity-05 bg-black\"></div>
 
                <div class=\"container\">
                    <div class=\"section-content\">
                    
                        <!-- TITLE START -->
                        <div class=\"section-head text-left\">
                            <h2 class=\"m-b5 text-white\" data-title=\"Clients\">Our Client Says</h2>
                            <div class=\"wt-separator-outer\">
                                <div class=\"wt-separator bg-primary\"></div>
                            </div>
                        </div>
                        <!-- TITLE END --> 
                    
                        <!-- TESTIMONIAL 4 START ON BACKGROUND -->   
                        <div class=\"section-content\">
                            <div class=\"testimonial-home owl-carousel  owl-btn-top-right\">
                                <div class=\"item\">
                                    <div class=\"testimonial-6\">
                                        <div class=\"testimonial-pic-block\"> 
                                            <div class=\"testimonial-pic\">
                                                <img src=\"sharan/images/testimonials_pic1.jpg\" width=\"132\" height=\"132\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"testimonial-text clearfix text-white\">
                                            <div class=\"testimonial-detail \">
                                                <h4 class=\"testimonial-name m-t0 m-b10\">Andi Smith</h4>
                                            </div>
                                            <div class=\"testimonial-paragraph text-black p-t5\">
                                                <p>“Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered us the most beautiful house great looks.</p>
                                            </div>
                                            <div class=\"testimonial-detail \">
                                            \t<span class=\"testimonial-position\">Newyork city</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"testimonial-6\">
                                        <div class=\"testimonial-pic-block\"> 
                                            <div class=\"testimonial-pic\">
<img src=\"sharan/images/testimonials/pic2.jpg\" width=\"132\" height=\"132\" alt=\"\">

                                            </div>
                                        </div>
                                        <div class=\"testimonial-text clearfix text-white\">
                                            <div class=\"testimonial-detail \">
                                                <h4 class=\"testimonial-name m-t0 m-b10\">Poul Anderson</h4>
                                            </div>
                                            <div class=\"testimonial-paragraph text-black p-t5\">
                                                <p>“Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered us the most beautiful house great looks.</p>
                                            </div>
                                            <div class=\"testimonial-detail \">
                                            \t<span class=\"testimonial-position\">Mexico city</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class=\"item\">
                                    <div class=\"testimonial-6\">
                                        <div class=\"testimonial-pic-block\"> 
                                            <div class=\"testimonial-pic\">
<img src=\"sharan/images/testimonials/pic3.jpg\" width=\"132\" height=\"132\" alt=\"\">

                                            </div>
                                        </div>
                                        <div class=\"testimonial-text clearfix text-white\">
                                            <div class=\"testimonial-detail \">
                                                <h4 class=\"testimonial-name m-t0 m-b10\">Kayra gray</h4>
                                            </div>
                                            <div class=\"testimonial-paragraph text-black p-t5\">
                                                <p>“Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered us the most beautiful house great looks.</p>
                                            </div>
                                            <div class=\"testimonial-detail \">
                                            \t<span class=\"testimonial-position\">Newyork city</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"testimonial-6\">
                                        <div class=\"testimonial-pic-block\"> 
                                            <div class=\"testimonial-pic\">
<img src=\"sharan/images/testimonials/pic4.jpg\" width=\"132\" height=\"132\" alt=\"\">

                                            </div>
                                        </div>
                                        <div class=\"testimonial-text clearfix text-white\">
                                            <div class=\"testimonial-detail \">
                                                <h4 class=\"testimonial-name m-t0 m-b10\">Anna Smith</h4>
                                            </div>
                                            <div class=\"testimonial-paragraph text-black p-t5\">
                                                <p>“Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered us the most beautiful house great looks.</p>
                                            </div>
                                            <div class=\"testimonial-detail \">
                                            \t<span class=\"testimonial-position\">Newyork city</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- TESTIMONIALS SECTION END --> 

\t\t\t\t<!-- OUR TEAM START -->
\t\t\t\t<div class=\"section-full p-t80 p-b80 bg-white\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container\">

\t\t\t\t\t\t<!-- TITLE START -->
\t\t\t\t\t\t<div class=\"section-head text-left\">
\t\t\t\t\t\t\t<h2 class=\"  m-b5\" data-title=\"Des adresses\">Des adresses</h2>
\t\t\t\t\t\t\t<div class=\"wt-separator-outer\">
\t\t\t\t\t\t\t\t<div class=\"wt-separator bg-primary\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- TITLE END -->

\t\t\t\t\t\t<!-- IMAGE CAROUSEL START -->
\t\t\t\t\t\t<div class=\"our-team-two p-lr15\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"wt-team-arc2\">

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/fatroucha.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-social-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"team-social-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-detail  text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t0\">Chez Fatroucha</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Restaurant</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"wt-team-arc2\">

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/base_nautique.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-social-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"team-social-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-detail  text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t0\">Base nautique
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Odyssée</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"wt-team-arc2\">

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-media\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"zarzis/images/aqua_parc.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-social-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"team-social-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"wt-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-detail  text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t0\">Aqua Parc Le pirate</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Centre de loisir
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- OUR TEAM END -->

\t\t\t</div>
\t\t\t<!-- CONTENT END -->

\t\t\t<!-- FOOTER START -->
\t\t\t<footer
\t\t\t\tclass=\"site-footer footer-large footer-dark\tfooter-wide\">

\t\t\t\t<!-- FOOTER BLOCKES START -->
\t\t\t\t<div class=\"footer-top overlay-wraper\">
\t\t\t\t\t<div class=\"overlay-main\"></div>
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"news-letter-footer\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"newsletter-f-left\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-uppercase m-t0 m-b10\">Subscribe to our newsletter!</h4>
\t\t\t\t\t\t\t\t\t\t<p>Never Miss Anything about us .
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"newsletter-f-right text-center\">
\t\t\t\t\t\t\t\t\t\t<form role=\"search\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"news-letter\" class=\"form-control\" placeholder=\"ENTER YOUR EMAIL\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-half site-button button-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Submit</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em></em>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"m-b10\">
\t\t\t\t\t\t\t<div class=\"wt-divider bg-gray-dark\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- ABOUT COMPANY -->
\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"widget widget_about\">
\t\t\t\t\t\t\t\t\t<!--<h4 class=\"widget-title\">About Company</h4>-->
\t\t\t\t\t\t\t\t\t<div class=\"logo-footer clearfix p-b15\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"zarzis/images/zarzis_logo.png\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"max-w400\">MAKE YOUR HOLIDAY BETTER .</p>

\t\t\t\t\t\t\t\t\t<ul class=\"social-icons social-tooltips-outer  wt-social-links\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltips\">Facebook</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-linkedin\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltips\">Linkedin</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-google-plus\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltips\">Google Plus</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fa fa-instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"social-tooltips\">Instagram</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"widget widget_services inline-links\">
\t\t\t\t\t\t\t\t\t<h4 class=\"widget-title\">Our location
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about-1.html\">zarzis ...</a></li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"widget widget_services inline-links\">
\t\t\t\t\t\t\t\t\t<h4 class=\"widget-title\">Useful links</h4>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about-1.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"post-gallery.html\">Reservation</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"post-gallery.html\">Gallery</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"project-detail.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"widget widget_services inline-links\">
\t\t\t\t\t\t\t\t\t<h4 class=\"widget-title\"></h4>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about-1.html\"></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"post-gallery.html\"></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"post-gallery.html\"></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"project-detail.html\"></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
 
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"widget widget_address_outer\">
                                <h4 class=\"widget-title\">Contact Us</h4>
                                <ul class=\"widget_address\">
                                    <li><i class=\"sl-icon-map text-primary\"></i> 92 Princess Road, parkvenue,Greater London, NW18JR, United Kingdom</li>
                                    <li><i class=\"sl-icon-envolope-letter text-primary\"></i>sharandemo@gmail.com</li>
                                    <li><i class=\"sl-icon-phone text-primary\"></i>(+0091) 912-3456-073</li>
                                    <li><i class=\"sl-icon-printer text-primary\"></i>(+0091) 912-3456-084</li>
                                </ul>
                           
                            </div>                                                  
                        </div>              
\t\t\t\t\t\t</div>
                </div>
            </div>
\t\t\t\t<!-- FOOTER COPYRIGHT -->
\t\t\t\t<div class=\"footer-bottom overlay-wraper\">
\t\t\t\t\t<div class=\"overlay-main\"></div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"wt-footer-bot-center\">
\t\t\t\t\t\t\t\t<p style=\"color: #ffffff\">© 2020. Tous droits réservés. ZARZIS  HOLIDAYS made with ❤ by
\t\t\t\t\t\t\t\t\t<a style=\"color: #878787\" href=\"https://www.octaplus-technology.com/\">
\t\t\t\t\t\t\t\t\t\tOcta+ technology
\t\t\t\t\t\t\t\t\t</a>.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<!-- FOOTER END -->


\t\t\t<!-- BUTTON TOP START -->
\t\t\t<button class=\"scroltop\">
\t\t\t\t<span class=\"fa fa-angle-up  relative\" id=\"btn-vibrate\"></span>
\t\t\t</button>


\t\t</div>

\t\t<!-- LOADING AREA START ===== -->
\t<!--\t<div class=\"loading-area\">
\t\t\t<div class=\"loading-box\"></div>
\t\t\t<div class=\"loading-pic\">
\t\t\t\t<div class=\"cssload-thecube\">
\t\t\t\t\t<div class=\"cssload-cube cssload-c1\"></div>
\t\t\t\t\t<div class=\"cssload-cube cssload-c2\"></div>
\t\t\t\t\t<div class=\"cssload-cube cssload-c4\"></div>
\t\t\t\t\t<div class=\"cssload-cube cssload-c3\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
-->

\t\t<!-- STYLE SWITCHER END ==== -->
\t</body>
{% endblock %}
", "home/index.html.twig", "/application/templates/home/index.html.twig");
    }
}
