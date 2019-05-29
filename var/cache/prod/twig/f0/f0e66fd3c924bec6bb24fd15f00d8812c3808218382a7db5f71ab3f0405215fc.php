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

/* ContaoCoreBundle:Error:backend.html.twig */
class __TwigTemplate_b648a14607448bb27427e7f7b9e46babc12cbe2e5c6b49de9367110a07d32ec8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "ContaoCoreBundle:Error:backend.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ($context["statusName"] ?? null), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        // line 7
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.matter", [], "contao_exception"), "html", null, true);
        echo "</h2>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, ($context["exception"] ?? null), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Error:backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  58 => 7,  55 => 6,  48 => 4,  45 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoCoreBundle:Error:backend.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\core-bundle\\src/Resources/views/Error/backend.html.twig");
    }
}
