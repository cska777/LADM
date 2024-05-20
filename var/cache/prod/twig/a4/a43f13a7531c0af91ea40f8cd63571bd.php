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
class __TwigTemplate_786cf1b254a266a8ed1f8b055d8b9bed extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4)) {
            // line 5
            yield "    ";
            if ( !($context["isAdhesionPaye"] ?? null)) {
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
        yield from         $this->loadTemplate("newsletter/subscribe.html.twig", "home/index.html.twig", 16)->unwrap()->yield($context);
        // line 17
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
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscribe");
        yield "\" class=\"btn btn-primary btn-lg\">Subscribe</a>
            </div>
        </div>
        </div>
    </div>
    </section>
    &nbsp;

";
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
        return array (  96 => 30,  81 => 17,  79 => 16,  77 => 15,  75 => 14,  73 => 13,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/home/index.html.twig");
    }
}
