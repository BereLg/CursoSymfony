<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a14c3f17596d0fe4de39b8d418dfd9cd9888d5a193f70fdb01fe56638f23a2fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b3f694ef06dc040a291d3c785179f040fa115555a6080f08b2235779ff050e2 = $this->env->getExtension("native_profiler");
        $__internal_8b3f694ef06dc040a291d3c785179f040fa115555a6080f08b2235779ff050e2->enter($__internal_8b3f694ef06dc040a291d3c785179f040fa115555a6080f08b2235779ff050e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8b3f694ef06dc040a291d3c785179f040fa115555a6080f08b2235779ff050e2->leave($__internal_8b3f694ef06dc040a291d3c785179f040fa115555a6080f08b2235779ff050e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
