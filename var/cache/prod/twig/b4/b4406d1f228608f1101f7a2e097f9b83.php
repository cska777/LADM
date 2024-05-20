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

/* @EasyAdmin/includes/_js_assets.html.twig */
class __TwigTemplate_c7decf267bd9fe5c6233660e6eb1649c extends Template
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
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["assets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 3
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "preload", [], "any", false, false, false, 3)) {
                // line 4
                yield "        <link rel=\"preload\" href=\"";
                yield $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "preload", $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "value", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "packageName", [], "any", false, false, false, 4)), ["as" => "script", "nopush" => CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "nopush", [], "any", false, false, false, 4)]);
                yield "\"
        ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "htmlAttributes", [], "any", false, false, false, 5));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["attr"], "html", null, true);
                    yield "=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html_attr");
                    yield "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">
    ";
            } else {
                // line 7
                yield "        <script src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "value", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "packageName", [], "any", false, false, false, 7)), "html", null, true);
                yield "\" ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "async", [], "any", false, false, false, 7)) ? ("async") : (""));
                yield " ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "defer", [], "any", false, false, false, 7)) ? ("defer") : (""));
                yield "
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "htmlAttributes", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["attr"], "html", null, true);
                    yield "=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html_attr");
                    yield "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "></script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/includes/_js_assets.html.twig";
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
        return array (  74 => 8,  65 => 7,  50 => 5,  45 => 4,  42 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/includes/_js_assets.html.twig", "/Users/dvpt/Desktop/ong2/vendor/easycorp/easyadmin-bundle/src/Resources/views/includes/_js_assets.html.twig");
    }
}
