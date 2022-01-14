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

/* v_main.twig */
class __TwigTemplate_4395596c9dda8ccfa14335061824eb4bfc2871d9e029a4574d001b1808cb2479 extends Template
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
        return "v_base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("v_base.twig", "v_main.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1> Hello ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "first_name", [], "any", false, false, false, 4);
        echo "</h1>
    <form method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1048576\">
        <input type=\"file\" name=\"file\" accept=\"image/jpeg,image/pjpeg,image/jpeg,image/jpeg,image/pjpeg,image/jpeg,
    image/pjpeg,image/jpeg,image/pjpeg,image/x-jps,image/png,text/plain,application/msword\">
        <input type=\"submit\" value=\"Загрузить файл!\">
    </form>
    <div>";
        // line 11
        echo (($context["error"]) ?? (""));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "v_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_main.twig", "C:\\OpenServer\\domains\\Inn\\Task_18\\views\\v_main.twig");
    }
}
