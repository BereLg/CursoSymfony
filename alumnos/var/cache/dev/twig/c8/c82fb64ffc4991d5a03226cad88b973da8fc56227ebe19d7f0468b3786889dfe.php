<?php

/* default/reportes.html.twig */
class __TwigTemplate_1863eeee79595e91aadf131f7085b46aa0750cb9ad68d03046d4ed271efb6f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/reportes.html.twig", 1);
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
        $__internal_6bddea0f4ef6834e69f27d6d390e23a4090623f9a4ec8c2d3e147ca75410521e = $this->env->getExtension("native_profiler");
        $__internal_6bddea0f4ef6834e69f27d6d390e23a4090623f9a4ec8c2d3e147ca75410521e->enter($__internal_6bddea0f4ef6834e69f27d6d390e23a4090623f9a4ec8c2d3e147ca75410521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/reportes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bddea0f4ef6834e69f27d6d390e23a4090623f9a4ec8c2d3e147ca75410521e->leave($__internal_6bddea0f4ef6834e69f27d6d390e23a4090623f9a4ec8c2d3e147ca75410521e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_344711b2753f60469bc9315fa5bd68aeeba0c18af01825e967a668d8c35a55f6 = $this->env->getExtension("native_profiler");
        $__internal_344711b2753f60469bc9315fa5bd68aeeba0c18af01825e967a668d8c35a55f6->enter($__internal_344711b2753f60469bc9315fa5bd68aeeba0c18af01825e967a668d8c35a55f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reportes";
        
        $__internal_344711b2753f60469bc9315fa5bd68aeeba0c18af01825e967a668d8c35a55f6->leave($__internal_344711b2753f60469bc9315fa5bd68aeeba0c18af01825e967a668d8c35a55f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39f2982705e03b98cfd818d2b0b9a39e31ef977c164ca6ae4f3bf80016a38be4 = $this->env->getExtension("native_profiler");
        $__internal_39f2982705e03b98cfd818d2b0b9a39e31ef977c164ca6ae4f3bf80016a38be4->enter($__internal_39f2982705e03b98cfd818d2b0b9a39e31ef977c164ca6ae4f3bf80016a38be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39f2982705e03b98cfd818d2b0b9a39e31ef977c164ca6ae4f3bf80016a38be4->leave($__internal_39f2982705e03b98cfd818d2b0b9a39e31ef977c164ca6ae4f3bf80016a38be4_prof);

    }

    public function getTemplateName()
    {
        return "default/reportes.html.twig";
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
