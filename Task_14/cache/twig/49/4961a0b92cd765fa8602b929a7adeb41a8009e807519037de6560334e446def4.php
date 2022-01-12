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
class __TwigTemplate_8ad02fddafe88ac5f095e5b8e4b1f30b19a9f299ee0ed3013a90da7786ff4754 extends Template
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
        echo "<form action=\"\" method=\"post\">
        <label for=\"email\">E-mail</label>
        <br>
        <input id=\"email\" type=\"email\" name=\"email\" placeholder=\"Email@gmail.com\"
           pattern=\"^([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})\" autofocus required>
        <br>
        <label for=\"password\">Password</label>
        <br>
        <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"password\" required>
        <br><br>
        <button>Authorization</button> <br>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 13
            echo "                ";
            echo $context["error"];
            echo "<br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</form>";
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
        return array (  63 => 15,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "C:\\OpenServer\\domains\\Inn\\Task_14\\templates\\index.twig");
    }
}
