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

/* user/Inscription.html.twig */
class __TwigTemplate_3f950845cd27f62b9de97324a8718715 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/Inscription.html.twig", 1);
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

        yield "Inscription";
        
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
\t<div class=\"container w-75\">
        
        <div id=\"formPersPhy\">
        <h1 class=\"text-center mb-0\">Inscription</h1>
            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12), 'row');
        yield "
            <div class=\"d-flex civiliteSelectDiv\" style=\"\">
                <div class='w-25'>
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "civilite", [], "any", false, false, false, 15), 'row');
        yield "
                </div>
                <div class='w-100 ms-5'>
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'row');
        yield "
                </div>
            </div>
            <div class=\"d-flex civiliteSelectDiv\" style=\"\">
                <div class='w-100'>
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "siren", [], "any", false, false, false, 23), 'row');
        yield "
                </div>
                <div class='w-100 ms-5'>
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "formeJuridique", [], "any", false, false, false, 26), 'row');
        yield "
                </div>
            </div>
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'row');
        yield "
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'row');
        yield "
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "telephone", [], "any", false, false, false, 31), 'row');
        yield "
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), 'row');
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "complementAdresse", [], "any", false, false, false, 33), 'row');
        yield "
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "codePostal", [], "any", false, false, false, 34), 'row');
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "ville", [], "any", false, false, false, 35), 'row');
        yield "
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "pays", [], "any", false, false, false, 36), 'row');
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'row');
        yield "
            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
            ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        yield "
        </div>
\t</div>
</section>
<script>
    // Sélectionnez les éléments à masquer/afficher
    const adherentFields = document.querySelectorAll('#user_civilite, #user_prenom');
    const entrepriseFields = document.querySelectorAll('#user_siren, #user_formeJuridique');

    // Masquez les champs pour le type \"entreprise\" par défaut
    entrepriseFields.forEach(field => {
        field.style.display = 'none';
    });

    // Ajoutez un écouteur d'événement sur le champ \"type\"
    const typeSelect = document.querySelector('#user_type');
    typeSelect.addEventListener('change', function() {
        if (this.value === 'adherent') {
            // Affichez les champs pour le type \"adhérent\"
            adherentFields.forEach(field => {
                field.style.display = 'block';
            });
            // Masquez les champs pour le type \"entreprise\"
            entrepriseFields.forEach(field => {
                field.style.display = 'none';
            });
        } else if (this.value === 'entreprise') {
            // Masquez les champs pour le type \"adhérent\"
            adherentFields.forEach(field => {
                field.style.display = 'none';
            });
            // Affichez les champs pour le type \"entreprise\"
            entrepriseFields.forEach(field => {
                field.style.display = 'block';
            });
        }
    });
</script>
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
        return "user/Inscription.html.twig";
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
        return array (  170 => 39,  165 => 37,  161 => 36,  157 => 35,  153 => 34,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  133 => 29,  127 => 26,  121 => 23,  113 => 18,  107 => 15,  101 => 12,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
<section id='sectionAdhesion' style=\"margin-top:8%\">
\t<div class=\"container w-75\">
        
        <div id=\"formPersPhy\">
        <h1 class=\"text-center mb-0\">Inscription</h1>
            {{ form_start(form) }}
            {{ form_row(form.type) }}
            <div class=\"d-flex civiliteSelectDiv\" style=\"\">
                <div class='w-25'>
                    {{ form_row(form.civilite) }}
                </div>
                <div class='w-100 ms-5'>
                    {{ form_row(form.prenom) }}
                </div>
            </div>
            <div class=\"d-flex civiliteSelectDiv\" style=\"\">
                <div class='w-100'>
                    {{ form_row(form.siren) }}
                </div>
                <div class='w-100 ms-5'>
                    {{ form_row(form.formeJuridique) }}
                </div>
            </div>
            {{ form_row(form.nom) }}
            {{ form_row(form.email) }}
            {{ form_row(form.telephone) }}
            {{ form_row(form.adresse) }}
            {{ form_row(form.complementAdresse) }}
            {{ form_row(form.codePostal) }}
            {{ form_row(form.ville) }}
            {{ form_row(form.pays) }}
            {{ form_row(form.password) }}
            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
            {{ form_end(form) }}
        </div>
\t</div>
</section>
<script>
    // Sélectionnez les éléments à masquer/afficher
    const adherentFields = document.querySelectorAll('#user_civilite, #user_prenom');
    const entrepriseFields = document.querySelectorAll('#user_siren, #user_formeJuridique');

    // Masquez les champs pour le type \"entreprise\" par défaut
    entrepriseFields.forEach(field => {
        field.style.display = 'none';
    });

    // Ajoutez un écouteur d'événement sur le champ \"type\"
    const typeSelect = document.querySelector('#user_type');
    typeSelect.addEventListener('change', function() {
        if (this.value === 'adherent') {
            // Affichez les champs pour le type \"adhérent\"
            adherentFields.forEach(field => {
                field.style.display = 'block';
            });
            // Masquez les champs pour le type \"entreprise\"
            entrepriseFields.forEach(field => {
                field.style.display = 'none';
            });
        } else if (this.value === 'entreprise') {
            // Masquez les champs pour le type \"adhérent\"
            adherentFields.forEach(field => {
                field.style.display = 'none';
            });
            // Affichez les champs pour le type \"entreprise\"
            entrepriseFields.forEach(field => {
                field.style.display = 'block';
            });
        }
    });
</script>
{% endblock %}
", "user/Inscription.html.twig", "/Users/dvpt/Desktop/ong2/templates/user/Inscription.html.twig");
    }
}
