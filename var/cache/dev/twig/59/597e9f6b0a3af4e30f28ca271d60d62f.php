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

/* admin/objectifMensuel.html.twig */
class __TwigTemplate_180215aaafc919d2b10385532bd9d3dd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/objectifMensuel.html.twig"));

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

        yield "Suivi des Objectifs Mensuels";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/objectif.css"), "html", null, true);
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
        yield "<div class=\"modern-dashboard\">
    <!-- FILTRE DE PÉRIODE -->
    <div class=\"filter-card\">
        <form class=\"filter-form\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_mensuel");
        yield "\" method=\"post\">
            <div class=\"filter-group\">
                <label class=\"filter-label\" for=\"dateD\" data-i18n=\"period\">Période</label>
                <div class=\"date-range\">
                    <input type=\"date\" name=\"dateD\" id=\"dateD\" required class=\"modern-input\">
                    <span class=\"date-separator\">—</span>
                    <input type=\"date\" name=\"dateF\" id=\"dateF\" required class=\"modern-input\">
                </div>
            </div>
            <button type=\"submit\" class=\"modern-button\">
                <i class=\"fas fa-search\"></i> <span data-i18n=\"apply\">Appliquer</span>
            </button>
        </form>
    </div>

    ";
        // line 29
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 29, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "
    <!-- CARTES DE SYNTHÈSE -->
    <div class=\"summary-cards\">
        <div class=\"summary-card ca-card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\" data-i18n=\"revenue\">Chiffre d'affaires</h3>
                <div class=\"card-icon\">
                    <i class=\"fas fa-euro-sign\"></i>
                </div>
            </div>
            <div class=\"summary-content\">
                <div class=\"summary-item\">
                    <span class=\"summary-label\" data-i18n=\"average_target\">Objectif moyen:</span>
                    <span class=\"summary-value\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 43, $this->source); })()), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 43, $this->source); })()), "target_ca", [], "any", false, false, false, 43); }), function ($__sum__, $__ca__) use ($context, $macros) { $context["sum"] = $__sum__; $context["ca"] = $__ca__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 43, $this->source); })()) + (isset($context["ca"]) || array_key_exists("ca", $context) ? $context["ca"] : (function () { throw new RuntimeError('Variable "ca" does not exist.', 43, $this->source); })())); }) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 43, $this->source); })()))), 2, ",", " "), "html", null, true);
            yield " €</span>
                </div>
                <div class=\"summary-item\">
                    <span class=\"summary-label\" data-i18n=\"average_achievement\">Réalisation moyenne:</span>
                    <span class=\"summary-value\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 47, $this->source); })()), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 47, $this->source); })()), "ca_realise", [], "any", false, false, false, 47); }), function ($__sum__, $__ca__) use ($context, $macros) { $context["sum"] = $__sum__; $context["ca"] = $__ca__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 47, $this->source); })()) + (isset($context["ca"]) || array_key_exists("ca", $context) ? $context["ca"] : (function () { throw new RuntimeError('Variable "ca" does not exist.', 47, $this->source); })())); }) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 47, $this->source); })()))), 2, ",", " "), "html", null, true);
            yield " €</span>
                </div>
            </div>
        </div>

        <div class=\"summary-card ventes-card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\" data-i18n=\"sales\">Ventes</h3>
                <div class=\"card-icon\">
                    <i class=\"fas fa-shopping-cart\"></i>
                </div>
            </div>
            <div class=\"summary-content\">
                <div class=\"summary-item\">
                    <span class=\"summary-label\" data-i18n=\"average_target\">Objectif moyen:</span>
                    <span class=\"summary-value\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 62, $this->source); })()), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 62, $this->source); })()), "target_ventes", [], "any", false, false, false, 62); }), function ($__sum__, $__v__) use ($context, $macros) { $context["sum"] = $__sum__; $context["v"] = $__v__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 62, $this->source); })()) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 62, $this->source); })())); }) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 62, $this->source); })()))), 0, ",", " "), "html", null, true);
            yield "</span>
                </div>
                <div class=\"summary-item\">
                    <span class=\"summary-label\" data-i18n=\"average_achievement\">Réalisation moyenne:</span>
                    <span class=\"summary-value\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 66, $this->source); })()), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 66, $this->source); })()), "ventes_realisees", [], "any", false, false, false, 66); }), function ($__sum__, $__v__) use ($context, $macros) { $context["sum"] = $__sum__; $context["v"] = $__v__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 66, $this->source); })()) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 66, $this->source); })())); }) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 66, $this->source); })()))), 0, ",", " "), "html", null, true);
            yield "</span>
                </div>
            </div>
        </div>
    </div>

    <!-- GRAPHIQUES -->
    <div class=\"charts-section\">
        <div class=\"chart-card\">
            <div class=\"chart-header\">
                <h5 class=\"chart-title\" data-i18n=\"revenue_evolution\">Évolution du chiffre d'affaires</h5>
            </div>
            <div class=\"chart-body\">
                <canvas id=\"caChart\" height=\"250\"></canvas>
            </div>
        </div>
        <div class=\"chart-card\">
            <div class=\"chart-header\">
                <h5 class=\"chart-title\" data-i18n=\"sales_evolution\">Évolution des ventes</h5>
            </div>
            <div class=\"chart-body\">
                <canvas id=\"ventesChart\" height=\"250\"></canvas>
            </div>
        </div>
    </div>

    <!-- TABLEAU CHIFFRE D'AFFAIRES -->
    <div class=\"table-section\">
        <div class=\"table-header\">
            <h3 class=\"table-title\"><i class=\"fas fa-euro-sign\"></i> <span data-i18n=\"monthly_detail_revenue\">Détail mensuel - Chiffre d'Affaires</span></h3>
        </div>
        <div class=\"table-container\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th data-i18n=\"month_year\">Mois/Année</th>
                        <th data-i18n=\"target_revenue\">Objectif CA (€)</th>
                        <th data-i18n=\"achieved_revenue\">CA Réalisé (€)</th>
                        <th data-i18n=\"projected_revenue\">Projection CA (€)</th>
                        <th data-i18n=\"revenue_gap\">Écart CA (€)</th>
                        <th data-i18n=\"revenue_achievement\">Réalisation CA</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 111
                yield "                        ";
                $context["taux_ca"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "target_ca", [], "any", false, false, false, 111) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "ca_realise", [], "any", false, false, false, 111) / CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "target_ca", [], "any", false, false, false, 111)) * 100)) : (0));
                // line 112
                yield "                        <tr>
                            <td class=\"period-cell\">";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "mois", [], "any", false, false, false, 113) . "/") . CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "annee", [], "any", false, false, false, 113)), "html", null, true);
                yield "</td>
                            <td class=\"target-cell\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "target_ca", [], "any", false, false, false, 114), 2, ",", " "), "html", null, true);
                yield "</td>
                            <td class=\"actual-cell\">";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "ca_realise", [], "any", false, false, false, 115), 2, ",", " "), "html", null, true);
                yield "</td>
                            <td class=\"projection-cell\">";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "projection_ca", [], "any", false, false, false, 116), 2, ",", " "), "html", null, true);
                yield "</td>
                            <td class=\"";
                // line 117
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "ecart_ca", [], "any", false, false, false, 117) < 0)) {
                    yield "negative-gap";
                } else {
                    yield "positive-gap";
                }
                yield "\">
                                ";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "ecart_ca", [], "any", false, false, false, 118), 2, ",", " "), "html", null, true);
                yield "
                            </td>
                            <td>
                                <div class=\"progress-container\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill ";
                // line 123
                if (((isset($context["taux_ca"]) || array_key_exists("taux_ca", $context) ? $context["taux_ca"] : (function () { throw new RuntimeError('Variable "taux_ca" does not exist.', 123, $this->source); })()) >= 100)) {
                    yield "progress-success";
                } else {
                    yield "progress-warning";
                }
                yield "\" style=\"width: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((isset($context["taux_ca"]) || array_key_exists("taux_ca", $context) ? $context["taux_ca"] : (function () { throw new RuntimeError('Variable "taux_ca" does not exist.', 123, $this->source); })()), 100), "html", null, true);
                yield "%\"></div>
                                    </div>
                                    <span class=\"progress-value\">";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["taux_ca"]) || array_key_exists("taux_ca", $context) ? $context["taux_ca"] : (function () { throw new RuntimeError('Variable "taux_ca" does not exist.', 125, $this->source); })()), 1, ",", " "), "html", null, true);
                yield "%</span>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['goal'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "                </tbody>
            </table>
        </div>
    </div>

    <!-- TABLEAU VENTES -->
    <div class=\"table-section\">
        <div class=\"table-header\">
            <h3 class=\"table-title\"><i class=\"fas fa-shopping-cart\"></i> <span data-i18n=\"monthly_detail_sales\">Détail mensuel - Ventes</span></h3>
        </div>
        <div class=\"table-container\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th data-i18n=\"month_year\">Mois/Année</th>
                        <th data-i18n=\"target_sales\">Objectif Ventes</th>
                        <th data-i18n=\"achieved_sales\">Ventes Réalisées</th>
                        <th data-i18n=\"projected_sales\">Projection Ventes</th>
                        <th data-i18n=\"sales_gap\">Écart Ventes</th>
                        <th data-i18n=\"sales_achievement\">Réalisation Ventes</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 153, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 154
                yield "                        ";
                $context["taux_ventes"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "target_ventes", [], "any", false, false, false, 154) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "ventes_realisees", [], "any", false, false, false, 154) / CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "target_ventes", [], "any", false, false, false, 154)) * 100)) : (0));
                // line 155
                yield "                        <tr>
                            <td class=\"period-cell\">";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "mois", [], "any", false, false, false, 156) . "/") . CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "annee", [], "any", false, false, false, 156)), "html", null, true);
                yield "</td>
                            <td class=\"target-cell\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "target_ventes", [], "any", false, false, false, 157), "html", null, true);
                yield "</td>
                            <td class=\"actual-cell\">";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "ventes_realisees", [], "any", false, false, false, 158), "html", null, true);
                yield "</td>
                            <td class=\"projection-cell\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "projection_ventes", [], "any", false, false, false, 159), 0, ",", " "), "html", null, true);
                yield "</td>
                            <td class=\"";
                // line 160
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "ecart_ventes", [], "any", false, false, false, 160) < 0)) {
                    yield "negative-gap";
                } else {
                    yield "positive-gap";
                }
                yield "\">
                                ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "ecart_ventes", [], "any", false, false, false, 161), "html", null, true);
                yield "
                            </td>
                            <td>
                                <div class=\"progress-container\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill ";
                // line 166
                if (((isset($context["taux_ventes"]) || array_key_exists("taux_ventes", $context) ? $context["taux_ventes"] : (function () { throw new RuntimeError('Variable "taux_ventes" does not exist.', 166, $this->source); })()) >= 100)) {
                    yield "progress-success";
                } else {
                    yield "progress-warning";
                }
                yield "\" style=\"width: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((isset($context["taux_ventes"]) || array_key_exists("taux_ventes", $context) ? $context["taux_ventes"] : (function () { throw new RuntimeError('Variable "taux_ventes" does not exist.', 166, $this->source); })()), 100), "html", null, true);
                yield "%\"></div>
                                    </div>
                                    <span class=\"progress-value\">";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["taux_ventes"]) || array_key_exists("taux_ventes", $context) ? $context["taux_ventes"] : (function () { throw new RuntimeError('Variable "taux_ventes" does not exist.', 168, $this->source); })()), 1, ",", " "), "html", null, true);
                yield "%</span>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['goal'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "                </tbody>
            </table>
        </div>
    </div>

    ";
        } else {
            // line 179
            yield "    <div class=\"alert\">
        <i class=\"fas fa-info-circle\"></i> <span data-i18n=\"no_goals_found\">Aucun objectif trouvé pour cette période.</span>
    </div>
    ";
        }
        // line 183
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 188
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    ";
        // line 192
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 192, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "        const labels = ";
            yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 193, $this->source); })()), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 193, $this->source); })()), "mois", [], "any", false, false, false, 193) . "/") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 193, $this->source); })()), "annee", [], "any", false, false, false, 193)); }));
            yield ";
        const targetCA = ";
            // line 194
            yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 194, $this->source); })()), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 194, $this->source); })()), "target_ca", [], "any", false, false, false, 194); }));
            yield ";
        const realizedCA = ";
            // line 195
            yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 195, $this->source); })()), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 195, $this->source); })()), "ca_realise", [], "any", false, false, false, 195); }));
            yield ";
        const targetVentes = ";
            // line 196
            yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 196, $this->source); })()), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 196, $this->source); })()), "target_ventes", [], "any", false, false, false, 196); }));
            yield ";
        const realizedVentes = ";
            // line 197
            yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyGoals"]) || array_key_exists("monthlyGoals", $context) ? $context["monthlyGoals"] : (function () { throw new RuntimeError('Variable "monthlyGoals" does not exist.', 197, $this->source); })()), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 197, $this->source); })()), "ventes_realisees", [], "any", false, false, false, 197); }));
            yield ";

        // Graphique CA
        new Chart(document.getElementById('caChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    { label: 'Objectif CA', data: targetCA, borderColor: '#ff6384', backgroundColor: 'rgba(255, 99, 132, 0.2)', fill: true, tension: 0.3 },
                    { label: 'CA Réalisé', data: realizedCA, borderColor: '#36a2eb', backgroundColor: 'rgba(54, 162, 235, 0.2)', fill: true, tension: 0.3 }
                ]
            },
            options: { responsive: true, scales: { y: { beginAtZero: true, ticks: { callback: v => v.toLocaleString('fr-FR') + ' €' } } } }
        });

        // Graphique Ventes
        new Chart(document.getElementById('ventesChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    { label: 'Objectif Ventes', data: targetVentes, backgroundColor: 'rgba(255,159,64,0.7)' },
                    { label: 'Ventes Réalisées', data: realizedVentes, backgroundColor: 'rgba(75,192,192,0.7)' }
                ]
            },
            options: { responsive: true, scales: { y: { beginAtZero: true } } }
        });
    ";
        }
        // line 225
        yield "});
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
        return "admin/objectifMensuel.html.twig";
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
        return array (  475 => 225,  444 => 197,  440 => 196,  436 => 195,  432 => 194,  427 => 193,  425 => 192,  418 => 188,  408 => 187,  398 => 183,  392 => 179,  384 => 173,  373 => 168,  362 => 166,  354 => 161,  346 => 160,  342 => 159,  338 => 158,  334 => 157,  330 => 156,  327 => 155,  324 => 154,  320 => 153,  295 => 130,  284 => 125,  273 => 123,  265 => 118,  257 => 117,  253 => 116,  249 => 115,  245 => 114,  241 => 113,  238 => 112,  235 => 111,  231 => 110,  184 => 66,  177 => 62,  159 => 47,  152 => 43,  137 => 30,  135 => 29,  117 => 14,  112 => 11,  102 => 10,  92 => 7,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/baseAdmin.html.twig' %}

{% block title %}Suivi des Objectifs Mensuels{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/objectif.css') }}\">
{% endblock %}

{% block content %}
<div class=\"modern-dashboard\">
    <!-- FILTRE DE PÉRIODE -->
    <div class=\"filter-card\">
        <form class=\"filter-form\" action=\"{{ path('app_objectif_mensuel') }}\" method=\"post\">
            <div class=\"filter-group\">
                <label class=\"filter-label\" for=\"dateD\" data-i18n=\"period\">Période</label>
                <div class=\"date-range\">
                    <input type=\"date\" name=\"dateD\" id=\"dateD\" required class=\"modern-input\">
                    <span class=\"date-separator\">—</span>
                    <input type=\"date\" name=\"dateF\" id=\"dateF\" required class=\"modern-input\">
                </div>
            </div>
            <button type=\"submit\" class=\"modern-button\">
                <i class=\"fas fa-search\"></i> <span data-i18n=\"apply\">Appliquer</span>
            </button>
        </form>
    </div>

    {% if monthlyGoals is not empty %}

    <!-- CARTES DE SYNTHÈSE -->
    <div class=\"summary-cards\">
        <div class=\"summary-card ca-card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\" data-i18n=\"revenue\">Chiffre d'affaires</h3>
                <div class=\"card-icon\">
                    <i class=\"fas fa-euro-sign\"></i>
                </div>
            </div>
            <div class=\"summary-content\">
                <div class=\"summary-item\">
                    <span class=\"summary-label\" data-i18n=\"average_target\">Objectif moyen:</span>
                    <span class=\"summary-value\">{{ (monthlyGoals|map(g => g.target_ca)|reduce((sum, ca) => sum + ca) / monthlyGoals|length)|number_format(2, ',', ' ') }} €</span>
                </div>
                <div class=\"summary-item\">
                    <span class=\"summary-label\" data-i18n=\"average_achievement\">Réalisation moyenne:</span>
                    <span class=\"summary-value\">{{ (monthlyGoals|map(g => g.ca_realise)|reduce((sum, ca) => sum + ca) / monthlyGoals|length)|number_format(2, ',', ' ') }} €</span>
                </div>
            </div>
        </div>

        <div class=\"summary-card ventes-card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\" data-i18n=\"sales\">Ventes</h3>
                <div class=\"card-icon\">
                    <i class=\"fas fa-shopping-cart\"></i>
                </div>
            </div>
            <div class=\"summary-content\">
                <div class=\"summary-item\">
                    <span class=\"summary-label\" data-i18n=\"average_target\">Objectif moyen:</span>
                    <span class=\"summary-value\">{{ (monthlyGoals|map(g => g.target_ventes)|reduce((sum, v) => sum + v) / monthlyGoals|length)|number_format(0, ',', ' ') }}</span>
                </div>
                <div class=\"summary-item\">
                    <span class=\"summary-label\" data-i18n=\"average_achievement\">Réalisation moyenne:</span>
                    <span class=\"summary-value\">{{ (monthlyGoals|map(g => g.ventes_realisees)|reduce((sum, v) => sum + v) / monthlyGoals|length)|number_format(0, ',', ' ') }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- GRAPHIQUES -->
    <div class=\"charts-section\">
        <div class=\"chart-card\">
            <div class=\"chart-header\">
                <h5 class=\"chart-title\" data-i18n=\"revenue_evolution\">Évolution du chiffre d'affaires</h5>
            </div>
            <div class=\"chart-body\">
                <canvas id=\"caChart\" height=\"250\"></canvas>
            </div>
        </div>
        <div class=\"chart-card\">
            <div class=\"chart-header\">
                <h5 class=\"chart-title\" data-i18n=\"sales_evolution\">Évolution des ventes</h5>
            </div>
            <div class=\"chart-body\">
                <canvas id=\"ventesChart\" height=\"250\"></canvas>
            </div>
        </div>
    </div>

    <!-- TABLEAU CHIFFRE D'AFFAIRES -->
    <div class=\"table-section\">
        <div class=\"table-header\">
            <h3 class=\"table-title\"><i class=\"fas fa-euro-sign\"></i> <span data-i18n=\"monthly_detail_revenue\">Détail mensuel - Chiffre d'Affaires</span></h3>
        </div>
        <div class=\"table-container\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th data-i18n=\"month_year\">Mois/Année</th>
                        <th data-i18n=\"target_revenue\">Objectif CA (€)</th>
                        <th data-i18n=\"achieved_revenue\">CA Réalisé (€)</th>
                        <th data-i18n=\"projected_revenue\">Projection CA (€)</th>
                        <th data-i18n=\"revenue_gap\">Écart CA (€)</th>
                        <th data-i18n=\"revenue_achievement\">Réalisation CA</th>
                    </tr>
                </thead>
                <tbody>
                    {% for goal in monthlyGoals %}
                        {% set taux_ca = (goal.target_ca > 0) ? (goal.ca_realise / goal.target_ca * 100) : 0 %}
                        <tr>
                            <td class=\"period-cell\">{{ goal.mois ~ '/' ~ goal.annee }}</td>
                            <td class=\"target-cell\">{{ goal.target_ca|number_format(2, ',', ' ') }}</td>
                            <td class=\"actual-cell\">{{ goal.ca_realise|number_format(2, ',', ' ') }}</td>
                            <td class=\"projection-cell\">{{ goal.projection_ca|number_format(2, ',', ' ') }}</td>
                            <td class=\"{% if goal.ecart_ca < 0 %}negative-gap{% else %}positive-gap{% endif %}\">
                                {{ goal.ecart_ca|number_format(2, ',', ' ') }}
                            </td>
                            <td>
                                <div class=\"progress-container\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill {% if taux_ca >= 100 %}progress-success{% else %}progress-warning{% endif %}\" style=\"width: {{ min(taux_ca, 100) }}%\"></div>
                                    </div>
                                    <span class=\"progress-value\">{{ taux_ca|number_format(1, ',', ' ') }}%</span>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <!-- TABLEAU VENTES -->
    <div class=\"table-section\">
        <div class=\"table-header\">
            <h3 class=\"table-title\"><i class=\"fas fa-shopping-cart\"></i> <span data-i18n=\"monthly_detail_sales\">Détail mensuel - Ventes</span></h3>
        </div>
        <div class=\"table-container\">
            <table class=\"data-table\">
                <thead>
                    <tr>
                        <th data-i18n=\"month_year\">Mois/Année</th>
                        <th data-i18n=\"target_sales\">Objectif Ventes</th>
                        <th data-i18n=\"achieved_sales\">Ventes Réalisées</th>
                        <th data-i18n=\"projected_sales\">Projection Ventes</th>
                        <th data-i18n=\"sales_gap\">Écart Ventes</th>
                        <th data-i18n=\"sales_achievement\">Réalisation Ventes</th>
                    </tr>
                </thead>
                <tbody>
                    {% for goal in monthlyGoals %}
                        {% set taux_ventes = (goal.target_ventes > 0) ? (goal.ventes_realisees / goal.target_ventes * 100) : 0 %}
                        <tr>
                            <td class=\"period-cell\">{{ goal.mois ~ '/' ~ goal.annee }}</td>
                            <td class=\"target-cell\">{{ goal.target_ventes }}</td>
                            <td class=\"actual-cell\">{{ goal.ventes_realisees }}</td>
                            <td class=\"projection-cell\">{{ goal.projection_ventes|number_format(0, ',', ' ') }}</td>
                            <td class=\"{% if goal.ecart_ventes < 0 %}negative-gap{% else %}positive-gap{% endif %}\">
                                {{ goal.ecart_ventes }}
                            </td>
                            <td>
                                <div class=\"progress-container\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill {% if taux_ventes >= 100 %}progress-success{% else %}progress-warning{% endif %}\" style=\"width: {{ min(taux_ventes, 100) }}%\"></div>
                                    </div>
                                    <span class=\"progress-value\">{{ taux_ventes|number_format(1, ',', ' ') }}%</span>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    {% else %}
    <div class=\"alert\">
        <i class=\"fas fa-info-circle\"></i> <span data-i18n=\"no_goals_found\">Aucun objectif trouvé pour cette période.</span>
    </div>
    {% endif %}

</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    {% if monthlyGoals is not empty %}
        const labels = {{ monthlyGoals|map(g => g.mois ~ '/' ~ g.annee)|json_encode|raw }};
        const targetCA = {{ monthlyGoals|map(g => g.target_ca)|json_encode|raw }};
        const realizedCA = {{ monthlyGoals|map(g => g.ca_realise)|json_encode|raw }};
        const targetVentes = {{ monthlyGoals|map(g => g.target_ventes)|json_encode|raw }};
        const realizedVentes = {{ monthlyGoals|map(g => g.ventes_realisees)|json_encode|raw }};

        // Graphique CA
        new Chart(document.getElementById('caChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    { label: 'Objectif CA', data: targetCA, borderColor: '#ff6384', backgroundColor: 'rgba(255, 99, 132, 0.2)', fill: true, tension: 0.3 },
                    { label: 'CA Réalisé', data: realizedCA, borderColor: '#36a2eb', backgroundColor: 'rgba(54, 162, 235, 0.2)', fill: true, tension: 0.3 }
                ]
            },
            options: { responsive: true, scales: { y: { beginAtZero: true, ticks: { callback: v => v.toLocaleString('fr-FR') + ' €' } } } }
        });

        // Graphique Ventes
        new Chart(document.getElementById('ventesChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    { label: 'Objectif Ventes', data: targetVentes, backgroundColor: 'rgba(255,159,64,0.7)' },
                    { label: 'Ventes Réalisées', data: realizedVentes, backgroundColor: 'rgba(75,192,192,0.7)' }
                ]
            },
            options: { responsive: true, scales: { y: { beginAtZero: true } } }
        });
    {% endif %}
});
</script>
{% endblock %}
", "admin/objectifMensuel.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/objectifMensuel.html.twig");
    }
}
