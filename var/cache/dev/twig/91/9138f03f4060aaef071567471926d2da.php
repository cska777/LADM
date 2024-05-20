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
class __TwigTemplate_80fa7330f5dc8ac6cc0d3b9129770f02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/message.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/message.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "newsletter/message.html.twig", 1);
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

        yield "Confirmation Message";
        
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
        yield "&nbsp;
&nbsp;
<div class=\"container\">
    <div class=\"row justify-content-center mt-5\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                ";
        // line 12
        if (((isset($context["messageType"]) || array_key_exists("messageType", $context) ? $context["messageType"] : (function () { throw new RuntimeError('Variable "messageType" does not exist.', 12, $this->source); })()) == "success")) {
            // line 13
            yield "                    <div class=\"card-header bg-success text-white\">Success</div>
                ";
        } elseif ((        // line 14
(isset($context["messageType"]) || array_key_exists("messageType", $context) ? $context["messageType"] : (function () { throw new RuntimeError('Variable "messageType" does not exist.', 14, $this->source); })()) == "error")) {
            // line 15
            yield "                    <div class=\"card-header bg-danger text-white\">Error</div>
                ";
        } elseif ((        // line 16
(isset($context["messageType"]) || array_key_exists("messageType", $context) ? $context["messageType"] : (function () { throw new RuntimeError('Variable "messageType" does not exist.', 16, $this->source); })()) == "info")) {
            // line 17
            yield "                    <div class=\"card-header bg-info text-white\">Info</div>
                ";
        }
        // line 19
        yield "                <div class=\"card-body\">
                    <p>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
                ";
        // line 22
        if ((isset($context["autoRedirect"]) || array_key_exists("autoRedirect", $context) ? $context["autoRedirect"] : (function () { throw new RuntimeError('Variable "autoRedirect" does not exist.', 22, $this->source); })())) {
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  138 => 32,  131 => 28,  124 => 23,  122 => 22,  117 => 20,  114 => 19,  110 => 17,  108 => 16,  105 => 15,  103 => 14,  100 => 13,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Confirmation Message{% endblock %}

{% block body %}
&nbsp;
&nbsp;
<div class=\"container\">
    <div class=\"row justify-content-center mt-5\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                {% if messageType == 'success' %}
                    <div class=\"card-header bg-success text-white\">Success</div>
                {% elseif messageType == 'error' %}
                    <div class=\"card-header bg-danger text-white\">Error</div>
                {% elseif messageType == 'info' %}
                    <div class=\"card-header bg-info text-white\">Info</div>
                {% endif %}
                <div class=\"card-body\">
                    <p>{{ message }}</p>
                </div>
                {% if autoRedirect %}
                    <div class=\"card-footer\">
                        <small>You will be redirected in a few seconds...</small>
                    </div>
                    <script>
                        setTimeout(function() {
                            window.location.href = \"{{ path('app_home') }}\";
                        }, 5000); // 5000 milliseconds = 5 seconds
                    </script>
                {% endif %}
            </div>
        </div>
    </div>
</div>
&nbsp;
&nbsp;
{% endblock %}
", "newsletter/message.html.twig", "/Users/dvpt/Desktop/ong2/templates/newsletter/message.html.twig");
    }
}
