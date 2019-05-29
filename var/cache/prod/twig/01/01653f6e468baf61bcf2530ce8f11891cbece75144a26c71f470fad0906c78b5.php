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

/* @ContaoInstallation/initialize.html.twig */
class __TwigTemplate_309234370d377de4b6d1b8e53a7f74a8c0c36fae7c2d2171977dc181d2c49e86 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "@ContaoInstallation/initialize.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "  <fieldset class=\"tl_tbox nolegend\">
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("an_error_occurred"), "html", null, true);
        echo "</h3>
    <p class=\"tl_error\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("console_explanation"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ( !twig_test_empty(($context["output"] ?? null))) {
            // line 8
            echo "      <pre class=\"console-wrapper\"><code>";
            echo $this->extensions['SensioLabs\AnsiConverter\Bridge\Twig\AnsiExtension']->ansiToHtml(($context["output"] ?? null));
            echo "</code></pre>
    ";
        }
        // line 10
        echo "  </fieldset>
";
    }

    public function getTemplateName()
    {
        return "@ContaoInstallation/initialize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  60 => 8,  58 => 7,  54 => 6,  50 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/initialize.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\installation-bundle\\src\\Resources\\views\\initialize.html.twig");
    }
}
