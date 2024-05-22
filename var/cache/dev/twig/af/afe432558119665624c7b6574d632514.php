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

/* about-us/tabBord.html.twig */
class __TwigTemplate_5572edf09e358405813e36945a175d8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about-us/tabBord.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about-us/tabBord.html.twig"));

        // line 1
        yield "<section class='art' id='apropos'>
\t<h2 class=\"my-3 text-center text-uppercase\">Gerer les À propos</h2>
\t<div class=\"adTable table-responsive-sm d-flex justify-content-center\">
\t\t<table class=\"aTable table\">
\t\t\t<thead class=\"\">
\t\t\t\t<tr class=\"\">
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t<th>Image
\t\t\t\t\t</th>
\t\t\t\t\t<th class='ico'>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["aboutUs"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["aboutUs"]) {
            // line 17
            yield "\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>";
            // line 19
            ((CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "date", [], "any", false, false, false, 19)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "date", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t\t<td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "titre", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "auteur", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "image", [], "any", false, false, false, 23))), "html", null, true);
            yield "\" alt=\"Notre Histoire\" class=\"image-about-bord\">
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"ico\">
\t\t\t\t\t\t\t<a class=\"btn btn-success py-1 px-2\" href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_aboutUs", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<i class=\"visu2 fa-solid fa-pen-to-square\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-danger py-1 px-2\" href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_aboutus", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">Aucun ajout trouvé</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aboutUs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_aboutUs");
        yield "\" class='d-flex justify-content-center'><span class=\"btn btn-warning\"> + Ajouter un À propos </span></a>
</section>
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
        return "about-us/tabBord.html.twig";
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
        return array (  121 => 43,  116 => 40,  107 => 36,  96 => 30,  90 => 27,  83 => 23,  78 => 21,  74 => 20,  70 => 19,  66 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class='art' id='apropos'>
\t<h2 class=\"my-3 text-center text-uppercase\">Gerer les À propos</h2>
\t<div class=\"adTable table-responsive-sm d-flex justify-content-center\">
\t\t<table class=\"aTable table\">
\t\t\t<thead class=\"\">
\t\t\t\t<tr class=\"\">
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t<th>Image
\t\t\t\t\t</th>
\t\t\t\t\t<th class='ico'>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for aboutUs in aboutUs %}
\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>{{ aboutUs.date ? aboutUs.date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t<td>{{ aboutUs.titre }}</td>
\t\t\t\t\t\t<td>{{ aboutUs.auteur }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img src=\"{{ asset('upload/' ~ aboutUs.image) }}\" alt=\"Notre Histoire\" class=\"image-about-bord\">
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"ico\">
\t\t\t\t\t\t\t<a class=\"btn btn-success py-1 px-2\" href=\"{{path(\"update_aboutUs\", {id: aboutUs.id})}}\">
\t\t\t\t\t\t\t\t<i class=\"visu2 fa-solid fa-pen-to-square\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-danger py-1 px-2\" href=\"{{path(\"delete_aboutus\", {id: aboutUs.id})}}\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">Aucun ajout trouvé</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
\t<a href=\"{{ path('new_aboutUs') }}\" class='d-flex justify-content-center'><span class=\"btn btn-warning\"> + Ajouter un À propos </span></a>
</section>
", "about-us/tabBord.html.twig", "/Users/dvpt/Desktop/ong2/templates/about-us/tabBord.html.twig");
    }
}
