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

/* admin/live.html.twig */
class __TwigTemplate_4345a3863433b881584893f3a314993a extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/live.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Live";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/live.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "    <div class=\"live-container\">
        ";
        // line 12
        if ((($tmp = (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "            <div class=\"live-grid\">
                <!-- Section vidéo principale -->
                <div class=\"video-main\">
                    <div class=\"video-wrapper\">
                        <video id=\"webcamPreview\" autoplay muted playsinline></video>
                        <div class=\"video-overlay\">
                            <div class=\"viewer-count\">
                                <i class=\"fas fa-users\"></i>
                                <!-- <span id=\"viewerCount\">0</span> spectateurs -->
                            </div>
                            <div class=\"video-controls\">
                                <button class=\"control-btn\" id=\"toggleMic\">
                                    <i class=\"fas fa-microphone\"></i>
                                </button>
                                <button class=\"control-btn\" id=\"toggleCam\">
                                    <i class=\"fas fa-video\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section informations -->
                <div class=\"info-panel\">
                    <div class=\"stream-info\">
                        <div class=\"stream-header\">
                            <h2>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 39, $this->source); })()), "titre", [], "any", false, false, false, 39), "html", null, true);
            yield "</h2>
                            <div class=\"stream-meta\">
                                <span class=\"live-badge\">
                                    <i class=\"fas fa-circle\"></i> <span data-i18n=\"live\">EN DIRECT</span>
                                </span>
                                <span class=\"stream-date\">
                                    <i class=\"far fa-calendar-alt\"></i> ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 45, $this->source); })()), "startLive", [], "any", false, false, false, 45), "d/m/Y H:i"), "html", null, true);
            yield "
                                </span>
                            </div>
                        </div>

                        <div class=\"stream-description\">
                            <h3><i class=\"fas fa-info-circle\"></i> <span data-i18n=\"description\">Description</span></h3>
                            <p>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
                        </div>

                        <div class=\"stream-stats\">
                            <div class=\"stats-grid\">
                                <div class=\"stat-card\">
                                    <div class=\"stat-value\">--:--</div>
                                    <div class=\"stat-label\" data-i18n=\"duration\">Durée</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"stream-actions\">
                        <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_live_stop", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"stop-stream-btn\">
                            <i class=\"fas fa-stop\"></i> <span data-i18n=\"end_stream\">Terminer le stream</span>
                        </a>
                    </div>

                    <div class=\"debug-console\">
                        <h3><i class=\"fas fa-terminal\"></i> <span data-i18n=\"technical_console\">Console technique</span></h3>
                        <div class=\"debug-logs\" id=\"debugLogs\"></div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 78
            yield "            <div class=\"no-live-container\">
                <div class=\"no-live-content\">
                    <div class=\"no-live-icon\">
                        <i class=\"fas fa-video-slash\"></i>
                    </div>
                    <h2 data-i18n=\"no_live_active\">Aucun live en cours</h2>
                    <p data-i18n=\"start_new_stream\">Commencez un nouveau stream pour interagir avec votre audience</p>
                    <a href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_live_start");
            yield "\" class=\"start-stream-btn\">
                        <i class=\"fas fa-play\"></i> <span data-i18n=\"start_live\">Démarrer un live</span>
                    </a>
                </div>
            </div>
        ";
        }
        // line 91
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 97
        if ((($tmp = (isset($context["live"]) || array_key_exists("live", $context) ? $context["live"] : (function () { throw new RuntimeError('Variable "live" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "        <script>
        // Fonction de debug améliorée avec couleurs
        function debugLog(message, type = 'info') {
            console.log(`[\${type}] \${message}`);
            const debugDiv = document.getElementById('debugLogs');
            if (debugDiv) {
                const time = new Date().toLocaleTimeString();
                const colors = {
                    'info': '#a0a0a0',
                    'success': '#4CAF50',
                    'warning': '#FFC107',
                    'error': '#F44336'
                };

                const color = colors[type] || '#a0a0a0';
                const messageElement = document.createElement('div');
                messageElement.className = 'debug-message';
                messageElement.innerHTML = `
                    <span class=\"debug-time\">[\${time}]</span>
                    <span class=\"debug-content\" style=\"color: \${color}\">\${message}</span>
                `;

                debugDiv.appendChild(messageElement);
                debugDiv.scrollTop = debugDiv.scrollHeight;
            }
        }

        document.addEventListener(\"DOMContentLoaded\", function () {
            debugLog('Initialisation du streamer...', 'info');

            const signalingServer = new WebSocket('wss://shoplive-tkjc.onrender.com');
            const peerConnections = new Map();
            let localStream;

            // Configuration des événements WebSocket
            signalingServer.onopen = () => {
                debugLog('Connexion WebSocket établie avec le serveur de signalisation', 'success');
                const message = {
                    type: 'streamer',
                    adminId: '";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seller"]) || array_key_exists("seller", $context) ? $context["seller"] : (function () { throw new RuntimeError('Variable "seller" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137), "html", null, true);
            yield "'
                };
                debugLog(`Envoi identification streamer: \${JSON.stringify(message)}`, 'info');
                signalingServer.send(JSON.stringify(message));
            };

            signalingServer.onerror = (error) => {
                debugLog(`Erreur WebSocket: \${error}`, 'error');
                debugLog(`Vérifiez que le serveur Node.js est en cours d'exécution sur le port 9090`, 'warning');
                console.error('WebSocket Error:', error);
            };

            signalingServer.onclose = (event) => {
                debugLog(`Connexion WebSocket fermée: \${event.code} - \${event.reason}`, 'warning');
            };

            // Gestion des messages WebSocket
            signalingServer.onmessage = async (event) => {
                try {
                    const data = JSON.parse(event.data);
                    debugLog(`Message reçu: \${JSON.stringify(data)}`, 'info');

                    if (data.type === 'newViewer') {
                        const viewerId = data.viewerId;
                        debugLog(`Nouveau viewer connecté: \${viewerId}`, 'success');

                        if (!localStream) {
                            debugLog('Aucun stream local disponible pour le viewer', 'warning');
                            return;
                        }

                        const pc = new RTCPeerConnection({
                            iceServers: [{ urls: 'stun:stun.l.google.com:19302' }]
                        });

                        // Ajouter les tracks
                        localStream.getTracks().forEach(track => {
                            pc.addTrack(track, localStream);
                            debugLog(`Track \${track.kind} ajouté pour viewer \${viewerId}`, 'info');
                        });

                        pc.onicecandidate = e => {
                            if (e.candidate) {
                                debugLog(`Envoi ICE candidate pour viewer \${viewerId}: \${e.candidate.type}`, 'info');
                                signalingServer.send(JSON.stringify({
                                    type: 'candidate',
                                    candidate: e.candidate,
                                    target: 'viewer',
                                    viewerId: viewerId
                                }));
                            }
                        };

                        pc.onconnectionstatechange = () => {
                            debugLog(`État de connexion pour \${viewerId}: \${pc.connectionState}`, 'info');
                            if (pc.connectionState === 'disconnected' || pc.connectionState === 'failed') {
                                peerConnections.delete(viewerId);
                            }
                        };

                        try {
                            debugLog(`Création de l'offre SDP pour viewer \${viewerId}...`, 'info');
                            const offer = await pc.createOffer();
                            await pc.setLocalDescription(offer);
                            debugLog(`Offre créée pour viewer \${viewerId}`, 'success');

                            signalingServer.send(JSON.stringify({
                                type: 'offer',
                                offer: offer,
                                viewerId: viewerId
                            }));

                            peerConnections.set(viewerId, pc);
                            debugLog(`PeerConnection stockée pour viewer \${viewerId}`, 'info');

                        } catch (error) {
                            debugLog(`Erreur lors de la création de l'offre pour \${viewerId}: \${error.message}`, 'error');
                        }
                    }
                    else if (data.type === 'answer') {
                        const viewerId = data.viewerId;
                        debugLog(`Réponse SDP reçue du viewer \${viewerId}`, 'info');

                        const pc = peerConnections.get(viewerId);
                        if (pc) {
                            try {
                                await pc.setRemoteDescription(new RTCSessionDescription(data.answer));
                                debugLog(`Réponse SDP acceptée pour viewer \${viewerId}`, 'success');
                            } catch (error) {
                                debugLog(`Erreur lors du traitement de la réponse pour \${viewerId}: \${error.message}`, 'error');
                            }
                        } else {
                            debugLog(`Aucune PeerConnection trouvée pour viewer \${viewerId}`, 'warning');
                        }
                    }
                    else if (data.type === 'candidate') {
                        const viewerId = data.viewerId;
                        debugLog(`ICE candidate reçu du viewer \${viewerId}`, 'info');

                        const pc = peerConnections.get(viewerId);
                        if (pc) {
                            try {
                                await pc.addIceCandidate(new RTCIceCandidate(data.candidate));
                                debugLog(`ICE candidate ajouté pour viewer \${viewerId}`, 'success');
                            } catch (error) {
                                debugLog(`Erreur lors de l'ajout du ICE candidate pour \${viewerId}: \${error.message}`, 'error');
                            }
                        } else {
                            debugLog(`Aucune PeerConnection trouvée pour ICE candidate de \${viewerId}`, 'warning');
                        }
                    } else {
                        debugLog(`Type de message non géré: \${data.type}`, 'warning');
                    }
                } catch (error) {
                    debugLog(`Erreur lors du traitement du message: \${error.message}`, 'error');
                }
            };

            // Obtenir le stream local
            debugLog('Demande d\\'accès à la caméra et au microphone...', 'info');
            navigator.mediaDevices.getUserMedia({
                video: {
                    width: { ideal: 1280 },
                    height: { ideal: 720 },
                    frameRate: { ideal: 30 }
                },
                audio: true
            })
            .then(stream => {
                localStream = stream;
                const webcam = document.getElementById(\"webcamPreview\");
                webcam.srcObject = stream;
                debugLog(`Stream local obtenu avec \${stream.getTracks().length} pistes`, 'success');

                stream.getTracks().forEach(track => {
                    debugLog(`Piste disponible: \${track.kind} - \${track.label}`, 'info');
                    track.onended = () => {
                        debugLog(`Piste \${track.kind} terminée`, 'warning');
                    };
                });

                debugLog('Streamer prêt à diffuser', 'success');
            })
            .catch(err => {
                debugLog(`Erreur d'accès aux médias: \${err.message}`, 'error');
                alert(\"Erreur: Impossible d'accéder à la caméra/microphone. Veuillez vérifier vos permissions.\");
            });

            // Gestion des boutons de contrôle
            document.getElementById('toggleMic').addEventListener('click', function() {
                if (localStream) {
                    const audioTrack = localStream.getAudioTracks()[0];
                    if (audioTrack) {
                        audioTrack.enabled = !audioTrack.enabled;
                        this.classList.toggle('muted', !audioTrack.enabled);
                        debugLog(`Microphone \${audioTrack.enabled ? 'activé' : 'désactivé'}`, 'info');
                    }
                }
            });

            document.getElementById('toggleCam').addEventListener('click', function() {
                if (localStream) {
                    const videoTrack = localStream.getVideoTracks()[0];
                    if (videoTrack) {
                        videoTrack.enabled = !videoTrack.enabled;
                        this.classList.toggle('muted', !videoTrack.enabled);
                        debugLog(`Caméra \${videoTrack.enabled ? 'activée' : 'désactivée'}`, 'info');
                    }
                }
            });

            // Variables pour le timer
            let startTime;
            let durationInterval;
            const durationElement = document.querySelector('.stream-stats .stat-value');

            // Fonction pour démarrer le timer
            function startDurationTimer() {
                startTime = new Date();
                durationInterval = setInterval(updateDuration, 1000);
            }

            // Fonction pour mettre à jour l'affichage de la durée
            function updateDuration() {
                const now = new Date();
                const elapsed = Math.floor((now - startTime) / 1000); // en secondes

                const hours = Math.floor(elapsed / 3600);
                const minutes = Math.floor((elapsed % 3600) / 60);
                const seconds = elapsed % 60;

                // Format HH:MM:SS ou MM:SS selon la durée
                const formattedTime = hours > 0
                    ? `\${hours.toString().padStart(2, '0')}:\${minutes.toString().padStart(2, '0')}:\${seconds.toString().padStart(2, '0')}`
                    : `\${minutes.toString().padStart(2, '0')}:\${seconds.toString().padStart(2, '0')}`;

                durationElement.textContent = formattedTime;
            }

            // Démarrer le timer quand le stream commence
            startDurationTimer();

            window.addEventListener('beforeunload', function() {
                if (durationInterval) {
                    clearInterval(durationInterval);
                }
            });
        });
        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/live.html.twig";
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
        return array (  283 => 137,  242 => 98,  240 => 97,  234 => 95,  224 => 94,  215 => 91,  206 => 85,  197 => 78,  182 => 66,  165 => 52,  155 => 45,  146 => 39,  118 => 13,  116 => 12,  113 => 11,  103 => 10,  92 => 6,  87 => 5,  77 => 4,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Live{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/live.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
{% endblock %}

{% block body %}
    <div class=\"live-container\">
        {% if live %}
            <div class=\"live-grid\">
                <!-- Section vidéo principale -->
                <div class=\"video-main\">
                    <div class=\"video-wrapper\">
                        <video id=\"webcamPreview\" autoplay muted playsinline></video>
                        <div class=\"video-overlay\">
                            <div class=\"viewer-count\">
                                <i class=\"fas fa-users\"></i>
                                <!-- <span id=\"viewerCount\">0</span> spectateurs -->
                            </div>
                            <div class=\"video-controls\">
                                <button class=\"control-btn\" id=\"toggleMic\">
                                    <i class=\"fas fa-microphone\"></i>
                                </button>
                                <button class=\"control-btn\" id=\"toggleCam\">
                                    <i class=\"fas fa-video\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section informations -->
                <div class=\"info-panel\">
                    <div class=\"stream-info\">
                        <div class=\"stream-header\">
                            <h2>{{ live.titre }}</h2>
                            <div class=\"stream-meta\">
                                <span class=\"live-badge\">
                                    <i class=\"fas fa-circle\"></i> <span data-i18n=\"live\">EN DIRECT</span>
                                </span>
                                <span class=\"stream-date\">
                                    <i class=\"far fa-calendar-alt\"></i> {{ live.startLive|date('d/m/Y H:i') }}
                                </span>
                            </div>
                        </div>

                        <div class=\"stream-description\">
                            <h3><i class=\"fas fa-info-circle\"></i> <span data-i18n=\"description\">Description</span></h3>
                            <p>{{ live.description }}</p>
                        </div>

                        <div class=\"stream-stats\">
                            <div class=\"stats-grid\">
                                <div class=\"stat-card\">
                                    <div class=\"stat-value\">--:--</div>
                                    <div class=\"stat-label\" data-i18n=\"duration\">Durée</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"stream-actions\">
                        <a href=\"{{ path('admin_live_stop', {'id': live.id}) }}\" class=\"stop-stream-btn\">
                            <i class=\"fas fa-stop\"></i> <span data-i18n=\"end_stream\">Terminer le stream</span>
                        </a>
                    </div>

                    <div class=\"debug-console\">
                        <h3><i class=\"fas fa-terminal\"></i> <span data-i18n=\"technical_console\">Console technique</span></h3>
                        <div class=\"debug-logs\" id=\"debugLogs\"></div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"no-live-container\">
                <div class=\"no-live-content\">
                    <div class=\"no-live-icon\">
                        <i class=\"fas fa-video-slash\"></i>
                    </div>
                    <h2 data-i18n=\"no_live_active\">Aucun live en cours</h2>
                    <p data-i18n=\"start_new_stream\">Commencez un nouveau stream pour interagir avec votre audience</p>
                    <a href=\"{{ path('admin_live_start') }}\" class=\"start-stream-btn\">
                        <i class=\"fas fa-play\"></i> <span data-i18n=\"start_live\">Démarrer un live</span>
                    </a>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {% if live %}
        <script>
        // Fonction de debug améliorée avec couleurs
        function debugLog(message, type = 'info') {
            console.log(`[\${type}] \${message}`);
            const debugDiv = document.getElementById('debugLogs');
            if (debugDiv) {
                const time = new Date().toLocaleTimeString();
                const colors = {
                    'info': '#a0a0a0',
                    'success': '#4CAF50',
                    'warning': '#FFC107',
                    'error': '#F44336'
                };

                const color = colors[type] || '#a0a0a0';
                const messageElement = document.createElement('div');
                messageElement.className = 'debug-message';
                messageElement.innerHTML = `
                    <span class=\"debug-time\">[\${time}]</span>
                    <span class=\"debug-content\" style=\"color: \${color}\">\${message}</span>
                `;

                debugDiv.appendChild(messageElement);
                debugDiv.scrollTop = debugDiv.scrollHeight;
            }
        }

        document.addEventListener(\"DOMContentLoaded\", function () {
            debugLog('Initialisation du streamer...', 'info');

            const signalingServer = new WebSocket('wss://shoplive-tkjc.onrender.com');
            const peerConnections = new Map();
            let localStream;

            // Configuration des événements WebSocket
            signalingServer.onopen = () => {
                debugLog('Connexion WebSocket établie avec le serveur de signalisation', 'success');
                const message = {
                    type: 'streamer',
                    adminId: '{{ seller.id }}'
                };
                debugLog(`Envoi identification streamer: \${JSON.stringify(message)}`, 'info');
                signalingServer.send(JSON.stringify(message));
            };

            signalingServer.onerror = (error) => {
                debugLog(`Erreur WebSocket: \${error}`, 'error');
                debugLog(`Vérifiez que le serveur Node.js est en cours d'exécution sur le port 9090`, 'warning');
                console.error('WebSocket Error:', error);
            };

            signalingServer.onclose = (event) => {
                debugLog(`Connexion WebSocket fermée: \${event.code} - \${event.reason}`, 'warning');
            };

            // Gestion des messages WebSocket
            signalingServer.onmessage = async (event) => {
                try {
                    const data = JSON.parse(event.data);
                    debugLog(`Message reçu: \${JSON.stringify(data)}`, 'info');

                    if (data.type === 'newViewer') {
                        const viewerId = data.viewerId;
                        debugLog(`Nouveau viewer connecté: \${viewerId}`, 'success');

                        if (!localStream) {
                            debugLog('Aucun stream local disponible pour le viewer', 'warning');
                            return;
                        }

                        const pc = new RTCPeerConnection({
                            iceServers: [{ urls: 'stun:stun.l.google.com:19302' }]
                        });

                        // Ajouter les tracks
                        localStream.getTracks().forEach(track => {
                            pc.addTrack(track, localStream);
                            debugLog(`Track \${track.kind} ajouté pour viewer \${viewerId}`, 'info');
                        });

                        pc.onicecandidate = e => {
                            if (e.candidate) {
                                debugLog(`Envoi ICE candidate pour viewer \${viewerId}: \${e.candidate.type}`, 'info');
                                signalingServer.send(JSON.stringify({
                                    type: 'candidate',
                                    candidate: e.candidate,
                                    target: 'viewer',
                                    viewerId: viewerId
                                }));
                            }
                        };

                        pc.onconnectionstatechange = () => {
                            debugLog(`État de connexion pour \${viewerId}: \${pc.connectionState}`, 'info');
                            if (pc.connectionState === 'disconnected' || pc.connectionState === 'failed') {
                                peerConnections.delete(viewerId);
                            }
                        };

                        try {
                            debugLog(`Création de l'offre SDP pour viewer \${viewerId}...`, 'info');
                            const offer = await pc.createOffer();
                            await pc.setLocalDescription(offer);
                            debugLog(`Offre créée pour viewer \${viewerId}`, 'success');

                            signalingServer.send(JSON.stringify({
                                type: 'offer',
                                offer: offer,
                                viewerId: viewerId
                            }));

                            peerConnections.set(viewerId, pc);
                            debugLog(`PeerConnection stockée pour viewer \${viewerId}`, 'info');

                        } catch (error) {
                            debugLog(`Erreur lors de la création de l'offre pour \${viewerId}: \${error.message}`, 'error');
                        }
                    }
                    else if (data.type === 'answer') {
                        const viewerId = data.viewerId;
                        debugLog(`Réponse SDP reçue du viewer \${viewerId}`, 'info');

                        const pc = peerConnections.get(viewerId);
                        if (pc) {
                            try {
                                await pc.setRemoteDescription(new RTCSessionDescription(data.answer));
                                debugLog(`Réponse SDP acceptée pour viewer \${viewerId}`, 'success');
                            } catch (error) {
                                debugLog(`Erreur lors du traitement de la réponse pour \${viewerId}: \${error.message}`, 'error');
                            }
                        } else {
                            debugLog(`Aucune PeerConnection trouvée pour viewer \${viewerId}`, 'warning');
                        }
                    }
                    else if (data.type === 'candidate') {
                        const viewerId = data.viewerId;
                        debugLog(`ICE candidate reçu du viewer \${viewerId}`, 'info');

                        const pc = peerConnections.get(viewerId);
                        if (pc) {
                            try {
                                await pc.addIceCandidate(new RTCIceCandidate(data.candidate));
                                debugLog(`ICE candidate ajouté pour viewer \${viewerId}`, 'success');
                            } catch (error) {
                                debugLog(`Erreur lors de l'ajout du ICE candidate pour \${viewerId}: \${error.message}`, 'error');
                            }
                        } else {
                            debugLog(`Aucune PeerConnection trouvée pour ICE candidate de \${viewerId}`, 'warning');
                        }
                    } else {
                        debugLog(`Type de message non géré: \${data.type}`, 'warning');
                    }
                } catch (error) {
                    debugLog(`Erreur lors du traitement du message: \${error.message}`, 'error');
                }
            };

            // Obtenir le stream local
            debugLog('Demande d\\'accès à la caméra et au microphone...', 'info');
            navigator.mediaDevices.getUserMedia({
                video: {
                    width: { ideal: 1280 },
                    height: { ideal: 720 },
                    frameRate: { ideal: 30 }
                },
                audio: true
            })
            .then(stream => {
                localStream = stream;
                const webcam = document.getElementById(\"webcamPreview\");
                webcam.srcObject = stream;
                debugLog(`Stream local obtenu avec \${stream.getTracks().length} pistes`, 'success');

                stream.getTracks().forEach(track => {
                    debugLog(`Piste disponible: \${track.kind} - \${track.label}`, 'info');
                    track.onended = () => {
                        debugLog(`Piste \${track.kind} terminée`, 'warning');
                    };
                });

                debugLog('Streamer prêt à diffuser', 'success');
            })
            .catch(err => {
                debugLog(`Erreur d'accès aux médias: \${err.message}`, 'error');
                alert(\"Erreur: Impossible d'accéder à la caméra/microphone. Veuillez vérifier vos permissions.\");
            });

            // Gestion des boutons de contrôle
            document.getElementById('toggleMic').addEventListener('click', function() {
                if (localStream) {
                    const audioTrack = localStream.getAudioTracks()[0];
                    if (audioTrack) {
                        audioTrack.enabled = !audioTrack.enabled;
                        this.classList.toggle('muted', !audioTrack.enabled);
                        debugLog(`Microphone \${audioTrack.enabled ? 'activé' : 'désactivé'}`, 'info');
                    }
                }
            });

            document.getElementById('toggleCam').addEventListener('click', function() {
                if (localStream) {
                    const videoTrack = localStream.getVideoTracks()[0];
                    if (videoTrack) {
                        videoTrack.enabled = !videoTrack.enabled;
                        this.classList.toggle('muted', !videoTrack.enabled);
                        debugLog(`Caméra \${videoTrack.enabled ? 'activée' : 'désactivée'}`, 'info');
                    }
                }
            });

            // Variables pour le timer
            let startTime;
            let durationInterval;
            const durationElement = document.querySelector('.stream-stats .stat-value');

            // Fonction pour démarrer le timer
            function startDurationTimer() {
                startTime = new Date();
                durationInterval = setInterval(updateDuration, 1000);
            }

            // Fonction pour mettre à jour l'affichage de la durée
            function updateDuration() {
                const now = new Date();
                const elapsed = Math.floor((now - startTime) / 1000); // en secondes

                const hours = Math.floor(elapsed / 3600);
                const minutes = Math.floor((elapsed % 3600) / 60);
                const seconds = elapsed % 60;

                // Format HH:MM:SS ou MM:SS selon la durée
                const formattedTime = hours > 0
                    ? `\${hours.toString().padStart(2, '0')}:\${minutes.toString().padStart(2, '0')}:\${seconds.toString().padStart(2, '0')}`
                    : `\${minutes.toString().padStart(2, '0')}:\${seconds.toString().padStart(2, '0')}`;

                durationElement.textContent = formattedTime;
            }

            // Démarrer le timer quand le stream commence
            startDurationTimer();

            window.addEventListener('beforeunload', function() {
                if (durationInterval) {
                    clearInterval(durationInterval);
                }
            });
        });
        </script>
    {% endif %}
{% endblock %}
", "admin/live.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/live.html.twig");
    }
}
