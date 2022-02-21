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

/* tarif/tarif.html.twig */
class __TwigTemplate_2556449436904b17b3ab54671fdc429676f457fdaa03626e6ebba369e506301a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/tarif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/tarif.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tarif/tarif.html.twig", 1);
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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assets/css/tarif.css"), "html", null, true);
        echo "\"/>
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
        echo " <div class=\"demo10\">
            <div class=\"container\">
                <h4 class=\"py-4 text-center\">Tableau Tarif</h4>
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"pricingTable10\">
                            <div class=\"pricingTable-header\">
                                <h3 class=\"heading\">Standard</h3>
                                <span class=\"price-value\">
                                    <span class=\"currency\">fcfa</span> 7000
                                    <span class=\"month\">/mo</span>
                                </span>
                            </div>
                            <div class=\"pricing-content\">
                                <ul>
                                    <li>Créer Evenement (1 Evenement)</li>
                                    <li>Génerer Billet</li>
                                    <li>Telecgarger Billet</li>
                                    <li>Gérer compte personnel</li>
                                    <li>Payement Physique</li>
                                </ul>
                                <a href=\"#\" class=\"read\">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"pricingTable10\">
                            <div class=\"pricingTable-header\">
                                <h3 class=\"heading\">Business</h3>
                                <span class=\"price-value\">
                                    <span class=\"currency\">fcfa</span>
                                    <span class=\"currency-fcfa\">20000</span>
                                    <span class=\"month\">/mo</span>
                                </span>
                            </div>
                            <div class=\"pricing-content\">
                                <ul>
                                    <li>Créer Evenement</li>
                                    <li>Génerer Billet</li>
                                    <li>Telecgarger Billet</li>
                                    <li>Gérer compte personnel</li>
                                    <li>Scan Billet</li>
                                </ul>
                                <a href=\"#\" class=\"read\">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"pricingTable10\">
                            <div class=\"pricingTable-header\">
                                <h3 class=\"heading\">Premium</h3>
                                <span class=\"price-value\">
                                    <span class=\"currency\">fcfa</span> 30000
                                    <span class=\"month\">/mo</span>
                                </span>
                            </div>
                            <div class=\"pricing-content\">
                                <ul>
                                    <li>Créer Evenement</li>
                                    <li>Génerer Billet</li>
                                    <li>Telecgarger Billet</li>
                                    <li>Gérer compte personnel</li>
                                    <li>Scan Billet</li>
                                </ul>
                                <a href=\"#\" class=\"read\">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"pricingTable10\">
                            <div class=\"pricingTable-header\">
                                <h3 class=\"heading\">Extra</h3>
                                <span class=\"price-value\">
                                    <span class=\"currency\">fcfa</span> 40000
                                    <span class=\"month\">/mo</span>
                                </span>
                            </div>
                            <div class=\"pricing-content\">
                                <ul>
                                    <li>Créer Evenement</li>
                                    <li>Génerer Billet</li>
                                    <li>Telecgarger Billet</li>
                                    <li>Gérer compte personnel</li>
                                    <li>Paiment en ligne</li>
                                </ul>
                                <a href=\"#\" class=\"read\">sign up</a>
                            </div>
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
        return "tarif/tarif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 7,  82 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('base.html.twig') %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/assets/css/tarif.css') }}\"/>
{% endblock %}
{% block body %}
 <div class=\"demo10\">
            <div class=\"container\">
                <h4 class=\"py-4 text-center\">Tableau Tarif</h4>
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"pricingTable10\">
                            <div class=\"pricingTable-header\">
                                <h3 class=\"heading\">Standard</h3>
                                <span class=\"price-value\">
                                    <span class=\"currency\">fcfa</span> 7000
                                    <span class=\"month\">/mo</span>
                                </span>
                            </div>
                            <div class=\"pricing-content\">
                                <ul>
                                    <li>Créer Evenement (1 Evenement)</li>
                                    <li>Génerer Billet</li>
                                    <li>Telecgarger Billet</li>
                                    <li>Gérer compte personnel</li>
                                    <li>Payement Physique</li>
                                </ul>
                                <a href=\"#\" class=\"read\">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"pricingTable10\">
                            <div class=\"pricingTable-header\">
                                <h3 class=\"heading\">Business</h3>
                                <span class=\"price-value\">
                                    <span class=\"currency\">fcfa</span>
                                    <span class=\"currency-fcfa\">20000</span>
                                    <span class=\"month\">/mo</span>
                                </span>
                            </div>
                            <div class=\"pricing-content\">
                                <ul>
                                    <li>Créer Evenement</li>
                                    <li>Génerer Billet</li>
                                    <li>Telecgarger Billet</li>
                                    <li>Gérer compte personnel</li>
                                    <li>Scan Billet</li>
                                </ul>
                                <a href=\"#\" class=\"read\">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"pricingTable10\">
                            <div class=\"pricingTable-header\">
                                <h3 class=\"heading\">Premium</h3>
                                <span class=\"price-value\">
                                    <span class=\"currency\">fcfa</span> 30000
                                    <span class=\"month\">/mo</span>
                                </span>
                            </div>
                            <div class=\"pricing-content\">
                                <ul>
                                    <li>Créer Evenement</li>
                                    <li>Génerer Billet</li>
                                    <li>Telecgarger Billet</li>
                                    <li>Gérer compte personnel</li>
                                    <li>Scan Billet</li>
                                </ul>
                                <a href=\"#\" class=\"read\">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"pricingTable10\">
                            <div class=\"pricingTable-header\">
                                <h3 class=\"heading\">Extra</h3>
                                <span class=\"price-value\">
                                    <span class=\"currency\">fcfa</span> 40000
                                    <span class=\"month\">/mo</span>
                                </span>
                            </div>
                            <div class=\"pricing-content\">
                                <ul>
                                    <li>Créer Evenement</li>
                                    <li>Génerer Billet</li>
                                    <li>Telecgarger Billet</li>
                                    <li>Gérer compte personnel</li>
                                    <li>Paiment en ligne</li>
                                </ul>
                                <a href=\"#\" class=\"read\">sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "tarif/tarif.html.twig", "/home/laurel/dev/symfony/genBilletQrCode/templates/tarif/tarif.html.twig");
    }
}
