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

/* index.twig */
class __TwigTemplate_2b67790b457913a07614bd81f5d055ed1289475fabd3a1ef9bb02b1b8e120a30 extends Template
{
    private $source;
    private $macros = [];

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
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<form method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1048576\">
    <input type=\"file\" name=\"file\" accept=\"image/jpeg,image/pjpeg,image/jpeg,image/jpeg,image/pjpeg,image/jpeg,
    image/pjpeg,image/jpeg,image/pjpeg,image/x-jps,image/png,text/plain,application/msword\">
    <input type=\"submit\" value=\"Загрузить файл!\">
</form>
<div>";
        // line 10
        echo (($context["error"]) ?? (""));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "C:\\OpenServer\\domains\\Inn\\Task_15\\views\\index.twig");
    }
}
