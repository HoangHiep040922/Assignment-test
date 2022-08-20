<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login/index.html.twig */
class __TwigTemplate_7adaa81a91f85e7b3b02dcf6c33b47ab5fd032d0d60248df11b6c15b0667d82d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <title>Login</title>
    <link rel=\"icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/logo.ico"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\"
            rel=\"stylesheet\"
    />
    <!-- Google Fonts -->
    <link
            href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"
            rel=\"stylesheet\"
    />
    <!-- MDB -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css\"
            rel=\"stylesheet\"
    />
    <!-- MDB -->
    <script
            type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js\"
    ></script>
";
        // line 36
        echo "
";
        // line 40
        echo "
";
        // line 43
        echo "
";
        // line 49
        echo "
    <section class=\"vh-100\" style=\"background-color: #FFFAF9\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">
                    <div class=\"card\" style=\"border-radius: 1rem;\" >
                        <div class=\"row g-0\">
                            <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
                                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/278252854_3176303079280156_1104298092568808500_n.jpg"), "html", null, true);
        echo "\"
                                     alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%\" />
                            </div>
                            <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
                                <div class=\"card-body p-4 p-lg-5 text-black\">

                                    <form action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                                        <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_list");
        echo "\">
                                        <div class=\"d-center align-items-center mb-7 pb-1\" style=\"margin-left: 25%; font-size: 80px\">
                                            <i class=\"fab fa-phoenix-framework\" style=\"color:#F8C471; font-size: 80px\"></i>
                                            <span class=\"h1 fw-bold mb-0\" style=\"color: #505050\">VON</span>
                                        </div></a>

                                        <h5 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Sign into your account</h5>

                                        <div class=\"form-outline mb-4\">
                                            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control form-control-lg\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "\" />
                                            <label class=\"form-label\" for=\"username\">Email address</label>
                                        </div>

                                        <div class=\"form-outline mb-4\">
                                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control form-control-lg\" />
                                            <label class=\"form-label\" for=\"password\">Password</label>
                                        </div>
                                                ";
        // line 81
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 81, $this->source); })())) {
            // line 82
            echo "                                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 82, $this->source); })()), "messageKey", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 82, $this->source); })()), "messageData", [], "any", false, false, false, 82), "security"), "html", null, true);
            echo "</div>
                                                ";
        }
        // line 84
        echo "                                        <div class=\"pt-1 mb-4\">
                                            <button class=\"btn btn-dark btn-lg btn-block\" type=\"submit\">Login</button>
                                        </div>


                                        <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">Don't have an account? <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"
                                                                                                                  style=\"color: #393f81;\">Register here</a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    .form-outline{
        background-color: #FAFAFA;
    }
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 89,  156 => 84,  150 => 82,  148 => 81,  137 => 73,  125 => 64,  121 => 63,  112 => 57,  102 => 49,  99 => 43,  96 => 40,  93 => 36,  69 => 4,  66 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}
    <title>Login</title>
    <link rel=\"icon\" href=\"{{ asset ('uploads/image/logo.ico') }}\">
    <!-- Font Awesome -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\"
            rel=\"stylesheet\"
    />
    <!-- Google Fonts -->
    <link
            href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"
            rel=\"stylesheet\"
    />
    <!-- MDB -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css\"
            rel=\"stylesheet\"
    />
    <!-- MDB -->
    <script
            type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js\"
    ></script>
{#    <div class=\"container\">#}
{#        <div class=\"row\">#}
{#            <div class=\"login-form bg-light mt-4 p-4\">#}
{#                <form method=\"post\" class=\"row g-3\">#}
{#                    {% if error %}#}
{#                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
{#                    {% endif %}#}
{#                </form>#}
{#            </div>#}
{#        </div>#}
{#    </div>#}

{#    <form action=\"{{ path('app_login') }}\" method=\"post\">#}
{#        <label for=\"username\">Email:</label>#}
{#        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"/>#}

{#        <label for=\"password\">Password:</label>#}
{#        <input type=\"password\" id=\"password\" name=\"_password\"/>#}

{#         If you want to control the URL the user is redirected to on success#}
{#        <input type=\"hidden\" name=\"_target_path\" value=\"/account\"/>#}
{#        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">#}
{#        <button type=\"submit\">login</button>#}
{#    </form>#}

    <section class=\"vh-100\" style=\"background-color: #FFFAF9\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">
                    <div class=\"card\" style=\"border-radius: 1rem;\" >
                        <div class=\"row g-0\">
                            <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
                                <img src=\"{{ asset('uploads/image/278252854_3176303079280156_1104298092568808500_n.jpg')}}\"
                                     alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%\" />
                            </div>
                            <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
                                <div class=\"card-body p-4 p-lg-5 text-black\">

                                    <form action=\"{{ path('app_login') }}\" method=\"post\">
                                        <a href=\"{{ path('product_list') }}\">
                                        <div class=\"d-center align-items-center mb-7 pb-1\" style=\"margin-left: 25%; font-size: 80px\">
                                            <i class=\"fab fa-phoenix-framework\" style=\"color:#F8C471; font-size: 80px\"></i>
                                            <span class=\"h1 fw-bold mb-0\" style=\"color: #505050\">VON</span>
                                        </div></a>

                                        <h5 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Sign into your account</h5>

                                        <div class=\"form-outline mb-4\">
                                            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control form-control-lg\" value=\"{{ last_username }}\" />
                                            <label class=\"form-label\" for=\"username\">Email address</label>
                                        </div>

                                        <div class=\"form-outline mb-4\">
                                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control form-control-lg\" />
                                            <label class=\"form-label\" for=\"password\">Password</label>
                                        </div>
                                                {% if error %}
                                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                                {% endif %}
                                        <div class=\"pt-1 mb-4\">
                                            <button class=\"btn btn-dark btn-lg btn-block\" type=\"submit\">Login</button>
                                        </div>


                                        <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">Don't have an account? <a href=\"{{ path ('app_register') }}\"
                                                                                                                  style=\"color: #393f81;\">Register here</a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    .form-outline{
        background-color: #FAFAFA;
    }
</style>

{% endblock %}", "login/index.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\login\\index.html.twig");
    }
}
