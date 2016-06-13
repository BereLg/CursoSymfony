<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5d1854de433c63d81737eed1f6fe209817d40d742d3e6704fe75c0b180127a2b extends Twig_Template
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
        $__internal_91302b0030112b6960fb3440453342b2b13b7bb4b280161265bb9da00a3b7afe = $this->env->getExtension("native_profiler");
        $__internal_91302b0030112b6960fb3440453342b2b13b7bb4b280161265bb9da00a3b7afe->enter($__internal_91302b0030112b6960fb3440453342b2b13b7bb4b280161265bb9da00a3b7afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_91302b0030112b6960fb3440453342b2b13b7bb4b280161265bb9da00a3b7afe->leave($__internal_91302b0030112b6960fb3440453342b2b13b7bb4b280161265bb9da00a3b7afe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
