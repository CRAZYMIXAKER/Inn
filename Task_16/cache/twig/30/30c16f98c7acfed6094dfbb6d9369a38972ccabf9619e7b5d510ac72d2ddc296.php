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
class __TwigTemplate_8538c186f5755389d27d68bddb6d603936a81c6bf18f7f87292ab1ca94caa548 extends Template
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
        $this->parent = $this->loadTemplate("v_base.twig", "v_reg.twig", 1);
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
        <div class=\"form__item\">
            <label class=\"form__label\">Name</label><br>
            <input class=\"form__input\" type=\"text\" name=\"firstName\" value=\"";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "firstName", [], "any", true, true, false, 8) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "firstName", [], "any", false, false, false, 8)))) ? (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "firstName", [], "any", false, false, false, 8)) : (""));
        echo "\" required/>
            <label class=\"error\">";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "firstName", [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "firstName", [], "any", false, false, false, 9)))) ? (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "firstName", [], "any", false, false, false, 9)) : (""));
        echo "</label>
        </div>
        <div class=\"form__item\">
            <label class=\"form__label\">LastName</label><br>
            <input class=\"form__input\" type=\"text\" name=\"lastName\" value=\"";
        // line 13
        echo (((twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "lastName", [], "any", true, true, false, 13) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "lastName", [], "any", false, false, false, 13)))) ? (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "lastName", [], "any", false, false, false, 13)) : (""));
        echo "\" required/>
            <label class=\"error\">";
        // line 14
        echo (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "lastName", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "lastName", [], "any", false, false, false, 14)))) ? (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "lastName", [], "any", false, false, false, 14)) : (""));
        echo "</label>
        </div>
        <div class=\"form__item\">
            <label class=\"form__label\">E-mail</label><br>
            <input class=\"form__input\" type=\"email\" name=\"email\" value=\"";
        // line 18
        echo (((twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "email", [], "any", true, true, false, 18) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "email", [], "any", false, false, false, 18)))) ? (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "email", [], "any", false, false, false, 18)) : (""));
        echo "\"
                   pattern=\"^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" placeholder=\"Email@gmail.com\" required/>
            <label class=\"error\">";
        // line 20
        echo (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 20)))) ? (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 20)) : (""));
        echo "</label>
        </div>
        <div class=\"form__item\">
            <label class=\"form__label\">E-mail Confirm</label><br>
            <input class=\"form__input\" type=\"email\" name=\"emailConfirm\" value=\"";
        // line 24
        echo (((twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "emailConfirm", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "emailConfirm", [], "any", false, false, false, 24)))) ? (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "emailConfirm", [], "any", false, false, false, 24)) : (""));
        echo "\"
                   pattern=\"^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" placeholder=\"Email@gmail.com\" required/>
            <label class=\"error\">";
        // line 26
        echo (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "emailConfirm", [], "any", true, true, false, 26) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "emailConfirm", [], "any", false, false, false, 26)))) ? (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "emailConfirm", [], "any", false, false, false, 26)) : (""));
        echo "</label>
        </div>
        <div class=\"form__item\">
            <label class=\"form__label\">Password</label><br>
            <input class=\"form__input\" type=\"password\" name=\"password\"
                   pattern=\"^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[@\$!%*?&-_#]).{6,32}\$\" required/>
            <label class=\"error\">";
        // line 32
        echo (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 32)))) ? (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 32)) : (""));
        echo "</label>
        </div>
        <div class=\"form__item\">
            <label class=\"form__label\">Password Confirm</label><br>
            <input class=\"form__input\" type=\"password\" name=\"passwordConfirm\"
                   pattern=\"^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[@\$!%*?&-_#]).{6,32}\$\" required/>
            <label class=\"error\">";
        // line 38
        echo (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "passwordConfirm", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "passwordConfirm", [], "any", false, false, false, 38)))) ? (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "passwordConfirm", [], "any", false, false, false, 38)) : (""));
        echo "</label>
        </div>
        <br>
        <button>Registration</button>
        <br>
    </form>
";
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
        return array (  115 => 38,  106 => 32,  97 => 26,  92 => 24,  85 => 20,  80 => 18,  73 => 14,  69 => 13,  62 => 9,  58 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_reg.twig", "C:\\OpenServer\\domains\\Inn\\Task_16\\views\\v_reg.twig");
    }
}
