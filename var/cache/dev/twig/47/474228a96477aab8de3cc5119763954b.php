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

/* admin/liveForm.html.twig */
class __TwigTemplate_412b8f9097a20004a8c0c08a14394ef3 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/liveForm.html.twig"));

        $this->parent = $this->load("admin/baseAdmin.html.twig", 1);
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

        yield "Création de Live";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/live_form.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        yield "    <main class=\"live-creator-container\">
        <form action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_live_confirm");
        yield "\" method=\"post\" class=\"live-form\">
            <section class=\"form-section\">
                <h2 class=\"section-title\" data-i18n=\"live_information\">Live Information</h2>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"titre\" id=\"titre\" class=\"form-input\" placeholder=\"Titre du live\" data-i18n-placeholder=\"live_title\" required>
                </div>

                <div class=\"form-group\">
                    <textarea name=\"description\" id=\"description\" class=\"form-input form-textarea\" placeholder=\"Description du live...\" data-i18n-placeholder=\"live_description\" required></textarea>
                </div>
            </section>

            <section class=\"form-section\">
                <h2 class=\"section-title\" data-i18n=\"products_to_highlight\">Products to highlight</h2>
                <div class=\"products-grid\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            yield "                        <label class=\"product-card-wrapper\">
                            <input type=\"checkbox\" name=\"items[]\" value=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id_item", [], "any", false, false, false, 29), "html", null, true);
            yield "\" class=\"product-checkbox\">
                            <article class=\"product-card\">
                                <img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, false, 31))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nameItem", [], "any", false, false, false, 31), "html", null, true);
            yield "\" class=\"product-image\" loading=\"lazy\">
                                <div class=\"product-info\">
                                    <h3 class=\"product-name\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nameItem", [], "any", false, false, false, 33), "html", null, true);
            yield "</h3>
                                    <div class=\"product-meta\">
                                        <span class=\"product-category\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nameCategory", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>
                                        <span class=\"product-category\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "stock_disponible", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                                    </div>
                                    <div class=\"product-price\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 38), 2, ".", " "), "html", null, true);
            yield " €</div>
                                    ";
            // line 39
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "namePromotion", [], "any", false, false, false, 39)) > 0)) {
                // line 40
                yield "                                        <span class=\"product-promo\">-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "percentage", [], "any", false, false, false, 40), "html", null, true);
                yield "%</span>
                                    ";
            }
            // line 42
            yield "                                </div>
                            </article>
                        </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                </div>
            </section>

            <div class=\"form-footer\">
                <p class=\"warning-text\" data-i18n=\"form_warning\">⚠️ Tous les champs sont obligatoires. Le live sera visible immédiatement après validation.</p>
                <button type=\"submit\" class=\"submit-btn\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <polygon points=\"23 7 16 12 23 17 23 7\"></polygon>
                        <rect x=\"1\" y=\"5\" width=\"15\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                    </svg>
                    <span data-i18n=\"launch_live_shopping\">Lancer le Live Shopping</span>
                </button>
            </div>
        </form>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/liveForm.html.twig";
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
        return array (  186 => 46,  177 => 42,  171 => 40,  169 => 39,  165 => 38,  160 => 36,  156 => 35,  151 => 33,  144 => 31,  139 => 29,  136 => 28,  132 => 27,  114 => 12,  111 => 11,  101 => 10,  91 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/baseAdmin.html.twig' %}

{% block title %}Création de Live{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/live_form.css') }}\">
{% endblock %}

{% block content %}
    <main class=\"live-creator-container\">
        <form action=\"{{ path('admin_live_confirm') }}\" method=\"post\" class=\"live-form\">
            <section class=\"form-section\">
                <h2 class=\"section-title\" data-i18n=\"live_information\">Live Information</h2>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"titre\" id=\"titre\" class=\"form-input\" placeholder=\"Titre du live\" data-i18n-placeholder=\"live_title\" required>
                </div>

                <div class=\"form-group\">
                    <textarea name=\"description\" id=\"description\" class=\"form-input form-textarea\" placeholder=\"Description du live...\" data-i18n-placeholder=\"live_description\" required></textarea>
                </div>
            </section>

            <section class=\"form-section\">
                <h2 class=\"section-title\" data-i18n=\"products_to_highlight\">Products to highlight</h2>
                <div class=\"products-grid\">
                    {% for item in items %}
                        <label class=\"product-card-wrapper\">
                            <input type=\"checkbox\" name=\"items[]\" value=\"{{ item.id_item }}\" class=\"product-checkbox\">
                            <article class=\"product-card\">
                                <img src=\"{{ asset('uploads/' ~ item.images) }}\" alt=\"{{ item.nameItem }}\" class=\"product-image\" loading=\"lazy\">
                                <div class=\"product-info\">
                                    <h3 class=\"product-name\">{{ item.nameItem }}</h3>
                                    <div class=\"product-meta\">
                                        <span class=\"product-category\">{{ item.nameCategory }}</span>
                                        <span class=\"product-category\">{{ item.stock_disponible }}</span>
                                    </div>
                                    <div class=\"product-price\">{{ item.prix|number_format(2, '.', ' ') }} €</div>
                                    {% if item.namePromotion|length > 0 %}
                                        <span class=\"product-promo\">-{{ item.percentage }}%</span>
                                    {% endif %}
                                </div>
                            </article>
                        </label>
                    {% endfor %}
                </div>
            </section>

            <div class=\"form-footer\">
                <p class=\"warning-text\" data-i18n=\"form_warning\">⚠️ Tous les champs sont obligatoires. Le live sera visible immédiatement après validation.</p>
                <button type=\"submit\" class=\"submit-btn\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <polygon points=\"23 7 16 12 23 17 23 7\"></polygon>
                        <rect x=\"1\" y=\"5\" width=\"15\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                    </svg>
                    <span data-i18n=\"launch_live_shopping\">Lancer le Live Shopping</span>
                </button>
            </div>
        </form>
    </main>
{% endblock %}
", "admin/liveForm.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/liveForm.html.twig");
    }
}
