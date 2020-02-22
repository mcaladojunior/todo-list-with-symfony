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

/* things/create.html.twig */
class __TwigTemplate_2af983e7dc3111c35e01c40c4a6f8162658db3224558af16c8da13cea2dfadd9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "things/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "things/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Create Thing | TO-DO LIST";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"py-2\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10\">
                    <form>
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\">Email address</label>
                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                   aria-describedby=\"emailHelp\">
                            <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"exampleInputPassword1\">Password</label>
                            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                        </div>
                        <div class=\"form-group form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                            <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "things/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Thing | TO-DO LIST{% endblock %}

{% block body %}
    <section class=\"py-2\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10\">
                    <form>
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\">Email address</label>
                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                   aria-describedby=\"emailHelp\">
                            <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"exampleInputPassword1\">Password</label>
                            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                        </div>
                        <div class=\"form-group form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                            <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "things/create.html.twig", "/var/www/templates/things/create.html.twig");
    }
}
