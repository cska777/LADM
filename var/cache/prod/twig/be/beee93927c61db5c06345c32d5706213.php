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
class __TwigTemplate_9ce664860ce8ba285ddf66aa90dad290 extends Template
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
        return new Source("", "newsletter/footer.html.twig", "/Users/dvpt/Desktop/ong2/templates/newsletter/footer.html.twig");
    }
}
