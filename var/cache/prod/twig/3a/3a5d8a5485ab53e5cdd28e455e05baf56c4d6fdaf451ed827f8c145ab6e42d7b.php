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

/* ContaoCoreBundle:Error:insecure_installation.html.twig */
class __TwigTemplate_9c82e0e956219994b7645d8c96ea04dc71f16f1caf6df60982cc15813a311f61 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "ContaoCoreBundle:Error:insecure_installation.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.insecure", [], "contao_exception"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_matter($context, array $blocks = [])
    {
        // line 7
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.insecureRoot", [], "contao_exception"), "html", null, true);
        echo "</p>
";
    }

    // line 9
    public function block_howToFix($context, array $blocks = [])
    {
        // line 10
        echo "    <p>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.insecureFix", [], "contao_exception");
        echo "</p>
";
    }

    // line 12
    public function block_explain($context, array $blocks = [])
    {
        // line 13
        echo "    <p>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.insecureExplain", [], "contao_exception");
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Error:insecure_installation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  77 => 12,  70 => 10,  67 => 9,  60 => 7,  57 => 6,  50 => 4,  47 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoCoreBundle:Error:insecure_installation.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\core-bundle\\src/Resources/views/Error/insecure_installation.html.twig");
    }
}
