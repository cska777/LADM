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

/* user/Inscription.html.twig */
class __TwigTemplate_e733c831bcede11fa2eea3af5e076a8b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/Inscription.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Inscription";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<section id='sectionAdhesion' style=\"margin-top:8%\">
\t<div class=\"container w-75\">
        
        <div id=\"formPersPhy\">
        <h1 class=\"text-center mb-0\">Inscription</h1>
            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 12), 'row');
        yield "
            <div class=\"d-flex civiliteSelectDiv\" style=\"\">
                <div class='w-25'>
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "civilite", [], "any", false, false, false, 15), 'row');
        yield "
                </div>
                <div class='w-100 ms-5'>
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 18), 'row');
        yield "
                </div>
            </div>
            <div class=\"d-flex civiliteSelectDiv\" style=\"\">
                <div class='w-100'>
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "siren", [], "any", false, false, false, 23), 'row');
        yield "
                </div>
                <div class='w-100 ms-5'>
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "formeJuridique", [], "any", false, false, false, 26), 'row');
        yield "
                </div>
            </div>
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 29), 'row');
        yield "
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 30), 'row');
        yield "
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 31), 'row');
        yield "
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 32), 'row');
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "complementAdresse", [], "any", false, false, false, 33), 'row');
        yield "
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "codePostal", [], "any", false, false, false, 34), 'row');
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 35), 'row');
        yield "
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 36), 'row');
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 37), 'row');
        yield "
            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
            ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
        </div>
\t</div>
</section>
<script>
    // Sélectionnez les éléments à masquer/afficher
    const adherentFields = document.querySelectorAll('#user_civilite, #user_prenom');
    const entrepriseFields = document.querySelectorAll('#user_siren, #user_formeJuridique');

    // Masquez les champs pour le type \"entreprise\" par défaut
    entrepriseFields.forEach(field => {
        field.style.display = 'none';
    });

    // Ajoutez un écouteur d'événement sur le champ \"type\"
    const typeSelect = document.querySelector('#user_type');
    typeSelect.addEventListener('change', function() {
        if (this.value === 'adherent') {
            // Affichez les champs pour le type \"adhérent\"
            adherentFields.forEach(field => {
                field.style.display = 'block';
            });
            // Masquez les champs pour le type \"entreprise\"
            entrepriseFields.forEach(field => {
                field.style.display = 'none';
            });
        } else if (this.value === 'entreprise') {
            // Masquez les champs pour le type \"adhérent\"
            adherentFields.forEach(field => {
                field.style.display = 'none';
            });
            // Affichez les champs pour le type \"entreprise\"
            entrepriseFields.forEach(field => {
                field.style.display = 'block';
            });
        }
    });
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/Inscription.html.twig";
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
        return array (  140 => 39,  135 => 37,  131 => 36,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  97 => 26,  91 => 23,  83 => 18,  77 => 15,  71 => 12,  67 => 11,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/Inscription.html.twig", "/Users/dvpt/Desktop/ong2/templates/user/Inscription.html.twig");
    }
}
