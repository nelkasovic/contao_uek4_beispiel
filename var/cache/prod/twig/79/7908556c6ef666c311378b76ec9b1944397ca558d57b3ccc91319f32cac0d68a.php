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

/* @ContaoCore/Backend/be_menu.html.twig */
class __TwigTemplate_527e16e0f0e9442092cbc036a355862f4d52b04c998e5a8db7401c816fb9cd4b extends \Twig\Template
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
        // line 2
        echo "<nav id=\"tl_navigation\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.mainNavigation", [], "contao_default"), "html", null, true);
        echo "\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "requestUri", [], "any", false, false, false, 3), "html", null, true);
        echo "#skipNavigation\" class=\"invisible\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.skipNavigation", [], "contao_default"), "html", null, true);
        echo "</a>

    <ul class=\"tl_level_1\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "            <li class=\"tl_level_1_group ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "displayChildren", [], "any", false, false, false, 7)) {
                echo "node-expanded";
            } else {
                echo "node-collapsed";
            }
            if ($this->extensions['Knp\Menu\Twig\MenuExtension']->isAncestor($context["item"])) {
                echo " trail";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 7), "class", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 8), "href", [], "any", false, false, false, 8)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 8), "href", [], "any", false, false, false, 8)) : (twig_get_attribute($this->env, $this->source, $context["item"], "uri", [], "any", false, false, false, 8))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"group-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\" onclick=\"return AjaxRequest.toggleNavigation(this, '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "', '";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contao_backend");
            echo "')\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 8), "html", null, true);
            echo "</a>
            </li>
            ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["item"], "hasChildren", [], "any", false, false, false, 10)) {
                // line 11
                echo "                <li class=\"tl_parent\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 11), "html", null, true);
                echo "\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["item"], "displayChildren", [], "any", false, false, false, 11)) {
                    echo " style=\"display:none\"";
                }
                echo ">
                    <ul class=\"tl_level_2\">
                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 14
                    echo "                            <li";
                    if ($this->extensions['Knp\Menu\Twig\MenuExtension']->isCurrent($context["child"])) {
                        echo " class=\"active\"";
                    }
                    echo ">
                                <a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "attributes", [], "any", false, false, false, 15), "href", [], "any", false, false, false, 15)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "attributes", [], "any", false, false, false, 15), "href", [], "any", false, false, false, 15)) : (twig_get_attribute($this->env, $this->source, $context["item"], "uri", [], "any", false, false, false, 15))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "attributes", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "attributes", [], "any", false, false, false, 15), "class", [], "any", false, false, false, 15), "html", null, true);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 15);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                    </ul>
                </li>
            ";
            }
            // line 21
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </ul>

    <a id=\"skipNavigation\" class=\"invisible\">&nbsp;</a>
</nav>
";
    }

    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 22,  124 => 21,  119 => 18,  104 => 15,  97 => 14,  93 => 13,  83 => 11,  81 => 10,  66 => 8,  52 => 7,  48 => 6,  40 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_menu.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\core-bundle\\src\\Resources\\views\\Backend\\be_menu.html.twig");
    }
}
