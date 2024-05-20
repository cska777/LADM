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

/* privacy/index.html.twig */
class __TwigTemplate_cef7fddd66d517be48eb3e12db5b8127 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privacy/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privacy/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "privacy/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Politique de Confidentialité";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "
<div class=\"container mt-5\">
  <div class=\"row\">
    <div class=\"col-md-8 offset-md-2 text-center\">
      </br> <h1 class = \"section-title\" >Politique de Confidentialité</h1>
      <p><strong>Mise à jour le 29 mars 2024</strong></p>
      <p>
        ONG Les Amis du Monde s'engage à protéger la vie privée de ses utilisateurs et à respecter les lois et réglementations applicables en matière de protection des données personnelles. Cette politique de confidentialité explique comment nous recueillons, utilisons et partageons vos informations personnelles lorsque vous utilisez notre site Web, nos applications mobiles et nos autres services en ligne.
      </p>
      
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-12 text-center\">
      <img src=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/img/privacy-policy.png"), "html", null, true);
        yield "\" alt=\"Privacy Policy\" class=\"img-responsive\">
    </div>
  </div>
</br>
  <h2 class = \"section-title\">Quelles informations personnelles recueillons-nous ?</h2>

  <ul>
    <li>Informations que vous nous fournissez : Cela inclut les informations que vous nous fournissez lorsque vous créez un compte, faites un don, faites du bénévolat, ou nous contactez. Ces informations peuvent inclure votre nom, votre adresse e-mail, votre numéro de téléphone, votre adresse postale, votre date de naissance et les informations de paiement.</li>
    <li>Informations collectées automatiquement : Lorsque vous visitez notre site Web ou utilisez nos applications mobiles, nous pouvons collecter automatiquement certaines informations sur votre appareil et votre utilisation de nos services. Ces informations peuvent inclure votre adresse IP, votre type de navigateur, votre système d'exploitation, les pages que vous avez visitées et les liens sur lesquels vous avez cliqué.</li>
    <li>Informations provenant de sources tierces : Nous pouvons également recevoir des informations vous concernant de sources tierces, telles que des partenaires publicitaires ou des réseaux sociaux.</li>
  </ul>

  <h2 class = \"section-title\">Comment utilisons-nous vos informations personnelles ?</h2>

  <ul>
    <li>Fournir et améliorer nos services : Nous utilisons vos informations personnelles pour vous fournir les services que vous avez demandés, tels que la possibilité de faire un don, de faire du bénévolat ou de recevoir des informations sur notre organisation. Nous utilisons également vos informations pour améliorer nos services et pour vous offrir une expérience plus personnalisée.</li>
    <li>Communiquer avec vous : Nous pouvons utiliser vos informations personnelles pour vous contacter par e-mail, par téléphone ou par courrier postal pour vous fournir des informations sur notre organisation, nos événements et nos campagnes de financement. Nous pouvons également utiliser vos informations pour répondre à vos questions et à vos demandes.</li>
    <li>Analyser et améliorer nos performances : Nous pouvons utiliser vos informations personnelles pour analyser et améliorer nos performances. Cela peut inclure l'utilisation de vos informations pour suivre l'efficacité de nos campagnes de marketing et pour identifier les domaines dans lesquels nous pouvons améliorer nos services.</li>
  </ul>

  <h2 class = \"section-title\">Avec qui partageons-nous vos informations personnelles ?</h2>

  <ul>
    <li>Avec votre consentement : Nous pouvons partager vos informations personnelles avec des tiers lorsque vous nous avez donné votre consentement pour le faire.</li>
    <li>Avec des prestataires de services : Nous pouvons partager vos informations personnelles avec des prestataires de services qui nous aident à fournir nos services. Ces prestataires de services peuvent être tenus de traiter vos informations personnelles pour nous fournir les services que nous leur avons demandés.</li>
    <li>Pour des raisons légales : Nous pouvons divulguer vos informations personnelles si la loi l'exige ou si nous pensons de bonne foi que la divulgation est nécessaire pour protéger nos droits ou ceux de tiers.</li>
  </ul>

  <h2 class = \"section-title\">Combien de temps conservons-nous vos informations personnelles ?</h2>

  <p>
    Nous conservons vos informations personnelles aussi longtemps que nécessaire pour vous fournir les services que vous avez demandés et pour atteindre les objectifs décrits dans cette politique de confidentialité.
  </p>

  <h2 class = \"section-title\">Quels sont vos droits en matière de protection des données ?</h2>

  <p>
    Vous disposez de certains droits en matière de protection des données, notamment :
  </p>

  <ul>
    <li>Le droit d'accès à vos informations personnelles : Vous avez le droit de demander une copie des informations personnelles que nous détenons à votre sujet.</li>
    <li>Le droit de rectifier vos informations personnelles : Vous avez le droit de nous demander de corriger vos informations personnelles si elles sont inexactes ou incomplètes.</li>
    <li>Le droit de supprimer vos informations personnelles : Vous avez le droit de nous demander de supprimer vos informations personnelles dans certains cas.</li>
    <li>Le droit de limiter le traitement de vos informations personnelles : Vous avez le droit de nous demander de limiter le traitement de vos informations personnelles dans certains cas.</li>
    <li>Le droit de vous opposer au traitement de vos informations personnelles : Vous avez le droit de vous opposer au traitement de vos informations personnelles dans certains cas.</li>
        <li>Le droit à la portabilité de vos données : Vous avez le droit de recevoir les informations personnelles que vous nous avez fournies dans un format structuré, couramment utilisé et lisible par machine, et de les transmettre à un autre responsable du traitement.</li>
  </ul>

  <h2 class = \"section-title\">Comment pouvez-vous exercer vos droits ?</h2>

  <p>
    Pour exercer vos droits en matière de protection des données, vous pouvez nous contacter à l'adresse suivante :
  </p>

  <ul>
    <li>ONG Les Amis du Monde</li>
    <li>Adresse</li>
    <li>Email</li>
    <li>Téléphone</li>
  </ul>

  <h2 class = \"section-title\">Modifications de la politique de confidentialité</h2>

  <p>
    Nous pouvons modifier cette politique de confidentialité de temps à autre. Nous vous informerons de toute modification importante en publiant la politique de confidentialité révisée sur notre site Web.
  </p>
</div>

<style> 
.section-title {
    color: #007bff;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "privacy/index.html.twig";
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
        return array (  106 => 21,  90 => 7,  80 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Politique de Confidentialité{% endblock %}

{% block body %}

<div class=\"container mt-5\">
  <div class=\"row\">
    <div class=\"col-md-8 offset-md-2 text-center\">
      </br> <h1 class = \"section-title\" >Politique de Confidentialité</h1>
      <p><strong>Mise à jour le 29 mars 2024</strong></p>
      <p>
        ONG Les Amis du Monde s'engage à protéger la vie privée de ses utilisateurs et à respecter les lois et réglementations applicables en matière de protection des données personnelles. Cette politique de confidentialité explique comment nous recueillons, utilisons et partageons vos informations personnelles lorsque vous utilisez notre site Web, nos applications mobiles et nos autres services en ligne.
      </p>
      
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-12 text-center\">
      <img src=\"{{ asset('styles/img/privacy-policy.png') }}\" alt=\"Privacy Policy\" class=\"img-responsive\">
    </div>
  </div>
</br>
  <h2 class = \"section-title\">Quelles informations personnelles recueillons-nous ?</h2>

  <ul>
    <li>Informations que vous nous fournissez : Cela inclut les informations que vous nous fournissez lorsque vous créez un compte, faites un don, faites du bénévolat, ou nous contactez. Ces informations peuvent inclure votre nom, votre adresse e-mail, votre numéro de téléphone, votre adresse postale, votre date de naissance et les informations de paiement.</li>
    <li>Informations collectées automatiquement : Lorsque vous visitez notre site Web ou utilisez nos applications mobiles, nous pouvons collecter automatiquement certaines informations sur votre appareil et votre utilisation de nos services. Ces informations peuvent inclure votre adresse IP, votre type de navigateur, votre système d'exploitation, les pages que vous avez visitées et les liens sur lesquels vous avez cliqué.</li>
    <li>Informations provenant de sources tierces : Nous pouvons également recevoir des informations vous concernant de sources tierces, telles que des partenaires publicitaires ou des réseaux sociaux.</li>
  </ul>

  <h2 class = \"section-title\">Comment utilisons-nous vos informations personnelles ?</h2>

  <ul>
    <li>Fournir et améliorer nos services : Nous utilisons vos informations personnelles pour vous fournir les services que vous avez demandés, tels que la possibilité de faire un don, de faire du bénévolat ou de recevoir des informations sur notre organisation. Nous utilisons également vos informations pour améliorer nos services et pour vous offrir une expérience plus personnalisée.</li>
    <li>Communiquer avec vous : Nous pouvons utiliser vos informations personnelles pour vous contacter par e-mail, par téléphone ou par courrier postal pour vous fournir des informations sur notre organisation, nos événements et nos campagnes de financement. Nous pouvons également utiliser vos informations pour répondre à vos questions et à vos demandes.</li>
    <li>Analyser et améliorer nos performances : Nous pouvons utiliser vos informations personnelles pour analyser et améliorer nos performances. Cela peut inclure l'utilisation de vos informations pour suivre l'efficacité de nos campagnes de marketing et pour identifier les domaines dans lesquels nous pouvons améliorer nos services.</li>
  </ul>

  <h2 class = \"section-title\">Avec qui partageons-nous vos informations personnelles ?</h2>

  <ul>
    <li>Avec votre consentement : Nous pouvons partager vos informations personnelles avec des tiers lorsque vous nous avez donné votre consentement pour le faire.</li>
    <li>Avec des prestataires de services : Nous pouvons partager vos informations personnelles avec des prestataires de services qui nous aident à fournir nos services. Ces prestataires de services peuvent être tenus de traiter vos informations personnelles pour nous fournir les services que nous leur avons demandés.</li>
    <li>Pour des raisons légales : Nous pouvons divulguer vos informations personnelles si la loi l'exige ou si nous pensons de bonne foi que la divulgation est nécessaire pour protéger nos droits ou ceux de tiers.</li>
  </ul>

  <h2 class = \"section-title\">Combien de temps conservons-nous vos informations personnelles ?</h2>

  <p>
    Nous conservons vos informations personnelles aussi longtemps que nécessaire pour vous fournir les services que vous avez demandés et pour atteindre les objectifs décrits dans cette politique de confidentialité.
  </p>

  <h2 class = \"section-title\">Quels sont vos droits en matière de protection des données ?</h2>

  <p>
    Vous disposez de certains droits en matière de protection des données, notamment :
  </p>

  <ul>
    <li>Le droit d'accès à vos informations personnelles : Vous avez le droit de demander une copie des informations personnelles que nous détenons à votre sujet.</li>
    <li>Le droit de rectifier vos informations personnelles : Vous avez le droit de nous demander de corriger vos informations personnelles si elles sont inexactes ou incomplètes.</li>
    <li>Le droit de supprimer vos informations personnelles : Vous avez le droit de nous demander de supprimer vos informations personnelles dans certains cas.</li>
    <li>Le droit de limiter le traitement de vos informations personnelles : Vous avez le droit de nous demander de limiter le traitement de vos informations personnelles dans certains cas.</li>
    <li>Le droit de vous opposer au traitement de vos informations personnelles : Vous avez le droit de vous opposer au traitement de vos informations personnelles dans certains cas.</li>
        <li>Le droit à la portabilité de vos données : Vous avez le droit de recevoir les informations personnelles que vous nous avez fournies dans un format structuré, couramment utilisé et lisible par machine, et de les transmettre à un autre responsable du traitement.</li>
  </ul>

  <h2 class = \"section-title\">Comment pouvez-vous exercer vos droits ?</h2>

  <p>
    Pour exercer vos droits en matière de protection des données, vous pouvez nous contacter à l'adresse suivante :
  </p>

  <ul>
    <li>ONG Les Amis du Monde</li>
    <li>Adresse</li>
    <li>Email</li>
    <li>Téléphone</li>
  </ul>

  <h2 class = \"section-title\">Modifications de la politique de confidentialité</h2>

  <p>
    Nous pouvons modifier cette politique de confidentialité de temps à autre. Nous vous informerons de toute modification importante en publiant la politique de confidentialité révisée sur notre site Web.
  </p>
</div>

<style> 
.section-title {
    color: #007bff;
}
</style>
{% endblock %}", "privacy/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/privacy/index.html.twig");
    }
}
