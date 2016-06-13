<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_db575153a699d3ed1cbc5723294815068488b11be1caace8e8a788663093d576 extends Twig_Template
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
        $__internal_6fb695692ffdb69d15049561ac37fb0c27a9593cd216b25f1c21feaf7790a6d7 = $this->env->getExtension("native_profiler");
        $__internal_6fb695692ffdb69d15049561ac37fb0c27a9593cd216b25f1c21feaf7790a6d7->enter($__internal_6fb695692ffdb69d15049561ac37fb0c27a9593cd216b25f1c21feaf7790a6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6fb695692ffdb69d15049561ac37fb0c27a9593cd216b25f1c21feaf7790a6d7->leave($__internal_6fb695692ffdb69d15049561ac37fb0c27a9593cd216b25f1c21feaf7790a6d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
