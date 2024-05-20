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

/* newsletter/confirm.html.twig */
class __TwigTemplate_962b959a81090765089a4a7512256527 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/confirm.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Confirm Subscription</title>
</head>
<body style=\"font-family: Arial, sans-serif; margin: 0; padding: 0;\">
  <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
    <tr>
      <td align=\"center\" bgcolor=\"#f7f7f7\" style=\"padding: 40px 0;\">
        <h1 style=\"margin: 0; color: #333333;\">Confirm Subscription</h1>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#ffffff\" style=\"padding: 40px 30px;\">
        <p style=\"margin: 0; color: #333333;\">
          Welcome to our mailing list! To complete your subscription, please click the button below:
        </p>
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top: 20px;\">
          <tr>
            <td align=\"center\" bgcolor=\"#007bff\" style=\"border-radius: 3px;\">
              <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new RuntimeError('Variable "confirmationUrl" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\" target=\"_blank\" style=\"display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 3px;\">Confirm Subscription</a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 30px 30px;\">
        <p style=\"margin: 0; color: #333333; font-size: 12px;\">
          You're receiving this email because you recently signed up for our mailing list. If you didn't initiate this request or have any questions, please contact us at <a href=\"mailto:info@example.com\" style=\"color: #007bff; text-decoration: none;\">info@example.com</a>.
        </p>
      </td>
    </tr>
  </table>
</body>
";
        // line 38
        yield from         $this->loadTemplate("email/footer.html.twig", "newsletter/confirm.html.twig", 38)->unwrap()->yield($context);
        // line 39
        yield "</html>
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
        return "newsletter/confirm.html.twig";
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
        return array (  88 => 39,  86 => 38,  68 => 23,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Confirm Subscription</title>
</head>
<body style=\"font-family: Arial, sans-serif; margin: 0; padding: 0;\">
  <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
    <tr>
      <td align=\"center\" bgcolor=\"#f7f7f7\" style=\"padding: 40px 0;\">
        <h1 style=\"margin: 0; color: #333333;\">Confirm Subscription</h1>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#ffffff\" style=\"padding: 40px 30px;\">
        <p style=\"margin: 0; color: #333333;\">
          Welcome to our mailing list! To complete your subscription, please click the button below:
        </p>
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top: 20px;\">
          <tr>
            <td align=\"center\" bgcolor=\"#007bff\" style=\"border-radius: 3px;\">
              <a href=\"{{ confirmationUrl }}\" target=\"_blank\" style=\"display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 3px;\">Confirm Subscription</a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 30px 30px;\">
        <p style=\"margin: 0; color: #333333; font-size: 12px;\">
          You're receiving this email because you recently signed up for our mailing list. If you didn't initiate this request or have any questions, please contact us at <a href=\"mailto:info@example.com\" style=\"color: #007bff; text-decoration: none;\">info@example.com</a>.
        </p>
      </td>
    </tr>
  </table>
</body>
{% include 'email/footer.html.twig' %}
</html>
", "newsletter/confirm.html.twig", "/Users/dvpt/Desktop/ong2/templates/newsletter/confirm.html.twig");
    }
}
