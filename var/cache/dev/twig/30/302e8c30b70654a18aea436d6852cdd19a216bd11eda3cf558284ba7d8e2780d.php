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

/* admin/course/index.html.twig */
class __TwigTemplate_8cd5890952adf71e04bdbdf725ec9fd477022654fcd9d2cb354edf333b838df1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/course/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/course/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/course/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration des courses";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1 class=\"text-center m-5\">Page d'administration des courses</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"alert alert-success\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_course");
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></a>
<table class = \"table text-center\">
    <thead>
        <tr>
            <th>Circuit Adulte</th>
            <th>Circuit Enfant</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 23
            echo "        <!-- Mettre le nombre de place restantes-->
            <td>Nombre de place : ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "nb_places", [], "any", false, false, false, 24), "html", null, true);
            echo " </td>
        <!-- Mettre le nombre de personnes en liste d'attente -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tr>
        <tr>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 30
            echo "            <td>Date de la course : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "date", [], "any", false, false, false, 30), "d/m/y"), "html", null, true);
            echo " </td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tr>
        <tr>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 35
            echo "            <td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_consulter_participants", ["course" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Participants inscrits</a></td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tr>
        <tr>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 40
            echo "            <td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reporter_course", ["course" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Reporter les courses</a></td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tr>
    </tbody>
</table>
<!-- ajout de l'adresse générée pour partager notre contenu -->
<div class=\"row\">
  

        <a class=\"btn btn-info col-3 lien-partage offset-2\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A//karac.ch/blog/bouton_partage_personnalise\">
            <span class=\"fb-icon\">
            Partager cette course <i class=\"fab fa-facebook-square\"></i>
            </span> 
        </a>

         <a class=\"btn btn-info col-3 lien-partage offset-2\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A//karac.ch/blog/bouton_partage_personnalise\">
            <span class=\"fb-icon\">
            Partager cette course <i class=\"fab fa-facebook-square\"></i>
            </span> 
        </a>
    
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 42,  179 => 40,  175 => 39,  171 => 37,  162 => 35,  158 => 34,  154 => 32,  145 => 30,  141 => 29,  137 => 27,  128 => 24,  125 => 23,  121 => 22,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration des courses{% endblock %}

{% block body %}
<h1 class=\"text-center m-5\">Page d'administration des courses</h1>
    {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
    {% endfor %}
<a href=\"{{path('admin_ajouter_course')}}\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></a>
<table class = \"table text-center\">
    <thead>
        <tr>
            <th>Circuit Adulte</th>
            <th>Circuit Enfant</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        {% for course in courses %}
        <!-- Mettre le nombre de place restantes-->
            <td>Nombre de place : {{course.nb_places}} </td>
        <!-- Mettre le nombre de personnes en liste d'attente -->
        {% endfor %}
        </tr>
        <tr>
        {% for course in courses %}
            <td>Date de la course : {{course.date | date(\"d/m/y\")}} </td>
        {% endfor %}
        </tr>
        <tr>
        {% for course in courses %}
            <td><a href=\"{{path('admin_consulter_participants', {course : course.id})}}\" class=\"btn btn-info\">Participants inscrits</a></td>
        {% endfor %}
        </tr>
        <tr>
        {% for course in courses %}
            <td><a href=\"{{path('admin_reporter_course',{course : course.id})}}\" class=\"btn btn-warning\">Reporter les courses</a></td>
        {% endfor %}
        </tr>
    </tbody>
</table>
<!-- ajout de l'adresse générée pour partager notre contenu -->
<div class=\"row\">
  

        <a class=\"btn btn-info col-3 lien-partage offset-2\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A//karac.ch/blog/bouton_partage_personnalise\">
            <span class=\"fb-icon\">
            Partager cette course <i class=\"fab fa-facebook-square\"></i>
            </span> 
        </a>

         <a class=\"btn btn-info col-3 lien-partage offset-2\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A//karac.ch/blog/bouton_partage_personnalise\">
            <span class=\"fb-icon\">
            Partager cette course <i class=\"fab fa-facebook-square\"></i>
            </span> 
        </a>
    
</div>


{% endblock %}
", "admin/course/index.html.twig", "C:\\wamp64\\www\\projet\\projetmango-master\\templates\\admin\\course\\index.html.twig");
    }
}
