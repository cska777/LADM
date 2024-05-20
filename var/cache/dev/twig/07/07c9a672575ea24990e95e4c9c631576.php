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

/* fragment/_menu.html.twig */
class __TwigTemplate_0a1dc305eb420bf9249a9e0d9be4be64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragment/_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragment/_menu.html.twig"));

        // line 1
        yield "<header>
<nav class=\"navbar navbar-expand-lg fixed-top \">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand me-auto\" \" href=\" ";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield " \"\">
            <img src=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/img/logo/logo.png"), "html", null, true);
        yield "\" height=\"45\" class=\"rounded-circle\" alt=\"Logo\" loading=\"lazy\"/>
        </a>
        <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
            <div class=\"offcanvas-header\">
                <h5 class=\"offcanvas-title mb-0 \" id=\"offcanvasNavbarLabel\">Les Amis du Monde</h5>
                <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <div class=\"offcanvas-body\">
                <ul class=\"navbar-nav justify-content-center flex-grow-1 pe-3\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link mx-lg-2 \" aria-current=\"page\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about_us");
        yield "\">A PROPOS</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link mx-lg-2\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites");
        yield "\">ACTUALITES</a>
\t\t\t\t\t</li>
                    ";
        // line 20
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link mx-lg-2\" href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adhesion");
            yield "\">ADHESION</a>
                        </li>
                    ";
        }
        // line 25
        yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link mx-lg-2\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
        ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            yield "        <div class=\"dropdown\">
            <label class=\"link-secondary me-3 dropdown-label\" id='dropdownMenuLabel'>
                <i class=\"fas fa-user text-white\"></i>
            </label>
            <ul class=\"dropdown-menu\" id='dropdownMenu'>
                    ";
            // line 37
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
                // line 38
                yield "                        <li>
                            <a class=\"dropdown-item\" href=\"";
                // line 39
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\">Profil</a>
                        </li>
                    ";
            }
            // line 42
            yield "                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">Jounal de bord</a>
                        </li>
                    ";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_S_AD")) {
                // line 46
                yield "                        <li>
                            <a class=\"dropdown-item\" href=\"";
                // line 47
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                yield "\">Dashboard</a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
                // line 50
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mailer");
                yield "\">Send Mail</a>
                        </li>
                    ";
            }
            // line 53
            yield "                <li>
                    <a class=\"dropdown-item\" href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                </li>
            </ul>
        </div>
        ";
        } else {
            // line 59
            yield "        <a class=\"link-secondary me-3\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
            <i class=\"fas fa-user text-white\"></i>
        </a>
        ";
        }
        // line 63
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_don");
        yield "\" id=\"bouton-don\" class=\"btn  fw-bold\">FAIRE UN DON</a>
        <button class=\"navbar-toggler \" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
    </div>
</nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var dropdownMenuLabel = document.getElementById('dropdownMenuLabel');
    var dropdownMenu = document.getElementById('dropdownMenu');

    dropdownMenuLabel.addEventListener('click', function() {
        if (dropdownMenu.style.display === 'block') {
            dropdownMenu.style.display = 'none';
        } else {
            dropdownMenu.style.display = 'block';
        }
    });
});
</script>
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
        return "fragment/_menu.html.twig";
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
        return array (  163 => 63,  155 => 59,  147 => 54,  144 => 53,  138 => 50,  132 => 47,  129 => 46,  127 => 45,  122 => 43,  119 => 42,  113 => 39,  110 => 38,  108 => 37,  101 => 32,  99 => 31,  91 => 26,  88 => 25,  82 => 22,  79 => 21,  77 => 20,  72 => 18,  66 => 15,  53 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
<nav class=\"navbar navbar-expand-lg fixed-top \">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand me-auto\" \" href=\" {{path('app_home')}} \"\">
            <img src=\"{{asset(\"styles/img/logo/logo.png\")}}\" height=\"45\" class=\"rounded-circle\" alt=\"Logo\" loading=\"lazy\"/>
        </a>
        <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
            <div class=\"offcanvas-header\">
                <h5 class=\"offcanvas-title mb-0 \" id=\"offcanvasNavbarLabel\">Les Amis du Monde</h5>
                <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <div class=\"offcanvas-body\">
                <ul class=\"navbar-nav justify-content-center flex-grow-1 pe-3\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link mx-lg-2 \" aria-current=\"page\" href=\"{{path('about_us')}}\">A PROPOS</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link mx-lg-2\" href=\"{{path('actualites')}}\">ACTUALITES</a>
\t\t\t\t\t</li>
                    {% if not app.user %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link mx-lg-2\" href=\"{{ path('app_adhesion') }}\">ADHESION</a>
                        </li>
                    {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link mx-lg-2\" href=\"{{path('app_contact')}}\">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
        {% if app.user %}
        <div class=\"dropdown\">
            <label class=\"link-secondary me-3 dropdown-label\" id='dropdownMenuLabel'>
                <i class=\"fas fa-user text-white\"></i>
            </label>
            <ul class=\"dropdown-menu\" id='dropdownMenu'>
                    {% if app.user %}
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('app_user_show', {'id': app.user.id}) }}\">Profil</a>
                        </li>
                    {% endif %}
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('app_user_index') }}\">Jounal de bord</a>
                        </li>
                    {% if is_granted(\"ROLE_S_AD\") %}
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('admin') }}\">Dashboard</a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('app_mailer') }}\">Send Mail</a>
                        </li>
                    {% endif %}
                <li>
                    <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                </li>
            </ul>
        </div>
        {% else %}
        <a class=\"link-secondary me-3\" href=\"{{ path('app_login') }}\">
            <i class=\"fas fa-user text-white\"></i>
        </a>
        {% endif %}
        <a href=\"{{ path(\"app_don\") }}\" id=\"bouton-don\" class=\"btn  fw-bold\">FAIRE UN DON</a>
        <button class=\"navbar-toggler \" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
    </div>
</nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var dropdownMenuLabel = document.getElementById('dropdownMenuLabel');
    var dropdownMenu = document.getElementById('dropdownMenu');

    dropdownMenuLabel.addEventListener('click', function() {
        if (dropdownMenu.style.display === 'block') {
            dropdownMenu.style.display = 'none';
        } else {
            dropdownMenu.style.display = 'block';
        }
    });
});
</script>
", "fragment/_menu.html.twig", "/Users/dvpt/Desktop/ong2/templates/fragment/_menu.html.twig");
    }
}
