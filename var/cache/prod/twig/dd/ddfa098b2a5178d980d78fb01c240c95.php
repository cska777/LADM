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

/* don/index.html.twig */
class __TwigTemplate_06872fad017af6cae3dca2d9a19fe3cc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "don/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Don
";
        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <div class=\"d-flex justify-content-center\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "\t\t<div id=\"donation-message\" class=\"alert alert-success\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "\t\t<div id=\"donation-message\" class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "\t</div>

\t<div class=\"bodyDivDon\">
\t\t<section class=\"sectionContainerDon d-flex justify-content-center\">
\t\t\t<section class=\"monDon\">
\t\t\t\t<div class=\"headMonDon headDivsDon\">1. Mon don</div>
\t\t\t\t<div class=\"monDonBody\">
\t\t\t\t\t<div class=\"divBtnDonFreq\">
\t\t\t\t\t\t<button id=\"paiementUneFois\" class=\"btnFreqDon checkedFreqDon paiementUneFois\">Je donne une fois</button>
\t\t\t\t\t\t<button id=\"paiementParMois\" class=\"btnFreqDon paiementParMois\">Je donne chaque mois</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"prixDon d-flex mt-4 justify-content-between\">
\t\t\t\t\t\t<button class=\"don1 donValeur\" data-value=\"10\">10 €</button>
\t\t\t\t\t\t<button class=\"don2 donValeur\" data-value=\"20\">20 €</button>
\t\t\t\t\t\t<button class=\"don3 donValeur\" data-value=\"30\">30 €</button>
\t\t\t\t\t\t<button class=\"don4 donValeur\" data-value=\"50\">50 €</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"donMontantLibre\">
\t\t\t\t\t\t<input type=\"text\" class=\"inputMontantLibre\" name=\"donMontantLibre\" placeholder=\"Montant libre\">
\t\t\t\t\t\t<span>&euro;</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<section class=\"mesCordonnees\">
\t\t\t\t<div class=\"headMesCoordonnees headDivsDon\">2. Mes coordonnées
\t\t\t\t</div>
\t\t\t\t<div class=\"mesCoordonneesBody\">
\t\t\t\t\t<div class=\"toggleDivCoor d-flex\">
\t\t\t\t\t\t<label class=\"switchCoor\">
\t\t\t\t\t\t\t<input id=\"switchCheck\" type=\"checkbox\"/>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"switchCoor\" id=\"textSwitch\">Je fais un don au nom d'une organisation ou d'une société.</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"switchFormPers pt-3\">
\t\t\t\t\t\t<select name=\"civiliteDon\" class=\"civiliteDon\">
\t\t\t\t\t\t\t<option value=\"\" selected disabled>Civilité *</option>
\t\t\t\t\t\t\t<option value=\"m\">M</option>
\t\t\t\t\t\t\t<option value=\"mme\">Mme</option>
\t\t\t\t\t\t\t<option value=\"autre\">Autre</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" class=\"nomDon\" placeholder=\"Nom *\">
\t\t\t\t\t\t<input type=\"text\" class=\"prenomDon\" placeholder=\"Prénom *\">
\t\t\t\t\t\t<input type=\"text\" name=\"adresseDon\" class=\"adresseDon\" placeholder=\"Adresse *\">
\t\t\t\t\t\t<input type=\"text\" name=\"complementAdresseDon\" class=\"complementAdresseDon\" placeholder=\"Complément d'adresse\">
\t\t\t\t\t\t<input type=\"number\" name=\"codePostalDon\" class=\"codePostalDon\" placeholder=\"Code postal *\">
\t\t\t\t\t\t<select name=\"selectPaysDon\" class=\"selectPaysDon\">
\t\t\t\t\t\t\t<option value=\"\" selected disabled>Pays *</option>
\t\t\t\t\t\t\t<option value=\"france\">France</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"number\" name=\"telDon\" class=\"telDon\" placeholder=\"Téléphone\">
\t\t\t\t\t\t<input type=\"email\" name=\"emailDon\" class=\"emailDon\" placeholder=\"Email\">
\t\t\t\t\t\t<label for=\"dateDeNaissanceDon\">Date de naissance</label><br>
\t\t\t\t\t\t<input type=\"date\" name=\"dateDeNaissanceDon\" class=\"dateDeNaissanceDon\">
\t\t\t\t\t\t<p>* Champs obligatoires (ces informations sont indispensables pour bénéficier de votre réduction fiscale)</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"switchFormSoc hiddenSwitch pt-3\">
\t\t\t\t\t\t<input type=\"text\" name=\"raisonSocialeDon\" class=\"raisonSocialeDon\" placeholder=\"Raison sociale\">
\t\t\t\t\t\t<input type=\"text\" name=\"formeJuridiqueDon\" class=\"formeJuridiqueDon\" placeholder=\"Forme juridique\">
\t\t\t\t\t\t<input type=\"text\" name=\"sirenDonSoc\" class=\"sirenDonSoc\" placeholder=\"SIREN\">
\t\t\t\t\t\t<input type=\"text\" name=\"adresseDonSoc\" class=\"adresseDonSoc\" placeholder=\"Adresse *\">
\t\t\t\t\t\t<input type=\"text\" name=\"complementAdresseDon\" class=\"complementAdresseDonSoc\" placeholder=\"Complément d'adresse\">
\t\t\t\t\t\t<input type=\"number\" name=\"codePostalDonSoc\" class=\"codePostalDonSoc\" placeholder=\"Code postal *\">
\t\t\t\t\t\t<select name=\"selectPaysDonSoc\" class=\"selectPaysDonSoc\">
\t\t\t\t\t\t\t<option value=\"\" selected disabled>Pays *</option>
\t\t\t\t\t\t\t<option value=\"france\">France</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"number\" name=\"telDonSoc\" class=\"telDonSoc\" placeholder=\"Téléphone\">
\t\t\t\t\t\t<input type=\"email\" name=\"emailDon\" class=\"emailDon\" placeholder=\"Email\">

\t\t\t\t\t\t<p>* Champs obligatoires (ces informations sont indispensables pour bénéficier de votre réduction fiscale)</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<section class=\"monReglement\">
\t\t\t\t<div class=\"headMonReglement headDivsDon\">3. Paiement
\t\t\t\t</div>
\t\t\t\t<div class=\"monReglementBody\">
\t\t\t\t\t<section id=\"paiementSecuriseDon\">
\t\t\t\t\t\t<p>Paiements hautement sécurisés grâce à la méthode de cryptage SSL 256 bits, la norme de sécurité la plus élevée.</p>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"moyenDonSection\">
\t\t\t\t\t\t<div class=\"d-flex moyenPaiementDivDon justify-content-center\">
\t\t\t\t\t\t\t<div class=\"text-center moyenSousDivDon moyenCheckedDivDon\">
\t\t\t\t\t\t\t\t<button class=\"btnMoyenDon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-credit-card\"></i><br><p>Payer par carte bancaire
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center moyenSousDivDon\">
\t\t\t\t\t\t\t\t<button class=\"btnMoyenDon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-building-columns\"></i><br><p>
\t\t\t\t\t\t\t\t\t\tPayer par prélèvement
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex moyenPaiementDivDon mt-3 justify-content-center\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"text-center moyenSousDivDon\">";
        // line 122
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center moyenSousDivDon\">
\t\t\t\t\t\t\t\t<button class=\"btnMoyenDon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-cc-stripe\"></i><br><p>Payer avec stripe
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>


\t\t\t\t\t<section class=\"d-flex\" id=\"sectionVMCDon\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<label for=\"mastercard\"><img src=\"";
        // line 135
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/img/logo/mastercard-logo.png"), "html", null, true);
        yield "\" alt=\"log mastercard\"></label><br>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"methodePaiement\" id=\"mastercardRadio\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<label for=\"visa\"><img src=\"";
        // line 139
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/img/logo/Visa-Logo.png"), "html", null, true);
        yield "\" alt=\"logo visa\"></label><br>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"methodePaiement\" id=\"visaRadio\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<label for=\"cb\"><img src=\"";
        // line 143
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/img/logo/logo-cb.jpg"), "html", null, true);
        yield "\" alt=\"logo cb\"></label><br>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"methodePaiement\" id=\"cbRadio\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t\t<section id=\"sectionCardInfoDon\">
\t\t\t\t\t\t<input type=\"text\" name=\"nomCarte\" class=\"nomCarteCotisationDon\" placeholder=\"Nom sur la carte\"><br>
\t\t\t\t\t\t<input type=\"text\" name=\"cardNumberCotisationDon\" class=\"cardNumberCotisationDon\" placeholder=\"Numéro de la carte\"><input type=\"number\" name=\"codeCard\" class=\"codeCardCotisationDon\" placeholder=\"Code CVC\">
\t\t\t\t\t\t<div class=\"mois-anneeCardCotisation d-flex\">
\t\t\t\t\t\t\t<select name=\"mois\" class=\"moisCotisationDon\">
\t\t\t\t\t\t\t\t<option value=\"Mois\" disabled selected>Mois</option>
\t\t\t\t\t\t\t\t<option value=\"01\">Janvier</option>
\t\t\t\t\t\t\t\t<option value=\"02\">Février</option>
\t\t\t\t\t\t\t\t<option value=\"03\">Mars</option>
\t\t\t\t\t\t\t\t<option value=\"04\">Avril</option>
\t\t\t\t\t\t\t\t<option value=\"05\">Mai</option>
\t\t\t\t\t\t\t\t<option value=\"06\">Juin</option>
\t\t\t\t\t\t\t\t<option value=\"07\">Juillet</option>
\t\t\t\t\t\t\t\t<option value=\"08\">Août</option>
\t\t\t\t\t\t\t\t<option value=\"09\">Septembre</option>
\t\t\t\t\t\t\t\t<option value=\"10\">Octobre</option>
\t\t\t\t\t\t\t\t<option value=\"11\">Novembre</option>
\t\t\t\t\t\t\t\t<option value=\"12\">Décembre</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"annee\" class=\"anneeCotisationDon\">
\t\t\t\t\t\t\t\t<option value=\"annee\" disabled selected>Année</option>
\t\t\t\t\t\t\t\t<option value=\"2024\">2024</option>
\t\t\t\t\t\t\t\t<option value=\"2025\">2025</option>
\t\t\t\t\t\t\t\t<option value=\"2026\">2026</option>
\t\t\t\t\t\t\t\t<option value=\"2027\">2027</option>
\t\t\t\t\t\t\t\t<option value=\"2028\">2028</option>
\t\t\t\t\t\t\t\t<option value=\"2029\">2029</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t<button class=\"validationAdhesionDon\">Valider</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</section>
\t\t</section>

\t\t<section id=\"sectionDonMateriel\" class=\"mt-4\">
\t\t\t<div class=\"headDonMateriel\">Don Matériel</div>
\t\t\t\t<div class=\"bodyDonMateriel\">
\t\t\t\t\t<p>Entrez vos informations, nous vous contacterons pour un don matériel.</p>
\t\t\t\t\t<form method=\"POST\" action=\"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_don_save");
        yield "\" id=\"donForm\">
\t\t\t\t\t<select name=\"civiliteDonMateriel\" class=\"civiliteDonMateriel\" required>
\t\t\t\t\t\t<option value=\"\" disabled>Civilité *</option>
\t\t\t\t\t\t<option value=\"m\">M</option>
\t\t\t\t\t\t<option value=\"mme\">Mme</option>
\t\t\t\t\t\t<option value=\"autre\">Autre</option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"error civiliteError\"></span> <input type=\"text\" name=\"nomDonMateriel\" class=\"nomDonMateriel\" placeholder=\"Nom\" required>
\t\t\t\t\t<span class=\"error nomError\"></span> <input type=\"text\" name=\"prenomDonMateriel\" class=\"prenomDonMateriel\" placeholder=\"Prénom\" required>
\t\t\t\t\t<span class=\"error prenomError\"></span> <input type=\"email\" name=\"emailDonMateriel\" class=\"emailDonMateriel\" placeholder=\"Email\" required>
\t\t\t\t\t<span class=\"error emailError\"></span> <button class=\"validationDonMateriel\" id=\"submitButton\">Valider</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>

\t<style>
\t\tbody {
\t\t\tbackground-color: #e1f6fd;
\t\t}
\t</style>
\t<script>
\t// Hide the success message after 2 seconds
\tsetTimeout(function() {
\t\tvar successMessage = document.getElementById('donation-message');
\t\tif (successMessage) {
\t\t\tsuccessMessage.style.display = 'none';
\t\t}
\t}, 4000);
</script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "don/index.html.twig";
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
        return array (  276 => 189,  227 => 143,  220 => 139,  213 => 135,  198 => 122,  91 => 14,  82 => 12,  77 => 11,  68 => 9,  64 => 8,  61 => 7,  57 => 6,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "don/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/don/index.html.twig");
    }
}
