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

/* admin/category/list.html.twig */
class __TwigTemplate_db4b97f311e9b89a62b202a84c96c0e8a38b4d1a38f07dd3456cf3bc8300591b extends \Twig\Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/category/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Categories";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <table class=\"table table-hover\">
            <tr class=\"text-center\">
                <th>Id</th>
                <th>Title</th>
                <th>Parent</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "data", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "                ";
            $context["confirm"] = "return confirm(\"Are you sure you want to delete the category ?\");";
            // line 18
            echo "
                <tr class=\"text-center\">
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            ((twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "createdAt", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "updatedAt", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fas fa-edit\"></i></a>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" onclick=\"";
            echo twig_escape_filter($this->env, (isset($context["confirm"]) || array_key_exists("confirm", $context) ? $context["confirm"] : (function () { throw new RuntimeError('Variable "confirm" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i
                                    class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </table>
        ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()), "display", [], "method", false, false, false, 34), "html", null, true);
        echo "
        ";
        // line 36
        echo "
        <div class=\"button\">
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_add");
        echo "\" class=\"btn btn-primary btn-admin\">Add category</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 38,  157 => 36,  153 => 34,  150 => 33,  137 => 28,  132 => 26,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  107 => 18,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Categories{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <table class=\"table table-hover\">
            <tr class=\"text-center\">
                <th>Id</th>
                <th>Title</th>
                <th>Parent</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            {% for category in pagination.data %}
                {% set confirm = 'return confirm(\"Are you sure you want to delete the category ?\");' %}

                <tr class=\"text-center\">
                    <td>{{ category.id }}</td>
                    <td>{{ category.name }}</td>
                    <td>{{ category.parent ? category.parent.name : '' }}</td>
                    <td>{{ category.createdAt|date('Y-m-d') }}</td>
                    <td>{{ category.updatedAt|date('Y-m-d') }}</td>
                    <td>
                        <a href=\"{{ path('admin_category_edit',{'id':category.id}) }}\" class=\"btn btn-primary\"><i
                                    class=\"fas fa-edit\"></i></a>
                        <a href=\"{{ path('admin_category_delete',{'id':category.id}) }}\" onclick=\"{{ confirm }}\" class=\"btn btn-danger\"><i
                                    class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
            {% endfor %}
        </table>
        {{ pagination.display() }}
        {# include 'admin/partials/pagination.html.twig' with {'route':'admin_category_list'} #}

        <div class=\"button\">
            <a href=\"{{ path('admin_category_add') }}\" class=\"btn btn-primary btn-admin\">Add category</a>
        </div>
    </div>
{% endblock %}
", "admin/category/list.html.twig", "/Users/mpo/Documents/TEI/mysurvey/symfony/templates/admin/category/list.html.twig");
    }
}
