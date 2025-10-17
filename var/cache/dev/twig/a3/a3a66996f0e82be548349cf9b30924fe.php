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

/* inscription/index.html.twig */
class __TwigTemplate_286af6b2764de7854972b6f4ed2e165f extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/inscription.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "    <div class=\"login-container\">
        <h1>Sign<div class=\"text-color\">Up</div></h1>

        ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
            <div class=\"form-group\">
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <small class=\"text-danger\">";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 17, $this->source); })()), "username", [], "any", false, false, false, 17), 'errors');
        yield "</small>
            </div>

            <div class=\"form-group\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <small class=\"text-danger\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'errors');
        yield "</small>
            </div>

            <div class=\"form-group\">
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 26, $this->source); })()), "contact", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <small class=\"text-danger\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 27, $this->source); })()), "contact", [], "any", false, false, false, 27), 'errors');
        yield "</small>
            </div>

            <div class=\"form-group\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 31, $this->source); })()), "address", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "rows" => 3]]);
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 35, $this->source); })()), "country", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "id" => "plainPassword"]]);
        yield "
                <small class=\"text-danger\" id=\"passwordError\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'errors');
        yield "</small>
            </div>

            <div class=\"form-group compact-checkbox\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 44, $this->source); })()), "isSeller", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 45, $this->source); })()), "isSeller", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
            </div>

            <div class=\"form-group compact-checkbox\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 49, $this->source); })()), "remember_me", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 50, $this->source); })()), "remember_me", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
            </div>

            <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">S'inscrire</button>
        ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 54, $this->source); })()), 'form_end');
        yield "
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
        return "inscription/index.html.twig";
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
        return array (  201 => 54,  194 => 50,  190 => 49,  183 => 45,  179 => 44,  172 => 40,  168 => 39,  161 => 35,  154 => 31,  147 => 27,  143 => 26,  136 => 22,  132 => 21,  125 => 17,  121 => 16,  116 => 14,  111 => 11,  101 => 10,  91 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/inscription.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"login-container\">
        <h1>Sign<div class=\"text-color\">Up</div></h1>

        {{ form_start(inscriptionForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
            <div class=\"form-group\">
                {{ form_widget(inscriptionForm.username, {'attr': {'class': 'form-control'}}) }}
                <small class=\"text-danger\">{{ form_errors(inscriptionForm.username) }}</small>
            </div>

            <div class=\"form-group\">
                {{ form_widget(inscriptionForm.email, {'attr': {'class': 'form-control'}}) }}
                <small class=\"text-danger\">{{ form_errors(inscriptionForm.email) }}</small>
            </div>

            <div class=\"form-group\">
                {{ form_widget(inscriptionForm.contact, {'attr': {'class': 'form-control'}}) }}
                <small class=\"text-danger\">{{ form_errors(inscriptionForm.contact) }}</small>
            </div>

            <div class=\"form-group\">
                {{ form_widget(inscriptionForm.address, {'attr': {'class': 'form-control', 'rows': 3}}) }}
            </div>

            <div class=\"form-group\">
                {{ form_widget(inscriptionForm.country, {'attr': {'class': 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                {{ form_widget(inscriptionForm.plainPassword, {'attr': {'class': 'form-control', 'id': 'plainPassword'}}) }}
                <small class=\"text-danger\" id=\"passwordError\">{{ form_errors(inscriptionForm.plainPassword) }}</small>
            </div>

            <div class=\"form-group compact-checkbox\">
                {{ form_widget(inscriptionForm.isSeller, {'attr': {'class': 'form-check-input'}}) }}
                {{ form_label(inscriptionForm.isSeller, null, {'label_attr': {'class': 'form-check-label'}}) }}
            </div>

            <div class=\"form-group compact-checkbox\">
                {{ form_widget(inscriptionForm.remember_me, {'attr': {'class': 'form-check-input'}}) }}
                {{ form_label(inscriptionForm.remember_me, null, {'label_attr': {'class': 'form-check-label'}}) }}
            </div>

            <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">S'inscrire</button>
        {{ form_end(inscriptionForm) }}
    </div>
{% endblock %}
", "inscription/index.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/inscription/index.html.twig");
    }
}
