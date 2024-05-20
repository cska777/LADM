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

/* @FOSCKEditor/Form/ckeditor_widget.html.twig */
class __TwigTemplate_172c6582016d58bbd9d61919e95dfb62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ckeditor_widget' => [$this, 'block_ckeditor_widget'],
            'ckeditor_javascript' => [$this, 'block_ckeditor_javascript'],
            '_ckeditor_javascript' => [$this, 'block__ckeditor_javascript'],
            'ckeditor_widget_extra' => [$this, 'block_ckeditor_widget_extra'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('ckeditor_widget', $context, $blocks);
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('ckeditor_javascript', $context, $blocks);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('_ckeditor_javascript', $context, $blocks);
        return; yield '';
    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "    <textarea ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["value"] ?? null), "html", null, true);
        yield "</textarea>

    ";
        // line 4
        if ((($context["enable"] ?? null) &&  !($context["async"] ?? null))) {
            // line 5
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("_ckeditor_javascript", $context, $blocks);
            yield "
    ";
        }
        return; yield '';
    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        if ((($context["enable"] ?? null) && ($context["async"] ?? null))) {
            // line 11
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("_ckeditor_javascript", $context, $blocks);
            yield "
    ";
        }
        return; yield '';
    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        yield "    ";
        if (($context["autoload"] ?? null)) {
            // line 17
            yield "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            yield $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderBasePath(($context["base_path"] ?? null));
            yield "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            yield $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderJsPath(($context["js_path"] ?? null));
            yield "\"></script>
        ";
            // line 21
            if (($context["jquery"] ?? null)) {
                // line 22
                yield "            <script type=\"text/javascript\" src=\"";
                yield $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderJsPath(($context["jquery_path"] ?? null));
                yield "\"></script>
        ";
            }
            // line 24
            yield "    ";
        }
        // line 25
        yield "    <script type=\"text/javascript\">
        ";
        // line 26
        if (($context["jquery"] ?? null)) {
            // line 27
            yield "            \$(function () {
        ";
        }
        // line 29
        yield "
        ";
        // line 30
        if (($context["require_js"] ?? null)) {
            // line 31
            yield "            require(['ckeditor'], function() {
        ";
        }
        // line 33
        yield "
        ";
        // line 34
        yield $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderDestroy(($context["id"] ?? null));
        yield "

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["plugins"] ?? null));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            yield "            ";
            yield $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderPlugin($context["plugin_name"], $context["plugin"]);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            yield "            ";
            yield $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderStylesSet($context["style_name"], $context["style"]);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            yield "            ";
            yield $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderTemplate($context["template_name"], $context["template"]);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "
        ";
        // line 48
        yield from $this->unwrap()->yieldBlock('ckeditor_widget_extra', $context, $blocks);
        // line 49
        yield "
        ";
        // line 50
        yield $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderWidget(($context["id"] ?? null), ($context["config"] ?? null), ["auto_inline" =>         // line 51
($context["auto_inline"] ?? null), "inline" =>         // line 52
($context["inline"] ?? null), "input_sync" =>         // line 53
($context["input_sync"] ?? null), "filebrowsers" =>         // line 54
($context["filebrowsers"] ?? null)]);
        // line 55
        yield "

        ";
        // line 57
        if (($context["require_js"] ?? null)) {
            // line 58
            yield "            });
        ";
        }
        // line 60
        yield "
        ";
        // line 61
        if (($context["jquery"] ?? null)) {
            // line 62
            yield "            });
        ";
        }
        // line 64
        yield "    </script>
";
        return; yield '';
    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@FOSCKEditor/Form/ckeditor_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  236 => 48,  230 => 64,  226 => 62,  224 => 61,  221 => 60,  217 => 58,  215 => 57,  211 => 55,  209 => 54,  208 => 53,  207 => 52,  206 => 51,  205 => 50,  202 => 49,  200 => 48,  197 => 47,  188 => 45,  184 => 44,  181 => 43,  172 => 41,  168 => 40,  165 => 39,  156 => 37,  152 => 36,  147 => 34,  144 => 33,  140 => 31,  138 => 30,  135 => 29,  131 => 27,  129 => 26,  126 => 25,  123 => 24,  117 => 22,  115 => 21,  111 => 20,  106 => 18,  103 => 17,  100 => 16,  96 => 15,  87 => 11,  84 => 10,  80 => 9,  71 => 5,  69 => 4,  61 => 2,  57 => 1,  52 => 15,  49 => 14,  47 => 9,  44 => 8,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSCKEditor/Form/ckeditor_widget.html.twig", "/Users/dvpt/Desktop/ong2/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
