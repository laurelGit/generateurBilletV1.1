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

/* client/scanResults.html.twig */
class __TwigTemplate_660d29069cc956ca42bd2af4b84c391192ab96b075510dcbb94411582be86abb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/scanResults.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/scanResults.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/scanResults.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/util.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"bg-contact2\">
\t\t<div class=\"container-contact2\">
\t\t\t<div
\t\t\t\tclass=\"wrap-contact2\">
\t\t\t\t";
        // line 17
        echo "
\t\t\t\t<center>
\t\t\t\t\t<h1 style=\"font-weight: bold\">Resultats du scan</h1>
\t\t\t\t</center><br>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tNom:
\t\t\t\t\t\t<h4>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tPrenom:
\t\t\t\t\t\t<h4>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tAdresse mail:
\t\t\t\t\t\t<h4>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tNuméro de téléphone:
\t\t\t\t\t\t<h4>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 42, $this->source); })()), "contact", [], "any", false, false, false, 42), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tNuméro de table:
\t\t\t\t\t\t<h4>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 48, $this->source); })()), "numtable", [], "any", false, false, false, 48), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 52
        if ((0 === twig_compare((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 52, $this->source); })()), "Non Payer"))) {
            // line 53
            echo "\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t";
            // line 54
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form');
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t\t\t<span class=\"contact2-form-title\">
\t\t\t\t\t\t\t<h1>";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            // line 60
            if ((0 === twig_compare((isset($context["verifier"]) || array_key_exists("verifier", $context) ? $context["verifier"] : (function () { throw new RuntimeError('Variable "verifier" does not exist.', 60, $this->source); })()), "Non Verifier"))) {
                // line 61
                echo "\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t";
                // line 62
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formv"]) || array_key_exists("formv", $context) ? $context["formv"] : (function () { throw new RuntimeError('Variable "formv" does not exist.', 62, $this->source); })()), 'form');
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t\t<span class=\"contact2-form-title\">
\t\t\t\t\t\t\t\t<h1>";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["verifier"]) || array_key_exists("verifier", $context) ? $context["verifier"] : (function () { throw new RuntimeError('Variable "verifier" does not exist.', 66, $this->source); })()), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "client/scanResults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 71,  195 => 69,  189 => 66,  186 => 65,  180 => 62,  177 => 61,  175 => 60,  170 => 58,  167 => 57,  161 => 54,  158 => 53,  156 => 52,  149 => 48,  140 => 42,  131 => 36,  122 => 30,  113 => 24,  104 => 17,  98 => 10,  88 => 9,  76 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/main.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/util.css') }}\">
{% endblock %}

{% block body %}
\t<div class=\"bg-contact2\">
\t\t<div class=\"container-contact2\">
\t\t\t<div
\t\t\t\tclass=\"wrap-contact2\">
\t\t\t\t{# <span class=\"contact2-form-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResultats du scan
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span> #}

\t\t\t\t<center>
\t\t\t\t\t<h1 style=\"font-weight: bold\">Resultats du scan</h1>
\t\t\t\t</center><br>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tNom:
\t\t\t\t\t\t<h4>{{ client.nom }}</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tPrenom:
\t\t\t\t\t\t<h4>{{ client.prenom }}</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tAdresse mail:
\t\t\t\t\t\t<h4>{{ client.email }}</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tNuméro de téléphone:
\t\t\t\t\t\t<h4>{{ client.contact }}</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\tNuméro de table:
\t\t\t\t\t\t<h4>{{ client.numtable }}</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{% if status == \"Non Payer\" %}
\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t{{ form(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span class=\"contact2-form-title\">
\t\t\t\t\t\t\t<h1>{{ status }}</h1>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t{% if verifier == \"Non Verifier\" %}
\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t{{ form(formv) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<span class=\"contact2-form-title\">
\t\t\t\t\t\t\t\t<h1>{{ verifier }}</h1>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endblock %}
", "client/scanResults.html.twig", "/home/laurel/dev/symfony/genBilletQrCode/templates/client/scanResults.html.twig");
    }
}
