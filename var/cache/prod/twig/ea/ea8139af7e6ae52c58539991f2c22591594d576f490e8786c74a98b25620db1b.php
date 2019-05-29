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

/* @ContaoInstallation/password.html.twig */
class __TwigTemplate_7584b566ed86247462788ee2f98eae45572d9e0b914810439e55d2ecc8977845 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "@ContaoInstallation/password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "  <fieldset class=\"tl_tbox nolegend\">
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("set_password"), "html", null, true);
        echo "</h3>
    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 7
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "    <p>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("set_password_hint");
        echo "</p>
    <form method=\"post\">
      <div class=\"tl_formbody\">
        <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_password\">
        <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
        echo "\">
        <h4><label for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("password"), "html", null, true);
        echo "</label></h4>
        <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"off\" class=\"tl_text\" value=\"\">
        <h4><label for=\"confirmation\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirmation"), "html", null, true);
        echo "</label></h4>
        <input type=\"password\" name=\"confirmation\" id=\"confirmation\" autocomplete=\"off\" class=\"tl_text\" value=\"\">
      </div>
      <div class=\"tl_formbody_submit\">
        <div class=\"tl_submit_container\">
          <button type=\"submit\" class=\"tl_submit\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("save_password"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </form>
  </fieldset>
  <script>
    \$('password').focus();
  </script>
";
    }

    public function getTemplateName()
    {
        return "@ContaoInstallation/password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  79 => 16,  74 => 14,  70 => 13,  62 => 9,  56 => 7,  54 => 6,  50 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/password.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\installation-bundle\\src\\Resources\\views\\password.html.twig");
    }
}
