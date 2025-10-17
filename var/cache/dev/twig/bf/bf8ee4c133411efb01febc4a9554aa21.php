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

/* admin/classement.html.twig */
class __TwigTemplate_12356b6c4b51210d5f770c6bfd513fb2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/classement.html.twig"));

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

        yield "Tableau de Bord des Performances";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/classement.css"), "html", null, true);
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
    <!-- Bannière de performances avec données globales calculées -->
    <div class=\"performance-banner\">
        <div class=\"performance-text\">
            <h2 data-i18n=\"performance_overview\">Overview of Performance</h2>
        </div>
        <div class=\"performance-stats\">
            <div class=\"performance-stat\">
                <div class=\"performance-value\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 19, $this->source); })()), "totalRevenue", [], "any", false, false, false, 19), 0, ",", " "), "html", null, true);
        yield " €</div>
                <div class=\"performance-label\" data-i18n=\"total_turnover\">Total turnover</div>
                <div class=\"performance-sublabel\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 21, $this->source); })()), "totalArticlesCount", [], "any", false, false, false, 21), "html", null, true);
        yield " <span data-i18n=\"active_products\">active products</span></div>
            </div>
            <div class=\"performance-stat\">
                <div class=\"performance-value\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 24, $this->source); })()), "totalSales", [], "any", false, false, false, 24), 0, ",", " "), "html", null, true);
        yield "</div>
                <div class=\"performance-label\" data-i18n=\"total_sales\">Total sales</div>
                <div class=\"performance-sublabel\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 26, $this->source); })()), "totalClientsCount", [], "any", false, false, false, 26), "html", null, true);
        yield " <span data-i18n=\"clients\">clients</span></div>
            </div>
        </div>
    </div>

    <div class=\"ranking-container\">
        <!-- Colonne des articles (gauche) -->
        <div class=\"column\">
            <div class=\"section-header\">
                <div>
                    <h2 class=\"section-title\">
                        <i class=\"fas fa-box\"></i>
                        <span data-i18n=\"top_items\">Top Items</span>
                    </h2>
                    <p class=\"section-description\">
                        <span data-i18n=\"average_revenue\">Revenu moyen</span> : ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 41, $this->source); })()), "avgRevenuePerArticle", [], "any", false, false, false, 41), 0, ",", " "), "html", null, true);
        yield " €
                    </p>
                </div>
                <div class=\"section-actions\">
                    <button class=\"filter-btn\" title=\"Filtrer\" data-i18n-title=\"filter\">
                        <i class=\"fas fa-filter\"></i>
                    </button>
                    <button class=\"filter-btn\" title=\"Plus d'options\" data-i18n-title=\"more_options\">
                        <i class=\"fas fa-ellipsis-v\"></i>
                    </button>
                </div>
            </div>

            ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["topArticles"]) || array_key_exists("topArticles", $context) ? $context["topArticles"] : (function () { throw new RuntimeError('Variable "topArticles" does not exist.', 54, $this->source); })())) > 0)) {
            // line 55
            yield "                <ul class=\"ranking-list\">
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topArticles"]) || array_key_exists("topArticles", $context) ? $context["topArticles"] : (function () { throw new RuntimeError('Variable "topArticles" does not exist.', 56, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 57
                yield "                    ";
                $context["articleMarketShare"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 57, $this->source); })()), "totalSales", [], "any", false, false, false, 57) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "sales", [], "any", false, false, false, 57) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 57, $this->source); })()), "totalSales", [], "any", false, false, false, 57)) * 100), 1)) : (0));
                // line 58
                yield "                    ";
                $context["performanceLevel"] = ((((isset($context["articleMarketShare"]) || array_key_exists("articleMarketShare", $context) ? $context["articleMarketShare"] : (function () { throw new RuntimeError('Variable "articleMarketShare" does not exist.', 58, $this->source); })()) >= 20)) ? ("excellent") : (((((isset($context["articleMarketShare"]) || array_key_exists("articleMarketShare", $context) ? $context["articleMarketShare"] : (function () { throw new RuntimeError('Variable "articleMarketShare" does not exist.', 58, $this->source); })()) >= 10)) ? ("good") : ("standard"))));
                // line 59
                yield "                    ";
                $context["globalRank"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["topArticles"]) || array_key_exists("topArticles", $context) ? $context["topArticles"] : (function () { throw new RuntimeError('Variable "topArticles" does not exist.', 59, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 59) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["topArticles"]) || array_key_exists("topArticles", $context) ? $context["topArticles"] : (function () { throw new RuntimeError('Variable "topArticles" does not exist.', 59, $this->source); })()), "getItemNumberPerPage", [], "method", false, false, false, 59)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59));
                // line 60
                yield "
                    <li class=\"ranking-item top-";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["globalRank"]) || array_key_exists("globalRank", $context) ? $context["globalRank"] : (function () { throw new RuntimeError('Variable "globalRank" does not exist.', 61, $this->source); })()), "html", null, true);
                yield " performance-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["performanceLevel"]) || array_key_exists("performanceLevel", $context) ? $context["performanceLevel"] : (function () { throw new RuntimeError('Variable "performanceLevel" does not exist.', 61, $this->source); })()), "html", null, true);
                yield "\">
                        <div class=\"rank\">
                            #";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["globalRank"]) || array_key_exists("globalRank", $context) ? $context["globalRank"] : (function () { throw new RuntimeError('Variable "globalRank" does not exist.', 63, $this->source); })()), "html", null, true);
                yield "
                            ";
                // line 64
                if (((isset($context["globalRank"]) || array_key_exists("globalRank", $context) ? $context["globalRank"] : (function () { throw new RuntimeError('Variable "globalRank" does not exist.', 64, $this->source); })()) == 1)) {
                    // line 65
                    yield "                                <i class=\"fas fa-star rank-star\"></i>
                            ";
                }
                // line 67
                yield "                        </div>
                        <div class=\"item-info\">
                            <div class=\"item-name\">
                                ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 70), "html", null, true);
                yield "
                            </div>
                            <div class=\"item-stats\">
                                <div class=\"stat\">
                                    <i class=\"fas fa-shopping-bag icon\"></i>
                                    <span class=\"stat-value\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "sales", [], "any", false, false, false, 75), 0, ",", " "), "html", null, true);
                yield "</span> <span data-i18n=\"sales\">ventes</span>
                                    <span class=\"stat-percentage\">(";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["articleMarketShare"]) || array_key_exists("articleMarketShare", $context) ? $context["articleMarketShare"] : (function () { throw new RuntimeError('Variable "articleMarketShare" does not exist.', 76, $this->source); })()), "html", null, true);
                yield "% <span data-i18n=\"of_total\">du total</span>)</span>
                                </div>
                                <div class=\"stat\">
                                    <i class=\"fas fa-euro-sign icon\"></i>
                                    <span class=\"stat-value\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "total_revenue", [], "any", false, false, false, 80), 0, ",", " "), "html", null, true);
                yield " €</span>
                                </div>
                            </div>
                            <div class=\"performance-bar\">
                                <div class=\"performance-fill\" style=\"width: ";
                // line 84
                yield ((((isset($context["articleMarketShare"]) || array_key_exists("articleMarketShare", $context) ? $context["articleMarketShare"] : (function () { throw new RuntimeError('Variable "articleMarketShare" does not exist.', 84, $this->source); })()) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["articleMarketShare"]) || array_key_exists("articleMarketShare", $context) ? $context["articleMarketShare"] : (function () { throw new RuntimeError('Variable "articleMarketShare" does not exist.', 84, $this->source); })()), "html", null, true)));
                yield "%\"></div>
                            </div>
                        </div>
                    </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "                </ul>

                ";
            // line 92
            yield "                <div class=\"pagination-container\">
                    <div class=\"pagination-info\">
                        <span data-i18n=\"page\">Page</span> ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topArticles"]) || array_key_exists("topArticles", $context) ? $context["topArticles"] : (function () { throw new RuntimeError('Variable "topArticles" does not exist.', 94, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 94), "html", null, true);
            yield " <span data-i18n=\"of\">sur</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topArticles"]) || array_key_exists("topArticles", $context) ? $context["topArticles"] : (function () { throw new RuntimeError('Variable "topArticles" does not exist.', 94, $this->source); })()), "getPageCount", [], "method", false, false, false, 94), "html", null, true);
            yield "
                        • ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topArticles"]) || array_key_exists("topArticles", $context) ? $context["topArticles"] : (function () { throw new RuntimeError('Variable "topArticles" does not exist.', 95, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 95), "html", null, true);
            yield " <span data-i18n=\"items\">éléments</span>
                    </div>
                    <div class=\"pagination\">
                        ";
            // line 98
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["topArticles"]) || array_key_exists("topArticles", $context) ? $context["topArticles"] : (function () { throw new RuntimeError('Variable "topArticles" does not exist.', 98, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["pageParameterName" => "articles_page", "sortFieldParameterName" => "articles_sort", "sortDirectionParameterName" => "articles_direction", "viewParams" => ["align" => "center", "size" => "small", "style" => "bottom"]]);
            // line 107
            yield "
                    </div>
                </div>
            ";
        } else {
            // line 111
            yield "                <div class=\"empty-state\">
                    <i class=\"fas fa-chart-line\"></i>
                    <p data-i18n=\"no_sales_data\">Aucune donnée de vente disponible</p>
                </div>
            ";
        }
        // line 116
        yield "        </div>

        <!-- Colonne des clients (droite) -->
        <div class=\"column\">
            <div class=\"section-header\">
                <div>
                    <h2 class=\"section-title\">
                        <i class=\"fas fa-users\"></i>
                        <span data-i18n=\"top_clients\">Top Clients</span>
                    </h2>
                    <p class=\"section-description\">
                        <span data-i18n=\"average_spending\">Dépense moyenne</span> : ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 127, $this->source); })()), "avgSpendingPerClient", [], "any", false, false, false, 127), 0, ",", " "), "html", null, true);
        yield " €
                    </p>
                </div>
                <div class=\"section-actions\">
                    <button class=\"filter-btn\" title=\"Filtrer\" data-i18n-title=\"filter\">
                        <i class=\"fas fa-filter\"></i>
                    </button>
                    <button class=\"filter-btn\" title=\"Plus d'options\" data-i18n-title=\"more_options\">
                        <i class=\"fas fa-ellipsis-v\"></i>
                    </button>
                </div>
            </div>

            ";
        // line 140
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 140, $this->source); })())) > 0)) {
            // line 141
            yield "                <ul class=\"ranking-list\">
                    ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 142, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 143
                yield "                    ";
                $context["clientMarketShare"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 143, $this->source); })()), "totalClientSpending", [], "any", false, false, false, 143) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_spent", [], "any", false, false, false, 143) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 143, $this->source); })()), "totalClientSpending", [], "any", false, false, false, 143)) * 100), 1)) : (0));
                // line 144
                yield "                    ";
                $context["loyaltyLevel"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_purchases", [], "any", false, false, false, 144) >= 20)) ? ("premium") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_purchases", [], "any", false, false, false, 144) >= 10)) ? ("gold") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_purchases", [], "any", false, false, false, 144) >= 5)) ? ("silver") : ("standard"))))));
                // line 145
                yield "                    ";
                $context["clientValue"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_spent", [], "any", false, false, false, 145) >= (CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 145, $this->source); })()), "avgSpendingPerClient", [], "any", false, false, false, 145) * 2))) ? ("high") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_spent", [], "any", false, false, false, 145) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalStats"]) || array_key_exists("globalStats", $context) ? $context["globalStats"] : (function () { throw new RuntimeError('Variable "globalStats" does not exist.', 145, $this->source); })()), "avgSpendingPerClient", [], "any", false, false, false, 145))) ? ("medium") : ("low"))));
                // line 146
                yield "                    ";
                $context["globalRank"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 146, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 146) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 146, $this->source); })()), "getItemNumberPerPage", [], "method", false, false, false, 146)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 146));
                // line 147
                yield "
                    <li class=\"ranking-item top-";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["globalRank"]) || array_key_exists("globalRank", $context) ? $context["globalRank"] : (function () { throw new RuntimeError('Variable "globalRank" does not exist.', 148, $this->source); })()), "html", null, true);
                yield " client-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clientValue"]) || array_key_exists("clientValue", $context) ? $context["clientValue"] : (function () { throw new RuntimeError('Variable "clientValue" does not exist.', 148, $this->source); })()), "html", null, true);
                yield "\">
                        <div class=\"rank\">
                            #";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["globalRank"]) || array_key_exists("globalRank", $context) ? $context["globalRank"] : (function () { throw new RuntimeError('Variable "globalRank" does not exist.', 150, $this->source); })()), "html", null, true);
                yield "
                            ";
                // line 151
                if (((isset($context["globalRank"]) || array_key_exists("globalRank", $context) ? $context["globalRank"] : (function () { throw new RuntimeError('Variable "globalRank" does not exist.', 151, $this->source); })()) == 1)) {
                    // line 152
                    yield "                                <i class=\"fas fa-crown rank-crown\"></i>
                            ";
                }
                // line 154
                yield "                        </div>
                        <div class=\"item-info\">
                            <div class=\"item-name\">
                                ";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client_name", [], "any", false, false, false, 157), "html", null, true);
                yield "
                            </div>
                            <div class=\"item-stats\">
                                <div class=\"stat\">
                                    <i class=\"fas fa-shopping-cart icon\"></i>
                                    <span class=\"stat-value\">";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_purchases", [], "any", false, false, false, 162), 0, ",", " "), "html", null, true);
                yield "</span> <span data-i18n=\"purchases\">achats</span>
                                    <span class=\"stat-percentage\">(";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clientMarketShare"]) || array_key_exists("clientMarketShare", $context) ? $context["clientMarketShare"] : (function () { throw new RuntimeError('Variable "clientMarketShare" does not exist.', 163, $this->source); })()), "html", null, true);
                yield "% <span data-i18n=\"of_revenue\">du chiffre d'affaires</span>)</span>
                                </div>
                                <div class=\"stat\">
                                    <i class=\"fas fa-euro-sign icon\"></i>
                                    <span class=\"stat-value\">";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_spent", [], "any", false, false, false, 167), 0, ",", " "), "html", null, true);
                yield " €</span>
                                </div>
                            </div>
                            <div class=\"performance-bar\">
                                <div class=\"performance-fill client-";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clientValue"]) || array_key_exists("clientValue", $context) ? $context["clientValue"] : (function () { throw new RuntimeError('Variable "clientValue" does not exist.', 171, $this->source); })()), "html", null, true);
                yield "\" style=\"width: ";
                yield ((((isset($context["clientMarketShare"]) || array_key_exists("clientMarketShare", $context) ? $context["clientMarketShare"] : (function () { throw new RuntimeError('Variable "clientMarketShare" does not exist.', 171, $this->source); })()) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clientMarketShare"]) || array_key_exists("clientMarketShare", $context) ? $context["clientMarketShare"] : (function () { throw new RuntimeError('Variable "clientMarketShare" does not exist.', 171, $this->source); })()), "html", null, true)));
                yield "%\"></div>
                            </div>
                        </div>
                    </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "                </ul>

                ";
            // line 179
            yield "                <div class=\"pagination-container\">
                    <div class=\"pagination-info\">
                        <span data-i18n=\"page\">Page</span> ";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 181, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 181), "html", null, true);
            yield " <span data-i18n=\"of\">sur</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 181, $this->source); })()), "getPageCount", [], "method", false, false, false, 181), "html", null, true);
            yield "
                        • ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 182, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 182), "html", null, true);
            yield " <span data-i18n=\"items\">éléments</span>
                    </div>
                    <div class=\"pagination\">
                        ";
            // line 185
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["topClients"]) || array_key_exists("topClients", $context) ? $context["topClients"] : (function () { throw new RuntimeError('Variable "topClients" does not exist.', 185, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["pageParameterName" => "clients_page", "sortFieldParameterName" => "clients_sort", "sortDirectionParameterName" => "clients_direction", "viewParams" => ["align" => "center", "size" => "small", "style" => "bottom"]]);
            // line 194
            yield "
                    </div>
                </div>
            ";
        } else {
            // line 198
            yield "                <div class=\"empty-state\">
                    <i class=\"fas fa-users\"></i>
                    <p data-i18n=\"no_clients_found\">Aucun client trouvé</p>
                </div>
            ";
        }
        // line 203
        yield "        </div>
    </div>
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
        return "admin/classement.html.twig";
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
        return array (  477 => 203,  470 => 198,  464 => 194,  462 => 185,  456 => 182,  450 => 181,  446 => 179,  442 => 176,  421 => 171,  414 => 167,  407 => 163,  403 => 162,  395 => 157,  390 => 154,  386 => 152,  384 => 151,  380 => 150,  373 => 148,  370 => 147,  367 => 146,  364 => 145,  361 => 144,  358 => 143,  341 => 142,  338 => 141,  336 => 140,  320 => 127,  307 => 116,  300 => 111,  294 => 107,  292 => 98,  286 => 95,  280 => 94,  276 => 92,  272 => 89,  253 => 84,  246 => 80,  239 => 76,  235 => 75,  227 => 70,  222 => 67,  218 => 65,  216 => 64,  212 => 63,  205 => 61,  202 => 60,  199 => 59,  196 => 58,  193 => 57,  176 => 56,  173 => 55,  171 => 54,  155 => 41,  137 => 26,  132 => 24,  126 => 21,  121 => 19,  111 => 11,  101 => 10,  91 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/baseAdmin.html.twig' %}

{% block title %}Tableau de Bord des Performances{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/classement.css') }}\">
{% endblock %}

{% block content %}
<div class=\"modern-dashboard\">
    <!-- Bannière de performances avec données globales calculées -->
    <div class=\"performance-banner\">
        <div class=\"performance-text\">
            <h2 data-i18n=\"performance_overview\">Overview of Performance</h2>
        </div>
        <div class=\"performance-stats\">
            <div class=\"performance-stat\">
                <div class=\"performance-value\">{{ globalStats.totalRevenue|number_format(0, ',', ' ') }} €</div>
                <div class=\"performance-label\" data-i18n=\"total_turnover\">Total turnover</div>
                <div class=\"performance-sublabel\">{{ globalStats.totalArticlesCount }} <span data-i18n=\"active_products\">active products</span></div>
            </div>
            <div class=\"performance-stat\">
                <div class=\"performance-value\">{{ globalStats.totalSales|number_format(0, ',', ' ') }}</div>
                <div class=\"performance-label\" data-i18n=\"total_sales\">Total sales</div>
                <div class=\"performance-sublabel\">{{ globalStats.totalClientsCount }} <span data-i18n=\"clients\">clients</span></div>
            </div>
        </div>
    </div>

    <div class=\"ranking-container\">
        <!-- Colonne des articles (gauche) -->
        <div class=\"column\">
            <div class=\"section-header\">
                <div>
                    <h2 class=\"section-title\">
                        <i class=\"fas fa-box\"></i>
                        <span data-i18n=\"top_items\">Top Items</span>
                    </h2>
                    <p class=\"section-description\">
                        <span data-i18n=\"average_revenue\">Revenu moyen</span> : {{ globalStats.avgRevenuePerArticle|number_format(0, ',', ' ') }} €
                    </p>
                </div>
                <div class=\"section-actions\">
                    <button class=\"filter-btn\" title=\"Filtrer\" data-i18n-title=\"filter\">
                        <i class=\"fas fa-filter\"></i>
                    </button>
                    <button class=\"filter-btn\" title=\"Plus d'options\" data-i18n-title=\"more_options\">
                        <i class=\"fas fa-ellipsis-v\"></i>
                    </button>
                </div>
            </div>

            {% if topArticles|length > 0 %}
                <ul class=\"ranking-list\">
                    {% for article in topArticles %}
                    {% set articleMarketShare = globalStats.totalSales > 0 ? (article.sales / globalStats.totalSales * 100)|round(1) : 0 %}
                    {% set performanceLevel = articleMarketShare >= 20 ? 'excellent' : (articleMarketShare >= 10 ? 'good' : 'standard') %}
                    {% set globalRank = (topArticles.getCurrentPageNumber() - 1) * topArticles.getItemNumberPerPage() + loop.index %}

                    <li class=\"ranking-item top-{{ globalRank }} performance-{{ performanceLevel }}\">
                        <div class=\"rank\">
                            #{{ globalRank }}
                            {% if globalRank == 1 %}
                                <i class=\"fas fa-star rank-star\"></i>
                            {% endif %}
                        </div>
                        <div class=\"item-info\">
                            <div class=\"item-name\">
                                {{ article.name }}
                            </div>
                            <div class=\"item-stats\">
                                <div class=\"stat\">
                                    <i class=\"fas fa-shopping-bag icon\"></i>
                                    <span class=\"stat-value\">{{ article.sales|number_format(0, ',', ' ') }}</span> <span data-i18n=\"sales\">ventes</span>
                                    <span class=\"stat-percentage\">({{ articleMarketShare }}% <span data-i18n=\"of_total\">du total</span>)</span>
                                </div>
                                <div class=\"stat\">
                                    <i class=\"fas fa-euro-sign icon\"></i>
                                    <span class=\"stat-value\">{{ article.total_revenue|number_format(0, ',', ' ') }} €</span>
                                </div>
                            </div>
                            <div class=\"performance-bar\">
                                <div class=\"performance-fill\" style=\"width: {{ articleMarketShare > 100 ? 100 : articleMarketShare }}%\"></div>
                            </div>
                        </div>
                    </li>
                    {% endfor %}
                </ul>

                {# Pagination pour les articles #}
                <div class=\"pagination-container\">
                    <div class=\"pagination-info\">
                        <span data-i18n=\"page\">Page</span> {{ topArticles.getCurrentPageNumber() }} <span data-i18n=\"of\">sur</span> {{ topArticles.getPageCount() }}
                        • {{ topArticles.getTotalItemCount() }} <span data-i18n=\"items\">éléments</span>
                    </div>
                    <div class=\"pagination\">
                        {{ knp_pagination_render(topArticles, '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig', {}, {
                            'pageParameterName': 'articles_page',
                            'sortFieldParameterName': 'articles_sort',
                            'sortDirectionParameterName': 'articles_direction',
                            'viewParams': {
                                'align': 'center',
                                'size': 'small',
                                'style': 'bottom'
                            }
                        }) }}
                    </div>
                </div>
            {% else %}
                <div class=\"empty-state\">
                    <i class=\"fas fa-chart-line\"></i>
                    <p data-i18n=\"no_sales_data\">Aucune donnée de vente disponible</p>
                </div>
            {% endif %}
        </div>

        <!-- Colonne des clients (droite) -->
        <div class=\"column\">
            <div class=\"section-header\">
                <div>
                    <h2 class=\"section-title\">
                        <i class=\"fas fa-users\"></i>
                        <span data-i18n=\"top_clients\">Top Clients</span>
                    </h2>
                    <p class=\"section-description\">
                        <span data-i18n=\"average_spending\">Dépense moyenne</span> : {{ globalStats.avgSpendingPerClient|number_format(0, ',', ' ') }} €
                    </p>
                </div>
                <div class=\"section-actions\">
                    <button class=\"filter-btn\" title=\"Filtrer\" data-i18n-title=\"filter\">
                        <i class=\"fas fa-filter\"></i>
                    </button>
                    <button class=\"filter-btn\" title=\"Plus d'options\" data-i18n-title=\"more_options\">
                        <i class=\"fas fa-ellipsis-v\"></i>
                    </button>
                </div>
            </div>

            {% if topClients|length > 0 %}
                <ul class=\"ranking-list\">
                    {% for client in topClients %}
                    {% set clientMarketShare = globalStats.totalClientSpending > 0 ? (client.total_spent / globalStats.totalClientSpending * 100)|round(1) : 0 %}
                    {% set loyaltyLevel = client.total_purchases >= 20 ? 'premium' : (client.total_purchases >= 10 ? 'gold' : (client.total_purchases >= 5 ? 'silver' : 'standard')) %}
                    {% set clientValue = client.total_spent >= globalStats.avgSpendingPerClient * 2 ? 'high' : (client.total_spent >= globalStats.avgSpendingPerClient ? 'medium' : 'low') %}
                    {% set globalRank = (topClients.getCurrentPageNumber() - 1) * topClients.getItemNumberPerPage() + loop.index %}

                    <li class=\"ranking-item top-{{ globalRank }} client-{{ clientValue }}\">
                        <div class=\"rank\">
                            #{{ globalRank }}
                            {% if globalRank == 1 %}
                                <i class=\"fas fa-crown rank-crown\"></i>
                            {% endif %}
                        </div>
                        <div class=\"item-info\">
                            <div class=\"item-name\">
                                {{ client.client_name }}
                            </div>
                            <div class=\"item-stats\">
                                <div class=\"stat\">
                                    <i class=\"fas fa-shopping-cart icon\"></i>
                                    <span class=\"stat-value\">{{ client.total_purchases|number_format(0, ',', ' ') }}</span> <span data-i18n=\"purchases\">achats</span>
                                    <span class=\"stat-percentage\">({{ clientMarketShare }}% <span data-i18n=\"of_revenue\">du chiffre d'affaires</span>)</span>
                                </div>
                                <div class=\"stat\">
                                    <i class=\"fas fa-euro-sign icon\"></i>
                                    <span class=\"stat-value\">{{ client.total_spent|number_format(0, ',', ' ') }} €</span>
                                </div>
                            </div>
                            <div class=\"performance-bar\">
                                <div class=\"performance-fill client-{{ clientValue }}\" style=\"width: {{ clientMarketShare > 100 ? 100 : clientMarketShare }}%\"></div>
                            </div>
                        </div>
                    </li>
                    {% endfor %}
                </ul>

                {# Pagination pour les clients #}
                <div class=\"pagination-container\">
                    <div class=\"pagination-info\">
                        <span data-i18n=\"page\">Page</span> {{ topClients.getCurrentPageNumber() }} <span data-i18n=\"of\">sur</span> {{ topClients.getPageCount() }}
                        • {{ topClients.getTotalItemCount() }} <span data-i18n=\"items\">éléments</span>
                    </div>
                    <div class=\"pagination\">
                        {{ knp_pagination_render(topClients, '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig', {}, {
                            'pageParameterName': 'clients_page',
                            'sortFieldParameterName': 'clients_sort',
                            'sortDirectionParameterName': 'clients_direction',
                            'viewParams': {
                                'align': 'center',
                                'size': 'small',
                                'style': 'bottom'
                            }
                        }) }}
                    </div>
                </div>
            {% else %}
                <div class=\"empty-state\">
                    <i class=\"fas fa-users\"></i>
                    <p data-i18n=\"no_clients_found\">Aucun client trouvé</p>
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "admin/classement.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/classement.html.twig");
    }
}
