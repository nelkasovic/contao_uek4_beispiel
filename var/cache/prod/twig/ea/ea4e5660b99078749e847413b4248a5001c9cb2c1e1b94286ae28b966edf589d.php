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

/* ContaoInstallationBundle::database.html.twig */
class __TwigTemplate_da2b23fcde0d968a504b055428951adcc20bc540c3ec7eacb8c7369341ee777e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "ContaoInstallationBundle::database.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "  <fieldset class=\"tl_tbox nolegend\">
    <div>
      <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_connection"), "html", null, true);
        echo "</h3>
      ";
        // line 7
        if ((isset($context["database_error"]) || array_key_exists("database_error", $context))) {
            // line 8
            echo "        <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, ($context["database_error"] ?? null), "html", null, true);
            echo "</p>
      ";
        }
        // line 10
        echo "      <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_connection_explain"), "html", null, true);
        echo "</p>
      <form method=\"post\">
        <div class=\"tl_formbody\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_database_login\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
        echo "\">
          <h4><label for=\"dbHost\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_host"), "html", null, true);
        echo "</label></h4>
          <input type=\"text\" name=\"dbHost\" id=\"dbHost\" class=\"tl_text\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "database_host", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "database_host", [], "any", false, false, false, 16), "localhost")) : ("localhost")), "html", null, true);
        echo "\">
          <h4><label for=\"dbPort\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_port"), "html", null, true);
        echo "</label></h4>
          <input type=\"text\" name=\"dbPort\" id=\"dbPort\" class=\"tl_text\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "database_port", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "database_port", [], "any", false, false, false, 18), 3306)) : (3306)), "html", null, true);
        echo "\">
          <h4><label for=\"dbUser\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_user"), "html", null, true);
        echo "</label></h4>
          <input type=\"text\" name=\"dbUser\" id=\"dbUser\" class=\"tl_text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "database_user", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
          <h4><label for=\"dbPassword\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_password"), "html", null, true);
        echo "</label></h4>
          <input type=\"password\" name=\"dbPassword\" id=\"dbPassword\" class=\"tl_text\" value=\"";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "database_password", [], "any", false, false, false, 22)) {
            echo "*****";
        }
        echo "\">
          <h4><label for=\"dbName\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_name"), "html", null, true);
        echo "</label></h4>
          <input type=\"text\" name=\"dbName\" id=\"dbName\" class=\"tl_text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "database_name", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
        </div>
        <div class=\"tl_formbody_submit\">
          <div class=\"tl_submit_container\">
            <button type=\"submit\" class=\"tl_submit\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("save_settings"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </form>
    </div>
  </fieldset>
  <script>
    \$('dbHost').focus();
  </script>
";
    }

    public function getTemplateName()
    {
        return "ContaoInstallationBundle::database.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  113 => 24,  109 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  63 => 10,  57 => 8,  55 => 7,  51 => 6,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoInstallationBundle::database.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\installation-bundle\\src/Resources/views/database.html.twig");
    }
}
