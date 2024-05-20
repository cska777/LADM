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

/* mailer/default.html.twig */
class __TwigTemplate_eb572ef63f153a7759e9377596601917 extends Template
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
        yield "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["subject"] ?? null), "html", null, true);
        yield "</title>
</head>
<body>
    <h3>";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["subject"] ?? null), "html", null, true);
        yield "</h3>
    <p>Hello,</p>

    <p>";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["body"] ?? null), "html", null, true);
        yield "</p>
    <p>Thank you.</p>
</body>
</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mailer/default.html.twig";
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
        return array (  55 => 10,  49 => 7,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailer/default.html.twig", "/Users/dvpt/Desktop/ong2/templates/mailer/default.html.twig");
    }
}
