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

/* admin/type/all_type.html.twig */
class __TwigTemplate_16713428cbb6eb7ea5e4065a1d93eacc extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type/all_type.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/type/all_type.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello TypeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <span class=\"notify text-center \"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        <h3 class=\"text-center text-danger\">List Type</h3>
        <table class=\"text-center table table-hover\">
            <thead>
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Type Name</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Edit</th>
                </tr>
            </thead>
            <tbody>
               
             
                   
                 ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 24
            echo "          
                  
                    <tr>
                        
                        <td> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                 
                        <td>   ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "typeName", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td width=\"400\"> ";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["type"], "typeDescription", [], "any", false, false, false, 31);
            echo "</td>
             
                        <td>
                            <a style=\"font-size: 30px;\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_type", ["id" => twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><i
                                    class=\"fas fa-edit\"></i></a>
                            <a onclick=\"return confirm('Deleting this type will delete equipments of this type?');\"
                                style=\"color:red; font-size: 30px;\"
                                href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_type", ["id" => twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i
                                    class=\"fas fa-trash\"></i></a>
                        </td> 
    
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    
            </tbody>
        </table>
        ";
        // line 59
        echo "
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/type/all_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 59,  147 => 44,  135 => 38,  128 => 34,  122 => 31,  118 => 30,  113 => 28,  107 => 24,  103 => 23,  87 => 9,  78 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Hello TypeController!{% endblock %}

{% block body %}
    {% for message in app.flashes('message')  %}
        <span class=\"notify text-center \"> {{message}} </span>
    {% endfor %}
        <h3 class=\"text-center text-danger\">List Type</h3>
        <table class=\"text-center table table-hover\">
            <thead>
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Type Name</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Edit</th>
                </tr>
            </thead>
            <tbody>
               
             
                   
                 {% for type in data %}
          
                  
                    <tr>
                        
                        <td> {{type.id}}</td>
                 
                        <td>   {{type.typeName}}</td>
                        <td width=\"400\"> {{ type.typeDescription|raw}}</td>
             
                        <td>
                            <a style=\"font-size: 30px;\" href=\"{{path('edit_type',{'id':type.id})}}\"><i
                                    class=\"fas fa-edit\"></i></a>
                            <a onclick=\"return confirm('Deleting this type will delete equipments of this type?');\"
                                style=\"color:red; font-size: 30px;\"
                                href=\"{{path('delete_type',{'id':type.id})}}\"><i
                                    class=\"fas fa-trash\"></i></a>
                        </td> 
    
                    </tr>
                {% endfor %}
    
            </tbody>
        </table>
        {# <script type=\"text/javascript\">
            var route = \"{{ url('autocomplete-search') }}\";
            \$('#search2').typeahead({
                source: function(query, process) {
                    return \$.get(route, {
                        query: query
                    }, function(data) {
                        return process(data);
                    });
                }
            });
        </script> #}

    
{% endblock %}









", "admin/type/all_type.html.twig", "D:\\Symfony\\symfonytest\\templates\\admin\\type\\all_type.html.twig");
    }
}
