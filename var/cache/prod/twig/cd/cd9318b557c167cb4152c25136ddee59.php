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

/* action/index.html.twig */
class __TwigTemplate_971bc492868aa666f8cfa95f15316e1f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "action/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    
<div class=\"row\">
    <div class=\"col-2\">
    ";
        // line 7
        yield from         $this->loadTemplate("fragment/_sidebar.html.twig", "action/index.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    </div>
    <div class=\"col-10\">
        <h1 class=\"titreh1 text-center mb-5 mt-5\">GÉRER LES ACTIONS</h1>
        <div class=\"text-center\">
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_action");
        yield "\" class=\"btn btn-ajouter fw-bold
            \">Ajouter une action</a>
        </div>
        <div class=\"table-container table-responsive\">
            <table class=\"table table-striped align-middle \">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Titre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 26
            yield "                    <tr>
                        <td>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "titre", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                        
                        <td>
                            <a href=\"";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\", class=\"btn btn-modifier\">Modifier</a>
                            <a href=\"";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\", class=\"btn btn-supprimer\">Supprimer</a> 
                        </td> 
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "action/index.html.twig";
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
        return array (  111 => 36,  101 => 32,  97 => 31,  91 => 28,  87 => 27,  84 => 26,  80 => 25,  64 => 12,  58 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "action/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/action/index.html.twig");
    }
}
