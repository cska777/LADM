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

/* article/show.html.twig */
class __TwigTemplate_01c6bbd787fe5093c79ca669d9e348ba extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 5), "html", null, true);
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "
    <div id=\"actualites-banner\">
        <style>
            #actualites-banner {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 60vh;
                background-size: cover;
                background-position: center;
                text-align: center;
                color: var(--text-1);
                background-image: url(";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image", [], "any", false, false, false, 20))), "html", null, true);
        yield "); /* URL dynamique provenant de votre base de données */
            }
        </style>
        <div class=\"div_h1_p\">
            <h1>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 24), "html", null, true);
        yield "</h1>
            <p>";
        // line 25
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "description", [], "any", false, false, false, 25);
        yield "</p>
            <p>Publié le : ";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "date", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true);
        yield " , par : ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "auteur", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
        </div>
    </div>

    <div class=\"contenu_show_article\">
        <div class=\"pb-4\">
            <h2 class=\"pb-2\">";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "sousTitre1", [], "any", false, false, false, 32), "html", null, true);
        yield "</h2>
            <p>";
        // line 33
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "contenu", [], "any", false, false, false, 33);
        yield "</p>
            <p>";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe1", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
            <p>";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe2", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
            <p>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe3", [], "any", false, false, false, 36), "html", null, true);
        yield "</p>
        </div>
        <div class=\"pb-4\">

            <h2 class=\"pb-2\">";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "sousTitre2", [], "any", false, false, false, 40), "html", null, true);
        yield "</h2>
            <p>";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe4", [], "any", false, false, false, 41), "html", null, true);
        yield "</p>
            <p>";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe5", [], "any", false, false, false, 42), "html", null, true);
        yield "</p>
        </div>

        <div class=\"images_show_article row justify-content-center flex-wrap pb-5\">
            <img class=\"img_show_article col-3\" src=\"";
        // line 46
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image1", [], "any", false, false, false, 46), "html", null, true);
        yield "\" alt=\"\">
            <img class=\" img_show_article col-3\" src=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image2", [], "any", false, false, false, 47), "html", null, true);
        yield "\" alt=\"\">
            <img class=\" img_show_article col-3\" src=\"";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image3", [], "any", false, false, false, 48), "html", null, true);
        yield "\" alt=\"\">
        </div>

        <div class=\"pb-4\">

            <h2 class=\"pb-2\">";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "sousTitre3", [], "any", false, false, false, 53), "html", null, true);
        yield "</h2>
            <p>";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe6", [], "any", false, false, false, 54), "html", null, true);
        yield "</p>
        </div>

        <div class=\"pb-4\">

            <h2 class=\"pb-2\">";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "sousTitre4", [], "any", false, false, false, 59), "html", null, true);
        yield "</h2>
            <p>";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe7", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>
            <p>";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe8", [], "any", false, false, false, 61), "html", null, true);
        yield "</p>
        </div>

        <div class=\"pb-4\">

            <h2 class=\"pb-2\">";
        // line 66
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "sousTitre5", [], "any", false, false, false, 66), "html", null, true);
        yield "</h2>
            <p>";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe9", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
            <p>";
        // line 68
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "paragraphe10", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>
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
        return "article/show.html.twig";
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
        return array (  190 => 68,  186 => 67,  182 => 66,  174 => 61,  170 => 60,  166 => 59,  158 => 54,  154 => 53,  146 => 48,  142 => 47,  138 => 46,  131 => 42,  127 => 41,  123 => 40,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  89 => 26,  85 => 25,  81 => 24,  74 => 20,  60 => 8,  56 => 7,  48 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/show.html.twig", "/Users/dvpt/Desktop/ong2/templates/article/show.html.twig");
    }
}
