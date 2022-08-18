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

/* category/view.html.twig */
class __TwigTemplate_b62fb2a12bbc4e60e53f2f92ff06b035a09574f90ebcbdf12c730471098e06ae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/view.html.twig", 1);
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
    <div class=\"container mt-5\">

<a>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 6, $this->source); })()), "catname", [], "any", false, false, false, 6), "html", null, true);
        echo "</a>



";
        // line 13
        echo "
";
        // line 17
        echo "
";
        // line 21
        echo "
        <table class=\"table table-dark\"> <tbody><tr>
        <div class=\"item item-1 test\">";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "<td class=\"\"><a class=\"rounded\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->source, $context["product"], "productImage", [], "any", false, false, false, 24))), "html", null, true);
            echo "\" height=\"200px\" width=\"300px\">
                    <br><a>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
               <br> <span style=\"font-size: 20px\"><strong style=\"color: red\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26), "html", null, true);
            echo "</strong></span></a>
               </td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
            </tr></tbody></table>
    </div>
    <style>
        .test {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            overflow-wrap: break-word;
            hyphens: auto;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  106 => 26,  102 => 25,  98 => 24,  90 => 23,  86 => 21,  83 => 17,  80 => 13,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <div class=\"container mt-5\">

<a>{{ categories.catname }}</a>



{#    {% for product in products %}#}
{#        <ul class=\"list-group list-group-horizontal\">#}
{#        <div id=\"menu\">#}

{#                <li class=\"list-group-item\"><a><a href=\"{{path('product_details',{'id':product.id})}} \" class='btn'><img src=\"{{ asset('uploads/image/' ~ product.productImage)}}\" height=\"200px\" width=\"300px\"></a></a>#}
{#                    <hr><a>{{ product.name }}</a>#}
{#                    <hr><span style=\"font-size: 20px\"><strong style=\"color: red\">{{ product.price }}</strong></span></li>#}

{#        </div>#}
{#        </ul>#}
{#    {% endfor %}#}

        <table class=\"table table-dark\"> <tbody><tr>
        <div class=\"item item-1 test\">{% for product in products %}<td class=\"\"><a class=\"rounded\" href=\"{{path('product_details',{'id':product.id})}}\">
                    <img src=\"{{ asset('uploads/image/' ~ product.productImage)}}\" height=\"200px\" width=\"300px\">
                    <br><a>{{ product.name }}</a>
               <br> <span style=\"font-size: 20px\"><strong style=\"color: red\">{{ product.price }}</strong></span></a>
               </td>{% endfor %}</div>
            </tr></tbody></table>
    </div>
    <style>
        .test {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            overflow-wrap: break-word;
            hyphens: auto;
        }
    </style>
{% endblock %}", "category/view.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\category\\view.html.twig");
    }
}
