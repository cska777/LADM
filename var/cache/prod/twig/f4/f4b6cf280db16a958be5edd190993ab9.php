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

/* newz/show.html.twig */
class __TwigTemplate_e2b78ba0193081496a013c8af5fe0ec7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "newz/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Carousel";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container w-75\">
    <div class=\"Articles\">
        <h3 class=\"mb-5 text-center\">Carousel</h3>
        <div class=\"champ d-flex\">
            <h6 class=\"form-control\"><strong> Type : </strong>";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "type", [], "any", false, false, false, 10), "html", null, true);
        yield "</h6>
            <h6 class=\"form-control mx-3\"><strong> Titre : </strong>";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "titre", [], "any", false, false, false, 11), "html", null, true);
        yield "</h6>
        </div>
        <div class=\"champ d-flex\">
            <h6 class=\"form-control me-2\"><strong> Auteur : </strong>";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "auteur", [], "any", false, false, false, 14), "html", null, true);
        yield "</h6>
            <h6 class=\"form-control ms-2\"><strong> Date : </strong>";
        // line 15
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "date", [], "any", false, false, false, 15)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "date", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</h6>
        </div>
        <h6 class=\"form-control\"><strong> Image : </strong>";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "image", [], "any", false, false, false, 17), "html", null, true);
        yield "</h6>
        <div class=\"form-group\">
            <label for=\"contenu\"><strong>Contenu:</strong></label>
            <textarea class=\"form-control\" rows=\"5\">";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "contenu", [], "any", false, false, false, 20), "html", null, true);
        yield "</textarea>
        </div>
        <div class=\"row\">
            <div class=\"my-3 d-flex justify-content-around\">
                <a class=\"b_mod btn \"  href=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "id", [], "any", false, false, false, 24)]), "html", null, true);
        yield "\"><i class=\"fa-regular fa-pen-to-square me-1\"></i>Modifier l'article</a>
                <a class=\"b_mod btn \" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"><i class=\"fa-solid fa-rotate-left\"></i> Retour</a>
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
        return "newz/show.html.twig";
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
        return array (  102 => 25,  98 => 24,  91 => 20,  85 => 17,  80 => 15,  76 => 14,  70 => 11,  66 => 10,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newz/show.html.twig", "/Users/dvpt/Desktop/ong2/templates/newz/show.html.twig");
    }
}
