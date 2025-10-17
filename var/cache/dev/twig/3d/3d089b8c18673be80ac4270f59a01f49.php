<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* login/index.html.twig */
class __TwigTemplate_8466bc525e8e0dee49578f30581e0ce6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'theme_bootstrap' => [$this, 'block_theme_bootstrap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_theme_bootstrap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "theme_bootstrap"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "    <style>
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 10px 0 16px;
        }
        .remember-me input[type=\"checkbox\"] {
            margin: 0;
            width: 16px;
            height: 16px;
        }
        .remember-me label {
            margin: 0;
            line-height: 1;
            cursor: pointer;
        }
    </style>
    <div class=\"login-container\">
        <h1>Sign<div class=\"text-color\">In</div></h1>
        ";
        // line 30
        if (array_key_exists("log_message", $context)) {
            // line 31
            yield "            <script>
                console.log(\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["log_message"]) || array_key_exists("log_message", $context) ? $context["log_message"] : (function () { throw new RuntimeError('Variable "log_message" does not exist.', 32, $this->source); })()), "js"), "html", null, true);
            yield "\");
            </script>
        ";
        }
        // line 35
        yield "
        <form method=\"POST\" action=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_connection");
        yield "\">
            ";
        // line 37
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                <div class=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "html", null, true);
            yield "</div>
            ";
        }
        // line 40
        yield "
            <div class=\"form-group\">
                <input type=\"text\" id=\"username\" name=\"username\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 42, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Username\" required autofocus>
            </div>

            <div class=\"form-group\">
                <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" required>
            </div>

            <div class=\"remember-me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" />
                <label for=\"remember_me\">Remember me</label>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            <button type=\"submit\">Login</button>

            <div class=\"links\">
                Need an account? <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription");
        yield "\">Sign up here</a><br>
                <a href=\"#\">Forget your password</a>
            </div>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  177 => 59,  169 => 54,  154 => 42,  150 => 40,  144 => 38,  142 => 37,  138 => 36,  135 => 35,  129 => 32,  126 => 31,  124 => 30,  102 => 10,  92 => 9,  76 => 6,  59 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/login/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block theme_bootstrap %}{% endblock %}


{% block body %}
    <style>
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 10px 0 16px;
        }
        .remember-me input[type=\"checkbox\"] {
            margin: 0;
            width: 16px;
            height: 16px;
        }
        .remember-me label {
            margin: 0;
            line-height: 1;
            cursor: pointer;
        }
    </style>
    <div class=\"login-container\">
        <h1>Sign<div class=\"text-color\">In</div></h1>
        {% if log_message is defined %}
            <script>
                console.log(\"{{ log_message|e('js') }}\");
            </script>
        {% endif %}

        <form method=\"POST\" action=\"{{ path('app_connection') }}\">
            {% if error %}
                <div class=\"alert\">{{ error }}</div>
            {% endif %}

            <div class=\"form-group\">
                <input type=\"text\" id=\"username\" name=\"username\" value=\"{{ last_username|default('') }}\" placeholder=\"Username\" required autofocus>
            </div>

            <div class=\"form-group\">
                <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" required>
            </div>

            <div class=\"remember-me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" />
                <label for=\"remember_me\">Remember me</label>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            <button type=\"submit\">Login</button>

            <div class=\"links\">
                Need an account? <a href=\"{{ path('app_inscription') }}\">Sign up here</a><br>
                <a href=\"#\">Forget your password</a>
            </div>
        </form>
    </div>
{% endblock %}
", "login/index.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/login/index.html.twig");
    }
}
