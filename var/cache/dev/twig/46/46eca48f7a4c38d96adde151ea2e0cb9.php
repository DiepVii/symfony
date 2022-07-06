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

/* admin/type/edit_type.html.twig */
class __TwigTemplate_f04d1a77968a8f6cb57f625944078dfe extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type/edit_type.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/type/edit_type.html.twig", 1);
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
        echo "        <h3 class=\"text-center text-danger\">Edit Type</h3>
        <form method=\"post\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_type", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\" class=\"form-css\">
             ";
        // line 6
        echo "            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Type Name</label>
                <input type=\"text\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 8, $this->source); })()), "getTypename", [], "method", false, false, false, 8), "html", null, true);
        echo "\" name=\"type_name\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
                    placeholder=\"Enter Type Name\" required>
                ";
        // line 13
        echo "            </div>
    
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Description</label>
                <textarea id=\"summary-ckeditor2\" class=\"form-control\" name=\"type_desc\" cols=\"30\" rows=\"5\" required>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 17, $this->source); })()), "getTypedescription", [], "method", false, false, false, 17), "html", null, true);
        echo "</textarea>
            </div>
            ";
        // line 22
        echo "    
            <button type=\"submit\" class=\"btn btn-primary\">Edit Type</button>
        </form>
    
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/type/edit_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  81 => 17,  75 => 13,  70 => 8,  66 => 6,  62 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('admin/layout.html.twig')  %}
    {% block body %}
        <h3 class=\"text-center text-danger\">Edit Type</h3>
        <form method=\"post\" action=\"{{path('update_type',{'id':type.id})}}\" class=\"form-css\">
             {# {{csrf}}  #}
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Type Name</label>
                <input type=\"text\" value=\"{{ type.getTypename() }}\" name=\"type_name\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
                    placeholder=\"Enter Type Name\" required>
                {# @if (\$errors->has('type_name'))
                    <p class=\"text-danger\">{{ \$errors->first('type_name') }}</p>
                @endif #}
            </div>
    
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Description</label>
                <textarea id=\"summary-ckeditor2\" class=\"form-control\" name=\"type_desc\" cols=\"30\" rows=\"5\" required>{{ type.getTypedescription() }}</textarea>
            </div>
            {# @if (\$errors->has('type_desc'))
                <p class=\"text-danger\">{{ \$errors->first('type_desc') }}</p>
            @endif #}
    
            <button type=\"submit\" class=\"btn btn-primary\">Edit Type</button>
        </form>
    
    {% endblock %}

    ", "admin/type/edit_type.html.twig", "D:\\Symfony\\symfonytest\\templates\\admin\\type\\edit_type.html.twig");
    }
}
