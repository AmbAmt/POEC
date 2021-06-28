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

/* accueil/index.html.twig */
class __TwigTemplate_b58dc6ef530d47052dfb100418cc8315afdabe831e30e80e5cefbde8e792722a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MX PARC";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <section class=\"row\">
    <div class=\"col-12 col-lg-6 mt-5\">
      ";
        // line 6
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
        // line 11
        echo "      <h2>Prochain évènement le
        ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["dateCourse"]) || array_key_exists("dateCourse", $context) ? $context["dateCourse"] : (function () { throw new RuntimeError('Variable "dateCourse" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h2>
      <p class='mt-5'>Pour vous inscrire à la prochaine course, veuillez-vous connecter. Vous pouvez vous créer un compte si ce n'est pas déjà fait !</p>
      <div class=\"text-center mt-5\">
        <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#modalInscription\">
          S'inscrire
        </button>
      </div>
    </div>

    <div class=\"col-12 col-lg-6 mt-5 text-center\">
      <img class=\"img-fluid calendrier\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/calendrier.png"), "html", null, true);
        echo "\" alt=\"carte\">
    </div>
  </section>

  <div class=\"modal fade\" id='modalInscription' tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">Confirmation inscription</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <p>A quelle course voulez-vous vous inscrire ?</p>
          <form action=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscriptionCourse");
        echo "\" method=\"POST\">
            <div class=\"form-row align-items-center\">
              <div class=\"col-auto my-1\">
                <select class=\"custom-select mr-sm-2\" name=\"course\" id=\"inlineFormCustomSelect\">
                  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 42
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                      ";
            // line 43
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["course"], "nb_places", [], "any", false, false, false, 43), 75))) {
                // line 44
                echo "                        Adulte
                      ";
            } else {
                // line 46
                echo "                        Enfant
                      ";
            }
            // line 48
            echo "                    </option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </select>
              </div>
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-secondary mt-3\">Confirmer</button>
              <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <section class=\"row section mt-5\">
    <div class=\"col-12 col-lg-6 mt-5 text-center\">
      <h2>Où sommes-nous ?</h2>
      <p>Vous pouvez nous retrouver près du parc des Gayeulles,<strong>
          12J Rue du Patis Tatelin, 35700 Rennes</strong>
      </p>

      <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.83724161524!2d-1.6409907850054444!3d48.132662059483295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede93effce075%3A0x504cbdbf797e88ae!2sib%20-%20groupe%20Cegos%20Rennes!5e0!3m2!1sfr!2sfr!4v1623153461214!5m2!1sfr!2sfr\" width=\"100%\" height=\"70%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
    </div>

    <div class=\"col-12 col-lg-6 mt-5 text-center\">
      <img class=\"img-fluid\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bike.jpg"), "html", null, true);
        echo "\" alt=\"bike\">
    </div>
  </section>

  <section class=\"row text-center section mt-5 pr-2\">
    <h2 class=\"display-4\">
      <strong>Devenez membre !</strong>
    </h2>
    <p class=\"mt-5\">Vous pouvez devenir membre du club en cliquant sur le bouton ci-dessous,<br>vous deviendrez ainsi prioritaire sur les courses !</p>
    <div class=\"text-center mt-3\">
      <button type=\"button\" class=\"btn btn-secondary\">Adhérer</button>
    </div>
  </section>
  <section class=\"row section mt-5\">
    <div class=\"text-center mt-5\">
      <h2>Evenements passés</h2>
      <p>Retrouver ci-dessous les photos des évènements passés des quatre derniers mois</p>
    </div>

    <div class='card-deck'>
      <div class=\"col-xl-3 col-sm-6 col-12\">
        <div class=\"card  p-0 col-12  mt-3\">
          <img class=\"card-img-top\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/motocross1.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Course du 07/03/2021
            </h5>
            <p class=\"card-text\">Journée de reprise des courses après la pause hivernale</p>
          </div>
        </div>
      </div>
      <div class=\"col-xl-3 col-sm-6 col-12\">
        <div class=\"card  p-0 col-12 mt-3\" >
          <img class=\"card-img-top\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/motocross2.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Course du 04/04/2021
            </h5>
            <p class=\"card-text\">Plein de nouveaux venus qui ont été très bien accueilli</p>
          </div>
        </div>
      </div>

      <div class=\"col-xl-3 col-sm-6 col-12\">
        <div class=\"card  p-0 col-12 mt-3\">
          <img class=\"card-img-top\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/motocross3.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Course du 02/05/2021
            </h5>
            <p class=\"card-text\">Bravo aux enfants qui ont fait de super belles performances</p>
          </div>
        </div>
      </div>

      <div class=\"col-xl-3 col-sm-6 col-12\">
        <div class=\"card  p-0 col-12 mt-3\" >
          <img class=\"card-img-top\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/motocross4.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Course du 06/06/2021</h5>
            <p class=\"card-text\">Temps magnifique ce dimanche, et de très belles performances</p>
          </div>
        </div>
      </div>
    </div>
  </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 128,  253 => 117,  239 => 106,  226 => 96,  201 => 74,  175 => 50,  168 => 48,  164 => 46,  160 => 44,  158 => 43,  153 => 42,  149 => 41,  142 => 37,  124 => 22,  111 => 12,  108 => 11,  99 => 8,  96 => 7,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}MX PARC{% endblock %}
{% block body %}
  <section class=\"row\">
    <div class=\"col-12 col-lg-6 mt-5\">
      {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
          {{ message }}
        </div>
      {% endfor %}
      <h2>Prochain évènement le
        {{ dateCourse }}</h2>
      <p class='mt-5'>Pour vous inscrire à la prochaine course, veuillez-vous connecter. Vous pouvez vous créer un compte si ce n'est pas déjà fait !</p>
      <div class=\"text-center mt-5\">
        <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#modalInscription\">
          S'inscrire
        </button>
      </div>
    </div>

    <div class=\"col-12 col-lg-6 mt-5 text-center\">
      <img class=\"img-fluid calendrier\" src=\"{{ asset('img/calendrier.png')}}\" alt=\"carte\">
    </div>
  </section>

  <div class=\"modal fade\" id='modalInscription' tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">Confirmation inscription</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <p>A quelle course voulez-vous vous inscrire ?</p>
          <form action=\"{{path('inscriptionCourse')}}\" method=\"POST\">
            <div class=\"form-row align-items-center\">
              <div class=\"col-auto my-1\">
                <select class=\"custom-select mr-sm-2\" name=\"course\" id=\"inlineFormCustomSelect\">
                  {% for course in courses %}
                    <option value=\"{{course.id}}\">
                      {% if course.nb_places == 75 %}
                        Adulte
                      {% else %}
                        Enfant
                      {% endif %}
                    </option>
                  {% endfor %}
                </select>
              </div>
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-secondary mt-3\">Confirmer</button>
              <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <section class=\"row section mt-5\">
    <div class=\"col-12 col-lg-6 mt-5 text-center\">
      <h2>Où sommes-nous ?</h2>
      <p>Vous pouvez nous retrouver près du parc des Gayeulles,<strong>
          12J Rue du Patis Tatelin, 35700 Rennes</strong>
      </p>

      <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.83724161524!2d-1.6409907850054444!3d48.132662059483295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede93effce075%3A0x504cbdbf797e88ae!2sib%20-%20groupe%20Cegos%20Rennes!5e0!3m2!1sfr!2sfr!4v1623153461214!5m2!1sfr!2sfr\" width=\"100%\" height=\"70%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
    </div>

    <div class=\"col-12 col-lg-6 mt-5 text-center\">
      <img class=\"img-fluid\" src=\"{{ asset('img/bike.jpg')}}\" alt=\"bike\">
    </div>
  </section>

  <section class=\"row text-center section mt-5 pr-2\">
    <h2 class=\"display-4\">
      <strong>Devenez membre !</strong>
    </h2>
    <p class=\"mt-5\">Vous pouvez devenir membre du club en cliquant sur le bouton ci-dessous,<br>vous deviendrez ainsi prioritaire sur les courses !</p>
    <div class=\"text-center mt-3\">
      <button type=\"button\" class=\"btn btn-secondary\">Adhérer</button>
    </div>
  </section>
  <section class=\"row section mt-5\">
    <div class=\"text-center mt-5\">
      <h2>Evenements passés</h2>
      <p>Retrouver ci-dessous les photos des évènements passés des quatre derniers mois</p>
    </div>

    <div class='card-deck'>
      <div class=\"col-xl-3 col-sm-6 col-12\">
        <div class=\"card  p-0 col-12  mt-3\">
          <img class=\"card-img-top\" src=\"{{ asset('img/motocross1.jpg')}}\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Course du 07/03/2021
            </h5>
            <p class=\"card-text\">Journée de reprise des courses après la pause hivernale</p>
          </div>
        </div>
      </div>
      <div class=\"col-xl-3 col-sm-6 col-12\">
        <div class=\"card  p-0 col-12 mt-3\" >
          <img class=\"card-img-top\" src=\"{{ asset('img/motocross2.jpg')}}\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Course du 04/04/2021
            </h5>
            <p class=\"card-text\">Plein de nouveaux venus qui ont été très bien accueilli</p>
          </div>
        </div>
      </div>

      <div class=\"col-xl-3 col-sm-6 col-12\">
        <div class=\"card  p-0 col-12 mt-3\">
          <img class=\"card-img-top\" src=\"{{ asset('img/motocross3.jpg')}}\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Course du 02/05/2021
            </h5>
            <p class=\"card-text\">Bravo aux enfants qui ont fait de super belles performances</p>
          </div>
        </div>
      </div>

      <div class=\"col-xl-3 col-sm-6 col-12\">
        <div class=\"card  p-0 col-12 mt-3\" >
          <img class=\"card-img-top\" src=\"{{ asset('img/motocross4.jpg')}}\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Course du 06/06/2021</h5>
            <p class=\"card-text\">Temps magnifique ce dimanche, et de très belles performances</p>
          </div>
        </div>
      </div>
    </div>
  </section>

{% endblock %}", "accueil/index.html.twig", "C:\\wamp64\\www\\projet\\projetmango-master\\templates\\accueil\\index.html.twig");
    }
}
