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

/* reset_password/email.html.twig */
class __TwigTemplate_1b8891ddfb92d38d8098e833dc774103 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        // line 1
        yield "    <p>Bonjour,</p>

    <p>Vous avez demandé une réinitialisation de votre mot de passe sur notre site. Pour cela, veuillez cliquer sur le bouton ci-dessous :</p>

    <a href=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\" style=\"background-color: #007bff; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; margin: 4px 2px; cursor: pointer; border-radius: 4px;\">Réinitialiser mon mot de passe</a>

    <p>Si vous n'avez pas demandé de réinitialisation de mot de passe, merci d'ignorer ce message.</p>

    <p>Cordialement,</p>

    <p>L'équipe de notre site</p>

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
        return "reset_password/email.html.twig";
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
        return array (  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <p>Bonjour,</p>

    <p>Vous avez demandé une réinitialisation de votre mot de passe sur notre site. Pour cela, veuillez cliquer sur le bouton ci-dessous :</p>

    <a href=\"{{ url }}\" style=\"background-color: #007bff; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; margin: 4px 2px; cursor: pointer; border-radius: 4px;\">Réinitialiser mon mot de passe</a>

    <p>Si vous n'avez pas demandé de réinitialisation de mot de passe, merci d'ignorer ce message.</p>

    <p>Cordialement,</p>

    <p>L'équipe de notre site</p>

", "reset_password/email.html.twig", "/Users/dvpt/Desktop/ong2/templates/reset_password/email.html.twig");
    }
}
