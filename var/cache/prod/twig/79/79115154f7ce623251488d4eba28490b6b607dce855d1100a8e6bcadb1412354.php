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

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_9ab998a41445ed08544d0dca130f6217f46557645a29bbfb8289d39b57bfc85c extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", [], "any", false, false, false, 1)) {
            // line 2
            echo "at ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "class", [], "any", false, false, false, 2) . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "type", [], "any", false, false, false, 2)) . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", [], "any", false, false, false, 2));
            echo "(";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatArgsAsText(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "args", [], "any", false, false, false, 2));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", false, false, false, 4), "")) : (""))) &&  !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", false, false, false, 4), "")) : (""))))) {
            // line 5
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", [], "any", false, false, false, 5)) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", false, false, false, 5))), [(" at line " . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", false, false, false, 5)) => ""]);
            echo ":";
            echo twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", false, false, false, 5);
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", [], "any", false, false, false, 5)) ? (")") : (""));
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  44 => 4,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "TwigBundle:Exception:trace.txt.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\symfony\\twig-bundle/Resources/views/Exception/trace.txt.twig");
    }
}
