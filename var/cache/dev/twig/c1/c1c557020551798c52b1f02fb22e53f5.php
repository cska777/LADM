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

/* mailer/clients.html.twig */
class __TwigTemplate_2448592f0cf5daabd9d20634d09ccd91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/clients.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/clients.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body style=\"font-family: Arial, sans-serif; margin: 0; padding: 0;\">

    <div class=\"container\">
        <h3>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</h3>
        <p>Dear valued Client,</p>
        <p>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</p>
    </div>

  <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 30px;\">
        <p style=\"margin: 0; color: #333333; font-size: 14px;\">
          If you have any questions or concerns, please don't hesitate to reach out to us:
        </p>
        <p style=\"margin-top: 10px; color: #333333; font-size: 14px;\">
          Company Name<br>
          Address Line 1<br>
          Address Line 2<br>
          City, State, ZIP<br>
          Country
        </p>
        <p style=\"margin-top: 10px; color: #333333; font-size: 14px;\">
          Phone: +1 (123) 456-7890<br>
          Email: info@example.com<br>
          Website: <a href=\"https://www.example.com\" style=\"color: #007bff; text-decoration: none;\">www.example.com</a>
        </p>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 10px 30px; text-align: center;\">
        <p style=\"margin: 0; color: #333333; font-size: 12px;\">
          This email was sent to you as a valued client of our company. 
          If you no longer wish to receive emails from us, please contact us.
        </p>
      </td>
    </tr>
  </table>
</body>
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
        return "mailer/clients.html.twig";
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
        return array (  60 => 12,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body style=\"font-family: Arial, sans-serif; margin: 0; padding: 0;\">

    <div class=\"container\">
        <h3>{{ subject }}</h3>
        <p>Dear valued Client,</p>
        <p>{{ body }}</p>
    </div>

  <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 30px;\">
        <p style=\"margin: 0; color: #333333; font-size: 14px;\">
          If you have any questions or concerns, please don't hesitate to reach out to us:
        </p>
        <p style=\"margin-top: 10px; color: #333333; font-size: 14px;\">
          Company Name<br>
          Address Line 1<br>
          Address Line 2<br>
          City, State, ZIP<br>
          Country
        </p>
        <p style=\"margin-top: 10px; color: #333333; font-size: 14px;\">
          Phone: +1 (123) 456-7890<br>
          Email: info@example.com<br>
          Website: <a href=\"https://www.example.com\" style=\"color: #007bff; text-decoration: none;\">www.example.com</a>
        </p>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 10px 30px; text-align: center;\">
        <p style=\"margin: 0; color: #333333; font-size: 12px;\">
          This email was sent to you as a valued client of our company. 
          If you no longer wish to receive emails from us, please contact us.
        </p>
      </td>
    </tr>
  </table>
</body>
</html>
", "mailer/clients.html.twig", "/Users/dvpt/Desktop/ong2/templates/mailer/clients.html.twig");
    }
}
