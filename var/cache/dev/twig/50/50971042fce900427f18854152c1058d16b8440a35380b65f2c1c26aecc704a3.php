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

/* footer.html.twig */
class __TwigTemplate_974330136035639e6d7a5941137b1417efff15555fb760897bddfff7de49130e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

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
        echo "
    <div class=\"container mt-3\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "session", [], "any", false, false, false, 4), "flashBag", [], "any", false, false, false, 4), "get", [0 => "notice"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 5
            echo "            <div class=\"alert alert-success\">
                <strong>";
            // line 6
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "!!!</strong> A product has been added to the list.!!!
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", [], "any", false, false, false, 9), "flashBag", [], "any", false, false, false, 9), "get", [0 => "error"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            echo "            <div class=\"alert alert-danger\">
                <strong>";
            // line 11
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "!!!</strong> A product has been removed from the list.!!!
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>

    <footer id=\"footer\" class=\"bg-dark text-white py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-12\">
                    <h4 class=\"font-rubik font-size-20\">VON</h4>
                    <p class=\"font-size-14 font-rale text-white-50\">Được tạo ra bởi 1 cá nhân để sử dụng trong vấn để thử nghiệm code cho mục đích học tập.</p>
                </div>
                <div class=\"col-lg-4 col-12\">
                    <h4 class=\"font-rubik font-size-20\">Newslatter</h4>
                    <form class=\"form-row\">
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Email *\">
                        </div>
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-primary mb-2\">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-2 col-12\">
                    <h4 class=\"font-rubik font-size-20\">Information</h4>
                    <div class=\"d-flex flex-column flex-wrap\">
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">About Us</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Delivery Information</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Privacy Policy</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Terms & Conditions</a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-12\">
                    <h4 class=\"font-rubik font-size-20\">Account</h4>
                    <div class=\"d-flex flex-column flex-wrap\">
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">My Account</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Order History</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Wish List</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Newslatters</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class=\"copyright text-center bg-dark text-white py-2\">
        <p class=\"font-rale font-size-14\">&copy; Copyrights 2022. Desing By <a href=\"#\" class=\"color-second\">VON</a></p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 13,  91 => 11,  88 => 10,  83 => 9,  74 => 6,  71 => 5,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

    <div class=\"container mt-3\">
        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-success\">
                <strong>{{ flash_message }}!!!</strong> A product has been added to the list.!!!
            </div>
        {% endfor %}
        {% for flash_message in app.session.flashBag.get('error') %}
            <div class=\"alert alert-danger\">
                <strong>{{ flash_message }}!!!</strong> A product has been removed from the list.!!!
            </div>
        {% endfor %}</div>

    <footer id=\"footer\" class=\"bg-dark text-white py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-12\">
                    <h4 class=\"font-rubik font-size-20\">VON</h4>
                    <p class=\"font-size-14 font-rale text-white-50\">Được tạo ra bởi 1 cá nhân để sử dụng trong vấn để thử nghiệm code cho mục đích học tập.</p>
                </div>
                <div class=\"col-lg-4 col-12\">
                    <h4 class=\"font-rubik font-size-20\">Newslatter</h4>
                    <form class=\"form-row\">
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Email *\">
                        </div>
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-primary mb-2\">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-2 col-12\">
                    <h4 class=\"font-rubik font-size-20\">Information</h4>
                    <div class=\"d-flex flex-column flex-wrap\">
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">About Us</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Delivery Information</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Privacy Policy</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Terms & Conditions</a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-12\">
                    <h4 class=\"font-rubik font-size-20\">Account</h4>
                    <div class=\"d-flex flex-column flex-wrap\">
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">My Account</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Order History</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Wish List</a>
                        <a href=\"#\" class=\"font-rale font-size-14 text-white-50 pb-1\">Newslatters</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class=\"copyright text-center bg-dark text-white py-2\">
        <p class=\"font-rale font-size-14\">&copy; Copyrights 2022. Desing By <a href=\"#\" class=\"color-second\">VON</a></p>
    </div>
{% endblock %}", "footer.html.twig", "C:\\Users\\Kair\\Assignment\\templates\\footer.html.twig");
    }
}
