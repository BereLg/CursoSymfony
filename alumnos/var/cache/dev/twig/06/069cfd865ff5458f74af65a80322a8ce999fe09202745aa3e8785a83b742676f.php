<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1d40eb8d7bba647a98a725e926eed6dfaf0b17330c9b6fd5ca59b03787fa7546 extends Twig_Template
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
        $__internal_fe83b9b7cff34d2bee7c779b89c77b5746be85e079706f11d43ec3d4b1449b94 = $this->env->getExtension("native_profiler");
        $__internal_fe83b9b7cff34d2bee7c779b89c77b5746be85e079706f11d43ec3d4b1449b94->enter($__internal_fe83b9b7cff34d2bee7c779b89c77b5746be85e079706f11d43ec3d4b1449b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_fe83b9b7cff34d2bee7c779b89c77b5746be85e079706f11d43ec3d4b1449b94->leave($__internal_fe83b9b7cff34d2bee7c779b89c77b5746be85e079706f11d43ec3d4b1449b94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
