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

/* product/create.html.twig */
class __TwigTemplate_f37464b1600f223873135907ed836e92a9ce4bf2a7466454d72c4c559d59b937 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/create.html.twig", 1);
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
        echo "    <div class=\"container mt-5\">

        <ul class=\"list-group\">
            <li class=\"list-group-item\" style=\"background-color: #505050\"><h2 style=\"color: white; text-align: center\">Create Product</h2></li>
            <li class=\"list-group-item\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        <label for=\"category\"><strong>Category</strong></label>
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "category", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 15
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"category\"><strong>Product Name:</strong></label>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Product name"]]);
        // line 24
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"category\"><strong>Price:</strong></label>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "price", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Price"]]);
        // line 33
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"category\"><strong>Quantity:</strong></label>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "quantity", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Quantity"]]);
        // line 42
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"description\"><strong>Description:</strong></label>
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        // line 51
        echo "
    </div>

    <div class=\"form-group\">
        <label for=\"due_date\"><strong>Date</strong></label>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "date", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 60
        echo "
    </div><hr>
    <div class=\"form-group\">
        <label for=\"due_date\">Image</label>
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "productImage", [], "any", false, false, false, 64), 'widget', []);
        // line 66
        echo "
    </div>
    <input type=\"submit\" name=\"create_product\" value=\"Success\" class=\"btn btn-success btn btn-primary\" style=\"float: right\"/>
    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
    </li>
    </ul></div> <br><br><br><br><br><br><br><br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 69,  132 => 66,  130 => 64,  124 => 60,  122 => 56,  115 => 51,  113 => 46,  107 => 42,  105 => 37,  99 => 33,  97 => 28,  91 => 24,  89 => 19,  83 => 15,  81 => 11,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container mt-5\">

        <ul class=\"list-group\">
            <li class=\"list-group-item\" style=\"background-color: #505050\"><h2 style=\"color: white; text-align: center\">Create Product</h2></li>
            <li class=\"list-group-item\">
    {{ form_start(form) }}
    <div class=\"form-group\">
        <label for=\"category\"><strong>Category</strong></label>
        {{ form_widget(form.category,{
            'attr':{
                'class':'form-control'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"category\"><strong>Product Name:</strong></label>
        {{ form_widget(form.name,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Product name'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"category\"><strong>Price:</strong></label>
        {{ form_widget(form.price,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Price'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"category\"><strong>Quantity:</strong></label>
        {{ form_widget(form.quantity,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Quantity'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"description\"><strong>Description:</strong></label>
        {{ form_widget(form.description,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Description'
            }
        }) }}
    </div>

    <div class=\"form-group\">
        <label for=\"due_date\"><strong>Date</strong></label>
        {{ form_widget(form.date,{
            'attr':{
                'class':'form-control'
            }
        }) }}
    </div><hr>
    <div class=\"form-group\">
        <label for=\"due_date\">Image</label>
        {{ form_widget(form.productImage,{

        }) }}
    </div>
    <input type=\"submit\" name=\"create_product\" value=\"Success\" class=\"btn btn-success btn btn-primary\" style=\"float: right\"/>
    {{ form_end(form) }}
    </li>
    </ul></div> <br><br><br><br><br><br><br><br><br>
{% endblock %}
", "product/create.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\product\\create.html.twig");
    }
}
