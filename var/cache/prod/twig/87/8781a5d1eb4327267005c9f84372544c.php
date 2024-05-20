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

/* legal_notice/index.html.twig */
class __TwigTemplate_e15ded55ed19dc2b9320097e4ec06631 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "legal_notice/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Mentions Légales";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-6\">
          </br> </br>  <h1 class=\"text-center blue\">Mentions Légales</h1>
            <hr class=\"my-4\">
            <p class=\"text-muted text-center\">Informations importantes concernant votre utilisation de ce site.</p>
        </div>
        <div class=\"col-md-6 text-center\">
            <img src=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/img/legal-notice.jpeg"), "html", null, true);
        yield "\" alt=\"Legal Balance Scales\" class=\"img-fluid mb-3\"> 
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2 class=\"section-title\">Éditeur du site</h2>
            <p>
                <strong>Nom de l'entreprise/client :</strong> ONG Les Amis du Monde<br>
                <strong>Adresse du siège :</strong> (Renseignez l'adresse complète du siège de l'ONG)<br>
                <strong>SIRET :</strong> (Renseignez le numéro SIRET de l'ONG)<br>
                <strong>APE :</strong> (Renseignez le code APE de l'ONG)<br>
            </p>

      <h2 class=\"section-title\" >Responsable de la publication</h2>
      <p>
        Nom : Djah Zidago Lazare<br>
        Fonction : Président de l'ONG Les Amis du Monde<br>
        Email : zidagolazare@hotmail.com
      </p>
      <hr>
      <h2 class=\"section-title\" >Hébergeur du site</h2>
      <p>
        Nom de l'hébergeur : (Renseignez le nom de l'hébergeur du site)<br>
        Adresse : (Renseignez l'adresse de l'hébergeur)
      </p>
      <hr>
      <h2 class=\"section-title\" >Propriété intellectuelle</h2>
      <p>
        L'intégralité du contenu de ce site (textes, images, logos, sons, etc.) est protégé par la législation française et internationale sur le droit d'auteur et la propriété intellectuelle.
        Toute reproduction, représentation, modification, publication, transmission, totale ou partielle du contenu du site est interdite sans autorisation écrite préalable de l'ONG Les Amis du Monde.
      </p>
      <hr>
      <h2 class=\"section-title\" >Limitation de responsabilité</h2>
      <p>
        L'ONG Les Amis du Monde ne pourra être tenue pour responsable de tout dommage direct ou indirect, matériel ou immatériel, causé à l'utilisateur suite à l'accès ou à l'utilisation du site, y compris, mais sans s'y limiter, tout dommage aux systèmes informatiques de l'utilisateur, à ses logiciels ou à ses données.
        L'ONG Les Amis du Monde met tout en œuvre pour offrir aux utilisateurs des informations et des contenus fiables et actualisés. Néanmoins, elle ne saurait garantir l'exactitude, la complétude et l'actualité de l'ensemble des informations mises à la disposition des utilisateurs.
      </p>
      <hr>
      <h2 class=\"section-title\" >Loi applicable</h2>
      <p>
        Les présentes mentions légales sont soumises à la législation française. En cas de litige, les tribunaux français seront seuls compétents.
      </p>
      <hr>
      <h2 class=\"section-title\" >Mise à jour des mentions légales</h2>
      <p>
        L'ONG Les Amis du Monde se réserve le droit de modifier et de mettre à jour les présentes mentions légales à tout moment et sans préavis. L'utilisateur est invité à les consulter régulièrement.
      </p>
      <hr>
      <h2 class=\"section-title\" >Pour nous contacter</h2>
      <p>
        Pour toute question relative aux mentions légales, vous pouvez contacter l'ONG Les Amis du Monde à l'adresse suivante :
      </p>
      <ul>
        <li>ONG Les Amis du Monde</li>
        <li>Adresse : (Renseignez l'adresse complète du siège de l'ONG)</li>
        <li>Email : [email address removed] (remplacez par une adresse email dédiée)</li>
        <li>Téléphone : (Renseignez le numéro de téléphone de l'ONG)</li>
      </ul>
    </div>
  </div>
</div>
<style> 
.section-title {
    font-size: 24px;
    color: #007bff;
}
.blue {
    color: #007bff;
}
.text-muted {
    color: #6c757d;
}
.my-4 {
    margin-top: 2rem;
    margin-bottom: 2rem;
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
        return "legal_notice/index.html.twig";
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
        return array (  71 => 15,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "legal_notice/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/legal_notice/index.html.twig");
    }
}
