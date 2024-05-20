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
class __TwigTemplate_05209cd4bcd2b7abceb8681639f5da92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement_adhesion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement_adhesion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement_adhesion/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Paiement Adhésion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div id=\"checkout\" style=\"display: none; padding-top:5%; margin-bottom:5%\">
      <!-- Le contenu du formulaire Stripe sera inséré ici -->
    </div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>

const user = JSON.parse('";
        // line 13
        yield json_encode((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()));
        yield "');
const planId = '";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "plan", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "';
const email = '";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  107 => 15,  103 => 14,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement Adhésion{% endblock %}

{% block body %}
    <div id=\"checkout\" style=\"display: none; padding-top:5%; margin-bottom:5%\">
      <!-- Le contenu du formulaire Stripe sera inséré ici -->
    </div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>

const user = JSON.parse('{{ user | json_encode | raw }}');
const planId = '{{ user.plan.id }}';
const email = '{{ user.email }}';

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
{% endblock %}
", "paiement_adhesion/index.html.twig", "/Users/dvpt/Desktop/ong2/templates/paiement_adhesion/index.html.twig");
    }
}
