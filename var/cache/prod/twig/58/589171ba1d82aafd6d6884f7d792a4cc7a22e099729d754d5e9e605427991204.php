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

/* knp_menu_ordered.html.twig */
class __TwigTemplate_0fa1381e2cdac2622001647a15226cd90553379aa3130c772854a5298bd90dd8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list' => [$this, 'block_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list($context, array $blocks = [])
    {
        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 4)->unwrap();
        // line 5
        echo "
";
        // line 6
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 6) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 6) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 6))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->macro_attributes(($context["listAttributes"] ?? null));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
    }

    public function getTemplateName()
    {
        return "knp_menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  54 => 7,  52 => 6,  49 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "knp_menu_ordered.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_ordered.html.twig");
    }
}
