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

/* base.html.twig */
class __TwigTemplate_cb8c4b4aa4707a3d6a3e647bd37bd108 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"description\" content=\"Promouvoir l'esprit de l'ONG qui est le REA (Réaménagement de l'esprit africain = apprendre à compter sur soit même, c-a-d arriver à s'en sortir de manière autonome en travaillant et en développant des activités locales) \">
\t\t<meta name=\"canonical\" href=\"www.les-amis-du-monde.com\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t<title>
\t\t\t";
        // line 10
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 12
        yield "\t\t</title>
\t\t";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 44
        yield "\t</head>
\t<body>
\t\t";
        // line 47
        yield "\t\t<script src=\"/bundles/fosckeditor/ckeditor/ckeditor.js\"></script>
\t\t";
        // line 49
        yield "\t\t";
        yield from         $this->loadTemplate("fragment/_menu.html.twig", "base.html.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "\t\t<main>
\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", ["succes"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            yield "\t\t\t\t<div class=\"alert alert-success text-center\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            yield "\t\t\t\t<div class=\"alert alert-danger text-center\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 58
        yield "\t\t</main>
\t\t";
        // line 60
        yield "\t\t";
        yield from         $this->loadTemplate("fragment/_footer.html.twig", "base.html.twig", 60)->unwrap()->yield($context);
        // line 61
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 73
        yield "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Les Amis du Monde
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
\t\t\t<style>
\t\t\t\t@import url('https://fonts.googleapis.com/css?family=Zen%20Antique:700|Zen%20Antique:400');
\t\t\t</style>
\t\t\t<link rel=\"shortcut icon\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\">
\t\t\t<link rel=\"icon\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/menu.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/footer.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/show.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/login.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/edit.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/adhesion.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/don.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/dash_adherent.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/newsletter.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/home.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/contact.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/sidebar.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/article.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/action.css"), "html", null, true);
        yield "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/new_article.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/actualites.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/show_article.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/css/about-us.css"), "html", null, true);
        yield "\">
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css\" rel=\"stylesheet\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
\t\t\t<script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/js/navbar-fix.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/js/adhesion.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/js/don.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/js/sidebar.js"), "html", null, true);
        yield "\"></script>

\t\t\t<script src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/js/filtresTabBord.js"), "html", null, true);
        yield "\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  324 => 71,  319 => 69,  315 => 68,  309 => 65,  305 => 64,  301 => 63,  296 => 62,  286 => 61,  267 => 57,  251 => 39,  247 => 38,  243 => 37,  239 => 36,  234 => 34,  230 => 33,  226 => 32,  222 => 31,  218 => 30,  214 => 29,  210 => 28,  206 => 27,  202 => 26,  198 => 25,  194 => 24,  190 => 23,  186 => 22,  182 => 21,  178 => 20,  174 => 19,  170 => 18,  162 => 14,  152 => 13,  131 => 10,  118 => 73,  115 => 61,  112 => 60,  109 => 58,  106 => 57,  97 => 55,  92 => 54,  83 => 52,  79 => 51,  76 => 50,  73 => 49,  70 => 47,  66 => 44,  64 => 13,  61 => 12,  59 => 10,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"description\" content=\"Promouvoir l'esprit de l'ONG qui est le REA (Réaménagement de l'esprit africain = apprendre à compter sur soit même, c-a-d arriver à s'en sortir de manière autonome en travaillant et en développant des activités locales) \">
\t\t<meta name=\"canonical\" href=\"www.les-amis-du-monde.com\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t<title>
\t\t\t{% block title %}Les Amis du Monde
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
\t\t\t<style>
\t\t\t\t@import url('https://fonts.googleapis.com/css?family=Zen%20Antique:700|Zen%20Antique:400');
\t\t\t</style>
\t\t\t<link rel=\"shortcut icon\" href=\"{{ asset(\"images/favicon.ico\") }}\" type=\"image/x-icon\">
\t\t\t<link rel=\"icon\" href=\"{{ asset(\"images/favicon.ico\") }}\" type=\"image/x-icon\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/app.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/menu.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/footer.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/show.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/login.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/edit.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/adhesion.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset(\"styles/css/don.css\")}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('styles/css/dash_adherent.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/newsletter.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/home.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/contact.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/sidebar.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/article.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/action.css\") }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/new_article.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/actualites.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/show_article.css\") }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"styles/css/about-us.css\") }}\">
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css\" rel=\"stylesheet\"/>
\t\t{% endblock %}
\t</head>
\t<body>
\t\t{# !!!!! NE PAS DEPLACER !!!! #}
\t\t<script src=\"/bundles/fosckeditor/ckeditor/ckeditor.js\"></script>
\t\t{# -------------------------- #}
\t\t{% include 'fragment/_menu.html.twig' %}
\t\t<main>
\t\t\t{% for message in app.flashes('succes') %}
\t\t\t\t<div class=\"alert alert-success text-center\">{{ message }}</div>
\t\t\t{% endfor %}
\t\t\t{% for message in app.flashes('danger') %}
\t\t\t\t<div class=\"alert alert-danger text-center\">{{ message }}</div>
\t\t\t{% endfor %}
\t\t\t{% block body %}{% endblock %}
\t\t</main>
\t\t{# \t\t{% include 'fragment/newsletter.html.twig'  %} #}
\t\t{% include 'fragment/_footer.html.twig'  %}
\t\t{% block javascripts %}
            {{ encore_entry_script_tags('app') }}
\t\t\t<script src=\"{{asset(\"styles/js/navbar-fix.js\")}}\"></script>
\t\t\t<script src=\"{{asset(\"/app.js\")}}\"></script>
\t\t\t<script src=\"{{asset(\"styles/js/adhesion.js\")}}\"></script>
\t\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"{{asset(\"styles/js/don.js\")}}\"></script>
\t\t\t<script src=\"{{asset(\"styles/js/sidebar.js\")}}\"></script>

\t\t\t<script src=\"{{asset(\"styles/js/filtresTabBord.js\")}}\"></script>
\t\t{% endblock %}
\t</body>
</html>
", "base.html.twig", "/Users/davidsat/Desktop/LADM/templates/base.html.twig");
    }
}
