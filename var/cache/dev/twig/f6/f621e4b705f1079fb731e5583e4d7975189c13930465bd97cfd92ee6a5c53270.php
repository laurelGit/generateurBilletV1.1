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
class __TwigTemplate_f3fa857563c07fe3ad547366f59d669d8d4e1da1c9c7c5bffcf6bf22a27e2e96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assets1/css/main.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"wrapper\">
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"icon brands fa-twitter\" style=\"width: 50px; height: 50px\">
\t\t\t\t\t<span class=\"label\">Twitter</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<style>
\t\t\t#header h1 {
    \t\t\tfont-size: 2.5em;
    \t\t\tfont-weight: 900;
    \t\t\tletter-spacing: -0.035em;
    \t\t\tline-height: 1em;
\t\t\t}
\t\t\t#header h2 {
    \t\t\tfont-size: 2em;
    \t\t\tfont-weight: 900;
    \t\t\tletter-spacing: -0.035em;
    \t\t\tline-height: 1em;
\t\t\t}

\t\t\t@media screen and (max-width: 736px) {
\t\t\t\t#header h2 {
        \t\t\tfont-size: 1em;
    \t\t\t}
\t\t\t\t#header h1 {
        \t\t\tfont-size: 2.0em;
    \t\t\t}
\t\t\t}
\t\t</style>
\t\t<div id=\"bg\"></div>
\t\t<div id=\"overlay\"></div>
\t\t<div
\t\t\tid=\"main\">

\t\t\t<!-- Header -->
\t\t\t<header id=\"header\">
\t\t\t\t<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo/logo_ada2.png"), "html", null, true);
        echo "\" style=\"width: 200px; height: 200px;\">
\t\t\t\t<h3>Bienvenu !</h3>
\t\t\t\t<h1>Générateur de Billet d'Acerfi Dance Academy</h1>
\t\t\t\t<p> </p>
\t\t\t\t<h2>Evènement en cours : <a href=\"https://dance.acerfi.net/ada-champions-kiz\">ADA Champion's KIZ</a></h2>
\t\t\t\t<p>Grande compétition de danse organisée à l'occasion de l'anniversaire de la prestigieuse academie de danse d'ACERFI</p>
\t\t\t\t<nav>
\t\t\t\t\t
\t\t\t\t\t<div class=\"container-contact2-form-btn\">
\t\t\t\t\t\t<div class=\"wrap-contact2-form-btn\">
\t\t\t\t\t\t\t<div class=\"contact2-form-bgbtn\"></div>
\t\t\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
\t\t\t\t\t\t\t\t<button class=\"contact2-form-btn\">Connexion</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t</div>
\t</div>
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
        return array (  146 => 58,  132 => 47,  92 => 9,  82 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('base.html.twig') %}


{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/assets1/css/main.css') }}\"/>
{% endblock %}

{% block body %}
\t<div id=\"wrapper\">
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"icon brands fa-twitter\" style=\"width: 50px; height: 50px\">
\t\t\t\t\t<span class=\"label\">Twitter</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<style>
\t\t\t#header h1 {
    \t\t\tfont-size: 2.5em;
    \t\t\tfont-weight: 900;
    \t\t\tletter-spacing: -0.035em;
    \t\t\tline-height: 1em;
\t\t\t}
\t\t\t#header h2 {
    \t\t\tfont-size: 2em;
    \t\t\tfont-weight: 900;
    \t\t\tletter-spacing: -0.035em;
    \t\t\tline-height: 1em;
\t\t\t}

\t\t\t@media screen and (max-width: 736px) {
\t\t\t\t#header h2 {
        \t\t\tfont-size: 1em;
    \t\t\t}
\t\t\t\t#header h1 {
        \t\t\tfont-size: 2.0em;
    \t\t\t}
\t\t\t}
\t\t</style>
\t\t<div id=\"bg\"></div>
\t\t<div id=\"overlay\"></div>
\t\t<div
\t\t\tid=\"main\">

\t\t\t<!-- Header -->
\t\t\t<header id=\"header\">
\t\t\t\t<img src=\"{{ asset('assets/logo/logo_ada2.png') }}\" style=\"width: 200px; height: 200px;\">
\t\t\t\t<h3>Bienvenu !</h3>
\t\t\t\t<h1>Générateur de Billet d'Acerfi Dance Academy</h1>
\t\t\t\t<p> </p>
\t\t\t\t<h2>Evènement en cours : <a href=\"https://dance.acerfi.net/ada-champions-kiz\">ADA Champion's KIZ</a></h2>
\t\t\t\t<p>Grande compétition de danse organisée à l'occasion de l'anniversaire de la prestigieuse academie de danse d'ACERFI</p>
\t\t\t\t<nav>
\t\t\t\t\t
\t\t\t\t\t<div class=\"container-contact2-form-btn\">
\t\t\t\t\t\t<div class=\"wrap-contact2-form-btn\">
\t\t\t\t\t\t\t<div class=\"contact2-form-bgbtn\"></div>
\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">
\t\t\t\t\t\t\t\t<button class=\"contact2-form-btn\">Connexion</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t</div>
\t</div>
{% endblock %}
", "home/index.html.twig", "/home/laurel/dev/symfony/genBilletQrCode/templates/home/index.html.twig");
    }
}
