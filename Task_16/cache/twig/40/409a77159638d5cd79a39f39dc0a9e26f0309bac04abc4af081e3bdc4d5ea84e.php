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

/* v_reg.twig */
class __TwigTemplate_36e14d76591acc4461d74e6ed2e43e0325ac9283d04d555ebd3a92b4bf317c77 extends Template
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
    <div class=\"form__item\">
        <label class=\"form__label\">Name</label><br>
        <input class=\"form__input\" type=\"text\" name=\"firstName\" value=\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 4, $this->source); })()), "firstName", [], "any", false, false, false, 4);
        echo "\" required /><br>
        <div class=\"error\">";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 5, $this->source); })()), "firstName", [], "any", false, false, false, 5);
        echo "</div>
    </div>
    <div class=\"form__item\">
        <label class=\"form__label\">LastName</label><br>
        <input class=\"form__input\" type=\"text\" name=\"lastName\" value=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 9, $this->source); })()), "lastName", [], "any", false, false, false, 9);
        echo "\" required /><br>
        <div class=\"error\">";
        // line 10
        echo twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 10, $this->source); })()), "lastName", [], "any", false, false, false, 10);
        echo "</div>
    </div>
    <div class=\"form__item\">
        <label class=\"form__label\">E-mail</label><br>
        <input class=\"form__input\" type=\"email\" name=\"email\" value=\"";
        // line 14
        echo twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14);
        echo "\" required /><br>
        <div class=\"error\">";
        // line 15
        echo twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15);
        echo "</div>
    </div>
    <div class=\"form__item\">
        <label class=\"form__label\">E-mail Confirm</label><br>
        <input class=\"form__input\" type=\"email\" name=\"emailConfirm\" value=\"";
        // line 19
        echo twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 19, $this->source); })()), "emailConfirm", [], "any", false, false, false, 19);
        echo "\" required /><br>
        <div class=\"error\">";
        // line 20
        echo twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 20, $this->source); })()), "emailConfirm", [], "any", false, false, false, 20);
        echo "</div>
    </div>
    <div class=\"form__item\">
        <label class=\"form__label\">Password</label><br>
        <input class=\"form__input\" type=\"password\" name=\"password\" required /><br>
        <div class=\"error\">";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 25, $this->source); })()), "password", [], "any", false, false, false, 25);
        echo "</div>
    </div>
    <div class=\"form__item\">
        <label class=\"form__label\">E-mail Confirm</label><br>
        <input class=\"form__input\" type=\"password\" name=\"passwordConfirm\" required /><br>
        <div class=\"error\">";
        // line 30
        echo twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 30, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 30);
        echo "</div>
    </div>
    <br>
    <button>Registration</button>   <br>
</form>";
    }

    public function getTemplateName()
    {
        return "v_reg.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  87 => 25,  79 => 20,  75 => 19,  68 => 15,  64 => 14,  57 => 10,  53 => 9,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_reg.twig", "C:\\OpenServer\\domains\\Inn\\Task_16\\views\\v_reg.twig");
    }
}
