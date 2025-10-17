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

/* admin/historique.html.twig */
class __TwigTemplate_12a32ceb4bfbf616cbfcf633362dbe8f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/historique.html.twig"));

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

        yield "Historique des ventes";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/historique.css"), "html", null, true);
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
        yield "    <div class=\"historique-container\">
        ";
        // line 13
        yield "        <div class=\"historique-filter-card\">
            <form method=\"get\" class=\"historique-filter-grid\">
                <div class=\"historique-filter-group\">
                    <label for=\"date_start\" class=\"historique-filter-label\">
                        <i class=\"fas fa-calendar-alt\"></i>
                        <span data-i18n=\"start_date\">Date début</span>
                    </label>
                    <input type=\"date\" name=\"date_start\" id=\"date_start\" class=\"historique-input\"
                        value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "query", [], "any", false, false, false, 21), "get", ["date_start"], "method", false, false, false, 21), "html", null, true);
        yield "\">
                </div>

                <div class=\"historique-filter-group\">
                    <label for=\"date_end\" class=\"historique-filter-label\">
                        <i class=\"fas fa-calendar-alt\"></i>
                        <span data-i18n=\"end_date\">Date fin</span>
                    </label>
                    <input type=\"date\" name=\"date_end\" id=\"date_end\" class=\"historique-input\"
                        value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", ["date_end"], "method", false, false, false, 30), "html", null, true);
        yield "\">
                </div>

                <div class=\"historique-filter-group\">
                    <label for=\"state\" class=\"historique-filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        <span data-i18n=\"order_state\">État commande</span>
                    </label>
                    <select name=\"state\" id=\"state\" class=\"historique-input\">
                        <option value=\"\"><span data-i18n=\"all\">-- Tous --</span></option>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["states"]) || array_key_exists("states", $context) ? $context["states"] : (function () { throw new RuntimeError('Variable "states" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 41
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\"
                                ";
            // line 42
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "query", [], "any", false, false, false, 42), "get", ["state"], "method", false, false, false, 42) == CoreExtension::getAttribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 42))) ? ("selected") : (""));
            yield ">
                                ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["state"], "nameState", [], "any", false, false, false, 43), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['state'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                    </select>
                </div>

                <div class=\"historique-filter-group\">
                    <label for=\"is_paid\" class=\"historique-filter-label\">
                        <i class=\"fas fa-credit-card\"></i>
                        <span data-i18n=\"payment\">Paiement</span>
                    </label>
                    <select name=\"is_paid\" id=\"is_paid\" class=\"historique-input\">
                        <option value=\"\"><span data-i18n=\"all\">-- Tous --</span></option>
                        <option value=\"1\" ";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "query", [], "any", false, false, false, 56), "get", ["is_paid"], "method", false, false, false, 56) == "1")) ? ("selected") : (""));
        yield "><span data-i18n=\"paid\">Payé</span></option>
                        <option value=\"0\" ";
        // line 57
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "query", [], "any", false, false, false, 57), "get", ["is_paid"], "method", false, false, false, 57) == "0")) ? ("selected") : (""));
        yield "><span data-i18n=\"unpaid\">Non payé</span></option>
                    </select>
                </div>

                <div class=\"historique-filter-actions\">
                    <button type=\"submit\" class=\"historique-button\">
                        <i class=\"fas fa-search\"></i>
                        <span data-i18n=\"filter\">Filtrer</span>
                    </button>
                </div>
            </form>
        </div>

        ";
        // line 71
        yield "        <div class=\"historique-table-section\">
            <div class=\"historique-table-header\">
                <h3 class=\"historique-table-title\">
                    <i class=\"fas fa-history\"></i>
                    <span data-i18n=\"sales_history\">Historique des ventes</span>
                </h3>
            </div>

            <div class=\"historique-table-container\">
                <table class=\"historique-table\">
                    <thead>
                        <tr>
                            <th data-i18n=\"date\">Date</th>
                            <th data-i18n=\"client\">Client</th>
                            <th data-i18n=\"seller\">Vendeur</th>
                            <th data-i18n=\"order_state\">État commande</th>
                            <th data-i18n=\"total_amount\">Montant total</th>
                            <th data-i18n=\"payment\">Paiement</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sales"]) || array_key_exists("sales", $context) ? $context["sales"] : (function () { throw new RuntimeError('Variable "sales" does not exist.', 92, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sale"]) {
            // line 93
            yield "                            ";
            $context["total"] = 0;
            // line 94
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sale"], "commande", [], "any", false, false, false, 94), "details", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                // line 95
                yield "                                ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 95, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 95) * CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 95)));
                // line 96
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['detail'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "
                            <tr class=\"clickable-row\" data-sale-id=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sale"], "id", [], "any", false, false, false, 98), "html", null, true);
            yield "\">
                                <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sale"], "saleDate", [], "any", false, false, false, 99), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>";
            // line 100
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sale"], "commande", [], "any", false, false, false, 100), "client", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sale"], "commande", [], "any", false, false, false, 100), "client", [], "any", false, false, false, 100), "getUsername", [], "method", false, false, false, 100), "html", null, true)) : ("-"));
            yield "</td>
                                <td>";
            // line 101
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sale"], "commande", [], "any", false, false, false, 101), "seller", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sale"], "commande", [], "any", false, false, false, 101), "seller", [], "any", false, false, false, 101), "getUsername", [], "method", false, false, false, 101), "html", null, true)) : ("-"));
            yield "</td>
                                <td>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sale"], "commande", [], "any", false, false, false, 102), "state", [], "any", false, false, false, 102), "nameState", [], "any", false, false, false, 102), "html", null, true);
            yield "</td>
                                <td class=\"historique-amount\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 103, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " €</td>
                                <td>
                                    ";
            // line 105
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sale"], "isPaid", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 106
                yield "                                        <span class=\"historique-badge historique-badge-success\" data-i18n=\"paid\">Payé</span>
                                    ";
            } else {
                // line 108
                yield "                                        <span class=\"historique-badge historique-badge-danger\" data-i18n=\"unpaid\">Non payé</span>
                                    ";
            }
            // line 110
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 112
        if (!$context['_iterated']) {
            // line 113
            yield "                            <tr>
                                <td colspan=\"7\" class=\"historique-empty\" data-i18n=\"no_sales_found\">Aucune vente trouvée.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sale'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id=\"saleDetailsModal\" class=\"custom-modal\" style=\"display: none;\">
        <div class=\"modal-overlay\">
            <div class=\"modal-container\">
                <div class=\"modal-header\">
                    <h5 data-i18n=\"sale_details\">Détails de la vente</h5>
                    <button type=\"button\" id=\"exportPDF\" class=\"export-btn\" data-i18n=\"download_invoice\">Download the invoice</button>
                    <button type=\"button\" class=\"close-btn\" id=\"closeModal\">&times;</button>
                </div>
                <div class=\"modal-body\" id=\"saleDetailsContent\">
                    <!-- Contenu chargé via AJAX -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Variable globale pour stocker l'ID de la vente actuelle
        let currentSaleId = null;

        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('saleDetailsModal');
            const closeBtn = document.getElementById('closeModal');
            const modalContent = document.getElementById('saleDetailsContent');

            function openModal() {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
                modal.classList.remove('closing');
            }

            function closeModal() {
                modal.classList.add('closing');
                setTimeout(() => {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                    modal.classList.remove('closing');
                }, 200);
            }

            // Event listener pour fermer le modal
            closeBtn.addEventListener('click', closeModal);

            // Fermer le modal en cliquant sur l'overlay
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Fermer avec la touche Escape
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && modal.style.display === 'block') {
                    closeModal();
                }
            });

            // Event listeners pour les lignes cliquables
            document.querySelectorAll('.clickable-row').forEach(row => {
                row.addEventListener('click', () => {
                    const saleId = row.dataset.saleId;
                    currentSaleId = saleId; // Stocker l'ID de la vente

                    fetch(`/historyDetails?sale_id=\${saleId}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.html) {
                                modalContent.innerHTML = data.html;
                                openModal();
                            } else if (data.error) {
                                alert(data.error);
                            }
                        })
                        .catch(err => {
                            console.error('Erreur:', err);
                            alert('Une erreur est survenue lors du chargement des détails.');
                        });
                });
            });

            // Export PDF corrigé
            document.getElementById('exportPDF').addEventListener('click', () => {
                try {
                    // VÉRIFICATION CRITIQUE : s'assurer que jsPDF est disponible
                    if (typeof window.jspdf === 'undefined' && typeof window.jsPDF === 'undefined') {
                        alert('La bibliothèque PDF n\\'est pas chargée. Veuillez rafraîchir la page.');
                        return;
                    }

                    // Récupérer jsPDF selon la version chargée
                    const jsPDF = window.jspdf ? window.jspdf.jsPDF : window.jsPDF;

                    // Vérifications de base
                    if (!modalContent.innerHTML || modalContent.innerHTML.trim() === '' || !currentSaleId) {
                        alert('Veuillez d\\'abord sélectionner une vente en cliquant sur une ligne du tableau.');
                        return;
                    }

                    // Créer un PDF professionnel avec design moderne
                    const doc = new jsPDF();

                    // Récupérer les données structurées du modal
                    const modalHTML = modalContent.innerHTML;
                    if (!modalHTML || modalHTML.trim() === '') {
                        alert('Aucun contenu à exporter.');
                        return;
                    }

                    // === EN-TÊTE PROFESSIONNEL ===
                    // Fond coloré pour l'en-tête
                    doc.setFillColor(41, 128, 185); // Bleu professionnel
                    doc.rect(0, 0, 210, 40, 'F');

                    // Logo/Titre principal
                    doc.setTextColor(255, 255, 255);
                    doc.setFont('helvetica', 'bold');
                    doc.setFontSize(24);
                    doc.text('LIVE SHOP', 105, 15, { align: 'center' });

                    doc.setFontSize(14);
                    doc.text('FACTURE', 105, 25, { align: 'center' });

                    doc.setFont('helvetica', 'normal');
                    doc.setFontSize(10);
                    doc.text(`N° \${currentSaleId}`, 105, 32, { align: 'center' });

                    // === INFORMATIONS DE LA FACTURE ===
                    doc.setTextColor(0, 0, 0);
                    doc.setFontSize(9);
                    const today = new Date().toLocaleDateString('fr-FR');
                    doc.text(`Date d'émission: \${today}`, 20, 50);
                    doc.text(`Date de génération: \${new Date().toLocaleString('fr-FR')}`, 20, 55);

                    // === EXTRACTION DES DONNÉES STRUCTURÉES ===
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = modalHTML;

                    // Extraire les informations client
                    const clientInfo = tempDiv.querySelector('.client');
                    const sellerInfo = tempDiv.querySelector('.seller');
                    const statusInfo = tempDiv.querySelector('.invoice-status');
                    const tableRows = tempDiv.querySelectorAll('.invoice-table tbody tr');
                    const totalInfo = tempDiv.querySelector('.invoice-totals h4');

                    let yPos = 70;

                    // === INFORMATIONS CLIENT/VENDEUR ===
                    if (clientInfo && sellerInfo) {
                        // Colonne client
                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(10);
                        doc.text('FACTURÉ À', 20, yPos);

                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(9);
                        const clientText = clientInfo.textContent.replace(/\\s+/g, ' ').trim();
                        const clientLines = doc.splitTextToSize(clientText, 80);
                        doc.text(clientLines, 20, yPos + 8);

                        // Colonne vendeur
                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(10);
                        doc.text('VENDU PAR', 110, yPos);

                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(9);
                        const sellerText = sellerInfo.textContent.replace(/\\s+/g, ' ').trim();
                        const sellerLines = doc.splitTextToSize(sellerText, 80);
                        doc.text(sellerLines, 110, yPos + 8);

                        yPos += Math.max(clientLines.length, sellerLines.length) * 5 + 15;
                    }

                    // === STATUT DE LA COMMANDE ===
                    if (statusInfo) {
                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(10);
                        doc.text('STATUT:', 20, yPos);

                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(9);
                        const statusText = statusInfo.textContent.replace(/\\s+/g, ' ').trim();
                        doc.text(statusText, 50, yPos);
                        yPos += 15;
                    }

                    // Ligne séparatrice
                    doc.setDrawColor(200, 200, 200);
                    doc.setLineWidth(0.5);
                    doc.line(20, yPos, 190, yPos);
                    yPos += 10;

                    // === TABLEAU DES ARTICLES ===
                    if (tableRows.length > 0) {
                        // En-tête du tableau
                        doc.setFillColor(248, 249, 250);
                        doc.rect(20, yPos - 5, 170, 8, 'F');

                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(9);
                        doc.text('PRODUIT', 22, yPos);
                        doc.text('TAILLE', 70, yPos);
                        doc.text('QTÉ', 100, yPos);
                        doc.text('PRIX UNIT.', 120, yPos);
                        doc.text('TOTAL', 160, yPos);

                        yPos += 10;

                        // Ligne séparatrice
                        doc.setDrawColor(200, 200, 200);
                        doc.line(20, yPos - 2, 190, yPos - 2);

                        // Articles
                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(8);

                        tableRows.forEach((row, index) => {
                            const cells = row.querySelectorAll('td');
                            if (cells.length >= 5) {
                                // Alternance de couleurs pour les lignes
                                if (index % 2 === 0) {
                                    doc.setFillColor(250, 250, 250);
                                    doc.rect(20, yPos - 3, 170, 6, 'F');
                                }

                                doc.text(cells[0].textContent.trim(), 22, yPos);
                                doc.text(cells[1].textContent.trim(), 70, yPos);
                                doc.text(cells[2].textContent.trim(), 100, yPos);
                                doc.text(cells[3].textContent.trim(), 120, yPos);
                                doc.text(cells[4].textContent.trim(), 160, yPos);

                                yPos += 7;
                            }
                        });

                        yPos += 10;
                    }

                    // === TOTAUX ===
                    if (tableRows.length > 0) {
                        // Ligne séparatrice épaisse
                        doc.setDrawColor(0, 0, 0);
                        doc.setLineWidth(0.8);
                        doc.line(20, yPos, 190, yPos);
                        yPos += 10;

                        // Recalculer les totaux à partir des données du tableau
                        let totalTTC = 0;
                        tableRows.forEach((row) => {
                            const cells = row.querySelectorAll('td');
                            if (cells.length >= 5) {
                                // La colonne TOTAL (cells[4]) affiche le TTC actuel
                                // On parse pour obtenir un numérique en euros
                                const lineTTC = parseFloat(cells[4].textContent.replace(/[^0-9,.-]/g, '').replace(',', '.')) || 0;
                                totalTTC += lineTTC;
                            }
                        });

                        // Calculer HT et TVA à partir du TTC
                        const tvaRate = 0.20; // 20%
                        const totalHT = totalTTC / (1 + tvaRate);
                        const tva = totalTTC - totalHT;

                        // Afficher les détails des totaux
                        // HT et TVA en plus discret (gris + plus petit)
                        doc.setFont('helvetica', 'normal');
                        doc.setTextColor(120, 120, 120);
                        doc.setFontSize(9);
                        doc.text(`Sous-total HT: \${totalHT.toFixed(2).replace('.', ',')} €`, 120, yPos);
                        yPos += 8;

                        doc.text(`TVA (20%): \${tva.toFixed(2).replace('.', ',')} €`, 120, yPos);
                        yPos += 8;

                        // Total TTC en gras et plus grand
                        doc.setTextColor(0, 0, 0);
                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(12);
                        doc.text(`TOTAL TTC: \${totalTTC.toFixed(2).replace('.', ',')} €`, 120, yPos);
                    }

                    // === PIED DE PAGE PROFESSIONNEL ===
                    const pageCount = doc.internal.getNumberOfPages();
                    for (let i = 1; i <= pageCount; i++) {
                        doc.setPage(i);

                        // Fond gris pour le pied de page
                        doc.setFillColor(240, 240, 240);
                        doc.rect(0, 280, 210, 20, 'F');

                        // Texte du pied de page
                        doc.setTextColor(100, 100, 100);
                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(8);
                        doc.text('Merci pour votre achat !', 20, 290);
                        doc.text(`Page \${i} sur \${pageCount}`, 105, 290, { align: 'center' });
                        doc.text('LiveShop - Votre partenaire shopping', 150, 290);
                    }

                    // Sauvegarder le PDF
                    doc.save(`Facture_\${currentSaleId}.pdf`);

                } catch (error) {
                    console.error('Erreur détaillée:', error);
                    alert('Erreur lors de la génération du PDF: ' + error.message);
                }
            });
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
        return "admin/historique.html.twig";
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
        return array (  303 => 117,  294 => 113,  292 => 112,  286 => 110,  282 => 108,  278 => 106,  276 => 105,  271 => 103,  267 => 102,  263 => 101,  259 => 100,  255 => 99,  251 => 98,  248 => 97,  242 => 96,  239 => 95,  234 => 94,  231 => 93,  226 => 92,  203 => 71,  187 => 57,  183 => 56,  171 => 46,  162 => 43,  158 => 42,  153 => 41,  149 => 40,  136 => 30,  124 => 21,  114 => 13,  111 => 11,  101 => 10,  91 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/baseAdmin.html.twig' %}

{% block title %}Historique des ventes{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/historique.css') }}\">
{% endblock %}

{% block content %}
    <div class=\"historique-container\">
        {# === Filtres === #}
        <div class=\"historique-filter-card\">
            <form method=\"get\" class=\"historique-filter-grid\">
                <div class=\"historique-filter-group\">
                    <label for=\"date_start\" class=\"historique-filter-label\">
                        <i class=\"fas fa-calendar-alt\"></i>
                        <span data-i18n=\"start_date\">Date début</span>
                    </label>
                    <input type=\"date\" name=\"date_start\" id=\"date_start\" class=\"historique-input\"
                        value=\"{{ app.request.query.get('date_start') }}\">
                </div>

                <div class=\"historique-filter-group\">
                    <label for=\"date_end\" class=\"historique-filter-label\">
                        <i class=\"fas fa-calendar-alt\"></i>
                        <span data-i18n=\"end_date\">Date fin</span>
                    </label>
                    <input type=\"date\" name=\"date_end\" id=\"date_end\" class=\"historique-input\"
                        value=\"{{ app.request.query.get('date_end') }}\">
                </div>

                <div class=\"historique-filter-group\">
                    <label for=\"state\" class=\"historique-filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        <span data-i18n=\"order_state\">État commande</span>
                    </label>
                    <select name=\"state\" id=\"state\" class=\"historique-input\">
                        <option value=\"\"><span data-i18n=\"all\">-- Tous --</span></option>
                        {% for state in states %}
                            <option value=\"{{ state.id }}\"
                                {{ app.request.query.get('state') == state.id ? 'selected' }}>
                                {{ state.nameState }}
                            </option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"historique-filter-group\">
                    <label for=\"is_paid\" class=\"historique-filter-label\">
                        <i class=\"fas fa-credit-card\"></i>
                        <span data-i18n=\"payment\">Paiement</span>
                    </label>
                    <select name=\"is_paid\" id=\"is_paid\" class=\"historique-input\">
                        <option value=\"\"><span data-i18n=\"all\">-- Tous --</span></option>
                        <option value=\"1\" {{ app.request.query.get('is_paid') == '1' ? 'selected' }}><span data-i18n=\"paid\">Payé</span></option>
                        <option value=\"0\" {{ app.request.query.get('is_paid') == '0' ? 'selected' }}><span data-i18n=\"unpaid\">Non payé</span></option>
                    </select>
                </div>

                <div class=\"historique-filter-actions\">
                    <button type=\"submit\" class=\"historique-button\">
                        <i class=\"fas fa-search\"></i>
                        <span data-i18n=\"filter\">Filtrer</span>
                    </button>
                </div>
            </form>
        </div>

        {# === Tableau des ventes === #}
        <div class=\"historique-table-section\">
            <div class=\"historique-table-header\">
                <h3 class=\"historique-table-title\">
                    <i class=\"fas fa-history\"></i>
                    <span data-i18n=\"sales_history\">Historique des ventes</span>
                </h3>
            </div>

            <div class=\"historique-table-container\">
                <table class=\"historique-table\">
                    <thead>
                        <tr>
                            <th data-i18n=\"date\">Date</th>
                            <th data-i18n=\"client\">Client</th>
                            <th data-i18n=\"seller\">Vendeur</th>
                            <th data-i18n=\"order_state\">État commande</th>
                            <th data-i18n=\"total_amount\">Montant total</th>
                            <th data-i18n=\"payment\">Paiement</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for sale in sales %}
                            {% set total = 0 %}
                            {% for detail in sale.commande.details %}
                                {% set total = total + (detail.quantity * detail.price) %}
                            {% endfor %}

                            <tr class=\"clickable-row\" data-sale-id=\"{{ sale.id }}\">
                                <td>{{ sale.saleDate|date('d/m/Y H:i') }}</td>
                                <td>{{ sale.commande.client ? sale.commande.client.getUsername() : '-' }}</td>
                                <td>{{ sale.commande.seller ? sale.commande.seller.getUsername() : '-' }}</td>
                                <td>{{ sale.commande.state.nameState }}</td>
                                <td class=\"historique-amount\">{{ total|number_format(2, ',', ' ') }} €</td>
                                <td>
                                    {% if sale.isPaid %}
                                        <span class=\"historique-badge historique-badge-success\" data-i18n=\"paid\">Payé</span>
                                    {% else %}
                                        <span class=\"historique-badge historique-badge-danger\" data-i18n=\"unpaid\">Non payé</span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"historique-empty\" data-i18n=\"no_sales_found\">Aucune vente trouvée.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id=\"saleDetailsModal\" class=\"custom-modal\" style=\"display: none;\">
        <div class=\"modal-overlay\">
            <div class=\"modal-container\">
                <div class=\"modal-header\">
                    <h5 data-i18n=\"sale_details\">Détails de la vente</h5>
                    <button type=\"button\" id=\"exportPDF\" class=\"export-btn\" data-i18n=\"download_invoice\">Download the invoice</button>
                    <button type=\"button\" class=\"close-btn\" id=\"closeModal\">&times;</button>
                </div>
                <div class=\"modal-body\" id=\"saleDetailsContent\">
                    <!-- Contenu chargé via AJAX -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Variable globale pour stocker l'ID de la vente actuelle
        let currentSaleId = null;

        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('saleDetailsModal');
            const closeBtn = document.getElementById('closeModal');
            const modalContent = document.getElementById('saleDetailsContent');

            function openModal() {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
                modal.classList.remove('closing');
            }

            function closeModal() {
                modal.classList.add('closing');
                setTimeout(() => {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                    modal.classList.remove('closing');
                }, 200);
            }

            // Event listener pour fermer le modal
            closeBtn.addEventListener('click', closeModal);

            // Fermer le modal en cliquant sur l'overlay
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Fermer avec la touche Escape
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && modal.style.display === 'block') {
                    closeModal();
                }
            });

            // Event listeners pour les lignes cliquables
            document.querySelectorAll('.clickable-row').forEach(row => {
                row.addEventListener('click', () => {
                    const saleId = row.dataset.saleId;
                    currentSaleId = saleId; // Stocker l'ID de la vente

                    fetch(`/historyDetails?sale_id=\${saleId}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.html) {
                                modalContent.innerHTML = data.html;
                                openModal();
                            } else if (data.error) {
                                alert(data.error);
                            }
                        })
                        .catch(err => {
                            console.error('Erreur:', err);
                            alert('Une erreur est survenue lors du chargement des détails.');
                        });
                });
            });

            // Export PDF corrigé
            document.getElementById('exportPDF').addEventListener('click', () => {
                try {
                    // VÉRIFICATION CRITIQUE : s'assurer que jsPDF est disponible
                    if (typeof window.jspdf === 'undefined' && typeof window.jsPDF === 'undefined') {
                        alert('La bibliothèque PDF n\\'est pas chargée. Veuillez rafraîchir la page.');
                        return;
                    }

                    // Récupérer jsPDF selon la version chargée
                    const jsPDF = window.jspdf ? window.jspdf.jsPDF : window.jsPDF;

                    // Vérifications de base
                    if (!modalContent.innerHTML || modalContent.innerHTML.trim() === '' || !currentSaleId) {
                        alert('Veuillez d\\'abord sélectionner une vente en cliquant sur une ligne du tableau.');
                        return;
                    }

                    // Créer un PDF professionnel avec design moderne
                    const doc = new jsPDF();

                    // Récupérer les données structurées du modal
                    const modalHTML = modalContent.innerHTML;
                    if (!modalHTML || modalHTML.trim() === '') {
                        alert('Aucun contenu à exporter.');
                        return;
                    }

                    // === EN-TÊTE PROFESSIONNEL ===
                    // Fond coloré pour l'en-tête
                    doc.setFillColor(41, 128, 185); // Bleu professionnel
                    doc.rect(0, 0, 210, 40, 'F');

                    // Logo/Titre principal
                    doc.setTextColor(255, 255, 255);
                    doc.setFont('helvetica', 'bold');
                    doc.setFontSize(24);
                    doc.text('LIVE SHOP', 105, 15, { align: 'center' });

                    doc.setFontSize(14);
                    doc.text('FACTURE', 105, 25, { align: 'center' });

                    doc.setFont('helvetica', 'normal');
                    doc.setFontSize(10);
                    doc.text(`N° \${currentSaleId}`, 105, 32, { align: 'center' });

                    // === INFORMATIONS DE LA FACTURE ===
                    doc.setTextColor(0, 0, 0);
                    doc.setFontSize(9);
                    const today = new Date().toLocaleDateString('fr-FR');
                    doc.text(`Date d'émission: \${today}`, 20, 50);
                    doc.text(`Date de génération: \${new Date().toLocaleString('fr-FR')}`, 20, 55);

                    // === EXTRACTION DES DONNÉES STRUCTURÉES ===
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = modalHTML;

                    // Extraire les informations client
                    const clientInfo = tempDiv.querySelector('.client');
                    const sellerInfo = tempDiv.querySelector('.seller');
                    const statusInfo = tempDiv.querySelector('.invoice-status');
                    const tableRows = tempDiv.querySelectorAll('.invoice-table tbody tr');
                    const totalInfo = tempDiv.querySelector('.invoice-totals h4');

                    let yPos = 70;

                    // === INFORMATIONS CLIENT/VENDEUR ===
                    if (clientInfo && sellerInfo) {
                        // Colonne client
                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(10);
                        doc.text('FACTURÉ À', 20, yPos);

                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(9);
                        const clientText = clientInfo.textContent.replace(/\\s+/g, ' ').trim();
                        const clientLines = doc.splitTextToSize(clientText, 80);
                        doc.text(clientLines, 20, yPos + 8);

                        // Colonne vendeur
                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(10);
                        doc.text('VENDU PAR', 110, yPos);

                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(9);
                        const sellerText = sellerInfo.textContent.replace(/\\s+/g, ' ').trim();
                        const sellerLines = doc.splitTextToSize(sellerText, 80);
                        doc.text(sellerLines, 110, yPos + 8);

                        yPos += Math.max(clientLines.length, sellerLines.length) * 5 + 15;
                    }

                    // === STATUT DE LA COMMANDE ===
                    if (statusInfo) {
                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(10);
                        doc.text('STATUT:', 20, yPos);

                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(9);
                        const statusText = statusInfo.textContent.replace(/\\s+/g, ' ').trim();
                        doc.text(statusText, 50, yPos);
                        yPos += 15;
                    }

                    // Ligne séparatrice
                    doc.setDrawColor(200, 200, 200);
                    doc.setLineWidth(0.5);
                    doc.line(20, yPos, 190, yPos);
                    yPos += 10;

                    // === TABLEAU DES ARTICLES ===
                    if (tableRows.length > 0) {
                        // En-tête du tableau
                        doc.setFillColor(248, 249, 250);
                        doc.rect(20, yPos - 5, 170, 8, 'F');

                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(9);
                        doc.text('PRODUIT', 22, yPos);
                        doc.text('TAILLE', 70, yPos);
                        doc.text('QTÉ', 100, yPos);
                        doc.text('PRIX UNIT.', 120, yPos);
                        doc.text('TOTAL', 160, yPos);

                        yPos += 10;

                        // Ligne séparatrice
                        doc.setDrawColor(200, 200, 200);
                        doc.line(20, yPos - 2, 190, yPos - 2);

                        // Articles
                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(8);

                        tableRows.forEach((row, index) => {
                            const cells = row.querySelectorAll('td');
                            if (cells.length >= 5) {
                                // Alternance de couleurs pour les lignes
                                if (index % 2 === 0) {
                                    doc.setFillColor(250, 250, 250);
                                    doc.rect(20, yPos - 3, 170, 6, 'F');
                                }

                                doc.text(cells[0].textContent.trim(), 22, yPos);
                                doc.text(cells[1].textContent.trim(), 70, yPos);
                                doc.text(cells[2].textContent.trim(), 100, yPos);
                                doc.text(cells[3].textContent.trim(), 120, yPos);
                                doc.text(cells[4].textContent.trim(), 160, yPos);

                                yPos += 7;
                            }
                        });

                        yPos += 10;
                    }

                    // === TOTAUX ===
                    if (tableRows.length > 0) {
                        // Ligne séparatrice épaisse
                        doc.setDrawColor(0, 0, 0);
                        doc.setLineWidth(0.8);
                        doc.line(20, yPos, 190, yPos);
                        yPos += 10;

                        // Recalculer les totaux à partir des données du tableau
                        let totalTTC = 0;
                        tableRows.forEach((row) => {
                            const cells = row.querySelectorAll('td');
                            if (cells.length >= 5) {
                                // La colonne TOTAL (cells[4]) affiche le TTC actuel
                                // On parse pour obtenir un numérique en euros
                                const lineTTC = parseFloat(cells[4].textContent.replace(/[^0-9,.-]/g, '').replace(',', '.')) || 0;
                                totalTTC += lineTTC;
                            }
                        });

                        // Calculer HT et TVA à partir du TTC
                        const tvaRate = 0.20; // 20%
                        const totalHT = totalTTC / (1 + tvaRate);
                        const tva = totalTTC - totalHT;

                        // Afficher les détails des totaux
                        // HT et TVA en plus discret (gris + plus petit)
                        doc.setFont('helvetica', 'normal');
                        doc.setTextColor(120, 120, 120);
                        doc.setFontSize(9);
                        doc.text(`Sous-total HT: \${totalHT.toFixed(2).replace('.', ',')} €`, 120, yPos);
                        yPos += 8;

                        doc.text(`TVA (20%): \${tva.toFixed(2).replace('.', ',')} €`, 120, yPos);
                        yPos += 8;

                        // Total TTC en gras et plus grand
                        doc.setTextColor(0, 0, 0);
                        doc.setFont('helvetica', 'bold');
                        doc.setFontSize(12);
                        doc.text(`TOTAL TTC: \${totalTTC.toFixed(2).replace('.', ',')} €`, 120, yPos);
                    }

                    // === PIED DE PAGE PROFESSIONNEL ===
                    const pageCount = doc.internal.getNumberOfPages();
                    for (let i = 1; i <= pageCount; i++) {
                        doc.setPage(i);

                        // Fond gris pour le pied de page
                        doc.setFillColor(240, 240, 240);
                        doc.rect(0, 280, 210, 20, 'F');

                        // Texte du pied de page
                        doc.setTextColor(100, 100, 100);
                        doc.setFont('helvetica', 'normal');
                        doc.setFontSize(8);
                        doc.text('Merci pour votre achat !', 20, 290);
                        doc.text(`Page \${i} sur \${pageCount}`, 105, 290, { align: 'center' });
                        doc.text('LiveShop - Votre partenaire shopping', 150, 290);
                    }

                    // Sauvegarder le PDF
                    doc.save(`Facture_\${currentSaleId}.pdf`);

                } catch (error) {
                    console.error('Erreur détaillée:', error);
                    alert('Erreur lors de la génération du PDF: ' + error.message);
                }
            });
        });
    </script>
{% endblock %}
", "admin/historique.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/historique.html.twig");
    }
}
