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

/* admin/type/add_type.html.twig */
class __TwigTemplate_bed692a12a4eae01b7d92ee3649ad706 extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type/add_type.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/type/add_type.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h3 class=\"text-center text-danger\">Add Type</h3>
    <form method=\"post\" action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_type");
        echo "\" class=\"form-css\">
        ";
        // line 6
        echo "        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Type Name</label>
            <input type=\"text\" name=\"type_name\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
                placeholder=\"Enter Type Name\" required>
            ";
        // line 13
        echo "        </div>

        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Description</label>
            <textarea id=\"summary-ckeditor2\" class=\"form-control\" name=\"type_desc\" cols=\"30\" rows=\"5\" required></textarea>
        </div>
        ";
        // line 22
        echo "
        <button type=\"submit\" class=\"btn btn-primary\">Add Type</button>
    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/type/add_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  72 => 13,  66 => 6,  62 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('admin/layout.html.twig')  %}
{% block body %}
    <h3 class=\"text-center text-danger\">Add Type</h3>
    <form method=\"post\" action=\"{{path('create_type')}}\" class=\"form-css\">
        {# {{csrf}} #}
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Type Name</label>
            <input type=\"text\" name=\"type_name\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
                placeholder=\"Enter Type Name\" required>
            {# @if (\$errors->has('type_name'))
                <p class=\"text-danger\">{{ \$errors->first('type_name') }}</p>
            @endif #}
        </div>

        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Description</label>
            <textarea id=\"summary-ckeditor2\" class=\"form-control\" name=\"type_desc\" cols=\"30\" rows=\"5\" required></textarea>
        </div>
        {# @if (\$errors->has('type_desc'))
            <p class=\"text-danger\">{{ \$errors->first('type_desc') }}</p>
        @endif #}

        <button type=\"submit\" class=\"btn btn-primary\">Add Type</button>
    </form>

{% endblock %}", "admin/type/add_type.html.twig", "D:\\Symfony\\symfonytest\\templates\\admin\\type\\add_type.html.twig");
    }
}
