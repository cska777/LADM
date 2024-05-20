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
class __TwigTemplate_1e2cc077b477087ab5a6ce92851a3215 extends Template
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["confirmationUrl"] ?? null), "html", null, true);
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
        return array (  82 => 39,  80 => 38,  62 => 23,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/confirm.html.twig", "/Users/dvpt/Desktop/ong2/templates/newsletter/confirm.html.twig");
    }
}
