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

/* base.html.twig */
class __TwigTemplate_17cce2f66f710d66155fe3738a502e7f2f6cbfee3203a3c5f264155257873271 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/logo.ico"), "html", null, true);
        echo "\">
    <link href=\"https://getbootstrap.com/docs/5.2/assets/css/docs.css\" rel=\"stylesheet\">
    <link rel = \"stylesheet\" href =\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx\" crossorigin=\"anonymous\">
    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "

</head>

<body>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa\" crossorigin=\"anonymous\"></script>

<style>
    body{
    background-color: #E5E5E5
    }
</style>

";
        // line 36
        echo "
";
        // line 45
        echo "
<nav class=\"navbar navbar-light bg-light\">
    <a class=\"navbar-brand\" style=\"font-size: 15px\">Website From Assignment 1 For 'VON'</a>
    ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "        <div class=\"dropdown dropstart\">
            <a type=\"button\" class=\"\" data-bs-toggle=\"dropdown\">
                <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/BrowserPreview_tmp.gif"), "html", null, true);
            echo "\" alt=\"\" style=\"width:45px; height: 45px; border: 0\" class=\"rounded-pill\">
            </a>
            <ul class=\"dropdown-menu dropdown-menu-dark\">
                <li><a class=\"dropdown-item disabled\" style=\"text-align: center;font-weight: bold; color: white \">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "email", [], "any", false, false, false, 54), "html", null, true);
            echo "</a></li><hr>
                <li><a class=\"dropdown-item btn btn-sm btn-outline-danger\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"font-size: 17px; text-align: center;\" >
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-door-open\" viewBox=\"0 0 16 16\">
                            <path d=\"M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z\"/>
                            <path d=\"M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z\"/>
                        </svg>&nbsp&nbsp&nbspLog Out</a></li>
            </ul>&nbsp;&nbsp;&nbsp;&emsp;
        </div>
";
            // line 66
            echo "
    ";
        } else {
            // line 68
            echo "        <div>
            <a class=\"btn btn-secondary\" style=\"font-family: Comic Sans MS cursive\" href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a> &nbsp
            <a class=\"btn btn-success\" style=\"font-family: Comic Sans MS cursive\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>&nbsp&nbsp
        </div>
    ";
        }
        // line 73
        echo "</nav>
<div class=\"container\">
    ";
        // line 75
        if (array_key_exists("message", $context)) {
            // line 76
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 80
        echo "</div>

    <script
            src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
            integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
            crossorigin=\"anonymous\">
    </script>
    <script src=\"/js/script.js\"></script>


<nav id=\"navbar-example2\" class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3\">
        <a class=\"navbar-brand\" href=\"/\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"15\" fill=\"currentColor\" class=\"bi bi-house\" viewBox=\"0 0 15 15\">
                    <path fill-rule=\"evenodd\" d=\"M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z\"/>
                    <path fill-rule=\"evenodd\" d=\"M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z\"/>
                </svg>&nbsp;Home</a></div>
            <div class=\"col-sm-9\">
        <form class=\"d-flex\">
            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
        </form></div>
        </div>
        <ul class=\"navbar-nav\">

            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Category</a>
                <ul class=\"dropdown-menu dropdown-menu-dark\">
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 110
            echo "                    <li><a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_view", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "catname", [], "any", false, false, false, 110), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_details");
        echo "\">Category List</a></li>

                </ul>

            </li>

            <li><a class=\"nav-link\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_create");
        echo " \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" fill=\"currentColor\" class=\"bi bi-plus-square\" viewBox=\"0 0 18 18\">
                        <path d=\"M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
                        <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                    </svg>&nbsp;Add Product</a>
            </li>


            <li><a class=\"nav-link\" href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_create");
        echo " \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" fill=\"currentColor\" class=\"bi bi-plus-square\" viewBox=\"0 0 18 18\">
                        <path d=\"M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
                        <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                    </svg>&nbsp;Add Category</a>
            </li>
        </ul>
    </div>
</nav>




";
        // line 139
        $this->displayBlock('body', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "

";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "VON";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 143,  302 => 139,  284 => 19,  265 => 14,  252 => 144,  250 => 143,  245 => 141,  242 => 140,  240 => 139,  225 => 127,  215 => 120,  206 => 114,  202 => 112,  191 => 110,  187 => 109,  156 => 80,  150 => 77,  147 => 76,  145 => 75,  141 => 73,  135 => 70,  131 => 69,  128 => 68,  124 => 66,  114 => 55,  110 => 54,  104 => 51,  100 => 49,  98 => 48,  93 => 45,  90 => 36,  75 => 20,  73 => 19,  65 => 14,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"{{ asset ('uploads/image/logo.ico') }}\">
    <link href=\"https://getbootstrap.com/docs/5.2/assets/css/docs.css\" rel=\"stylesheet\">
    <link rel = \"stylesheet\" href =\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

    <title>{% block title %}VON{% endblock %}</title>


    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx\" crossorigin=\"anonymous\">
    {% block stylesheets %}{% endblock %}


</head>

<body>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa\" crossorigin=\"anonymous\"></script>

<style>
    body{
    background-color: #E5E5E5
    }
</style>

{#<nav class=\"navbar navbar-expand-sm bg-light navbar-light\" style=\"height: 40px\">#}
{#    <div class=\"container-fluid\">#}
{#        <b class=\"font-rale font-size-12 text-black-30 m-0\">Website From Assignment 1 For 'VON'</b>#}

{#        <a class=\"navbar-brand\" href=\"{{path ('app_register') }}\">Register</a>#}
{#        <a class=\"navbar-brand\" href=\"{{ path('app_login') }}\">Login#}
{#            <img src=\"{{ asset('uploads/image/BrowserPreview_tmp.gif')}}\" alt=\"\" style=\"width:30px; height: 30px; border: 0\" class=\"rounded-pill\"></a>#}
{#        <a>{% if is_granted('IS_AUTHENTICATED_FULLY') %}#}
{#                <a>Email: {{ app.user.email }}</a><a class=\"navbar-brand\" href=\"{{ path ('app_logout') }}\">Logout</a>#}
{#            {% endif %}</a>#}
{#    </div>#}
{#</nav>#}

<nav class=\"navbar navbar-light bg-light\">
    <a class=\"navbar-brand\" style=\"font-size: 15px\">Website From Assignment 1 For 'VON'</a>
    {% if app.user %}
        <div class=\"dropdown dropstart\">
            <a type=\"button\" class=\"\" data-bs-toggle=\"dropdown\">
                <img src=\"{{ asset('uploads/image/BrowserPreview_tmp.gif')}}\" alt=\"\" style=\"width:45px; height: 45px; border: 0\" class=\"rounded-pill\">
            </a>
            <ul class=\"dropdown-menu dropdown-menu-dark\">
                <li><a class=\"dropdown-item disabled\" style=\"text-align: center;font-weight: bold; color: white \">{{ app.user.email }}</a></li><hr>
                <li><a class=\"dropdown-item btn btn-sm btn-outline-danger\" href=\"{{ path('app_logout') }}\" style=\"font-size: 17px; text-align: center;\" >
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-door-open\" viewBox=\"0 0 16 16\">
                            <path d=\"M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z\"/>
                            <path d=\"M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z\"/>
                        </svg>&nbsp&nbsp&nbspLog Out</a></li>
            </ul>&nbsp;&nbsp;&nbsp;&emsp;
        </div>
{#        <div>#}
{#            {{ app.user.email }}&nbsp&nbsp<img src=\"{{ asset('uploads/image/BrowserPreview_tmp.gif')}}\" alt=\"\" style=\"width:45px; height: 45px; border: 0\" class=\"rounded-pill\">#}
{#            &nbsp&nbsp<a class=\"btn btn-sm btn-outline-danger\" style=\"font-family: Comic Sans MS cursive\" href=\"{{ path('app_logout') }}\">Logout</a> &nbsp&nbsp#}
{#        </div>#}

    {% else %}
        <div>
            <a class=\"btn btn-secondary\" style=\"font-family: Comic Sans MS cursive\" href=\"{{ path('app_register') }}\">Register</a> &nbsp
            <a class=\"btn btn-success\" style=\"font-family: Comic Sans MS cursive\" href=\"{{ path('app_login') }}\">Login</a>&nbsp&nbsp
        </div>
    {% endif %}
</nav>
<div class=\"container\">
    {% if message is defined %}
        <div class=\"alert alert-danger\">
            {{ message }}
        </div>
    {% endif %}
</div>

    <script
            src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
            integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
            crossorigin=\"anonymous\">
    </script>
    <script src=\"/js/script.js\"></script>


<nav id=\"navbar-example2\" class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3\">
        <a class=\"navbar-brand\" href=\"/\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"15\" fill=\"currentColor\" class=\"bi bi-house\" viewBox=\"0 0 15 15\">
                    <path fill-rule=\"evenodd\" d=\"M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z\"/>
                    <path fill-rule=\"evenodd\" d=\"M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z\"/>
                </svg>&nbsp;Home</a></div>
            <div class=\"col-sm-9\">
        <form class=\"d-flex\">
            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
        </form></div>
        </div>
        <ul class=\"navbar-nav\">

            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Category</a>
                <ul class=\"dropdown-menu dropdown-menu-dark\">
                    {% for category in categories %}
                    <li><a class=\"dropdown-item\" href=\"{{path('category_view',{'id':category.id})}}\">{{ category.catname }}</a></li>
                    {% endfor %}

                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{path('category_details')}}\">Category List</a></li>

                </ul>

            </li>

            <li><a class=\"nav-link\" href=\"{{path('product_create')}} \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" fill=\"currentColor\" class=\"bi bi-plus-square\" viewBox=\"0 0 18 18\">
                        <path d=\"M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
                        <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                    </svg>&nbsp;Add Product</a>
            </li>


            <li><a class=\"nav-link\" href=\"{{path('category_create')}} \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" fill=\"currentColor\" class=\"bi bi-plus-square\" viewBox=\"0 0 18 18\">
                        <path d=\"M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
                        <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                    </svg>&nbsp;Add Category</a>
            </li>
        </ul>
    </div>
</nav>




{% block body %}{% endblock %}

{{ include('footer.html.twig') }}

{% block javascripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\base.html.twig");
    }
}
