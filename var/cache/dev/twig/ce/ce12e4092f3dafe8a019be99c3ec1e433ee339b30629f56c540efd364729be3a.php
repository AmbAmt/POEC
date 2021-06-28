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

/* edit_user/index.html.twig */
class __TwigTemplate_a4f4983cb7620eecf45b6d3486717377b9f368c0be1fa9f8979b1cdfbf31d7b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "edit_user/index.html.twig", 1);
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

        echo "Mes informations";
        
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
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <div class=\"alert alert-success\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div class='container'>
        <div class='row'>
            <div class='offset-3 col-6'>
                <h1>Modifier ses informations</h1>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                ";
        // line 18
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 18, $this->source); })()), 'widget');
        echo "
                <div class='text-center'>
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        Valider
                    </button>
                </div>          
                ";
        // line 25
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 25, $this->source); })()), 'form_end');
        echo "     
            </div>
           <div class='offset-3 col-6 mt-3 text-center'>
           ";
        // line 28
        if ((0 !== twig_compare((isset($context["inscriptionDate"]) || array_key_exists("inscriptionDate", $context) ? $context["inscriptionDate"] : (function () { throw new RuntimeError('Variable "inscriptionDate" does not exist.', 28, $this->source); })()), null))) {
            // line 29
            echo "               <h2>Dernière course à laquelle je suis inscrit </h2>
                ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["inscriptionDate"]) || array_key_exists("inscriptionDate", $context) ? $context["inscriptionDate"] : (function () { throw new RuntimeError('Variable "inscriptionDate" does not exist.', 30, $this->source); })()), "d/m/Y"), "html", null, true);
            echo "
                <form method=\"POST\" action=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user");
            echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"delete\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . (isset($context["inscriptionId"]) || array_key_exists("inscriptionId", $context) ? $context["inscriptionId"] : (function () { throw new RuntimeError('Variable "inscriptionId" does not exist.', 33, $this->source); })()))), "html", null, true);
            echo "\">
                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Se désinscrire\"></input>
                </form>
           ";
        }
        // line 37
        echo "                
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "edit_user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 37,  147 => 33,  142 => 31,  138 => 30,  135 => 29,  133 => 28,  126 => 25,  116 => 18,  112 => 16,  106 => 12,  96 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes informations{% endblock %}

{% block body %}
 {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
   
    {% endfor %}
    <div class='container'>
        <div class='row'>
            <div class='offset-3 col-6'>
                <h1>Modifier ses informations</h1>
                {{ form_start(editForm) }}
                {# afficher ts les champs #}
                {{ form_widget(editForm) }}
                <div class='text-center'>
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        Valider
                    </button>
                </div>          
                {# </form>  #}
                {{ form_end(editForm) }}     
            </div>
           <div class='offset-3 col-6 mt-3 text-center'>
           {% if inscriptionDate != null %}
               <h2>Dernière course à laquelle je suis inscrit </h2>
                {{inscriptionDate | date(\"d/m/Y\")}}
                <form method=\"POST\" action=\"{{path('edit_user')}}\">
                    <input type=\"hidden\" name=\"_method\" value=\"delete\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('SUP'~ inscriptionId) }}\">
                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Se désinscrire\"></input>
                </form>
           {% endif %}
                
            </div>
        </div>
    </div>
{% endblock %}
", "edit_user/index.html.twig", "C:\\wamp64\\www\\projet\\projetmango-master\\templates\\edit_user\\index.html.twig");
    }
}
