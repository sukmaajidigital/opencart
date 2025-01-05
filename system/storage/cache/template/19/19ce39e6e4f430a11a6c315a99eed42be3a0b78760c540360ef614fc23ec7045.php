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

/* extension/oc_theme_example/catalog/view/template/common/header.twig */
class __TwigTemplate_fe3fc4b3e93955402fb93f60bbdf75444a49d07e5934c7d80b811052af14e7b3 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo "test header";
    }

    public function getTemplateName()
    {
        return "extension/oc_theme_example/catalog/view/template/common/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/oc_theme_example/catalog/view/template/common/header.twig", "C:\\local\\opencart\\extension\\oc_theme_example\\catalog\\view\\template\\common\\header.twig");
    }
}
