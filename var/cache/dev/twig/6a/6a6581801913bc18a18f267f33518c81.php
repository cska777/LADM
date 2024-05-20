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

/* newz/edit.html.twig */
class __TwigTemplate_033c4eac4fb7d9966dccc95356221ee0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newz/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newz/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "newz/edit.html.twig", 1);
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

        yield "Modifier carousel";
        
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
        yield "<section id='sectionAdhesion' style=\"margin-top:8%\">
<div class=\"container w-75 \">
    <div class=\"profil my-5\" id=\"formPersPhy\">
     ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "
        <h3 class=\"mb-5 text-center\">Modifier carousel</h3>
        <div class=\"champ d-flex\">
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12), 'row');
        yield "
            <div class=\"mx-3\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), 'row');
        yield "
            </div>
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16), 'row');
        yield "
        </div>
        
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "auteur", [], "any", false, false, false, 19), 'row');
        yield "

        ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21)) {
            // line 22
            yield "            <div class=\"form-group ms-1 mb-3\">
                <label for=\"newz_image\">Image actuelle :</label>
                <img src=\"";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24))), "html", null, true);
            yield "\" alt=\"Miniature\" class=\"img-thumbnail\" style=\"max-width: 100px; max-height: 100px;\">
            </div>
        ";
        }
        // line 27
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28), 'row');
        yield "
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "contenu", [], "any", false, false, false, 29), 'row');
        yield "
    </div>
        <div class=\"d-flex justify-content-center mt-3\">
            <button type=\"submit\" class=\"btn btn-success me-5\">Mettre à jour le carousel</button>
    ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        yield "
            <form method=\"post\" action=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sur de vouloir supprimer votre compte ?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["newz"]) || array_key_exists("newz", $context) ? $context["newz"] : (function () { throw new RuntimeError('Variable "newz" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35))), "html", null, true);
        yield "\">
                <button class=\"btn btn-danger ms-5\">Supprimer le carousel</button>
            </form>
        </div>
</div>
</section>
<style>
    #formPersPhy input[type=\"file\"] {
        border: none;
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
        return "newz/edit.html.twig";
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
        return array (  156 => 35,  152 => 34,  148 => 33,  141 => 29,  137 => 28,  134 => 27,  128 => 24,  124 => 22,  122 => 21,  117 => 19,  111 => 16,  106 => 14,  101 => 12,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier carousel{% endblock %}

{% block body %}
<section id='sectionAdhesion' style=\"margin-top:8%\">
<div class=\"container w-75 \">
    <div class=\"profil my-5\" id=\"formPersPhy\">
     {{ form_start(form) }}
        <h3 class=\"mb-5 text-center\">Modifier carousel</h3>
        <div class=\"champ d-flex\">
                {{ form_row(form.type) }}
            <div class=\"mx-3\">
                {{ form_row(form.titre) }}
            </div>
                {{ form_row(form.date) }}
        </div>
        
        {{ form_row(form.auteur) }}

        {% if newz.image %}
            <div class=\"form-group ms-1 mb-3\">
                <label for=\"newz_image\">Image actuelle :</label>
                <img src=\"{{ asset('upload/' ~ newz.image) }}\" alt=\"Miniature\" class=\"img-thumbnail\" style=\"max-width: 100px; max-height: 100px;\">
            </div>
        {% endif %}

        {{ form_row(form.image) }}
        {{ form_row(form.contenu) }}
    </div>
        <div class=\"d-flex justify-content-center mt-3\">
            <button type=\"submit\" class=\"btn btn-success me-5\">Mettre à jour le carousel</button>
    {{ form_end(form) }}
            <form method=\"post\" action=\"{{ path('app_newz_delete', {'id': newz.id}) }}\" onsubmit=\"return confirm('Êtes-vous sur de vouloir supprimer votre compte ?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ newz.id) }}\">
                <button class=\"btn btn-danger ms-5\">Supprimer le carousel</button>
            </form>
        </div>
</div>
</section>
<style>
    #formPersPhy input[type=\"file\"] {
        border: none;
    }
</style>
{% endblock %}
", "newz/edit.html.twig", "/Users/dvpt/Desktop/ong2/templates/newz/edit.html.twig");
    }
}
