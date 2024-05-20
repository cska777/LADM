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

/* home/presentation.html.twig */
class __TwigTemplate_a7a3b390732582415c6a65507169beaa extends Template
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
        yield "<section id=\"presentation\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aboutUsImage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aboutUs"]) {
            // line 3
            yield "
\t\t<div id=\"left-side\">
\t\t\t<img src=\"";
            // line 5
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "image", [], "any", false, false, false, 5))), "html", null, true);
            yield "\" alt=\"\" id=\"img-presentation\">
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aboutUs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "
\t<div id=\"right-side\">
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aboutUs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aboutus"]) {
            // line 11
            yield "\t\t\t<h3>
\t\t\t\t";
            // line 12
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "titre", [], "any", false, false, false, 12), "html", null, true);
            yield "
\t\t\t</h3>
\t\t\t<p class=\"about-us-presentation\">
\t\t\t\t";
            // line 15
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["aboutus"], "contenu", [], "any", false, false, false, 15));
            yield "</p>
\t\t\t<hr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aboutus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
\t\t<a class=\"btn btn-primary \" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about_us");
        yield "\">en savoir plus...</a>
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
        return "home/presentation.html.twig";
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
        return array (  87 => 19,  84 => 18,  75 => 15,  69 => 12,  66 => 11,  62 => 10,  58 => 8,  49 => 5,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/presentation.html.twig", "/Users/dvpt/Desktop/ong2/templates/home/presentation.html.twig");
    }
}
