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

/* paiement_adhesion/index.html.twig */
class __TwigTemplate_42be3f9ac3681bc6e013da2235765cd9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "paiement_adhesion/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Paiement Adhésion";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div id=\"checkout\" style=\"display: none; padding-top:5%; margin-bottom:5%\">
      <!-- Le contenu du formulaire Stripe sera inséré ici -->
    </div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>

const user = JSON.parse('";
        // line 13
        yield json_encode(($context["user"] ?? null));
        yield "');
const planId = '";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "plan", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "';
const email = '";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 15), "html", null, true);
        yield "';

document.addEventListener(\"DOMContentLoaded\", function() {
    fetchClientSecret();
});

async function fetchClientSecret() {
    try {
        const response = await fetch(\"/create-checkout-session\", {
            method: \"POST\",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ selected_plan: planId, email: email }),
        });
        const data = await response.json();
        const clientSecretObject = data.clientSecret
        const clientSecret = clientSecretObject.clientSecret; 
        initializeStripe(clientSecret);
        document.querySelector('.StripeElement input[name=\"email\"]').setAttribut('disabled', 'disabled');
    } catch (error) {
        console.error('Error fetching client secret:', error);
    }
}


function initializeStripe(clientSecret) {
    const stripe = Stripe('pk_test_51P13wrP3TPaTU66in2oWxy6ecscnfqQ9oC2o7BeCIsaHDmOG2oaPiosu0dEELWlLifvX0TWYCwfPEeNApouvD9oI00SPMGFXE9');
    console.log('Stripe Initialized');
    stripe.initEmbeddedCheckout({
        fetchClientSecret: () => Promise.resolve(clientSecret),
    }).then(function(result) {
        checkout = result;
        checkout.mount('#checkout');
        document.querySelector('#checkout').style.display = 'block';
    }).catch(function(error) {
        console.error('Error initializing Stripe Checkout:', error);
    });
}

</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "paiement_adhesion/index.html.twig";
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
        return array (  77 => 15,  73 => 14,  69 => 13,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paiement_adhesion/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/paiement_adhesion/index.html.twig");
    }
}
