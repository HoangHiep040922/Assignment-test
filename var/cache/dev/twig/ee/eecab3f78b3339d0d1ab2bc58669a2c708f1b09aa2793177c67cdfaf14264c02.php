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

/* product/details.html.twig */
class __TwigTemplate_17e550fb88f905503bf2b85a85d51a53f608b87f6ee49a3dc88593d0d2fc6987 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <style>
        body {
            font-family: Verdana, sans-serif;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: \"\";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 40%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .cursor {
            cursor: pointer;
        }


        img {
            margin-bottom: -4px;

        }

        .demo {
            opacity: 0.6;
        }


        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>

    <div id=\"myModal\" class=\"modal\">
        <span class=\"close cursor\" onclick=\"closeModal()\">&times;</span>
        <div class=\"modal-content\">

            <div class=\"mySlides\">
                <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 104, $this->source); })()), "productImage", [], "any", false, false, false, 104))), "html", null, true);
        echo "\" style=\"width:100%\">
            </div>

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-9\">
    <div class=\"container mt-5\">
        <ul class=\"list-group\">
            <li class=\"list-group-item\">
        <a class=\"row column\">
            <img class=\" btn hover-shadow cursor\"
                 src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 117, $this->source); })()), "productImage", [], "any", false, false, false, 117))), "html", null, true);
        echo "\" height=\"300px\" onclick=\"openModal();currentSlide(1)\">
           </a><span style=\"float: right; width:67%; height: 300px;\"><h3><b>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 118, $this->source); })()), "name", [], "any", false, false, false, 118), "html", null, true);
        echo "</b></h3>
                <hr class=\"navbar-nav\" width=\"400px\" align=\"left\" margin-left=\"200px\"><br><b style=\"color: #FF8C00\"><big><span style=\"font-size:20px\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 119, $this->source); })()), "price", [], "any", false, false, false, 119), "html", null, true);
        echo "đ</span></big></b>
               <br><br> <hr class=\"navbar-nav\" width=\"400px\" align=\"left\" margin-left=\"200px\"><a><span style=\"font-size:13px\"><b>Quantity: </b>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 120, $this->source); })()), "quantity", [], "any", false, false, false, 120), "html", null, true);
        echo "</span></a>
                    <br><a><span style=\"font-size:13px\"><b>Due: </b>";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 121, $this->source); })()), "date", [], "any", false, false, false, 121), "F j,Y, g:i a"), "html", null, true);
        echo "</span></a>
           <br><br><br><span style=\"float: right\"><a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122)]), "html", null, true);
        echo " \" class='btn btn-outline-secondary btn-sm '>Edit</a>
                        <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
        echo " \" class='btn btn-outline-danger btn-sm'>Delete</a></span></span></li>
    </ul><br><br>
        <ul class=\"list-group\">
            <li class=\"list-group-item\" style=\"background-color: #363636\"><a style=\"color: white\">Description</a></li>
            <li class=\"list-group-item\">
                <p>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 128, $this->source); })()), "description", [], "any", false, false, false, 128), "html", null, true);
        echo "</p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br>
            </li>
    </ul>
    </div></div>
        <div class=\"col-sm-3\">
            <br><br><ul class=\"list-group\">
                <li class=\"list-group-item\" style=\"background-color: #363636\">
            <h4 style=\"color: white; width: 50%;height: 50%;margin-right: 55px;margin-left: auto;margin-top: auto;margin-bottom: auto\">Suggestion</h4></li>
                <li class=\"list-group-item\">
            <!-- Carousel -->
            <div id=\"demo\" class=\"carousel slide\" data-bs-ride=\"carousel\">

                <!-- Indicators/dots -->
                <div class=\"carousel-indicators\">
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"0\" class=\"active\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"1\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"2\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"3\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"4\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"5\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"6\"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class=\"carousel-inner\" style=\"box-sizing: border-box; padding: 0;max-width: 450px; margin: 0 auto;
   width: 100%; position: relative;\">
                    <div class=\"carousel-item active\">
                        <a href=\"/product/details/14\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/samsung-galaxy-z-fold-3-green-1-600x600-1-62f6aa24d720d.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px;\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/22\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/460e29e243aec1cd04f26a86a7eb08ca-62f6b5076e38e.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/15\"><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/4602806.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/2\"><img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/image-removebg-preview-12.png"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/21\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/tu-lanh-samsung-main-645-1020-png-62f6b45deb78f.webp"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/24\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/Tim-640x640-1-62f6b69fd7a32.png"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/31\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/bg-header-m-1-62f6ba9dd182e.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"prev\">

                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"next\">

                </button>
            </div></li>

            </ul>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>


    <style>
        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 0 16px;
        }

        .container::after, .row::after {
            content: \"\";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }
    </style>


    <script>
        function openModal() {
            document.getElementById(\"myModal\").style.display = \"block\";
        }

        function closeModal() {
            document.getElementById(\"myModal\").style.display = \"none\";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName(\"mySlides\");
            var dots = document.getElementsByClassName(\"demo\");
            var captionText = document.getElementById(\"caption\");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = \"none\";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(\" active\", \"\");
            }
            slides[slideIndex-1].style.display = \"block\";
            dots[slideIndex-1].className += \" active\";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 176,  281 => 173,  275 => 170,  269 => 167,  263 => 164,  257 => 161,  251 => 158,  218 => 128,  210 => 123,  206 => 122,  202 => 121,  198 => 120,  194 => 119,  190 => 118,  186 => 117,  170 => 104,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <style>
        body {
            font-family: Verdana, sans-serif;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: \"\";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 40%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .cursor {
            cursor: pointer;
        }


        img {
            margin-bottom: -4px;

        }

        .demo {
            opacity: 0.6;
        }


        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>

    <div id=\"myModal\" class=\"modal\">
        <span class=\"close cursor\" onclick=\"closeModal()\">&times;</span>
        <div class=\"modal-content\">

            <div class=\"mySlides\">
                <img src=\"{{ asset('uploads/image/' ~ products.productImage)}}\" style=\"width:100%\">
            </div>

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-9\">
    <div class=\"container mt-5\">
        <ul class=\"list-group\">
            <li class=\"list-group-item\">
        <a class=\"row column\">
            <img class=\" btn hover-shadow cursor\"
                 src=\"{{ asset('uploads/image/' ~ products.productImage)}}\" height=\"300px\" onclick=\"openModal();currentSlide(1)\">
           </a><span style=\"float: right; width:67%; height: 300px;\"><h3><b>{{ products.name }}</b></h3>
                <hr class=\"navbar-nav\" width=\"400px\" align=\"left\" margin-left=\"200px\"><br><b style=\"color: #FF8C00\"><big><span style=\"font-size:20px\">{{ products.price }}đ</span></big></b>
               <br><br> <hr class=\"navbar-nav\" width=\"400px\" align=\"left\" margin-left=\"200px\"><a><span style=\"font-size:13px\"><b>Quantity: </b>{{ products.quantity }}</span></a>
                    <br><a><span style=\"font-size:13px\"><b>Due: </b>{{ products.date|date('F j,Y, g:i a') }}</span></a>
           <br><br><br><span style=\"float: right\"><a href=\"{{path('product_edit',{'id':products.id})}} \" class='btn btn-outline-secondary btn-sm '>Edit</a>
                        <a href=\"{{ path('product_delete', {'id': products.id}) }} \" class='btn btn-outline-danger btn-sm'>Delete</a></span></span></li>
    </ul><br><br>
        <ul class=\"list-group\">
            <li class=\"list-group-item\" style=\"background-color: #363636\"><a style=\"color: white\">Description</a></li>
            <li class=\"list-group-item\">
                <p>{{ products.description }}</p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br>
            </li>
    </ul>
    </div></div>
        <div class=\"col-sm-3\">
            <br><br><ul class=\"list-group\">
                <li class=\"list-group-item\" style=\"background-color: #363636\">
            <h4 style=\"color: white; width: 50%;height: 50%;margin-right: 55px;margin-left: auto;margin-top: auto;margin-bottom: auto\">Suggestion</h4></li>
                <li class=\"list-group-item\">
            <!-- Carousel -->
            <div id=\"demo\" class=\"carousel slide\" data-bs-ride=\"carousel\">

                <!-- Indicators/dots -->
                <div class=\"carousel-indicators\">
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"0\" class=\"active\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"1\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"2\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"3\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"4\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"5\"></button>
                    <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"6\"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class=\"carousel-inner\" style=\"box-sizing: border-box; padding: 0;max-width: 450px; margin: 0 auto;
   width: 100%; position: relative;\">
                    <div class=\"carousel-item active\">
                        <a href=\"/product/details/14\"><img src=\"{{ asset('uploads/image/samsung-galaxy-z-fold-3-green-1-600x600-1-62f6aa24d720d.jpg')}}\"  class=\"d-block w-100\" style=\"height: 500px;\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/22\"><img src=\"{{ asset('uploads/image/460e29e243aec1cd04f26a86a7eb08ca-62f6b5076e38e.jpg')}}\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/15\"><img src=\"{{ asset('uploads/image/4602806.jpg')}}\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/2\"><img src=\"{{ asset('uploads/image/image-removebg-preview-12.png')}}\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/21\"><img src=\"{{ asset('uploads/image/tu-lanh-samsung-main-645-1020-png-62f6b45deb78f.webp')}}\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/24\"><img src=\"{{ asset('uploads/image/Tim-640x640-1-62f6b69fd7a32.png')}}\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                    <div class=\"carousel-item\">
                        <a href=\"/product/details/31\"><img src=\"{{ asset('uploads/image/bg-header-m-1-62f6ba9dd182e.jpg')}}\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"prev\">

                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"next\">

                </button>
            </div></li>

            </ul>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>


    <style>
        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 0 16px;
        }

        .container::after, .row::after {
            content: \"\";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }
    </style>


    <script>
        function openModal() {
            document.getElementById(\"myModal\").style.display = \"block\";
        }

        function closeModal() {
            document.getElementById(\"myModal\").style.display = \"none\";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName(\"mySlides\");
            var dots = document.getElementsByClassName(\"demo\");
            var captionText = document.getElementById(\"caption\");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = \"none\";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(\" active\", \"\");
            }
            slides[slideIndex-1].style.display = \"block\";
            dots[slideIndex-1].className += \" active\";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
{% endblock %}
", "product/details.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\product\\details.html.twig");
    }
}
