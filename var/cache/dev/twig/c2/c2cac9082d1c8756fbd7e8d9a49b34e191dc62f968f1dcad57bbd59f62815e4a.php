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

/* client_manager/gestionClient.html.twig */
class __TwigTemplate_e16ef0de8d84d62aa0365746b63025a1ab361016e957598b7cda796834b6b8df extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client_manager/gestionClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client_manager/gestionClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client_manager/gestionClient.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assets/css/ges_client.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"container-xl\">
    <div class=\"table-responsive\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <h2>User <b>Management</b></h2>
                    </div>
                    <div class=\"col-sm-7\">
                        <a data-toggle=\"modal\" data-target=\"#exampleModal\" href=\"#exampleModal\" class=\"btn btn-secondary\"><i class=\"material-icons\">&#xE147;</i> <span>Add New User</span></a>
                        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_manager_index");
        echo "\" class=\"btn btn-secondary me\"><i class=\"material-icons\">&#xE24D;</i> <span>Export to Excel</span></a>\t\t\t\t\t\t
                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>\t\t\t\t\t\t
                        <th>Date Created</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <div id=\"root\">
                    
                  </div>
                </tbody>
            </table>
            <div class=\"clearfix\">
                <div class=\"hint-text\">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class=\"pagination\">
                    <li class=\"page-item disabled\"><a href=\"#\">Previous</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                    <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">3</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- modal -->

<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">New message</h5>
        <button type=\"button\" class=\"btn-close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Recipient:</label>
            <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Message:</label>
            <textarea class=\"form-control\" id=\"message-text\"></textarea>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Send message</button>
      </div>
    </div>
  </div>
</div>


  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "  ";
        // line 98
        echo "  
  <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
  <script>
\t\tfunction onClickBtnLike(event){
\t\t\tevent.preventDefault();

\t\t\tconst url = this.href;
      console.log('some stuff');
\t\t\tconst roleUser = document.querySelector('tr#secondroot');
      const initialData = document.getElementById('root1');
      initialData.innerHTML = 
      console.log(\"root1 :\", roleUser);
      //console.log(\"root1 children :\", );
\t\t\taxios.get(url).then(function(response){
        console.log(\"data:\", response.data.users);
        roleUser.innerHTML = \"<h1>DATA</h1>\";
\t\t\t})
      
\t\t\t.catch((error) => {console.log(\"error:\", error)});
\t\t}
    ";
        // line 119
        echo "    const initialData = document.getElementById('root');
    window.onload = function() {
      const rootId = document.getElementById('root1');
      axios.get('";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_manager_json", ["id" => "4"]);
        echo "').then(function(response){
        rootId.innerHTML = response.data.users.map((user) => (`<tr id=\"secondroot\">
                          <td>\${user.id}</td>
                          <td><a href=\"#\"><img style=\"width: 38px; height: 35px\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar.png"), "html", null, true);
        echo "\" class=\"avatar\" alt=\"Avatar\"> \${user.nom}</a></td>
                          <td>04/10/2013</td>                        
                          <td class=\"juser\" id=\"userid\">\${user.roles[\"0\"]}</td>
                          <td><span class=\"status text-success\">&bull;</span> Active</td>
                          <td>
                              <a href=\"#\" class=\"settings json1\" title=\"Settings\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE8B8;</i></a>
                              <a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_manager_json", ["id" => "\${user.id}"]);
        echo "\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE5C9;</i></a>
                              <a href=\"#\" class=\"btn btn-link json1\" id=\"json\">Click</a>
                          </td>
                      </tr>`));
\t\t\t})
    };
    ";
        // line 138
        echo "    
    ";
        // line 153
        echo "\t</script>
\t
  
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "client_manager/gestionClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 153,  251 => 138,  242 => 131,  233 => 125,  227 => 122,  222 => 119,  200 => 98,  198 => 93,  188 => 92,  109 => 23,  97 => 13,  87 => 12,  75 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/assets/css/ges_client.css') }}\">
{% endblock %}



{% block body %}
<div class=\"container-xl\">
    <div class=\"table-responsive\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <h2>User <b>Management</b></h2>
                    </div>
                    <div class=\"col-sm-7\">
                        <a data-toggle=\"modal\" data-target=\"#exampleModal\" href=\"#exampleModal\" class=\"btn btn-secondary\"><i class=\"material-icons\">&#xE147;</i> <span>Add New User</span></a>
                        <a href=\"{{ path('client_manager_index') }}\" class=\"btn btn-secondary me\"><i class=\"material-icons\">&#xE24D;</i> <span>Export to Excel</span></a>\t\t\t\t\t\t
                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>\t\t\t\t\t\t
                        <th>Date Created</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <div id=\"root\">
                    
                  </div>
                </tbody>
            </table>
            <div class=\"clearfix\">
                <div class=\"hint-text\">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class=\"pagination\">
                    <li class=\"page-item disabled\"><a href=\"#\">Previous</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                    <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">3</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- modal -->

<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">New message</h5>
        <button type=\"button\" class=\"btn-close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Recipient:</label>
            <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Message:</label>
            <textarea class=\"form-control\" id=\"message-text\"></textarea>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Send message</button>
      </div>
    </div>
  </div>
</div>


  
{% endblock %}
{% block javascripts %}
  {# <script>
    \$(document).ready(function(){
        \$('[data-toggle=\"tooltip\"]').tooltip();
    });
  </script> #}
  
  <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
  <script>
\t\tfunction onClickBtnLike(event){
\t\t\tevent.preventDefault();

\t\t\tconst url = this.href;
      console.log('some stuff');
\t\t\tconst roleUser = document.querySelector('tr#secondroot');
      const initialData = document.getElementById('root1');
      initialData.innerHTML = 
      console.log(\"root1 :\", roleUser);
      //console.log(\"root1 children :\", );
\t\t\taxios.get(url).then(function(response){
        console.log(\"data:\", response.data.users);
        roleUser.innerHTML = \"<h1>DATA</h1>\";
\t\t\t})
      
\t\t\t.catch((error) => {console.log(\"error:\", error)});
\t\t}
    {# document.querySelector('.delete').addEventListener(\"click\", onClickBtnLike); #}
    const initialData = document.getElementById('root');
    window.onload = function() {
      const rootId = document.getElementById('root1');
      axios.get('{{ path(\"client_manager_json\", {'id': '4'}) }}').then(function(response){
        rootId.innerHTML = response.data.users.map((user) => (`<tr id=\"secondroot\">
                          <td>\${user.id}</td>
                          <td><a href=\"#\"><img style=\"width: 38px; height: 35px\" src=\"{{ asset('assets/img/avatar.png') }}\" class=\"avatar\" alt=\"Avatar\"> \${user.nom}</a></td>
                          <td>04/10/2013</td>                        
                          <td class=\"juser\" id=\"userid\">\${user.roles[\"0\"]}</td>
                          <td><span class=\"status text-success\">&bull;</span> Active</td>
                          <td>
                              <a href=\"#\" class=\"settings json1\" title=\"Settings\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE8B8;</i></a>
                              <a href=\"{{ path(\"client_manager_json\", {'id': \"\${user.id}\"}) }}\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE5C9;</i></a>
                              <a href=\"#\" class=\"btn btn-link json1\" id=\"json\">Click</a>
                          </td>
                      </tr>`));
\t\t\t})
    };
    {# document.getElementById('root1').innerHTML = '<p>pan</p>'; #}
    
    {# initialData.innerHTML = \"{% for user in users %}
                      <tr id=\"secondroot\">
                          <td>{{user.id}}</td>
                          <td><a href=\"#\"><img style=\"width: 38px; height: 35px\" src=\"{{ asset('assets/img/avatar.png') }}\" class=\"avatar\" alt=\"Avatar\"> {{user.nom}}</a></td>
                          <td>04/10/2013</td>                        
                          <td class=\"juser\" id=\"userid\">{{user.roles[\"0\"] | lower}}</td>
                          <td><span class=\"status text-success\">&bull;</span> Active</td>
                          <td>
                              <a href=\"#\" class=\"settings json1\" title=\"Settings\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE8B8;</i></a>
                              <a href=\"{{ path(\"client_manager_json\", {'id': user.id}) }}\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE5C9;</i></a>
                              <a href=\"#\" class=\"btn btn-link json1\" id=\"json\">Click</a>
                          </td>
                      </tr>
                    {% endfor %}; #}
\t</script>
\t
  
    
{% endblock %}", "client_manager/gestionClient.html.twig", "/home/laurel/dev/symfony/genBilletQrCode/templates/client_manager/gestionClient.html.twig");
    }
}
