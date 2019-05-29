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

/* @ContaoCore/Backend/be_page.html.twig */
class __TwigTemplate_7f0c321e89e9f7818f3e41527de86f68d1af86dc31cce4de5010cacc0196b0bb extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->extensions['Contao\CoreBundle\Twig\Extension\ContaoTemplateExtension']->renderContaoBackendTemplate(["main" =>         $this->renderBlock("main", $context, $blocks), "error" =>         $this->renderBlock("error", $context, $blocks), "headline" =>         $this->renderBlock("headline", $context, $blocks)]);
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_page.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\core-bundle\\src\\Resources\\views\\Backend\\be_page.html.twig");
    }
}
