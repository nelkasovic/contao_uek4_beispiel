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

/* @ContaoCore/Error/service_unavailable.html.twig */
class __TwigTemplate_351fdef11cc8a940254f5c7e797a6cd9a26ebd261ec00696e5d8c3ee6d5bcfbd extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'matter' => [$this, 'block_matter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "@ContaoCore/Error/service_unavailable.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.unavailable", [], "contao_exception"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_matter($context, array $blocks = [])
    {
        // line 7
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.maintenance", [], "contao_exception"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "@ContaoCore/Error/service_unavailable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  55 => 6,  48 => 4,  45 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Error/service_unavailable.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\core-bundle\\src\\Resources\\views\\Error\\service_unavailable.html.twig");
    }
}
