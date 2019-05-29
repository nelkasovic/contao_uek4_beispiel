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

/* @ContaoInstallation/configuration_error.html.twig */
class __TwigTemplate_51985bdde4aad804d4a3ef2c4eda8c9581f80134ba8f2e77e09fbe65ab695821 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "@ContaoInstallation/configuration_error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "  <fieldset class=\"tl_tbox nolegend\">
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("an_error_occurred"), "html", null, true);
        echo "</h3>
    ";
        // line 6
        if ((($context["errorCode"] ?? null) == 1)) {
            // line 7
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_version"), "html", null, true);
            echo "</p>
      <p>";
            // line 8
            echo twig_escape_filter($this->env, sprintf($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_version_explain"), ($context["version"] ?? null)), "html", null, true);
            echo "</p>
    ";
        } elseif ((        // line 9
($context["errorCode"] ?? null) == 2)) {
            // line 10
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_collation"), "html", null, true);
            echo "</p>
      <p>";
            // line 11
            echo sprintf($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_collation_explain"), ($context["collation"] ?? null));
            echo "</p>
      <div id=\"sql_wrapper\">
        <pre>doctrine:
    dbal:
        connections:
            default:
                default_table_options:
                    charset: utf8
                    collate: utf8_unicode_ci</pre>
      </div>
    ";
        } elseif ((        // line 21
($context["errorCode"] ?? null) == 3)) {
            // line 22
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_engine"), "html", null, true);
            echo "</p>
      <p>";
            // line 23
            echo sprintf($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_engine_explain"), ($context["engine"] ?? null));
            echo "</p>
      <div id=\"sql_wrapper\">
        <pre>doctrine:
    dbal:
        connections:
            default:
                default_table_options:
                    engine: MyISAM</pre>
      </div>
    ";
        } elseif ((        // line 32
($context["errorCode"] ?? null) == 4)) {
            // line 33
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("engine_mismatch"), "html", null, true);
            echo "</p>
      <p>";
            // line 34
            echo sprintf($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("engine_mismatch_explain"), ($context["engine"] ?? null));
            echo "</p>
      <div id=\"sql_wrapper\">
        <pre>doctrine:
    dbal:
        connections:
            default:
                default_table_options:
                    charset: utf8
                    collate: utf8_unicode_ci</pre>
      </div>
    ";
        } elseif ((        // line 44
($context["errorCode"] ?? null) == 5)) {
            // line 45
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("innodb_large_prefix"), "html", null, true);
            echo "</p>
      <p>";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("innodb_large_prefix_explain");
            echo "</p>
      <div id=\"sql_wrapper\">
        <pre>doctrine:
    dbal:
        connections:
            default:
                default_table_options:
                    charset: utf8
                    collate: utf8_unicode_ci</pre>
      </div>
    ";
        } elseif ((        // line 56
($context["errorCode"] ?? null) == 6)) {
            // line 57
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("innodb_additional"), "html", null, true);
            echo "</p>
      <p>";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("innodb_additional_explain");
            echo "</p>
      <div id=\"sql_wrapper\">
        <pre>innodb_large_prefix = 1
innodb_file_format = Barracuda
innodb_file_per_table = 1</pre>
      </div>
    ";
        }
        // line 65
        echo "  </fieldset>
";
    }

    public function getTemplateName()
    {
        return "@ContaoInstallation/configuration_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 65,  151 => 58,  146 => 57,  144 => 56,  131 => 46,  126 => 45,  124 => 44,  111 => 34,  106 => 33,  104 => 32,  92 => 23,  87 => 22,  85 => 21,  72 => 11,  67 => 10,  65 => 9,  61 => 8,  56 => 7,  54 => 6,  50 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/configuration_error.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\installation-bundle\\src\\Resources\\views\\configuration_error.html.twig");
    }
}
