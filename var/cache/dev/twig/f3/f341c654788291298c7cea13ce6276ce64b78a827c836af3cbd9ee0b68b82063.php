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

/* registration/register.html.twig */
class __TwigTemplate_213827d10b8075f95a838d1e2fe05d39361775ae5083dc74190cd5e442cbd5e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
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

        // line 2
        echo "    <!-- Font Awesome -->
    <link rel=\"icon\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/logo.ico"), "html", null, true);
        echo "\">
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
        // line 41
        echo "
    <title>Sign Up</title>

    <!-- Section: Design Block -->
    <section class=\"text-center text-lg-start\" style=\"background-color: #FFFAF9\">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class=\"container py-4\">
            <div class=\"row g-0 align-items-center\">
                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                    <div class=\"card cascading-right\" style=\"
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            \">
                        <div class=\"card-body p-5 shadow-5 text-center\">
                            <h2 class=\"fw-bold mb-5\">Sign Up Now</h2>
                            ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), 'form_start');
        echo "
                                <!-- Email input -->
                                <div class=\"mb-4\">
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'row');
        echo "
                                </div>

                                <!-- Password input -->
                                <div class=\"mb-4\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "plainPassword", [], "any", false, false, false, 76), 'row', ["label" => "Password"]);
        // line 78
        echo "
                                </div>

                                <!-- Checkbox -->
                                <div class=\"form-check d-flex justify-content-left mb-4\" >
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "agreeTerms", [], "any", false, false, false, 83), 'widget');
        echo "
                                </div>

                                <!-- Submit button -->
                            <div class=\"pt-1 mb-5\">
                                <button type=\"submit\" class=\"btn btn-dark btn-lg btn-block\">
                                    Sign up
                                </button>
                            </div>
                            <p class=\"mb-2 pb-lg-2\" style=\"color: #393f81;\">Already have an account! <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"
                                                                                                      style=\"color: #393f81;\">Login here</a></p>
                            ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-5 mb-5 mb-lg-0\">
                    <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/282777966_3200097670234030_5743929814252195797_n.jpg"), "html", null, true);
        echo "\" class=\"w-100 rounded-4 shadow-4\"
                         alt=\"\" style=\"height: 100%\" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 100,  160 => 94,  155 => 92,  143 => 83,  136 => 78,  134 => 76,  126 => 71,  120 => 68,  91 => 41,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <!-- Font Awesome -->
    <link rel=\"icon\" href=\"{{ asset ('uploads/image/logo.ico') }}\">
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


{#    <div class=\"container mt-5\"><br><br><br><br>#}
{#        <ul class=\"list-group\">#}
{#            <li class=\"list-group-item\" style=\"align-self: center; background-color: #F7F7F7\"><h1 style=\"align-self: center\">Register</h1><hr><br>#}
{#                {{ form_start(registrationForm) }}#}
{#                <a style=\"float: right\"> {{ form_row(registrationForm.email) }}</a>#}
{#                <a>{{ form_row(registrationForm.plainPassword, {#}
{#                        label: 'Password'#}
{#                    }) }}</a>#}
{#                <br> <hr>#}
{#                <a>{{ form_widget(registrationForm.agreeTerms) }} Agree Terms</a>#}
{#                <br>#}
{#                <a style=\"float: right\"><button type=\"submit\" class=\"btn btn-success\">Register</button></a>#}
{#                {{ form_end(registrationForm) }}#}
{#            </li>#}
{#        </ul>#}
{#    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>#}

    <title>Sign Up</title>

    <!-- Section: Design Block -->
    <section class=\"text-center text-lg-start\" style=\"background-color: #FFFAF9\">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class=\"container py-4\">
            <div class=\"row g-0 align-items-center\">
                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                    <div class=\"card cascading-right\" style=\"
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            \">
                        <div class=\"card-body p-5 shadow-5 text-center\">
                            <h2 class=\"fw-bold mb-5\">Sign Up Now</h2>
                            {{ form_start(registrationForm) }}
                                <!-- Email input -->
                                <div class=\"mb-4\">
                                    {{ form_row(registrationForm.email) }}
                                </div>

                                <!-- Password input -->
                                <div class=\"mb-4\">
                                    {{ form_row(registrationForm.plainPassword, {
                                        label: 'Password'
                                    }) }}
                                </div>

                                <!-- Checkbox -->
                                <div class=\"form-check d-flex justify-content-left mb-4\" >
                                    {{ form_widget(registrationForm.agreeTerms) }}
                                </div>

                                <!-- Submit button -->
                            <div class=\"pt-1 mb-5\">
                                <button type=\"submit\" class=\"btn btn-dark btn-lg btn-block\">
                                    Sign up
                                </button>
                            </div>
                            <p class=\"mb-2 pb-lg-2\" style=\"color: #393f81;\">Already have an account! <a href=\"{{ path ('app_login') }}\"
                                                                                                      style=\"color: #393f81;\">Login here</a></p>
                            {{ form_end(registrationForm) }}
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-5 mb-5 mb-lg-0\">
                    <img src=\"{{ asset('uploads/image/282777966_3200097670234030_5743929814252195797_n.jpg')}}\" class=\"w-100 rounded-4 shadow-4\"
                         alt=\"\" style=\"height: 100%\" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->



{#    <div class=\"container\">#}
{#        <div class=\"row\">#}
{#            <div class=\"bg-light mt-4 p-4\">#}
{#                <h1>Register</h1>#}
{#                {{ form_start(registrationForm) }}#}
{#                {{ form_row(registrationForm.email) }}#}
{#                {{ form_row(registrationForm.plainPassword, {#}
{#                    label: 'Password'#}
{#                }) }}#}
{#                {{ form_row(registrationForm.agreeTerms) }}#}
{#                <button type=\"submit\" class=\"btn\">Register</button>#}
{#                {{ form_end(registrationForm) }}#}
{#            </div>#}
{#        </div>#}
{#    </div>#}
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\registration\\register.html.twig");
    }
}
