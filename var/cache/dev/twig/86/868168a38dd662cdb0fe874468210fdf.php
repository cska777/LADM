<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* article/index.html.twig */
class __TwigTemplate_5d175da882af69d348d7c07d02e0501a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    
<div class=\"row\">
    <div class=\"col-2\">
    ";
        // line 7
        yield from         $this->loadTemplate("fragment/_sidebar.html.twig", "article/index.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    </div>
    <div class=\"col-10\">
        <h1 class=\"titreh1 text-center mb-5 mt-5\">GÉRER LES ARTICLES</h1>
        <div class=\"text-center\">
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_article");
        yield "\" class=\"btn btn-ajouter fw-bold
            \">Ajouter un article</a>
        </div>
        <div class=\"table-container table-responsive\">
            <table class=\"table table-striped align-middle \">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 28
            yield "                    <tr>
                        <td>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                        <td>";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "titre", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                        <td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "auteur", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "date", [], "any", false, false, false, 32), "d-m-Y"), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_article", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\", class=\"btn btn-modifier\">Modifier</a>
                            <a href=\"";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\", class=\"btn btn-supprimer\">Supprimer</a> 
                        </td> 
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  138 => 39,  128 => 35,  124 => 34,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  104 => 28,  100 => 27,  82 => 12,  76 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    
<div class=\"row\">
    <div class=\"col-2\">
    {% include 'fragment/_sidebar.html.twig'  %}
    </div>
    <div class=\"col-10\">
        <h1 class=\"titreh1 text-center mb-5 mt-5\">GÉRER LES ARTICLES</h1>
        <div class=\"text-center\">
            <a href=\"{{path(\"new_article\")}}\" class=\"btn btn-ajouter fw-bold
            \">Ajouter un article</a>
        </div>
        <div class=\"table-container table-responsive\">
            <table class=\"table table-striped align-middle \">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {% for key, value in articles %}
                    <tr>
                        <td>{{value.id}}</td>
                        <td>{{value.titre}}</td>
                        <td>{{value.auteur}}</td>
                        <td>{{value.date|date('d-m-Y')}}</td>
                        <td>
                            <a href=\"{{path(\"update_article\", {id: value.id})}}\", class=\"btn btn-modifier\">Modifier</a>
                            <a href=\"{{path(\"delete_article\", {id: value.id})}}\", class=\"btn btn-supprimer\">Supprimer</a> 
                        </td> 
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>

{% endblock %}


", "article/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/article/index.html.twig");
    }
}
