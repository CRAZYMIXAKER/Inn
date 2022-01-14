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

/* v_auth.twig */
class __TwigTemplate_8718e673d04602b9e11041afe14c628e9f976781c6672fce9f50fed905508f99 extends Template
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
        $this->parent = $this->loadTemplate("v_base.twig", "v_auth.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>";
        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })());
        echo "</h1>

    <form action=\"\" method=\"post\">
        <label for=\"email\">E-mail</label>
        <br>
        <input id=\"email\" type=\"email\" name=\"email\" placeholder=\"Email@gmail.com\" value=\"";
        // line 9
        echo (($context["email"]) ?? (""));
        echo "\"
               pattern=\"^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" autofocus required>
        <br>
        <label for=\"password\">Password</label>
        <br>
        <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"password\" required>
        <br>
        <div class=\"checkbox\">
            <input class=\"checkbox__input\" id=\"checkbox\" type=\"checkbox\" name=\"remember\">
            <label class=\"checkbox__label\" for=\"checkbox\"> Remember me for 1 week</label>
        </div><br>
        <button>Authorization</button>
        <br>
        <div>";
        // line 22
        echo (($context["error"]) ?? (""));
        echo "</div>
    </form>
    <div><a href=\"/Task_17/Registration/signUp\">Are you not registered?</a></div>
";
    }

    public function getTemplateName()
    {
        return "v_auth.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  59 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_auth.twig", "C:\\OpenServer\\domains\\Inn\\Task_18\\views\\v_auth.twig");
    }
}
