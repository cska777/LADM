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

/* user/show.html.twig */
class __TwigTemplate_9227a5fb148c7ac5ececd0ce7cd9795d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Profil";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"show container\">
    <div class=\"profil\">
        <h3 class=\"mb-5 text-center\"> Mes informations</h3>
        ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "type", [], "any", false, false, false, 9) == "adherent")) {
            // line 10
            yield "            <div class=\"champ d-flex\">
                <h6 class=\"form-control me-5\"><strong> Civilité : </strong>";
            // line 11
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "civilite", [], "any", false, false, false, 11), "html", null, true);
            yield "</h6>
                <h6 class=\"form-control\"><strong> Prénom : </strong>";
            // line 12
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 12), "html", null, true);
            yield "</h6>
            </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["user"] ?? null), "type", [], "any", false, false, false, 14) == "entreprise")) {
            // line 15
            yield "            <div class=\"champ d-flex\">
                <h6 class=\"form-control me-5\"><strong> Siren : </strong>";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "siren", [], "any", false, false, false, 16), "html", null, true);
            yield "</h6>
                <h6 class=\"form-control\"><strong> Forme Juridique : </strong>";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "formeJuridique", [], "any", false, false, false, 17), "html", null, true);
            yield "</h6>
            </div>
        ";
        }
        // line 20
        yield "                <h6 class=\"form-control\"><strong> Nom ou Raison Sociale : </strong>";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</h6>
                <h6 class=\"form-control\"><strong> Email : </strong>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 21), "html", null, true);
        yield "</h6>      
                <h6 class=\"form-control\"><strong>Telephone : </strong>";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "telephone", [], "any", false, false, false, 22), "html", null, true);
        yield "</h6>
                <h6 class=\"form-control\"><strong>Adresse : </strong>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "adresse", [], "any", false, false, false, 23), "html", null, true);
        yield "</h6>
                <h6 class=\"form-control\"><strong>Complement d'adresse : </strong>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "complementAdresse", [], "any", false, false, false, 24), "html", null, true);
        yield "</h6>
            <div class=\"champ d-flex\">
                <h6 class=\"form-control me-5\"><strong>Code Postal : </strong> ";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "codePostal", [], "any", false, false, false, 26), "html", null, true);
        yield "</h6>
                <h6 class=\"form-control\"><strong>Ville : </strong>";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "ville", [], "any", false, false, false, 27), "html", null, true);
        yield "</h6>
            </div>
                <h6 class=\"form-control\"><strong>Pays : </strong>";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "pays", [], "any", false, false, false, 29), "html", null, true);
        yield "</h6>
        <div class=\"row\">
            <div class=\"mb-3 d-flex justify-content-around\">
                <a class=\"b_mod btn \"  href=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\"><i class=\"fa-regular fa-pen-to-square me-1\"></i>Modifier mon profil</a>
            </div>
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
        return "user/show.html.twig";
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
        return array (  131 => 32,  125 => 29,  120 => 27,  116 => 26,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  94 => 20,  88 => 17,  84 => 16,  81 => 15,  79 => 14,  74 => 12,  70 => 11,  67 => 10,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/show.html.twig", "/Users/dvpt/Desktop/ong2/templates/user/show.html.twig");
    }
}
