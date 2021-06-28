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
class __TwigTemplate_f74c51ace42982e032c6336cd684906349f731d744206de9796837ab3fd3590f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
    <head>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

        <meta charset=\"UTF-8\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css\" integrity=\"sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
        

        ";
        // line 17
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
          ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 103
        echo "   
    ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "
        ";
        // line 107
        $this->displayBlock('footer', $context, $blocks);
        // line 135
        echo "    
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

    </body>
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

        echo "MX Parc ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            ";
        // line 19
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "            ";
        // line 23
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "<div class=\"container\">
    
<nav class=\"navbar navbar-expand-md navbar-light bg-light\">
    <div class=\"navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"><i class=\"bi bi-twitter\"></i></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"><i class=\"bi bi-instagram\"></i></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"><i class=\"bi bi-facebook\"></i></a>
            </li>
        </ul>
    </div>



    <div class=\"navbar-collapse collapse w-200 order-2 order-ml-auto flex-nowrap dual-collapse2\">
        <ul class=\"navbar-nav ml-auto\">
";
        // line 49
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_ANONYMOUS")) {
            // line 50
            echo "  <li class=\"nav-item\">
                 <a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
            </li>
    ";
        } else {
            // line 54
            echo "    ";
        }
        // line 55
        echo "
";
        // line 57
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_ANONYMOUS")) {
        } else {
            // line 59
            echo "           <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
            </li>
";
        }
        // line 63
        echo "
";
        // line 65
        echo "   ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "       
        <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_welcome");
            echo "\"><i class=\"fas fa-user-cog fa-2x\"></i></a>
        </li> 
   ";
        }
        // line 71
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_ANONYMOUS")) {
            // line 72
            echo "  ";
        } else {
            // line 73
            echo "             <li class=\"nav-item\">
                 <a class=\"nav-link\" onMouseOver=\"Mon compte\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user");
            echo "\"><i class=\"far fa-user-circle fa-2x\"></i></a>
            </li>
  ";
        }
        // line 77
        echo "  ";
        // line 78
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_ANONYMOUS")) {
            // line 79
            echo " 
  ";
        } else {
            // line 81
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" ><i class=\"fas fa-sign-out-alt fa-2x\"></i> </a>
            </li>
  ";
        }
        // line 85
        echo "        </ul>
    </div>
        <div class=\"mr-auto order-0\">
       
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".dual-collapse2\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
    </div>

</nav>
<div class=\"container\">
<div class=\"row mt-2 mb-2\">
<a class=\"px-0\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Header.png"), "html", null, true);
        echo "\"  alt=\"header\" class=\"img-fluid\"> </a>


</div>
</div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 108
        echo "<!-- Footer -->
<footer class=\"bg-light text-center text-white mt-3\">
  <div class=\"container p-4\">
    <nav class=\"navbar navbar-expand-md navbar-light bg-light\">
        <div class>

                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"#\"><i class=\"bi bi-twitter\" role=\"button\"></i></a>
                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"#\"><i class=\"bi bi-instagram\" role=\"button\"></i></a> 
                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"#\"><i class=\"bi bi-facebook\" role=\"button\"></i></a> 
                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"#\"><i class=\"bi bi-google\" role=\"button\"></i></a> 
        </div>
    <div class=\"navbar-nav ml-auto\">>
                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter<role=\"button\"></a>
        
    </div>

    </nav>


  <div class=\"text-center p-3 bg-secondary\">
  
        Mentions légales <a class=\"text-white\" href=\"#\"> </a>
         <p>&#x1F96D; Mango Team</p>
  </div>
  
    
        ";
        
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
        return array (  365 => 120,  351 => 108,  341 => 107,  331 => 105,  321 => 104,  303 => 97,  289 => 85,  283 => 82,  280 => 81,  276 => 79,  273 => 78,  271 => 77,  265 => 74,  262 => 73,  259 => 72,  256 => 71,  250 => 67,  244 => 65,  241 => 63,  235 => 60,  232 => 59,  229 => 57,  226 => 55,  223 => 54,  217 => 51,  214 => 50,  211 => 49,  188 => 27,  178 => 26,  168 => 23,  166 => 22,  156 => 21,  146 => 19,  144 => 18,  134 => 17,  115 => 9,  98 => 135,  96 => 107,  93 => 106,  91 => 104,  88 => 103,  86 => 26,  82 => 24,  80 => 21,  77 => 20,  74 => 17,  66 => 10,  62 => 9,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
        <link href=\"{{ asset('style.css') }}\" type=\"text/css\" rel=\"stylesheet\">

        <meta charset=\"UTF-8\">
        <title>{% block title %}MX Parc {% endblock %}</title>
        <link rel=\"icon\" href=\"{{ asset('img/logo.jpg')}}\" />
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css\" integrity=\"sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
        

        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <body>
          {% block header %}
<div class=\"container\">
    
<nav class=\"navbar navbar-expand-md navbar-light bg-light\">
    <div class=\"navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"><i class=\"bi bi-twitter\"></i></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"><i class=\"bi bi-instagram\"></i></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"><i class=\"bi bi-facebook\"></i></a>
            </li>
        </ul>
    </div>



    <div class=\"navbar-collapse collapse w-200 order-2 order-ml-auto flex-nowrap dual-collapse2\">
        <ul class=\"navbar-nav ml-auto\">
{# Onglet connexion visible uniquement sur la page login #}
    {% if is_granted('IS_ANONYMOUS')%}
  <li class=\"nav-item\">
                 <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
            </li>
    {% else %}
    {% endif %}

{# Onglet inscription uniquement pour les non authentifiés #}
{% if not is_granted('IS_ANONYMOUS')%}
{% else %}
           <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_register')}}\">Inscription</a>
            </li>
{% endif %}

{# Onglet admin uniquement pour l'admin #}
   {% if is_granted('ROLE_ADMIN') %}       
        <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('admin_welcome')}}\"><i class=\"fas fa-user-cog fa-2x\"></i></a>
        </li> 
   {% endif %}
{# onglet mon compte pour tout le monde #}
  {% if is_granted('IS_ANONYMOUS')%}
  {% else %}
             <li class=\"nav-item\">
                 <a class=\"nav-link\" onMouseOver=\"Mon compte\" href=\"{{ path('edit_user')}}\"><i class=\"far fa-user-circle fa-2x\"></i></a>
            </li>
  {% endif %}
  {# Onglet Déconnexion pour tout le monde sauf les non connectés #}
  {% if is_granted('IS_ANONYMOUS')%}
 
  {% else %}
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_logout') }}\" ><i class=\"fas fa-sign-out-alt fa-2x\"></i> </a>
            </li>
  {% endif %}
        </ul>
    </div>
        <div class=\"mr-auto order-0\">
       
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".dual-collapse2\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
    </div>

</nav>
<div class=\"container\">
<div class=\"row mt-2 mb-2\">
<a class=\"px-0\" href=\"{{path('accueil')}}\"> <img src=\"{{ asset('img/Header.png')}}\"  alt=\"header\" class=\"img-fluid\"> </a>


</div>
</div>
        {% endblock %}
   
    {% block body %}
    {% endblock %}

        {% block footer %}
<!-- Footer -->
<footer class=\"bg-light text-center text-white mt-3\">
  <div class=\"container p-4\">
    <nav class=\"navbar navbar-expand-md navbar-light bg-light\">
        <div class>

                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"#\"><i class=\"bi bi-twitter\" role=\"button\"></i></a>
                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"#\"><i class=\"bi bi-instagram\" role=\"button\"></i></a> 
                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"#\"><i class=\"bi bi-facebook\" role=\"button\"></i></a> 
                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"#\"><i class=\"bi bi-google\" role=\"button\"></i></a> 
        </div>
    <div class=\"navbar-nav ml-auto\">>
                <a class=\"btn btn-outline-dark btn-floating m-1\" href=\"{{path('contact')}}\">Nous contacter<role=\"button\"></a>
        
    </div>

    </nav>


  <div class=\"text-center p-3 bg-secondary\">
  
        Mentions légales <a class=\"text-white\" href=\"#\"> </a>
         <p>&#x1F96D; Mango Team</p>
  </div>
  
    
        {% endblock %}
    
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\projet\\projetmango-master\\templates\\base.html.twig");
    }
}
