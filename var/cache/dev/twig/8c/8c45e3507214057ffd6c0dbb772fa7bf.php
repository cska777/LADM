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
class __TwigTemplate_3dc86e750765f069bfe3d47ecee02b6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/presentation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/presentation.html.twig"));

        // line 1
        yield "<section id=\"presentation\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aboutUsImage"]) || array_key_exists("aboutUsImage", $context) ? $context["aboutUsImage"] : (function () { throw new RuntimeError('Variable "aboutUsImage" does not exist.', 2, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aboutUs"]) || array_key_exists("aboutUs", $context) ? $context["aboutUs"] : (function () { throw new RuntimeError('Variable "aboutUs" does not exist.', 10, $this->source); })()));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  93 => 19,  90 => 18,  81 => 15,  75 => 12,  72 => 11,  68 => 10,  64 => 8,  55 => 5,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"presentation\">
\t{% for aboutUs in aboutUsImage %}

\t\t<div id=\"left-side\">
\t\t\t<img src=\"{{ asset('upload/' ~ aboutUs.image) }}\" alt=\"\" id=\"img-presentation\">
\t\t</div>
\t{% endfor %}

\t<div id=\"right-side\">
\t\t{% for aboutus in aboutUs %}
\t\t\t<h3>
\t\t\t\t{{ aboutus.titre }}
\t\t\t</h3>
\t\t\t<p class=\"about-us-presentation\">
\t\t\t\t{{ aboutus.contenu|striptags|raw }}</p>
\t\t\t<hr>
\t\t{% endfor %}

\t\t<a class=\"btn btn-primary \" href=\"{{ path('about_us')}}\">en savoir plus...</a>
\t</div>
</section>
", "home/presentation.html.twig", "/Users/dvpt/Desktop/ong2/templates/home/presentation.html.twig");
    }
}
