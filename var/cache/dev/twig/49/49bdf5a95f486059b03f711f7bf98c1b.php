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

/* client/live.html.twig */
class __TwigTemplate_ea6dd31fa827a7e4a6fb3b86fb297c86 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/live.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Live</title>
    <link href=\"https://fonts.googleapis.com/css?family=Inter:400,600&display=swap\" rel=\"stylesheet\">
    <style>
        body { margin:0; font-family: 'Inter', Arial, sans-serif; background:#f6f6f6; }
        .page { padding: 100px 20px 30px; max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 340px; gap: 24px; }
        .player-card { background:#fff; border-radius: 24px; box-shadow: 0 12px 24px rgba(0,0,0,0.15); overflow: hidden; }
        .player-thumb { position: relative; width: 100%; padding-top: 56.25%; border-radius: 24px; overflow:hidden; background:#000; }
        .player-thumb img, .player-thumb video { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; }
        .live-badge { position:absolute; top:12px; left:50%; transform: translateX(-50%); background:#ff3b30; color:#fff; font-weight:700; padding:6px 14px; border-radius:999px; }
        .viewer-group { position:absolute; top:12px; left:12px; display:flex; align-items:center; gap:8px; }
        .viewer-icons { display:flex; align-items:center; gap:6px; background:#ffffff; color:#567AF4; border-radius:999px; padding:4px 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.12); }
        .viewer-pill { background:#ff3b30; color:#fff; padding:4px 10px; border-radius:999px; font-weight:700; }
        .below-bar { display:flex; align-items:flex-start; justify-content:space-between; gap:12px; padding:14px 18px 16px; }
        .meta { display:flex; align-items:center; gap:12px; }
        .avatar { width:40px; height:40px; border-radius:50%; overflow:hidden; }
        .avatar img { width:100%; height:100%; object-fit:cover; }
        .username-chip { background:#1e90ff; color:#fff; padding:6px 12px; border-radius:999px; font-weight:700; }
        .follow-wrap { margin-top:10px; }
        .btn { display:inline-flex; align-items:center; justify-content:center; gap:8px; padding:12px 18px; border-radius:12px; border:none; cursor:pointer; font-weight:700; box-shadow: 0 6px 12px rgba(0,0,0,0.12); }
        .btn-like { background:#ff4d6d; color:#fff; }
        .btn-cart { background:#ff4d6d; color:#fff; }
        .btn-follow { background:#ff2d55; color:#fff; }
        .right-actions { display:flex; gap:14px; }
        .description { background:#fff; border-radius: 16px; box-shadow: 0 12px 24px rgba(0,0,0,0.12); padding: 16px 18px; margin-top: 8px; }
        .desc-title { font-weight:1000; margin-bottom:8px; }
        .desc-list { list-style:none; padding:0; margin:0 0 8px; }
        .desc-list li { display:flex; align-items:flex-start; gap:8px; margin:6px 0; }
        .desc-list li .dot { width:8px; height:8px; background:#567AF4; border-radius:50%; margin-top:6px; }
        .products { display:flex; flex-direction:column; gap:16px; }
        .product { display:flex; gap:12px; background:#fff; border-radius:16px; padding:12px; box-shadow: 0 12px 24px rgba(0,0,0,0.12); align-items:center; }
        .product img { width:92px; height:64px; object-fit:cover; border-radius:12px; }
        .product .name { font-weight:800; }
        .product .price { color:#333; margin-top:4px; }
        .product .cta { margin-left:auto; }
        .btn-bag { background:#567AF4; color:#fff; border:none; padding:8px 12px; border-radius:999px; cursor:pointer; font-weight:700; }
        @media (max-width: 992px) { .page { grid-template-columns: 1fr; } .right-actions{ margin-top:10px; } }
        /* Dark theme */
        body.dark-theme { background: #121212; }
        body.dark-theme .player-card, body.dark-theme .description, body.dark-theme .product { background:#1f1f1f; box-shadow: 0 12px 24px rgba(0,0,0,0.5); }
        body.dark-theme .desc-title, body.dark-theme .product .name, body.dark-theme .product .price { color:#fff; }
        /* Lisibilité du contenu de la description en dark */
        body.dark-theme .description { color: #e6e6e6; }
        body.dark-theme .description p { color: #e0e0e0; line-height: 1.55; }
        body.dark-theme .description li { color: #e0e0e0; }
        body.dark-theme .description a { color: #9ec1ff; }
    </style>
    ";
        // line 51
        yield from $this->load("components/navbarClient.html.twig", 51)->unwrap()->yield($context);
        // line 52
        yield "    <script>
      // Petits handlers mock
      function likeLive(){
        const el = document.getElementById('likeCount');
        el.textContent = parseInt(el.textContent, 10) + 1;
      }

      // WebRTC Viewer pour recevoir le flux du streamer via un serveur de signalisation WebSocket (localhost:8080)
      document.addEventListener('DOMContentLoaded', function(){
        const videoEl = document.getElementById('livePlayer');
        if (!videoEl) return;

        let pc = null;
        let signaling = null;
        // Détection auto de l'URL du serveur de signalisation avec fallback localhost
        const params = new URLSearchParams(window.location.search);
        const forcedSignalHost = params.get('signal');
        const proto = window.location.protocol === 'https:' ? 'wss' : 'ws';
        const altProto = proto === 'wss' ? 'ws' : 'wss';
        const host = window.location.hostname || 'localhost';
        const port = 9090;
        const baseHosts = [host, 'localhost', '127.0.0.1', '192.168.88.28'];
        const hosts = Array.from(new Set([
          ...(forcedSignalHost ? [forcedSignalHost] : []),
          ...baseHosts
        ]));
        const urlsTmp = [];
        hosts.forEach(h => { urlsTmp.push(`\${proto}://\${h}:\${port}`); urlsTmp.push(`\${altProto}://\${h}:\${port}`); });
        const urls = Array.from(new Set(urlsTmp));
        console.log('[CLIENT-LIVE] WS candidates =', urls);
        function connectWS(url, onFail) {
          try {
            const ws = new WebSocket('wss://shoplive-tkjc.onrender.com');
            ws.onerror = () => {
              if (onFail) onFail();
            };
            return ws;
          } catch (e) {
            if (onFail) onFail();
            return null;
          }
        }
        let idx = 0;
        function tryNext(){
          if (idx >= urls.length) {
            console.error('[CLIENT-LIVE] WS: toutes les tentatives ont échoué');
            return;
          }
          const url = urls[idx++];
          console.log('[CLIENT-LIVE] WS connecting', url);
          signaling = connectWS(url, tryNext);
        }
        tryNext();
        if (!signaling) return;

        function createPeerConnection(){
          pc = new RTCPeerConnection({
            iceServers: [{ urls: 'stun:stun.l.google.com:19302' }]
          });
          pc.ontrack = (event) => {
            if (event.streams && event.streams[0]) {
              videoEl.srcObject = event.streams[0];
              console.log('[CLIENT-LIVE] ontrack stream reçu');
            }
          };
          pc.onicecandidate = (e) => {
            if (e.candidate) {
              console.log('[CLIENT-LIVE] ICE -> streamer');
              signaling.send(JSON.stringify({ type: 'candidate', candidate: e.candidate, target: 'streamer', viewerId: signaling.viewerId }));
            }
          };
          pc.onconnectionstatechange = () => console.log('[CLIENT-LIVE] pc.connectionState', pc.connectionState);
          pc.onsignalingstatechange = () => console.log('[CLIENT-LIVE] pc.signalingState', pc.signalingState);
          pc.onicegatheringstatechange = () => console.log('[CLIENT-LIVE] pc.iceGatheringState', pc.iceGatheringState);
        }

        signaling.onopen = () => {
          const viewerId = Math.random().toString(36).slice(2);
          signaling.viewerId = viewerId;
          const adminId = ";
        // line 131
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 131, $this->source); })()), "seller", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 131, $this->source); })()), "seller", [], "any", false, false, false, 131), "id", [], "any", false, false, false, 131), "html", null, true)) : (0));
        yield ";
          console.log('[CLIENT-LIVE] WS open. viewerId=', viewerId, 'adminId=', adminId);
          signaling.send(JSON.stringify({ type: 'viewer', viewerId, adminId }));
        };

        signaling.onmessage = async (event) => {
          const data = JSON.parse(event.data);
          console.log('[CLIENT-LIVE] WS message', data);
          try {
            if (data.type === 'offer') {
              console.log('[CLIENT-LIVE] offer reçue');
              if (!pc) createPeerConnection();
              await pc.setRemoteDescription(new RTCSessionDescription(data.offer));
              const answer = await pc.createAnswer();
              await pc.setLocalDescription(answer);
              signaling.send(JSON.stringify({ type: 'answer', answer, viewerId: signaling.viewerId }));
              console.log('[CLIENT-LIVE] answer envoyée, viewerId=', signaling.viewerId);
            } else if (data.type === 'candidate' && pc) {
              console.log('[CLIENT-LIVE] ICE <- streamer');
              await pc.addIceCandidate(new RTCIceCandidate(data.candidate));
            } else if (data.type === 'end') {
              console.warn('[CLIENT-LIVE] Fin du live reçue');
              videoEl.pause();
              videoEl.poster = '";
        // line 154
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 154, $this->source); })()), "seller", [], "any", false, false, false, 154) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 154, $this->source); })()), "seller", [], "any", false, false, false, 154), "images", [], "any", false, false, false, 154))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 154, $this->source); })()), "seller", [], "any", false, false, false, 154), "images", [], "any", false, false, false, 154)), "html", null, true)) : ("/uploads/6891e6164b5d5.jpg"));
        yield "';
              if (videoEl.srcObject) {
                videoEl.srcObject.getTracks().forEach(t => t.stop());
                videoEl.srcObject = null;
              }
            }
          } catch (err) {
            console.error('[CLIENT-LIVE] Erreur WebRTC:', err);
          }
        };

        window.addEventListener('beforeunload', () => {
          console.log('[CLIENT-LIVE] Unload: fermeture connexions');
          try { if (pc) pc.close(); } catch(e){}
          try { if (signaling) signaling.close(); } catch(e){}
        });
      });
    </script>
  </head>
  <body>
    <div class=\"page\">
        <div>
            <div class=\"player-card\">
                <div class=\"player-thumb\">
                    <video id=\"livePlayer\" autoplay muted playsinline controls poster=\"";
        // line 178
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 178, $this->source); })()), "seller", [], "any", false, false, false, 178) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 178, $this->source); })()), "seller", [], "any", false, false, false, 178), "images", [], "any", false, false, false, 178))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 178, $this->source); })()), "seller", [], "any", false, false, false, 178), "images", [], "any", false, false, false, 178)), "html", null, true)) : ("/uploads/6891e6164b5d5.jpg"));
        yield "\"></video>
                    ";
        // line 179
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 179, $this->source); })()), "endLive", [], "any", false, false, false, 179))) {
            yield "<div class=\"live-badge\">Live</div>";
        }
        // line 180
        yield "                    <div class=\"viewer-group\">
                        <div class=\"viewer-icons\">
                            <!-- chat icon -->
                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#567AF4\" stroke-width=\"2\"><path d=\"M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z\"/></svg>
                            <!-- people icon -->
                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#567AF4\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
                        </div>
                        <div class=\"viewer-pill\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["live"] ?? null), "nbrLike", [], "any", true, true, false, 187)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 187, $this->source); })()), "nbrLike", [], "any", false, false, false, 187), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>

                <div class=\"below-bar\">
                    <div>
                        <div class=\"meta\">
                            <div class=\"avatar\"><img src=\"";
        // line 194
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 194, $this->source); })()), "seller", [], "any", false, false, false, 194) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 194, $this->source); })()), "seller", [], "any", false, false, false, 194), "images", [], "any", false, false, false, 194))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 194, $this->source); })()), "seller", [], "any", false, false, false, 194), "images", [], "any", false, false, false, 194)), "html", null, true)) : ("/uploads/6891f6e39d5a3.jpg"));
        yield "\" alt=\"avatar\"></div>
                            <div class=\"username-chip\">";
        // line 195
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 195, $this->source); })()), "seller", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 195, $this->source); })()), "seller", [], "any", false, false, false, 195), "username", [], "any", false, false, false, 195), "html", null, true)) : ("Username"));
        yield "</div>
                        </div>
                        <div class=\"follow-wrap\">
                            <button class=\"btn btn-follow\">
                                <!-- play icon -->
                                <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M8 5v14l11-7z\"/></svg>
                                Follow
                            </button>
                        </div>
                    </div>
                    <div class=\"right-actions\">
                        <button class=\"btn btn-like\" onclick=\"likeLive()\">
                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M12 21s-6.716-4.686-9.193-7.163C.928 11.958.5 10.5.5 9A5.5 5.5 0 0 1 6 3.5c2 0 3.5 1 4 2 .5-1 2-2 4-2A5.5 5.5 0 0 1 21.5 9c0 1.5-.428 2.958-2.307 4.837C18.716 16.314 12 21 12 21z\"/></svg>
                            Like <span id=\"likeCount\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["live"] ?? null), "nbrLike", [], "any", true, true, false, 208)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 208, $this->source); })()), "nbrLike", [], "any", false, false, false, 208), 0)) : (0)), "html", null, true);
        yield "</span>
                        </button>
                        <button class=\"btn btn-cart\">
                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M6 6h15l-1.5 9h-12z\"/><circle cx=\"9\" cy=\"21\" r=\"1\"/><circle cx=\"18\" cy=\"21\" r=\"1\"/></svg>
                            Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class=\"description\">
                <div class=\"desc-title\">Description</div>
                <p style=\"white-space: pre-line;\">Live de ";
        // line 220
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 220, $this->source); })()), "seller", [], "any", false, false, false, 220)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 220, $this->source); })()), "seller", [], "any", false, false, false, 220), "username", [], "any", false, false, false, 220), "html", null, true)) : (""));
        yield "</p>
            </div>
        </div>

        <aside>
            <div class=\"products\">
                ";
        // line 227
        yield "            </div>
        </aside>
    </div>
  </body>
</html>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/live.html.twig";
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
        return array (  304 => 227,  295 => 220,  280 => 208,  264 => 195,  260 => 194,  250 => 187,  241 => 180,  237 => 179,  233 => 178,  206 => 154,  180 => 131,  99 => 52,  97 => 51,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Live</title>
    <link href=\"https://fonts.googleapis.com/css?family=Inter:400,600&display=swap\" rel=\"stylesheet\">
    <style>
        body { margin:0; font-family: 'Inter', Arial, sans-serif; background:#f6f6f6; }
        .page { padding: 100px 20px 30px; max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 340px; gap: 24px; }
        .player-card { background:#fff; border-radius: 24px; box-shadow: 0 12px 24px rgba(0,0,0,0.15); overflow: hidden; }
        .player-thumb { position: relative; width: 100%; padding-top: 56.25%; border-radius: 24px; overflow:hidden; background:#000; }
        .player-thumb img, .player-thumb video { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; }
        .live-badge { position:absolute; top:12px; left:50%; transform: translateX(-50%); background:#ff3b30; color:#fff; font-weight:700; padding:6px 14px; border-radius:999px; }
        .viewer-group { position:absolute; top:12px; left:12px; display:flex; align-items:center; gap:8px; }
        .viewer-icons { display:flex; align-items:center; gap:6px; background:#ffffff; color:#567AF4; border-radius:999px; padding:4px 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.12); }
        .viewer-pill { background:#ff3b30; color:#fff; padding:4px 10px; border-radius:999px; font-weight:700; }
        .below-bar { display:flex; align-items:flex-start; justify-content:space-between; gap:12px; padding:14px 18px 16px; }
        .meta { display:flex; align-items:center; gap:12px; }
        .avatar { width:40px; height:40px; border-radius:50%; overflow:hidden; }
        .avatar img { width:100%; height:100%; object-fit:cover; }
        .username-chip { background:#1e90ff; color:#fff; padding:6px 12px; border-radius:999px; font-weight:700; }
        .follow-wrap { margin-top:10px; }
        .btn { display:inline-flex; align-items:center; justify-content:center; gap:8px; padding:12px 18px; border-radius:12px; border:none; cursor:pointer; font-weight:700; box-shadow: 0 6px 12px rgba(0,0,0,0.12); }
        .btn-like { background:#ff4d6d; color:#fff; }
        .btn-cart { background:#ff4d6d; color:#fff; }
        .btn-follow { background:#ff2d55; color:#fff; }
        .right-actions { display:flex; gap:14px; }
        .description { background:#fff; border-radius: 16px; box-shadow: 0 12px 24px rgba(0,0,0,0.12); padding: 16px 18px; margin-top: 8px; }
        .desc-title { font-weight:1000; margin-bottom:8px; }
        .desc-list { list-style:none; padding:0; margin:0 0 8px; }
        .desc-list li { display:flex; align-items:flex-start; gap:8px; margin:6px 0; }
        .desc-list li .dot { width:8px; height:8px; background:#567AF4; border-radius:50%; margin-top:6px; }
        .products { display:flex; flex-direction:column; gap:16px; }
        .product { display:flex; gap:12px; background:#fff; border-radius:16px; padding:12px; box-shadow: 0 12px 24px rgba(0,0,0,0.12); align-items:center; }
        .product img { width:92px; height:64px; object-fit:cover; border-radius:12px; }
        .product .name { font-weight:800; }
        .product .price { color:#333; margin-top:4px; }
        .product .cta { margin-left:auto; }
        .btn-bag { background:#567AF4; color:#fff; border:none; padding:8px 12px; border-radius:999px; cursor:pointer; font-weight:700; }
        @media (max-width: 992px) { .page { grid-template-columns: 1fr; } .right-actions{ margin-top:10px; } }
        /* Dark theme */
        body.dark-theme { background: #121212; }
        body.dark-theme .player-card, body.dark-theme .description, body.dark-theme .product { background:#1f1f1f; box-shadow: 0 12px 24px rgba(0,0,0,0.5); }
        body.dark-theme .desc-title, body.dark-theme .product .name, body.dark-theme .product .price { color:#fff; }
        /* Lisibilité du contenu de la description en dark */
        body.dark-theme .description { color: #e6e6e6; }
        body.dark-theme .description p { color: #e0e0e0; line-height: 1.55; }
        body.dark-theme .description li { color: #e0e0e0; }
        body.dark-theme .description a { color: #9ec1ff; }
    </style>
    {% include 'components/navbarClient.html.twig' %}
    <script>
      // Petits handlers mock
      function likeLive(){
        const el = document.getElementById('likeCount');
        el.textContent = parseInt(el.textContent, 10) + 1;
      }

      // WebRTC Viewer pour recevoir le flux du streamer via un serveur de signalisation WebSocket (localhost:8080)
      document.addEventListener('DOMContentLoaded', function(){
        const videoEl = document.getElementById('livePlayer');
        if (!videoEl) return;

        let pc = null;
        let signaling = null;
        // Détection auto de l'URL du serveur de signalisation avec fallback localhost
        const params = new URLSearchParams(window.location.search);
        const forcedSignalHost = params.get('signal');
        const proto = window.location.protocol === 'https:' ? 'wss' : 'ws';
        const altProto = proto === 'wss' ? 'ws' : 'wss';
        const host = window.location.hostname || 'localhost';
        const port = 9090;
        const baseHosts = [host, 'localhost', '127.0.0.1', '192.168.88.28'];
        const hosts = Array.from(new Set([
          ...(forcedSignalHost ? [forcedSignalHost] : []),
          ...baseHosts
        ]));
        const urlsTmp = [];
        hosts.forEach(h => { urlsTmp.push(`\${proto}://\${h}:\${port}`); urlsTmp.push(`\${altProto}://\${h}:\${port}`); });
        const urls = Array.from(new Set(urlsTmp));
        console.log('[CLIENT-LIVE] WS candidates =', urls);
        function connectWS(url, onFail) {
          try {
            const ws = new WebSocket('wss://shoplive-tkjc.onrender.com');
            ws.onerror = () => {
              if (onFail) onFail();
            };
            return ws;
          } catch (e) {
            if (onFail) onFail();
            return null;
          }
        }
        let idx = 0;
        function tryNext(){
          if (idx >= urls.length) {
            console.error('[CLIENT-LIVE] WS: toutes les tentatives ont échoué');
            return;
          }
          const url = urls[idx++];
          console.log('[CLIENT-LIVE] WS connecting', url);
          signaling = connectWS(url, tryNext);
        }
        tryNext();
        if (!signaling) return;

        function createPeerConnection(){
          pc = new RTCPeerConnection({
            iceServers: [{ urls: 'stun:stun.l.google.com:19302' }]
          });
          pc.ontrack = (event) => {
            if (event.streams && event.streams[0]) {
              videoEl.srcObject = event.streams[0];
              console.log('[CLIENT-LIVE] ontrack stream reçu');
            }
          };
          pc.onicecandidate = (e) => {
            if (e.candidate) {
              console.log('[CLIENT-LIVE] ICE -> streamer');
              signaling.send(JSON.stringify({ type: 'candidate', candidate: e.candidate, target: 'streamer', viewerId: signaling.viewerId }));
            }
          };
          pc.onconnectionstatechange = () => console.log('[CLIENT-LIVE] pc.connectionState', pc.connectionState);
          pc.onsignalingstatechange = () => console.log('[CLIENT-LIVE] pc.signalingState', pc.signalingState);
          pc.onicegatheringstatechange = () => console.log('[CLIENT-LIVE] pc.iceGatheringState', pc.iceGatheringState);
        }

        signaling.onopen = () => {
          const viewerId = Math.random().toString(36).slice(2);
          signaling.viewerId = viewerId;
          const adminId = {{ live.seller ? live.seller.id : 0 }};
          console.log('[CLIENT-LIVE] WS open. viewerId=', viewerId, 'adminId=', adminId);
          signaling.send(JSON.stringify({ type: 'viewer', viewerId, adminId }));
        };

        signaling.onmessage = async (event) => {
          const data = JSON.parse(event.data);
          console.log('[CLIENT-LIVE] WS message', data);
          try {
            if (data.type === 'offer') {
              console.log('[CLIENT-LIVE] offer reçue');
              if (!pc) createPeerConnection();
              await pc.setRemoteDescription(new RTCSessionDescription(data.offer));
              const answer = await pc.createAnswer();
              await pc.setLocalDescription(answer);
              signaling.send(JSON.stringify({ type: 'answer', answer, viewerId: signaling.viewerId }));
              console.log('[CLIENT-LIVE] answer envoyée, viewerId=', signaling.viewerId);
            } else if (data.type === 'candidate' && pc) {
              console.log('[CLIENT-LIVE] ICE <- streamer');
              await pc.addIceCandidate(new RTCIceCandidate(data.candidate));
            } else if (data.type === 'end') {
              console.warn('[CLIENT-LIVE] Fin du live reçue');
              videoEl.pause();
              videoEl.poster = '{{ live.seller and live.seller.images ? '/uploads/' ~ live.seller.images : '/uploads/6891e6164b5d5.jpg' }}';
              if (videoEl.srcObject) {
                videoEl.srcObject.getTracks().forEach(t => t.stop());
                videoEl.srcObject = null;
              }
            }
          } catch (err) {
            console.error('[CLIENT-LIVE] Erreur WebRTC:', err);
          }
        };

        window.addEventListener('beforeunload', () => {
          console.log('[CLIENT-LIVE] Unload: fermeture connexions');
          try { if (pc) pc.close(); } catch(e){}
          try { if (signaling) signaling.close(); } catch(e){}
        });
      });
    </script>
  </head>
  <body>
    <div class=\"page\">
        <div>
            <div class=\"player-card\">
                <div class=\"player-thumb\">
                    <video id=\"livePlayer\" autoplay muted playsinline controls poster=\"{{ live.seller and live.seller.images ? '/uploads/' ~ live.seller.images : '/uploads/6891e6164b5d5.jpg' }}\"></video>
                    {% if live.endLive is null %}<div class=\"live-badge\">Live</div>{% endif %}
                    <div class=\"viewer-group\">
                        <div class=\"viewer-icons\">
                            <!-- chat icon -->
                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#567AF4\" stroke-width=\"2\"><path d=\"M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z\"/></svg>
                            <!-- people icon -->
                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#567AF4\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
                        </div>
                        <div class=\"viewer-pill\">{{ live.nbrLike|default(0) }}</div>
                    </div>
                </div>

                <div class=\"below-bar\">
                    <div>
                        <div class=\"meta\">
                            <div class=\"avatar\"><img src=\"{{ live.seller and live.seller.images ? '/uploads/' ~ live.seller.images : '/uploads/6891f6e39d5a3.jpg' }}\" alt=\"avatar\"></div>
                            <div class=\"username-chip\">{{ live.seller ? live.seller.username : 'Username' }}</div>
                        </div>
                        <div class=\"follow-wrap\">
                            <button class=\"btn btn-follow\">
                                <!-- play icon -->
                                <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M8 5v14l11-7z\"/></svg>
                                Follow
                            </button>
                        </div>
                    </div>
                    <div class=\"right-actions\">
                        <button class=\"btn btn-like\" onclick=\"likeLive()\">
                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M12 21s-6.716-4.686-9.193-7.163C.928 11.958.5 10.5.5 9A5.5 5.5 0 0 1 6 3.5c2 0 3.5 1 4 2 .5-1 2-2 4-2A5.5 5.5 0 0 1 21.5 9c0 1.5-.428 2.958-2.307 4.837C18.716 16.314 12 21 12 21z\"/></svg>
                            Like <span id=\"likeCount\">{{ live.nbrLike|default(0) }}</span>
                        </button>
                        <button class=\"btn btn-cart\">
                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M6 6h15l-1.5 9h-12z\"/><circle cx=\"9\" cy=\"21\" r=\"1\"/><circle cx=\"18\" cy=\"21\" r=\"1\"/></svg>
                            Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class=\"description\">
                <div class=\"desc-title\">Description</div>
                <p style=\"white-space: pre-line;\">Live de {{ live.seller ? live.seller.username : '' }}</p>
            </div>
        </div>

        <aside>
            <div class=\"products\">
                {# Placeholder: produits liés au live si disponibles plus tard #}
            </div>
        </aside>
    </div>
  </body>
</html>


", "client/live.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/client/live.html.twig");
    }
}
