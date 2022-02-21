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

/* client/acceuil.html.twig */
class __TwigTemplate_b49d0d42775bf695f897977be704aee7f92f13d318a5cab00c0f138d17cbd056 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/acceuil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/acceuil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/acceuil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/util.css"), "html", null, true);
        echo "\"> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

<div class=\"bg-contact2\">
    <div class=\"container-contact2\">
        <div class=\"wrap-contact2\">
            <div class=\"container-contact2-form-btn\">
                <div class=\"wrap-contact2-form-btn\">
                    <div class=\"contact2-form-bgbtn\"></div>
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.creerClient");
        echo "\">
                        <button class=\"contact2-form-btn\">Enregistrer un billet</button>
                    </a>
                </div>
            </div>
            <div class=\"container-contact2-form-btn\">
                <div class=\"wrap-contact2-form-btn\">
                    <div class=\"contact2-form-bgbtn\"></div>
                    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.scan_decoder");
        echo "\">
                        <button class=\"contact2-form-btn\">Scanner un billet</button>
                    </a>
                </div>
            </div>
            <div class=\"container-contact2-form-btn\">
                <div class=\"wrap-contact2-form-btn\">
                    <div class=\"contact2-form-bgbtn\"></div>
                    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.dashboard_mixte");
        echo "\">
                        <button class=\"contact2-form-btn\">DashBoard - Admin</button>
                    </a>
                </div>
            </div>
            <div class=\"container-contact2-form-btn\">
                <div class=\"wrap-contact2-form-btn\">
                    <div class=\"contact2-form-bgbtn\"></div>
                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.dashboard_utilisateur");
        echo "\">
                        <button class=\"contact2-form-btn\">Historique - Admin</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "client/acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  127 => 29,  116 => 21,  105 => 13,  95 => 5,  75 => 4,  71 => 3,  68 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/main.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/util.css') }}\"> {% endblock %} {% block body %}


<div class=\"bg-contact2\">
    <div class=\"container-contact2\">
        <div class=\"wrap-contact2\">
            <div class=\"container-contact2-form-btn\">
                <div class=\"wrap-contact2-form-btn\">
                    <div class=\"contact2-form-bgbtn\"></div>
                    <a href=\"{{ path('client.creerClient') }}\">
                        <button class=\"contact2-form-btn\">Enregistrer un billet</button>
                    </a>
                </div>
            </div>
            <div class=\"container-contact2-form-btn\">
                <div class=\"wrap-contact2-form-btn\">
                    <div class=\"contact2-form-bgbtn\"></div>
                    <a href=\"{{ path('client.scan_decoder') }}\">
                        <button class=\"contact2-form-btn\">Scanner un billet</button>
                    </a>
                </div>
            </div>
            <div class=\"container-contact2-form-btn\">
                <div class=\"wrap-contact2-form-btn\">
                    <div class=\"contact2-form-bgbtn\"></div>
                    <a href=\"{{ path('client.dashboard_mixte') }}\">
                        <button class=\"contact2-form-btn\">DashBoard - Admin</button>
                    </a>
                </div>
            </div>
            <div class=\"container-contact2-form-btn\">
                <div class=\"wrap-contact2-form-btn\">
                    <div class=\"contact2-form-bgbtn\"></div>
                    <a href=\"{{ path('client.dashboard_utilisateur') }}\">
                        <button class=\"contact2-form-btn\">Historique - Admin</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "client/acceuil.html.twig", "/home/laurel/dev/symfony/genBilletQrCode/templates/client/acceuil.html.twig");
    }
}
