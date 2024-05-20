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

/* article/actualites.html.twig */
class __TwigTemplate_a6f460298a5388b777063a4718ce6255 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/actualites.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/actualites.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/actualites.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Actualités";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <div id=\"actualites-banner\">  
        <div>
            <h1>NOS ACTUALITES</h1>
            <p>lorem ipsum</p>
        </div>
    </div>

    <div class=\"actualitesCardsWrapper text-center\">
        <div class=\"mt-5 mb-5\">
            <h2>Actualités</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, velit reprehenderit voluptatem sunt dolore illum.</p>
        </div>
        <div id=\"actualites\">
        <div class=\"container actualitesContainer\" >
                
                
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 23, $this->source); })()));
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
            // line 24
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24) % 2) == 1)) {
                // line 25
                yield "                    </div><div class=\"row justify-content-center\">
                ";
            }
            // line 27
            yield "                
                <div class=\"card \" id=\"actualitesCard\">
                    <img class=\"card-img-sm-left \" id=\"actualites-card-img\" src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 29))), "html", null, true);
            yield "\"/>
                    <div class=\"card-body\" id=\"actualites-card-body\">
                        <h4 class=\"card-title h5 h4-sm\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 31), "html", null, true);
            yield "</h4>
                        <p class=\"card-text\">";
            // line 32
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 32));
            yield "</p>
                        <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_article", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Voir plus</a>  
                    </div>
                </div>

            ";
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
        // line 38
        yield "            
        
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
        return "article/actualites.html.twig";
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
        return array (  168 => 38,  149 => 33,  145 => 32,  141 => 31,  136 => 29,  132 => 27,  128 => 25,  125 => 24,  108 => 23,  90 => 7,  80 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Actualités{% endblock %}

{% block body %}
    <div id=\"actualites-banner\">  
        <div>
            <h1>NOS ACTUALITES</h1>
            <p>lorem ipsum</p>
        </div>
    </div>

    <div class=\"actualitesCardsWrapper text-center\">
        <div class=\"mt-5 mb-5\">
            <h2>Actualités</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, velit reprehenderit voluptatem sunt dolore illum.</p>
        </div>
        <div id=\"actualites\">
        <div class=\"container actualitesContainer\" >
                
                
            {% for article in articles %}
                {% if loop.index % 2 == 1 %}
                    </div><div class=\"row justify-content-center\">
                {% endif %}
                
                <div class=\"card \" id=\"actualitesCard\">
                    <img class=\"card-img-sm-left \" id=\"actualites-card-img\" src=\"{{ asset('upload/' ~ article.image) }}\"/>
                    <div class=\"card-body\" id=\"actualites-card-body\">
                        <h4 class=\"card-title h5 h4-sm\">{{ article.titre }}</h4>
                        <p class=\"card-text\">{{ article.contenu|striptags|raw }}</p>
                        <a href=\"{{ path('show_article', {'id': article.id}) }}\" class=\"btn btn-primary\">Voir plus</a>  
                    </div>
                </div>

            {% endfor %}
            
        
        </div>
    </div>

    
{% endblock %}






{# templates/article/actualites.html.twig

{% extends 'base.html.twig' %}

{% block title %}Actualités{% endblock %}

{% block body %}
    <div id=\"actualites-banner\">  
        <div>
            <h1>NOS ACTUALITES</h1>
            <p>lorem ipsum</p>
        </div>
    </div>

    <div class=\"actualitesCardsWrapper text-center\">
        <div>
            <h2>Actualités</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, velit reprehenderit voluptatem sunt dolore illum.</p>
        </div>

        <div class=\"row\"> 
            {% for article in articles %}
                {% if loop.index % 2 == 1 %}
                    </div><div class=\"row justify-content-center\">
                {% endif %}

                <div class=\"col-lg-4 col-md-6 col-sm-10  mx-1\">
                    <div class=\"card flex-row\" id=\"actualitesCard\">
                        <img class=\"card-img-left actualites-card-img\" src=\"{{ article.image }}\"/>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ article.titre }}</h5>
                            <p class=\" card-text\" id=\"text-card-actualites\">{{ article.contenu }}</p>
                            <a href=\"{{ path('show_article', {'id': article.id}) }}\" class=\"btn btn-primary\">Voir plus</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %} #}





{# templates/article/actualites.html.twig

{% extends 'base.html.twig' %}

{% block title %}Actualités{% endblock %}

{% block body %}
    <div id=\"actualites-banner\">  
        <div>
            <h1>NOS ACTUALITES</h1>
            <p>lorem ipsum</p>
        </div>
    </div>
    <div class=\"row\">
        {% for article in articles %}
        
            {# <div class=\"col-md-4\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ article.titre }}</h5>
                        <p class=\"card-text\">{{ article.contenu }}</p>
                        <a href=\"{{ path('show_article', {'id': article.id}) }}\" class=\"btn btn-cards\">Voir plus</a>
                    </div>
                </div>
            </div> #}
            {# <div class=\"card mb-3\" style=\"max-width: 540px;\">
        <div class=\"row g-0\">
            <div class=\"col-md-4\">
            <img src={{article.image}} alt=\"\" class=\"custom-card-img rounded-start\"/>
            </div>
            <div class=\"col-md-8\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ article.titre }}</h5>
                <p class=\"card-text\">{{ article.contenu }}</p>
                <a href=\"{{ path('show_article', {'id': article.id}) }}\" class=\"btn btn-cards\">Voir plus</a>

            </div>
            </div>
        </div>
</div>
        {% endfor %}
    </div>
{% endblock %} #} 
", "article/actualites.html.twig", "/Users/dvpt/Desktop/ong2/templates/article/actualites.html.twig");
    }
}
