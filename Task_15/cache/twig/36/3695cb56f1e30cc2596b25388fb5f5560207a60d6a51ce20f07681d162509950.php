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

/* base.twig */
class __TwigTemplate_3b2ad6a6c0cdb963327a570f1df042dac1696654865889a72e7aee1853193613 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>File</title>
</head>
<body>
";
        // line 11
        $this->displayBlock('main', $context, $blocks);
        // line 14
        echo "</body>
</html>

";
    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  59 => 11,  52 => 14,  50 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "C:\\OpenServer\\domains\\Inn\\Task_15\\views\\base.twig");
    }
}
