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

/* action/tabBord.html.twig */
class __TwigTemplate_09bffd3f83588b5a81459300a1421419 extends Template
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
        yield "<section class='art'>
    <h2 class=\"my-3 text-center text-uppercase\">Gerer les actions</h2>
    <div class=\"adTable table-responsive-sm d-flex justify-content-center\">
        <table class=\"aTable table\">
            <thead class=\"\">
                <tr class=\"\">
                    <th>Description</th>
                    
                    <th>Titre</th>
                    
                    <th class='ico'></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 16
            yield "                <tr>
                    <div class=\"desc\">
                    <td>";
            // line 18
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "description", [], "any", false, false, false, 18));
            yield "</td>
                    </div>
                    <td>";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "titre", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                    <td class=\"ico\">
                        <a class=\"btn btn-success py-1 px-2\" href=\"";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\">
                            <i class=\"visu2 fa-solid fa-pen-to-square\"></i>
                        </a>
                        ";
            // line 25
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_S_AD")) {
                // line 26
                yield "                        <a class=\"btn btn-primary py-1 px-2\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_action");
                yield "\">
                            <i class=\"fa-solid fa-square-plus\"></i>
                        </a>
                        <a class=\"btn btn-danger py-1 px-2\" href=\"";
                // line 29
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\">
                            <i class=\"fa-solid fa-trash\"></i>
                        </a>
                        ";
            }
            // line 33
            yield "                    </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "            </tbody>
        </table>
    </div>
        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_action");
        yield "\"class='d-flex justify-content-center'><span class=\"btn btn-warning\"> + Ajouter une action </span></a>
</section>  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "action/tabBord.html.twig";
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
        return array (  116 => 43,  111 => 40,  102 => 36,  95 => 33,  88 => 29,  81 => 26,  79 => 25,  73 => 22,  68 => 20,  63 => 18,  59 => 16,  54 => 15,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "action/tabBord.html.twig", "/Users/dvpt/Desktop/ong2/templates/action/tabBord.html.twig");
    }
}
