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

/* utilisateur/inscription.html.twig */
class __TwigTemplate_65bc8bf5af19160d2555810f55cea92fab8f89f2fbd8f367f86b29b398bdc027 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/inscription.html.twig", 1);
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

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "

\t<div class=\"bg-contact2\">
\t\t<div class=\"container-contact2\">
\t\t\t<div class=\"wrap-contact2\">
\t\t\t\t<span class=\"contact2-form-title\">
\t\t\t\t\tAjouter Utilisateur
\t\t\t\t</span>
\t\t\t\t";
        // line 20
        echo "\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">

\t\t\t\t\t\t";
        // line 24
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t";
        // line 30
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t";
        // line 35
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t";
        // line 41
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t";
        // line 46
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t";
        // line 51
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"container-contact2-form-btn\">
\t\t\t\t\t<div class=\"wrap-contact2-form-btn\">
\t\t\t\t\t\t<div class=\"contact2-form-bgbtn\"></div>
\t\t\t\t\t\t<button class=\"contact2-form-btn\">
\t\t\t\t\t\t\tEnregistrer
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 62
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 62,  145 => 51,  139 => 46,  133 => 41,  126 => 35,  120 => 30,  113 => 24,  108 => 20,  98 => 11,  88 => 10,  76 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
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
\t\t\t<div class=\"wrap-contact2\">
\t\t\t\t<span class=\"contact2-form-title\">
\t\t\t\t\tAjouter Utilisateur
\t\t\t\t</span>
\t\t\t\t{# {{ form_start(form) }} #}
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">
\t\t\t\t\t<div class=\"form-group row\">

\t\t\t\t\t\t{# {{ form_row(form.nom) }} #}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t{# {{ form_row(form.prenom) }} #}

\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t{# {{ form_row(form.email) }} #}

\t\t\t\t</div>

\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t{# {{ form_row(form.contact) }} #}

\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t{# {{ form_row(form.username) }} #}

\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-input2 validate-input\" data-validate=\"Name is required\">

\t\t\t\t\t{# {{ form_row(form.password) }} #}

\t\t\t\t</div>
\t\t\t\t<div class=\"container-contact2-form-btn\">
\t\t\t\t\t<div class=\"wrap-contact2-form-btn\">
\t\t\t\t\t\t<div class=\"contact2-form-bgbtn\"></div>
\t\t\t\t\t\t<button class=\"contact2-form-btn\">
\t\t\t\t\t\t\tEnregistrer
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# {{ form_end(form) }} #}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "utilisateur/inscription.html.twig", "/home/laurel/dev/symfony/genBilletQrCode/templates/utilisateur/inscription.html.twig");
    }
}
