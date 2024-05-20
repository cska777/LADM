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

/* user/index.html.twig */
class __TwigTemplate_026571a7cad0de4d9841d3efbbe1601c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Index Général
";
        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            yield "\t\t<div class=\"alert alert-success mt-4\">
\t\t\t";
            // line 9
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "\t<div class=\"cdash container-fluid\" style=\"--mdb-gutter-x:none\">
\t\t<div class=\"row flex-nowrap\">
\t\t\t<div class=\"sbar col-auto col-md-3 col-xl-2 px-sm-2 px-0\">
\t\t\t\t<div class=\"smenu d-flex flex-column align-items-center align-items-sm-start px-3 pt-2\">
\t\t\t\t\t<ul class=\"nav nav-pills flex-column align-items-center align-items-sm-start\" id=\"menu\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nmenu nav-link align-middle px-0\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-house\"></i>
\t\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Home</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_S_AD")) {
            // line 24
            yield "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\" class=\"nmenu nav-link px-0 align-middle\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-indent\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Index</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nmenu nav-link px-0 align-middle\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Membres</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nmenu nav-link px-0 align-middle filter-type\" data-type=\"adherent\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Adhérents</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nmenu nav-link px-0 align-middle filter-type\" data-type=\"entreprise\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-building\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Entreprises</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#submenu3\" class=\"nmenu nav-link px-0 align-middle\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-palette\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Custom</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 55
        yield "\t\t\t\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_S_AD") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 56
            yield "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#submenu2\" class=\"nmenu nav-link px-0 align-middle \">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-newspaper\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Articles</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#apropos\" class=\"nmenu nav-link px-0 align-middle \">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-newspaper\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">A Propos
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#submenu2\" class=\"nmenu nav-link px-0 align-middle \">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-newspaper\"></i>
\t\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Actions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 77
        yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#submenu3\" class=\"nmenu nav-link px-0 align-middle\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-hand-holding-dollar\"></i>
\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Mes Dons</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#submenu3\" class=\"nmenu nav-link px-0 align-middle\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-bookmark\"></i>
\t\t\t\t\t\t\t<span class=\"ms-1 d-sm-inline\">Mon Statut</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col py-3\">
\t\t\t<section class=\"main-content\">
\t\t\t\t<h1 class='text-center mb-5'>Journal de bord</h1>
\t\t\t\t<form action=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        yield "\" method=\"GET\" class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"dSearch input-group mb-3\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"Rechercher...\">
\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 103
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_S_AD")) {
            // line 104
            yield "\t\t\t\t\t";
            yield from             $this->loadTemplate("user/tabBord.html.twig", "user/index.html.twig", 104)->unwrap()->yield($context);
            // line 105
            yield "\t\t\t\t\t";
            yield from             $this->loadTemplate("newz/index.html.twig", "user/index.html.twig", 105)->unwrap()->yield($context);
            // line 106
            yield "\t\t\t\t";
        }
        // line 107
        yield "\t\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_S_AD") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 108
            yield "\t\t\t\t\t";
            yield from             $this->loadTemplate("article/tabBord.html.twig", "user/index.html.twig", 108)->unwrap()->yield($context);
            // line 109
            yield "\t\t\t\t\t";
            yield from             $this->loadTemplate("action/tabBord.html.twig", "user/index.html.twig", 109)->unwrap()->yield($context);
            // line 110
            yield "\t\t\t\t\t";
            yield from             $this->loadTemplate("about-us/tabBord.html.twig", "user/index.html.twig", 110)->unwrap()->yield($context);
            // line 111
            yield "

\t\t\t\t";
        }
        // line 114
        yield "\t\t\t\t<section class='don'>
\t\t\t\t\t<h2 class=\"my-3 text-center text-uppercase\">Gerer les Dons</h2>
\t\t\t\t\t<div class=\"adTable table-responsive-sm d-flex justify-content-center\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-person-digging\"></i>
\t\t\t\t\t\t\tEn attente du CRUD
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t</section>
\t\t\t\t<section class='for'>
\t\t\t\t\t<h2 class=\"my-3 text-center text-uppercase\">Gerer les Forfaits</h2>
\t\t\t\t\t<div class=\"adTable table-responsive-sm d-flex justify-content-center\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-person-digging\"></i>
\t\t\t\t\t\t\tEn attente du CRUD
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t</section>
\t\t\t</section>
\t\t</div>
\t</div>
</div>
<script>
\tdocument.querySelectorAll('.filter-type').forEach(function (element) {
element.addEventListener('click', function (event) {
event.preventDefault();

const type = this.dataset.type;
const form = document.querySelector('form[action=\"  ";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        yield "\"]');
const input = document.createElement('input');
// const input = form.querySelector('input[name=\"type\"]');

input.type = 'hidden';
input.name = 'type';
input.value = type;

form.appendChild(input);
form.submit();
});
});
</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/index.html.twig";
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
        return array (  246 => 144,  214 => 114,  209 => 111,  206 => 110,  203 => 109,  200 => 108,  197 => 107,  194 => 106,  191 => 105,  188 => 104,  186 => 103,  175 => 95,  155 => 77,  132 => 56,  129 => 55,  96 => 25,  93 => 24,  91 => 23,  78 => 12,  69 => 9,  66 => 8,  61 => 7,  57 => 6,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/user/index.html.twig");
    }
}
