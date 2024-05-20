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

/* home/actualite.html.twig */
class __TwigTemplate_7b2971c0d2061e8a43ea3338b34c5805 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/actualite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/actualite.html.twig"));

        // line 1
        yield "<section id=\"actualites\">
\t<div id=\"tete-actualites\">
\t\t<h2 class='mb-5'>Actualités</h2>
\t</div>
\t";
        // line 39
        yield "\t\t";
        $context["sortedArticles"] = Twig\Extension\CoreExtension::sortFilter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 39, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 39, $this->source); })()), "date", [], "any", false, false, false, 39) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 39, $this->source); })()), "date", [], "any", false, false, false, 39))) ? (1) : ( -1)); });
        // line 40
        yield "\t\t";
        $context["limitedArticles"] = Twig\Extension\CoreExtension::slice($this->env, (isset($context["sortedArticles"]) || array_key_exists("sortedArticles", $context) ? $context["sortedArticles"] : (function () { throw new RuntimeError('Variable "sortedArticles" does not exist.', 40, $this->source); })()), 0, 2);
        // line 41
        yield "
\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["limitedArticles"]) || array_key_exists("limitedArticles", $context) ? $context["limitedArticles"] : (function () { throw new RuntimeError('Variable "limitedArticles" does not exist.', 42, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 43
            yield "\t\t\t";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43) % 2) == 1)) {
                // line 44
                yield "\t\t\t\t</div><div class=\"row justify-content-center\">
\t\t\t";
            }
            // line 46
            yield "\t\t\t<div class=\"card\" id=\"actualitesCard\">
\t\t\t\t<img class=\"card-img-sm-left\" id=\"actualites-card-img\" src=\"";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 47))), "html", null, true);
            yield "\"/>
\t\t\t\t<div class=\"card-body\" id=\"actualites-card-body\">
\t\t\t\t\t<h4 class=\"card-title h5 h4-sm\">";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 49), "html", null, true);
            yield "</h4>
\t\t\t\t\t<p class=\"card-text\">";
            // line 50
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 50));
            yield "</p>
\t\t\t\t\t<a href=\"";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_article", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Voir plus</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "\t<div class=\"read-more-actu my-5\">
\t\t<a class='btn btn-primary' href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites");
        yield "\">Plus d'actualités</a>
\t</div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/actualite.html.twig";
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
        return array (  120 => 56,  117 => 55,  99 => 51,  95 => 50,  91 => 49,  86 => 47,  83 => 46,  79 => 44,  76 => 43,  59 => 42,  56 => 41,  53 => 40,  50 => 39,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"actualites\">
\t<div id=\"tete-actualites\">
\t\t<h2 class='mb-5'>Actualités</h2>
\t</div>
\t{# <div id=\"body-actualites\">
\t\t<div class=\"card mb-3 me-3 card-actu\" style=\"max-width: 540px;\">
\t\t\t<div class=\"row g-0\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img src=\"{{ asset('images/photo-actualites2.jpg') }}\" alt=\"...\" class=\"img-fluid rounded-start\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"btCard card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">LOREM IPSUM</h5>
\t\t\t\t\t\t<p class=\"card-text\">Effectively ensuring that women, girls, men, boys and gender- diverse people can fully enjoy human rights requires, first, a comprehensive understanding of social structures, policies and stereotypes...</p>
\t\t\t\t\t\t<a clsse='bt' href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-circle-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card mb-3 card-actu\" style=\"max-width: 540px;\">
\t\t\t<div class=\"row g-0\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img src=\"{{ asset('images/photo-actualites2.jpg') }}\" alt=\"...\" class=\"img-fluid rounded-start\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"btCard card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">LOREM IPSUM</h5>
\t\t\t\t\t\t<p class=\"card-text\">Effectively ensuring that women, girls, men, boys and gender- diverse people can fully enjoy human rights requires, first, a comprehensive understanding of social structures, policies and stereotypes...</p>
\t\t\t\t\t\t<a class='bt' href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-circle-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div> #}
\t\t{% set sortedArticles = articles|sort((a, b) => a.date < b.date ? 1 : -1) %}
\t\t{% set limitedArticles = sortedArticles|slice(0, 2) %}

\t\t{% for article in limitedArticles %}
\t\t\t{% if loop.index % 2 == 1 %}
\t\t\t\t</div><div class=\"row justify-content-center\">
\t\t\t{% endif %}
\t\t\t<div class=\"card\" id=\"actualitesCard\">
\t\t\t\t<img class=\"card-img-sm-left\" id=\"actualites-card-img\" src=\"{{ asset('upload/' ~ article.image) }}\"/>
\t\t\t\t<div class=\"card-body\" id=\"actualites-card-body\">
\t\t\t\t\t<h4 class=\"card-title h5 h4-sm\">{{ article.titre }}</h4>
\t\t\t\t\t<p class=\"card-text\">{{ article.description|striptags|raw }}</p>
\t\t\t\t\t<a href=\"{{ path('show_article', {'id': article.id}) }}\" class=\"btn btn-primary\">Voir plus</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t<div class=\"read-more-actu my-5\">
\t\t<a class='btn btn-primary' href=\"{{ path(\"actualites\") }}\">Plus d'actualités</a>
\t</div>
</section>
", "home/actualite.html.twig", "/Users/dvpt/Desktop/ong2/templates/home/actualite.html.twig");
    }
}
