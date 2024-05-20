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

/* about-us/index.html.twig */
class __TwigTemplate_8e0e2ce4473e7ce90ed40d8885221df7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "about-us/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "\tA propos
";
        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', (event) => {
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
\t</script>

</head>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aboutUsImage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aboutUs"]) {
            // line 38
            yield "
\t<div class=\"banner\" style=\"background-image: url('";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "image", [], "any", false, false, false, 39))), "html", null, true);
            yield "');\">
\t\t<h1 class=\"center-p\">A propos de nous</h1>
\t</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aboutUs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "

<div class=\"card-container\">
\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aboutUs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aboutus"]) {
            // line 48
            yield "\t\t<div class=\"card-about-us\">
\t\t\t<a href=\"#";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "titre", [], "any", false, false, false, 49), "html", null, true);
            yield "\" class=\"disable-link\">
\t\t\t\t<h2>";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "titre", [], "any", false, false, false, 50), "html", null, true);
            yield "</h2>
\t\t\t\t<div class=\"about-us-p\">";
            // line 51
            yield CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "contenu", [], "any", false, false, false, 51);
            yield "</div>
\t\t\t</a>
\t\t</div>


\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aboutus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "

</div>
";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aboutUs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aboutus"]) {
            // line 61
            yield "\t";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61) % 2) == 1)) {
                // line 62
                yield "\t\t<div class=\"section\" id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "titre", [], "any", false, false, false, 62), "html", null, true);
                yield "\">
\t\t\t<h2 class=\"about-us-title \">";
                // line 63
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "titre", [], "any", false, false, false, 63), "html", null, true);
                yield "</h2>
\t\t\t<div class=\"flex-container\">
\t\t\t\t<div class=\"flex-item text-content class padding-right\">
\t\t\t\t\t<div class=\"text-width\">
\t\t\t\t\t\t<p>";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "contenu", [], "any", false, false, false, 67);
                yield "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-item\">
\t\t\t\t\t<img src=\"";
                // line 71
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "image", [], "any", false, false, false, 71))), "html", null, true);
                yield "\" alt=\"Notre Histoire\" class=\"image-about\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
            }
            // line 77
            yield "\t";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 77) % 2) == 0)) {
                // line 78
                yield "\t\t<!-- Que faisons-nous ? -->
\t\t<div class=\"section\" id=\"";
                // line 79
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "titre", [], "any", false, false, false, 79), "html", null, true);
                yield "\">
\t\t\t<h2 class=\"about-us-title animate__animated animate__backInRight \" id=\"what-do-we-do\">";
                // line 80
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "titre", [], "any", false, false, false, 80), "html", null, true);
                yield "</h2>
\t\t\t<div class=\"flex-container\">
\t\t\t\t<div class=\"flex-item\">
\t\t\t\t\t<img src=\"";
                // line 83
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "image", [], "any", false, false, false, 83))), "html", null, true);
                yield "\" alt=\"Notre Histoire\" class=\"image-about\">
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-item text-content class padding-right\">
\t\t\t\t\t<div class=\"text-width\">
\t\t\t\t\t\t<p class=\"text-width\">";
                // line 87
                yield CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "contenu", [], "any", false, false, false, 87);
                yield "</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
            }
            // line 95
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aboutus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "about-us/index.html.twig";
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
        return array (  230 => 95,  219 => 87,  212 => 83,  206 => 80,  202 => 79,  199 => 78,  196 => 77,  187 => 71,  180 => 67,  173 => 63,  168 => 62,  165 => 61,  148 => 60,  143 => 57,  131 => 51,  127 => 50,  123 => 49,  120 => 48,  116 => 47,  111 => 44,  100 => 39,  97 => 38,  93 => 37,  61 => 7,  57 => 6,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about-us/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/about-us/index.html.twig");
    }
}
