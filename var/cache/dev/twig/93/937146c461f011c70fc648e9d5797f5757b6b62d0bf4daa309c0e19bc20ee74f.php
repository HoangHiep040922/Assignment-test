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
class __TwigTemplate_9b1a9f4c2e36ebeff5f77a8bf8f88448f58cc7f023b799030f02a123e70246d7 extends Template
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

    <div class=\"container\">
        <h1 class=\"mt-5 mb-6\" style=\"font-size: 60px; left: 60px\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 6, $this->source); })()), "catname", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "                <div class=\"col-md-4\" style=\"box-sizing: border-box; padding: 0; margin: 0;\">
                    <div class=\"card mb-4\" style=\"max-width: 400px;max-height: 320px; margin: 0 auto; padding: 0 0; width: 100%; height: 100%; position: relative;\">
                        <a class=\"rounded\" style=\"align-items: center\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">
                            <img height=\"200px\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->source, $context["product"], "productImage", [], "any", false, false, false, 12))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"card-img-top\"></a>
                        <div class=\"card-body\"><abbr>
                            <p class=\"card-title\" style=\"text-align: center\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</p></abbr>
                             <style>p{font-size: 20px; font-weight: 600}</style>

                            <div class=\"d-flex justify-content-between align-item-center\">

                                <span class=\"h5 mt-auto\" style=\"font-size: 20px;margin-right: auto;margin-left: auto;margin-top: auto;margin-bottom: auto; font-weight: 500; color: red\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19), "html", null, true);
            echo "đ</span>

                            </div><br><br>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>


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
        return array (  118 => 26,  105 => 19,  97 => 14,  90 => 12,  86 => 11,  82 => 9,  78 => 8,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}


    <div class=\"container\">
        <h1 class=\"mt-5 mb-6\" style=\"font-size: 60px; left: 60px\">{{ categories.catname }}</h1>
        <div class=\"row\">
            {% for product in products %}
                <div class=\"col-md-4\" style=\"box-sizing: border-box; padding: 0; margin: 0;\">
                    <div class=\"card mb-4\" style=\"max-width: 400px;max-height: 320px; margin: 0 auto; padding: 0 0; width: 100%; height: 100%; position: relative;\">
                        <a class=\"rounded\" style=\"align-items: center\" href=\"{{path('product_details',{'id':product.id})}}\">
                            <img height=\"200px\" src=\"{{ asset('uploads/image/' ~ product.productImage)}}\" alt=\"{{ product.name }}\" class=\"card-img-top\"></a>
                        <div class=\"card-body\"><abbr>
                            <p class=\"card-title\" style=\"text-align: center\">{{ product.name }}</p></abbr>
                             <style>p{font-size: 20px; font-weight: 600}</style>

                            <div class=\"d-flex justify-content-between align-item-center\">

                                <span class=\"h5 mt-auto\" style=\"font-size: 20px;margin-right: auto;margin-left: auto;margin-top: auto;margin-bottom: auto; font-weight: 500; color: red\">{{ product.price }}đ</span>

                            </div><br><br>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>


{% endblock %}", "category/view.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\category\\view.html.twig");
    }
}
