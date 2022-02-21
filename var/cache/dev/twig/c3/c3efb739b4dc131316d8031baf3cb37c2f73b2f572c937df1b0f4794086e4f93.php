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
class __TwigTemplate_cbbf386f33f13da0dc7a29a0a98421c911c8856ee3a651f9e373c5dab549ad9c extends Template
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
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Outil de vente et génération de billet électronique\">
\t\t<title>
\t\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo/logo_ada.png"), "html", null, true);
        echo "\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/css/bootstrap.min.css\" integrity=\"sha512-SCpMC7NhtrwHpzwKlE1l6ks0rS+GbMJJpoQw/A742VaxdGcQKqVD8F/y/m9WLOfIPppy7mWIs/kS0bKgSI0Bfw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t";
        // line 16
        echo "\t\t

\t\t<script type=\"text/javascript\" src=\"https://rawgit.com/schmich/instascan-builds/master/instascan.min.js\"></script>
\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
  \t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
\t\t
\t\t";
        // line 23
        echo "
\t</head>

\t<body>
\t\t<style>
\t\t\t.fa-1x {
\t\t\t\tfont-size: 1.5rem;
\t\t\t}

\t\t\t.navbar-toggler.toggler-example {
\t\t\t\tcursor: pointer;
\t\t\t}

\t\t\t.dark-blue-text {
\t\t\t\tcolor: #0A38F5;
\t\t\t}

\t\t\t.dark-pink-text {
\t\t\t\tcolor: #AC003A;
\t\t\t}

\t\t\t.dark-amber-text {
\t\t\t\tcolor: #a19993;
\t\t\t}

\t\t\t.dark-teal-text {
\t\t\t\tcolor: #004d40;
\t\t\t}
\t\t</style>
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" id=\"lit\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">GenerateurBillet</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item\" active>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Accueil
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.tarif");
        echo "\">Nos Tarrif</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Enregistrement</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Connexion</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Menu p</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Deconnexion</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.list_images");
        echo "\">Liste Billet Généré</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.dashboard_utilisateur");
        echo "\">Historique - Admin</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.dashboard_mixte");
        echo "\">Dashboard - Admin</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.scan_decoder");
        echo "\">Scanner un billet</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.creerClient");
        echo "\">Enregistrer un billet</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Creer Utilisateur</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "

\t\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>


\t\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23581568-13\"></script>
\t\t<script>
\t\t\twindow.dataLayer = window.dataLayer || [];

function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-23581568-13');
\t\t</script>
\t</body>

\t";
        // line 122
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 125
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "\t

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Générateur de Billet d'Acerfi Dance Academy
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
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

    // line 122
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 123
        echo "\t\t\t";
        // line 124
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "\t\t\t";
        // line 127
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 127,  310 => 126,  300 => 125,  290 => 124,  288 => 123,  278 => 122,  260 => 96,  240 => 9,  227 => 128,  224 => 125,  222 => 122,  203 => 106,  198 => 104,  193 => 102,  189 => 101,  184 => 99,  180 => 97,  178 => 96,  167 => 88,  163 => 87,  159 => 86,  155 => 85,  151 => 84,  147 => 83,  143 => 82,  125 => 67,  109 => 54,  76 => 23,  68 => 16,  62 => 12,  59 => 11,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Outil de vente et génération de billet électronique\">
\t\t<title>
\t\t\t{% block title %}Générateur de Billet d'Acerfi Dance Academy
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/logo/logo_ada.png')}}\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/css/bootstrap.min.css\" integrity=\"sha512-SCpMC7NhtrwHpzwKlE1l6ks0rS+GbMJJpoQw/A742VaxdGcQKqVD8F/y/m9WLOfIPppy7mWIs/kS0bKgSI0Bfw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t{# Run `composer require symfony/webpack-encore-bundle` and uncomment the following Encore helpers to start using Symfony UX #}
\t\t

\t\t<script type=\"text/javascript\" src=\"https://rawgit.com/schmich/instascan-builds/master/instascan.min.js\"></script>
\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
  \t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
\t\t
\t\t{# <script type=\"text/javascript\" src=\"{{ asset('assets/qr/instascan.min.js') }}\"></script> #}

\t</head>

\t<body>
\t\t<style>
\t\t\t.fa-1x {
\t\t\t\tfont-size: 1.5rem;
\t\t\t}

\t\t\t.navbar-toggler.toggler-example {
\t\t\t\tcursor: pointer;
\t\t\t}

\t\t\t.dark-blue-text {
\t\t\t\tcolor: #0A38F5;
\t\t\t}

\t\t\t.dark-pink-text {
\t\t\t\tcolor: #AC003A;
\t\t\t}

\t\t\t.dark-amber-text {
\t\t\t\tcolor: #a19993;
\t\t\t}

\t\t\t.dark-teal-text {
\t\t\t\tcolor: #004d40;
\t\t\t}
\t\t</style>
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" id=\"lit\" href=\"{{ path('home') }}\">GenerateurBillet</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item\" active>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Accueil
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('client.tarif') }}\">Nos Tarrif</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Enregistrement</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Connexion</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Menu p</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Deconnexion</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('client.list_images') }}\">Liste Billet Généré</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('client.dashboard_utilisateur') }}\">Historique - Admin</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('client.dashboard_mixte') }}\">Dashboard - Admin</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('client.scan_decoder') }}\">Scanner un billet</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('client.creerClient') }}\">Enregistrer un billet</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('inscription') }}\">Creer Utilisateur</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t{% block body %}{% endblock %}


\t\t<script src=\"{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset('assets/vendor/bootstrap/js/popper.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset('assets/vendor/select2/select2.min.js') }}\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset('assets/js/main.js') }}\"></script>


\t\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23581568-13\"></script>
\t\t<script>
\t\t\twindow.dataLayer = window.dataLayer || [];

function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-23581568-13');
\t\t</script>
\t</body>

\t{% block stylesheets %}
\t\t\t{# {{ encore_entry_link_tags('app') }} #}
\t{% endblock %}
\t{% block javascripts %}
\t\t\t{# {{ encore_entry_script_tags('app')}} #}
\t{% endblock %}
\t

</html>
", "base.html.twig", "/home/laurel/dev/symfony/genBilletQrCode/templates/base.html.twig");
    }
}
