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

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_ac617026d6f87fd8651f7e89eb9b632aeaffa0b782830324402a85e626acf9f5 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
        // line 4
        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "translation_domain", 1 => "messages"], "method", false, false, false, 4);
        // line 5
        $context["label"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 5);
        // line 6
        if ( !(($context["translation_domain"] ?? null) === false)) {
            // line 7
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "translation_params", 1 => []], "method", false, false, false, 7), ($context["translation_domain"] ?? null));
        }
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", [], "any", false, false, false, 9) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "safe_label", 1 => false], "method", false, false, false, 9))) {
            echo ($context["label"] ?? null);
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "KnpMenuBundle::menu.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\knplabs\\knp-menu-bundle\\src/Resources/views/menu.html.twig");
    }
}
