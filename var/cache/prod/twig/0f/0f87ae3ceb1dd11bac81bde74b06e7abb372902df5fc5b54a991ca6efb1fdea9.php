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

/* @ContaoCore/Error/invalid_request_token.html.twig */
class __TwigTemplate_c3ccd3482dc63336ad7a9134a17cd5ba600a4d93ab52c5bb686dbf7df3ef4974 extends \Twig\Template
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
            'explain' => [$this, 'block_explain'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "@ContaoCore/Error/invalid_request_token.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.requestToken", [], "contao_exception"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_matter($context, array $blocks = [])
    {
        // line 7
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.invalidToken", [], "contao_exception"), "html", null, true);
        echo "</p>
";
    }

    // line 9
    public function block_howToFix($context, array $blocks = [])
    {
        // line 10
        echo "    <p>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenRetry", [], "contao_exception");
        echo "</p>
";
    }

    // line 12
    public function block_explain($context, array $blocks = [])
    {
        // line 13
        echo "    <p>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenExplainOne", [], "contao_exception");
        echo "</p>
    <p>";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenExplainTwo", [], "contao_exception");
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "@ContaoCore/Error/invalid_request_token.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  80 => 13,  77 => 12,  70 => 10,  67 => 9,  60 => 7,  57 => 6,  50 => 4,  47 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Error/invalid_request_token.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\core-bundle\\src\\Resources\\views\\Error\\invalid_request_token.html.twig");
    }
}
