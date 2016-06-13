<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_630c0fd105add93a88eea5b9fd18da90ab9da8dc1fcc6d294236e50947da6022 extends Twig_Template
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
        $__internal_4f2cc96e72ca6ca4a4bb02253eff7ae010f7e9ce950cbe4de118c3ebd5456846 = $this->env->getExtension("native_profiler");
        $__internal_4f2cc96e72ca6ca4a4bb02253eff7ae010f7e9ce950cbe4de118c3ebd5456846->enter($__internal_4f2cc96e72ca6ca4a4bb02253eff7ae010f7e9ce950cbe4de118c3ebd5456846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4f2cc96e72ca6ca4a4bb02253eff7ae010f7e9ce950cbe4de118c3ebd5456846->leave($__internal_4f2cc96e72ca6ca4a4bb02253eff7ae010f7e9ce950cbe4de118c3ebd5456846_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
