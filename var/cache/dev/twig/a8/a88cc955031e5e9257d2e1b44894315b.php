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

/* home/index.html.twig */
class __TwigTemplate_f0cedadab885709fa8164f261417f7f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            yield "    ";
            if ( !(isset($context["isAdhesionPaye"]) || array_key_exists("isAdhesionPaye", $context) ? $context["isAdhesionPaye"] : (function () { throw new RuntimeError('Variable "isAdhesionPaye" does not exist.', 5, $this->source); })())) {
                // line 6
                yield "        <div class=\"alert alert-warning mb-0\" role=\"alert\">
            Votre adhésion n'a pas été payée. Veuillez payer votre adhésion pour éviter la désactivation du compte. <a href=\"";
                // line 7
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_adhesion");
                yield "\">Paiement</a>
        </div>
    ";
            }
            // line 10
            yield "    ";
        }
        // line 11
        yield from         $this->loadTemplate("home/carousel.html.twig", "home/index.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield from         $this->loadTemplate("home/presentation.html.twig", "home/index.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield from         $this->loadTemplate("home/map.html.twig", "home/index.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield from         $this->loadTemplate("home/actions.html.twig", "home/index.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield from         $this->loadTemplate("home/actualite.html.twig", "home/index.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "\t


    <!-- Subscription Section -->
    <section id=\"subscribe-section\" class=\"mt-5\">
    <div class=\"container\">
        <div class=\"card mx-auto\" style=\"max-width: 540px;\">
        <div class=\"card-body\">
            <h2 class=\"card-title mb-4 text-center\">Subscribe Now</h2>
            <p class=\"card-text mb-5 text-center\">
            Stay updated with our latest news and events by subscribing to our newsletter.
            </p>
            <div class=\"text-center\">
            <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscribe");
        yield "\" class=\"btn btn-primary btn-lg\">Subscribe</a>
            </div>
        </div>
        </div>
    </div>
    </section>
    &nbsp;

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
        return "home/index.html.twig";
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
        return array (  112 => 29,  97 => 16,  95 => 15,  93 => 14,  91 => 13,  89 => 12,  87 => 11,  84 => 10,  78 => 7,  75 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if app.user %}
    {% if not isAdhesionPaye %}
        <div class=\"alert alert-warning mb-0\" role=\"alert\">
            Votre adhésion n'a pas été payée. Veuillez payer votre adhésion pour éviter la désactivation du compte. <a href=\"{{path(\"app_paiement_adhesion\")}}\">Paiement</a>
        </div>
    {% endif %}
    {% endif %}
{% include 'home/carousel.html.twig' %}
{% include 'home/presentation.html.twig' %}
{% include 'home/map.html.twig' %}
{% include 'home/actions.html.twig' %}
{% include 'home/actualite.html.twig' %}
\t


    <!-- Subscription Section -->
    <section id=\"subscribe-section\" class=\"mt-5\">
    <div class=\"container\">
        <div class=\"card mx-auto\" style=\"max-width: 540px;\">
        <div class=\"card-body\">
            <h2 class=\"card-title mb-4 text-center\">Subscribe Now</h2>
            <p class=\"card-text mb-5 text-center\">
            Stay updated with our latest news and events by subscribing to our newsletter.
            </p>
            <div class=\"text-center\">
            <a href=\"{{ path('app_subscribe') }}\" class=\"btn btn-primary btn-lg\">Subscribe</a>
            </div>
        </div>
        </div>
    </div>
    </section>
    &nbsp;

{% endblock %}
", "home/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/home/index.html.twig");
    }
}
