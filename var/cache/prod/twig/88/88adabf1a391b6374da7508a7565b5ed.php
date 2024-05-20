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

/* user/edit.html.twig */
class __TwigTemplate_0a121746d65a7145557f9d0fb282adef extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Edit User";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"edit container \">
    <div class=\"profil my-5\">
     ";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
        <h3 class=\"mb-5 text-center\">Modifier profil</h3>
        
            ";
        // line 11
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_S_AD"))) {
            // line 12
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 12), 'row');
            yield "
            <hr>
            ";
        }
        // line 15
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 15), 'row');
        yield "
            <hr>
            ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "civilite", [], "any", true, true, false, 17)) {
            // line 18
            yield "            <div class=\"champ d-flex\">
            <div class=\"civ\">
                ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "civilite", [], "any", false, false, false, 20), 'row');
            yield "
            </div>
                ";
        }
        // line 23
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", true, true, false, 23)) {
            // line 24
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 24), 'row');
            yield "
            </div>
            <hr>
            ";
        }
        // line 28
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "siren", [], "any", true, true, false, 28)) {
            // line 29
            yield "            <div class=\"champ d-flex\">
            <div class=\"sir\">
                ";
            // line 31
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "siren", [], "any", false, false, false, 31), 'row');
            yield "
            </div>
                ";
        }
        // line 34
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "formeJuridique", [], "any", true, true, false, 34)) {
            // line 35
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "formeJuridique", [], "any", false, false, false, 35), 'row');
            yield "
            </div>
            <hr>
            ";
        }
        // line 39
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 39), 'row');
        yield "
            <hr>
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 41), 'row');
        yield "
            <hr>
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 43), 'row');
        yield "
            <hr>
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 45), 'row');
        yield "
            <hr>
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "complementAdresse", [], "any", false, false, false, 47), 'row');
        yield "
            <hr>
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "codePostal", [], "any", false, false, false, 49), 'row');
        yield "
            <hr>
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 51), 'row');
        yield "
            <hr>
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 53), 'row');
        yield "

        <h3 class=\"text-center my-5\">Modifier mot de passe</h3>
            <div class=\"\">
                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "oldPassword", [], "any", false, false, false, 57), 'row');
        yield "
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 58), "first", [], "any", false, false, false, 58), 'row');
        yield "
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 59), "second", [], "any", false, false, false, 59), 'row');
        yield "
            </div>

            ";
        // line 63
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "

        <div class=\"row\">
            <div class=\"d-flex justify-content-around mt-3\">
                    <button type=\"submit\" class=\"btn btn-success\">Mettre à jour le profil</button>
                     ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                <form method=\"post\" action=\"";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 69)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sur de vouloir supprimer votre compte ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 70
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 70))), "html", null, true);
        yield "\">
                    <button class=\"btn btn-danger\">Supprimer mon compte</button>
                </form>
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
        return "user/edit.html.twig";
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
        return array (  206 => 70,  202 => 69,  198 => 68,  189 => 63,  183 => 59,  179 => 58,  175 => 57,  168 => 53,  163 => 51,  158 => 49,  153 => 47,  148 => 45,  143 => 43,  138 => 41,  132 => 39,  124 => 35,  121 => 34,  115 => 31,  111 => 29,  108 => 28,  100 => 24,  97 => 23,  91 => 20,  87 => 18,  85 => 17,  79 => 15,  72 => 12,  70 => 11,  64 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/edit.html.twig", "/Users/dvpt/Desktop/ong2/templates/user/edit.html.twig");
    }
}
