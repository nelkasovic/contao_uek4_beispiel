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

/* @ContaoInstallation/main.html.twig */
class __TwigTemplate_0972f1fef66173aed588f5965a0b80bdde46238411ecb3a0b8576982a11e988a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ContaoInstallation/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "@ContaoInstallation/main.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "  <fieldset class=\"tl_tbox";
        if ((twig_test_empty(($context["sql_form"] ?? null)) && twig_test_empty(($context["sql_message"] ?? null)))) {
            echo " collapsed";
        }
        echo "\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables"), "html", null, true);
        echo "</legend>
    <div>
      <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables"), "html", null, true);
        echo "</h3>
      ";
        // line 8
        if (twig_test_empty(($context["sql_form"] ?? null))) {
            // line 9
            echo "        <p class=\"tl_confirm\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables_confirm"), "html", null, true);
            echo "</p>
      ";
        }
        // line 11
        echo "      <p>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables_explain");
        echo "</p>
      ";
        // line 12
        if ( !twig_test_empty(($context["sql_message"] ?? null))) {
            // line 13
            echo "        <div id=\"sql_message\">";
            echo ($context["sql_message"] ?? null);
            echo "</div>
      ";
        }
        // line 15
        echo "      ";
        if ( !twig_test_empty(($context["sql_form"] ?? null))) {
            // line 16
            echo "        <form method=\"post\">
          <div class=\"tl_formbody\">
            <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_database_update\">
            <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
            echo "\">
            <div id=\"sql_wrapper\">
              <table id=\"sql_table\">
              ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sql_form"] ?? null));
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
            foreach ($context['_seq'] as $context["category"] => $context["commands"]) {
                // line 23
                echo "                ";
                if ( !twig_test_empty($context["commands"])) {
                    // line 24
                    echo "                  <tr>
                    <td colspan=\"2\" class=\"tl_col_0\">";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["category"]), "html", null, true);
                    echo "</td>
                  </tr>
                  <tr>
                    <td class=\"tl_col_1\"><input type=\"checkbox\" id=\"check_all_";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28), "html", null, true);
                    echo "\" class=\"tl_checkbox\" onclick=\"Backend.toggleCheckboxElements(this, '";
                    echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                    echo "')\"";
                    if ((!twig_in_filter("DROP", $context["category"]) || twig_in_filter("DROP INDEX", $context["category"]))) {
                        echo " checked";
                    }
                    echo "></td>
                    <td class=\"tl_col_2\"><label for=\"check_all_";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" style=\"color:#a6a6a6\"><em>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select_all"), "html", null, true);
                    echo "</em></label></td>
                  </tr>
                  ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["commands"]);
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
                    foreach ($context['_seq'] as $context["md5"] => $context["command"]) {
                        // line 32
                        echo "                    <tr>
                      <td class=\"tl_col_1\"><input type=\"checkbox\" name=\"sql[]\" id=\"sql_";
                        // line 33
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 33), "loop", [], "any", false, false, false, 33), "index", [], "any", false, false, false, 33), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33), "html", null, true);
                        echo "\" class=\"tl_checkbox ";
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $context["md5"], "html", null, true);
                        echo "\"";
                        if ((!twig_in_filter("DROP", $context["command"]) || twig_in_filter("DROP INDEX", $context["command"]))) {
                            echo " checked";
                        }
                        echo "></td>
                      <td class=\"tl_col_2\"><pre><label for=\"sql_";
                        // line 34
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 34), "loop", [], "any", false, false, false, 34), "index", [], "any", false, false, false, 34), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
                        echo "\">";
                        if (twig_in_filter("CREATE", $context["command"])) {
                            echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery($context["command"]);
                        } else {
                            echo twig_escape_filter($this->env, $context["command"], "html", null, true);
                        }
                        echo "</label></pre></td>
                    </tr>
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
                    unset($context['_seq'], $context['_iterated'], $context['md5'], $context['command'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "              ";
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
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['commands'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "              </table>
            </div>
          </div>
          <div class=\"tl_formbody_submit\">
            <div class=\"tl_submit_container\">
              <button type=\"submit\" class=\"tl_submit\">";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_save"), "html", null, true);
            echo "</button>
            </div>
          </div>
        </form>
      ";
        }
        // line 49
        echo "    </div>
  </fieldset>
  <fieldset class=\"tl_box";
        // line 51
        if (($context["has_admin"] ?? null)) {
            echo " collapsed";
        }
        echo "\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_import"), "html", null, true);
        echo "</legend>
    <div>
      <h3>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_import"), "html", null, true);
        echo "</h3>
      ";
        // line 55
        if ((isset($context["import_error"]) || array_key_exists("import_error", $context))) {
            // line 56
            echo "        <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, ($context["import_error"] ?? null), "html", null, true);
            echo "</p>
      ";
        } elseif (        // line 57
(isset($context["import_date"]) || array_key_exists("import_date", $context))) {
            // line 58
            echo "        <p class=\"tl_confirm\">";
            echo twig_escape_filter($this->env, sprintf($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("imported_on"), ($context["import_date"] ?? null)), "html", null, true);
            echo "</p>
      ";
        } else {
            // line 60
            echo "        <p class=\"tl_info\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("import_data_will_be_deleted"), "html", null, true);
            echo "</p>
      ";
        }
        // line 62
        echo "      <p>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_import_explain");
        echo "</p>
      <form method=\"post\">
        <div class=\"tl_formbody_submit\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_template_import\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
        echo "\">
          <h4><label for=\"template\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("templates"), "html", null, true);
        echo "</label></h4>
          <select name=\"template\" id=\"template\" class=\"tl_select\">
            <option value=\"\">-</option>
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 71
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "          </select>
          <div class=\"tl_checkbox_container\" style=\"margin-top:3px\">
            <input type=\"checkbox\" name=\"preserve\" id=\"ctrl_preserve\" class=\"tl_checkbox\" value=\"1\"> <label for=\"ctrl_preserve\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("do_not_truncate"), "html", null, true);
        echo "</label>
          </div>
        </div>
        <div class=\"tl_formbody_submit\">
          <div class=\"tl_submit_container\">
            <button type=\"submit\" class=\"tl_submit\" onclick=\"if(!confirm('";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("import_confirm"), "html", null, true);
        echo "'))return false;Backend.getScrollOffset()\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_save"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </form>
    </div>
  </fieldset>
  ";
        // line 86
        if ( !($context["hide_admin"] ?? null)) {
            // line 87
            echo "    <fieldset class=\"tl_box";
            if (($context["has_admin"] ?? null)) {
                echo " collapsed";
            }
            echo "\">
      <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_create"), "html", null, true);
            echo "</legend>
      <div>
        <h3>";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_create"), "html", null, true);
            echo "</h3>
        ";
            // line 91
            if ((isset($context["admin_error"]) || array_key_exists("admin_error", $context))) {
                // line 92
                echo "          <p class=\"tl_error\">";
                echo twig_escape_filter($this->env, ($context["admin_error"] ?? null), "html", null, true);
                echo "</p>
        ";
            } elseif (            // line 93
($context["has_admin"] ?? null)) {
                // line 94
                echo "          <p class=\"tl_confirm\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_confirm"), "html", null, true);
                echo "</p>
        ";
            }
            // line 96
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_create_explain"), "html", null, true);
            echo "</p>
        ";
            // line 97
            if ( !($context["has_admin"] ?? null)) {
                // line 98
                echo "          <form method=\"post\">
            <div class=\"tl_formbody\">
              <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_admin\">
              <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
                // line 101
                echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
                echo "\">
              <h4><label for=\"username\">";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_username"), "html", null, true);
                echo "</label></h4>
              ";
                // line 103
                if ((isset($context["admin_username_error"]) || array_key_exists("admin_username_error", $context))) {
                    // line 104
                    echo "                <p class=\"tl_error\">";
                    echo twig_escape_filter($this->env, ($context["admin_username_error"] ?? null), "html", null, true);
                    echo "</p>
              ";
                }
                // line 106
                echo "              <input type=\"text\" name=\"username\" id=\"username\" class=\"tl_text\" value=\"";
                echo twig_escape_filter($this->env, (((isset($context["admin_username_value"]) || array_key_exists("admin_username_value", $context))) ? (_twig_default_filter(($context["admin_username_value"] ?? null))) : ("")), "html", null, true);
                echo "\">
              <h4><label for=\"name\">";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_name"), "html", null, true);
                echo "</label></h4>
              <input type=\"text\" name=\"name\" id=\"name\" class=\"tl_text\" value=\"";
                // line 108
                echo twig_escape_filter($this->env, (((isset($context["admin_name_value"]) || array_key_exists("admin_name_value", $context))) ? (_twig_default_filter(($context["admin_name_value"] ?? null))) : ("")), "html", null, true);
                echo "\">
              <h4><label for=\"email\">";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_email"), "html", null, true);
                echo "</label></h4>
              ";
                // line 110
                if ((isset($context["admin_email_error"]) || array_key_exists("admin_email_error", $context))) {
                    // line 111
                    echo "                <p class=\"tl_error\">";
                    echo twig_escape_filter($this->env, ($context["admin_email_error"] ?? null), "html", null, true);
                    echo "</p>
              ";
                }
                // line 113
                echo "              <input type=\"email\" name=\"email\" id=\"email\" class=\"tl_text\" value=\"";
                echo twig_escape_filter($this->env, (((isset($context["admin_email_value"]) || array_key_exists("admin_email_value", $context))) ? (_twig_default_filter(($context["admin_email_value"] ?? null))) : ("")), "html", null, true);
                echo "\">
              <h4><label for=\"password\">";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("password"), "html", null, true);
                echo "</label></h4>
              ";
                // line 115
                if ((isset($context["admin_password_error"]) || array_key_exists("admin_password_error", $context))) {
                    // line 116
                    echo "                <p class=\"tl_error\">";
                    echo twig_escape_filter($this->env, ($context["admin_password_error"] ?? null), "html", null, true);
                    echo "</p>
              ";
                }
                // line 118
                echo "              <input type=\"password\" name=\"password\" id=\"password\" class=\"tl_text\" value=\"\">
              <h4><label for=\"confirmation\">";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirmation"), "html", null, true);
                echo "</label></h4>
              <input type=\"password\" name=\"confirmation\" id=\"confirmation\" class=\"tl_text\" value=\"\">
            </div>
            <div class=\"tl_formbody_submit\">
              <div class=\"tl_submit_container\">
                <button type=\"submit\" class=\"tl_submit\">";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_save"), "html", null, true);
                echo "</button>
              </div>
            </div>
          </form>
        ";
            }
            // line 129
            echo "      </div>
    </fieldset>
    ";
            // line 131
            if (($context["has_admin"] ?? null)) {
                // line 132
                echo "      <fieldset class=\"tl_box last\">
        <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
                // line 133
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("installation_complete"), "html", null, true);
                echo "</legend>
        <div>
          <h3>";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("congratulations"), "html", null, true);
                echo "</h3>
          <p class=\"tl_confirm\">";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("congratulations_explain"), "html", null, true);
                echo "</p>
          <p>";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("installation_complete_explain"), "html", null, true);
                echo "</p>
        </div>
      </fieldset>
      <p id=\"back_end\"><a href=\"";
                // line 140
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contao_backend", [], true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back_end"), "html", null, true);
                echo " ›</a></p>
    ";
            }
            // line 142
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "@ContaoInstallation/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 142,  481 => 140,  475 => 137,  471 => 136,  467 => 135,  462 => 133,  459 => 132,  457 => 131,  453 => 129,  445 => 124,  437 => 119,  434 => 118,  428 => 116,  426 => 115,  422 => 114,  417 => 113,  411 => 111,  409 => 110,  405 => 109,  401 => 108,  397 => 107,  392 => 106,  386 => 104,  384 => 103,  380 => 102,  376 => 101,  371 => 98,  369 => 97,  364 => 96,  358 => 94,  356 => 93,  351 => 92,  349 => 91,  345 => 90,  340 => 88,  333 => 87,  331 => 86,  320 => 80,  312 => 75,  308 => 73,  297 => 71,  293 => 70,  287 => 67,  283 => 66,  275 => 62,  269 => 60,  263 => 58,  261 => 57,  256 => 56,  254 => 55,  250 => 54,  245 => 52,  239 => 51,  235 => 49,  227 => 44,  220 => 39,  206 => 38,  203 => 37,  178 => 34,  164 => 33,  161 => 32,  144 => 31,  137 => 29,  127 => 28,  121 => 25,  118 => 24,  115 => 23,  98 => 22,  92 => 19,  87 => 16,  84 => 15,  78 => 13,  76 => 12,  71 => 11,  65 => 9,  63 => 8,  59 => 7,  54 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/main.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\installation-bundle\\src\\Resources\\views\\main.html.twig");
    }
}
