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

/* user/tabBord.html.twig */
class __TwigTemplate_09342f643fbfce07334464256723bf4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/tabBord.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/tabBord.html.twig"));

        // line 1
        yield "<section class='adh'>
    <h2 class=\"my-3 text-center text-uppercase\">Gerer les Adhérents</h2>
    <div class=\"adTable table-responsive-sm d-flex justify-content-center\">
        <table class=\"aTable table\">
            <thead class=\"\">
                <tr class=\"\">
                    <th>Nom/R.Sociale</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Rôle</th>
                    <th class='ico'></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            yield "                <tr class=\"\">
                    <td>";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                    <td>";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
                    <td>";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "type", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                    <td>";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 20));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 21
                yield "                        ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 21)) {
                    // line 22
                    yield "                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["role"], "html", null, true);
                    yield ",
                        ";
                } else {
                    // line 24
                    yield "                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["role"], "html", null, true);
                    yield "
                        ";
                }
                // line 26
                yield "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</td>
                    <td class=\"ico\">
                    <div class='d-flex'>
                        <form>
                        <a class=\"btn btn-success py-1 px-2\" href=\"";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">
                            <i class=\"visu2 fa-solid fa-pen-to-square\"></i>
                        </a>
                        </form>
                        <form>
                        <a class=\"btn btn-warning py-1 px-2\" href=\"\">
                            <i class=\"visu2 fa-solid fa-envelope\"></i>
                        </a>
                        </form>
                        <form action=\"";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sur de vouloir supprimer votre compte ?')\";>
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 40))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger py-1 px-2\">
                                <i class=\"fa-solid fa-trash\"></i>
                            </button>
                        </form>
                    </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            yield "                <tr>
                    <td colspan=\"8\">Aucune personne trouvée</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "            </tbody>
        </table>
    </div>
    <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\"class='d-flex justify-content-center'><span class=\"btn btn-warning\"> + Ajouter un utilisateur </span></a>
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
        return "user/tabBord.html.twig";
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
        return array (  175 => 56,  170 => 53,  161 => 49,  147 => 40,  143 => 39,  131 => 30,  112 => 26,  106 => 24,  100 => 22,  97 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  65 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class='adh'>
    <h2 class=\"my-3 text-center text-uppercase\">Gerer les Adhérents</h2>
    <div class=\"adTable table-responsive-sm d-flex justify-content-center\">
        <table class=\"aTable table\">
            <thead class=\"\">
                <tr class=\"\">
                    <th>Nom/R.Sociale</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Rôle</th>
                    <th class='ico'></th>
                </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr class=\"\">
                    <td>{{ user.nom }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.type }}</td>
                    <td>{% for role in user.roles %}
                        {% if not loop.last %}
                            {{ role }},
                        {% else %}
                            {{ role }}
                        {% endif %}
                    {% endfor %}</td>
                    <td class=\"ico\">
                    <div class='d-flex'>
                        <form>
                        <a class=\"btn btn-success py-1 px-2\" href=\"{{ path('app_user_edit', {'id': user.id}) }}\">
                            <i class=\"visu2 fa-solid fa-pen-to-square\"></i>
                        </a>
                        </form>
                        <form>
                        <a class=\"btn btn-warning py-1 px-2\" href=\"\">
                            <i class=\"visu2 fa-solid fa-envelope\"></i>
                        </a>
                        </form>
                        <form action=\"{{ path('app_user_delete', {'id': user.id}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sur de vouloir supprimer votre compte ?')\";>
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger py-1 px-2\">
                                <i class=\"fa-solid fa-trash\"></i>
                            </button>
                        </form>
                    </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">Aucune personne trouvée</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <a href=\"{{ path('app_user_new') }}\"class='d-flex justify-content-center'><span class=\"btn btn-warning\"> + Ajouter un utilisateur </span></a>
    <hr>
</section>
", "user/tabBord.html.twig", "/Users/dvpt/Desktop/ong2/templates/user/tabBord.html.twig");
    }
}
