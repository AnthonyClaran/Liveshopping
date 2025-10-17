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

/* admin/promotion.html.twig */
class __TwigTemplate_fb7c8c8138ac597de12febd7ce0df355 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promotion.html.twig"));

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

        yield "Gestion des articles";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/articles.css"), "html", null, true);
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
        yield "    <div class=\"promotion-container\">
        <div class=\"promotion-header\">
            <h2 data-i18n=\"article_management\">Gestion des articles</h2>
            <form method=\"get\" class=\"promotion-filters\">
                <label for=\"categoryFilter\"><span data-i18n=\"category\">Catégorie</span>
                    <button type=\"button\" class=\"add-category-inline\" title=\"Ajouter une nouvelle catégorie\" aria-label=\"Ajouter une nouvelle catégorie\" data-i18n-title=\"add_new_category\">+</button>
                </label>
                <select id=\"categoryFilter\" name=\"category_id\" class=\"promotion-select\">
                    <option value=\"\"><span data-i18n=\"all\">Toutes</span></option>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 21
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\" ";
            yield ((((isset($context["category_id"]) || array_key_exists("category_id", $context) ? $context["category_id"] : (function () { throw new RuntimeError('Variable "category_id" does not exist.', 21, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 21))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nameCategory", [], "any", false, false, false, 21), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "                </select>
                <script>
                    // Ouvre la modale d'ajout catégorie si elle existe dans la page
                    document.addEventListener('DOMContentLoaded', function(){
                        const inlineAddBtn = document.querySelector('.add-category-inline');
                        const categoryModal = document.getElementById('categoryModal');
                        if (inlineAddBtn && categoryModal) {
                            inlineAddBtn.addEventListener('click', function(e){
                                e.preventDefault();
                                categoryModal.style.display = 'flex';
                                document.body.style.overflow = 'hidden';
                            });
                        }
                    });
                </script>
                <button type=\"submit\" class=\"modern-button\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                        <path d=\"M21 21L16.65 16.65\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    <span data-i18n=\"apply\">Appliquer</span>
                </button>
            </form>
        </div>

        ";
        // line 49
        yield "        <div class=\"products-grid\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            yield "                        ";
            $context["defaultImage"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 51)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/robe.jpg")));
            // line 52
            yield "                ";
            $context["totalQty"] = 0;
            // line 53
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "sizes", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["sz"]) {
                // line 54
                yield "                    ";
                $context["totalQty"] = ((isset($context["totalQty"]) || array_key_exists("totalQty", $context) ? $context["totalQty"] : (function () { throw new RuntimeError('Variable "totalQty" does not exist.', 54, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["sz"], "qty_available", [], "any", false, false, false, 54));
                // line 55
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sz'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "
                <div class=\"product-card\" data-item-id=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_id", [], "any", false, false, false, 57), "html", null, true);
            yield "\">
                    <div class=\"product-image\">
                        <img src=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["defaultImage"]) || array_key_exists("defaultImage", $context) ? $context["defaultImage"] : (function () { throw new RuntimeError('Variable "defaultImage" does not exist.', 59, $this->source); })()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_name", [], "any", false, false, false, 59), "html", null, true);
            yield "\" class=\"main-product-image clickable-image\"
                             data-product-name=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_name", [], "any", false, false, false, 60), "html", null, true);
            yield "\" />
                        <div class=\"product-badge\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>
                        <div class=\"promotion-badge promo-btn\"
                             data-item-id=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_id", [], "any", false, false, false, 63), "html", null, true);
            yield "\"
                             data-item-name=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_name", [], "any", false, false, false, 64), "html", null, true);
            yield "\"
                             data-original-price=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_price", [], "any", false, false, false, 65), "html", null, true);
            yield "\"
                             ";
            // line 66
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-promotion-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
                yield "\"";
            }
            yield ">
                            ";
            // line 67
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "                                <span class=\"promotion-percentage\">-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 68), "percentage", [], "any", false, false, false, 68), "html", null, true);
                yield "%</span>
                            ";
            } else {
                // line 70
                yield "                                <span class=\"promo-text\" data-i18n=\"promo\">Promo</span>
                            ";
            }
            // line 72
            yield "                        </div>
                        <button type=\"button\" class=\"edit-item-btn\" title=\"Edit item\" data-item-id=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_id", [], "any", false, false, false, 73), "html", null, true);
            yield "\" data-item-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_name", [], "any", false, false, false, 73), "html", null, true);
            yield "\" data-item-price=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_price", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_price", [], "any", false, false, false, 73), 0)) : (0)), "html", null, true);
            yield "\" data-item-description=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_description", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_description", [], "any", false, false, false, 73), "")) : ("")), "html", null, true);
            yield "\" aria-label=\"Edit\">
                            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M12 20h9\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                <path d=\"M16.5 3.5a2.121 2.121 0 0 1 3 3L8 18l-4 1 1-4 11.5-11.5z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                            </svg>
                        </button>
                    </div>

                    <div class=\"product-info\">
                        <h3 class=\"product-title\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_name", [], "any", false, false, false, 82), "html", null, true);
            yield "</h3>
                        ";
            // line 83
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_description", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 84
                yield "                            ";
                $context["_desc"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_description", [], "any", false, false, false, 84);
                // line 85
                yield "                            <p class=\"product-description\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_desc"]) || array_key_exists("_desc", $context) ? $context["_desc"] : (function () { throw new RuntimeError('Variable "_desc" does not exist.', 85, $this->source); })()), "html", null, true);
                yield "\">
                                ";
                // line 86
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["_desc"]) || array_key_exists("_desc", $context) ? $context["_desc"] : (function () { throw new RuntimeError('Variable "_desc" does not exist.', 86, $this->source); })())) > 90)) {
                    // line 87
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["_desc"]) || array_key_exists("_desc", $context) ? $context["_desc"] : (function () { throw new RuntimeError('Variable "_desc" does not exist.', 87, $this->source); })()), 0, 90) . "…"), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 89
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_desc"]) || array_key_exists("_desc", $context) ? $context["_desc"] : (function () { throw new RuntimeError('Variable "_desc" does not exist.', 89, $this->source); })()), "html", null, true);
                    yield "
                                ";
                }
                // line 91
                yield "                            </p>
                        ";
            }
            // line 93
            yield "
                        <div class=\"product-meta\">
                            <div class=\"pricing-info\">
                                ";
            // line 96
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "                                    <div class=\"price-row\">
                                        <span class=\"original-price\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_price", [], "any", false, false, false, 98), 2, ",", " "), "html", null, true);
                yield " €</span>
                                        <span class=\"promo-price\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 99), "promo_price", [], "any", false, false, false, 99), 2, ",", " "), "html", null, true);
                yield " €</span>
                                    </div>
                                    <div class=\"promo-end-date\">
                                        <span data-i18n=\"until\">Jusqu'au</span> ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 102), "end_date", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
                yield "
                                    </div>
                                ";
            } else {
                // line 105
                yield "                                    <div class=\"normal-price\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_price", [], "any", false, false, false, 105), 2, ",", " "), "html", null, true);
                yield " €</div>
                                ";
            }
            // line 107
            yield "                            </div>

                            <div class=\"stock-info\">
                                <span class=\"stock-label\" data-i18n=\"stock\">Stock:</span>
                                <span class=\"stock-value ";
            // line 111
            yield ((((isset($context["totalQty"]) || array_key_exists("totalQty", $context) ? $context["totalQty"] : (function () { throw new RuntimeError('Variable "totalQty" does not exist.', 111, $this->source); })()) > 10)) ? ("in-stock") : (((((isset($context["totalQty"]) || array_key_exists("totalQty", $context) ? $context["totalQty"] : (function () { throw new RuntimeError('Variable "totalQty" does not exist.', 111, $this->source); })()) > 0)) ? ("low-stock") : ("out-of-stock"))));
            yield "\">
                                    ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalQty"]) || array_key_exists("totalQty", $context) ? $context["totalQty"] : (function () { throw new RuntimeError('Variable "totalQty" does not exist.', 112, $this->source); })()), 0, ",", " "), "html", null, true);
            yield " <span data-i18n=\"units\">unités</span>
                                </span>
                            </div>
                        </div>

                        <div class=\"product-variants\">
                            <div class=\"sizes-section\">
                                <span class=\"section-label\" data-i18n=\"sizes\">Tailles:</span>
                                <div class=\"sizes-list\">
                                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "sizes", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["sz"]) {
                // line 122
                yield "                                        <span class=\"size-tag\" title=\"Quantité: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sz"], "qty_available", [], "any", false, false, false, 122), "html", null, true);
                yield "\">
                                            ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sz"], "size_value", [], "any", false, false, false, 123), "html", null, true);
                yield "
                                        </span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sz'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "                                </div>
                            </div>

                             <div class=\"colors-section\">
                                 <span class=\"section-label\" data-i18n=\"colors\">Couleurs:</span>
                                 <div class=\"colors-list\">
                                     ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "colors", [], "any", false, false, false, 132));
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
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 133
                yield "                                         ";
                $context["img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "color_image", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["c"], "color_image", [], "any", false, false, false, 133)))) : ((isset($context["defaultImage"]) || array_key_exists("defaultImage", $context) ? $context["defaultImage"] : (function () { throw new RuntimeError('Variable "defaultImage" does not exist.', 133, $this->source); })())));
                // line 134
                yield "                                         <div class=\"color-item ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield "\"
                                              title=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "color_name", [], "any", false, false, false, 135), "html", null, true);
                yield " - Qté: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "qty_total", [], "any", false, false, false, 135), 0, ",", " "), "html", null, true);
                yield "\"
                                              data-color-image=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 136, $this->source); })()), "html", null, true);
                yield "\"
                                              data-color-name=\"";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "color_name", [], "any", false, false, false, 137), "html", null, true);
                yield "\">
                                             <img src=\"";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 138, $this->source); })()), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "color_name", [], "any", false, false, false, 138), "html", null, true);
                yield "\" />
                                         </div>
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
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            yield "                                 </div>
                             </div>
                        </div>
                    </div>


                </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 148
        if (!$context['_iterated']) {
            // line 149
            yield "                <div class=\"no-products\">
                    <div class=\"no-products-icon\">📦</div>
                    <h3 data-i18n=\"no_articles_available\">Aucun article disponible</h3>
                    <p data-i18n=\"no_products_found\">Aucun produit trouvé pour les critères sélectionnés.</p>
                </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "
            ";
        // line 157
        yield "            <div class=\"product-card add-item-card\" title=\"Ajouter un article\" data-i18n-title=\"add_article\">
                <button type=\"button\" class=\"add-item-trigger\" aria-label=\"Ajouter un article\" data-i18n-aria-label=\"add_article\">
                    <div class=\"add-item-content\">
                        <div class=\"add-item-plus\">+</div>
                        <div class=\"add-item-text\" data-i18n=\"add_article\">Ajouter un article</div>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Modal pour afficher l'image en grand -->
    <div id=\"imageModal\" class=\"image-modal\">
        <div class=\"modal-content\">
            <span class=\"modal-close\">&times;</span>
            <img id=\"modalImage\" src=\"\" alt=\"\" />
            <div class=\"modal-caption\"></div>
        </div>
    </div>

    <!-- Modal pour créer/modifier une promotion -->
    <div id=\"promotionModal\" class=\"promotion-modal\">
        <div class=\"promotion-modal-content\">
            <div class=\"modal-header\">
                <h3 id=\"promotionModalTitle\" data-i18n=\"add_promotion\">Ajouter une promotion</h3>
                <span class=\"modal-close\">&times;</span>
            </div>

            <form id=\"promotionForm\" class=\"promotion-form\">
                <input type=\"hidden\" id=\"promotionItemId\" name=\"item_id\" />
                <input type=\"hidden\" id=\"promotionId\" name=\"promotion_id\" />

                <div class=\"form-group\">
                    <label for=\"promotionName\" data-i18n=\"promotion_name\">Nom de la promotion</label>
                    <input type=\"text\" id=\"promotionName\" name=\"name\" placeholder=\"Ex: Soldes d'été\" data-i18n-placeholder=\"promotion_name_example\" required />
                </div>

                <div class=\"form-group\">
                    <label for=\"promotionPercentage\" data-i18n=\"discount_percentage\">Pourcentage de réduction</label>
                    <div class=\"percentage-input\">
                        <input type=\"number\" id=\"promotionPercentage\" name=\"percentage\"
                               min=\"1\" max=\"99\" step=\"1\" placeholder=\"10\" required />
                        <span class=\"percentage-symbol\">%</span>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"promotionDescription\" data-i18n=\"description_optional\">Description (optionnel)</label>
                    <textarea id=\"promotionDescription\" name=\"description\"
                              placeholder=\"Description de la promotion...\" data-i18n-placeholder=\"promotion_description\" rows=\"3\"></textarea>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"promotionStartDate\" data-i18n=\"start_date\">Date de début</label>
                        <input type=\"date\" id=\"promotionStartDate\" name=\"start_date\" required />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"promotionEndDate\" data-i18n=\"end_date\">Date de fin</label>
                        <input type=\"date\" id=\"promotionEndDate\" name=\"end_date\" />
                    </div>
                </div>

                <div class=\"price-preview\">
                    <div class=\"current-price\">
                        <span class=\"price-label\" data-i18n=\"current_price\">Prix actuel:</span>
                        <span id=\"currentPriceDisplay\">0,00 €</span>
                    </div>
                    <div class=\"new-price\">
                        <span class=\"price-label\" data-i18n=\"new_price\">Nouveau prix:</span>
                        <span id=\"newPriceDisplay\">0,00 €</span>
                    </div>
                </div>

                <div class=\"modal-actions\">
                    <button type=\"button\" class=\"btn-cancel\" data-i18n=\"cancel\">Annuler</button>
                    <button type=\"submit\" class=\"btn-save\" data-i18n=\"save\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal d'édition rapide d'article (name + price) -->
    <div id=\"editItemModal\" class=\"promotion-modal\" style=\"display:none;\">
        <div class=\"promotion-modal-content\">
            <div class=\"modal-header\">
                <h3 id=\"editItemModalTitle\" data-i18n=\"edit_item\">Edit item</h3>
                <span class=\"modal-close\" aria-label=\"Close\">&times;</span>
            </div>

            <form id=\"editItemForm\" class=\"promotion-form\">
                <input type=\"hidden\" id=\"editItemId\" name=\"item_id\" />
                <div class=\"form-group\">
                    <label for=\"editItemName\" data-i18n=\"name\">Name</label>
                    <input type=\"text\" id=\"editItemName\" name=\"name\" placeholder=\"Item name\" data-i18n-placeholder=\"item_name\" required />
                </div>
                <div class=\"form-group\">
                    <label for=\"editItemPrice\" data-i18n=\"price\">Price</label>
                    <input type=\"number\" step=\"0.01\" min=\"0\" id=\"editItemPrice\" name=\"price\" placeholder=\"0.00\" required />
                </div>
                <div class=\"form-group\">
                    <label for=\"editItemDescription\" data-i18n=\"description\">Description</label>
                    <textarea id=\"editItemDescription\" name=\"description\" rows=\"3\" placeholder=\"Item description (optional)\" data-i18n-placeholder=\"item_description_optional\"></textarea>
                </div>
                <div class=\"modal-actions\">
                    <button type=\"button\" class=\"btn-cancel\" data-i18n=\"cancel\">Cancel</button>
                    <button type=\"submit\" class=\"btn-save\" data-i18n=\"save\">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal pour créer une nouvelle catégorie -->
    <div id=\"categoryModal\" class=\"promotion-modal\" style=\"display:none;\">
        <div class=\"promotion-modal-content\">
            <div class=\"modal-header\">
                <h3 data-i18n=\"add_new_category\">Ajouter une nouvelle catégorie</h3>
                <span class=\"modal-close\" aria-label=\"Fermer\">&times;</span>
            </div>

            <form id=\"categoryForm\" class=\"promotion-form\">
                <div class=\"form-group\">
                    <label for=\"categoryName\" data-i18n=\"category_name\">Nom de la catégorie</label>
                    <input type=\"text\" id=\"categoryName\" name=\"name\" placeholder=\"Ex: Vêtements, Chaussures, Accessoires\" data-i18n-placeholder=\"category_name_example\" required />
                </div>

                <div class=\"form-group\">
                    <label for=\"categoryDescription\" data-i18n=\"description_optional\">Description (optionnel)</label>
                    <textarea id=\"categoryDescription\" name=\"description\" placeholder=\"Description de la catégorie...\" data-i18n-placeholder=\"category_description\" rows=\"3\"></textarea>
                </div>

                <div class=\"modal-actions\">
                    <button type=\"button\" class=\"btn-cancel\" aria-label=\"Annuler\" data-i18n=\"cancel\" data-i18n-aria-label=\"cancel\">Annuler</button>
                    <button type=\"submit\" class=\"btn-save\" aria-label=\"Créer\" data-i18n=\"create\" data-i18n-aria-label=\"create\">Créer</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal pour créer un nouvel article -->
    <div id=\"itemModal\" class=\"promotion-modal\" style=\"display:none;\">
        <div class=\"promotion-modal-content\">
            <div class=\"modal-header\">
                <h3>Ajouter un nouvel article</h3>
                <span class=\"modal-close\" aria-label=\"Fermer\">&times;</span>
            </div>

            <form id=\"itemForm\" class=\"promotion-form\">
                <div class=\"form-group\">
                    <label for=\"itemName\">Nom de l'article</label>
                    <input type=\"text\" id=\"itemName\" name=\"name\" placeholder=\"Ex: T-shirt en coton\" required />
                </div>

                <div class=\"form-group\">
                    <label for=\"itemCategory\">Catégorie</label>
                    <select id=\"itemCategory\" name=\"category_id\" required>
                        <option value=\"\">Sélectionnez une catégorie</option>
                        ";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 315, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 316
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 316), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nameCategory", [], "any", false, false, false, 316), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        yield "                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"itemPrice\">Prix (€)</label>
                    <input type=\"number\" step=\"0.01\" min=\"0\" id=\"itemPrice\" name=\"price\" placeholder=\"0.00\" required />
                </div>

                <div class=\"form-group\">
                    <label for=\"itemDescription\">Description (optionnel)</label>
                    <textarea id=\"itemDescription\" name=\"description\" placeholder=\"Description de l'article...\" rows=\"3\"></textarea>
                </div>

                <div class=\"modal-actions\">
                    <button type=\"button\" class=\"btn-cancel\" aria-label=\"Annuler\">Annuler</button>
                    <button type=\"submit\" class=\"btn-save\" aria-label=\"Créer\">Créer</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gérer le changement d'image principale en cliquant sur une couleur
            document.querySelectorAll('.color-item').forEach(function(colorItem) {
                colorItem.addEventListener('click', function() {
                    const productCard = this.closest('.product-card');
                    const mainImage = productCard.querySelector('.main-product-image');
                    const colorImage = this.getAttribute('data-color-image');
                    const colorName = this.getAttribute('data-color-name');

                    // Changer l'image principale
                    if (mainImage && colorImage) {
                        mainImage.src = colorImage;
                        mainImage.alt = colorName;

                        // Mettre à jour la classe active
                        const colorItems = productCard.querySelectorAll('.color-item');
                        colorItems.forEach(item => item.classList.remove('active'));
                        this.classList.add('active');
                    }
                });
            });

            // Gérer l'affichage de l'image en grand (modal)
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const modalCaption = document.querySelector('.modal-caption');
            const closeBtn = document.querySelector('.modal-close');

            // Ouvrir la modal en cliquant sur l'image principale
            document.querySelectorAll('.clickable-image').forEach(function(img) {
                img.addEventListener('click', function() {
                    modal.style.display = 'flex';
                    modalImg.src = this.src;
                    modalImg.alt = this.alt;
                    modalCaption.textContent = this.getAttribute('data-product-name');
                    document.body.style.overflow = 'hidden'; // Empêcher le scroll
                });
            });

            // Fermer la modal
            function closeModal() {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto'; // Restaurer le scroll
            }

            closeBtn.addEventListener('click', closeModal);

            // Fermer en cliquant à l'extérieur de l'image
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Fermer avec la touche Échap
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.style.display === 'flex') {
                    closeModal();
                }
            });

            // ===== Modal Catégorie =====
            const categoryModal = document.getElementById('categoryModal');
            const categoryForm = document.getElementById('categoryForm');
            const addCategoryInlineBtn = document.querySelector('.add-category-inline');
            const categoryCloseBtn = categoryModal ? categoryModal.querySelector('.modal-close') : null;
            const categoryCancelBtn = categoryModal ? categoryModal.querySelector('.btn-cancel') : null;

            function openCategoryModal() {
                if (!categoryModal) return;
                // reset
                categoryForm.reset();
                const existingMessage = categoryModal.querySelector('.form-message');
                if (existingMessage) existingMessage.remove();
                categoryModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function closeCategoryModal() {
                if (!categoryModal) return;
                categoryModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            if (addCategoryInlineBtn) {
                addCategoryInlineBtn.addEventListener('click', function(e){
                    e.preventDefault();
                    openCategoryModal();
                });
            }
            if (categoryCloseBtn) categoryCloseBtn.addEventListener('click', closeCategoryModal);
            if (categoryCancelBtn) categoryCancelBtn.addEventListener('click', closeCategoryModal);
            if (categoryModal) {
                categoryModal.addEventListener('click', function(e){
                    if (e.target === categoryModal) closeCategoryModal();
                });
            }
            document.addEventListener('keydown', function(e){
                if (e.key === 'Escape') {
                    if (categoryModal && categoryModal.style.display === 'flex') {
                        closeCategoryModal();
                    }
                    if (itemModal && itemModal.style.display === 'flex') {
                        closeItemModal();
                    }
                }
            });

            function showCategoryMessage(type, message) {
                if (!categoryModal) return;
                const existing = categoryModal.querySelector('.form-message');
                if (existing) existing.remove();
                const msg = document.createElement('div');
                msg.className = `form-message \${type}`;
                msg.textContent = message;
                msg.style.display = 'block';
                const actions = categoryModal.querySelector('.modal-actions');
                actions.parentNode.insertBefore(msg, actions);
                setTimeout(()=>{ if (msg.parentNode) msg.remove(); }, 5000);
            }

            if (categoryForm) {
                categoryForm.addEventListener('submit', function(e){
                    e.preventDefault();
                    const formData = new FormData(categoryForm);
                    const data = Object.fromEntries(formData.entries());

                    const submitBtn = categoryForm.querySelector('.btn-save');
                    const originalText = submitBtn.textContent;
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Création...';

                    fetch('/promotion/category/create', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                        body: JSON.stringify({ name: data.name, description: data.description || null })
                    })
                    .then(r => r.json())
                    .then(result => {
                        if (result.success) {
                            showCategoryMessage('success', result.message);
                            setTimeout(()=>{ window.location.reload(); }, 1200);
                        } else {
                            showCategoryMessage('error', result.message || 'Erreur lors de la création');
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        showCategoryMessage('error', 'Erreur de connexion.');
                    })
                    .finally(()=>{
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }

            // ===== Modal Item =====
            const itemModal = document.getElementById('itemModal');
            const itemForm = document.getElementById('itemForm');
            const addItemBtn = document.querySelector('.add-item-trigger');
            const itemCloseBtn = itemModal ? itemModal.querySelector('.modal-close') : null;
            const itemCancelBtn = itemModal ? itemModal.querySelector('.btn-cancel') : null;

            function openItemModal() {
                if (!itemModal) return;
                itemForm.reset();
                const existingMessage = itemModal.querySelector('.form-message');
                if (existingMessage) existingMessage.remove();
                itemModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function closeItemModal() {
                if (!itemModal) return;
                itemModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            if (addItemBtn) {
                addItemBtn.addEventListener('click', function(e){
                    e.preventDefault();
                    openItemModal();
                });
            }
            if (itemCloseBtn) itemCloseBtn.addEventListener('click', closeItemModal);
            if (itemCancelBtn) itemCancelBtn.addEventListener('click', closeItemModal);
            if (itemModal) {
                itemModal.addEventListener('click', function(e){
                    if (e.target === itemModal) closeItemModal();
                });
            }

            function showItemMessage(type, message) {
                if (!itemModal) return;
                const existing = itemModal.querySelector('.form-message');
                if (existing) existing.remove();
                const msg = document.createElement('div');
                msg.className = `form-message \${type}`;
                msg.textContent = message;
                msg.style.display = 'block';
                const actions = itemModal.querySelector('.modal-actions');
                actions.parentNode.insertBefore(msg, actions);
                setTimeout(()=>{ if (msg.parentNode) msg.remove(); }, 5000);
            }

            if (itemForm) {
                itemForm.addEventListener('submit', function(e){
                    e.preventDefault();
                    const formData = new FormData(itemForm);
                    const data = Object.fromEntries(formData.entries());

                    const submitBtn = itemForm.querySelector('.btn-save');
                    const originalText = submitBtn.textContent;
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Création...';

                    fetch('/promotion/item/create', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                        body: JSON.stringify({
                            name: data.name,
                            category_id: parseInt(data.category_id),
                            price: parseFloat(data.price),
                            description: data.description || null
                        })
                    })
                    .then(r => r.json())
                    .then(result => {
                        if (result.success) {
                            showItemMessage('success', result.message);
                            setTimeout(()=>{ window.location.reload(); }, 1200);
                        } else {
                            showItemMessage('error', result.message || 'Erreur lors de la création');
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        showItemMessage('error', 'Erreur de connexion.');
                    })
                    .finally(()=>{
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }

            // ===== Quick Edit Item (name + price) =====
            const editItemModal = document.getElementById('editItemModal');
            const editItemForm = document.getElementById('editItemForm');
            const editItemTitle = document.getElementById('editItemModalTitle');
            const editItemClose = editItemModal ? editItemModal.querySelector('.modal-close') : null;
            const editItemCancel = editItemModal ? editItemModal.querySelector('.btn-cancel') : null;

            function openEditItemModal(itemId, itemName, itemPrice, itemDescription) {
                if (!editItemModal) return;
                editItemForm.reset();
                editItemForm.querySelector('#editItemId').value = itemId;
                editItemForm.querySelector('#editItemName').value = itemName || '';
                editItemForm.querySelector('#editItemPrice').value = (typeof itemPrice !== 'undefined' && itemPrice !== null) ? itemPrice : '';
                const descField = editItemForm.querySelector('#editItemDescription');
                if (descField) descField.value = (typeof itemDescription !== 'undefined' && itemDescription !== null) ? itemDescription : '';
                editItemTitle.textContent = 'Edit item – ' + (itemName || ('#' + itemId));
                editItemModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function closeEditItemModal() {
                if (!editItemModal) return;
                editItemModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            document.querySelectorAll('.edit-item-btn').forEach(btn => {
                btn.addEventListener('click', function(e){
                    e.preventDefault();
                    const id = this.getAttribute('data-item-id');
                    const name = this.getAttribute('data-item-name');
                    const price = this.getAttribute('data-item-price');
                    const description = this.getAttribute('data-item-description');
                    openEditItemModal(id, name, price, description);
                });
            });

            if (editItemClose) editItemClose.addEventListener('click', closeEditItemModal);
            if (editItemCancel) editItemCancel.addEventListener('click', closeEditItemModal);
            if (editItemModal) {
                editItemModal.addEventListener('click', function(e){ if (e.target === editItemModal) closeEditItemModal(); });
            }
            document.addEventListener('keydown', function(e){
                if (e.key === 'Escape' && editItemModal && editItemModal.style.display === 'flex') closeEditItemModal();
            });

            if (editItemForm) {
                editItemForm.addEventListener('submit', function(e){
                    e.preventDefault();
                    const formData = new FormData(editItemForm);
                    const data = Object.fromEntries(formData.entries());

                    const submitBtn = editItemForm.querySelector('.btn-save');
                    const originalText = submitBtn.textContent;
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Saving...';

                    fetch('/promotion/item/update', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                        body: JSON.stringify({
                            item_id: parseInt(data.item_id),
                            name: data.name,
                            price: parseFloat(data.price),
                            description: (data.description && data.description.trim().length > 0) ? data.description.trim() : null
                        })
                    })
                    .then(r => r.json())
                    .then(result => {
                        if (result.success) {
                            showMessage('success', result.message || 'Saved');
                            setTimeout(()=>{ closeEditItemModal(); window.location.reload(); }, 1200);
                        } else {
                            showMessage('error', result.message || 'Error while saving');
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        showMessage('error', 'Network error');
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }

            // Gérer la modal de promotion
            const promotionModal = document.getElementById('promotionModal');
            const promotionForm = document.getElementById('promotionForm');
            const promotionModalTitle = document.getElementById('promotionModalTitle');
            const currentPriceDisplay = document.getElementById('currentPriceDisplay');
            const newPriceDisplay = document.getElementById('newPriceDisplay');
            const percentageInput = document.getElementById('promotionPercentage');
            const startDateInput = document.getElementById('promotionStartDate');

            // Ouvrir la modal de promotion (ajout ou modification)
            document.querySelectorAll('.promo-btn').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation(); // Empêcher l'ouverture de l'image

                    const itemId = this.getAttribute('data-item-id');
                    const itemName = this.getAttribute('data-item-name');
                    const originalPrice = parseFloat(this.getAttribute('data-original-price'));
                    const promotionId = this.getAttribute('data-promotion-id');

                    if (promotionId) {
                        // Modifier une promotion existante
                        promotionModalTitle.textContent = 'Modifier la promotion - ' + itemName;
                        document.getElementById('promotionItemId').value = itemId;
                        document.getElementById('promotionId').value = promotionId;

                        // Charger les données de la promotion existante
                        loadExistingPromotion(promotionId, itemId);
                        return;
                    }

                    // Ajouter une nouvelle promotion
                    // Remplir les champs
                    document.getElementById('promotionItemId').value = itemId;
                    document.getElementById('promotionId').value = '';
                    document.getElementById('promotionName').value = '';
                    document.getElementById('promotionPercentage').value = '';
                    document.getElementById('promotionDescription').value = '';
                    document.getElementById('promotionStartDate').value = new Date().toISOString().split('T')[0];
                    document.getElementById('promotionEndDate').value = '';

                    // Mettre à jour l'affichage
                    promotionModalTitle.textContent = 'Ajouter une promotion - ' + itemName;
                    currentPriceDisplay.textContent = originalPrice.toFixed(2).replace('.', ',') + ' €';
                    newPriceDisplay.textContent = originalPrice.toFixed(2).replace('.', ',') + ' €';

                    // Afficher la modal
                    promotionModal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                });
            });

            // Calculer le nouveau prix en temps réel
            percentageInput.addEventListener('input', function() {
                const percentage = parseFloat(this.value) || 0;
                const currentPriceText = currentPriceDisplay.textContent;
                const currentPrice = parseFloat(currentPriceText.replace(',', '.').replace(' €', '')) || 0;

                if (percentage > 0 && currentPrice > 0) {
                    const discountAmount = currentPrice * (percentage / 100);
                    const newPrice = currentPrice - discountAmount;
                    newPriceDisplay.textContent = newPrice.toFixed(2).replace('.', ',') + ' €';
                } else {
                    newPriceDisplay.textContent = currentPrice.toFixed(2).replace('.', ',') + ' €';
                }
            });

            // Fermer la modal de promotion
            function closePromotionModal() {
                promotionModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            // Événements de fermeture
            promotionModal.querySelector('.modal-close').addEventListener('click', closePromotionModal);
            promotionModal.querySelector('.btn-cancel').addEventListener('click', closePromotionModal);

            // Fermer en cliquant à l'extérieur
            promotionModal.addEventListener('click', function(e) {
                if (e.target === promotionModal) {
                    closePromotionModal();
                }
            });

            // Fermer avec Échap
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && promotionModal.style.display === 'flex') {
                    closePromotionModal();
                }
            });

            // Gérer la soumission du formulaire
            promotionForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);
                const data = Object.fromEntries(formData.entries());

                // Désactiver le bouton et afficher le loading
                const submitBtn = this.querySelector('.btn-save');
                const originalText = submitBtn.textContent;
                const loadingSpinner = '<div class=\"loading-spinner\"></div>';
                submitBtn.disabled = true;
                submitBtn.innerHTML = loadingSpinner + ' Enregistrement...';

                // Déterminer l'URL et la méthode
                const promotionId = data.promotion_id;
                const url = promotionId ? `/api/promotions/update/\${promotionId}` : '/api/promotions/create';
                const method = promotionId ? 'PUT' : 'POST';

                // Préparer les données JSON
                const jsonData = {
                    item_id: parseInt(data.item_id),
                    name: data.name,
                    percentage: parseFloat(data.percentage),
                    description: data.description || null,
                    start_date: data.start_date,
                    end_date: data.end_date || null
                };

                // Appel AJAX
                fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify(jsonData)
                })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        // Afficher le message de succès
                        showMessage('success', result.message);

                        // Fermer la modal après un délai
                        setTimeout(() => {
                            closePromotionModal();
                            // Recharger la page pour voir les changements
                            window.location.reload();
                        }, 1500);
                    } else {
                        // Afficher le message d'erreur
                        showMessage('error', result.message);
                        if (result.errors) {
                            console.error('Erreurs de validation:', result.errors);
                        }
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    showMessage('error', 'Erreur de connexion. Veuillez réessayer.');
                })
                .finally(() => {
                    // Restaurer le bouton
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                });
            });

            // Fonction pour charger les données d'une promotion existante
            function loadExistingPromotion(promotionId, itemId) {
                // Afficher un indicateur de chargement
                promotionModalTitle.textContent = 'Chargement...';

                fetch(`/api/promotions/item/\${itemId}`)
                    .then(response => response.json())
                    .then(result => {
                        if (result.success && result.promotion) {
                            const promo = result.promotion;

                            // Remplir les champs avec les données existantes
                            document.getElementById('promotionName').value = promo.name;
                            document.getElementById('promotionPercentage').value = promo.percentage;
                            document.getElementById('promotionDescription').value = promo.description || '';
                            document.getElementById('promotionStartDate').value = promo.start_date;
                            document.getElementById('promotionEndDate').value = promo.end_date || '';

                            // Calculer et afficher les prix
                            const originalPrice = parseFloat(document.querySelector(`[data-item-id=\"\${itemId}\"]`).getAttribute('data-original-price'));
                            const percentage = parseFloat(promo.percentage);
                            const newPrice = originalPrice * (1 - percentage / 100);

                            currentPriceDisplay.textContent = originalPrice.toFixed(2).replace('.', ',') + ' €';
                            newPriceDisplay.textContent = newPrice.toFixed(2).replace('.', ',') + ' €';

                            // Mettre à jour le titre
                            promotionModalTitle.textContent = 'Modifier la promotion - ' + document.querySelector(`[data-item-id=\"\${itemId}\"]`).getAttribute('data-item-name');

                            // Afficher la modal
                            promotionModal.style.display = 'flex';
                            document.body.style.overflow = 'hidden';
                        } else {
                            alert('Erreur lors du chargement de la promotion');
                        }
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        alert('Erreur de connexion lors du chargement de la promotion');
                    });
            }

            // Fonction pour afficher les messages
            function showMessage(type, message) {
                // Supprimer les anciens messages
                const existingMessage = promotionModal.querySelector('.form-message');
                if (existingMessage) {
                    existingMessage.remove();
                }

                // Créer le nouveau message
                const messageDiv = document.createElement('div');
                messageDiv.className = `form-message \${type}`;
                messageDiv.textContent = message;
                messageDiv.style.display = 'block';

                // Insérer avant les actions
                const modalActions = promotionModal.querySelector('.modal-actions');
                modalActions.parentNode.insertBefore(messageDiv, modalActions);

                // Supprimer automatiquement après 5 secondes
                setTimeout(() => {
                    if (messageDiv.parentNode) {
                        messageDiv.remove();
                    }
                }, 5000);
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
        return "admin/promotion.html.twig";
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
        return array (  642 => 318,  631 => 316,  627 => 315,  467 => 157,  464 => 155,  453 => 149,  451 => 148,  440 => 141,  421 => 138,  417 => 137,  413 => 136,  407 => 135,  402 => 134,  399 => 133,  382 => 132,  374 => 126,  365 => 123,  360 => 122,  356 => 121,  344 => 112,  340 => 111,  334 => 107,  328 => 105,  322 => 102,  316 => 99,  312 => 98,  309 => 97,  307 => 96,  302 => 93,  298 => 91,  292 => 89,  286 => 87,  284 => 86,  279 => 85,  276 => 84,  274 => 83,  270 => 82,  252 => 73,  249 => 72,  245 => 70,  239 => 68,  237 => 67,  229 => 66,  225 => 65,  221 => 64,  217 => 63,  212 => 61,  208 => 60,  202 => 59,  197 => 57,  194 => 56,  188 => 55,  185 => 54,  180 => 53,  177 => 52,  174 => 51,  169 => 50,  166 => 49,  139 => 23,  126 => 21,  122 => 20,  111 => 11,  101 => 10,  91 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/baseAdmin.html.twig' %}

{% block title %}Gestion des articles{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articles.css') }}\">
{% endblock %}

{% block content %}
    <div class=\"promotion-container\">
        <div class=\"promotion-header\">
            <h2 data-i18n=\"article_management\">Gestion des articles</h2>
            <form method=\"get\" class=\"promotion-filters\">
                <label for=\"categoryFilter\"><span data-i18n=\"category\">Catégorie</span>
                    <button type=\"button\" class=\"add-category-inline\" title=\"Ajouter une nouvelle catégorie\" aria-label=\"Ajouter une nouvelle catégorie\" data-i18n-title=\"add_new_category\">+</button>
                </label>
                <select id=\"categoryFilter\" name=\"category_id\" class=\"promotion-select\">
                    <option value=\"\"><span data-i18n=\"all\">Toutes</span></option>
                    {% for cat in categories %}
                        <option value=\"{{ cat.id }}\" {{ category_id == cat.id ? 'selected' }}>{{ cat.nameCategory }}</option>
                    {% endfor %}
                </select>
                <script>
                    // Ouvre la modale d'ajout catégorie si elle existe dans la page
                    document.addEventListener('DOMContentLoaded', function(){
                        const inlineAddBtn = document.querySelector('.add-category-inline');
                        const categoryModal = document.getElementById('categoryModal');
                        if (inlineAddBtn && categoryModal) {
                            inlineAddBtn.addEventListener('click', function(e){
                                e.preventDefault();
                                categoryModal.style.display = 'flex';
                                document.body.style.overflow = 'hidden';
                            });
                        }
                    });
                </script>
                <button type=\"submit\" class=\"modern-button\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                        <path d=\"M21 21L16.65 16.65\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    <span data-i18n=\"apply\">Appliquer</span>
                </button>
            </form>
        </div>

        {# Nouvelle structure e-commerce #}
        <div class=\"products-grid\">
                    {% for item in rows %}
                        {% set defaultImage = item.image ? asset('uploads/' ~ item.image) : asset('uploads/robe.jpg') %}
                {% set totalQty = 0 %}
                                {% for sz in item.sizes %}
                    {% set totalQty = totalQty + sz.qty_available %}
                                {% endfor %}

                <div class=\"product-card\" data-item-id=\"{{ item.item_id }}\">
                    <div class=\"product-image\">
                        <img src=\"{{ defaultImage }}\" alt=\"{{ item.item_name }}\" class=\"main-product-image clickable-image\"
                             data-product-name=\"{{ item.item_name }}\" />
                        <div class=\"product-badge\">{{ item.category.name }}</div>
                        <div class=\"promotion-badge promo-btn\"
                             data-item-id=\"{{ item.item_id }}\"
                             data-item-name=\"{{ item.item_name }}\"
                             data-original-price=\"{{ item.original_price }}\"
                             {% if item.promotion %}data-promotion-id=\"{{ item.promotion.id }}\"{% endif %}>
                            {% if item.promotion %}
                                <span class=\"promotion-percentage\">-{{ item.promotion.percentage }}%</span>
                            {% else %}
                                <span class=\"promo-text\" data-i18n=\"promo\">Promo</span>
                            {% endif %}
                        </div>
                        <button type=\"button\" class=\"edit-item-btn\" title=\"Edit item\" data-item-id=\"{{ item.item_id }}\" data-item-name=\"{{ item.item_name }}\" data-item-price=\"{{ item.original_price|default(0) }}\" data-item-description=\"{{ item.item_description|default('') }}\" aria-label=\"Edit\">
                            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M12 20h9\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                <path d=\"M16.5 3.5a2.121 2.121 0 0 1 3 3L8 18l-4 1 1-4 11.5-11.5z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                            </svg>
                        </button>
                    </div>

                    <div class=\"product-info\">
                        <h3 class=\"product-title\">{{ item.item_name }}</h3>
                        {% if item.item_description %}
                            {% set _desc = item.item_description %}
                            <p class=\"product-description\" title=\"{{ _desc }}\">
                                {% if _desc|length > 90 %}
                                    {{ _desc|slice(0, 90) ~ '…' }}
                                {% else %}
                                    {{ _desc }}
                                {% endif %}
                            </p>
                        {% endif %}

                        <div class=\"product-meta\">
                            <div class=\"pricing-info\">
                                {% if item.promotion %}
                                    <div class=\"price-row\">
                                        <span class=\"original-price\">{{ item.original_price|number_format(2, ',', ' ') }} €</span>
                                        <span class=\"promo-price\">{{ item.promotion.promo_price|number_format(2, ',', ' ') }} €</span>
                                    </div>
                                    <div class=\"promo-end-date\">
                                        <span data-i18n=\"until\">Jusqu'au</span> {{ item.promotion.end_date|date('d/m/Y') }}
                                    </div>
                                {% else %}
                                    <div class=\"normal-price\">{{ item.original_price|number_format(2, ',', ' ') }} €</div>
                                {% endif %}
                            </div>

                            <div class=\"stock-info\">
                                <span class=\"stock-label\" data-i18n=\"stock\">Stock:</span>
                                <span class=\"stock-value {{ totalQty > 10 ? 'in-stock' : (totalQty > 0 ? 'low-stock' : 'out-of-stock') }}\">
                                    {{ totalQty|number_format(0, ',', ' ') }} <span data-i18n=\"units\">unités</span>
                                </span>
                            </div>
                        </div>

                        <div class=\"product-variants\">
                            <div class=\"sizes-section\">
                                <span class=\"section-label\" data-i18n=\"sizes\">Tailles:</span>
                                <div class=\"sizes-list\">
                                {% for sz in item.sizes %}
                                        <span class=\"size-tag\" title=\"Quantité: {{ sz.qty_available }}\">
                                            {{ sz.size_value }}
                                        </span>
                                    {% endfor %}
                                </div>
                            </div>

                             <div class=\"colors-section\">
                                 <span class=\"section-label\" data-i18n=\"colors\">Couleurs:</span>
                                 <div class=\"colors-list\">
                                     {% for c in item.colors %}
                                         {% set img = c.color_image ? asset('uploads/' ~ c.color_image) : defaultImage %}
                                         <div class=\"color-item {{ loop.first ? 'active' : '' }}\"
                                              title=\"{{ c.color_name }} - Qté: {{ c.qty_total|number_format(0, ',', ' ') }}\"
                                              data-color-image=\"{{ img }}\"
                                              data-color-name=\"{{ c.color_name }}\">
                                             <img src=\"{{ img }}\" alt=\"{{ c.color_name }}\" />
                                         </div>
                                {% endfor %}
                                 </div>
                             </div>
                        </div>
                    </div>


                </div>
                    {% else %}
                <div class=\"no-products\">
                    <div class=\"no-products-icon\">📦</div>
                    <h3 data-i18n=\"no_articles_available\">Aucun article disponible</h3>
                    <p data-i18n=\"no_products_found\">Aucun produit trouvé pour les critères sélectionnés.</p>
                </div>
                    {% endfor %}

            {# Tuile d'ajout d'article #}
            <div class=\"product-card add-item-card\" title=\"Ajouter un article\" data-i18n-title=\"add_article\">
                <button type=\"button\" class=\"add-item-trigger\" aria-label=\"Ajouter un article\" data-i18n-aria-label=\"add_article\">
                    <div class=\"add-item-content\">
                        <div class=\"add-item-plus\">+</div>
                        <div class=\"add-item-text\" data-i18n=\"add_article\">Ajouter un article</div>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Modal pour afficher l'image en grand -->
    <div id=\"imageModal\" class=\"image-modal\">
        <div class=\"modal-content\">
            <span class=\"modal-close\">&times;</span>
            <img id=\"modalImage\" src=\"\" alt=\"\" />
            <div class=\"modal-caption\"></div>
        </div>
    </div>

    <!-- Modal pour créer/modifier une promotion -->
    <div id=\"promotionModal\" class=\"promotion-modal\">
        <div class=\"promotion-modal-content\">
            <div class=\"modal-header\">
                <h3 id=\"promotionModalTitle\" data-i18n=\"add_promotion\">Ajouter une promotion</h3>
                <span class=\"modal-close\">&times;</span>
            </div>

            <form id=\"promotionForm\" class=\"promotion-form\">
                <input type=\"hidden\" id=\"promotionItemId\" name=\"item_id\" />
                <input type=\"hidden\" id=\"promotionId\" name=\"promotion_id\" />

                <div class=\"form-group\">
                    <label for=\"promotionName\" data-i18n=\"promotion_name\">Nom de la promotion</label>
                    <input type=\"text\" id=\"promotionName\" name=\"name\" placeholder=\"Ex: Soldes d'été\" data-i18n-placeholder=\"promotion_name_example\" required />
                </div>

                <div class=\"form-group\">
                    <label for=\"promotionPercentage\" data-i18n=\"discount_percentage\">Pourcentage de réduction</label>
                    <div class=\"percentage-input\">
                        <input type=\"number\" id=\"promotionPercentage\" name=\"percentage\"
                               min=\"1\" max=\"99\" step=\"1\" placeholder=\"10\" required />
                        <span class=\"percentage-symbol\">%</span>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"promotionDescription\" data-i18n=\"description_optional\">Description (optionnel)</label>
                    <textarea id=\"promotionDescription\" name=\"description\"
                              placeholder=\"Description de la promotion...\" data-i18n-placeholder=\"promotion_description\" rows=\"3\"></textarea>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"promotionStartDate\" data-i18n=\"start_date\">Date de début</label>
                        <input type=\"date\" id=\"promotionStartDate\" name=\"start_date\" required />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"promotionEndDate\" data-i18n=\"end_date\">Date de fin</label>
                        <input type=\"date\" id=\"promotionEndDate\" name=\"end_date\" />
                    </div>
                </div>

                <div class=\"price-preview\">
                    <div class=\"current-price\">
                        <span class=\"price-label\" data-i18n=\"current_price\">Prix actuel:</span>
                        <span id=\"currentPriceDisplay\">0,00 €</span>
                    </div>
                    <div class=\"new-price\">
                        <span class=\"price-label\" data-i18n=\"new_price\">Nouveau prix:</span>
                        <span id=\"newPriceDisplay\">0,00 €</span>
                    </div>
                </div>

                <div class=\"modal-actions\">
                    <button type=\"button\" class=\"btn-cancel\" data-i18n=\"cancel\">Annuler</button>
                    <button type=\"submit\" class=\"btn-save\" data-i18n=\"save\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal d'édition rapide d'article (name + price) -->
    <div id=\"editItemModal\" class=\"promotion-modal\" style=\"display:none;\">
        <div class=\"promotion-modal-content\">
            <div class=\"modal-header\">
                <h3 id=\"editItemModalTitle\" data-i18n=\"edit_item\">Edit item</h3>
                <span class=\"modal-close\" aria-label=\"Close\">&times;</span>
            </div>

            <form id=\"editItemForm\" class=\"promotion-form\">
                <input type=\"hidden\" id=\"editItemId\" name=\"item_id\" />
                <div class=\"form-group\">
                    <label for=\"editItemName\" data-i18n=\"name\">Name</label>
                    <input type=\"text\" id=\"editItemName\" name=\"name\" placeholder=\"Item name\" data-i18n-placeholder=\"item_name\" required />
                </div>
                <div class=\"form-group\">
                    <label for=\"editItemPrice\" data-i18n=\"price\">Price</label>
                    <input type=\"number\" step=\"0.01\" min=\"0\" id=\"editItemPrice\" name=\"price\" placeholder=\"0.00\" required />
                </div>
                <div class=\"form-group\">
                    <label for=\"editItemDescription\" data-i18n=\"description\">Description</label>
                    <textarea id=\"editItemDescription\" name=\"description\" rows=\"3\" placeholder=\"Item description (optional)\" data-i18n-placeholder=\"item_description_optional\"></textarea>
                </div>
                <div class=\"modal-actions\">
                    <button type=\"button\" class=\"btn-cancel\" data-i18n=\"cancel\">Cancel</button>
                    <button type=\"submit\" class=\"btn-save\" data-i18n=\"save\">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal pour créer une nouvelle catégorie -->
    <div id=\"categoryModal\" class=\"promotion-modal\" style=\"display:none;\">
        <div class=\"promotion-modal-content\">
            <div class=\"modal-header\">
                <h3 data-i18n=\"add_new_category\">Ajouter une nouvelle catégorie</h3>
                <span class=\"modal-close\" aria-label=\"Fermer\">&times;</span>
            </div>

            <form id=\"categoryForm\" class=\"promotion-form\">
                <div class=\"form-group\">
                    <label for=\"categoryName\" data-i18n=\"category_name\">Nom de la catégorie</label>
                    <input type=\"text\" id=\"categoryName\" name=\"name\" placeholder=\"Ex: Vêtements, Chaussures, Accessoires\" data-i18n-placeholder=\"category_name_example\" required />
                </div>

                <div class=\"form-group\">
                    <label for=\"categoryDescription\" data-i18n=\"description_optional\">Description (optionnel)</label>
                    <textarea id=\"categoryDescription\" name=\"description\" placeholder=\"Description de la catégorie...\" data-i18n-placeholder=\"category_description\" rows=\"3\"></textarea>
                </div>

                <div class=\"modal-actions\">
                    <button type=\"button\" class=\"btn-cancel\" aria-label=\"Annuler\" data-i18n=\"cancel\" data-i18n-aria-label=\"cancel\">Annuler</button>
                    <button type=\"submit\" class=\"btn-save\" aria-label=\"Créer\" data-i18n=\"create\" data-i18n-aria-label=\"create\">Créer</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal pour créer un nouvel article -->
    <div id=\"itemModal\" class=\"promotion-modal\" style=\"display:none;\">
        <div class=\"promotion-modal-content\">
            <div class=\"modal-header\">
                <h3>Ajouter un nouvel article</h3>
                <span class=\"modal-close\" aria-label=\"Fermer\">&times;</span>
            </div>

            <form id=\"itemForm\" class=\"promotion-form\">
                <div class=\"form-group\">
                    <label for=\"itemName\">Nom de l'article</label>
                    <input type=\"text\" id=\"itemName\" name=\"name\" placeholder=\"Ex: T-shirt en coton\" required />
                </div>

                <div class=\"form-group\">
                    <label for=\"itemCategory\">Catégorie</label>
                    <select id=\"itemCategory\" name=\"category_id\" required>
                        <option value=\"\">Sélectionnez une catégorie</option>
                        {% for cat in categories %}
                            <option value=\"{{ cat.id }}\">{{ cat.nameCategory }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"itemPrice\">Prix (€)</label>
                    <input type=\"number\" step=\"0.01\" min=\"0\" id=\"itemPrice\" name=\"price\" placeholder=\"0.00\" required />
                </div>

                <div class=\"form-group\">
                    <label for=\"itemDescription\">Description (optionnel)</label>
                    <textarea id=\"itemDescription\" name=\"description\" placeholder=\"Description de l'article...\" rows=\"3\"></textarea>
                </div>

                <div class=\"modal-actions\">
                    <button type=\"button\" class=\"btn-cancel\" aria-label=\"Annuler\">Annuler</button>
                    <button type=\"submit\" class=\"btn-save\" aria-label=\"Créer\">Créer</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gérer le changement d'image principale en cliquant sur une couleur
            document.querySelectorAll('.color-item').forEach(function(colorItem) {
                colorItem.addEventListener('click', function() {
                    const productCard = this.closest('.product-card');
                    const mainImage = productCard.querySelector('.main-product-image');
                    const colorImage = this.getAttribute('data-color-image');
                    const colorName = this.getAttribute('data-color-name');

                    // Changer l'image principale
                    if (mainImage && colorImage) {
                        mainImage.src = colorImage;
                        mainImage.alt = colorName;

                        // Mettre à jour la classe active
                        const colorItems = productCard.querySelectorAll('.color-item');
                        colorItems.forEach(item => item.classList.remove('active'));
                        this.classList.add('active');
                    }
                });
            });

            // Gérer l'affichage de l'image en grand (modal)
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const modalCaption = document.querySelector('.modal-caption');
            const closeBtn = document.querySelector('.modal-close');

            // Ouvrir la modal en cliquant sur l'image principale
            document.querySelectorAll('.clickable-image').forEach(function(img) {
                img.addEventListener('click', function() {
                    modal.style.display = 'flex';
                    modalImg.src = this.src;
                    modalImg.alt = this.alt;
                    modalCaption.textContent = this.getAttribute('data-product-name');
                    document.body.style.overflow = 'hidden'; // Empêcher le scroll
                });
            });

            // Fermer la modal
            function closeModal() {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto'; // Restaurer le scroll
            }

            closeBtn.addEventListener('click', closeModal);

            // Fermer en cliquant à l'extérieur de l'image
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Fermer avec la touche Échap
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.style.display === 'flex') {
                    closeModal();
                }
            });

            // ===== Modal Catégorie =====
            const categoryModal = document.getElementById('categoryModal');
            const categoryForm = document.getElementById('categoryForm');
            const addCategoryInlineBtn = document.querySelector('.add-category-inline');
            const categoryCloseBtn = categoryModal ? categoryModal.querySelector('.modal-close') : null;
            const categoryCancelBtn = categoryModal ? categoryModal.querySelector('.btn-cancel') : null;

            function openCategoryModal() {
                if (!categoryModal) return;
                // reset
                categoryForm.reset();
                const existingMessage = categoryModal.querySelector('.form-message');
                if (existingMessage) existingMessage.remove();
                categoryModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function closeCategoryModal() {
                if (!categoryModal) return;
                categoryModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            if (addCategoryInlineBtn) {
                addCategoryInlineBtn.addEventListener('click', function(e){
                    e.preventDefault();
                    openCategoryModal();
                });
            }
            if (categoryCloseBtn) categoryCloseBtn.addEventListener('click', closeCategoryModal);
            if (categoryCancelBtn) categoryCancelBtn.addEventListener('click', closeCategoryModal);
            if (categoryModal) {
                categoryModal.addEventListener('click', function(e){
                    if (e.target === categoryModal) closeCategoryModal();
                });
            }
            document.addEventListener('keydown', function(e){
                if (e.key === 'Escape') {
                    if (categoryModal && categoryModal.style.display === 'flex') {
                        closeCategoryModal();
                    }
                    if (itemModal && itemModal.style.display === 'flex') {
                        closeItemModal();
                    }
                }
            });

            function showCategoryMessage(type, message) {
                if (!categoryModal) return;
                const existing = categoryModal.querySelector('.form-message');
                if (existing) existing.remove();
                const msg = document.createElement('div');
                msg.className = `form-message \${type}`;
                msg.textContent = message;
                msg.style.display = 'block';
                const actions = categoryModal.querySelector('.modal-actions');
                actions.parentNode.insertBefore(msg, actions);
                setTimeout(()=>{ if (msg.parentNode) msg.remove(); }, 5000);
            }

            if (categoryForm) {
                categoryForm.addEventListener('submit', function(e){
                    e.preventDefault();
                    const formData = new FormData(categoryForm);
                    const data = Object.fromEntries(formData.entries());

                    const submitBtn = categoryForm.querySelector('.btn-save');
                    const originalText = submitBtn.textContent;
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Création...';

                    fetch('/promotion/category/create', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                        body: JSON.stringify({ name: data.name, description: data.description || null })
                    })
                    .then(r => r.json())
                    .then(result => {
                        if (result.success) {
                            showCategoryMessage('success', result.message);
                            setTimeout(()=>{ window.location.reload(); }, 1200);
                        } else {
                            showCategoryMessage('error', result.message || 'Erreur lors de la création');
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        showCategoryMessage('error', 'Erreur de connexion.');
                    })
                    .finally(()=>{
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }

            // ===== Modal Item =====
            const itemModal = document.getElementById('itemModal');
            const itemForm = document.getElementById('itemForm');
            const addItemBtn = document.querySelector('.add-item-trigger');
            const itemCloseBtn = itemModal ? itemModal.querySelector('.modal-close') : null;
            const itemCancelBtn = itemModal ? itemModal.querySelector('.btn-cancel') : null;

            function openItemModal() {
                if (!itemModal) return;
                itemForm.reset();
                const existingMessage = itemModal.querySelector('.form-message');
                if (existingMessage) existingMessage.remove();
                itemModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function closeItemModal() {
                if (!itemModal) return;
                itemModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            if (addItemBtn) {
                addItemBtn.addEventListener('click', function(e){
                    e.preventDefault();
                    openItemModal();
                });
            }
            if (itemCloseBtn) itemCloseBtn.addEventListener('click', closeItemModal);
            if (itemCancelBtn) itemCancelBtn.addEventListener('click', closeItemModal);
            if (itemModal) {
                itemModal.addEventListener('click', function(e){
                    if (e.target === itemModal) closeItemModal();
                });
            }

            function showItemMessage(type, message) {
                if (!itemModal) return;
                const existing = itemModal.querySelector('.form-message');
                if (existing) existing.remove();
                const msg = document.createElement('div');
                msg.className = `form-message \${type}`;
                msg.textContent = message;
                msg.style.display = 'block';
                const actions = itemModal.querySelector('.modal-actions');
                actions.parentNode.insertBefore(msg, actions);
                setTimeout(()=>{ if (msg.parentNode) msg.remove(); }, 5000);
            }

            if (itemForm) {
                itemForm.addEventListener('submit', function(e){
                    e.preventDefault();
                    const formData = new FormData(itemForm);
                    const data = Object.fromEntries(formData.entries());

                    const submitBtn = itemForm.querySelector('.btn-save');
                    const originalText = submitBtn.textContent;
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Création...';

                    fetch('/promotion/item/create', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                        body: JSON.stringify({
                            name: data.name,
                            category_id: parseInt(data.category_id),
                            price: parseFloat(data.price),
                            description: data.description || null
                        })
                    })
                    .then(r => r.json())
                    .then(result => {
                        if (result.success) {
                            showItemMessage('success', result.message);
                            setTimeout(()=>{ window.location.reload(); }, 1200);
                        } else {
                            showItemMessage('error', result.message || 'Erreur lors de la création');
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        showItemMessage('error', 'Erreur de connexion.');
                    })
                    .finally(()=>{
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }

            // ===== Quick Edit Item (name + price) =====
            const editItemModal = document.getElementById('editItemModal');
            const editItemForm = document.getElementById('editItemForm');
            const editItemTitle = document.getElementById('editItemModalTitle');
            const editItemClose = editItemModal ? editItemModal.querySelector('.modal-close') : null;
            const editItemCancel = editItemModal ? editItemModal.querySelector('.btn-cancel') : null;

            function openEditItemModal(itemId, itemName, itemPrice, itemDescription) {
                if (!editItemModal) return;
                editItemForm.reset();
                editItemForm.querySelector('#editItemId').value = itemId;
                editItemForm.querySelector('#editItemName').value = itemName || '';
                editItemForm.querySelector('#editItemPrice').value = (typeof itemPrice !== 'undefined' && itemPrice !== null) ? itemPrice : '';
                const descField = editItemForm.querySelector('#editItemDescription');
                if (descField) descField.value = (typeof itemDescription !== 'undefined' && itemDescription !== null) ? itemDescription : '';
                editItemTitle.textContent = 'Edit item – ' + (itemName || ('#' + itemId));
                editItemModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function closeEditItemModal() {
                if (!editItemModal) return;
                editItemModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            document.querySelectorAll('.edit-item-btn').forEach(btn => {
                btn.addEventListener('click', function(e){
                    e.preventDefault();
                    const id = this.getAttribute('data-item-id');
                    const name = this.getAttribute('data-item-name');
                    const price = this.getAttribute('data-item-price');
                    const description = this.getAttribute('data-item-description');
                    openEditItemModal(id, name, price, description);
                });
            });

            if (editItemClose) editItemClose.addEventListener('click', closeEditItemModal);
            if (editItemCancel) editItemCancel.addEventListener('click', closeEditItemModal);
            if (editItemModal) {
                editItemModal.addEventListener('click', function(e){ if (e.target === editItemModal) closeEditItemModal(); });
            }
            document.addEventListener('keydown', function(e){
                if (e.key === 'Escape' && editItemModal && editItemModal.style.display === 'flex') closeEditItemModal();
            });

            if (editItemForm) {
                editItemForm.addEventListener('submit', function(e){
                    e.preventDefault();
                    const formData = new FormData(editItemForm);
                    const data = Object.fromEntries(formData.entries());

                    const submitBtn = editItemForm.querySelector('.btn-save');
                    const originalText = submitBtn.textContent;
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Saving...';

                    fetch('/promotion/item/update', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                        body: JSON.stringify({
                            item_id: parseInt(data.item_id),
                            name: data.name,
                            price: parseFloat(data.price),
                            description: (data.description && data.description.trim().length > 0) ? data.description.trim() : null
                        })
                    })
                    .then(r => r.json())
                    .then(result => {
                        if (result.success) {
                            showMessage('success', result.message || 'Saved');
                            setTimeout(()=>{ closeEditItemModal(); window.location.reload(); }, 1200);
                        } else {
                            showMessage('error', result.message || 'Error while saving');
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        showMessage('error', 'Network error');
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }

            // Gérer la modal de promotion
            const promotionModal = document.getElementById('promotionModal');
            const promotionForm = document.getElementById('promotionForm');
            const promotionModalTitle = document.getElementById('promotionModalTitle');
            const currentPriceDisplay = document.getElementById('currentPriceDisplay');
            const newPriceDisplay = document.getElementById('newPriceDisplay');
            const percentageInput = document.getElementById('promotionPercentage');
            const startDateInput = document.getElementById('promotionStartDate');

            // Ouvrir la modal de promotion (ajout ou modification)
            document.querySelectorAll('.promo-btn').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation(); // Empêcher l'ouverture de l'image

                    const itemId = this.getAttribute('data-item-id');
                    const itemName = this.getAttribute('data-item-name');
                    const originalPrice = parseFloat(this.getAttribute('data-original-price'));
                    const promotionId = this.getAttribute('data-promotion-id');

                    if (promotionId) {
                        // Modifier une promotion existante
                        promotionModalTitle.textContent = 'Modifier la promotion - ' + itemName;
                        document.getElementById('promotionItemId').value = itemId;
                        document.getElementById('promotionId').value = promotionId;

                        // Charger les données de la promotion existante
                        loadExistingPromotion(promotionId, itemId);
                        return;
                    }

                    // Ajouter une nouvelle promotion
                    // Remplir les champs
                    document.getElementById('promotionItemId').value = itemId;
                    document.getElementById('promotionId').value = '';
                    document.getElementById('promotionName').value = '';
                    document.getElementById('promotionPercentage').value = '';
                    document.getElementById('promotionDescription').value = '';
                    document.getElementById('promotionStartDate').value = new Date().toISOString().split('T')[0];
                    document.getElementById('promotionEndDate').value = '';

                    // Mettre à jour l'affichage
                    promotionModalTitle.textContent = 'Ajouter une promotion - ' + itemName;
                    currentPriceDisplay.textContent = originalPrice.toFixed(2).replace('.', ',') + ' €';
                    newPriceDisplay.textContent = originalPrice.toFixed(2).replace('.', ',') + ' €';

                    // Afficher la modal
                    promotionModal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                });
            });

            // Calculer le nouveau prix en temps réel
            percentageInput.addEventListener('input', function() {
                const percentage = parseFloat(this.value) || 0;
                const currentPriceText = currentPriceDisplay.textContent;
                const currentPrice = parseFloat(currentPriceText.replace(',', '.').replace(' €', '')) || 0;

                if (percentage > 0 && currentPrice > 0) {
                    const discountAmount = currentPrice * (percentage / 100);
                    const newPrice = currentPrice - discountAmount;
                    newPriceDisplay.textContent = newPrice.toFixed(2).replace('.', ',') + ' €';
                } else {
                    newPriceDisplay.textContent = currentPrice.toFixed(2).replace('.', ',') + ' €';
                }
            });

            // Fermer la modal de promotion
            function closePromotionModal() {
                promotionModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            // Événements de fermeture
            promotionModal.querySelector('.modal-close').addEventListener('click', closePromotionModal);
            promotionModal.querySelector('.btn-cancel').addEventListener('click', closePromotionModal);

            // Fermer en cliquant à l'extérieur
            promotionModal.addEventListener('click', function(e) {
                if (e.target === promotionModal) {
                    closePromotionModal();
                }
            });

            // Fermer avec Échap
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && promotionModal.style.display === 'flex') {
                    closePromotionModal();
                }
            });

            // Gérer la soumission du formulaire
            promotionForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);
                const data = Object.fromEntries(formData.entries());

                // Désactiver le bouton et afficher le loading
                const submitBtn = this.querySelector('.btn-save');
                const originalText = submitBtn.textContent;
                const loadingSpinner = '<div class=\"loading-spinner\"></div>';
                submitBtn.disabled = true;
                submitBtn.innerHTML = loadingSpinner + ' Enregistrement...';

                // Déterminer l'URL et la méthode
                const promotionId = data.promotion_id;
                const url = promotionId ? `/api/promotions/update/\${promotionId}` : '/api/promotions/create';
                const method = promotionId ? 'PUT' : 'POST';

                // Préparer les données JSON
                const jsonData = {
                    item_id: parseInt(data.item_id),
                    name: data.name,
                    percentage: parseFloat(data.percentage),
                    description: data.description || null,
                    start_date: data.start_date,
                    end_date: data.end_date || null
                };

                // Appel AJAX
                fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify(jsonData)
                })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        // Afficher le message de succès
                        showMessage('success', result.message);

                        // Fermer la modal après un délai
                        setTimeout(() => {
                            closePromotionModal();
                            // Recharger la page pour voir les changements
                            window.location.reload();
                        }, 1500);
                    } else {
                        // Afficher le message d'erreur
                        showMessage('error', result.message);
                        if (result.errors) {
                            console.error('Erreurs de validation:', result.errors);
                        }
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    showMessage('error', 'Erreur de connexion. Veuillez réessayer.');
                })
                .finally(() => {
                    // Restaurer le bouton
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                });
            });

            // Fonction pour charger les données d'une promotion existante
            function loadExistingPromotion(promotionId, itemId) {
                // Afficher un indicateur de chargement
                promotionModalTitle.textContent = 'Chargement...';

                fetch(`/api/promotions/item/\${itemId}`)
                    .then(response => response.json())
                    .then(result => {
                        if (result.success && result.promotion) {
                            const promo = result.promotion;

                            // Remplir les champs avec les données existantes
                            document.getElementById('promotionName').value = promo.name;
                            document.getElementById('promotionPercentage').value = promo.percentage;
                            document.getElementById('promotionDescription').value = promo.description || '';
                            document.getElementById('promotionStartDate').value = promo.start_date;
                            document.getElementById('promotionEndDate').value = promo.end_date || '';

                            // Calculer et afficher les prix
                            const originalPrice = parseFloat(document.querySelector(`[data-item-id=\"\${itemId}\"]`).getAttribute('data-original-price'));
                            const percentage = parseFloat(promo.percentage);
                            const newPrice = originalPrice * (1 - percentage / 100);

                            currentPriceDisplay.textContent = originalPrice.toFixed(2).replace('.', ',') + ' €';
                            newPriceDisplay.textContent = newPrice.toFixed(2).replace('.', ',') + ' €';

                            // Mettre à jour le titre
                            promotionModalTitle.textContent = 'Modifier la promotion - ' + document.querySelector(`[data-item-id=\"\${itemId}\"]`).getAttribute('data-item-name');

                            // Afficher la modal
                            promotionModal.style.display = 'flex';
                            document.body.style.overflow = 'hidden';
                        } else {
                            alert('Erreur lors du chargement de la promotion');
                        }
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        alert('Erreur de connexion lors du chargement de la promotion');
                    });
            }

            // Fonction pour afficher les messages
            function showMessage(type, message) {
                // Supprimer les anciens messages
                const existingMessage = promotionModal.querySelector('.form-message');
                if (existingMessage) {
                    existingMessage.remove();
                }

                // Créer le nouveau message
                const messageDiv = document.createElement('div');
                messageDiv.className = `form-message \${type}`;
                messageDiv.textContent = message;
                messageDiv.style.display = 'block';

                // Insérer avant les actions
                const modalActions = promotionModal.querySelector('.modal-actions');
                modalActions.parentNode.insertBefore(messageDiv, modalActions);

                // Supprimer automatiquement après 5 secondes
                setTimeout(() => {
                    if (messageDiv.parentNode) {
                        messageDiv.remove();
                    }
                }, 5000);
            }
        });
    </script>
{% endblock %}
", "admin/promotion.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/promotion.html.twig");
    }
}
