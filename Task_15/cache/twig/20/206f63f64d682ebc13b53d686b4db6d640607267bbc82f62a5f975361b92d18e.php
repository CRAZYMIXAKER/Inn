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

/* file.twig */
class __TwigTemplate_f19951751d6ae819ab2779d023194c20fbee0319762ddf88f3c781cde3448ba8 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "file.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div>size: ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 4, $this->source); })()), "size", [], "any", false, false, false, 4);
        echo "</div>
    <div> name: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5);
        echo "</div>
    <br>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metaInformation"]) || array_key_exists("metaInformation", $context) ? $context["metaInformation"] : (function () { throw new RuntimeError('Variable "metaInformation" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 8
            echo "        <div>";
            echo $context["key"];
            echo " => ";
            echo $context["item"];
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "file.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  60 => 7,  55 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "file.twig", "C:\\OpenServer\\domains\\Inn\\Task_15\\views\\file.twig");
    }
}
