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

/* admin/course/participants.html.twig */
class __TwigTemplate_9bb05772d58638c18f7ce59eb3f557959a70603d735a12345030a18b88b5a8d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/course/participants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/course/participants.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/course/participants.html.twig", 1);
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

        echo "Liste des participants";
        
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
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_consulter_course");
        echo "\"><i class=\"fas fa-arrow-left\"></i></a>
<table class = \"table text-center\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Numéro de licence</th>
            <th><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pdf", ["course" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">pdf</a></th>
        </tr>
    </thead>
    <tbody>     
    
        ";
        // line 19
        $context["i"] = 0;
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 21
            echo "            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 21, $this->source); })()) + 1);
            // line 22
            echo "            ";
            if ((1 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 22, $this->source); })()), (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 22, $this->source); })())))) {
                // line 23
                echo "                <tr class=\"table-danger\">
            ";
            } else {
                // line 25
                echo "                <tr>
            ";
            }
            // line 27
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "prenom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            ";
            // line 30
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["participant"], "numLicence", [], "any", false, false, false, 30), ""))) {
                // line 31
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_licence", ["user" => twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 31), "circuit" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Envoyer un mail</a></td>
            ";
            } else {
                // line 33
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "numLicence", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
            ";
            }
            // line 35
            echo "            <td>
                <form method=\"POST\" action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_participants", ["user" => twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 36), "circuit" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"delete\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((("SUP" . twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 38)) . twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38))), "html", null, true);
            echo "\">
                    <input type=\"submit\" class= \"btn btn-danger\" value=\"Supprimer\">
                </form onSubmit= return confirm('Confirmer la suppression ?')>
            </td>
         </tr>   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo " 
    </tboby>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/course/participants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 43,  164 => 38,  159 => 36,  156 => 35,  150 => 33,  144 => 31,  142 => 30,  138 => 29,  134 => 28,  129 => 27,  125 => 25,  121 => 23,  118 => 22,  115 => 21,  110 => 20,  108 => 19,  100 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des participants{% endblock %}

{% block body %}
<a href=\"{{path(\"admin_consulter_course\")}}\"><i class=\"fas fa-arrow-left\"></i></a>
<table class = \"table text-center\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Numéro de licence</th>
            <th><a href=\"{{path('admin_pdf',{course : course.id})}}\">pdf</a></th>
        </tr>
    </thead>
    <tbody>     
    
        {% set i = 0%}
        {% for participant in participants %}
            {% set i = i + 1 %}
            {% if i > places %}
                <tr class=\"table-danger\">
            {% else %}
                <tr>
            {% endif %}
            <td>{{participant.nom}}</td>
            <td>{{participant.prenom}}</td>
            <td>{{participant.email}}</td>
            {% if participant.numLicence == \"\" %}
                <td><a href=\"{{path('admin_mail_licence',{user:participant.id, circuit: course.id})}}\" class=\"btn btn-warning\">Envoyer un mail</a></td>
            {% else %}
                <td>{{participant.numLicence}}</td>
            {% endif %}
            <td>
                <form method=\"POST\" action=\"{{path('admin_supprimer_participants', {user : participant.id, circuit :course.id })}}\">
                    <input type=\"hidden\" name=\"_method\" value=\"delete\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP'~ participant.id ~ course.id)}}\">
                    <input type=\"submit\" class= \"btn btn-danger\" value=\"Supprimer\">
                </form onSubmit= return confirm('Confirmer la suppression ?')>
            </td>
         </tr>   
        {% endfor %} 
    </tboby>
</table>
{% endblock %}
", "admin/course/participants.html.twig", "C:\\wamp64\\www\\projet\\projetmango-master\\templates\\admin\\course\\participants.html.twig");
    }
}
