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

/* @SchebTwoFactor/Authentication/form.html.twig */
class __TwigTemplate_941f52c1e67eb66509f05f2756bfeb15212558d6109c7c0ddf4567c9a6715a87 extends \Twig\Template
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
        // line 5
        echo "
";
        // line 7
        if (($context["authenticationError"] ?? null)) {
            // line 8
            echo "<p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["authenticationError"] ?? null), ($context["authenticationErrorData"] ?? null)), "html", null, true);
            echo "</p>
";
        }
        // line 10
        echo "
";
        // line 12
        echo "<p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("scheb_two_factor.choose_provider"), "html", null, true);
        echo ":
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["availableTwoFactorProviders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 14
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("2fa_login", ["preferProvider" => $context["provider"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</p>

";
        // line 19
        echo "<p class=\"label\"><label for=\"_auth_code\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("scheb_two_factor.auth_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["twoFactorProvider"] ?? null), "html", null, true);
        echo ":</label></p>

<form class=\"form\" action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("2fa_login_check");
        echo "\" method=\"post\">
    <p class=\"widget\"><input id=\"_auth_code\" type=\"text\" autocomplete=\"off\" name=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["authCodeParameterName"] ?? null), "html", null, true);
        echo "\" /></p>
    ";
        // line 23
        if (($context["displayTrustedOption"] ?? null)) {
            // line 24
            echo "        <p class=\"widget\"><label for=\"_trusted\"><input id=\"_trusted\" type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, ($context["trustedParameterName"] ?? null), "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("scheb_two_factor.trusted"), "html", null, true);
            echo "</label></p>
    ";
        }
        // line 26
        echo "    ";
        if (($context["isCsrfProtectionEnabled"] ?? null)) {
            // line 27
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["csrfParameterName"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken(($context["csrfTokenId"] ?? null)), "html", null, true);
            echo "\">
    ";
        }
        // line 29
        echo "    <p class=\"submit\"><input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("scheb_two_factor.login"), "html", null, true);
        echo "\" /></p>
</form>

";
        // line 33
        echo "<p class=\"cancel\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_security_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("scheb_two_factor.cancel"), "html", null, true);
        echo "</a></p>
";
    }

    public function getTemplateName()
    {
        return "@SchebTwoFactor/Authentication/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  110 => 29,  102 => 27,  99 => 26,  91 => 24,  89 => 23,  85 => 22,  81 => 21,  73 => 19,  69 => 16,  58 => 14,  54 => 13,  49 => 12,  46 => 10,  40 => 8,  38 => 7,  35 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SchebTwoFactor/Authentication/form.html.twig", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\scheb\\two-factor-bundle\\Resources\\views\\Authentication\\form.html.twig");
    }
}
