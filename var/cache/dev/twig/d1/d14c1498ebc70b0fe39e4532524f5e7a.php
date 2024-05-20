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

/* newsletter/sub_confirm.html.twig */
class __TwigTemplate_cc3c5d23df52724aa3f89a7f22227270 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/sub_confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/sub_confirm.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Subscription Confirmation</title>
</head>
<body style=\"font-family: Arial, sans-serif; margin: 0; padding: 0;\">
  <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
    <tr>
      <td align=\"center\" bgcolor=\"#f7f7f7\" style=\"padding: 40px 0;\">
        <h1 style=\"margin: 0; color: #333333;\">Subscription Confirmation</h1>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#ffffff\" style=\"padding: 40px 30px;\">
        <p style=\"margin: 0; color: #333333;\">
          Thank you for subscribing to our mailing list. You're now part of our community!
        </p>
        <p style=\"margin: 20px 0 0; color: #333333;\">
          If you subscribed mistakenly and wish to unsubscribe, please click the button below:
        </p>
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top: 20px;\">
          <tr>
            <td align=\"center\" bgcolor=\"#dc3545\" style=\"border-radius: 3px;\">
              <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unsubscribeUrl"]) || array_key_exists("unsubscribeUrl", $context) ? $context["unsubscribeUrl"] : (function () { throw new RuntimeError('Variable "unsubscribeUrl" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" target=\"_blank\" style=\"display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 3px;\">Unsubscribe</a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 30px 30px;\">
        <p style=\"margin: 0; color: #333333; font-size: 12px;\">
          You're receiving this email because you subscribed to our mailing list. If you believe you received this email by mistake or have any questions, please contact us at <a href=\"mailto:info@example.com\" style=\"color: #007bff; text-decoration: none;\">info@example.com</a>.
        </p>
      </td>
    </tr>
  </table>
";
        // line 40
        yield from         $this->loadTemplate("email/footer.html.twig", "newsletter/sub_confirm.html.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "newsletter/sub_confirm.html.twig";
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
        return array (  90 => 41,  88 => 40,  71 => 26,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Subscription Confirmation</title>
</head>
<body style=\"font-family: Arial, sans-serif; margin: 0; padding: 0;\">
  <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
    <tr>
      <td align=\"center\" bgcolor=\"#f7f7f7\" style=\"padding: 40px 0;\">
        <h1 style=\"margin: 0; color: #333333;\">Subscription Confirmation</h1>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#ffffff\" style=\"padding: 40px 30px;\">
        <p style=\"margin: 0; color: #333333;\">
          Thank you for subscribing to our mailing list. You're now part of our community!
        </p>
        <p style=\"margin: 20px 0 0; color: #333333;\">
          If you subscribed mistakenly and wish to unsubscribe, please click the button below:
        </p>
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top: 20px;\">
          <tr>
            <td align=\"center\" bgcolor=\"#dc3545\" style=\"border-radius: 3px;\">
              <a href=\"{{ unsubscribeUrl }}\" target=\"_blank\" style=\"display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 3px;\">Unsubscribe</a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 30px 30px;\">
        <p style=\"margin: 0; color: #333333; font-size: 12px;\">
          You're receiving this email because you subscribed to our mailing list. If you believe you received this email by mistake or have any questions, please contact us at <a href=\"mailto:info@example.com\" style=\"color: #007bff; text-decoration: none;\">info@example.com</a>.
        </p>
      </td>
    </tr>
  </table>
{% include 'email/footer.html.twig' %}
</body>
</html>
", "newsletter/sub_confirm.html.twig", "/Users/dvpt/Desktop/ong2/templates/newsletter/sub_confirm.html.twig");
    }
}
