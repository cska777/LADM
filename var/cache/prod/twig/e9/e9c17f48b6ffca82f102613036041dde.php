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

/* home/actions.html.twig */
class __TwigTemplate_f39d7c65f638c6fd719c8b268a538cb0 extends Template
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
        // line 1
        yield "<section id=\"nos-actions\">
    <style>
        .card-nos-actions {
            transition: transform 0.3s ease;
        }

        .card-nos-actions:hover {
            transform: scale(1.1); /* Agrandir la carte de 10% */
            background-color: #032b43; /* Couleur de fond bleue */
        }
    </style>

    <div id=\"tete-nos-actions\">
        <h2 class=\"pb-4\">
            Nos actions
        </h2>
        <p>The social, cultural, technological and environmental problems in which we are committing ourselves every day to achieve better results and sustainable development that allows us to provide a better quality of life to thousands of communities around the world.</p>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Sélectionnez toutes les cartes et ajoutez des écouteurs d'événements pour le survol de la souris
            document.querySelectorAll('.card-nos-actions').forEach(card => {
                card.addEventListener('mouseover', () => {
                    card.classList.add('hovered');
                });

                card.addEventListener('mouseout', () => {
                    card.classList.remove('hovered');
                });
            });
        });
    </script>

    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 36
            yield "        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 36) % 4) == 1)) {
                // line 37
                yield "            </div><div class=\"row justify-content-center\">
        ";
            }
            // line 39
            yield "            
        <div class=\"card card-nos-actions\" >
            <div class=\"card-body\">
                <h4 class=\"card-title h5 h4-sm\">";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "titre", [], "any", false, false, false, 42), "html", null, true);
            yield "</h4>
                <p class=\"card-text\">";
            // line 43
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "description", [], "any", false, false, false, 43));
            yield "</p>
            </div>
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "</section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/actions.html.twig";
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
        return array (  125 => 47,  107 => 43,  103 => 42,  98 => 39,  94 => 37,  91 => 36,  74 => 35,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/actions.html.twig", "/Users/dvpt/Desktop/ong2/templates/home/actions.html.twig");
    }
}
