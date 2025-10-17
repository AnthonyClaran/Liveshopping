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

/* admin/historyDetails.html.twig */
class __TwigTemplate_a8249e0695628aba68c904ec581a4a32 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/historyDetails.html.twig"));

        // line 1
        yield "<div class=\"invoice-container\">
    <!-- Infos client & vendeur -->
    <div class=\"invoice-infos\">
        <div class=\"client\">
            <h4 data-i18n=\"billed_to\">Facturé à</h4>
            <p>
                <strong>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 7, $this->source); })()), "commande", [], "any", false, false, false, 7), "client", [], "any", false, false, false, 7), "username", [], "any", false, false, false, 7), "html", null, true);
        yield "</strong><br>
                ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 8, $this->source); })()), "commande", [], "any", false, false, false, 8), "client", [], "any", false, false, false, 8), "email", [], "any", false, false, false, 8), "html", null, true);
        yield "<br>
                ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 9, $this->source); })()), "commande", [], "any", false, false, false, 9), "client", [], "any", false, false, false, 9), "contact", [], "any", false, false, false, 9), "html", null, true);
        yield "<br>
                ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 10, $this->source); })()), "commande", [], "any", false, false, false, 10), "client", [], "any", false, false, false, 10), "address", [], "any", false, false, false, 10), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 10, $this->source); })()), "commande", [], "any", false, false, false, 10), "client", [], "any", false, false, false, 10), "country", [], "any", false, false, false, 10), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"seller\">
            <h4 data-i18n=\"sold_by\">Vendu par</h4>
            <p>
                <strong>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 16, $this->source); })()), "commande", [], "any", false, false, false, 16), "seller", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
        yield "</strong><br>
                ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 17, $this->source); })()), "commande", [], "any", false, false, false, 17), "seller", [], "any", false, false, false, 17), "email", [], "any", false, false, false, 17), "html", null, true);
        yield "<br>
                ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 18, $this->source); })()), "commande", [], "any", false, false, false, 18), "seller", [], "any", false, false, false, 18), "contact", [], "any", false, false, false, 18), "html", null, true);
        yield "<br>
                <span data-i18n=\"certified_seller\">Vendeur certifié</span>
            </p>
        </div>
    </div>

    <!-- Statut -->
    <div class=\"invoice-status\">
        <span class=\"badge info\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 26, $this->source); })()), "commande", [], "any", false, false, false, 26), "state", [], "any", false, false, false, 26), "nameState", [], "any", false, false, false, 26), "html", null, true);
        yield "</span>
        ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 27, $this->source); })()), "isPaid", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "            <span class=\"badge success\" data-i18n=\"paid\">Payé</span>
        ";
        } else {
            // line 30
            yield "            <span class=\"badge warning\" data-i18n=\"pending_payment\">En attente de paiement</span>
        ";
        }
        // line 32
        yield "    </div>

    <!-- Tableau des articles -->
    <div class=\"invoice-table-container\">
        <table class=\"invoice-table\">
            <thead>
                <tr>
                    <th data-i18n=\"product\">Produit</th>
                    <th data-i18n=\"size\">Taille</th>
                    <th data-i18n=\"quantity\">Quantité</th>
                    <th data-i18n=\"unit_price\">Prix unitaire</th>
                    <th data-i18n=\"total\">Total</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 47
        $context["total"] = 0;
        // line 48
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sale"]) || array_key_exists("sale", $context) ? $context["sale"] : (function () { throw new RuntimeError('Variable "sale" does not exist.', 48, $this->source); })()), "commande", [], "any", false, false, false, 48), "details", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 49
            yield "                    ";
            $context["lineTotal"] = (CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 49) * CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 49));
            // line 50
            yield "                    ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()) + (isset($context["lineTotal"]) || array_key_exists("lineTotal", $context) ? $context["lineTotal"] : (function () { throw new RuntimeError('Variable "lineTotal" does not exist.', 50, $this->source); })()));
            // line 51
            yield "                    <tr>
                        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "itemSize", [], "any", false, false, false, 52), "item", [], "any", false, false, false, 52), "nameItem", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                        <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "itemSize", [], "any", false, false, false, 53), "valueSize", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                        <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                        <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 55), 2, ",", " "), "html", null, true);
            yield " €</td>
                        <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["lineTotal"]) || array_key_exists("lineTotal", $context) ? $context["lineTotal"] : (function () { throw new RuntimeError('Variable "lineTotal" does not exist.', 56, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " €</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['detail'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "            </tbody>
        </table>
    </div>

    <!-- Totaux -->
    ";
        // line 64
        $context["tvaRate"] = 0.2;
        // line 65
        yield "    ";
        $context["totalTTC"] = (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 65, $this->source); })());
        // line 66
        yield "    ";
        $context["totalHT"] = ((isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new RuntimeError('Variable "totalTTC" does not exist.', 66, $this->source); })()) / (1 + (isset($context["tvaRate"]) || array_key_exists("tvaRate", $context) ? $context["tvaRate"] : (function () { throw new RuntimeError('Variable "tvaRate" does not exist.', 66, $this->source); })())));
        // line 67
        yield "    ";
        $context["tva"] = ((isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new RuntimeError('Variable "totalTTC" does not exist.', 67, $this->source); })()) - (isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new RuntimeError('Variable "totalHT" does not exist.', 67, $this->source); })()));
        // line 68
        yield "    <div class=\"invoice-totals\">
        <p style=\"margin: 0; color: #6b7280; font-size: 0.9rem;\"><span data-i18n=\"total_ht\">Total HT</span> : ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new RuntimeError('Variable "totalHT" does not exist.', 69, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</p>
        <p style=\"margin: 4px 0 0; color: #6b7280; font-size: 0.9rem;\"><span data-i18n=\"vat\">TVA</span> (";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["tvaRate"]) || array_key_exists("tvaRate", $context) ? $context["tvaRate"] : (function () { throw new RuntimeError('Variable "tvaRate" does not exist.', 70, $this->source); })()) * 100), 0, ",", " "), "html", null, true);
        yield "%) : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 70, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</p>
        <h4 style=\"margin-top: 8px;\"><span data-i18n=\"total_ttc\">Total TTC</span> : ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new RuntimeError('Variable "totalTTC" does not exist.', 71, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</h4>
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
        return "admin/historyDetails.html.twig";
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
        return array (  198 => 71,  192 => 70,  188 => 69,  185 => 68,  182 => 67,  179 => 66,  176 => 65,  174 => 64,  167 => 59,  158 => 56,  154 => 55,  150 => 54,  146 => 53,  142 => 52,  139 => 51,  136 => 50,  133 => 49,  128 => 48,  126 => 47,  109 => 32,  105 => 30,  101 => 28,  99 => 27,  95 => 26,  84 => 18,  80 => 17,  76 => 16,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"invoice-container\">
    <!-- Infos client & vendeur -->
    <div class=\"invoice-infos\">
        <div class=\"client\">
            <h4 data-i18n=\"billed_to\">Facturé à</h4>
            <p>
                <strong>{{ sale.commande.client.username }}</strong><br>
                {{ sale.commande.client.email }}<br>
                {{ sale.commande.client.contact }}<br>
                {{ sale.commande.client.address }}, {{ sale.commande.client.country }}
            </p>
        </div>
        <div class=\"seller\">
            <h4 data-i18n=\"sold_by\">Vendu par</h4>
            <p>
                <strong>{{ sale.commande.seller.username }}</strong><br>
                {{ sale.commande.seller.email }}<br>
                {{ sale.commande.seller.contact }}<br>
                <span data-i18n=\"certified_seller\">Vendeur certifié</span>
            </p>
        </div>
    </div>

    <!-- Statut -->
    <div class=\"invoice-status\">
        <span class=\"badge info\">{{ sale.commande.state.nameState }}</span>
        {% if sale.isPaid %}
            <span class=\"badge success\" data-i18n=\"paid\">Payé</span>
        {% else %}
            <span class=\"badge warning\" data-i18n=\"pending_payment\">En attente de paiement</span>
        {% endif %}
    </div>

    <!-- Tableau des articles -->
    <div class=\"invoice-table-container\">
        <table class=\"invoice-table\">
            <thead>
                <tr>
                    <th data-i18n=\"product\">Produit</th>
                    <th data-i18n=\"size\">Taille</th>
                    <th data-i18n=\"quantity\">Quantité</th>
                    <th data-i18n=\"unit_price\">Prix unitaire</th>
                    <th data-i18n=\"total\">Total</th>
                </tr>
            </thead>
            <tbody>
                {% set total = 0 %}
                {% for detail in sale.commande.details %}
                    {% set lineTotal = detail.quantity * detail.price %}
                    {% set total = total + lineTotal %}
                    <tr>
                        <td>{{ detail.itemSize.item.nameItem }}</td>
                        <td>{{ detail.itemSize.valueSize }}</td>
                        <td>{{ detail.quantity }}</td>
                        <td>{{ detail.price|number_format(2, ',', ' ') }} €</td>
                        <td>{{ lineTotal|number_format(2, ',', ' ') }} €</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <!-- Totaux -->
    {% set tvaRate = 0.20 %}
    {% set totalTTC = total %}
    {% set totalHT = totalTTC / (1 + tvaRate) %}
    {% set tva = totalTTC - totalHT %}
    <div class=\"invoice-totals\">
        <p style=\"margin: 0; color: #6b7280; font-size: 0.9rem;\"><span data-i18n=\"total_ht\">Total HT</span> : {{ totalHT|number_format(2, ',', ' ') }} €</p>
        <p style=\"margin: 4px 0 0; color: #6b7280; font-size: 0.9rem;\"><span data-i18n=\"vat\">TVA</span> ({{ (tvaRate * 100)|number_format(0, ',', ' ') }}%) : {{ tva|number_format(2, ',', ' ') }} €</p>
        <h4 style=\"margin-top: 8px;\"><span data-i18n=\"total_ttc\">Total TTC</span> : {{ totalTTC|number_format(2, ',', ' ') }} €</h4>
    </div>
</div>
", "admin/historyDetails.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/historyDetails.html.twig");
    }
}
