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

/* newz/index.html.twig */
class __TwigTemplate_2fdb44694e123fe0f0690bb8ce9446a3 extends Template
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
        yield "
<section class='cus'>
    <h2 class=\"my-3 text-center text-uppercase\">Gerer le carousel</h2>
    <div class=\"adTable table-responsive-sm d-flex justify-content-center\">
        <table class=\"aTable table\">
            <thead class=\"\">
                <tr class=\"\">
                    <th>Type</th>
                    <th>Date</th>
                    <th>Auteur</th>
                    <th>Image</th>
                    <th class='ico'></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["newzs"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["newz"]) {
            // line 17
            yield "                <tr>
                    <td>";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "type", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
                    <td>";
            // line 19
            ((CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "date", [], "any", false, false, false, 19)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "date", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "auteur", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "image", [], "any", false, false, false, 22)) {
                // line 23
                yield "                            <img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "image", [], "any", false, false, false, 23))), "html", null, true);
                yield "\" alt=\"Miniature\" class=\"img-thumbnail\" style=\"max-width: 50px; max-height: 50px;\">
                        ";
            }
            // line 25
            yield "                    </td>
                    <td class=\"ico\">
                        <a class=\"btn btn-success py-1 px-2\" href=\"";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\">
                            <i class=\"visu2 fa-solid fa-pen-to-square\"></i>
                        </a>
                        <a class=\"btn btn-danger py-1 px-2\" href=\"";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">
                            <i class=\"fa-solid fa-trash\"></i>
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "                <tr>
                    <td colspan=\"8\">Aucun ajout trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "            </tbody>
        </table>
    </div>
        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newz_new");
        yield "\"class='d-flex justify-content-center'><span class=\"btn btn-warning\"> + Ajouter un carousel </span></a>
    <hr>    
</section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "newz/index.html.twig";
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
        return array (  119 => 43,  114 => 40,  105 => 36,  94 => 30,  88 => 27,  84 => 25,  78 => 23,  76 => 22,  71 => 20,  67 => 19,  63 => 18,  60 => 17,  55 => 16,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newz/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/newz/index.html.twig");
    }
}
