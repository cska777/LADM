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

/* security/reset_mdp_request.html.twig */
class __TwigTemplate_f44a0c6ed4f8a746065857e2d5480e54 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/reset_mdp_request.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Demande de récupération de mot de passe";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"addE container\">
    <div class=\"row g-0\">
        <div class=\"p-3\">
            <div class = \"text-center\">
                <h4>Demande de récupération de mot de passe</h1>
            <hr>
            <h6>Vous avez oublier votre mot de passe ? Entrez votre adresse Email ci-dessous.</h6>
            </div>
            <form method=\"post\" class=\"log my-5\">
            <div id=\"formPersPhy\">
                ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestMdpForm"] ?? null), 'form_start');
        yield "
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestMdpForm"] ?? null), "email", [], "any", false, false, false, 17), 'row');
        yield "
                <div class=\"d-flex justify-content-center\">
                    <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                </div>
                ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestMdpForm"] ?? null), 'form_end');
        yield "
            </div>
            </form>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/reset_mdp_request.html.twig";
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
        return array (  83 => 21,  76 => 17,  72 => 16,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/reset_mdp_request.html.twig", "/Users/dvpt/Desktop/ong2/templates/security/reset_mdp_request.html.twig");
    }
}
