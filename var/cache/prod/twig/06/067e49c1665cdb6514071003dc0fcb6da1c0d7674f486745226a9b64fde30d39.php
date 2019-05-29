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

/* @ContaoInstallation/layout.html.twig */
class __TwigTemplate_d0b4d14c20bfce094e91b03752d5340a0e387a0dd2832a9cf0519474599fee8a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\">
<head>

  <meta charset=\"utf-8\">
  <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("install_tool"), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ($context["host"] ?? null), "html", null, true);
        echo "</title>
  <meta name=\"generator\" content=\"Contao Open Source CMS\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,shrink-to-fit=no\">
  <meta name=\"robots\" content=\"noindex,nofollow\">

  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/fonts.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/basic.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/install.css"), "html", null, true);
        echo "\">

  <script>var Contao={theme:'flexible',path:'";
        // line 15
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "'}</script>
  <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mootools/js/mootools.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/contaocore/mootao.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/contaocore/core.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/hover.js"), "html", null, true);
        echo "\"></script>

</head>
<body class=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["ua"] ?? null), "html", null, true);
        echo "\">

  <header id=\"header\">
    <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("install_tool"), "html", null, true);
        echo "</h1>
  </header>

  <div id=\"container\">
    <main id=\"main\">
      ";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 31
        echo "    </main>
  </div>

</body>
</html>
";
    }

    // line 30
    public function block_main($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@ContaoInstallation/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  107 => 31,  105 => 30,  97 => 25,  91 => 22,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  64 => 13,  60 => 12,  56 => 11,  46 => 6,  39 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/layout.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\contao\\installation-bundle\\src\\Resources\\views\\layout.html.twig");
    }
}
