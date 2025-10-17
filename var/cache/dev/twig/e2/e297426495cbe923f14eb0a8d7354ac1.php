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

/* admin/stock.html.twig */
class __TwigTemplate_1eee73ab3228c23d6e3f38291f8497c5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock.html.twig"));

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

        yield "Suivi du Stock";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stock.css"), "html", null, true);
        yield "\">
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        yield "    <div class=\"modern-dashboard\">
        <!-- Sidebar avec boutons de sélection -->
        <div class=\"dashboard-sidebar\">
            <div class=\"button-group\">
                <button id=\"showMovements\" class=\"toggle-btn active\">
                    <i class=\"fas fa-exchange-alt\"></i> <span data-i18n=\"stock_movements\">Mouvements de stock</span>
                </button>
                <button id=\"showCurrent\" class=\"toggle-btn inactive\">
                    <i class=\"fas fa-boxes\"></i> <span data-i18n=\"current_stock\">Stock actuel</span>
                </button>
                <button id=\"showImport\" class=\"toggle-btn inactive\">
                    <i class=\"fas fa-download\"></i> <span data-i18n=\"import_new_stock\">Importer de nouveaux stock</span>
                </button>
                <button id=\"showExport\" class=\"toggle-btn inactive\">
                    <i class=\"fas fa-upload\"></i> <span data-i18n=\"export_new_stock\">Exporter de nouveaux stock</span>
                </button>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class=\"dashboard-content\">
            <div id=\"filterSection\" class=\"filter-card\">
                <form method=\"post\" class=\"filter-form\">
                    <div class=\"filter-group\">
                        <label for=\"dateD\" data-i18n=\"period\">Période</label>
                        <div class=\"date-range\">
                            <input type=\"date\" name=\"dateD\" id=\"dateD\" required class=\"modern-input\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateD"]) || array_key_exists("dateD", $context) ? $context["dateD"] : (function () { throw new RuntimeError('Variable "dateD" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\">
                            <span class=\"date-separator\">—</span>
                            <input type=\"date\" name=\"dateF\" id=\"dateF\" required class=\"modern-input\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateF"]) || array_key_exists("dateF", $context) ? $context["dateF"] : (function () { throw new RuntimeError('Variable "dateF" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
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

            <!-- Mouvements de stock -->
            <div id=\"movementsSection\" class=\"stock-section\">
                <div class=\"section-header\">
                    <h3 class=\"section-title\">
                        <i class=\"fas fa-exchange-alt\"></i> <span data-i18n=\"movements_between\">Mouvements entre</span> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 58, $this->source); })()), "d/m/Y"), "html", null, true);
        yield " <span data-i18n=\"and\">et</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 58, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "
                    </h3>
                    <div class=\"section-actions\">
                        <span class=\"pagination-info\">
                            ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stockMovements"]) || array_key_exists("stockMovements", $context) ? $context["stockMovements"] : (function () { throw new RuntimeError('Variable "stockMovements" does not exist.', 62, $this->source); })())), "html", null, true);
        yield " <span data-i18n=\"of\">sur</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockMovements"]) || array_key_exists("stockMovements", $context) ? $context["stockMovements"] : (function () { throw new RuntimeError('Variable "stockMovements" does not exist.', 62, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 62), "html", null, true);
        yield " <span data-i18n=\"movements\">mouvements</span>
                        </span>
                    </div>
                </div>
                <div class=\"section-body\">
                    <div class=\"table-container\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th data-i18n=\"article\">Article</th>
                                    <th data-i18n=\"size\">Taille</th>
                                    <th data-i18n=\"color\">Couleur</th>
                                    <th data-i18n=\"entries\">Entrées</th>
                                    <th data-i18n=\"exits\">Sorties</th>
                                    <th data-i18n=\"date\">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stockMovements"]) || array_key_exists("stockMovements", $context) ? $context["stockMovements"] : (function () { throw new RuntimeError('Variable "stockMovements" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
            // line 81
            yield "                                    <tr>
                                        <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "name_item", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                                        <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "value_size", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                                        <td style=\"text-align:center;\">
                                            ";
            // line 85
            $context["colorMap"] = ["rouge" => "#e74c3c", "red" => "#e74c3c", "vert" => "#2ecc71", "green" => "#2ecc71", "bleu" => "#3498db", "blue" => "#3498db", "noir" => "#000000", "black" => "#000000", "blanc" => "#ffffff", "white" => "#ffffff", "jaune" => "#f1c40f", "yellow" => "#f1c40f", "orange" => "#e67e22", "rose" => "#ff69b4", "violet" => "#8e44ad", "gris" => "#7f8c8d", "marron" => "#8B4513", "brown" => "#8B4513"];
            // line 98
            yield "                                            ";
            $context["cname"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "name_color", [], "any", true, true, false, 98) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "name_color", [], "any", false, false, false, 98)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "name_color", [], "any", false, false, false, 98)) : (""))));
            // line 99
            yield "                                            ";
            $context["hex"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["colorMap"] ?? null), (isset($context["cname"]) || array_key_exists("cname", $context) ? $context["cname"] : (function () { throw new RuntimeError('Variable "cname" does not exist.', 99, $this->source); })()), [], "array", true, true, false, 99)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["colorMap"]) || array_key_exists("colorMap", $context) ? $context["colorMap"] : (function () { throw new RuntimeError('Variable "colorMap" does not exist.', 99, $this->source); })()), (isset($context["cname"]) || array_key_exists("cname", $context) ? $context["cname"] : (function () { throw new RuntimeError('Variable "cname" does not exist.', 99, $this->source); })()), [], "array", false, false, false, 99)) : ("#cccccc"));
            // line 100
            yield "                                            ";
            $context["isWhite"] = ((isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 100, $this->source); })()) == "#ffffff");
            // line 101
            yield "                                            ";
            $context["bg"] = (((($tmp = (isset($context["isWhite"]) || array_key_exists("isWhite", $context) ? $context["isWhite"] : (function () { throw new RuntimeError('Variable "isWhite" does not exist.', 101, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("repeating-linear-gradient(45deg,#f1f1f1 0 4px,#dddddd 4px 8px)") : (            // line 103
(isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 103, $this->source); })())));
            // line 104
            yield "                                            <span title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "name_color", [], "any", false, false, false, 104), "html", null, true);
            yield "\"
                                                  style=\"display:inline-block;width:18px;height:18px;border-radius:6px;
                                                         border:1px solid #bfbfbf;background: ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg"]) || array_key_exists("bg", $context) ? $context["bg"] : (function () { throw new RuntimeError('Variable "bg" does not exist.', 106, $this->source); })()), "html", null, true);
            yield ";
                                                         box-shadow: 0 0 0 2px rgba(0,0,0,0.04);\"></span>
                                        </td>
                                        <td class=\"";
            // line 109
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "in_item", [], "any", false, false, false, 109) > 0)) {
                yield "positive";
            }
            yield "\">
                                            ";
            // line 110
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "in_item", [], "any", true, true, false, 110) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "in_item", [], "any", false, false, false, 110)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "in_item", [], "any", false, false, false, 110), "html", null, true)) : (0));
            yield "
                                        </td>
                                        <td class=\"";
            // line 112
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "out_item", [], "any", false, false, false, 112) > 0)) {
                yield "negative";
            }
            yield "\">
                                            ";
            // line 113
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "out_item", [], "any", true, true, false, 113) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "out_item", [], "any", false, false, false, 113)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "out_item", [], "any", false, false, false, 113), "html", null, true)) : (0));
            yield "
                                        </td>
                                        <td>";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "date_move", [], "any", false, false, false, 115), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 117
        if (!$context['_iterated']) {
            // line 118
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center\" data-i18n=\"no_movements_recorded\">Aucun mouvement enregistré</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination mouvements -->
                    <div id=\"movements-pagination\" class=\"pagination-container\">
                        <div class=\"pagination-info\">
                            <span data-i18n=\"page\">Page</span> ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockMovements"]) || array_key_exists("stockMovements", $context) ? $context["stockMovements"] : (function () { throw new RuntimeError('Variable "stockMovements" does not exist.', 129, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 129), "html", null, true);
        yield " <span data-i18n=\"of\">sur</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockMovements"]) || array_key_exists("stockMovements", $context) ? $context["stockMovements"] : (function () { throw new RuntimeError('Variable "stockMovements" does not exist.', 129, $this->source); })()), "getPageCount", [], "method", false, false, false, 129), "html", null, true);
        yield "
                            • ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockMovements"]) || array_key_exists("stockMovements", $context) ? $context["stockMovements"] : (function () { throw new RuntimeError('Variable "stockMovements" does not exist.', 130, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 130), "html", null, true);
        yield " <span data-i18n=\"movements\">mouvements</span>
                        </div>
                        <div class=\"pagination\">
                            ";
        // line 133
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["stockMovements"]) || array_key_exists("stockMovements", $context) ? $context["stockMovements"] : (function () { throw new RuntimeError('Variable "stockMovements" does not exist.', 133, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["pageParameterName" => "movements_page", "sortFieldParameterName" => "movements_sort", "sortDirectionParameterName" => "movements_direction"]);
        // line 137
        yield "
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stock actuel -->
            <div id=\"currentSection\" class=\"stock-section hidden-section\">
                <div class=\"section-header\">
                    <h3 class=\"section-title\">
                        <i class=\"fas fa-boxes\"></i> <span data-i18n=\"current_stock\">Stock actuel</span>
                    </h3>
                    <div class=\"section-actions\">
                        <span class=\"pagination-info\">
                            ";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["currentStock"]) || array_key_exists("currentStock", $context) ? $context["currentStock"] : (function () { throw new RuntimeError('Variable "currentStock" does not exist.', 151, $this->source); })())), "html", null, true);
        yield " <span data-i18n=\"of\">sur</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentStock"]) || array_key_exists("currentStock", $context) ? $context["currentStock"] : (function () { throw new RuntimeError('Variable "currentStock" does not exist.', 151, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 151), "html", null, true);
        yield " <span data-i18n=\"articles\">articles</span>
                        </span>
                    </div>
                </div>
                <div class=\"section-body\">
                    <div class=\"table-container\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th data-i18n=\"selection\">Sélection</th>
                                    <th data-i18n=\"article\">Article</th>
                                    <th data-i18n=\"size\">Taille</th>
                                    <th data-i18n=\"color\">Couleur</th>
                                    <th data-i18n=\"available_stock\">Stock disponible</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["currentStock"]) || array_key_exists("currentStock", $context) ? $context["currentStock"] : (function () { throw new RuntimeError('Variable "currentStock" does not exist.', 168, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 169
            yield "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" class=\"check-demand\" data-id=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "itemsizecolorid", [], "any", false, false, false, 171), "html", null, true);
            yield "\" />
                                            <input type=\"number\" class=\"qty-input hidden\" min=\"1\" value=\"10\" />
                                        </td>
                                        <td>";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "itemname", [], "any", false, false, false, 174), "html", null, true);
            yield "</td>
                                        <td>";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "valuesize", [], "any", false, false, false, 175), "html", null, true);
            yield "</td>
                                        <td style=\"text-align:center;\">
                                            ";
            // line 177
            $context["colorMap"] = ["rouge" => "#e74c3c", "red" => "#e74c3c", "vert" => "#2ecc71", "green" => "#2ecc71", "bleu" => "#3498db", "blue" => "#3498db", "noir" => "#000000", "black" => "#000000", "blanc" => "#ffffff", "white" => "#ffffff", "jaune" => "#f1c40f", "yellow" => "#f1c40f", "orange" => "#e67e22", "rose" => "#ff69b4", "violet" => "#8e44ad", "gris" => "#7f8c8d", "marron" => "#8B4513", "brown" => "#8B4513"];
            // line 190
            yield "                                            ";
            $context["cname"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "colorname", [], "any", true, true, false, 190) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "colorname", [], "any", false, false, false, 190)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "colorname", [], "any", false, false, false, 190)) : (""))));
            // line 191
            yield "                                            ";
            $context["hex"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["colorMap"] ?? null), (isset($context["cname"]) || array_key_exists("cname", $context) ? $context["cname"] : (function () { throw new RuntimeError('Variable "cname" does not exist.', 191, $this->source); })()), [], "array", true, true, false, 191)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["colorMap"]) || array_key_exists("colorMap", $context) ? $context["colorMap"] : (function () { throw new RuntimeError('Variable "colorMap" does not exist.', 191, $this->source); })()), (isset($context["cname"]) || array_key_exists("cname", $context) ? $context["cname"] : (function () { throw new RuntimeError('Variable "cname" does not exist.', 191, $this->source); })()), [], "array", false, false, false, 191)) : ("#cccccc"));
            // line 192
            yield "                                            ";
            $context["isWhite"] = ((isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 192, $this->source); })()) == "#ffffff");
            // line 193
            yield "                                            ";
            $context["bg"] = (((($tmp = (isset($context["isWhite"]) || array_key_exists("isWhite", $context) ? $context["isWhite"] : (function () { throw new RuntimeError('Variable "isWhite" does not exist.', 193, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("repeating-linear-gradient(45deg,#f1f1f1 0 4px,#dddddd 4px 8px)") : (            // line 195
(isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 195, $this->source); })())));
            // line 196
            yield "                                            <span title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "colorname", [], "any", false, false, false, 196), "html", null, true);
            yield "\"
                                                  style=\"display:inline-block;width:18px;height:18px;border-radius:6px;
                                                         border:1px solid #bfbfbf;background: ";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg"]) || array_key_exists("bg", $context) ? $context["bg"] : (function () { throw new RuntimeError('Variable "bg" does not exist.', 198, $this->source); })()), "html", null, true);
            yield ";
                                                         box-shadow: 0 0 0 2px rgba(0,0,0,0.04);\"></span>
                                        </td>
                                        <td>
                                            <strong class=\"";
            // line 202
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "currentstock", [], "any", false, false, false, 202) > 5)) {
                yield "in-stock";
            } else {
                yield "out-of-stock";
            }
            yield "\">
                                                ";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "currentstock", [], "any", false, false, false, 203), "html", null, true);
            yield "
                                            </strong>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 207
        if (!$context['_iterated']) {
            // line 208
            yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center\" data-i18n=\"no_stock_available\">Aucun stock disponible</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination stock actuel -->
                    <div id=\"current-pagination\" class=\"pagination-container\">
                        <div class=\"pagination-info\">
                            <span data-i18n=\"page\">Page</span> ";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentStock"]) || array_key_exists("currentStock", $context) ? $context["currentStock"] : (function () { throw new RuntimeError('Variable "currentStock" does not exist.', 219, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 219), "html", null, true);
        yield " <span data-i18n=\"of\">sur</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentStock"]) || array_key_exists("currentStock", $context) ? $context["currentStock"] : (function () { throw new RuntimeError('Variable "currentStock" does not exist.', 219, $this->source); })()), "getPageCount", [], "method", false, false, false, 219), "html", null, true);
        yield "
                            • ";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentStock"]) || array_key_exists("currentStock", $context) ? $context["currentStock"] : (function () { throw new RuntimeError('Variable "currentStock" does not exist.', 220, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 220), "html", null, true);
        yield " <span data-i18n=\"articles\">articles</span>
                        </div>
                        <div class=\"pagination\">
                            ";
        // line 223
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["currentStock"]) || array_key_exists("currentStock", $context) ? $context["currentStock"] : (function () { throw new RuntimeError('Variable "currentStock" does not exist.', 223, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["pageParameterName" => "stock_page", "sortFieldParameterName" => "stock_sort", "sortDirectionParameterName" => "stock_direction"]);
        // line 227
        yield "
                        </div>
                    </div>

                    <!-- Formulaire caché pour export -->
                    <form id=\"exportForm\" action=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_export_csv");
        yield "\" method=\"POST\">
                        <input type=\"hidden\" name=\"demandes\" id=\"exportDemandes\" />
                        <button type=\"submit\" id=\"btn-demande\" class=\"modern-button\">
                            <i class=\"fas fa-file-export\"></i> <span data-i18n=\"supply\">Supply</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Importer de nouveaux stocks -->
            <div id=\"importSection\" class=\"stock-section hidden-section\">
                <div class=\"section-header\">
                    <h3 class=\"section-title\">
                        <i class=\"fas fa-download\"></i> <span data-i18n=\"import_stock_bulk\">Importer des stocks en masse</span>
                    </h3>
                </div>
                <div class=\"section-body\">
                    <form id=\"importForm\" enctype=\"multipart/form-data\" class=\"import-form\">
                        <div class=\"form-group\">
                            <label for=\"file1\" data-i18n=\"categories_file\">Fichier des Catégorie</label>
                            <input type=\"file\" id=\"file1\" name=\"file1\" class=\"modern-input\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"file2\" data-i18n=\"articles_file\">Fichier des Articles</label>
                            <input type=\"file\" id=\"file2\" name=\"file2\" class=\"modern-input\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"file3\" data-i18n=\"sizes_file\">Fichier des Tailles</label>
                            <input type=\"file\" id=\"file3\" name=\"file3\" class=\"modern-input\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"file4\" data-i18n=\"colors_stock_file\">Fichier des Couleurs et Stock</label>
                            <input type=\"file\" id=\"file4\" name=\"file4\" class=\"modern-input\" required>
                        </div>
                        <button type=\"submit\" class=\"modern-button\">
                            <i class=\"fas fa-upload\"></i> <span data-i18n=\"import\">Importer</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Exporter les stocks -->
            <div id=\"exportSection\" class=\"stock-section hidden-section\">
                <div class=\"section-header\">
                    <h3 class=\"section-title\">
                        <i class=\"fas fa-upload\"></i> <span data-i18n=\"export_stocks\">Export des stocks</span>
                    </h3>
                    <div class=\"section-actions\">
                        <span class=\"pagination-info\">
                            ";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["exportData"]) || array_key_exists("exportData", $context) ? $context["exportData"] : (function () { throw new RuntimeError('Variable "exportData" does not exist.', 281, $this->source); })())), "html", null, true);
        yield " <span data-i18n=\"of\">sur</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exportData"]) || array_key_exists("exportData", $context) ? $context["exportData"] : (function () { throw new RuntimeError('Variable "exportData" does not exist.', 281, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 281), "html", null, true);
        yield " <span data-i18n=\"articles\">articles</span>
                        </span>
                    </div>
                </div>
                <div class=\"section-body\">
                    <div class=\"table-container\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th data-i18n=\"article\">Article</th>
                                    <th data-i18n=\"category\">Catégorie</th>
                                    <th data-i18n=\"size\">Taille</th>
                                    <th data-i18n=\"color\">Couleur</th>
                                    <th data-i18n=\"quantity\">Quantité</th>
                                    <th data-i18n=\"action\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exportData"]) || array_key_exists("exportData", $context) ? $context["exportData"] : (function () { throw new RuntimeError('Variable "exportData" does not exist.', 299, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 300
            yield "                                    <tr>
                                        <td>";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "itemName", [], "any", false, false, false, 301), "html", null, true);
            yield "</td>
                                        <td>";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "categoryName", [], "any", false, false, false, 302), "html", null, true);
            yield "</td>
                                        <td>";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "valueSize", [], "any", false, false, false, 303), "html", null, true);
            yield "</td>
                                        <td style=\"text-align:center;\">
                                            ";
            // line 305
            $context["colorMap"] = ["rouge" => "#e74c3c", "red" => "#e74c3c", "vert" => "#2ecc71", "green" => "#2ecc71", "bleu" => "#3498db", "blue" => "#3498db", "noir" => "#000000", "black" => "#000000", "blanc" => "#ffffff", "white" => "#ffffff", "jaune" => "#f1c40f", "yellow" => "#f1c40f", "orange" => "#e67e22", "rose" => "#ff69b4", "violet" => "#8e44ad", "gris" => "#7f8c8d", "marron" => "#8B4513", "brown" => "#8B4513"];
            // line 318
            yield "                                            ";
            $context["cname"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "colorName", [], "any", true, true, false, 318) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "colorName", [], "any", false, false, false, 318)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "colorName", [], "any", false, false, false, 318)) : (""))));
            // line 319
            yield "                                            ";
            $context["hex"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["colorMap"] ?? null), (isset($context["cname"]) || array_key_exists("cname", $context) ? $context["cname"] : (function () { throw new RuntimeError('Variable "cname" does not exist.', 319, $this->source); })()), [], "array", true, true, false, 319)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["colorMap"]) || array_key_exists("colorMap", $context) ? $context["colorMap"] : (function () { throw new RuntimeError('Variable "colorMap" does not exist.', 319, $this->source); })()), (isset($context["cname"]) || array_key_exists("cname", $context) ? $context["cname"] : (function () { throw new RuntimeError('Variable "cname" does not exist.', 319, $this->source); })()), [], "array", false, false, false, 319)) : ("#cccccc"));
            // line 320
            yield "                                            ";
            $context["isWhite"] = ((isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 320, $this->source); })()) == "#ffffff");
            // line 321
            yield "                                            ";
            $context["bg"] = (((($tmp = (isset($context["isWhite"]) || array_key_exists("isWhite", $context) ? $context["isWhite"] : (function () { throw new RuntimeError('Variable "isWhite" does not exist.', 321, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("repeating-linear-gradient(45deg,#f1f1f1 0 4px,#dddddd 4px 8px)") : (            // line 323
(isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 323, $this->source); })())));
            // line 324
            yield "                                            <span title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "colorName", [], "any", false, false, false, 324), "html", null, true);
            yield "\"
                                                  style=\"display:inline-block;width:18px;height:18px;border-radius:6px;
                                                         border:1px solid #bfbfbf;background: ";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg"]) || array_key_exists("bg", $context) ? $context["bg"] : (function () { throw new RuntimeError('Variable "bg" does not exist.', 326, $this->source); })()), "html", null, true);
            yield ";
                                                         box-shadow: 0 0 0 2px rgba(0,0,0,0.04);\"></span>
                                        </td>
                                        <td>
                                            <input
                                                type=\"number\"
                                                class=\"export-qty-input\"
                                                min=\"1\"
                                                value=\"";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "quantity", [], "any", false, false, false, 334), "html", null, true);
            yield "\"
                                                data-id=\"";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 335), "html", null, true);
            yield "\"
                                            />
                                        </td>
                                        <td>
                                            <button class=\"delete-row-btn btn btn-sm btn-danger\" data-id=\"";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 339), "html", null, true);
            yield "\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 344
        if (!$context['_iterated']) {
            // line 345
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center\">Aucune donnée export disponible</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        yield "                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination export -->
                    <div id=\"export-pagination\" class=\"pagination-container\">
                        <div class=\"pagination-info\">
                            Page ";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exportData"]) || array_key_exists("exportData", $context) ? $context["exportData"] : (function () { throw new RuntimeError('Variable "exportData" does not exist.', 356, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 356), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exportData"]) || array_key_exists("exportData", $context) ? $context["exportData"] : (function () { throw new RuntimeError('Variable "exportData" does not exist.', 356, $this->source); })()), "getPageCount", [], "method", false, false, false, 356), "html", null, true);
        yield "
                            • ";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exportData"]) || array_key_exists("exportData", $context) ? $context["exportData"] : (function () { throw new RuntimeError('Variable "exportData" does not exist.', 357, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 357), "html", null, true);
        yield " articles
                        </div>
                        <div class=\"pagination\">
                            ";
        // line 360
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["exportData"]) || array_key_exists("exportData", $context) ? $context["exportData"] : (function () { throw new RuntimeError('Variable "exportData" does not exist.', 360, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["pageParameterName" => "export_page", "sortFieldParameterName" => "export_sort", "sortDirectionParameterName" => "export_direction"]);
        // line 364
        yield "
                        </div>
                    </div>

                    <!-- Formulaire caché pour export -->
                    <form id=\"exportCsvForm\" action=\"";
        // line 369
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_export_csv");
        yield "\" method=\"POST\">
                        <input type=\"hidden\" name=\"demandes\" id=\"exportDemandesCsv\" value=\"\" />
                        <button type=\"submit\" id=\"btn-export-csv\" class=\"modern-button\">
                            <i class=\"fas fa-file-export\"></i> Exporter CSV
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.initialQuantities = {};
        ";
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exportDataFull"]) || array_key_exists("exportDataFull", $context) ? $context["exportDataFull"] : (function () { throw new RuntimeError('Variable "exportDataFull" does not exist.', 382, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 383
            yield "            window.initialQuantities[\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 383), "html", null, true);
            yield "\"] = ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "quantity", [], "any", false, false, false, 383), "html", null, true);
            yield ";
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        yield "    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showMovementsBtn = document.getElementById('showMovements');
            const showCurrentBtn = document.getElementById('showCurrent');
            const showImportBtn = document.getElementById('showImport');
            const showExportBtn = document.getElementById('showExport');
            const movementsSection = document.getElementById('movementsSection');
            const currentSection = document.getElementById('currentSection');
            const filterSection = document.getElementById('filterSection');
            const importSection = document.getElementById('importSection');

            const allButtons = [showMovementsBtn, showCurrentBtn, showImportBtn, showExportBtn];

            // Fonction pour gérer l'état visuel des boutons
            function setActiveButton(activeBtn) {
                allButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.add('inactive');
                });
                activeBtn.classList.add('active');
                activeBtn.classList.remove('inactive');
            }

            // Fonction pour afficher les sections
            function showSection(section) {
                // Masquer tout
                movementsSection.classList.add('hidden-section');
                currentSection.classList.add('hidden-section');
                importSection.classList.add('hidden-section');
                filterSection.classList.add('hidden-section');
                document.getElementById('exportSection').classList.add('hidden-section');

                switch(section) {
                    case 'movements':
                        movementsSection.classList.remove('hidden-section');
                        filterSection.classList.remove('hidden-section');
                        setActiveButton(showMovementsBtn);
                        updateURL('movements');
                        break;

                    case 'current':
                        currentSection.classList.remove('hidden-section');
                        setActiveButton(showCurrentBtn);
                        updateURL('current');
                        break;

                    case 'import':
                        importSection.classList.remove('hidden-section');
                        setActiveButton(showImportBtn);
                        updateURL('import');
                        break;

                    case 'export':
                        document.getElementById('exportSection').classList.remove('hidden-section');
                        setActiveButton(showExportBtn);
                        updateURL('export');
                        break;
                }
            }

            // Attacher les événements
            showMovementsBtn.addEventListener('click', () => showSection('movements'));
            showCurrentBtn.addEventListener('click', () => showSection('current'));
            showImportBtn.addEventListener('click', () => showSection('import'));
            showExportBtn.addEventListener('click', () => showSection('export'));

            // Fonction pour mettre à jour l'URL
            function updateURL(section) {
                const url = new URL(window.location);
                url.searchParams.set('section', section);
                if (section === 'movements') {
                    url.searchParams.delete('stock_page');
                } else if (section === 'current') {
                    url.searchParams.delete('movements_page');
                } else if (section !== 'export') {
                    url.searchParams.delete('export_page');
                }
                window.history.replaceState({}, '', url);
            }

            // 🔥 CORRECTION : Détecter la section active selon les paramètres d'URL
            function detectActiveSection() {
                const urlParams = new URLSearchParams(window.location.search);
                const section = urlParams.get('section');

                // Si section explicite dans l'URL, l'utiliser
                if (section) {
                    return section;
                }

                // Sinon, détecter selon les paramètres de pagination
                if (urlParams.has('stock_page')) {
                    return 'current';
                } else if (urlParams.has('movements_page')) {
                    return 'movements';
                } else if (urlParams.has('export_page')) {
                    return 'export';
                }

                // Par défaut : movements
                return 'movements';
            }

            // Charger la bonne section selon l'URL
            const activeSection = detectActiveSection();
            showSection(activeSection);
        });

        document.addEventListener(\"DOMContentLoaded\", () => {
            let demandes = JSON.parse(sessionStorage.getItem(\"demandes\")) || [];

            const saveDemandes = () => {
                sessionStorage.setItem(\"demandes\", JSON.stringify(demandes));
            };

            // ✅ Restaurer état au rechargement
            demandes.forEach(d => {
                const checkbox = document.querySelector(`.check-demand[data-id=\"\${d.idItemSize}\"]`);
                if (checkbox) {
                    checkbox.checked = true;
                    const qtyInput = checkbox.closest(\"tr\").querySelector(\".qty-input\");
                    qtyInput.classList.remove(\"hidden\");
                    qtyInput.value = d.qty;
                }
            });

            // Gestion des checkbox
            document.querySelectorAll(\".check-demand\").forEach((checkbox) => {
                checkbox.addEventListener(\"change\", (e) => {
                    const row = e.target.closest(\"tr\");
                    const qtyInput = row.querySelector(\".qty-input\");
                    const id = e.target.dataset.id;

                    if (e.target.checked) {
                        qtyInput.classList.remove(\"hidden\");
                        let existing = demandes.find(d => d.idItemSize === id);
                        if (!existing) {
                            demandes.push({
                                idItemSize: id,
                                qty: qtyInput.value
                            });
                        }
                        let d = demandes.find(d => d.idItemSize === id);
                        if (d) d.qty = qtyInput.value;
                        saveDemandes();

                        qtyInput.addEventListener(\"input\", () => {
                            let d = demandes.find(d => d.idItemSize === id);
                            if (d) d.qty = qtyInput.value;
                            saveDemandes();
                        });

                    } else {
                        qtyInput.classList.add(\"hidden\");
                        demandes = demandes.filter(d => d.idItemSize !== id);
                        saveDemandes();
                    }
                });
            });

            // ✅ Bouton \"Demande\" en AJAX - Version améliorée
            const btnDemande = document.getElementById(\"btn-demande\");
            if (btnDemande) {
                btnDemande.addEventListener(\"click\", async (e) => {
                    e.preventDefault();

                    if (demandes.length === 0) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Sélection requise',
                            text: 'Veuillez sélectionner au moins un article !',
                            confirmButtonText: 'Compris',
                            background: '#ffffff',
                            color: '#333333',
                            confirmButtonColor: '#4361ee',
                            iconColor: '#f59e0b'
                        });
                        return;
                    }

                    try {
                        // Afficher un loader pendant le traitement
                        Swal.fire({
                            title: 'Traitement en cours',
                            text: 'Enregistrement de votre demande...',
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            },
                            background: '#ffffff',
                            color: '#333333'
                        });

                        let response = await fetch(\"/export\", {
                            method: \"POST\",
                            headers: {
                                \"Content-Type\": \"application/x-www-form-urlencoded\"
                            },
                            body: \"demandes=\" + encodeURIComponent(JSON.stringify(demandes))
                        });

                        // Fermer le loader
                        Swal.close();

                        if (response.ok) {
                            let text = await response.text();

                            // ✅ Pop-up succès améliorée
                            Swal.fire({
                                icon: 'success',
                                title: '✅ Demande enregistrée',
                                html: `
                                    <div style=\"text-align: center;\">
                                        <p style=\"font-size: 16px; margin-bottom: 16px; color: #059669;\">\${text}</p>
                                        <div style=\"background: #f0f9ff; padding: 12px; border-radius: 8px; margin: 16px 0;\">
                                            <p style=\"margin: 0; color: #0369a1; font-size: 14px;\">
                                                <strong>\${demandes.length}</strong> article(s) demandé(s)
                                            </p>
                                        </div>
                                    </div>
                                `,
                                confirmButtonText: 'Fermer',
                                confirmButtonColor: '#059669',
                                background: '#ffffff',
                                color: '#333333',
                                iconColor: '#059669',
                                customClass: {
                                    popup: 'custom-swal-popup',
                                    title: 'custom-swal-title',
                                    htmlContainer: 'custom-swal-html'
                                }
                            }).then(() => {
                                // 🔄 Recharge la page après avoir fermé l'alerte
                                window.location.reload();
                            });

                            // 🔥 Vider stockage après succès
                            sessionStorage.removeItem(\"demandes\");
                            demandes = [];

                            // Décocher les cases et cacher les inputs
                            document.querySelectorAll(\".check-demand\").forEach(cb => {
                                cb.checked = false;
                                const qtyInput = cb.closest(\"tr\").querySelector(\".qty-input\");
                                if (qtyInput) {
                                    qtyInput.classList.add(\"hidden\");
                                    qtyInput.value = \"1\"; // Réinitialiser la valeur
                                }
                            });

                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: '❌ Erreur',
                                text: \"Impossible d'enregistrer la demande. Veuillez réessayer.\",
                                confirmButtonText: 'Compris',
                                confirmButtonColor: '#dc2626',
                                background: '#ffffff',
                                color: '#333333',
                                iconColor: '#dc2626'
                            });
                        }
                    } catch (err) {
                        Swal.close();
                        Swal.fire({
                            icon: 'error',
                            title: '🌐 Erreur réseau',
                            text: \"Problème de connexion avec le serveur. Vérifiez votre connexion internet.\",
                            confirmButtonText: 'Réessayer',
                            confirmButtonColor: '#dc2626',
                            background: '#ffffff',
                            color: '#333333',
                            iconColor: '#dc2626'
                        });
                    }
                });
            }
        });

        document.addEventListener(\"DOMContentLoaded\", () => {
            const exportForm = document.getElementById(\"exportForm\");
            const exportDemandes = document.getElementById(\"exportDemandes\");

            exportForm.addEventListener(\"submit\", (e) => {
                e.preventDefault();

                const demandes = [];
                document.querySelectorAll(\".export-qty-input\").forEach(input => {
                    const id = input.dataset.id;
                    const qty = parseInt(input.value, 10);
                    if (qty > 0) {
                        demandes.push({ idItemSize: id, qty: qty });
                    }
                });

                if (demandes.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Sélection requise',
                        text: 'Veuillez entrer au moins une quantité !'
                    });
                    return;
                }

                // Remplir le champ caché et envoyer le formulaire
                exportDemandes.value = JSON.stringify(demandes);
                exportForm.submit();
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.delete-row-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    const row = this.closest('tr');
                    const id = this.dataset.id;

                    if (confirm(\"Voulez-vous vraiment supprimer cet article ?\")) {
                        fetch('/delete_stock/' + id, {
                            method: 'DELETE',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                row.remove(); // ✅ suppression en front
                            } else {
                                alert(\"Erreur : \" + data.message);
                            }
                        })
                        .catch(err => {
                            console.error(err);
                            alert(\"Erreur lors de la suppression\");
                        });
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const exportForm = document.getElementById('exportCsvForm');
            if (!exportForm) return;

            // Charger depuis sessionStorage ou initialiser avec toutes les données
            let allQuantities = JSON.parse(sessionStorage.getItem('allQuantities')) || {};

            // Fusionner avec toutes les quantités par défaut envoyées par Twig
            if (window.initialQuantities) {
                for (const [id, qty] of Object.entries(window.initialQuantities)) {
                    if (allQuantities[id] === undefined) {
                        allQuantities[id] = qty;
                    }
                }
                sessionStorage.setItem('allQuantities', JSON.stringify(allQuantities));
            }

            // 🔹 Synchroniser les inputs visibles (page courante)
            document.querySelectorAll('.export-qty-input').forEach(input => {
                const id = input.dataset.id;

                // si on a déjà une valeur stockée → l’appliquer
                if (allQuantities[id] !== undefined) {
                    input.value = allQuantities[id];
                }

                // Mettre à jour si modifié
                input.addEventListener('input', () => {
                    allQuantities[id] = parseInt(input.value) || 0;
                    sessionStorage.setItem('allQuantities', JSON.stringify(allQuantities));
                });
            });

            exportForm.addEventListener('submit', async function (e) {
                e.preventDefault();

                const demandes = [];
                for (const [id, quantity] of Object.entries(allQuantities)) {
                    if (quantity > 0) demandes.push({ id, quantity });
                }

                if (demandes.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Aucune donnée',
                        text: 'Veuillez entrer au moins une quantité !',
                        confirmButtonColor: '#f59e0b',
                        background: '#ffffff',
                        color: '#333333',
                        iconColor: '#f59e0b'
                    });
                    return;
                }

                try {
                    Swal.fire({
                        title: 'Export en cours...',
                        text: 'Génération des fichiers CSV',
                        allowOutsideClick: false,
                        didOpen: () => Swal.showLoading(),
                        background: '#ffffff',
                        color: '#333333'
                    });

                    const response = await fetch(exportForm.action, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'demandes=' + encodeURIComponent(JSON.stringify(demandes))
                    });

                    const result = await response.json();
                    Swal.close();

                    if (result.status === 'success') {
                        // 🔹 Déclencher le téléchargement de chaque fichier
                        result.files.forEach(file => {
                            const link = document.createElement('a');
                            link.href = file;          // chemin du fichier côté public
                            link.download = file.split('/').pop(); // nom du fichier
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                        });

                        // Afficher un message de succès
                        Swal.fire({
                            icon: 'success',
                            title: '✅ Export réussi',
                            html: `
                                <div style=\"text-align:center;\">
                                    <p style=\"font-size:16px; color:#059669; margin-bottom:12px;\">
                                        \${result.message}
                                    </p>
                                    <div style=\"background:#f0f9ff; padding:10px; border-radius:6px;\">
                                        <p style=\"margin:0; color:#0369a1; font-size:14px;\">
                                            Dossier : <strong>\${result.folder}</strong><br>
                                            Fichiers générés : <strong>\${result.files.length}</strong>
                                        </p>
                                    </div>
                                </div>
                            `,
                            confirmButtonText: 'Fermer',
                            confirmButtonColor: '#059669',
                            background: '#ffffff',
                            color: '#333333',
                            iconColor: '#059669'
                        }).then(() => {
                            window.location.reload(); // recharge la page après fermeture
                        });

                        sessionStorage.removeItem('allQuantities'); // nettoyer après succès
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: '❌ Erreur',
                            text: result.message || 'Une erreur est survenue lors de l\\'export.',
                            confirmButtonText: 'Fermer',
                            confirmButtonColor: '#dc2626',
                            background: '#ffffff',
                            color: '#333333',
                            iconColor: '#dc2626'
                        });
                    }
                } catch (err) {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: '🌐 Erreur réseau',
                        text: 'Problème de connexion avec le serveur. Vérifiez votre connexion internet.',
                        confirmButtonText: 'Réessayer',
                        confirmButtonColor: '#dc2626',
                        background: '#ffffff',
                        color: '#333333',
                        iconColor: '#dc2626'
                    });
                }
            });
        });

        document.getElementById('importForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            try {
                // Afficher un loader pendant le traitement
                Swal.fire({
                    title: 'Import en cours',
                    text: 'Veuillez patienter...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                    background: '#ffffff',
                    color: '#333333'
                });

                let response = await fetch('";
        // line 886
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_import");
        yield "', {
                    method: 'POST',
                    body: formData
                });

                // Fermer le loader
                Swal.close();

                let message = await response.text();
                const isSuccess = message.includes(\"✅\"); // true si succès

                Swal.fire({
                    icon: isSuccess ? 'success' : 'error',
                    title: isSuccess ? '✅ Import réussi' : '❌ Erreur',
                    html: `<div style=\"text-align: center;\">
                               <p style=\"font-size: 16px; margin-bottom: 16px; color: \${isSuccess ? '#059669' : '#721c24'};\">
                                   \${isSuccess ? 'Les fichiers ont été importés avec succès.' : message}
                               </p>
                           </div>`,
                    confirmButtonText: 'Fermer',
                    confirmButtonColor: isSuccess ? '#059669' : '#dc2626',
                    background: '#ffffff',
                    color: '#333333',
                    iconColor: isSuccess ? '#059669' : '#dc2626',
                    customClass: {
                        popup: 'custom-swal-popup',
                        title: 'custom-swal-title',
                        htmlContainer: 'custom-swal-html'
                    }
                }).then(() => {
                    // 🔄 Recharge la page après fermeture
                    window.location.reload();
                });

            } catch (err) {
                Swal.close();
                Swal.fire({
                    icon: 'error',
                    title: '🌐 Erreur réseau',
                    text: \"Problème de connexion avec le serveur. Vérifiez votre connexion internet.\",
                    confirmButtonText: 'Réessayer',
                    confirmButtonColor: '#dc2626',
                    background: '#ffffff',
                    color: '#333333',
                    iconColor: '#dc2626'
                });
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
        return "admin/stock.html.twig";
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
        return array (  1177 => 886,  674 => 385,  663 => 383,  659 => 382,  643 => 369,  636 => 364,  634 => 360,  628 => 357,  622 => 356,  613 => 349,  604 => 345,  602 => 344,  592 => 339,  585 => 335,  581 => 334,  570 => 326,  564 => 324,  562 => 323,  560 => 321,  557 => 320,  554 => 319,  551 => 318,  549 => 305,  544 => 303,  540 => 302,  536 => 301,  533 => 300,  528 => 299,  505 => 281,  453 => 232,  446 => 227,  444 => 223,  438 => 220,  432 => 219,  423 => 212,  414 => 208,  412 => 207,  403 => 203,  395 => 202,  388 => 198,  382 => 196,  380 => 195,  378 => 193,  375 => 192,  372 => 191,  369 => 190,  367 => 177,  362 => 175,  358 => 174,  352 => 171,  348 => 169,  343 => 168,  321 => 151,  305 => 137,  303 => 133,  297 => 130,  291 => 129,  282 => 122,  273 => 118,  271 => 117,  264 => 115,  259 => 113,  253 => 112,  248 => 110,  242 => 109,  236 => 106,  230 => 104,  228 => 103,  226 => 101,  223 => 100,  220 => 99,  217 => 98,  215 => 85,  210 => 83,  206 => 82,  203 => 81,  198 => 80,  175 => 62,  166 => 58,  145 => 40,  140 => 38,  112 => 12,  102 => 11,  91 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/baseAdmin.html.twig' %}

{% block title %}Suivi du Stock{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/stock.css') }}\">
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
{% endblock %}

{% block content %}
    <div class=\"modern-dashboard\">
        <!-- Sidebar avec boutons de sélection -->
        <div class=\"dashboard-sidebar\">
            <div class=\"button-group\">
                <button id=\"showMovements\" class=\"toggle-btn active\">
                    <i class=\"fas fa-exchange-alt\"></i> <span data-i18n=\"stock_movements\">Mouvements de stock</span>
                </button>
                <button id=\"showCurrent\" class=\"toggle-btn inactive\">
                    <i class=\"fas fa-boxes\"></i> <span data-i18n=\"current_stock\">Stock actuel</span>
                </button>
                <button id=\"showImport\" class=\"toggle-btn inactive\">
                    <i class=\"fas fa-download\"></i> <span data-i18n=\"import_new_stock\">Importer de nouveaux stock</span>
                </button>
                <button id=\"showExport\" class=\"toggle-btn inactive\">
                    <i class=\"fas fa-upload\"></i> <span data-i18n=\"export_new_stock\">Exporter de nouveaux stock</span>
                </button>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class=\"dashboard-content\">
            <div id=\"filterSection\" class=\"filter-card\">
                <form method=\"post\" class=\"filter-form\">
                    <div class=\"filter-group\">
                        <label for=\"dateD\" data-i18n=\"period\">Période</label>
                        <div class=\"date-range\">
                            <input type=\"date\" name=\"dateD\" id=\"dateD\" required class=\"modern-input\" value=\"{{ dateD }}\">
                            <span class=\"date-separator\">—</span>
                            <input type=\"date\" name=\"dateF\" id=\"dateF\" required class=\"modern-input\" value=\"{{ dateF }}\">
                        </div>
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

            <!-- Mouvements de stock -->
            <div id=\"movementsSection\" class=\"stock-section\">
                <div class=\"section-header\">
                    <h3 class=\"section-title\">
                        <i class=\"fas fa-exchange-alt\"></i> <span data-i18n=\"movements_between\">Mouvements entre</span> {{ startDate|date('d/m/Y') }} <span data-i18n=\"and\">et</span> {{ endDate|date('d/m/Y') }}
                    </h3>
                    <div class=\"section-actions\">
                        <span class=\"pagination-info\">
                            {{ stockMovements|length }} <span data-i18n=\"of\">sur</span> {{ stockMovements.getTotalItemCount() }} <span data-i18n=\"movements\">mouvements</span>
                        </span>
                    </div>
                </div>
                <div class=\"section-body\">
                    <div class=\"table-container\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th data-i18n=\"article\">Article</th>
                                    <th data-i18n=\"size\">Taille</th>
                                    <th data-i18n=\"color\">Couleur</th>
                                    <th data-i18n=\"entries\">Entrées</th>
                                    <th data-i18n=\"exits\">Sorties</th>
                                    <th data-i18n=\"date\">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for movement in stockMovements %}
                                    <tr>
                                        <td>{{ movement.name_item }}</td>
                                        <td>{{ movement.value_size }}</td>
                                        <td style=\"text-align:center;\">
                                            {% set colorMap = {
                                                'rouge':'#e74c3c','red':'#e74c3c',
                                                'vert':'#2ecc71','green':'#2ecc71',
                                                'bleu':'#3498db','blue':'#3498db',
                                                'noir':'#000000','black':'#000000',
                                                'blanc':'#ffffff','white':'#ffffff',
                                                'jaune':'#f1c40f','yellow':'#f1c40f',
                                                'orange':'#e67e22',
                                                'rose':'#ff69b4',
                                                'violet':'#8e44ad',
                                                'gris':'#7f8c8d',
                                                'marron':'#8B4513','brown':'#8B4513'
                                            } %}
                                            {% set cname = (movement.name_color ?? '')|lower|trim %}
                                            {% set hex = colorMap[cname] is defined ? colorMap[cname] : '#cccccc' %}
                                            {% set isWhite = hex == '#ffffff' %}
                                            {% set bg = isWhite
                                                ? 'repeating-linear-gradient(45deg,#f1f1f1 0 4px,#dddddd 4px 8px)'
                                                : hex %}
                                            <span title=\"{{ movement.name_color }}\"
                                                  style=\"display:inline-block;width:18px;height:18px;border-radius:6px;
                                                         border:1px solid #bfbfbf;background: {{ bg }};
                                                         box-shadow: 0 0 0 2px rgba(0,0,0,0.04);\"></span>
                                        </td>
                                        <td class=\"{% if movement.in_item > 0 %}positive{% endif %}\">
                                            {{ movement.in_item ?? 0 }}
                                        </td>
                                        <td class=\"{% if movement.out_item > 0 %}negative{% endif %}\">
                                            {{ movement.out_item ?? 0 }}
                                        </td>
                                        <td>{{ movement.date_move|date('d/m/Y H:i') }}</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center\" data-i18n=\"no_movements_recorded\">Aucun mouvement enregistré</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination mouvements -->
                    <div id=\"movements-pagination\" class=\"pagination-container\">
                        <div class=\"pagination-info\">
                            <span data-i18n=\"page\">Page</span> {{ stockMovements.getCurrentPageNumber() }} <span data-i18n=\"of\">sur</span> {{ stockMovements.getPageCount() }}
                            • {{ stockMovements.getTotalItemCount() }} <span data-i18n=\"movements\">mouvements</span>
                        </div>
                        <div class=\"pagination\">
                            {{ knp_pagination_render(stockMovements, '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig', {}, {
                                'pageParameterName': 'movements_page',
                                'sortFieldParameterName': 'movements_sort',
                                'sortDirectionParameterName': 'movements_direction'
                            }) }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stock actuel -->
            <div id=\"currentSection\" class=\"stock-section hidden-section\">
                <div class=\"section-header\">
                    <h3 class=\"section-title\">
                        <i class=\"fas fa-boxes\"></i> <span data-i18n=\"current_stock\">Stock actuel</span>
                    </h3>
                    <div class=\"section-actions\">
                        <span class=\"pagination-info\">
                            {{ currentStock|length }} <span data-i18n=\"of\">sur</span> {{ currentStock.getTotalItemCount() }} <span data-i18n=\"articles\">articles</span>
                        </span>
                    </div>
                </div>
                <div class=\"section-body\">
                    <div class=\"table-container\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th data-i18n=\"selection\">Sélection</th>
                                    <th data-i18n=\"article\">Article</th>
                                    <th data-i18n=\"size\">Taille</th>
                                    <th data-i18n=\"color\">Couleur</th>
                                    <th data-i18n=\"available_stock\">Stock disponible</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for row in currentStock %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" class=\"check-demand\" data-id=\"{{ row.itemsizecolorid }}\" />
                                            <input type=\"number\" class=\"qty-input hidden\" min=\"1\" value=\"10\" />
                                        </td>
                                        <td>{{ row.itemname }}</td>
                                        <td>{{ row.valuesize }}</td>
                                        <td style=\"text-align:center;\">
                                            {% set colorMap = {
                                                'rouge':'#e74c3c','red':'#e74c3c',
                                                'vert':'#2ecc71','green':'#2ecc71',
                                                'bleu':'#3498db','blue':'#3498db',
                                                'noir':'#000000','black':'#000000',
                                                'blanc':'#ffffff','white':'#ffffff',
                                                'jaune':'#f1c40f','yellow':'#f1c40f',
                                                'orange':'#e67e22',
                                                'rose':'#ff69b4',
                                                'violet':'#8e44ad',
                                                'gris':'#7f8c8d',
                                                'marron':'#8B4513','brown':'#8B4513'
                                            } %}
                                            {% set cname = (row.colorname ?? '')|lower|trim %}
                                            {% set hex = colorMap[cname] is defined ? colorMap[cname] : '#cccccc' %}
                                            {% set isWhite = hex == '#ffffff' %}
                                            {% set bg = isWhite
                                                ? 'repeating-linear-gradient(45deg,#f1f1f1 0 4px,#dddddd 4px 8px)'
                                                : hex %}
                                            <span title=\"{{ row.colorname }}\"
                                                  style=\"display:inline-block;width:18px;height:18px;border-radius:6px;
                                                         border:1px solid #bfbfbf;background: {{ bg }};
                                                         box-shadow: 0 0 0 2px rgba(0,0,0,0.04);\"></span>
                                        </td>
                                        <td>
                                            <strong class=\"{% if row.currentstock > 5 %}in-stock{% else %}out-of-stock{% endif %}\">
                                                {{ row.currentstock }}
                                            </strong>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center\" data-i18n=\"no_stock_available\">Aucun stock disponible</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination stock actuel -->
                    <div id=\"current-pagination\" class=\"pagination-container\">
                        <div class=\"pagination-info\">
                            <span data-i18n=\"page\">Page</span> {{ currentStock.getCurrentPageNumber() }} <span data-i18n=\"of\">sur</span> {{ currentStock.getPageCount() }}
                            • {{ currentStock.getTotalItemCount() }} <span data-i18n=\"articles\">articles</span>
                        </div>
                        <div class=\"pagination\">
                            {{ knp_pagination_render(currentStock, '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig', {}, {
                                'pageParameterName': 'stock_page',
                                'sortFieldParameterName': 'stock_sort',
                                'sortDirectionParameterName': 'stock_direction'
                            }) }}
                        </div>
                    </div>

                    <!-- Formulaire caché pour export -->
                    <form id=\"exportForm\" action=\"{{ path('app_export_csv') }}\" method=\"POST\">
                        <input type=\"hidden\" name=\"demandes\" id=\"exportDemandes\" />
                        <button type=\"submit\" id=\"btn-demande\" class=\"modern-button\">
                            <i class=\"fas fa-file-export\"></i> <span data-i18n=\"supply\">Supply</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Importer de nouveaux stocks -->
            <div id=\"importSection\" class=\"stock-section hidden-section\">
                <div class=\"section-header\">
                    <h3 class=\"section-title\">
                        <i class=\"fas fa-download\"></i> <span data-i18n=\"import_stock_bulk\">Importer des stocks en masse</span>
                    </h3>
                </div>
                <div class=\"section-body\">
                    <form id=\"importForm\" enctype=\"multipart/form-data\" class=\"import-form\">
                        <div class=\"form-group\">
                            <label for=\"file1\" data-i18n=\"categories_file\">Fichier des Catégorie</label>
                            <input type=\"file\" id=\"file1\" name=\"file1\" class=\"modern-input\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"file2\" data-i18n=\"articles_file\">Fichier des Articles</label>
                            <input type=\"file\" id=\"file2\" name=\"file2\" class=\"modern-input\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"file3\" data-i18n=\"sizes_file\">Fichier des Tailles</label>
                            <input type=\"file\" id=\"file3\" name=\"file3\" class=\"modern-input\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"file4\" data-i18n=\"colors_stock_file\">Fichier des Couleurs et Stock</label>
                            <input type=\"file\" id=\"file4\" name=\"file4\" class=\"modern-input\" required>
                        </div>
                        <button type=\"submit\" class=\"modern-button\">
                            <i class=\"fas fa-upload\"></i> <span data-i18n=\"import\">Importer</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Exporter les stocks -->
            <div id=\"exportSection\" class=\"stock-section hidden-section\">
                <div class=\"section-header\">
                    <h3 class=\"section-title\">
                        <i class=\"fas fa-upload\"></i> <span data-i18n=\"export_stocks\">Export des stocks</span>
                    </h3>
                    <div class=\"section-actions\">
                        <span class=\"pagination-info\">
                            {{ exportData|length }} <span data-i18n=\"of\">sur</span> {{ exportData.getTotalItemCount() }} <span data-i18n=\"articles\">articles</span>
                        </span>
                    </div>
                </div>
                <div class=\"section-body\">
                    <div class=\"table-container\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th data-i18n=\"article\">Article</th>
                                    <th data-i18n=\"category\">Catégorie</th>
                                    <th data-i18n=\"size\">Taille</th>
                                    <th data-i18n=\"color\">Couleur</th>
                                    <th data-i18n=\"quantity\">Quantité</th>
                                    <th data-i18n=\"action\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for row in exportData %}
                                    <tr>
                                        <td>{{ row.itemName }}</td>
                                        <td>{{ row.categoryName }}</td>
                                        <td>{{ row.valueSize }}</td>
                                        <td style=\"text-align:center;\">
                                            {% set colorMap = {
                                                'rouge':'#e74c3c','red':'#e74c3c',
                                                'vert':'#2ecc71','green':'#2ecc71',
                                                'bleu':'#3498db','blue':'#3498db',
                                                'noir':'#000000','black':'#000000',
                                                'blanc':'#ffffff','white':'#ffffff',
                                                'jaune':'#f1c40f','yellow':'#f1c40f',
                                                'orange':'#e67e22',
                                                'rose':'#ff69b4',
                                                'violet':'#8e44ad',
                                                'gris':'#7f8c8d',
                                                'marron':'#8B4513','brown':'#8B4513'
                                            } %}
                                            {% set cname = (row.colorName ?? '')|lower|trim %}
                                            {% set hex = colorMap[cname] is defined ? colorMap[cname] : '#cccccc' %}
                                            {% set isWhite = hex == '#ffffff' %}
                                            {% set bg = isWhite
                                                ? 'repeating-linear-gradient(45deg,#f1f1f1 0 4px,#dddddd 4px 8px)'
                                                : hex %}
                                            <span title=\"{{ row.colorName }}\"
                                                  style=\"display:inline-block;width:18px;height:18px;border-radius:6px;
                                                         border:1px solid #bfbfbf;background: {{ bg }};
                                                         box-shadow: 0 0 0 2px rgba(0,0,0,0.04);\"></span>
                                        </td>
                                        <td>
                                            <input
                                                type=\"number\"
                                                class=\"export-qty-input\"
                                                min=\"1\"
                                                value=\"{{ row.quantity }}\"
                                                data-id=\"{{ row.id }}\"
                                            />
                                        </td>
                                        <td>
                                            <button class=\"delete-row-btn btn btn-sm btn-danger\" data-id=\"{{ row.id }}\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\" class=\"text-center\">Aucune donnée export disponible</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination export -->
                    <div id=\"export-pagination\" class=\"pagination-container\">
                        <div class=\"pagination-info\">
                            Page {{ exportData.getCurrentPageNumber() }} sur {{ exportData.getPageCount() }}
                            • {{ exportData.getTotalItemCount() }} articles
                        </div>
                        <div class=\"pagination\">
                            {{ knp_pagination_render(exportData, '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig', {}, {
                                'pageParameterName': 'export_page',
                                'sortFieldParameterName': 'export_sort',
                                'sortDirectionParameterName': 'export_direction'
                            }) }}
                        </div>
                    </div>

                    <!-- Formulaire caché pour export -->
                    <form id=\"exportCsvForm\" action=\"{{ path('app_export_csv') }}\" method=\"POST\">
                        <input type=\"hidden\" name=\"demandes\" id=\"exportDemandesCsv\" value=\"\" />
                        <button type=\"submit\" id=\"btn-export-csv\" class=\"modern-button\">
                            <i class=\"fas fa-file-export\"></i> Exporter CSV
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.initialQuantities = {};
        {% for row in exportDataFull %}
            window.initialQuantities[\"{{ row.id }}\"] = {{ row.quantity }};
        {% endfor %}
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showMovementsBtn = document.getElementById('showMovements');
            const showCurrentBtn = document.getElementById('showCurrent');
            const showImportBtn = document.getElementById('showImport');
            const showExportBtn = document.getElementById('showExport');
            const movementsSection = document.getElementById('movementsSection');
            const currentSection = document.getElementById('currentSection');
            const filterSection = document.getElementById('filterSection');
            const importSection = document.getElementById('importSection');

            const allButtons = [showMovementsBtn, showCurrentBtn, showImportBtn, showExportBtn];

            // Fonction pour gérer l'état visuel des boutons
            function setActiveButton(activeBtn) {
                allButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.add('inactive');
                });
                activeBtn.classList.add('active');
                activeBtn.classList.remove('inactive');
            }

            // Fonction pour afficher les sections
            function showSection(section) {
                // Masquer tout
                movementsSection.classList.add('hidden-section');
                currentSection.classList.add('hidden-section');
                importSection.classList.add('hidden-section');
                filterSection.classList.add('hidden-section');
                document.getElementById('exportSection').classList.add('hidden-section');

                switch(section) {
                    case 'movements':
                        movementsSection.classList.remove('hidden-section');
                        filterSection.classList.remove('hidden-section');
                        setActiveButton(showMovementsBtn);
                        updateURL('movements');
                        break;

                    case 'current':
                        currentSection.classList.remove('hidden-section');
                        setActiveButton(showCurrentBtn);
                        updateURL('current');
                        break;

                    case 'import':
                        importSection.classList.remove('hidden-section');
                        setActiveButton(showImportBtn);
                        updateURL('import');
                        break;

                    case 'export':
                        document.getElementById('exportSection').classList.remove('hidden-section');
                        setActiveButton(showExportBtn);
                        updateURL('export');
                        break;
                }
            }

            // Attacher les événements
            showMovementsBtn.addEventListener('click', () => showSection('movements'));
            showCurrentBtn.addEventListener('click', () => showSection('current'));
            showImportBtn.addEventListener('click', () => showSection('import'));
            showExportBtn.addEventListener('click', () => showSection('export'));

            // Fonction pour mettre à jour l'URL
            function updateURL(section) {
                const url = new URL(window.location);
                url.searchParams.set('section', section);
                if (section === 'movements') {
                    url.searchParams.delete('stock_page');
                } else if (section === 'current') {
                    url.searchParams.delete('movements_page');
                } else if (section !== 'export') {
                    url.searchParams.delete('export_page');
                }
                window.history.replaceState({}, '', url);
            }

            // 🔥 CORRECTION : Détecter la section active selon les paramètres d'URL
            function detectActiveSection() {
                const urlParams = new URLSearchParams(window.location.search);
                const section = urlParams.get('section');

                // Si section explicite dans l'URL, l'utiliser
                if (section) {
                    return section;
                }

                // Sinon, détecter selon les paramètres de pagination
                if (urlParams.has('stock_page')) {
                    return 'current';
                } else if (urlParams.has('movements_page')) {
                    return 'movements';
                } else if (urlParams.has('export_page')) {
                    return 'export';
                }

                // Par défaut : movements
                return 'movements';
            }

            // Charger la bonne section selon l'URL
            const activeSection = detectActiveSection();
            showSection(activeSection);
        });

        document.addEventListener(\"DOMContentLoaded\", () => {
            let demandes = JSON.parse(sessionStorage.getItem(\"demandes\")) || [];

            const saveDemandes = () => {
                sessionStorage.setItem(\"demandes\", JSON.stringify(demandes));
            };

            // ✅ Restaurer état au rechargement
            demandes.forEach(d => {
                const checkbox = document.querySelector(`.check-demand[data-id=\"\${d.idItemSize}\"]`);
                if (checkbox) {
                    checkbox.checked = true;
                    const qtyInput = checkbox.closest(\"tr\").querySelector(\".qty-input\");
                    qtyInput.classList.remove(\"hidden\");
                    qtyInput.value = d.qty;
                }
            });

            // Gestion des checkbox
            document.querySelectorAll(\".check-demand\").forEach((checkbox) => {
                checkbox.addEventListener(\"change\", (e) => {
                    const row = e.target.closest(\"tr\");
                    const qtyInput = row.querySelector(\".qty-input\");
                    const id = e.target.dataset.id;

                    if (e.target.checked) {
                        qtyInput.classList.remove(\"hidden\");
                        let existing = demandes.find(d => d.idItemSize === id);
                        if (!existing) {
                            demandes.push({
                                idItemSize: id,
                                qty: qtyInput.value
                            });
                        }
                        let d = demandes.find(d => d.idItemSize === id);
                        if (d) d.qty = qtyInput.value;
                        saveDemandes();

                        qtyInput.addEventListener(\"input\", () => {
                            let d = demandes.find(d => d.idItemSize === id);
                            if (d) d.qty = qtyInput.value;
                            saveDemandes();
                        });

                    } else {
                        qtyInput.classList.add(\"hidden\");
                        demandes = demandes.filter(d => d.idItemSize !== id);
                        saveDemandes();
                    }
                });
            });

            // ✅ Bouton \"Demande\" en AJAX - Version améliorée
            const btnDemande = document.getElementById(\"btn-demande\");
            if (btnDemande) {
                btnDemande.addEventListener(\"click\", async (e) => {
                    e.preventDefault();

                    if (demandes.length === 0) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Sélection requise',
                            text: 'Veuillez sélectionner au moins un article !',
                            confirmButtonText: 'Compris',
                            background: '#ffffff',
                            color: '#333333',
                            confirmButtonColor: '#4361ee',
                            iconColor: '#f59e0b'
                        });
                        return;
                    }

                    try {
                        // Afficher un loader pendant le traitement
                        Swal.fire({
                            title: 'Traitement en cours',
                            text: 'Enregistrement de votre demande...',
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            },
                            background: '#ffffff',
                            color: '#333333'
                        });

                        let response = await fetch(\"/export\", {
                            method: \"POST\",
                            headers: {
                                \"Content-Type\": \"application/x-www-form-urlencoded\"
                            },
                            body: \"demandes=\" + encodeURIComponent(JSON.stringify(demandes))
                        });

                        // Fermer le loader
                        Swal.close();

                        if (response.ok) {
                            let text = await response.text();

                            // ✅ Pop-up succès améliorée
                            Swal.fire({
                                icon: 'success',
                                title: '✅ Demande enregistrée',
                                html: `
                                    <div style=\"text-align: center;\">
                                        <p style=\"font-size: 16px; margin-bottom: 16px; color: #059669;\">\${text}</p>
                                        <div style=\"background: #f0f9ff; padding: 12px; border-radius: 8px; margin: 16px 0;\">
                                            <p style=\"margin: 0; color: #0369a1; font-size: 14px;\">
                                                <strong>\${demandes.length}</strong> article(s) demandé(s)
                                            </p>
                                        </div>
                                    </div>
                                `,
                                confirmButtonText: 'Fermer',
                                confirmButtonColor: '#059669',
                                background: '#ffffff',
                                color: '#333333',
                                iconColor: '#059669',
                                customClass: {
                                    popup: 'custom-swal-popup',
                                    title: 'custom-swal-title',
                                    htmlContainer: 'custom-swal-html'
                                }
                            }).then(() => {
                                // 🔄 Recharge la page après avoir fermé l'alerte
                                window.location.reload();
                            });

                            // 🔥 Vider stockage après succès
                            sessionStorage.removeItem(\"demandes\");
                            demandes = [];

                            // Décocher les cases et cacher les inputs
                            document.querySelectorAll(\".check-demand\").forEach(cb => {
                                cb.checked = false;
                                const qtyInput = cb.closest(\"tr\").querySelector(\".qty-input\");
                                if (qtyInput) {
                                    qtyInput.classList.add(\"hidden\");
                                    qtyInput.value = \"1\"; // Réinitialiser la valeur
                                }
                            });

                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: '❌ Erreur',
                                text: \"Impossible d'enregistrer la demande. Veuillez réessayer.\",
                                confirmButtonText: 'Compris',
                                confirmButtonColor: '#dc2626',
                                background: '#ffffff',
                                color: '#333333',
                                iconColor: '#dc2626'
                            });
                        }
                    } catch (err) {
                        Swal.close();
                        Swal.fire({
                            icon: 'error',
                            title: '🌐 Erreur réseau',
                            text: \"Problème de connexion avec le serveur. Vérifiez votre connexion internet.\",
                            confirmButtonText: 'Réessayer',
                            confirmButtonColor: '#dc2626',
                            background: '#ffffff',
                            color: '#333333',
                            iconColor: '#dc2626'
                        });
                    }
                });
            }
        });

        document.addEventListener(\"DOMContentLoaded\", () => {
            const exportForm = document.getElementById(\"exportForm\");
            const exportDemandes = document.getElementById(\"exportDemandes\");

            exportForm.addEventListener(\"submit\", (e) => {
                e.preventDefault();

                const demandes = [];
                document.querySelectorAll(\".export-qty-input\").forEach(input => {
                    const id = input.dataset.id;
                    const qty = parseInt(input.value, 10);
                    if (qty > 0) {
                        demandes.push({ idItemSize: id, qty: qty });
                    }
                });

                if (demandes.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Sélection requise',
                        text: 'Veuillez entrer au moins une quantité !'
                    });
                    return;
                }

                // Remplir le champ caché et envoyer le formulaire
                exportDemandes.value = JSON.stringify(demandes);
                exportForm.submit();
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.delete-row-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    const row = this.closest('tr');
                    const id = this.dataset.id;

                    if (confirm(\"Voulez-vous vraiment supprimer cet article ?\")) {
                        fetch('/delete_stock/' + id, {
                            method: 'DELETE',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                row.remove(); // ✅ suppression en front
                            } else {
                                alert(\"Erreur : \" + data.message);
                            }
                        })
                        .catch(err => {
                            console.error(err);
                            alert(\"Erreur lors de la suppression\");
                        });
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const exportForm = document.getElementById('exportCsvForm');
            if (!exportForm) return;

            // Charger depuis sessionStorage ou initialiser avec toutes les données
            let allQuantities = JSON.parse(sessionStorage.getItem('allQuantities')) || {};

            // Fusionner avec toutes les quantités par défaut envoyées par Twig
            if (window.initialQuantities) {
                for (const [id, qty] of Object.entries(window.initialQuantities)) {
                    if (allQuantities[id] === undefined) {
                        allQuantities[id] = qty;
                    }
                }
                sessionStorage.setItem('allQuantities', JSON.stringify(allQuantities));
            }

            // 🔹 Synchroniser les inputs visibles (page courante)
            document.querySelectorAll('.export-qty-input').forEach(input => {
                const id = input.dataset.id;

                // si on a déjà une valeur stockée → l’appliquer
                if (allQuantities[id] !== undefined) {
                    input.value = allQuantities[id];
                }

                // Mettre à jour si modifié
                input.addEventListener('input', () => {
                    allQuantities[id] = parseInt(input.value) || 0;
                    sessionStorage.setItem('allQuantities', JSON.stringify(allQuantities));
                });
            });

            exportForm.addEventListener('submit', async function (e) {
                e.preventDefault();

                const demandes = [];
                for (const [id, quantity] of Object.entries(allQuantities)) {
                    if (quantity > 0) demandes.push({ id, quantity });
                }

                if (demandes.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Aucune donnée',
                        text: 'Veuillez entrer au moins une quantité !',
                        confirmButtonColor: '#f59e0b',
                        background: '#ffffff',
                        color: '#333333',
                        iconColor: '#f59e0b'
                    });
                    return;
                }

                try {
                    Swal.fire({
                        title: 'Export en cours...',
                        text: 'Génération des fichiers CSV',
                        allowOutsideClick: false,
                        didOpen: () => Swal.showLoading(),
                        background: '#ffffff',
                        color: '#333333'
                    });

                    const response = await fetch(exportForm.action, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'demandes=' + encodeURIComponent(JSON.stringify(demandes))
                    });

                    const result = await response.json();
                    Swal.close();

                    if (result.status === 'success') {
                        // 🔹 Déclencher le téléchargement de chaque fichier
                        result.files.forEach(file => {
                            const link = document.createElement('a');
                            link.href = file;          // chemin du fichier côté public
                            link.download = file.split('/').pop(); // nom du fichier
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                        });

                        // Afficher un message de succès
                        Swal.fire({
                            icon: 'success',
                            title: '✅ Export réussi',
                            html: `
                                <div style=\"text-align:center;\">
                                    <p style=\"font-size:16px; color:#059669; margin-bottom:12px;\">
                                        \${result.message}
                                    </p>
                                    <div style=\"background:#f0f9ff; padding:10px; border-radius:6px;\">
                                        <p style=\"margin:0; color:#0369a1; font-size:14px;\">
                                            Dossier : <strong>\${result.folder}</strong><br>
                                            Fichiers générés : <strong>\${result.files.length}</strong>
                                        </p>
                                    </div>
                                </div>
                            `,
                            confirmButtonText: 'Fermer',
                            confirmButtonColor: '#059669',
                            background: '#ffffff',
                            color: '#333333',
                            iconColor: '#059669'
                        }).then(() => {
                            window.location.reload(); // recharge la page après fermeture
                        });

                        sessionStorage.removeItem('allQuantities'); // nettoyer après succès
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: '❌ Erreur',
                            text: result.message || 'Une erreur est survenue lors de l\\'export.',
                            confirmButtonText: 'Fermer',
                            confirmButtonColor: '#dc2626',
                            background: '#ffffff',
                            color: '#333333',
                            iconColor: '#dc2626'
                        });
                    }
                } catch (err) {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: '🌐 Erreur réseau',
                        text: 'Problème de connexion avec le serveur. Vérifiez votre connexion internet.',
                        confirmButtonText: 'Réessayer',
                        confirmButtonColor: '#dc2626',
                        background: '#ffffff',
                        color: '#333333',
                        iconColor: '#dc2626'
                    });
                }
            });
        });

        document.getElementById('importForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            try {
                // Afficher un loader pendant le traitement
                Swal.fire({
                    title: 'Import en cours',
                    text: 'Veuillez patienter...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                    background: '#ffffff',
                    color: '#333333'
                });

                let response = await fetch('{{ path(\"app_import\") }}', {
                    method: 'POST',
                    body: formData
                });

                // Fermer le loader
                Swal.close();

                let message = await response.text();
                const isSuccess = message.includes(\"✅\"); // true si succès

                Swal.fire({
                    icon: isSuccess ? 'success' : 'error',
                    title: isSuccess ? '✅ Import réussi' : '❌ Erreur',
                    html: `<div style=\"text-align: center;\">
                               <p style=\"font-size: 16px; margin-bottom: 16px; color: \${isSuccess ? '#059669' : '#721c24'};\">
                                   \${isSuccess ? 'Les fichiers ont été importés avec succès.' : message}
                               </p>
                           </div>`,
                    confirmButtonText: 'Fermer',
                    confirmButtonColor: isSuccess ? '#059669' : '#dc2626',
                    background: '#ffffff',
                    color: '#333333',
                    iconColor: isSuccess ? '#059669' : '#dc2626',
                    customClass: {
                        popup: 'custom-swal-popup',
                        title: 'custom-swal-title',
                        htmlContainer: 'custom-swal-html'
                    }
                }).then(() => {
                    // 🔄 Recharge la page après fermeture
                    window.location.reload();
                });

            } catch (err) {
                Swal.close();
                Swal.fire({
                    icon: 'error',
                    title: '🌐 Erreur réseau',
                    text: \"Problème de connexion avec le serveur. Vérifiez votre connexion internet.\",
                    confirmButtonText: 'Réessayer',
                    confirmButtonColor: '#dc2626',
                    background: '#ffffff',
                    color: '#333333',
                    iconColor: '#dc2626'
                });
            }
        });
    </script>
{% endblock %}
", "admin/stock.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/stock.html.twig");
    }
}
