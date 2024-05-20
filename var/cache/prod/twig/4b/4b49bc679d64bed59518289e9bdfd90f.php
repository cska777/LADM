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

/* newz/edit.html.twig */
class __TwigTemplate_c7ca50f8574382cd65acd4827147a0f0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "newz/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Modifier carousel";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<section id='sectionAdhesion' style=\"margin-top:8%\">
<div class=\"container w-75 \">
    <div class=\"profil my-5\" id=\"formPersPhy\">
     ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
        <h3 class=\"mb-5 text-center\">Modifier carousel</h3>
        <div class=\"champ d-flex\">
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 12), 'row');
        yield "
            <div class=\"mx-3\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 14), 'row');
        yield "
            </div>
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 16), 'row');
        yield "
        </div>
        
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "auteur", [], "any", false, false, false, 19), 'row');
        yield "

        ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "image", [], "any", false, false, false, 21)) {
            // line 22
            yield "            <div class=\"form-group ms-1 mb-3\">
                <label for=\"newz_image\">Image actuelle :</label>
                <img src=\"";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "image", [], "any", false, false, false, 24))), "html", null, true);
            yield "\" alt=\"Miniature\" class=\"img-thumbnail\" style=\"max-width: 100px; max-height: 100px;\">
            </div>
        ";
        }
        // line 27
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 28), 'row');
        yield "
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contenu", [], "any", false, false, false, 29), 'row');
        yield "
    </div>
        <div class=\"d-flex justify-content-center mt-3\">
            <button type=\"submit\" class=\"btn btn-success me-5\">Mettre à jour le carousel</button>
    ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            <form method=\"post\" action=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sur de vouloir supprimer votre compte ?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["newz"] ?? null), "id", [], "any", false, false, false, 35))), "html", null, true);
        yield "\">
                <button class=\"btn btn-danger ms-5\">Supprimer le carousel</button>
            </form>
        </div>
</div>
</section>
<style>
    #formPersPhy input[type=\"file\"] {
        border: none;
    }
</style>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "newz/edit.html.twig";
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
        return array (  126 => 35,  122 => 34,  118 => 33,  111 => 29,  107 => 28,  104 => 27,  98 => 24,  94 => 22,  92 => 21,  87 => 19,  81 => 16,  76 => 14,  71 => 12,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newz/edit.html.twig", "/Users/dvpt/Desktop/ong2/templates/newz/edit.html.twig");
    }
}
