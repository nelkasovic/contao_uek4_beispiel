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

/* ContaoInstallationBundle::not_writable.html.twig */
class __TwigTemplate_b26b01fa077c72d72e1208d533311b2147d6a8db15933cfcf91616d087b7ee35 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "ContaoInstallationBundle::not_writable.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file_permissions_headline"), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file_permissions_explanation");
        echo "</p>
    <p>";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file_permissions_warning");
        echo "</p>
  </fieldset>
";
    }

    public function getTemplateName()
    {
        return "ContaoInstallationBundle::not_writable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  58 => 7,  54 => 6,  50 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoInstallationBundle::not_writable.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\installation-bundle\\src/Resources/views/not_writable.html.twig");
    }
}
