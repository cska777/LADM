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

/* article/show.html.twig */
class __TwigTemplate_199054c0f7e3976a4dae786d56638f2e extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "
    <div id=\"actualites-banner\">
        <style>
            #actualites-banner {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 60vh;
                background-size: cover;
                background-position: center;
                text-align: center;
                color: var(--text-1);
                background-image: url(";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20))), "html", null, true);
        yield "); /* URL dynamique provenant de votre base de données */
            }
        </style>
        <div class=\"div_h1_p\">
            <h1>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), "html", null, true);
        yield "</h1>
            <p>";
        // line 25
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25);
        yield "</p>
            <p>Publié le : ";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true);
        yield " , par : ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "auteur", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
        </div>
    </div>

    <div class=\"contenu_show_article\">
        <div class=\"pb-4\">
            <h2 class=\"pb-2\">";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 32, $this->source); })()), "sousTitre1", [], "any", false, false, false, 32), "html", null, true);
        yield "</h2>
            <p>";
        // line 33
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 33, $this->source); })()), "contenu", [], "any", false, false, false, 33);
        yield "</p>
            <p>";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "paragraphe1", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
            <p>";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "paragraphe2", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
            <p>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 36, $this->source); })()), "paragraphe3", [], "any", false, false, false, 36), "html", null, true);
        yield "</p>
        </div>
        <div class=\"pb-4\">

            <h2 class=\"pb-2\">";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 40, $this->source); })()), "sousTitre2", [], "any", false, false, false, 40), "html", null, true);
        yield "</h2>
            <p>";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 41, $this->source); })()), "paragraphe4", [], "any", false, false, false, 41), "html", null, true);
        yield "</p>
            <p>";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 42, $this->source); })()), "paragraphe5", [], "any", false, false, false, 42), "html", null, true);
        yield "</p>
        </div>

        <div class=\"images_show_article row justify-content-center flex-wrap pb-5\">
            <img class=\"img_show_article col-3\" src=\"";
        // line 46
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 46, $this->source); })()), "image1", [], "any", false, false, false, 46), "html", null, true);
        yield "\" alt=\"\">
            <img class=\" img_show_article col-3\" src=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 47, $this->source); })()), "image2", [], "any", false, false, false, 47), "html", null, true);
        yield "\" alt=\"\">
            <img class=\" img_show_article col-3\" src=\"";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 48, $this->source); })()), "image3", [], "any", false, false, false, 48), "html", null, true);
        yield "\" alt=\"\">
        </div>

        <div class=\"pb-4\">

            <h2 class=\"pb-2\">";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 53, $this->source); })()), "sousTitre3", [], "any", false, false, false, 53), "html", null, true);
        yield "</h2>
            <p>";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 54, $this->source); })()), "paragraphe6", [], "any", false, false, false, 54), "html", null, true);
        yield "</p>
        </div>

        <div class=\"pb-4\">

            <h2 class=\"pb-2\">";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 59, $this->source); })()), "sousTitre4", [], "any", false, false, false, 59), "html", null, true);
        yield "</h2>
            <p>";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 60, $this->source); })()), "paragraphe7", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>
            <p>";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 61, $this->source); })()), "paragraphe8", [], "any", false, false, false, 61), "html", null, true);
        yield "</p>
        </div>

        <div class=\"pb-4\">

            <h2 class=\"pb-2\">";
        // line 66
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 66, $this->source); })()), "sousTitre5", [], "any", false, false, false, 66), "html", null, true);
        yield "</h2>
            <p>";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 67, $this->source); })()), "paragraphe9", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
            <p>";
        // line 68
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 68, $this->source); })()), "paragraphe10", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>
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
        return "article/show.html.twig";
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
        return array (  220 => 68,  216 => 67,  212 => 66,  204 => 61,  200 => 60,  196 => 59,  188 => 54,  184 => 53,  176 => 48,  172 => 47,  168 => 46,  161 => 42,  157 => 41,  153 => 40,  146 => 36,  142 => 35,  138 => 34,  134 => 33,  130 => 32,  119 => 26,  115 => 25,  111 => 24,  104 => 20,  90 => 8,  80 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/article/show.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}{{ article.titre }}{% endblock %}

{% block body %}

    <div id=\"actualites-banner\">
        <style>
            #actualites-banner {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 60vh;
                background-size: cover;
                background-position: center;
                text-align: center;
                color: var(--text-1);
                background-image: url({{ asset('upload/' ~ article.image) }}); /* URL dynamique provenant de votre base de données */
            }
        </style>
        <div class=\"div_h1_p\">
            <h1>{{ article.titre }}</h1>
            <p>{{ article.description|raw }}</p>
            <p>Publié le : {{article.date|date('d-m-Y')}} , par : {{article.auteur}}</p>
        </div>
    </div>

    <div class=\"contenu_show_article\">
        <div class=\"pb-4\">
            <h2 class=\"pb-2\">{{ article.sousTitre1 }}</h2>
            <p>{% autoescape false %}{{ article.contenu|raw }}{% endautoescape %}</p>
            <p>{{ article.paragraphe1 }}</p>
            <p>{{ article.paragraphe2 }}</p>
            <p>{{ article.paragraphe3 }}</p>
        </div>
        <div class=\"pb-4\">

            <h2 class=\"pb-2\">{{ article.sousTitre2 }}</h2>
            <p>{{ article.paragraphe4 }}</p>
            <p>{{ article.paragraphe5 }}</p>
        </div>

        <div class=\"images_show_article row justify-content-center flex-wrap pb-5\">
            <img class=\"img_show_article col-3\" src=\"{{ article.image1 }}\" alt=\"\">
            <img class=\" img_show_article col-3\" src=\"{{ article.image2 }}\" alt=\"\">
            <img class=\" img_show_article col-3\" src=\"{{ article.image3 }}\" alt=\"\">
        </div>

        <div class=\"pb-4\">

            <h2 class=\"pb-2\">{{ article.sousTitre3 }}</h2>
            <p>{{ article.paragraphe6 }}</p>
        </div>

        <div class=\"pb-4\">

            <h2 class=\"pb-2\">{{ article.sousTitre4 }}</h2>
            <p>{{ article.paragraphe7 }}</p>
            <p>{{ article.paragraphe8 }}</p>
        </div>

        <div class=\"pb-4\">

            <h2 class=\"pb-2\">{{ article.sousTitre5 }}</h2>
            <p>{{ article.paragraphe9 }}</p>
            <p>{{ article.paragraphe10 }}</p>
        </div>
        
           
    </div>
            
    

    {# Ajoutez d'autres détails de l'article selon vos besoins #}
{% endblock %}
", "article/show.html.twig", "/Users/dvpt/Desktop/ong2/templates/article/show.html.twig");
    }
}
