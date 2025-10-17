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

/* admin/index.html.twig */
class __TwigTemplate_a99c0c356f58fbcd61b7b11089994eea extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->load("admin/baseAdmin.html.twig", 1);
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

        yield "Dasboard";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard.css"), "html", null, true);
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
        yield "    <div class=\"modern-dashboard\">
        <!-- Filtres modernes -->
        <div class=\"filter-card\">
            <form action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" method=\"post\">
                <div class=\"filter-group\">
                    <label for=\"dateD\" data-i18n=\"period\">Période</label>
                    <div class=\"date-range\">
                        <input type=\"date\" name=\"dateD\" id=\"dateD\" required class=\"modern-input\">
                        <span class=\"date-separator\">—</span>
                        <input type=\"date\" name=\"dateF\" id=\"dateF\" required class=\"modern-input\">
                    </div>
                </div>

                <div class=\"filter-group\">
                    <label for=\"category\" data-i18n=\"category\">Catégorie</label>
                    <select name=\"category\" id=\"category\" required class=\"modern-select\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "nameCategory", [], "any", false, false, false, 28), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "                    </select>
                </div>

                <button type=\"submit\" class=\"modern-button\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                        <path d=\"M21 21L16.65 16.65\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    <span data-i18n=\"apply\">Appliquer</span>
                </button>
            </form>
        </div>

        <!-- Graphiques avec style moderne -->
        <div class=\"chart-grid\">
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 data-i18n=\"revenue\">Chiffre d'affaires</h3>
                    <span class=\"chart-badge\" data-i18n=\"monthly\">Mensuel</span>
                </div>
                <canvas id=\"salesChart\"></canvas>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 data-i18n=\"trends\">Tendances</h3>
                    <span class=\"chart-badge\" data-i18n=\"by_category\">Par catégorie</span>
                </div>
                <canvas id=\"trendsChart\"></canvas>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 data-i18n=\"distribution\">Répartition</h3>
                    <span class=\"chart-badge\" data-i18n=\"sales\">Ventes</span>
                </div>
                <canvas id=\"cheeseChart\"></canvas>
            </div>
        </div>

        <!-- Synthèse globale -->
        <div class=\"summary-section\">
            <div class=\"summary-card\" style=\"
                background: linear-gradient(135deg, #2c3e50, #4ca1af);
                color: #fff;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 6px 15px rgba(0,0,0,0.2);
                text-align: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            \">
                <div class=\"icon-wrapper\" style=\"
                background: rgba(255,255,255,0.15);
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                margin: 0 auto 15px;
                \">
                    <i class=\"fas fa-chart-line fa-lg\"></i>
                </div>
                <h4 style=\"margin-bottom: 10px; font-size: 1.2rem;\">
                    <i class=\"fas fa-chart-pie\"></i> <span data-i18n=\"total_turnover\">Total turnover</span>
                </h4>
                <p style=\"font-size: 1.3rem; font-weight: bold;\">
                    ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 97, $this->source); })()), "ca_total", [], "any", false, false, false, 97), 0, ",", " "), "html", null, true);
        yield " €
                </p>
            </div>

            <div class=\"summary-card\" style=\"
                background: linear-gradient(135deg, #ff7e5f, #feb47b);
                color: #fff;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 6px 15px rgba(0,0,0,0.2);
                text-align: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            \">
                <div class=\"icon-wrapper\" style=\"
                    background: rgba(255,255,255,0.15);
                    width: 50px;
                    height: 50px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    margin: 0 auto 15px;
                \">
                    <i class=\"fas fa-shopping-cart fa-lg\"></i>
                </div>
                <h4 style=\"margin-bottom: 10px; font-size: 1.2rem;\">
                    <i class=\"fas fa-tag\"></i> <span data-i18n=\"total_sales\">Total sales</span>
                </h4>
                <p>";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 125, $this->source); })()), "ventes_total", [], "any", false, false, false, 125), "html", null, true);
        yield "</p>
            </div>

            <div class=\"summary-card\" style=\"
                background: linear-gradient(135deg, #8e2de2, #4a00e0);
                color: #fff;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 6px 15px rgba(0,0,0,0.2);
                text-align: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            \">
                <div class=\"icon-wrapper\" style=\"
                    background: rgba(255,255,255,0.15);
                    width: 50px;
                    height: 50px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    margin: 0 auto 15px;
                \">
                    <i class=\"fas fa-shopping-basket fa-lg\"></i>
                </div>
                <h4 style=\"margin-bottom: 10px; font-size: 1.2rem;\">
                    <i class=\"fas fa-calculator\"></i> <span data-i18n=\"average_bag\">Average bag</span>
                </h4>
                <p>
                    ";
        // line 153
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 153, $this->source); })()), "ventes_total", [], "any", false, false, false, 153) > 0)) {
            // line 154
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 154, $this->source); })()), "ca_total", [], "any", false, false, false, 154) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 154, $this->source); })()), "ventes_total", [], "any", false, false, false, 154)), 2, ",", " "), "html", null, true);
            yield " €
                    ";
        } else {
            // line 156
            yield "                        0 €
                    ";
        }
        // line 158
        yield "                </p>
            </div>

            <div class=\"summary-card\" style=\"
            background: linear-gradient(135deg, #43cea2, #185a9d);
            color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        \">
            <div class=\"icon-wrapper\" style=\"
                background: rgba(255,255,255,0.15);
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                margin: 0 auto 15px;
            \">
                <i class=\"fas fa-star fa-lg\"></i>
            </div>
            <h4 style=\"margin-bottom: 10px; font-size: 1.2rem;\">
                <i class=\"fas fa-trophy\"></i> <span data-i18n=\"best_category\">Best category</span>
            </h4>
            <p>";
        // line 185
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "meilleure_categorie", [], "any", true, true, false, 185) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 185, $this->source); })()), "meilleure_categorie", [], "any", false, false, false, 185)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 185, $this->source); })()), "meilleure_categorie", [], "any", false, false, false, 185), "html", null, true)) : ("N/A"));
        yield "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 192
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Couleurs modernes
            const colors = {
                primary: '#4361ee',
                secondary: '#3a0ca3',
                accent: '#f72585',
                gray: '#4a5568',
                lightGray: '#e2e8f0'
            };

            // Données des graphiques
            const statsMensuelles = ";
        // line 207
        yield json_encode((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 207, $this->source); })()));
        yield ";
            const ventesParCategorieParMois = ";
        // line 208
        yield json_encode((isset($context["ventesParCategorieParMois"]) || array_key_exists("ventesParCategorieParMois", $context) ? $context["ventesParCategorieParMois"] : (function () { throw new RuntimeError('Variable "ventesParCategorieParMois" does not exist.', 208, $this->source); })()));
        yield ";
            const ventesParArticle = ";
        // line 209
        yield json_encode((isset($context["ventesParArticle"]) || array_key_exists("ventesParArticle", $context) ? $context["ventesParArticle"] : (function () { throw new RuntimeError('Variable "ventesParArticle" does not exist.', 209, $this->source); })()));
        yield ";

            // Graphique CA mensuel
            new Chart(document.getElementById('salesChart'), {
                type: 'bar',
                data: {
                    labels: statsMensuelles.labels.length > 0 ? statsMensuelles.labels : ['Aucune donnée'],
                    datasets: [{
                        label: 'CA (€)',
                        data: statsMensuelles.chiffre_affaires.length > 0 ? statsMensuelles.chiffre_affaires : [0],
                        backgroundColor: colors.primary,
                        borderColor: colors.secondary,
                        borderWidth: 0,
                        borderRadius: 6
                    }]
                },
                options: getChartOptions('Chiffre d\\'affaires mensuel')
            });

            // Graphique tendances
            const categoryColors = [
                colors.primary,
                colors.accent,
                '#7209b7',
                '#3a86ff',
                colors.gray
            ];

            new Chart(document.getElementById('trendsChart'), {
                type: 'line',
                data: {
                    labels: ventesParCategorieParMois.labels.length > 0 ? ventesParCategorieParMois.labels : ['Aucune donnée'],
                    datasets: Object.entries(ventesParCategorieParMois.datasets || {}).map(([cat, data], index) => ({
                        label: cat,
                        data: data,
                        borderColor: categoryColors[index % categoryColors.length],
                        backgroundColor: 'transparent',
                        borderWidth: 2,
                        tension: 0.3,
                        pointBackgroundColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4
                    }))
                },
                options: getChartOptions('Ventes par catégorie')
            });

            // Graphique répartition
            const cheeseData = ventesParArticle && ventesParArticle.datasets
                ? Object.entries(ventesParArticle.datasets).map(([label, data]) => ({
                    label: label,
                    data: Array.isArray(data) ? data.reduce((a, b) => a + b, 0) : 0
                }))
                : [{ label: 'Aucune donnée', data: 1 }];

            new Chart(document.getElementById('cheeseChart'), {
                type: 'doughnut',
                data: {
                    labels: cheeseData.map(item => item.label),
                    datasets: [{
                        data: cheeseData.map(item => item.data),
                        backgroundColor: [
                            colors.primary,
                            colors.accent,
                            '#7209b7',
                            '#3a86ff',
                            colors.gray
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    ...getChartOptions('Répartition des ventes'),
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // Options communes des graphiques
            function getChartOptions(title) {
                return {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20
                            }
                        },
                        tooltip: {
                            backgroundColor: '#2d3748',
                            titleColor: '#fff',
                            bodyColor: '#e2e8f0',
                            borderColor: '#4a5568',
                            borderWidth: 1,
                            padding: 12,
                            cornerRadius: 8,
                            displayColors: true,
                            usePointStyle: true
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: colors.lightGray,
                                drawBorder: false
                            },
                            ticks: {
                                color: colors.gray
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                color: colors.gray
                            }
                        }
                    },
                    elements: {
                        line: {
                            fill: false
                        }
                    }
                };
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/index.html.twig";
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
        return array (  370 => 209,  366 => 208,  362 => 207,  343 => 192,  333 => 191,  320 => 185,  291 => 158,  287 => 156,  281 => 154,  279 => 153,  248 => 125,  217 => 97,  148 => 30,  137 => 28,  133 => 27,  117 => 14,  112 => 11,  102 => 10,  92 => 7,  87 => 6,  77 => 5,  60 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/baseAdmin.html.twig' %}


{% block title %}Dasboard{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/dashboard.css') }}\">
{% endblock %}

{% block content %}
    <div class=\"modern-dashboard\">
        <!-- Filtres modernes -->
        <div class=\"filter-card\">
            <form action=\"{{ path('app_dashboard') }}\" method=\"post\">
                <div class=\"filter-group\">
                    <label for=\"dateD\" data-i18n=\"period\">Période</label>
                    <div class=\"date-range\">
                        <input type=\"date\" name=\"dateD\" id=\"dateD\" required class=\"modern-input\">
                        <span class=\"date-separator\">—</span>
                        <input type=\"date\" name=\"dateF\" id=\"dateF\" required class=\"modern-input\">
                    </div>
                </div>

                <div class=\"filter-group\">
                    <label for=\"category\" data-i18n=\"category\">Catégorie</label>
                    <select name=\"category\" id=\"category\" required class=\"modern-select\">
                        {% for category in categories %}
                            <option value=\"{{ category.id }}\">{{ category.nameCategory }}</option>
                        {% endfor %}
                    </select>
                </div>

                <button type=\"submit\" class=\"modern-button\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                        <path d=\"M21 21L16.65 16.65\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    <span data-i18n=\"apply\">Appliquer</span>
                </button>
            </form>
        </div>

        <!-- Graphiques avec style moderne -->
        <div class=\"chart-grid\">
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 data-i18n=\"revenue\">Chiffre d'affaires</h3>
                    <span class=\"chart-badge\" data-i18n=\"monthly\">Mensuel</span>
                </div>
                <canvas id=\"salesChart\"></canvas>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 data-i18n=\"trends\">Tendances</h3>
                    <span class=\"chart-badge\" data-i18n=\"by_category\">Par catégorie</span>
                </div>
                <canvas id=\"trendsChart\"></canvas>
            </div>

            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <h3 data-i18n=\"distribution\">Répartition</h3>
                    <span class=\"chart-badge\" data-i18n=\"sales\">Ventes</span>
                </div>
                <canvas id=\"cheeseChart\"></canvas>
            </div>
        </div>

        <!-- Synthèse globale -->
        <div class=\"summary-section\">
            <div class=\"summary-card\" style=\"
                background: linear-gradient(135deg, #2c3e50, #4ca1af);
                color: #fff;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 6px 15px rgba(0,0,0,0.2);
                text-align: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            \">
                <div class=\"icon-wrapper\" style=\"
                background: rgba(255,255,255,0.15);
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                margin: 0 auto 15px;
                \">
                    <i class=\"fas fa-chart-line fa-lg\"></i>
                </div>
                <h4 style=\"margin-bottom: 10px; font-size: 1.2rem;\">
                    <i class=\"fas fa-chart-pie\"></i> <span data-i18n=\"total_turnover\">Total turnover</span>
                </h4>
                <p style=\"font-size: 1.3rem; font-weight: bold;\">
                    {{ stats.ca_total|number_format(0, ',', ' ') }} €
                </p>
            </div>

            <div class=\"summary-card\" style=\"
                background: linear-gradient(135deg, #ff7e5f, #feb47b);
                color: #fff;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 6px 15px rgba(0,0,0,0.2);
                text-align: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            \">
                <div class=\"icon-wrapper\" style=\"
                    background: rgba(255,255,255,0.15);
                    width: 50px;
                    height: 50px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    margin: 0 auto 15px;
                \">
                    <i class=\"fas fa-shopping-cart fa-lg\"></i>
                </div>
                <h4 style=\"margin-bottom: 10px; font-size: 1.2rem;\">
                    <i class=\"fas fa-tag\"></i> <span data-i18n=\"total_sales\">Total sales</span>
                </h4>
                <p>{{ stats.ventes_total }}</p>
            </div>

            <div class=\"summary-card\" style=\"
                background: linear-gradient(135deg, #8e2de2, #4a00e0);
                color: #fff;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 6px 15px rgba(0,0,0,0.2);
                text-align: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            \">
                <div class=\"icon-wrapper\" style=\"
                    background: rgba(255,255,255,0.15);
                    width: 50px;
                    height: 50px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    margin: 0 auto 15px;
                \">
                    <i class=\"fas fa-shopping-basket fa-lg\"></i>
                </div>
                <h4 style=\"margin-bottom: 10px; font-size: 1.2rem;\">
                    <i class=\"fas fa-calculator\"></i> <span data-i18n=\"average_bag\">Average bag</span>
                </h4>
                <p>
                    {% if stats.ventes_total > 0 %}
                        {{ (stats.ca_total / stats.ventes_total)|number_format(2, ',', ' ') }} €
                    {% else %}
                        0 €
                    {% endif %}
                </p>
            </div>

            <div class=\"summary-card\" style=\"
            background: linear-gradient(135deg, #43cea2, #185a9d);
            color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        \">
            <div class=\"icon-wrapper\" style=\"
                background: rgba(255,255,255,0.15);
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                margin: 0 auto 15px;
            \">
                <i class=\"fas fa-star fa-lg\"></i>
            </div>
            <h4 style=\"margin-bottom: 10px; font-size: 1.2rem;\">
                <i class=\"fas fa-trophy\"></i> <span data-i18n=\"best_category\">Best category</span>
            </h4>
            <p>{{ stats.meilleure_categorie ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Couleurs modernes
            const colors = {
                primary: '#4361ee',
                secondary: '#3a0ca3',
                accent: '#f72585',
                gray: '#4a5568',
                lightGray: '#e2e8f0'
            };

            // Données des graphiques
            const statsMensuelles = {{ stats|json_encode|raw }};
            const ventesParCategorieParMois = {{ ventesParCategorieParMois|json_encode|raw }};
            const ventesParArticle = {{ ventesParArticle|json_encode|raw }};

            // Graphique CA mensuel
            new Chart(document.getElementById('salesChart'), {
                type: 'bar',
                data: {
                    labels: statsMensuelles.labels.length > 0 ? statsMensuelles.labels : ['Aucune donnée'],
                    datasets: [{
                        label: 'CA (€)',
                        data: statsMensuelles.chiffre_affaires.length > 0 ? statsMensuelles.chiffre_affaires : [0],
                        backgroundColor: colors.primary,
                        borderColor: colors.secondary,
                        borderWidth: 0,
                        borderRadius: 6
                    }]
                },
                options: getChartOptions('Chiffre d\\'affaires mensuel')
            });

            // Graphique tendances
            const categoryColors = [
                colors.primary,
                colors.accent,
                '#7209b7',
                '#3a86ff',
                colors.gray
            ];

            new Chart(document.getElementById('trendsChart'), {
                type: 'line',
                data: {
                    labels: ventesParCategorieParMois.labels.length > 0 ? ventesParCategorieParMois.labels : ['Aucune donnée'],
                    datasets: Object.entries(ventesParCategorieParMois.datasets || {}).map(([cat, data], index) => ({
                        label: cat,
                        data: data,
                        borderColor: categoryColors[index % categoryColors.length],
                        backgroundColor: 'transparent',
                        borderWidth: 2,
                        tension: 0.3,
                        pointBackgroundColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4
                    }))
                },
                options: getChartOptions('Ventes par catégorie')
            });

            // Graphique répartition
            const cheeseData = ventesParArticle && ventesParArticle.datasets
                ? Object.entries(ventesParArticle.datasets).map(([label, data]) => ({
                    label: label,
                    data: Array.isArray(data) ? data.reduce((a, b) => a + b, 0) : 0
                }))
                : [{ label: 'Aucune donnée', data: 1 }];

            new Chart(document.getElementById('cheeseChart'), {
                type: 'doughnut',
                data: {
                    labels: cheeseData.map(item => item.label),
                    datasets: [{
                        data: cheeseData.map(item => item.data),
                        backgroundColor: [
                            colors.primary,
                            colors.accent,
                            '#7209b7',
                            '#3a86ff',
                            colors.gray
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    ...getChartOptions('Répartition des ventes'),
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // Options communes des graphiques
            function getChartOptions(title) {
                return {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20
                            }
                        },
                        tooltip: {
                            backgroundColor: '#2d3748',
                            titleColor: '#fff',
                            bodyColor: '#e2e8f0',
                            borderColor: '#4a5568',
                            borderWidth: 1,
                            padding: 12,
                            cornerRadius: 8,
                            displayColors: true,
                            usePointStyle: true
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: colors.lightGray,
                                drawBorder: false
                            },
                            ticks: {
                                color: colors.gray
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                color: colors.gray
                            }
                        }
                    },
                    elements: {
                        line: {
                            fill: false
                        }
                    }
                };
            }
        });
    </script>
{% endblock %}
", "admin/index.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/index.html.twig");
    }
}
