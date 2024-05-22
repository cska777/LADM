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
class __TwigTemplate_e344fae663c77b56b5789cb0cba66c48 extends Template
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
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["aboutUs"]) || array_key_exists("aboutUs", $context) ? $context["aboutUs"] : (function () { throw new RuntimeError('Variable "aboutUs" does not exist.', 2, $this->source); })()), 0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["apropos"]) {
            // line 3
            yield "
        <div id=\"left-side\">
            <img src=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "image", [], "any", false, false, false, 5))), "html", null, true);
            yield "\" alt=\"\" id=\"img-presentation\">
        </div>


        <div id=\"right-side\">
            <h3>
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "titre", [], "any", false, false, false, 11), "html", null, true);
            yield "
            </h3>
            <p class=\"about-us-presentation\">
                ";
            // line 14
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["apropos"], "contenu", [], "any", false, false, false, 14));
            yield "</p>
            <hr>


        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apropos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "</section>

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
        return array (  82 => 20,  70 => 14,  64 => 11,  55 => 5,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"presentation\">
    {% for apropos in aboutUs|slice(0, 2) %}

        <div id=\"left-side\">
            <img src=\"{{ asset('upload/' ~ apropos.image) }}\" alt=\"\" id=\"img-presentation\">
        </div>


        <div id=\"right-side\">
            <h3>
                {{ apropos.titre }}
            </h3>
            <p class=\"about-us-presentation\">
                {{ apropos.contenu|striptags|raw }}</p>
            <hr>


        </div>
    {% endfor %}
</section>

", "home/presentation.html.twig", "/Users/dvpt/Desktop/ong2/templates/home/presentation.html.twig");
    }
}
