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

/* base.html.twig */
class __TwigTemplate_9facf1c5f57c300932a26ed786beaad12751d8b79dac364f0baa62be3bedb4ab extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"keywords\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>
\t\t<meta name=\"robots\" content=\"\"/>
\t\t<meta
\t\tname=\"description\" content=\"\"/>
\t\t<link rel=\"stylesheet\" href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">


\t\t<!-- MOBILE SPECIFIC -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>
\t\t\t";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        // line 21
        echo "\t\t</title>
\t\t";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 75
        echo "
\t\t";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "
\t\t";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 126
        echo "\t</head>
</html></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "
\t\t\t<link rel=\"icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
\t\t\t<link
\t\t\trel=\"shortcut icon\" type=\"sharan/images/x-icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\"/>

\t\t\t<!-- BOOTSTRAP STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/bootstrap.min.css"), "html", null, true);
        echo "\">

\t\t\t<!-- BOOTSTRAP DATEPICKER STYLE SHEET -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/t-datepicker.min.css"), "html", null, true);
        echo "\">
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/t-datepicker-blue.css"), "html", null, true);
        echo "\">

\t\t\t<!-- FONTAWESOME STYLE SHEET -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t\t<!-- \t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/font-awesome.min.css"), "html", null, true);
        echo "\">-->

\t\t\t<!-- OWL CAROUSEL STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/owl.carousel.min.css"), "html", null, true);
        echo "\"> <!-- MAGNIFIC POPUP STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/magnific-popup.min.css"), "html", null, true);
        echo "\">
\t\t\t<!-- LOADER STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/loader.min.css"), "html", null, true);
        echo "\">
\t\t\t<!-- MAIN STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/style.css"), "html", null, true);
        echo "\">

\t\t\t<!-- THEME COLOR CHANGE STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" class=\"skin\" type=\"text/css\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/skin-1.css"), "html", null, true);
        echo "\">
\t\t\t<!-- SIDE SWITCHER STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/switcher.css"), "html", null, true);
        echo "\">
\t\t\t<!-- FLATICON STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/flaticon.min.css"), "html", null, true);
        echo "\">
\t\t\t<!-- REVOLUTION SLIDER CSS -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/settings.css"), "html", null, true);
        echo "\">
\t\t\t<!-- REVOLUTION NAVIGATION STYLE -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/css/navigation.css"), "html", null, true);
        echo "\">

\t\t\t<!-- GOOGLE FONTS -->
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900\" rel=\"stylesheet\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i\" rel=\"stylesheet\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=DM+Serif+Text:400,400i&display=swap&subset=latin-ext\" rel=\"stylesheet\">

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "
\t\t\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- JQUERY.MIN JS -->
\t\t\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- BOOTSTRAP.MIN JS -->

\t\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- MAGNIFIC-POPUP JS -->

\t\t\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- WAYPOINTS JS -->
\t\t\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/counterup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- COUNTERUP JS -->
\t\t\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/waypoints-sticky.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- COUNTERUP JS -->

\t\t\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- MASONRY  -->

\t\t\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- OWL  SLIDER  -->
\t\t\t<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/jquery.owl-filter.js"), "html", null, true);
        echo "\"></script>

\t\t\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/stellar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- PARALLAX BG IMAGE   -->


\t\t\t<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- CUSTOM FUCTIONS  -->

\t\t\t<!-- REVOLUTION JS FILES -->

\t\t\t<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
\t\t\t<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/revolution-plugin.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- REVOLUTION SLIDER SCRIPT FILES -->
\t\t\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/rev-script-1.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/t-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sharan/js/switcher.js"), "html", null, true);
        echo "\"></script>

\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  354 => 120,  350 => 119,  346 => 118,  340 => 115,  334 => 112,  330 => 111,  322 => 106,  315 => 102,  310 => 100,  305 => 98,  299 => 95,  293 => 92,  288 => 90,  283 => 88,  277 => 85,  271 => 82,  266 => 80,  263 => 79,  253 => 78,  235 => 76,  217 => 67,  211 => 64,  205 => 61,  199 => 58,  193 => 55,  186 => 51,  180 => 48,  174 => 45,  169 => 43,  162 => 39,  158 => 38,  152 => 35,  147 => 33,  141 => 30,  134 => 26,  129 => 24,  126 => 23,  116 => 22,  96 => 19,  84 => 126,  82 => 78,  79 => 77,  77 => 76,  74 => 75,  72 => 22,  69 => 21,  67 => 19,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"keywords\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>
\t\t<meta name=\"robots\" content=\"\"/>
\t\t<meta
\t\tname=\"description\" content=\"\"/>
\t\t<link rel=\"stylesheet\" href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">


\t\t<!-- MOBILE SPECIFIC -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}

\t\t\t<link rel=\"icon\" href=\"{{ asset('sharan/images/favicon.ico') }}\" type=\"image/x-icon\"/>
\t\t\t<link
\t\t\trel=\"shortcut icon\" type=\"sharan/images/x-icon\" href=\"{{ asset('images/favicon.png') }}\"/>

\t\t\t<!-- BOOTSTRAP STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/bootstrap.min.css') }}\">

\t\t\t<!-- BOOTSTRAP DATEPICKER STYLE SHEET -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/t-datepicker.min.css') }}\">
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/t-datepicker-blue.css') }}\">

\t\t\t<!-- FONTAWESOME STYLE SHEET -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/font-awesome/css/font-awesome.min.css') }}\">
\t\t\t<!-- \t<link rel=\"stylesheet\" href=\"{{ asset('sharan/css/font-awesome.min.css') }}\">-->

\t\t\t<!-- OWL CAROUSEL STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/owl.carousel.min.css')}}\"> <!-- MAGNIFIC POPUP STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/magnific-popup.min.css')}}\">
\t\t\t<!-- LOADER STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/loader.min.css')}}\">
\t\t\t<!-- MAIN STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/style.css')}}\">

\t\t\t<!-- THEME COLOR CHANGE STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" class=\"skin\" type=\"text/css\" href=\"{{ asset('sharan/css/skin-1.css')}}\">
\t\t\t<!-- SIDE SWITCHER STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/switcher.css')}}\">
\t\t\t<!-- FLATICON STYLE SHEET -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/flaticon.min.css')}}\">
\t\t\t<!-- REVOLUTION SLIDER CSS -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/settings.css')}}\">
\t\t\t<!-- REVOLUTION NAVIGATION STYLE -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('sharan/css/navigation.css')}}\">

\t\t\t<!-- GOOGLE FONTS -->
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900\" rel=\"stylesheet\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i\" rel=\"stylesheet\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=DM+Serif+Text:400,400i&display=swap&subset=latin-ext\" rel=\"stylesheet\">

\t\t{% endblock %}

\t\t{% block body %}{% endblock %}

\t\t{% block javascripts %}

\t\t\t<script src=\"{{asset('sharan/js/jquery-1.12.4.min.js') }}\"></script>
\t\t\t<!-- JQUERY.MIN JS -->
\t\t\t<script src=\"{{asset('sharan/js/bootstrap.min.js') }}\"></script>
\t\t\t<!-- BOOTSTRAP.MIN JS -->

\t\t\t<script src=\"{{asset('sharan/js/magnific-popup.min.js') }}\"></script>
\t\t\t<!-- MAGNIFIC-POPUP JS -->

\t\t\t<script src=\"{{asset('sharan/js/waypoints.min.js') }}\"></script>
\t\t\t<!-- WAYPOINTS JS -->
\t\t\t<script src=\"{{asset('sharan/js/counterup.min.js') }}\"></script>
\t\t\t<!-- COUNTERUP JS -->
\t\t\t<script src=\"{{asset('sharan/js/waypoints-sticky.min.js') }}\"></script>
\t\t\t<!-- COUNTERUP JS -->

\t\t\t<script src=\"{{asset('sharan/js/isotope.pkgd.min.js') }}\"></script>
\t\t\t<!-- MASONRY  -->

\t\t\t<script src=\"{{asset('sharan/js/owl.carousel.min.js') }}\"></script>
\t\t\t<!-- OWL  SLIDER  -->
\t\t\t<script src=\"{{asset('sharan/js/jquery.owl-filter.js') }}\"></script>

\t\t\t<script src=\"{{asset('sharan/js/stellar.min.js') }}\"></script>
\t\t\t<!-- PARALLAX BG IMAGE   -->


\t\t\t<script src=\"{{asset('sharan/js/custom.js') }}\"></script>
\t\t\t<!-- CUSTOM FUCTIONS  -->

\t\t\t<!-- REVOLUTION JS FILES -->

\t\t\t<script src=\"{{asset('sharan/js/jquery.themepunch.tools.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('sharan/js/jquery.themepunch.revolution.min.js')}}\"></script>

\t\t\t<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
\t\t\t<script src=\"{{asset('sharan/js/revolution-plugin.js')}}\"></script>

\t\t\t<!-- REVOLUTION SLIDER SCRIPT FILES -->
\t\t\t<script src=\"{{asset('sharan/js/rev-script-1.js')}}\"></script>
\t\t\t<script src=\"{{asset('sharan/js/t-datepicker.min.js') }}\"></script>
\t\t\t<script src=\"{{asset('sharan/js/switcher.js') }}\"></script>

\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
\t\t{% endblock %}
\t</head>
</html></body></html>
", "base.html.twig", "/application/templates/base.html.twig");
    }
}
