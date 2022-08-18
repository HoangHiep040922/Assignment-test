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

/* category/details.html.twig */
class __TwigTemplate_9432298d43581fb14c4288947b09869279b29c89676e6946140372d25736671e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/details.html.twig", 1);
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
<br><br>
    <div class=\"container-fluid mt-3\">
        <div class=\"row\">
        <div class=\"col-sm-3\"><ul class=\"list-group\">
                <li class=\"list-group-item\">
    <div class=\"bs-example\" data-example-id=\"striped-table\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>

            </tr>
            </thead>
            <tbody><ul class=\"nav\">

            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "                <tr>
                    <th scope=\"row\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</th>
                        <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productByCat", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo " \" class='nav-link button button5' style=\"border:2px solid Gray;text-align: center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "catname", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></td>
                        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo " \" class='nav-link button button1' style=\"border:2px solid MediumSeaGreen;text-align: center\">Edit</a></td>
                       <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo " \"class='nav-link button button3' style=\"border:2px solid Red;text-align: center\">Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
            </tbody>

        </table>
        <table class=\"table table-striped\"><tbody><tr><td><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_details");
        echo "\" class='nav-link button button4' style=\"text-align: center\">All Category</a></td></tr></tbody></table>

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
                    <a href=\"/product/details/27\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/Den-45-min-640x640-1-62f6b77d4d265.png"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px;\"></a>
                </div>
                <div class=\"carousel-item\">
                    <a href=\"/product/details/22\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/460e29e243aec1cd04f26a86a7eb08ca-62f6b5076e38e.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                </div>
                <div class=\"carousel-item\">
                    <a href=\"/product/details/15\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/4602806.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                </div>
                <div class=\"carousel-item\">
                    <a href=\"/product/details/2\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/image-removebg-preview-12.png"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                </div>
                <div class=\"carousel-item\">
                    <a href=\"/product/details/21\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/tu-lanh-samsung-main-645-1020-png-62f6b45deb78f.webp"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                </div>
                <div class=\"carousel-item\">
                    <a href=\"/product/details/24\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/Tim-640x640-1-62f6b69fd7a32.png"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                </div>
                <div class=\"carousel-item\">
                    <a href=\"/product/details/31\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image/bg-header-m-1-62f6ba9dd182e.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100\" style=\"height: 500px\"></a>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"prev\">

            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"next\">

            </button>
        </div>

    </div></li>
            </ul></div>


        <div class=\"col-sm-9\">
                <div class=\"row\">
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 91
            echo "                        <div class=\"col-md-4\">
                            <div class=\"card mb-4\" style=\"max-width: 350px;max-height: 350px; margin: 0 auto; padding: 0 0; width: 100%; height: 100%; position: relative;\">
                                <a class=\"rounded\" style=\"align-items: center\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\">
                                    <img height=\"200px\" src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->source, $context["product"], "productImage", [], "any", false, false, false, 94))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 94), "html", null, true);
            echo "\" class=\"card-img-top\"></a>
                                <div class=\"card-body\"><abbr>
                                        <p class=\"card-title\" style=\"text-align: center\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96), "html", null, true);
            echo "</p></abbr>
                                    <style>p{font-size: 20px; font-weight: 600}</style>

                                    <div class=\"d-flex justify-content-between align-item-center\">

                                        <span class=\"h5 mt-auto\" style=\"font-size: 20px;margin-right: auto;margin-left: auto;margin-top: auto;margin-bottom: auto; font-weight: 500; color: red\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 101), "html", null, true);
            echo "đ</span>
                                    </div><br><br><br>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                </div>
            </div>
    </div></div>

    <style>
        .button {
             /* Green */
            border: none;

            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {

            color: black;
            border: 2px solid #28B463;
        }

        .button1:hover {
            background-color: #28B463;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        .button3 {

            color: black;
            border: 2px solid #CB4335;
        }

        .button3:hover {
            background-color: #CB4335;
            color: white;
        }

        .button4 {
            color: black;
            border: 0 solid #e7e7e7;
        }

        .button4:hover {background-color: #717D7E;
            color: white;}

        .button5 {

            color: black;
            border: 2px solid #555555;
        }

        .button5:hover {
            background-color: #555555;
            color: white;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 107,  231 => 101,  223 => 96,  216 => 94,  212 => 93,  208 => 91,  204 => 90,  182 => 71,  176 => 68,  170 => 65,  164 => 62,  158 => 59,  152 => 56,  146 => 53,  123 => 33,  117 => 29,  108 => 26,  104 => 25,  98 => 24,  94 => 23,  91 => 22,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<br><br>
    <div class=\"container-fluid mt-3\">
        <div class=\"row\">
        <div class=\"col-sm-3\"><ul class=\"list-group\">
                <li class=\"list-group-item\">
    <div class=\"bs-example\" data-example-id=\"striped-table\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>

            </tr>
            </thead>
            <tbody><ul class=\"nav\">

            {% for category in categories %}
                <tr>
                    <th scope=\"row\">{{ category.id }}</th>
                        <td><a href=\"{{path('productByCat',{'id':category.id})}} \" class='nav-link button button5' style=\"border:2px solid Gray;text-align: center\">{{ category.catname }}</a></td>
                        <td><a href=\"{{path('category_edit',{'id':category.id})}} \" class='nav-link button button1' style=\"border:2px solid MediumSeaGreen;text-align: center\">Edit</a></td>
                       <td><a href=\"{{ path('category_delete', {'id': category.id}) }} \"class='nav-link button button3' style=\"border:2px solid Red;text-align: center\">Delete</a></td>
                </tr>
            {% endfor %}
            </ul>
            </tbody>

        </table>
        <table class=\"table table-striped\"><tbody><tr><td><a href=\"{{path('category_details')}}\" class='nav-link button button4' style=\"text-align: center\">All Category</a></td></tr></tbody></table>

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
                    <a href=\"/product/details/27\"><img src=\"{{ asset('uploads/image/Den-45-min-640x640-1-62f6b77d4d265.png')}}\"  class=\"d-block w-100\" style=\"height: 500px;\"></a>
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
        </div>

    </div></li>
            </ul></div>


        <div class=\"col-sm-9\">
                <div class=\"row\">
                    {% for product in products %}
                        <div class=\"col-md-4\">
                            <div class=\"card mb-4\" style=\"max-width: 350px;max-height: 350px; margin: 0 auto; padding: 0 0; width: 100%; height: 100%; position: relative;\">
                                <a class=\"rounded\" style=\"align-items: center\" href=\"{{path('product_details',{'id':product.id})}}\">
                                    <img height=\"200px\" src=\"{{ asset('uploads/image/' ~ product.productImage)}}\" alt=\"{{ product.name }}\" class=\"card-img-top\"></a>
                                <div class=\"card-body\"><abbr>
                                        <p class=\"card-title\" style=\"text-align: center\">{{ product.name }}</p></abbr>
                                    <style>p{font-size: 20px; font-weight: 600}</style>

                                    <div class=\"d-flex justify-content-between align-item-center\">

                                        <span class=\"h5 mt-auto\" style=\"font-size: 20px;margin-right: auto;margin-left: auto;margin-top: auto;margin-bottom: auto; font-weight: 500; color: red\">{{ product.price }}đ</span>
                                    </div><br><br><br>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
    </div></div>

    <style>
        .button {
             /* Green */
            border: none;

            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {

            color: black;
            border: 2px solid #28B463;
        }

        .button1:hover {
            background-color: #28B463;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        .button3 {

            color: black;
            border: 2px solid #CB4335;
        }

        .button3:hover {
            background-color: #CB4335;
            color: white;
        }

        .button4 {
            color: black;
            border: 0 solid #e7e7e7;
        }

        .button4:hover {background-color: #717D7E;
            color: white;}

        .button5 {

            color: black;
            border: 2px solid #555555;
        }

        .button5:hover {
            background-color: #555555;
            color: white;
        }

    </style>
{% endblock %}
", "category/details.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\category\\details.html.twig");
    }
}
