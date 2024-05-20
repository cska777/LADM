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
class __TwigTemplate_75ea955f747708b62cdd129a6f17a372 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "adhesion/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "\tAdhésion
";
        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
\t\t\t\t\tPlan<br>
\t\t\t\t\t";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plan", [], "any", false, false, false, 72), 'row');
        yield "
\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 73), 'row');
        yield "
\t\t\t\t\t<div class=\"d-flex civiliteSelectDiv\" style=\"\">
\t\t\t\t\t\t<div class='w-25'>
\t\t\t\t\t\t\t";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "civilite", [], "any", false, false, false, 76), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='pr w-100'>
\t\t\t\t\t\t\t";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 79), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex civiliteSelectDiv\" style=\"\">
\t\t\t\t\t\t<div class='w-75'>
\t\t\t\t\t\t\t";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "siren", [], "any", false, false, false, 84), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='fj w-100'>
\t\t\t\t\t\t\t";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "formeJuridique", [], "any", false, false, false, 87), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 90), 'row');
        yield "
\t\t\t\t\t";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 91), 'row');
        yield "
\t\t\t\t\t";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 92), 'row');
        yield "
\t\t\t\t\t";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 93), 'row');
        yield "
\t\t\t\t\t";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "complementAdresse", [], "any", false, false, false, 94), 'row');
        yield "
\t\t\t\t\t";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "codePostal", [], "any", false, false, false, 95), 'row');
        yield "
\t\t\t\t\t";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 96), 'row');
        yield "
\t\t\t\t\t";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 97), 'row');
        yield "
\t\t\t\t\t";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 98), 'row');
        yield "
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"registerBtn\">S'inscrire</button>
\t\t\t\t\t";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

";
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
        return array (  204 => 100,  199 => 98,  195 => 97,  191 => 96,  187 => 95,  183 => 94,  179 => 93,  175 => 92,  171 => 91,  167 => 90,  161 => 87,  155 => 84,  147 => 79,  141 => 76,  135 => 73,  131 => 72,  126 => 70,  61 => 7,  57 => 6,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adhesion/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/adhesion/index.html.twig");
    }
}
