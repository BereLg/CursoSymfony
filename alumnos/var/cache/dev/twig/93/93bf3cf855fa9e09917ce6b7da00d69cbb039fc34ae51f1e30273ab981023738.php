<?php

/* :default:reportes.html.twig */
class __TwigTemplate_144c15ea4e0159531294502a7754899f6adebfd5d3e2fb6c49ce21cc9e3219c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:reportes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b6166db3a9ff4f8814327c6fd6fb14852bd59b6497d36d1d2deba37dfc3779 = $this->env->getExtension("native_profiler");
        $__internal_b1b6166db3a9ff4f8814327c6fd6fb14852bd59b6497d36d1d2deba37dfc3779->enter($__internal_b1b6166db3a9ff4f8814327c6fd6fb14852bd59b6497d36d1d2deba37dfc3779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:reportes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b6166db3a9ff4f8814327c6fd6fb14852bd59b6497d36d1d2deba37dfc3779->leave($__internal_b1b6166db3a9ff4f8814327c6fd6fb14852bd59b6497d36d1d2deba37dfc3779_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2ce4db4c2f7cb382c648923ae39128eab9654b7169917d922239490ab53a85a = $this->env->getExtension("native_profiler");
        $__internal_a2ce4db4c2f7cb382c648923ae39128eab9654b7169917d922239490ab53a85a->enter($__internal_a2ce4db4c2f7cb382c648923ae39128eab9654b7169917d922239490ab53a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reportes";
        
        $__internal_a2ce4db4c2f7cb382c648923ae39128eab9654b7169917d922239490ab53a85a->leave($__internal_a2ce4db4c2f7cb382c648923ae39128eab9654b7169917d922239490ab53a85a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43e7547fa552778669979d40ca1bcd6d98ac6710f0a5830ab329561fed1a61b1 = $this->env->getExtension("native_profiler");
        $__internal_43e7547fa552778669979d40ca1bcd6d98ac6710f0a5830ab329561fed1a61b1->enter($__internal_43e7547fa552778669979d40ca1bcd6d98ac6710f0a5830ab329561fed1a61b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h3>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h3>
\t<div>
\t\t<h4>Cantidad de alumnos y alumnas</h4>
\t\t<div id=\"cantAlumnos\" >
\t\t</div>
\t</div>
";
        
        $__internal_43e7547fa552778669979d40ca1bcd6d98ac6710f0a5830ab329561fed1a61b1->leave($__internal_43e7547fa552778669979d40ca1bcd6d98ac6710f0a5830ab329561fed1a61b1_prof);

    }

    public function getTemplateName()
    {
        return ":default:reportes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig'%}*/
/* {% block title %}Reportes{% endblock %}*/
/* {% block body %}*/
/* 	<h3>{{ block('title') }}</h3>*/
/* 	<div>*/
/* 		<h4>Cantidad de alumnos y alumnas</h4>*/
/* 		<div id="cantAlumnos" >*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
