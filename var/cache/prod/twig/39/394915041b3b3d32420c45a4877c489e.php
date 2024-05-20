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
class __TwigTemplate_d930e8657d8806026e3b504945f91def extends Template
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
        yield "<section class='art' id='apropos'>
\t<h2 class=\"my-3 text-center text-uppercase\">Gerer les aboutUs</h2>
\t<div class=\"adTable table-responsive-sm d-flex justify-content-center\">
\t\t<table class=\"aTable table\">
\t\t\t<thead class=\"\">
\t\t\t\t<tr class=\"\">
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Image
\t\t\t\t\t</th>
\t\t\t\t\t<th class='ico'>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["aboutUs"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["aboutUs"]) {
            // line 18
            yield "\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>";
            // line 20
            ((CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "date", [], "any", false, false, false, 20)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "date", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t\t<td>";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "titre", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "auteur", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "type", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img src=\"";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "image", [], "any", false, false, false, 25))), "html", null, true);
            yield "\" alt=\"Notre Histoire\" class=\"image-about-bord\">
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"ico\">
\t\t\t\t\t\t\t<a class=\"btn btn-success py-1 px-2\" href=\"";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_aboutUs", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<i class=\"visu2 fa-solid fa-pen-to-square\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-danger py-1 px-2\" href=\"";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_aboutus", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["aboutUs"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">Aucun ajout trouvé</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aboutUs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "\t\t\t</tbody>
\t\t</table>
\t</div>
\t";
        // line 50
        yield "</section>
";
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
        return array (  120 => 50,  115 => 42,  106 => 38,  95 => 32,  89 => 29,  82 => 25,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 18,  56 => 17,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about-us/tabBord.html.twig", "/Users/dvpt/Desktop/ong2/templates/about-us/tabBord.html.twig");
    }
}
