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

/* ContaoCoreBundle:Backend:be_page.html.twig */
class __TwigTemplate_78d6409d24c4cae0a192c121481e8dfbcf4056d5e090377df4b24b6df968d2de extends \Twig\Template
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
        return "ContaoCoreBundle:Backend:be_page.html.twig";
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
        return new Source("", "ContaoCoreBundle:Backend:be_page.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\core-bundle\\src/Resources/views/Backend/be_page.html.twig");
    }
}
