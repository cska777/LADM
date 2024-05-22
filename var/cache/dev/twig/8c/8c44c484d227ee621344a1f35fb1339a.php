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

/* about-us/show.html.twig */
class __TwigTemplate_990e62fb5bfffadd47b614562a628fa8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about-us/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about-us/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about-us/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        yield "\tÀ propos
";
        
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
        yield "

</head>
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aboutUs"]) || array_key_exists("aboutUs", $context) ? $context["aboutUs"] : (function () { throw new RuntimeError('Variable "aboutUs" does not exist.', 10, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["apropos"]) {
            // line 11
            yield "\t<div class=\"banner\" style=\"background-image: url('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "image", [], "any", false, false, false, 11))), "html", null, true);
            yield "');\">
\t</div>


<div class=\"card-container\">
\t\t<div class=\"card-about-us\">
\t\t\t<a href=\"#";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "titre", [], "any", false, false, false, 17), "html", null, true);
            yield "\" class=\"disable-link\">
\t\t\t\t<h2>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "titre", [], "any", false, false, false, 18), "html", null, true);
            yield "</h2>
\t\t\t\t<div class=\"about-us-p\">";
            // line 19
            yield CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "contenu", [], "any", false, false, false, 19);
            yield "</div>
\t\t\t</a>
\t\t</div>





</div>
\t";
            // line 28
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28) % 2) == 1)) {
                // line 29
                yield "\t\t<div class=\"section\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "titre", [], "any", false, false, false, 29), "html", null, true);
                yield "\">
\t\t\t<h2 class=\"about-us-title \">";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "titre", [], "any", false, false, false, 30), "html", null, true);
                yield "</h2>
\t\t\t<div class=\"flex-container\">
\t\t\t\t<div class=\"flex-item text-content class padding-right\">
\t\t\t\t\t<div class=\"text-width\">
\t\t\t\t\t\t<p>";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "contenu", [], "any", false, false, false, 34);
                yield "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-item\">
\t\t\t\t\t<img src=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "image", [], "any", false, false, false, 38))), "html", null, true);
                yield "\" alt=\"Notre Histoire\" class=\"image-about\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
            }
            // line 44
            yield "\t";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44) % 2) == 0)) {
                // line 45
                yield "\t\t<!-- Que faisons-nous ? -->
\t\t<div class=\"section\" id=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "titre", [], "any", false, false, false, 46), "html", null, true);
                yield "\">
\t\t\t<h2 class=\"about-us-title animate__animated animate__backInRight \" id=\"what-do-we-do\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "titre", [], "any", false, false, false, 47), "html", null, true);
                yield "</h2>
\t\t\t<div class=\"flex-container\">
\t\t\t\t<div class=\"flex-item\">
\t\t\t\t\t<img src=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "image", [], "any", false, false, false, 50))), "html", null, true);
                yield "\" alt=\"Notre Histoire\" class=\"image-about\">
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-item text-content class padding-right\">
\t\t\t\t\t<div class=\"text-width\">
\t\t\t\t\t\t<p class=\"text-width\">";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "contenu", [], "any", false, false, false, 54);
                yield "</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
            }
            // line 62
            yield "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apropos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "<script>
\tdocument.addEventListener('DOMContentLoaded', (event) => {
let observer;
let options = {
root: null, // utilise le viewport comme zone de visibilité
rootMargin: '0px',
threshold: 0.1 // déclenche l'observer quand 10% de l'élément est visible
};

observer = new IntersectionObserver(handleIntersect, options);

// Sélectionner tous les éléments à observer
document.querySelectorAll('.card-about-us').forEach(section => {
observer.observe(section);
});

function handleIntersect(entries, observer) {
entries.forEach((entry, index) => {
if (entry.isIntersecting) { // Ajoute la classe 'is-visible'
entry.target.classList.add('card-' + (
index + 1
));
}
});
}
});
</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "about-us/show.html.twig";
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
        return array (  223 => 64,  208 => 62,  197 => 54,  190 => 50,  184 => 47,  180 => 46,  177 => 45,  174 => 44,  165 => 38,  158 => 34,  151 => 30,  146 => 29,  144 => 28,  132 => 19,  128 => 18,  124 => 17,  114 => 11,  97 => 10,  92 => 7,  82 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\tÀ propos
{% endblock %}

{% block body %}


</head>
\t{% for apropos in aboutUs %}
\t<div class=\"banner\" style=\"background-image: url('{{ asset('upload/' ~ apropos.image) }}');\">
\t</div>


<div class=\"card-container\">
\t\t<div class=\"card-about-us\">
\t\t\t<a href=\"#{{ apropos.titre }}\" class=\"disable-link\">
\t\t\t\t<h2>{{ apropos.titre }}</h2>
\t\t\t\t<div class=\"about-us-p\">{{ apropos.contenu|raw }}</div>
\t\t\t</a>
\t\t</div>





</div>
\t{% if loop.index % 2 == 1 %}
\t\t<div class=\"section\" id=\"{{ apropos.titre }}\">
\t\t\t<h2 class=\"about-us-title \">{{ apropos.titre }}</h2>
\t\t\t<div class=\"flex-container\">
\t\t\t\t<div class=\"flex-item text-content class padding-right\">
\t\t\t\t\t<div class=\"text-width\">
\t\t\t\t\t\t<p>{{ apropos.contenu|raw }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-item\">
\t\t\t\t\t<img src=\"{{ asset('upload/' ~ apropos.image) }}\" alt=\"Notre Histoire\" class=\"image-about\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% endif %}
\t{% if loop.index % 2 == 0 %}
\t\t<!-- Que faisons-nous ? -->
\t\t<div class=\"section\" id=\"{{ apropos.titre }}\">
\t\t\t<h2 class=\"about-us-title animate__animated animate__backInRight \" id=\"what-do-we-do\">{{ apropos.titre }}</h2>
\t\t\t<div class=\"flex-container\">
\t\t\t\t<div class=\"flex-item\">
\t\t\t\t\t<img src=\"{{ asset('upload/' ~ apropos.image) }}\" alt=\"Notre Histoire\" class=\"image-about\">
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-item text-content class padding-right\">
\t\t\t\t\t<div class=\"text-width\">
\t\t\t\t\t\t<p class=\"text-width\">{{ apropos.contenu|raw }}</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% endif %}

{% endfor %}
<script>
\tdocument.addEventListener('DOMContentLoaded', (event) => {
let observer;
let options = {
root: null, // utilise le viewport comme zone de visibilité
rootMargin: '0px',
threshold: 0.1 // déclenche l'observer quand 10% de l'élément est visible
};

observer = new IntersectionObserver(handleIntersect, options);

// Sélectionner tous les éléments à observer
document.querySelectorAll('.card-about-us').forEach(section => {
observer.observe(section);
});

function handleIntersect(entries, observer) {
entries.forEach((entry, index) => {
if (entry.isIntersecting) { // Ajoute la classe 'is-visible'
entry.target.classList.add('card-' + (
index + 1
));
}
});
}
});
</script>{% endblock %}
", "about-us/show.html.twig", "/Users/dvpt/Desktop/ong2/templates/about-us/show.html.twig");
    }
}
