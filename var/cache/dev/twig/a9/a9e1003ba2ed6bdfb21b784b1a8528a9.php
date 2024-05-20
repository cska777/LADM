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

/* newz/show.html.twig */
class __TwigTemplate_c487c6dd198107c71f7f3b03eee111d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newz/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newz/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "newz/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Carousel";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container w-75\">
    <div class=\"Articles\">
        <h3 class=\"mb-5 text-center\">Carousel</h3>
        <div class=\"champ d-flex\">
            <h6 class=\"form-control\"><strong> Type : </strong>";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 10, $this->source); })()), "type", [], "any", false, false, false, 10), "html", null, true);
        yield "</h6>
            <h6 class=\"form-control mx-3\"><strong> Titre : </strong>";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "html", null, true);
        yield "</h6>
        </div>
        <div class=\"champ d-flex\">
            <h6 class=\"form-control me-2\"><strong> Auteur : </strong>";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 14, $this->source); })()), "auteur", [], "any", false, false, false, 14), "html", null, true);
        yield "</h6>
            <h6 class=\"form-control ms-2\"><strong> Date : </strong>";
        // line 15
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 15, $this->source); })()), "date", [], "any", false, false, false, 15)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 15, $this->source); })()), "date", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</h6>
        </div>
        <h6 class=\"form-control\"><strong> Image : </strong>";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17), "html", null, true);
        yield "</h6>
        <div class=\"form-group\">
            <label for=\"contenu\"><strong>Contenu:</strong></label>
            <textarea class=\"form-control\" rows=\"5\">";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 20, $this->source); })()), "contenu", [], "any", false, false, false, 20), "html", null, true);
        yield "</textarea>
        </div>
        <div class=\"row\">
            <div class=\"my-3 d-flex justify-content-around\">
                <a class=\"b_mod btn \"  href=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        yield "\"><i class=\"fa-regular fa-pen-to-square me-1\"></i>Modifier l'article</a>
                <a class=\"b_mod btn \" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"><i class=\"fa-solid fa-rotate-left\"></i> Retour</a>
            </div>
        </div>
    </div>
</div>
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
        return "newz/show.html.twig";
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
        return array (  132 => 25,  128 => 24,  121 => 20,  115 => 17,  110 => 15,  106 => 14,  100 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carousel{% endblock %}

{% block body %}
<div class=\"container w-75\">
    <div class=\"Articles\">
        <h3 class=\"mb-5 text-center\">Carousel</h3>
        <div class=\"champ d-flex\">
            <h6 class=\"form-control\"><strong> Type : </strong>{{ newz.type }}</h6>
            <h6 class=\"form-control mx-3\"><strong> Titre : </strong>{{ newz.titre }}</h6>
        </div>
        <div class=\"champ d-flex\">
            <h6 class=\"form-control me-2\"><strong> Auteur : </strong>{{ newz.auteur }}</h6>
            <h6 class=\"form-control ms-2\"><strong> Date : </strong>{{ newz.date ? newz.date|date('Y-m-d') : '' }}</h6>
        </div>
        <h6 class=\"form-control\"><strong> Image : </strong>{{ newz.image }}</h6>
        <div class=\"form-group\">
            <label for=\"contenu\"><strong>Contenu:</strong></label>
            <textarea class=\"form-control\" rows=\"5\">{{ newz.contenu }}</textarea>
        </div>
        <div class=\"row\">
            <div class=\"my-3 d-flex justify-content-around\">
                <a class=\"b_mod btn \"  href=\"{{ path('app_newz_edit', {'id': newz.id}) }}\"><i class=\"fa-regular fa-pen-to-square me-1\"></i>Modifier l'article</a>
                <a class=\"b_mod btn \" href=\"{{ path('app_user_index') }}\"><i class=\"fa-solid fa-rotate-left\"></i> Retour</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "newz/show.html.twig", "/Users/dvpt/Desktop/ong2/templates/newz/show.html.twig");
    }
}
