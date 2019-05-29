<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ContaoInstallationBundle::login.html.twig */
class __TwigTemplate_b0aa2e1e5545129118e935dda0b680b0a9390825499743aa8600cfb14946c32e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ContaoInstallation/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "ContaoInstallationBundle::login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "  <fieldset class=\"tl_tbox nolegend\">
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login"), "html", null, true);
        echo "</h3>
    <p class=\"tl_info\" id=\"cookies\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("allow_cookies"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 8
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        // line 10
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_explanation"), "html", null, true);
        echo "</p>
    <form method=\"post\">
      <div class=\"tl_formbody\">
        <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_login\">
        <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
        echo "\">
        <h4><label for=\"password\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("password"), "html", null, true);
        echo "</label></h4>
        <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"off\" class=\"tl_text\" value=\"\">
      </div>
      <div class=\"tl_formbody_submit\">
        <div class=\"tl_submit_container\">
          <button type=\"submit\" class=\"tl_submit\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </form>
  </fieldset>
  <script>
    \$('password').focus();
    navigator.cookieEnabled && \$('cookies').destroy();
  </script>
";
    }

    public function getTemplateName()
    {
        return "ContaoInstallationBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  78 => 15,  74 => 14,  66 => 10,  60 => 8,  58 => 7,  54 => 6,  50 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoInstallationBundle::login.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\installation-bundle\\src/Resources/views/login.html.twig");
    }
}
