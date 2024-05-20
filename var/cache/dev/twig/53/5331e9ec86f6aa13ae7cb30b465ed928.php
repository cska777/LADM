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

/* newsletter/footer.html.twig */
class __TwigTemplate_91aa45285184d80902bb61bdba65c50a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/footer.html.twig"));

        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body style=\"font-family: Arial, sans-serif; margin: 0; padding: 0;\">
  <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 30px;\">
        <p style=\"margin: 0; color: #333333; font-size: 14px;\">
          If you have any questions or need assistance, please feel free to contact us:
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
          This email was sent to you because you subscribed to our mailing list. 
          If you no longer wish to receive emails from us, you can 
          <a href=\"#\" style=\"color: #007bff; text-decoration: none;\">unsubscribe here</a>.
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
        return "newsletter/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
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
  <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
    <tr>
      <td bgcolor=\"#f7f7f7\" style=\"padding: 30px;\">
        <p style=\"margin: 0; color: #333333; font-size: 14px;\">
          If you have any questions or need assistance, please feel free to contact us:
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
          This email was sent to you because you subscribed to our mailing list. 
          If you no longer wish to receive emails from us, you can 
          <a href=\"#\" style=\"color: #007bff; text-decoration: none;\">unsubscribe here</a>.
        </p>
      </td>
    </tr>
  </table>
</body>
</html>
", "newsletter/footer.html.twig", "/Users/dvpt/Desktop/ong2/templates/newsletter/footer.html.twig");
    }
}
