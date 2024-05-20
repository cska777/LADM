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

/* newsletter/message.html.twig */
class __TwigTemplate_0b0dc372199feb4a61a4a6faf4630f9d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "newsletter/message.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Confirmation Message";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "&nbsp;
&nbsp;
<div class=\"container\">
    <div class=\"row justify-content-center mt-5\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                ";
        // line 12
        if ((($context["messageType"] ?? null) == "success")) {
            // line 13
            yield "                    <div class=\"card-header bg-success text-white\">Success</div>
                ";
        } elseif ((        // line 14
($context["messageType"] ?? null) == "error")) {
            // line 15
            yield "                    <div class=\"card-header bg-danger text-white\">Error</div>
                ";
        } elseif ((        // line 16
($context["messageType"] ?? null) == "info")) {
            // line 17
            yield "                    <div class=\"card-header bg-info text-white\">Info</div>
                ";
        }
        // line 19
        yield "                <div class=\"card-body\">
                    <p>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["message"] ?? null), "html", null, true);
        yield "</p>
                </div>
                ";
        // line 22
        if (($context["autoRedirect"] ?? null)) {
            // line 23
            yield "                    <div class=\"card-footer\">
                        <small>You will be redirected in a few seconds...</small>
                    </div>
                    <script>
                        setTimeout(function() {
                            window.location.href = \"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\";
                        }, 5000); // 5000 milliseconds = 5 seconds
                    </script>
                ";
        }
        // line 32
        yield "            </div>
        </div>
    </div>
</div>
&nbsp;
&nbsp;
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "newsletter/message.html.twig";
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
        return array (  108 => 32,  101 => 28,  94 => 23,  92 => 22,  87 => 20,  84 => 19,  80 => 17,  78 => 16,  75 => 15,  73 => 14,  70 => 13,  68 => 12,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/message.html.twig", "/Users/dvpt/Desktop/ong2/templates/newsletter/message.html.twig");
    }
}
