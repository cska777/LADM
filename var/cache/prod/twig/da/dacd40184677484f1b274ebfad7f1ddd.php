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

/* newsletter/unsub_confirm.html.twig */
class __TwigTemplate_32d384f2405a1bae1b8237997d861a09 extends Template
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
<title>Unsubscribe Confirmation</title>
</head>
<body style=\"font-family: Arial, sans-serif; margin: 0; padding: 0;\">
  <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
    <tr>
      <td align=\"center\" bgcolor=\"#f7f7f7\" style=\"padding: 40px 0;\">
        <h1 style=\"margin: 0; color: #333333;\">Unsubscribe Confirmation</h1>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#ffffff\" style=\"padding: 40px 30px;\">
        <p style=\"margin: 0; color: #333333;\">
          We have received your request to unsubscribe from our mailing list. If this request was made in error, you can ignore this message.
        </p>
        <p style=\"margin: 20px 0 0; color: #333333;\">
          If you wish to continue receiving our emails, please click the button below:
        </p>
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top: 20px;\">
          <tr>
            <td align=\"center\" bgcolor=\"#007bff\" style=\"border-radius: 3px;\">
              <a href=\"http://127.0.0.1:8000/subscribe\" target=\"_blank\" style=\"display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 3px;\">Subscribe Again</a>
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
</body>
";
        // line 41
        yield from         $this->loadTemplate("email/footer.html.twig", "newsletter/unsub_confirm.html.twig", 41)->unwrap()->yield($context);
        // line 42
        yield "</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "newsletter/unsub_confirm.html.twig";
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
        return array (  82 => 42,  80 => 41,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/unsub_confirm.html.twig", "/Users/dvpt/Desktop/ong2/templates/newsletter/unsub_confirm.html.twig");
    }
}
