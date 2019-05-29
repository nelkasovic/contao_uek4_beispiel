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

/* ContaoCoreBundle:Error:no_active_page_found.html.twig */
class __TwigTemplate_6ed4703ac1b943f92fe9d7bfbc806d4f75a14571e0d3c96d85ff447f8999ac1c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'matter' => [$this, 'block_matter'],
            'howToFix' => [$this, 'block_howToFix'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "ContaoCoreBundle:Error:no_active_page_found.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.noActive", [], "contao_exception"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_matter($context, array $blocks = [])
    {
        // line 7
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.noActivePages", [], "contao_exception"), "html", null, true);
        echo "</p>
";
    }

    // line 9
    public function block_howToFix($context, array $blocks = [])
    {
        // line 10
        echo "    <p>";
        echo sprintf($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.noActiveFix", [], "contao_exception"), ($context["adminEmail"] ?? null));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Error:no_active_page_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  66 => 9,  59 => 7,  56 => 6,  49 => 4,  46 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoCoreBundle:Error:no_active_page_found.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\core-bundle\\src/Resources/views/Error/no_active_page_found.html.twig");
    }
}
