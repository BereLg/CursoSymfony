<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_951762591c8f78b9e44395a90083edd473a9177603f82163497e89867b87ac85 extends Twig_Template
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
        $__internal_f0cd8997b9a5894c6843da074d6d249f887aaf17417e5f31e5a5f8ef472ceb97 = $this->env->getExtension("native_profiler");
        $__internal_f0cd8997b9a5894c6843da074d6d249f887aaf17417e5f31e5a5f8ef472ceb97->enter($__internal_f0cd8997b9a5894c6843da074d6d249f887aaf17417e5f31e5a5f8ef472ceb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f0cd8997b9a5894c6843da074d6d249f887aaf17417e5f31e5a5f8ef472ceb97->leave($__internal_f0cd8997b9a5894c6843da074d6d249f887aaf17417e5f31e5a5f8ef472ceb97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
