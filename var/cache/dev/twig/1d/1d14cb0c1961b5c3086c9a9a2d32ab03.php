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

/* client/index.html.twig */
class __TwigTemplate_1ffd3cd09dec41b4d75b4d46d9d9b18c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>LiveShop</title>
    <link href=\"https://fonts.googleapis.com/css?family=Inter:400,600&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', Arial, sans-serif;
            background: #f6f6f6;
        }
        .page {
            padding: 100px 30px 40px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .section {
            margin-bottom: 50px;
        }
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 14px;
        }
        .section-title { font-size: 18px; font-weight: 700; color: #000; }
        body.dark-theme .section-title { color: #fff; }
        .see-all {
            color: #567AF4;
            text-decoration: none;
            font-weight: 600;
        }
        .divider { height: 4px; background: #7a61ff; border-radius: 2px; margin-bottom: 18px; width: 70%; }
        body.dark-theme .divider { background: #567AF4; }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .card { background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); overflow: hidden; transition: transform .2s ease; }
        body.dark-theme .card { background: #1f1f1f; box-shadow: 0 4px 12px rgba(0,0,0,0.5); }
        .card:hover { transform: translateY(-2px); }
        .thumb {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            overflow: hidden;
        }
        .thumb img {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            width: 100%; height: 100%;
            object-fit: cover;
        }
        .card.is-live .thumb img {
            filter: blur(3px);
            transform: scale(1.06);
        }
        .badge { position: absolute; top: 8px; left: 8px; display: flex; align-items: center; gap: 6px; background: rgba(0,0,0,0.65); color: #fff; padding: 4px 8px; border-radius: 999px; font-size: 12px; font-weight: 700; }
        .viewer { position: absolute; top: 8px; right: 8px; background: #ff3b30; color: #fff; padding: 4px 8px; border-radius: 999px; font-size: 12px; font-weight: 700; }
        .username-chip { position: absolute; bottom: 10px; left: 10px; background: #1e90ff; color: #fff; border-radius: 999px; padding: 4px 10px; font-size: 12px; font-weight: 600; }
        @media (max-width: 992px){ .grid{ grid-template-columns: repeat(2,1fr);} }
        @media (max-width: 576px){ .grid{ grid-template-columns: 1fr;} }
    </style>
</head>
<body>
    ";
        // line 69
        yield from $this->load("components/navbarClient.html.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "    <div class=\"page\">
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Followed</div>
                <a class=\"see-all\" href=\"#\">voir tous</a>
            </div>
            <div class=\"divider\"></div>

            <div class=\"grid\" id=\"live-grid\">
                ";
        // line 80
        yield "            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Recommended</div>
                <a class=\"see-all\" href=\"#\">voir tous</a>
            </div>
            <div class=\"divider\"></div>

            <div class=\"grid\">
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommendedLives"]) || array_key_exists("recommendedLives", $context) ? $context["recommendedLives"] : (function () { throw new RuntimeError('Variable "recommendedLives" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["live"]) {
            // line 92
            yield "                    <a class=\"card";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["live"], "isLive", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " is-live";
            }
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_live", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["live"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" style=\"text-decoration:none;\">
                        <div class=\"thumb\">
                            <img src=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["live"], "thumbnail", [], "any", false, false, false, 94), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["live"], "title", [], "any", false, false, false, 94), "html", null, true);
            yield "\">
                            <div class=\"badge\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["live"], "language", [], "any", false, false, false, 95), "html", null, true);
            yield "</div>
                            <div class=\"viewer\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["live"], "viewers", [], "any", false, false, false, 96), "html", null, true);
            yield "</div>
                            <div class=\"username-chip\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["live"], "username", [], "any", false, false, false, 97), "html", null, true);
            yield "</div>
                        </div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['live'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "            </div>
        </div>
    </div>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
    function loadLives() {
        \$.get('/api/live/active', function(response) {
            let html = '';
            response.lives.forEach(function(live) {
                html += `
                    <a class=\"card is-live\" href=\"/client/live/\${live.id}\" style=\"text-decoration:none;\">
                        <div class=\"thumb\">
                            <img src=\"\${live.seller?.pdp || '/default-pdp.jpg'}\" alt=\"\${live.seller?.name || 'Streamer'}\">
                            <div class=\"badge\">\${live.language || 'FR'}</div>
                            <div class=\"viewer\">\${live.viewers || 0}</div>
                            <div class=\"username-chip\">\${live.seller?.name || 'Streamer'}</div>
                        </div>
                    </a>
                `;
            });
            \$('#live-grid').html(html);
        });
    }
    setInterval(loadLives, 5000);
    loadLives();
    </script>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/index.html.twig";
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
        return array (  178 => 101,  168 => 97,  164 => 96,  160 => 95,  154 => 94,  144 => 92,  140 => 91,  127 => 80,  116 => 70,  114 => 69,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# filepath: templates/client/index.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>LiveShop</title>
    <link href=\"https://fonts.googleapis.com/css?family=Inter:400,600&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', Arial, sans-serif;
            background: #f6f6f6;
        }
        .page {
            padding: 100px 30px 40px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .section {
            margin-bottom: 50px;
        }
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 14px;
        }
        .section-title { font-size: 18px; font-weight: 700; color: #000; }
        body.dark-theme .section-title { color: #fff; }
        .see-all {
            color: #567AF4;
            text-decoration: none;
            font-weight: 600;
        }
        .divider { height: 4px; background: #7a61ff; border-radius: 2px; margin-bottom: 18px; width: 70%; }
        body.dark-theme .divider { background: #567AF4; }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .card { background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); overflow: hidden; transition: transform .2s ease; }
        body.dark-theme .card { background: #1f1f1f; box-shadow: 0 4px 12px rgba(0,0,0,0.5); }
        .card:hover { transform: translateY(-2px); }
        .thumb {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            overflow: hidden;
        }
        .thumb img {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            width: 100%; height: 100%;
            object-fit: cover;
        }
        .card.is-live .thumb img {
            filter: blur(3px);
            transform: scale(1.06);
        }
        .badge { position: absolute; top: 8px; left: 8px; display: flex; align-items: center; gap: 6px; background: rgba(0,0,0,0.65); color: #fff; padding: 4px 8px; border-radius: 999px; font-size: 12px; font-weight: 700; }
        .viewer { position: absolute; top: 8px; right: 8px; background: #ff3b30; color: #fff; padding: 4px 8px; border-radius: 999px; font-size: 12px; font-weight: 700; }
        .username-chip { position: absolute; bottom: 10px; left: 10px; background: #1e90ff; color: #fff; border-radius: 999px; padding: 4px 10px; font-size: 12px; font-weight: 600; }
        @media (max-width: 992px){ .grid{ grid-template-columns: repeat(2,1fr);} }
        @media (max-width: 576px){ .grid{ grid-template-columns: 1fr;} }
    </style>
</head>
<body>
    {% include 'components/navbarClient.html.twig' %}
    <div class=\"page\">
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Followed</div>
                <a class=\"see-all\" href=\"#\">voir tous</a>
            </div>
            <div class=\"divider\"></div>

            <div class=\"grid\" id=\"live-grid\">
                {# Le contenu dynamique sera injecté ici #}
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Recommended</div>
                <a class=\"see-all\" href=\"#\">voir tous</a>
            </div>
            <div class=\"divider\"></div>

            <div class=\"grid\">
                {% for live in recommendedLives %}
                    <a class=\"card{% if live.isLive %} is-live{% endif %}\" href=\"{{ path('app_client_live', { id: live.id }) }}\" style=\"text-decoration:none;\">
                        <div class=\"thumb\">
                            <img src=\"{{ live.thumbnail }}\" alt=\"{{ live.title }}\">
                            <div class=\"badge\">{{ live.language }}</div>
                            <div class=\"viewer\">{{ live.viewers }}</div>
                            <div class=\"username-chip\">{{ live.username }}</div>
                        </div>
                    </a>
                {% endfor %}
            </div>
        </div>
    </div>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
    function loadLives() {
        \$.get('/api/live/active', function(response) {
            let html = '';
            response.lives.forEach(function(live) {
                html += `
                    <a class=\"card is-live\" href=\"/client/live/\${live.id}\" style=\"text-decoration:none;\">
                        <div class=\"thumb\">
                            <img src=\"\${live.seller?.pdp || '/default-pdp.jpg'}\" alt=\"\${live.seller?.name || 'Streamer'}\">
                            <div class=\"badge\">\${live.language || 'FR'}</div>
                            <div class=\"viewer\">\${live.viewers || 0}</div>
                            <div class=\"username-chip\">\${live.seller?.name || 'Streamer'}</div>
                        </div>
                    </a>
                `;
            });
            \$('#live-grid').html(html);
        });
    }
    setInterval(loadLives, 5000);
    loadLives();
    </script>
</body>
</html>", "client/index.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/client/index.html.twig");
    }
}
