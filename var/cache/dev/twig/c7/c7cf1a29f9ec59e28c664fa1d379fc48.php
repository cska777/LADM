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
class __TwigTemplate_2fbbeeb69d4708222a26d0b4ba85f5bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newz/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newz/index.html.twig"));

        // line 1
        yield "
<section class='car'>
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["newzs"]) || array_key_exists("newzs", $context) ? $context["newzs"] : (function () { throw new RuntimeError('Variable "newzs" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["newz"]) {
            // line 17
            yield "                <tr>
                    <td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "type", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
                    <td>";
            // line 19
            ((CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "date", [], "any", false, false, false, 19)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "date", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "auteur", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "image", [], "any", false, false, false, 22)) {
                // line 23
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "image", [], "any", false, false, false, 23))), "html", null, true);
                yield "\" alt=\"Miniature\" class=\"img-thumbnail\" style=\"max-width: 50px; max-height: 50px;\">
                        ";
            }
            // line 25
            yield "                    </td>
                    <td class=\"ico\">
                        <a class=\"btn btn-success py-1 px-2\" href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\">
                            <i class=\"visu2 fa-solid fa-pen-to-square\"></i>
                        </a>
                        <a class=\"btn btn-danger py-1 px-2\" href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["newz"], "id", [], "any", false, false, false, 30)]), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  125 => 43,  120 => 40,  111 => 36,  100 => 30,  94 => 27,  90 => 25,  84 => 23,  82 => 22,  77 => 20,  73 => 19,  69 => 18,  66 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<section class='car'>
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
            {% for newz in newzs %}
                <tr>
                    <td>{{ newz.type }}</td>
                    <td>{{ newz.date ? newz.date|date('Y-m-d') : '' }}</td>
                    <td>{{ newz.auteur }}</td>
                    <td>
                        {% if newz.image %}
                            <img src=\"{{ asset('upload/' ~ newz.image) }}\" alt=\"Miniature\" class=\"img-thumbnail\" style=\"max-width: 50px; max-height: 50px;\">
                        {% endif %}
                    </td>
                    <td class=\"ico\">
                        <a class=\"btn btn-success py-1 px-2\" href=\"{{ path('app_newz_edit', {'id': newz.id}) }}\">
                            <i class=\"visu2 fa-solid fa-pen-to-square\"></i>
                        </a>
                        <a class=\"btn btn-danger py-1 px-2\" href=\"{{ path('app_newz_delete', {'id': newz.id}) }}\">
                            <i class=\"fa-solid fa-trash\"></i>
                        </a>
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
        <a href=\"{{ path('app_newz_new') }}\"class='d-flex justify-content-center'><span class=\"btn btn-warning\"> + Ajouter un carousel </span></a>
    <hr>    
</section>
", "newz/index.html.twig", "/Users/davidsat/Desktop/LADM/templates/newz/index.html.twig");
    }
}
