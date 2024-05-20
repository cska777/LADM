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
class __TwigTemplate_b3db4cf02d3cb93abf70fcdc1bb9b657 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "action/tabBord.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "action/tabBord.html.twig"));

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 15, $this->source); })()));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "titre", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                    <td class=\"ico\">
                        <a class=\"btn btn-success py-1 px-2\" href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 22)]), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 29)]), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  122 => 43,  117 => 40,  108 => 36,  101 => 33,  94 => 29,  87 => 26,  85 => 25,  79 => 22,  74 => 20,  69 => 18,  65 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class='art'>
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
            {% for action in actions %}
                <tr>
                    <div class=\"desc\">
                    <td>{{ action.description|striptags|raw}}</td>
                    </div>
                    <td>{{ action.titre }}</td>
                    <td class=\"ico\">
                        <a class=\"btn btn-success py-1 px-2\" href=\"{{path(\"update_action\", {id: action.id})}}\">
                            <i class=\"visu2 fa-solid fa-pen-to-square\"></i>
                        </a>
                        {% if is_granted('ROLE_S_AD') %}
                        <a class=\"btn btn-primary py-1 px-2\" href=\"{{path(\"new_action\")}}\">
                            <i class=\"fa-solid fa-square-plus\"></i>
                        </a>
                        <a class=\"btn btn-danger py-1 px-2\" href=\"{{path(\"delete_action\", {id: action.id})}}\">
                            <i class=\"fa-solid fa-trash\"></i>
                        </a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">Aucun ajout trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
        <a href=\"{{ path('new_action') }}\"class='d-flex justify-content-center'><span class=\"btn btn-warning\"> + Ajouter une action </span></a>
</section>  ", "action/tabBord.html.twig", "/Users/dvpt/Desktop/ong2/templates/action/tabBord.html.twig");
    }
}
