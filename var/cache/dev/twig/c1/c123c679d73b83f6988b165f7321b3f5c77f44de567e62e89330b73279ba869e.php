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

/* product/index.html.twig */
class __TwigTemplate_a7f9b3319ace3a28426e2b036f197a7aac116484a470c008f8cfabac5dcc2a4d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


    ";
        // line 7
        echo "

    <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" style=\"box-sizing: border-box; padding: 0; margin: 0;\">
        <div class=\"carousel-inner\" style=\"max-width: 2000px; margin: 0 auto; padding: 0 0;
   width: 100%; position: relative;\">
            <div class=\"carousel-item active\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/4602806.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" style=\"width: 1200px; height: 500px;\" alt=\"...\">

            </div>
            <div class=\"carousel-item \">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/vn-sub-pc-hero-001-1495358286805.webp"), "html", null, true);
        echo "\" class=\"d-block w-100\" style=\"width: 1200px; height: 500px;\" alt=\"...\">

            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/photo-5-1651052896669631605443-3089.webp"), "html", null, true);
        echo "\" class=\"d-block w-100\" style=\"width: 1200px; height: 500px;\" alt=\"...\">

            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
            <span class=\"carousel-control\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
            <span class=\"carousel-control\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>

    ";
        // line 36
        echo "<br><br>
   <hr style=\"width: 50%;height: 1px;background-color: black;margin-right: auto;margin-left: auto;margin-top: auto;margin-bottom: auto;border-width: 1px;border-color: black;\"><br>
    <ul class=\"list-group\">
        <div class=\"container mt-3\"> <div class=\"bs-example table-responsive-sm\" data-example-id=\"striped-table\">
                <table class=\"table table-bordered\">
                    <tbody>

                        <tr>
                            <td><a class=\"list-group-item btn btn-light\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_details");
        echo "\" style=\"background-color: black; color: #DDDDDD\"><h2>Category List</h2></a>
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo "<a class=\"list-group-item btn btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productByCat", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo " \" style=\"font-size: 20px\">
                                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "catname", [], "any", false, false, false, 46), "html", null, true);
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </ul>

    <br><hr style=\"width: 50%;height: 1px;background-color: black;margin-right: auto;margin-left: auto;margin-top: auto;margin-bottom: auto;border-width: 1px;border-color: black;\"><br>
    <ul class=\"list-group\">
        <div class=\"container mt-3\">
        <li class=\"list-group-item\" style=\"background-color: #363636\"><h3 style=\"color: #dfdfdf\">All Products </h3></li>
        </div>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
        <div class=\"tab-pane container active\" id=\"home\">
    <ul class=\"list-group list-group-horizontal\">
        <li class=\"list-group-item\">
            <div class=\"container mt-3\">
                <table class=\"table\">
            <tbody>

            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 71
            echo "                <tr>
                    <td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo " \" class='btn'><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->source, $context["product"], "productImage", [], "any", false, false, false, 72))), "html", null, true);
            echo "\" height=\"200px\" width=\"300px\"></a><td>
                    <td><h4>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</h4><div class=\"row\"><div class=\"col\"><span style=\"font-size: 20px\"><strong style=\"color: red\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73), "html", null, true);
            echo "đ</strong></span></div></div>
                        <br><br>
                        <div class=\"row\"><div class=\"col\"> <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo " \" class='btn btn-outline-secondary btn-sm '>Edit</a>
                                <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo " \"class='btn btn-outline-danger btn-sm'>Delete</a></div></div></td>

                    <td style=\"right: 50px; width: 700px\"><a>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 78), "html", null, true);
            echo "</a></td>


                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            </tbody>
                </table>
            </div>
        </li>
    </ul></div></div>


<style>
    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination a.active {
        background-color: #7B7B7B;
        color: white;
        border-radius: 5px;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
        border-radius: 5px;
    }
</style>

<ul class=\"list-group\">
    <li class=\"list-group-item\" >
<div class=\"pagination\" style=\"float: right; width:60%; height: 300px;\">
    <a href=\"#\">&laquo;</a>
    <a href=\"#\" class=\"active\">1</a>
    <a href=\"#\" >2</a>
    <a href=\"#\">3</a>
    <a href=\"#\">4</a>
    <a href=\"#\">5</a>
    <a href=\"#\">6</a>
    <a href=\"#\">&raquo;</a>
</div></li></ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 83,  195 => 78,  190 => 76,  186 => 75,  179 => 73,  173 => 72,  170 => 71,  166 => 70,  134 => 46,  126 => 45,  122 => 44,  112 => 36,  95 => 21,  88 => 17,  81 => 13,  73 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}



    {# First Slide #}


    <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" style=\"box-sizing: border-box; padding: 0; margin: 0;\">
        <div class=\"carousel-inner\" style=\"max-width: 2000px; margin: 0 auto; padding: 0 0;
   width: 100%; position: relative;\">
            <div class=\"carousel-item active\">
                <img src=\"{{ asset('uploads/image/4602806.jpg')}}\" class=\"d-block w-100\" style=\"width: 1200px; height: 500px;\" alt=\"...\">

            </div>
            <div class=\"carousel-item \">
                <img src=\"{{ asset('uploads/image/vn-sub-pc-hero-001-1495358286805.webp')}}\" class=\"d-block w-100\" style=\"width: 1200px; height: 500px;\" alt=\"...\">

            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('uploads/image/photo-5-1651052896669631605443-3089.webp')}}\" class=\"d-block w-100\" style=\"width: 1200px; height: 500px;\" alt=\"...\">

            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
            <span class=\"carousel-control\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
            <span class=\"carousel-control\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>

    {# End Slide #}
<br><br>
   <hr style=\"width: 50%;height: 1px;background-color: black;margin-right: auto;margin-left: auto;margin-top: auto;margin-bottom: auto;border-width: 1px;border-color: black;\"><br>
    <ul class=\"list-group\">
        <div class=\"container mt-3\"> <div class=\"bs-example table-responsive-sm\" data-example-id=\"striped-table\">
                <table class=\"table table-bordered\">
                    <tbody>

                        <tr>
                            <td><a class=\"list-group-item btn btn-light\" href=\"{{ path('category_details') }}\" style=\"background-color: black; color: #DDDDDD\"><h2>Category List</h2></a>
                                {% for category in categories %}<a class=\"list-group-item btn btn-outline-secondary\" href=\"{{path('productByCat',{'id':category.id})}} \" style=\"font-size: 20px\">
                                    {{ category.catname }}</a>{% endfor %}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </ul>

    <br><hr style=\"width: 50%;height: 1px;background-color: black;margin-right: auto;margin-left: auto;margin-top: auto;margin-bottom: auto;border-width: 1px;border-color: black;\"><br>
    <ul class=\"list-group\">
        <div class=\"container mt-3\">
        <li class=\"list-group-item\" style=\"background-color: #363636\"><h3 style=\"color: #dfdfdf\">All Products </h3></li>
        </div>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
        <div class=\"tab-pane container active\" id=\"home\">
    <ul class=\"list-group list-group-horizontal\">
        <li class=\"list-group-item\">
            <div class=\"container mt-3\">
                <table class=\"table\">
            <tbody>

            {% for product in products %}
                <tr>
                    <td><a href=\"{{path('product_details',{'id':product.id})}} \" class='btn'><img src=\"{{ asset('uploads/image/' ~ product.productImage)}}\" height=\"200px\" width=\"300px\"></a><td>
                    <td><h4>{{ product.name }}</h4><div class=\"row\"><div class=\"col\"><span style=\"font-size: 20px\"><strong style=\"color: red\">{{ product.price }}đ</strong></span></div></div>
                        <br><br>
                        <div class=\"row\"><div class=\"col\"> <a href=\"{{path('product_edit',{'id':product.id})}} \" class='btn btn-outline-secondary btn-sm '>Edit</a>
                                <a href=\"{{ path('product_delete', {'id': product.id}) }} \"class='btn btn-outline-danger btn-sm'>Delete</a></div></div></td>

                    <td style=\"right: 50px; width: 700px\"><a>{{ product.description }}</a></td>


                </tr>
            {% endfor %}
            </tbody>
                </table>
            </div>
        </li>
    </ul></div></div>


<style>
    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination a.active {
        background-color: #7B7B7B;
        color: white;
        border-radius: 5px;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
        border-radius: 5px;
    }
</style>

<ul class=\"list-group\">
    <li class=\"list-group-item\" >
<div class=\"pagination\" style=\"float: right; width:60%; height: 300px;\">
    <a href=\"#\">&laquo;</a>
    <a href=\"#\" class=\"active\">1</a>
    <a href=\"#\" >2</a>
    <a href=\"#\">3</a>
    <a href=\"#\">4</a>
    <a href=\"#\">5</a>
    <a href=\"#\">6</a>
    <a href=\"#\">&raquo;</a>
</div></li></ul>
{% endblock %}

", "product/index.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\product\\index.html.twig");
    }
}
