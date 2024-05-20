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
class __TwigTemplate_14fb3b39cc997c04041e09669507296e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/connexion.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "connexion";
        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (($context["error"] ?? null)) {
            // line 14
            yield "        <div class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            yield "</div>
    ";
        }
        // line 16
        yield "
    ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17)) {
            // line 18
            yield "        <div class=\"mb-3\">
            You are logged in as ";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "userIdentifier", [], "any", false, false, false, 19), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["last_username"] ?? null), "html", null, true);
        yield "\"name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
        </div>
        <label for=\"inputPassword\" class='my-3'>Mot de passe</label>
        <div class=\"form-group mx-auto w-50\">
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\"
            value=\"";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/img/hands.jpeg"), "html", null, true);
        yield ");
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    position: relative;
    box-sizing: border-box;
}
</style>
";
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
        return array (  156 => 72,  137 => 56,  131 => 53,  114 => 39,  104 => 32,  100 => 30,  94 => 22,  86 => 19,  83 => 18,  81 => 17,  78 => 16,  72 => 14,  70 => 13,  60 => 5,  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/connexion.html.twig", "/Users/dvpt/Desktop/ong2/templates/security/connexion.html.twig");
    }
}
