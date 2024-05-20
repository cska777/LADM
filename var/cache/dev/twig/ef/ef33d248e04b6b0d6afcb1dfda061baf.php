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

/* fragment/_sidebar.html.twig */
class __TwigTemplate_14b615c839c4260dbfcda786df5586d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragment/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragment/_sidebar.html.twig"));

        // line 1
        yield "
    <div class=\"wrapper\">
        <div class=\"sidebar\">
            <!-- Contenu de la barre de navigation -->
            <div class=\"sidenav\">
                <div class=\"side\"><a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_article");
        yield "\">GERER LES ARTICLES</a></div>
                <div class=\"side\"><a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" >GERER LES ADMINS</a></div>
                <div class=\"side\"><a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adhesion");
        yield "\">GERER LES ADHERENTS</a></div>
            </div>
        </div>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "fragment/_sidebar.html.twig";
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
        return array (  59 => 8,  55 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <div class=\"wrapper\">
        <div class=\"sidebar\">
            <!-- Contenu de la barre de navigation -->
            <div class=\"sidenav\">
                <div class=\"side\"><a href=\"{{path(\"index_article\")}}\">GERER LES ARTICLES</a></div>
                <div class=\"side\"><a href=\"{{path('app_contact')}}\" >GERER LES ADMINS</a></div>
                <div class=\"side\"><a href=\"{{path('app_adhesion')}}\">GERER LES ADHERENTS</a></div>
            </div>
        </div>
    </div>", "fragment/_sidebar.html.twig", "/Users/dvpt/Desktop/ong2/templates/fragment/_sidebar.html.twig");
    }
}
