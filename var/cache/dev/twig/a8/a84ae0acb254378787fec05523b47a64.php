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

/* admin/profil.html.twig */
class __TwigTemplate_8070629fcd677a0f713e60dd933ef545 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profil.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Profil Client</title>
</head>
<header>
    ";
        // line 9
        yield from $this->load("components/navbarAdmin.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "</header>
<body>
    <div class=\"profile-container\">
        <div class=\"profile-content\">
            <!-- Section Avatar -->
            <div class=\"avatar-section\">
                <div class=\"avatar-circle\" id=\"avatar-preview\">
                    ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "images", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                        <img src=\"/uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "images", [], "any", false, false, false, 18), "html", null, true);
            yield "\" alt=\"Photo de profil\" style=\"width:100%; height:100%; border-radius:50%; object-fit:cover;\">
                    ";
        } else {
            // line 20
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20))), "html", null, true);
            yield "
                    ";
        }
        // line 22
        yield "
                    <div id=\"edit-btn\" class=\"edit-button\" title=\"Modifier\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                            <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                        </svg>
                    </div>
                </div>
                <div class=\"username\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), "html", null, true);
        yield "</div>
            </div>

            <!-- Section Informations -->
            <div class=\"profile-info\">
                <div id=\"profile-view\" class=\"info-container\">
                    <div class=\"info-item\">
                        <span class=\"info-label\" data-i18n=\"mail\">Email</span>
                        <span class=\"info-value\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\" data-i18n=\"address\">Adresse</span>
                        <span class=\"info-value\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "address", [], "any", false, false, false, 42), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\" data-i18n=\"country\">Country</span>
                        <span class=\"info-value\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "country", [], "any", false, false, false, 46), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\" data-i18n=\"contact\">Contact</span>
                        <span class=\"info-value\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "contact", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
                    </div>
                </div>

                <!-- Formulaire de modification -->
                <div id=\"profile-edit\" class=\"edit-form\">
                    <form method=\"POST\" action=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_update_profile");
        yield "\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            <label data-i18n=\"profil_picture\">Photo de profil</label>
                            <input type=\"file\" id=\"image-upload\" name=\"image\" accept=\"image/*\" style=\"display: none;\">
                            <div style=\"display: flex; align-items: center; gap: 15px;\">
                                <div id=\"image-preview-container\" style=\"width: 80px; height: 80px; border-radius: 50%; background: #f0f0f0; overflow: hidden;\">
                                    ";
        // line 62
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "images", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                                        <img id=\"image-preview\" src=\"/uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "images", [], "any", false, false, false, 63), "html", null, true);
            yield "\" style=\"width:100%; height:100%; object-fit:cover;\">
                                    ";
        } else {
            // line 65
            yield "                                        <div id=\"image-preview\" style=\"width:100%; height:100%; display:flex; align-items:center; justify-content:center; font-size:30px;\">
                                            ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "username", [], "any", false, false, false, 66))), "html", null, true);
            yield "
                                        </div>
                                    ";
        }
        // line 69
        yield "                                </div>
                                <button type=\"button\" data-i18n=\"choose_image\" onclick=\"document.getElementById('image-upload').click()\" style=\"padding: 8px 12px; background: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer;\">
                                    Choisir une image
                                </button>
                            </div>
                            <input type=\"hidden\" id=\"image-base64\" name=\"images\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "images", [], "any", false, false, false, 74), "html", null, true);
        yield "\">
                        </div>

                        <div class=\"form-group\">
                            <label data-i18n=\"username\">Nom d'utilisateur</label>
                            <input type=\"text\" name=\"username\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "username", [], "any", false, false, false, 79), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"form-group\">
                            <label data-i18n=\"mail\">Email</label>
                            <input type=\"email\" name=\"email\" value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"form-group\">
                            <label data-i18n=\"address\">Adresse</label>
                            <input type=\"text\" name=\"address\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "address", [], "any", false, false, false, 87), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"form-group\">
                            <label data-i18n=\"country\">Country</label>
                            <select id=\"country\" name=\"country\" class=\"select2\" required>
                                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new RuntimeError('Variable "countries" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 93
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["country"], "html", null, true);
            yield "\" ";
            if (($context["country"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "country", [], "any", false, false, false, 93))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["country"], "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label data-i18n=\"contact\">Contact</label>
                            <input type=\"text\" name=\"contact\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "contact", [], "any", false, false, false, 99), "html", null, true);
        yield "\">
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"button\" id=\"cancel-edit\" class=\"btn btn-cancel\" data-i18n=\"cancel\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-save\" data-i18n=\"save\">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 112
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            \$('.select2').select2({
                placeholder: 'Select a country',
                allowClear: true
            });
            const editBtn = document.getElementById('edit-btn');
            const cancelEdit = document.getElementById('cancel-edit');
            const profileView = document.getElementById('profile-view');
            const profileEdit = document.getElementById('profile-edit');
            const imageUpload = document.getElementById('image-upload');

            // Gestion de l'affichage du formulaire
            editBtn.addEventListener('click', function() {
                profileView.style.display = 'none';
                profileEdit.style.display = 'block';
            });

            cancelEdit.addEventListener('click', function() {
                profileEdit.style.display = 'none';
                profileView.style.display = 'block';
            });

            // Gestion de l'upload d'image
            imageUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const base64 = event.target.result.split(',')[1];
                        document.getElementById('image-base64').value = base64;

                        // Mise à jour de l'aperçu
                        const preview = document.getElementById('image-preview');
                        if (preview.tagName === 'IMG') {
                            preview.src = event.target.result;
                        } else {
                            const img = document.createElement('img');
                            img.id = 'image-preview';
                            img.src = event.target.result;
                            img.style.width = '100%';
                            img.style.height = '100%';
                            img.style.objectFit = 'cover';
                            document.getElementById('image-preview-container').innerHTML = '';
                            document.getElementById('image-preview-container').appendChild(img);
                        }

                        // Mise à jour de l'avatar preview
                        const avatarPreview = document.getElementById('avatar-preview');
                        avatarPreview.innerHTML = '';
                        const avatarImg = document.createElement('img');
                        avatarImg.src = event.target.result;
                        avatarImg.style.width = '100%';
                        avatarImg.style.height = '100%';
                        avatarImg.style.borderRadius = '50%';
                        avatarImg.style.objectFit = 'cover';
                        avatarPreview.appendChild(avatarImg);
                        avatarPreview.appendChild(document.getElementById('edit-btn'));
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            margin-top: 60px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 900px;
        }
        .profile-content {
            display: flex;
            gap: 60px;
            width: 100%;
            align-items: flex-start;
        }
        .avatar-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            width: 300px;
            position: sticky;
            top: 80px;
            z-index: 1;
        }
        .avatar-circle {
            width: 250px;
            height: 250px;
            background-color: #e0e0e0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
            font-size: 100px;
            position: relative;
        }
        .edit-button {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: #3498db;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .edit-button svg {
            color: white;
            width: 20px;
            height: 20px;
        }
        .username {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }
        .profile-info {
            flex: 1;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .info-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
        }
        .info-item {
            margin-bottom: 20px;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .info-label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        .info-value {
            padding-left: 10px;
            width: 100%;
            text-align: left;
        }
        .edit-form {
            display: none;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s;
        }
        .btn-cancel {
            background: #f0f0f0;
            border: 1px solid #ddd;
        }
        .btn-cancel:hover {
            background: #e0e0e0;
        }
        .btn-save {
            background: #3498db;
            color: white;
            border: none;
        }
        .btn-save:hover {
            background: #2980b9;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/profil.html.twig";
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
        return array (  234 => 112,  219 => 99,  213 => 95,  198 => 93,  194 => 92,  186 => 87,  179 => 83,  172 => 79,  164 => 74,  157 => 69,  151 => 66,  148 => 65,  142 => 63,  140 => 62,  131 => 56,  122 => 50,  115 => 46,  108 => 42,  101 => 38,  90 => 30,  80 => 22,  74 => 20,  68 => 18,  66 => 17,  57 => 10,  55 => 9,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Profil Client</title>
</head>
<header>
    {% include 'components/navbarAdmin.html.twig' %}
</header>
<body>
    <div class=\"profile-container\">
        <div class=\"profile-content\">
            <!-- Section Avatar -->
            <div class=\"avatar-section\">
                <div class=\"avatar-circle\" id=\"avatar-preview\">
                    {% if user.images %}
                        <img src=\"/uploads/{{ user.images }}\" alt=\"Photo de profil\" style=\"width:100%; height:100%; border-radius:50%; object-fit:cover;\">
                    {% else %}
                        {{ user.username|first|upper }}
                    {% endif %}

                    <div id=\"edit-btn\" class=\"edit-button\" title=\"Modifier\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                            <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                        </svg>
                    </div>
                </div>
                <div class=\"username\">{{ user.username }}</div>
            </div>

            <!-- Section Informations -->
            <div class=\"profile-info\">
                <div id=\"profile-view\" class=\"info-container\">
                    <div class=\"info-item\">
                        <span class=\"info-label\" data-i18n=\"mail\">Email</span>
                        <span class=\"info-value\">{{ user.email }}</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\" data-i18n=\"address\">Adresse</span>
                        <span class=\"info-value\">{{ user.address }}</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\" data-i18n=\"country\">Country</span>
                        <span class=\"info-value\">{{ user.country }}</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\" data-i18n=\"contact\">Contact</span>
                        <span class=\"info-value\">{{ user.contact }}</span>
                    </div>
                </div>

                <!-- Formulaire de modification -->
                <div id=\"profile-edit\" class=\"edit-form\">
                    <form method=\"POST\" action=\"{{ path('app_users_update_profile') }}\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            <label data-i18n=\"profil_picture\">Photo de profil</label>
                            <input type=\"file\" id=\"image-upload\" name=\"image\" accept=\"image/*\" style=\"display: none;\">
                            <div style=\"display: flex; align-items: center; gap: 15px;\">
                                <div id=\"image-preview-container\" style=\"width: 80px; height: 80px; border-radius: 50%; background: #f0f0f0; overflow: hidden;\">
                                    {% if user.images %}
                                        <img id=\"image-preview\" src=\"/uploads/{{ user.images }}\" style=\"width:100%; height:100%; object-fit:cover;\">
                                    {% else %}
                                        <div id=\"image-preview\" style=\"width:100%; height:100%; display:flex; align-items:center; justify-content:center; font-size:30px;\">
                                            {{ user.username|first|upper }}
                                        </div>
                                    {% endif %}
                                </div>
                                <button type=\"button\" data-i18n=\"choose_image\" onclick=\"document.getElementById('image-upload').click()\" style=\"padding: 8px 12px; background: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer;\">
                                    Choisir une image
                                </button>
                            </div>
                            <input type=\"hidden\" id=\"image-base64\" name=\"images\" value=\"{{ user.images }}\">
                        </div>

                        <div class=\"form-group\">
                            <label data-i18n=\"username\">Nom d'utilisateur</label>
                            <input type=\"text\" name=\"username\" value=\"{{ user.username }}\">
                        </div>
                        <div class=\"form-group\">
                            <label data-i18n=\"mail\">Email</label>
                            <input type=\"email\" name=\"email\" value=\"{{ user.email }}\">
                        </div>
                        <div class=\"form-group\">
                            <label data-i18n=\"address\">Adresse</label>
                            <input type=\"text\" name=\"address\" value=\"{{ user.address }}\">
                        </div>
                        <div class=\"form-group\">
                            <label data-i18n=\"country\">Country</label>
                            <select id=\"country\" name=\"country\" class=\"select2\" required>
                                {% for country in countries %}
                                    <option value=\"{{ country }}\" {% if country == user.country %}selected{% endif %}>{{ country }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label data-i18n=\"contact\">Contact</label>
                            <input type=\"text\" name=\"contact\" value=\"{{ user.contact }}\">
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"button\" id=\"cancel-edit\" class=\"btn btn-cancel\" data-i18n=\"cancel\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-save\" data-i18n=\"save\">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {# Inclusion des dépendances Select2 #}
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            \$('.select2').select2({
                placeholder: 'Select a country',
                allowClear: true
            });
            const editBtn = document.getElementById('edit-btn');
            const cancelEdit = document.getElementById('cancel-edit');
            const profileView = document.getElementById('profile-view');
            const profileEdit = document.getElementById('profile-edit');
            const imageUpload = document.getElementById('image-upload');

            // Gestion de l'affichage du formulaire
            editBtn.addEventListener('click', function() {
                profileView.style.display = 'none';
                profileEdit.style.display = 'block';
            });

            cancelEdit.addEventListener('click', function() {
                profileEdit.style.display = 'none';
                profileView.style.display = 'block';
            });

            // Gestion de l'upload d'image
            imageUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const base64 = event.target.result.split(',')[1];
                        document.getElementById('image-base64').value = base64;

                        // Mise à jour de l'aperçu
                        const preview = document.getElementById('image-preview');
                        if (preview.tagName === 'IMG') {
                            preview.src = event.target.result;
                        } else {
                            const img = document.createElement('img');
                            img.id = 'image-preview';
                            img.src = event.target.result;
                            img.style.width = '100%';
                            img.style.height = '100%';
                            img.style.objectFit = 'cover';
                            document.getElementById('image-preview-container').innerHTML = '';
                            document.getElementById('image-preview-container').appendChild(img);
                        }

                        // Mise à jour de l'avatar preview
                        const avatarPreview = document.getElementById('avatar-preview');
                        avatarPreview.innerHTML = '';
                        const avatarImg = document.createElement('img');
                        avatarImg.src = event.target.result;
                        avatarImg.style.width = '100%';
                        avatarImg.style.height = '100%';
                        avatarImg.style.borderRadius = '50%';
                        avatarImg.style.objectFit = 'cover';
                        avatarPreview.appendChild(avatarImg);
                        avatarPreview.appendChild(document.getElementById('edit-btn'));
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            margin-top: 60px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 900px;
        }
        .profile-content {
            display: flex;
            gap: 60px;
            width: 100%;
            align-items: flex-start;
        }
        .avatar-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            width: 300px;
            position: sticky;
            top: 80px;
            z-index: 1;
        }
        .avatar-circle {
            width: 250px;
            height: 250px;
            background-color: #e0e0e0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
            font-size: 100px;
            position: relative;
        }
        .edit-button {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: #3498db;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .edit-button svg {
            color: white;
            width: 20px;
            height: 20px;
        }
        .username {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }
        .profile-info {
            flex: 1;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .info-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
        }
        .info-item {
            margin-bottom: 20px;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .info-label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        .info-value {
            padding-left: 10px;
            width: 100%;
            text-align: left;
        }
        .edit-form {
            display: none;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s;
        }
        .btn-cancel {
            background: #f0f0f0;
            border: 1px solid #ddd;
        }
        .btn-cancel:hover {
            background: #e0e0e0;
        }
        .btn-save {
            background: #3498db;
            color: white;
            border: none;
        }
        .btn-save:hover {
            background: #2980b9;
        }
    </style>
", "admin/profil.html.twig", "/home/tikiz/Asa/LiveShopping-V2-dev/desktopLive/templates/admin/profil.html.twig");
    }
}
