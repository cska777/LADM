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
class __TwigTemplate_e4358e98f9ea34fc38d02075d8f421b0 extends Template
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
        // line 1
        yield "    <p>Bonjour,</p>

    <p>Vous avez demandé une réinitialisation de votre mot de passe sur notre site. Pour cela, veuillez cliquer sur le bouton ci-dessous :</p>

    <a href=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\" style=\"background-color: #007bff; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; margin: 4px 2px; cursor: pointer; border-radius: 4px;\">Réinitialiser mon mot de passe</a>

    <p>Si vous n'avez pas demandé de réinitialisation de mot de passe, merci d'ignorer ce message.</p>

    <p>Cordialement,</p>

    <p>L'équipe de notre site</p>

";
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
        return array (  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/email.html.twig", "/Users/dvpt/Desktop/ong2/templates/reset_password/email.html.twig");
    }
}
