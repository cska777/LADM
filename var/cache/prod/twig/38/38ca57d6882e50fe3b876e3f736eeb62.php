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
class __TwigTemplate_7ef3f76c3b16fa0d107850c551d98f57 extends Template
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
        // line 1
        yield "<section id=\"actualites\">
\t<div id=\"tete-actualites\">
\t\t<h2 class='mb-5'>Actualités</h2>
\t</div>
\t";
        // line 39
        yield "\t\t";
        $context["sortedArticles"] = Twig\Extension\CoreExtension::sortFilter($this->env, ($context["articles"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (((CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "date", [], "any", false, false, false, 39) < CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "date", [], "any", false, false, false, 39))) ? (1) : ( -1)); });
        // line 40
        yield "\t\t";
        $context["limitedArticles"] = Twig\Extension\CoreExtension::slice($this->env, ($context["sortedArticles"] ?? null), 0, 2);
        // line 41
        yield "
\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["limitedArticles"] ?? null));
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
        return array (  114 => 56,  111 => 55,  93 => 51,  89 => 50,  85 => 49,  80 => 47,  77 => 46,  73 => 44,  70 => 43,  53 => 42,  50 => 41,  47 => 40,  44 => 39,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/actualite.html.twig", "/Users/dvpt/Desktop/ong2/templates/home/actualite.html.twig");
    }
}
