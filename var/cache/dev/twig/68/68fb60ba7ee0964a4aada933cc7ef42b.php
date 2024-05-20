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

/* adhesion/index.html.twig */
class __TwigTemplate_89399bf9c4d25c32c148ab45df6a9e5a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adhesion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adhesion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adhesion/index.html.twig", 1);
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

        // line 3
        yield "\tAdhésion
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "
\t<section id=\"sectionImg\">
\t\t<div>
\t\t\t<h1>Lorem ipsum dolor sit</h1>
\t\t\t<p id=\"textSectionImg\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non accusamus harum, facere libero suscipit accusantium nemo rem a inventore esse.</p>
\t\t</div>
\t</section>

\t<section id=\"nosAdherents\">
\t\t<h2>Nos Adhérents</h2>
\t\t<p id=\"p1Adh\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aperiam assumenda eius, veritatis modi quas earum, cupiditate non eveniet eum nisi facilis voluptate corporis accusamus eos molestias. Eaque ipsa tenetur delectus et, eius fugiat nesciunt.</p>
\t</section>

\t<section id=\"sectionAdh\">
\t\t<div id=\"adherentSimple\">
\t\t\t<div id=\"headerAdhSimple\" class=\"px-5\">
\t\t\t\t<i class=\"fa-regular fa-user\"></i>
\t\t\t\t<h3>Adhérent Simple</h3>
\t\t\t\t<p>9.000 frcfa par an</p>
\t\t\t</div>
\t\t\t<div id=\"textAdhSimple\" class=\"px-5\">
\t\t\t\t<p id=\"text1\" class=\"px-5 py-3\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam explicabo saepe vitae officia enim iusto ipsam vero odit voluptate libero, culpa non accusantium quam perferendis minima molestias ipsum mollitia amet exercitationem commodi. Sed ratione harum id vel exercitationem ducimus tenetur odio accusamus, laboriosam temporibus quaerat sapiente nulla rem fugit repudiandae!</p>
\t\t\t\t<p id=\"text2\" class=\"px-5 py-3\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas accusamus nisi quisquam reprehenderit doloribus a eius? Voluptas eius voluptatibus, corrupti at impedit corporis asperiores sint eveniet unde ut eaque enim tempora dolorem est voluptatem, doloremque ipsa consequatur magnam esse voluptate dignissimos necessitatibus aliquid totam tempore. Ut sint voluptas tempore nihil!</p>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"adherentCadre\">
\t\t\t<div id=\"headerAdhCadre\" class=\"px-5\">
\t\t\t\t<i class=\"fa-regular fa-user\"></i>
\t\t\t\t<h3>Adhérent Cadre</h3>
\t\t\t\t<p>50.000 frcfa par an</p>
\t\t\t</div>
\t\t\t<div id=\"textAdhCadre\" class=\"px-5\">
\t\t\t\t<p id=\"text1\" class=\"px-5 py-3\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam explicabo saepe vitae officia enim iusto ipsam vero odit voluptate libero, culpa non accusantium quam perferendis minima molestias ipsum mollitia amet exercitationem commodi. Sed ratione harum id vel exercitationem ducimus tenetur odio accusamus, laboriosam temporibus quaerat sapiente nulla rem fugit repudiandae!</p>
\t\t\t\t<p id=\"text2\" class=\"px-5 py-3\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas accusamus nisi quisquam reprehenderit doloribus a eius? Voluptas eius voluptatibus, corrupti at impedit corporis asperiores sint eveniet unde ut eaque enim tempora dolorem est voluptatem, doloremque ipsa consequatur magnam esse voluptate dignissimos necessitatibus aliquid totam tempore. Ut sint voluptas tempore nihil!</p>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"sectionBtn\" class=\"d-flex justify-content-between\">
\t\t<div class=\"divBtnAdh\">
\t\t\t<button id=\"simpleBtn\" class=\"btnCotisation checkedCotisation adhSimple\">Adhérent simple</button>
\t\t\t<button id=\"cadreBtn\" class=\"btnCotisation adhCadre\">Adhérent cadre</button>
\t\t</div>
\t\t<div class=\"divBtnZone\">
\t\t\t<button id=\"afriqueBtn\" class=\"btnCotisation checkedCotisation zoneAfrique\">Zone Afrique</button>
\t\t\t<button id=\"europeBtn\" class=\"btnCotisation zoneEurope\">Zone Europe</button>
\t\t</div>
\t</section>

\t<section class=\"d-flex justify-content-center sectionPrincipaleAdhPrix\">
\t\t<div id=\"adhPrixDiv\" class=\"mb-5\">
\t\t\t<p>Le prix de la cotisation annuelle s'élève à
\t\t\t\t<span></span>
\t\t\t</p>
\t\t</div>
\t</section>

\t<section id=\"sectionAdhesion\">
\t\t<h2>Adhésion</h2>
\t\t<div id=\"divForms\">
\t\t\t<div id=\"persPhysique\">
\t\t\t\t<div id=\"formPersPhy\">
\t\t\t\t\t";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start');
        yield "
\t\t\t\t\tPlan<br>
\t\t\t\t\t";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "plan", [], "any", false, false, false, 72), 'row');
        yield "
\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "type", [], "any", false, false, false, 73), 'row');
        yield "
\t\t\t\t\t<div class=\"d-flex civiliteSelectDiv\" style=\"\">
\t\t\t\t\t\t<div class='w-25'>
\t\t\t\t\t\t\t";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "civilite", [], "any", false, false, false, 76), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='pr w-100'>
\t\t\t\t\t\t\t";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "prenom", [], "any", false, false, false, 79), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex civiliteSelectDiv\" style=\"\">
\t\t\t\t\t\t<div class='w-75'>
\t\t\t\t\t\t\t";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "siren", [], "any", false, false, false, 84), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='fj w-100'>
\t\t\t\t\t\t\t";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "formeJuridique", [], "any", false, false, false, 87), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "nom", [], "any", false, false, false, 90), 'row');
        yield "
\t\t\t\t\t";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "email", [], "any", false, false, false, 91), 'row');
        yield "
\t\t\t\t\t";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "telephone", [], "any", false, false, false, 92), 'row');
        yield "
\t\t\t\t\t";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "adresse", [], "any", false, false, false, 93), 'row');
        yield "
\t\t\t\t\t";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "complementAdresse", [], "any", false, false, false, 94), 'row');
        yield "
\t\t\t\t\t";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "codePostal", [], "any", false, false, false, 95), 'row');
        yield "
\t\t\t\t\t";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "ville", [], "any", false, false, false, 96), 'row');
        yield "
\t\t\t\t\t";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "pays", [], "any", false, false, false, 97), 'row');
        yield "
\t\t\t\t\t";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "password", [], "any", false, false, false, 98), 'row');
        yield "
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"registerBtn\">S'inscrire</button>
\t\t\t\t\t";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

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
        return "adhesion/index.html.twig";
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
        return array (  235 => 100,  230 => 98,  226 => 97,  222 => 96,  218 => 95,  214 => 94,  210 => 93,  206 => 92,  202 => 91,  198 => 90,  192 => 87,  186 => 84,  178 => 79,  172 => 76,  166 => 73,  162 => 72,  157 => 70,  92 => 7,  82 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\tAdhésion
{% endblock %}

{% block body %}

\t<section id=\"sectionImg\">
\t\t<div>
\t\t\t<h1>Lorem ipsum dolor sit</h1>
\t\t\t<p id=\"textSectionImg\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non accusamus harum, facere libero suscipit accusantium nemo rem a inventore esse.</p>
\t\t</div>
\t</section>

\t<section id=\"nosAdherents\">
\t\t<h2>Nos Adhérents</h2>
\t\t<p id=\"p1Adh\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aperiam assumenda eius, veritatis modi quas earum, cupiditate non eveniet eum nisi facilis voluptate corporis accusamus eos molestias. Eaque ipsa tenetur delectus et, eius fugiat nesciunt.</p>
\t</section>

\t<section id=\"sectionAdh\">
\t\t<div id=\"adherentSimple\">
\t\t\t<div id=\"headerAdhSimple\" class=\"px-5\">
\t\t\t\t<i class=\"fa-regular fa-user\"></i>
\t\t\t\t<h3>Adhérent Simple</h3>
\t\t\t\t<p>9.000 frcfa par an</p>
\t\t\t</div>
\t\t\t<div id=\"textAdhSimple\" class=\"px-5\">
\t\t\t\t<p id=\"text1\" class=\"px-5 py-3\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam explicabo saepe vitae officia enim iusto ipsam vero odit voluptate libero, culpa non accusantium quam perferendis minima molestias ipsum mollitia amet exercitationem commodi. Sed ratione harum id vel exercitationem ducimus tenetur odio accusamus, laboriosam temporibus quaerat sapiente nulla rem fugit repudiandae!</p>
\t\t\t\t<p id=\"text2\" class=\"px-5 py-3\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas accusamus nisi quisquam reprehenderit doloribus a eius? Voluptas eius voluptatibus, corrupti at impedit corporis asperiores sint eveniet unde ut eaque enim tempora dolorem est voluptatem, doloremque ipsa consequatur magnam esse voluptate dignissimos necessitatibus aliquid totam tempore. Ut sint voluptas tempore nihil!</p>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"adherentCadre\">
\t\t\t<div id=\"headerAdhCadre\" class=\"px-5\">
\t\t\t\t<i class=\"fa-regular fa-user\"></i>
\t\t\t\t<h3>Adhérent Cadre</h3>
\t\t\t\t<p>50.000 frcfa par an</p>
\t\t\t</div>
\t\t\t<div id=\"textAdhCadre\" class=\"px-5\">
\t\t\t\t<p id=\"text1\" class=\"px-5 py-3\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam explicabo saepe vitae officia enim iusto ipsam vero odit voluptate libero, culpa non accusantium quam perferendis minima molestias ipsum mollitia amet exercitationem commodi. Sed ratione harum id vel exercitationem ducimus tenetur odio accusamus, laboriosam temporibus quaerat sapiente nulla rem fugit repudiandae!</p>
\t\t\t\t<p id=\"text2\" class=\"px-5 py-3\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas accusamus nisi quisquam reprehenderit doloribus a eius? Voluptas eius voluptatibus, corrupti at impedit corporis asperiores sint eveniet unde ut eaque enim tempora dolorem est voluptatem, doloremque ipsa consequatur magnam esse voluptate dignissimos necessitatibus aliquid totam tempore. Ut sint voluptas tempore nihil!</p>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"sectionBtn\" class=\"d-flex justify-content-between\">
\t\t<div class=\"divBtnAdh\">
\t\t\t<button id=\"simpleBtn\" class=\"btnCotisation checkedCotisation adhSimple\">Adhérent simple</button>
\t\t\t<button id=\"cadreBtn\" class=\"btnCotisation adhCadre\">Adhérent cadre</button>
\t\t</div>
\t\t<div class=\"divBtnZone\">
\t\t\t<button id=\"afriqueBtn\" class=\"btnCotisation checkedCotisation zoneAfrique\">Zone Afrique</button>
\t\t\t<button id=\"europeBtn\" class=\"btnCotisation zoneEurope\">Zone Europe</button>
\t\t</div>
\t</section>

\t<section class=\"d-flex justify-content-center sectionPrincipaleAdhPrix\">
\t\t<div id=\"adhPrixDiv\" class=\"mb-5\">
\t\t\t<p>Le prix de la cotisation annuelle s'élève à
\t\t\t\t<span></span>
\t\t\t</p>
\t\t</div>
\t</section>

\t<section id=\"sectionAdhesion\">
\t\t<h2>Adhésion</h2>
\t\t<div id=\"divForms\">
\t\t\t<div id=\"persPhysique\">
\t\t\t\t<div id=\"formPersPhy\">
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\tPlan<br>
\t\t\t\t\t{{ form_row(form.plan) }}
\t\t\t\t\t{{ form_row(form.type) }}
\t\t\t\t\t<div class=\"d-flex civiliteSelectDiv\" style=\"\">
\t\t\t\t\t\t<div class='w-25'>
\t\t\t\t\t\t\t{{ form_row(form.civilite) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='pr w-100'>
\t\t\t\t\t\t\t{{ form_row(form.prenom) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex civiliteSelectDiv\" style=\"\">
\t\t\t\t\t\t<div class='w-75'>
\t\t\t\t\t\t\t{{ form_row(form.siren) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='fj w-100'>
\t\t\t\t\t\t\t{{ form_row(form.formeJuridique) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_row(form.nom) }}
\t\t\t\t\t{{ form_row(form.email) }}
\t\t\t\t\t{{ form_row(form.telephone) }}
\t\t\t\t\t{{ form_row(form.adresse) }}
\t\t\t\t\t{{ form_row(form.complementAdresse) }}
\t\t\t\t\t{{ form_row(form.codePostal) }}
\t\t\t\t\t{{ form_row(form.ville) }}
\t\t\t\t\t{{ form_row(form.pays) }}
\t\t\t\t\t{{ form_row(form.password) }}
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"registerBtn\">S'inscrire</button>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

{% endblock %}
", "adhesion/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/adhesion/index.html.twig");
    }
}
