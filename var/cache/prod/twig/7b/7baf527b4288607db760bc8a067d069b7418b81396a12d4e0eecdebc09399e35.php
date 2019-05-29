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

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dc9be648d05f408b99f005ce52a49504e9bd2ae42830f07a14a65afd449e8305 extends \Twig\Template
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
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Framework/Form/textarea_widget.html.php", "C:\\Data\\Xampp7\\htdocs\\contao.loc\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
