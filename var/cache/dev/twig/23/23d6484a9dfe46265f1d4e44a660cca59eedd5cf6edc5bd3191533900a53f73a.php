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
class __TwigTemplate_7b66bdd2076fdcd6c2eb73bd028955fccaab142492646a24b27bf50ab91e1313 extends Template
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


    <div class=\"container mt-5\">
        <ul class=\"list-group\">
            <li class=\"list-group-item\">
        <a class=\"row column\">
            <img class=\" btn hover-shadow cursor\"
                 src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 116, $this->source); })()), "productImage", [], "any", false, false, false, 116))), "html", null, true);
        echo "\" height=\"300px\" onclick=\"openModal();currentSlide(1)\">
           </a><span style=\"float: right; width:67%; height: 300px;\"><h3><b>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 117, $this->source); })()), "name", [], "any", false, false, false, 117), "html", null, true);
        echo "</b></h3>
                <hr class=\"navbar-nav\" width=\"400px\" align=\"left\" margin-left=\"200px\"><br><b style=\"color: #FF8C00\"><big><span style=\"font-size:20px\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 118, $this->source); })()), "price", [], "any", false, false, false, 118), "html", null, true);
        echo "</span></big></b>
               <br><br> <hr class=\"navbar-nav\" width=\"400px\" align=\"left\" margin-left=\"200px\"><a><span style=\"font-size:13px\"><b>Quantity: </b>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 119, $this->source); })()), "quantity", [], "any", false, false, false, 119), "html", null, true);
        echo "</span></a>
                    <br><a><span style=\"font-size:13px\"><b>Due: </b>";
        // line 120
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 120, $this->source); })()), "date", [], "any", false, false, false, 120), "F j,Y, g:i a"), "html", null, true);
        echo "</span></a>
           <br><br><br><span style=\"float: right\"><a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
        echo " \" class='btn btn-outline-secondary btn-sm '>Edit</a>
                        <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122)]), "html", null, true);
        echo " \" class='btn btn-outline-danger btn-sm'>Delete</a></span></span></li>
    </ul><br><br>
        <ul class=\"list-group\">
            <li class=\"list-group-item\" style=\"background-color: #363636\"><a style=\"color: #dfdfdf\">Description</a></li>
            <li class=\"list-group-item\">
                <p>";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 127, $this->source); })()), "description", [], "any", false, false, false, 127), "html", null, true);
        echo "</p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </li>
    </ul>
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
        return array (  217 => 127,  209 => 122,  205 => 121,  201 => 120,  197 => 119,  193 => 118,  189 => 117,  185 => 116,  170 => 104,  68 => 4,  58 => 3,  35 => 1,);
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


    <div class=\"container mt-5\">
        <ul class=\"list-group\">
            <li class=\"list-group-item\">
        <a class=\"row column\">
            <img class=\" btn hover-shadow cursor\"
                 src=\"{{ asset('uploads/image/' ~ products.productImage)}}\" height=\"300px\" onclick=\"openModal();currentSlide(1)\">
           </a><span style=\"float: right; width:67%; height: 300px;\"><h3><b>{{ products.name }}</b></h3>
                <hr class=\"navbar-nav\" width=\"400px\" align=\"left\" margin-left=\"200px\"><br><b style=\"color: #FF8C00\"><big><span style=\"font-size:20px\">{{ products.price }}</span></big></b>
               <br><br> <hr class=\"navbar-nav\" width=\"400px\" align=\"left\" margin-left=\"200px\"><a><span style=\"font-size:13px\"><b>Quantity: </b>{{ products.quantity }}</span></a>
                    <br><a><span style=\"font-size:13px\"><b>Due: </b>{{ products.date|date('F j,Y, g:i a') }}</span></a>
           <br><br><br><span style=\"float: right\"><a href=\"{{path('product_edit',{'id':products.id})}} \" class='btn btn-outline-secondary btn-sm '>Edit</a>
                        <a href=\"{{ path('product_delete', {'id': products.id}) }} \" class='btn btn-outline-danger btn-sm'>Delete</a></span></span></li>
    </ul><br><br>
        <ul class=\"list-group\">
            <li class=\"list-group-item\" style=\"background-color: #363636\"><a style=\"color: #dfdfdf\">Description</a></li>
            <li class=\"list-group-item\">
                <p>{{ products.description }}</p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </li>
    </ul>
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
