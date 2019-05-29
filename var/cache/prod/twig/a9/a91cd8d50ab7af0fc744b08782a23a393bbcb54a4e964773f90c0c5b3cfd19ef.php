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

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_32700f3d83718d3f97c550ef2d1d3eaebf043c4e3522770a0408339c36ea5837 extends \Twig\Template
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
        echo "[exception] ";
        echo ((((($context["status_code"] ?? null) . " | ") . ($context["status_text"] ?? null)) . " | ") . twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", [], "any", false, false, false, 1));
        echo "
[message] ";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 2);
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "toarray", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo twig_get_attribute($this->env, $this->source, $context["e"], "class", [], "any", false, false, false, 4);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 4);
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", ["exception" => $context["e"]], false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  48 => 4,  44 => 3,  40 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "TwigBundle:Exception:exception.txt.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\symfony\\twig-bundle/Resources/views/Exception/exception.txt.twig");
    }
}
