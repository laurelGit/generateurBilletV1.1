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

/* admin/details.html.twig */
class __TwigTemplate_3bed227aca32db82afdc18f000932758e2440ee562486ef88cd156856b1788f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/details.html.twig", 1);
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
            <div class=\"table-responsive\">
                ";
        // line 11
        if ((isset($context["detailsCaisse"]) || array_key_exists("detailsCaisse", $context) ? $context["detailsCaisse"] : (function () { throw new RuntimeError('Variable "detailsCaisse" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "                    <table class=\"table\">
                    <caption>Liste des Ventes caisse</caption>
                    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SearchController::searchBar"));
            // line 16
            echo "
                    <thead>
                        <h2>Details caisse pour Utilisateur : ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "</h2>
                        <h3>Nombre de billet en caisse : ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["lenCaisse"]) || array_key_exists("lenCaisse", $context) ? $context["lenCaisse"] : (function () { throw new RuntimeError('Variable "lenCaisse" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "</h3>
                        <tr>
                            <th scope=\"col\">Nom(s)</th>
                            <th scope=\"col\">Prenom(s)</th>
                            <th scope=\"col\">Email</th>
                            <th scope=\"col\">Contact</th>
                            <th scope=\"col\">Categorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["detailsCaisse"]) || array_key_exists("detailsCaisse", $context) ? $context["detailsCaisse"] : (function () { throw new RuntimeError('Variable "detailsCaisse" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 30
                echo "                        
                            <tr>
                                <th scope=\"row\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 32), "html", null, true);
                echo "</th>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "contact", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "categorie", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    </tbody>
                </table>
                ";
        } else {
            // line 41
            echo "                    <h2>Aucune donnee caisse</h2>
                ";
        }
        // line 43
        echo "                

                ";
        // line 45
        if ((isset($context["detailsVente"]) || array_key_exists("detailsVente", $context) ? $context["detailsVente"] : (function () { throw new RuntimeError('Variable "detailsVente" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                <table class=\"table\">
                    <caption>Liste des Ventes</caption>
                    <thead>
                        <h2>Details vente pour Utilisateur : ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "</h2>
                        <h3>Nombre de billet en vendu : ";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["lenVente"]) || array_key_exists("lenVente", $context) ? $context["lenVente"] : (function () { throw new RuntimeError('Variable "lenVente" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "</h3>
                        <tr>
                            <th scope=\"col\">Nom(s)</th>
                            <th scope=\"col\">Prenom(s)</th>
                            <th scope=\"col\">Email</th>
                            <th scope=\"col\">Contact</th>
                            <th scope=\"col\">Categorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["detailsVente"]) || array_key_exists("detailsVente", $context) ? $context["detailsVente"] : (function () { throw new RuntimeError('Variable "detailsVente" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 61
                echo "                        
                            <tr>
                                <th scope=\"row\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 63), "html", null, true);
                echo "</th>
                                <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "contact", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "categorie", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                    </tbody>
                </table>
                ";
        } else {
            // line 72
            echo "                    <h2>Aucune donnee de vente</h2>
                ";
        }
        // line 74
        echo "                
                
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
        return "admin/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 74,  238 => 72,  233 => 69,  225 => 67,  221 => 66,  217 => 65,  213 => 64,  209 => 63,  205 => 61,  201 => 60,  188 => 50,  184 => 49,  179 => 46,  177 => 45,  173 => 43,  169 => 41,  164 => 38,  156 => 36,  152 => 35,  148 => 34,  144 => 33,  140 => 32,  136 => 30,  132 => 29,  119 => 19,  115 => 18,  111 => 16,  109 => 14,  105 => 12,  103 => 11,  95 => 5,  75 => 4,  71 => 3,  68 => 2,  36 => 1,);
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
            <div class=\"table-responsive\">
                {% if detailsCaisse %}
                    <table class=\"table\">
                    <caption>Liste des Ventes caisse</caption>
                    {{ render(controller(
                        'App\\\\Controller\\\\SearchController::searchBar'
                    )) }}
                    <thead>
                        <h2>Details caisse pour Utilisateur : {{utilisateur}}</h2>
                        <h3>Nombre de billet en caisse : {{lenCaisse}}</h3>
                        <tr>
                            <th scope=\"col\">Nom(s)</th>
                            <th scope=\"col\">Prenom(s)</th>
                            <th scope=\"col\">Email</th>
                            <th scope=\"col\">Contact</th>
                            <th scope=\"col\">Categorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in detailsCaisse %}
                        
                            <tr>
                                <th scope=\"row\">{{ user.nom }}</th>
                                <td>{{ user.prenom }}</td>
                                <td>{{user.email}}</td>
                                <td>{{user.contact}}</td>
                                <td>{{user.categorie}}</td>
                        {% endfor %}
                    </tbody>
                </table>
                {% else %}
                    <h2>Aucune donnee caisse</h2>
                {% endif %}
                

                {% if detailsVente %}
                <table class=\"table\">
                    <caption>Liste des Ventes</caption>
                    <thead>
                        <h2>Details vente pour Utilisateur : {{utilisateur}}</h2>
                        <h3>Nombre de billet en vendu : {{lenVente}}</h3>
                        <tr>
                            <th scope=\"col\">Nom(s)</th>
                            <th scope=\"col\">Prenom(s)</th>
                            <th scope=\"col\">Email</th>
                            <th scope=\"col\">Contact</th>
                            <th scope=\"col\">Categorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in detailsVente %}
                        
                            <tr>
                                <th scope=\"row\">{{ user.nom }}</th>
                                <td>{{ user.prenom }}</td>
                                <td>{{user.email}}</td>
                                <td>{{user.contact}}</td>
                                <td>{{user.categorie}}</td>
                        {% endfor %}
                    </tbody>
                </table>
                {% else %}
                    <h2>Aucune donnee de vente</h2>
                {% endif %}
                
                
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/details.html.twig", "/home/laurel/dev/symfony/genBilletQrCode/templates/admin/details.html.twig");
    }
}
