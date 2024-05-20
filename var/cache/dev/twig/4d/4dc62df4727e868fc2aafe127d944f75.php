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

/* fragment/_footer.html.twig */
class __TwigTemplate_c33ab6cca2ce7a8063d856e84c73a8a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragment/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragment/_footer.html.twig"));

        // line 1
        yield "<footer class=\"bg-body-tertiary text-center\">
\t<div class=\"container-fluid p-1\" id=\"footer-1\">
\t\t<section class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-4 pt-5\">
\t\t\t\t<!-- Logo à gauche -->
\t\t\t\t<a class=\"mt-2 mt-lg-0\" href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
\t\t\t\t\t<img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/img/logo/logo.png"), "html", null, true);
        yield "\" height=\"70\" class=\"rounded-circle mb-4\" alt=\" Logo\" loading=\"lazy\"/>
\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t\t\tPhrase d'accroche de l'ong</p>
\t\t\t\t<a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_don");
        yield "\" id=\"bouton-don\" class=\"btn btn-primary fw-bold\">FAIRE UN DON</a>
\t\t\t</div>
\t\t\t<div class=\"col-1 d-flex pt-5\">
\t\t\t\t<div class=\"vl\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-7 p-5\">
\t\t\t\t<h2 class=\" pb-3 footerh2\">LES AMIS DU MONDE</h2>
\t\t\t\t<p class=\"historique\">L'association crée au début des années 1990 par le Dr ZIDAGO Dja Lazare. Elle a pour objectifs de promouvoir le réaminagement de l'esprit africain en aidant les populations locales a devenir autonome
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>
\t\t<section>
\t\t\t<div class=\"row m-5 linksFooter\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t<a class=\"footer-1-link\" href=\"";
        // line 26
        yield "about_us";
        yield "\">QUI SOMMES NOUS ?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t<a class=\"footer-1-link\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adhesion");
        yield "\">REJOIGNEZ NOUS</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t<a class=\"footer-1-link\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">NOUS CONTACTER</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t<a class=\"footer-1-link\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_don");
        yield "\">AGIR AVEC NOUS</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"m-2\">
\t\t\t<a data-mdb-ripple-init class=\"btn btn-outline btn-floating m-1 me-5 bg-white\" href=\"#!\" role=\"button\">
\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t</a>
\t\t\t<a data-mdb-ripple-init class=\"btn btn-outline btn-floating m-1 me-5 bg-white\" href=\"#!\" role=\"button\">
\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t</a>
\t\t\t<a data-mdb-ripple-init class=\"btn btn-outline btn-floating m-1 me-5 bg-white\" href=\"#!\" role=\"button\">
\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t</a>
\t\t</section>
\t</div>
\t<div class=\"row justify-content-center p-3\" id=\"footer-2\">
\t\t<div class=\"col-5 text-center d-flex justify-content-around \">
\t\t\t<a class=\"footer-2-link\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_legal_notice");
        yield "\">Mentions Légales</a>
\t\t\t<a class=\"footer-2-link\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_privacy");
        yield "\">Politique de Confidentialité</a>
\t\t</div>
\t</div>
</footer>
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
        return "fragment/_footer.html.twig";
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
        return array (  123 => 54,  119 => 53,  98 => 35,  92 => 32,  86 => 29,  80 => 26,  63 => 12,  56 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-body-tertiary text-center\">
\t<div class=\"container-fluid p-1\" id=\"footer-1\">
\t\t<section class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-4 pt-5\">
\t\t\t\t<!-- Logo à gauche -->
\t\t\t\t<a class=\"mt-2 mt-lg-0\" href=\"{{path(\"app_home\")}}\">
\t\t\t\t\t<img src=\"{{asset(\"styles/img/logo/logo.png\")}}\" height=\"70\" class=\"rounded-circle mb-4\" alt=\" Logo\" loading=\"lazy\"/>
\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t\t\tPhrase d'accroche de l'ong</p>
\t\t\t\t<a href=\"{{ path(\"app_don\") }}\" id=\"bouton-don\" class=\"btn btn-primary fw-bold\">FAIRE UN DON</a>
\t\t\t</div>
\t\t\t<div class=\"col-1 d-flex pt-5\">
\t\t\t\t<div class=\"vl\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-7 p-5\">
\t\t\t\t<h2 class=\" pb-3 footerh2\">LES AMIS DU MONDE</h2>
\t\t\t\t<p class=\"historique\">L'association crée au début des années 1990 par le Dr ZIDAGO Dja Lazare. Elle a pour objectifs de promouvoir le réaminagement de l'esprit africain en aidant les populations locales a devenir autonome
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>
\t\t<section>
\t\t\t<div class=\"row m-5 linksFooter\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t<a class=\"footer-1-link\" href=\"{{   ('about_us') }}\">QUI SOMMES NOUS ?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t<a class=\"footer-1-link\" href=\"{{ path('app_adhesion') }}\">REJOIGNEZ NOUS</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t<a class=\"footer-1-link\" href=\"{{path('app_contact')}}\">NOUS CONTACTER</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t<a class=\"footer-1-link\" href=\"{{ path(\"app_don\") }}\">AGIR AVEC NOUS</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"m-2\">
\t\t\t<a data-mdb-ripple-init class=\"btn btn-outline btn-floating m-1 me-5 bg-white\" href=\"#!\" role=\"button\">
\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t</a>
\t\t\t<a data-mdb-ripple-init class=\"btn btn-outline btn-floating m-1 me-5 bg-white\" href=\"#!\" role=\"button\">
\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t</a>
\t\t\t<a data-mdb-ripple-init class=\"btn btn-outline btn-floating m-1 me-5 bg-white\" href=\"#!\" role=\"button\">
\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t</a>
\t\t</section>
\t</div>
\t<div class=\"row justify-content-center p-3\" id=\"footer-2\">
\t\t<div class=\"col-5 text-center d-flex justify-content-around \">
\t\t\t<a class=\"footer-2-link\" href=\"{{path(\"app_legal_notice\")}}\">Mentions Légales</a>
\t\t\t<a class=\"footer-2-link\" href=\"{{path(\"app_privacy\")}}\">Politique de Confidentialité</a>
\t\t</div>
\t</div>
</footer>
", "fragment/_footer.html.twig", "/Users/dvpt/Desktop/ong2/templates/fragment/_footer.html.twig");
    }
}
