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

/* home/carousel.html.twig */
class __TwigTemplate_ad87edf4978315ed1295bc206da1af6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/carousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/carousel.html.twig"));

        // line 1
        yield "<div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"3000\">
    <div class=\"carousel-inner\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["newzs"]) || array_key_exists("newzs", $context) ? $context["newzs"] : (function () { throw new RuntimeError('Variable "newzs" does not exist.', 3, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["newz"]) {
            // line 4
            yield "            <div class=\"carousel-item ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 4)) {
                yield "active";
            }
            yield "\">
                <img class=\"d-block w-100 image-carrousel\" src=\"";
            // line 5
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "image", [], "any", false, false, false, 5))), "html", null, true);
            yield "\" alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "titre", [], "any", false, false, false, 5), "html", null, true);
            yield "\">
                <div class=\"carousel-caption d-none d-md-block custom-carousel-caption\">
                    <h4 class=\"text\" style=\"white-space: pre-line;\">";
            // line 7
            yield CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "contenu", [], "any", false, false, false, 7);
            yield "</h4>
                    ";
            // line 8
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "type", [], "any", false, false, false, 8) == "Don")) {
                // line 9
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_don");
                yield "\" id=\"bouton-don\" class=\"btn btn-warning btn-lg\">FAIRE UN DON</a>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 10
$context["newz"], "type", [], "any", false, false, false, 10) == "article")) {
                // line 11
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites");
                yield "\" id=\"bouton-act\" class=\"btn btn-primary btn-lg\">VOIR LES ACTUALITES</a>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 12
$context["newz"], "type", [], "any", false, false, false, 12) == "autre")) {
                // line 13
                yield "                        <a href=\"#\" id=\"bouton-autre\" class=\"btn btn-secondary btn-lg\">AUTRE ACTION</a>
                    ";
            }
            // line 15
            yield "                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    </div>
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Previous</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Next</span>
    </button>
</div>

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
        return "home/carousel.html.twig";
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
        return array (  119 => 18,  103 => 15,  99 => 13,  97 => 12,  92 => 11,  90 => 10,  85 => 9,  83 => 8,  79 => 7,  72 => 5,  65 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"3000\">
    <div class=\"carousel-inner\">
        {% for newz in newzs %}
            <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                <img class=\"d-block w-100 image-carrousel\" src=\"{{ asset('upload/' ~ newz.image) }}\" alt=\"{{ newz.titre }}\">
                <div class=\"carousel-caption d-none d-md-block custom-carousel-caption\">
                    <h4 class=\"text\" style=\"white-space: pre-line;\">{{ newz.contenu|raw }}</h4>
                    {% if newz.type == 'Don' %}
                        <a href=\"{{ path(\"app_don\") }}\" id=\"bouton-don\" class=\"btn btn-warning btn-lg\">FAIRE UN DON</a>
                    {% elseif newz.type == 'article' %}
                        <a href=\"{{ path(\"actualites\")}}\" id=\"bouton-act\" class=\"btn btn-primary btn-lg\">VOIR LES ACTUALITES</a>
                    {% elseif newz.type == 'autre' %}
                        <a href=\"#\" id=\"bouton-autre\" class=\"btn btn-secondary btn-lg\">AUTRE ACTION</a>
                    {% endif %}
                </div>
            </div>
        {% endfor %}
    </div>
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Previous</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Next</span>
    </button>
</div>

", "home/carousel.html.twig", "/Users/dvpt/Desktop/ong2/templates/home/carousel.html.twig");
    }
}
