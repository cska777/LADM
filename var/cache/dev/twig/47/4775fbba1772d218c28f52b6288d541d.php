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

/* security/connexion.html.twig */
class __TwigTemplate_72965babb88d53e43ca5d6c5b2b223e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/connexion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/connexion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/connexion.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<div class=\"logT text-center container\">
    <h3 class=\"tlog my-4\"> SOYEZ LES PREMIERS INFORMÉS DE NOS ACTIONS </h3>
    <p>Votre adresse de messagerie est utilisée pour vous envoyer les lettres d'information d'AMIS DU MONDE.
    <br>
    Vous pouvez à tout moment utiliser le lien de désabonnement intégré dans la newsletter.</p>
</div>
<form method=\"post\" class=\"log my-5\">

    ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            yield "        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            yield "</div>
    ";
        }
        // line 16
        yield "
    ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            yield "        <div class=\"mb-3\">
            You are logged in as ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "userIdentifier", [], "any", false, false, false, 19), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        </div>
    ";
        }
        // line 22
        yield "    
<div class=\"login card container my-3 text-center\">
    <div class=\"card-body p-3\">
        <h1 class=\"lTitre my-3 font-weight-normal\">Se connecter</h1>
    ";
        // line 30
        yield "        <label for=\"inputEmail\" class='my-3'>Email</label>
        <div class=\"form-group mx-auto w-50\">
            <input type=\"email\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\"name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
        </div>
        <label for=\"inputPassword\" class='my-3'>Mot de passe</label>
        <div class=\"form-group mx-auto w-50\">
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\"
            value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
        >

        <div class=\"checkbox my-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Se rappeler de moi
            </label>
        </div>

        <button class=\"btn btn-lg btn-warning\" type=\"submit\">
            Se connecter
        </button>
    </div>
         <p>Vous avez oublié votre mot de passe?
         <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mdp_oublie");
        yield "\" class=\"log text-white\">Cliquez ici</a>
         <a href=\"\" class=\"text-white my-3\">Retour</a>
         <p>Vous n'avez pas de compte?
         <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adhesion");
        yield "\" class=\"log text-white\">S'enregister</a>
         </p>
</div>
</form>

<style>
body{
    /* min-height: 100vh;
    background-image: radial-gradient(#e5e5e5 1px, transparent 1px), radial-gradient(#e5e5e5 1px, transparent 1px);
    background-size: 26px 26px;
    background-position: 0 0, 13px 13px;
    background-color: #ffffff;
    position: relative;
    box-sizing: border-box; */

    min-height: 100vh;
    background-image: url(";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/img/hands.jpeg"), "html", null, true);
        yield ");
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    position: relative;
    box-sizing: border-box;
}
</style>
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
        return "security/connexion.html.twig";
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
        return array (  186 => 72,  167 => 56,  161 => 53,  144 => 39,  134 => 32,  130 => 30,  124 => 22,  116 => 19,  113 => 18,  111 => 17,  108 => 16,  102 => 14,  100 => 13,  90 => 5,  80 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}connexion{% endblock %}

{% block body %}
<div class=\"logT text-center container\">
    <h3 class=\"tlog my-4\"> SOYEZ LES PREMIERS INFORMÉS DE NOS ACTIONS </h3>
    <p>Votre adresse de messagerie est utilisée pour vous envoyer les lettres d'information d'AMIS DU MONDE.
    <br>
    Vous pouvez à tout moment utiliser le lien de désabonnement intégré dans la newsletter.</p>
</div>
<form method=\"post\" class=\"log my-5\">

    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
    
<div class=\"login card container my-3 text-center\">
    <div class=\"card-body p-3\">
        <h1 class=\"lTitre my-3 font-weight-normal\">Se connecter</h1>
    {# <div>
        <input type=\"checkbox\" id=\"entity_type\" name=\"entity_type\" value=\"entreprise\">
        <label for=\"entity_type\">Se connecter en tant qu'entreprise</label>
    </div> #}
        <label for=\"inputEmail\" class='my-3'>Email</label>
        <div class=\"form-group mx-auto w-50\">
            <input type=\"email\" value=\"{{ last_username }}\"name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
        </div>
        <label for=\"inputPassword\" class='my-3'>Mot de passe</label>
        <div class=\"form-group mx-auto w-50\">
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\"
            value=\"{{ csrf_token('authenticate') }}\"
        >

        <div class=\"checkbox my-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Se rappeler de moi
            </label>
        </div>

        <button class=\"btn btn-lg btn-warning\" type=\"submit\">
            Se connecter
        </button>
    </div>
         <p>Vous avez oublié votre mot de passe?
         <a href=\"{{path('mdp_oublie')}}\" class=\"log text-white\">Cliquez ici</a>
         <a href=\"\" class=\"text-white my-3\">Retour</a>
         <p>Vous n'avez pas de compte?
         <a href=\"{{ path('app_adhesion') }}\" class=\"log text-white\">S'enregister</a>
         </p>
</div>
</form>

<style>
body{
    /* min-height: 100vh;
    background-image: radial-gradient(#e5e5e5 1px, transparent 1px), radial-gradient(#e5e5e5 1px, transparent 1px);
    background-size: 26px 26px;
    background-position: 0 0, 13px 13px;
    background-color: #ffffff;
    position: relative;
    box-sizing: border-box; */

    min-height: 100vh;
    background-image: url({{ asset('styles/img/hands.jpeg') }});
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    position: relative;
    box-sizing: border-box;
}
</style>
{% endblock %}

", "security/connexion.html.twig", "/Users/dvpt/Desktop/ong2/templates/security/connexion.html.twig");
    }
}
