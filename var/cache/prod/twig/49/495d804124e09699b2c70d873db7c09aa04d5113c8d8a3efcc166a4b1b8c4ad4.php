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

/* knp_menu.html.twig */
class __TwigTemplate_2481b516ac5e07f04e612e63230572797d8db00fa466165613e10bf3683671dc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'compressed_root' => [$this, 'block_compressed_root'],
            'root' => [$this, 'block_root'],
            'list' => [$this, 'block_list'],
            'children' => [$this, 'block_children'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = [])
    {
        // line 12
        ob_start(function () { return ''; });
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = [])
    {
        // line 18
        $context["listAttributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", [], "any", false, false, false, 18);
        // line 19
        $this->displayBlock("list", $context, $blocks);
    }

    // line 22
    public function block_list($context, array $blocks = [])
    {
        // line 23
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 23) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 23) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 23))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->macro_attributes(($context["listAttributes"] ?? null));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 31
    public function block_children($context, array $blocks = [])
    {
        // line 33
        $context["currentOptions"] = ($context["options"] ?? null);
        // line 34
        $context["currentItem"] = ($context["item"] ?? null);
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 36))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["depth" => (twig_get_attribute($this->env, $this->source, ($context["currentOptions"] ?? null), "depth", [], "any", false, false, false, 37) - 1)]);
        }
        // line 40
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [], "any", false, false, false, 40)) && (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [], "any", false, false, false, 40) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["matchingDepth" => (twig_get_attribute($this->env, $this->source, ($context["currentOptions"] ?? null), "matchingDepth", [], "any", false, false, false, 41) - 1)]);
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentItem"] ?? null), "children", [], "any", false, false, false, 43));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? null);
        // line 48
        $context["options"] = ($context["currentOptions"] ?? null);
    }

    // line 51
    public function block_item($context, array $blocks = [])
    {
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", [], "any", false, false, false, 52)) {
            // line 54
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 54))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 54)]) : ([]));
            // line 55
            if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method", false, false, false, 55)) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", [], "any", false, false, false, 56)]);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 57
($context["matcher"] ?? null), "isAncestor", [0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [], "any", false, false, false, 57)], "method", false, false, false, 57)) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", [], "any", false, false, false, 58)]);
            }
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", [], "any", false, false, false, 60)) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", [], "any", false, false, false, 61)]);
            }
            // line 63
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", [], "any", false, false, false, 63)) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", [], "any", false, false, false, 64)]);
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 68) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 68) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", [], "any", false, false, false, 69)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 69))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", [], "any", false, false, false, 70)]);
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", [], "any", false, false, false, 72))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", [], "any", false, false, false, 73)]);
            }
            // line 76
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, false, 76);
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["class" => twig_join_filter(($context["classes"] ?? null), " ")]);
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->macro_attributes(($context["attributes"] ?? null));
            echo ">";
            // line 83
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 83)) && ( !twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method", false, false, false, 83) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentAsLink", [], "any", false, false, false, 83)))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method", false, false, false, 89))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method", false, false, false, 89)]) : ([]));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), [0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 90))]);
            // line 91
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", [], "any", false, false, false, 91), ["class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")]);
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 97
    public function block_linkElement($context, array $blocks = [])
    {
        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 97), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", [], "any", false, false, false, 97));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 99
    public function block_spanElement($context, array $blocks = [])
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", [], "any", false, false, false, 99));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 101
    public function block_label($context, array $blocks = [])
    {
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", [], "any", false, false, false, 101) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtra", [0 => "safe_label", 1 => false], "method", false, false, false, 101))) {
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 101);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 101), "html", null, true);
        }
    }

    // line 3
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 6,  285 => 5,  281 => 4,  269 => 3,  259 => 101,  248 => 99,  235 => 97,  226 => 92,  224 => 91,  222 => 90,  220 => 89,  216 => 86,  212 => 84,  210 => 83,  206 => 82,  203 => 81,  200 => 78,  198 => 77,  196 => 76,  193 => 73,  190 => 72,  187 => 71,  185 => 70,  182 => 69,  179 => 68,  176 => 66,  173 => 64,  171 => 63,  168 => 61,  166 => 60,  163 => 58,  161 => 57,  159 => 56,  157 => 55,  155 => 54,  153 => 52,  150 => 51,  146 => 48,  144 => 47,  127 => 44,  110 => 43,  107 => 41,  105 => 40,  102 => 37,  100 => 36,  98 => 34,  96 => 33,  93 => 31,  85 => 26,  80 => 25,  77 => 24,  75 => 23,  72 => 22,  68 => 19,  66 => 18,  63 => 17,  56 => 13,  54 => 12,  51 => 11,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "knp_menu.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
