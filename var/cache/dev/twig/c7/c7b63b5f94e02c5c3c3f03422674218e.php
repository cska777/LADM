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

/* user/show.html.twig */
class __TwigTemplate_ee7a533c3f67a642a398c98b33212e42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        yield "Profil";
        
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
        yield "<div class=\"show container\">
    <div class=\"profil\">
        <h3 class=\"mb-5 text-center\"> Mes informations</h3>
        ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9) == "adherent")) {
            // line 10
            yield "            <div class=\"champ d-flex\">
                <h6 class=\"form-control me-5\"><strong> Civilité : </strong>";
            // line 11
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "civilite", [], "any", false, false, false, 11), "html", null, true);
            yield "</h6>
                <h6 class=\"form-control\"><strong> Prénom : </strong>";
            // line 12
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), "html", null, true);
            yield "</h6>
            </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14) == "entreprise")) {
            // line 15
            yield "            <div class=\"champ d-flex\">
                <h6 class=\"form-control me-5\"><strong> Siren : </strong>";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "siren", [], "any", false, false, false, 16), "html", null, true);
            yield "</h6>
                <h6 class=\"form-control\"><strong> Forme Juridique : </strong>";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "formeJuridique", [], "any", false, false, false, 17), "html", null, true);
            yield "</h6>
            </div>
        ";
        }
        // line 20
        yield "                <h6 class=\"form-control\"><strong> Nom ou Raison Sociale : </strong>";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</h6>
                <h6 class=\"form-control\"><strong> Email : </strong>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), "html", null, true);
        yield "</h6>      
                <h6 class=\"form-control\"><strong>Telephone : </strong>";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "telephone", [], "any", false, false, false, 22), "html", null, true);
        yield "</h6>
                <h6 class=\"form-control\"><strong>Adresse : </strong>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "adresse", [], "any", false, false, false, 23), "html", null, true);
        yield "</h6>
                <h6 class=\"form-control\"><strong>Complement d'adresse : </strong>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "complementAdresse", [], "any", false, false, false, 24), "html", null, true);
        yield "</h6>
            <div class=\"champ d-flex\">
                <h6 class=\"form-control me-5\"><strong>Code Postal : </strong> ";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "codePostal", [], "any", false, false, false, 26), "html", null, true);
        yield "</h6>
                <h6 class=\"form-control\"><strong>Ville : </strong>";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "ville", [], "any", false, false, false, 27), "html", null, true);
        yield "</h6>
            </div>
                <h6 class=\"form-control\"><strong>Pays : </strong>";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "pays", [], "any", false, false, false, 29), "html", null, true);
        yield "</h6>
        <div class=\"row\">
            <div class=\"mb-3 d-flex justify-content-around\">
                <a class=\"b_mod btn \"  href=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\"><i class=\"fa-regular fa-pen-to-square me-1\"></i>Modifier mon profil</a>
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
        return "user/show.html.twig";
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
        return array (  161 => 32,  155 => 29,  150 => 27,  146 => 26,  141 => 24,  137 => 23,  133 => 22,  129 => 21,  124 => 20,  118 => 17,  114 => 16,  111 => 15,  109 => 14,  104 => 12,  100 => 11,  97 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block body %}
<div class=\"show container\">
    <div class=\"profil\">
        <h3 class=\"mb-5 text-center\"> Mes informations</h3>
        {% if user.type == 'adherent' %}
            <div class=\"champ d-flex\">
                <h6 class=\"form-control me-5\"><strong> Civilité : </strong>{{ user.civilite }}</h6>
                <h6 class=\"form-control\"><strong> Prénom : </strong>{{ user.prenom }}</h6>
            </div>
        {% elseif user.type == 'entreprise' %}
            <div class=\"champ d-flex\">
                <h6 class=\"form-control me-5\"><strong> Siren : </strong>{{ user.siren }}</h6>
                <h6 class=\"form-control\"><strong> Forme Juridique : </strong>{{ user.formeJuridique }}</h6>
            </div>
        {% endif %}
                <h6 class=\"form-control\"><strong> Nom ou Raison Sociale : </strong>{{ user.nom }}</h6>
                <h6 class=\"form-control\"><strong> Email : </strong>{{ user.email }}</h6>      
                <h6 class=\"form-control\"><strong>Telephone : </strong>{{ user.telephone }}</h6>
                <h6 class=\"form-control\"><strong>Adresse : </strong>{{ user.adresse }}</h6>
                <h6 class=\"form-control\"><strong>Complement d'adresse : </strong>{{ user.complementAdresse}}</h6>
            <div class=\"champ d-flex\">
                <h6 class=\"form-control me-5\"><strong>Code Postal : </strong> {{ user.codePostal }}</h6>
                <h6 class=\"form-control\"><strong>Ville : </strong>{{ user.ville }}</h6>
            </div>
                <h6 class=\"form-control\"><strong>Pays : </strong>{{ user.pays }}</h6>
        <div class=\"row\">
            <div class=\"mb-3 d-flex justify-content-around\">
                <a class=\"b_mod btn \"  href=\"{{path('app_user_edit', {'id':user.id})}}\"><i class=\"fa-regular fa-pen-to-square me-1\"></i>Modifier mon profil</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

", "user/show.html.twig", "/Users/dvpt/Desktop/ong2/templates/user/show.html.twig");
    }
}
