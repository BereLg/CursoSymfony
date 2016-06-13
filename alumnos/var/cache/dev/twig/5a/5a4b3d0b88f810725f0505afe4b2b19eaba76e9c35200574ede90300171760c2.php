<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e0e370703df7d276853d51745ddcca16f05eb9101e66553ca694a2334b6e675a extends Twig_Template
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
        $__internal_21074164ce85f3f646896860f29bbedcefd0eb9482817daa91df3d7344596d7a = $this->env->getExtension("native_profiler");
        $__internal_21074164ce85f3f646896860f29bbedcefd0eb9482817daa91df3d7344596d7a->enter($__internal_21074164ce85f3f646896860f29bbedcefd0eb9482817daa91df3d7344596d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_21074164ce85f3f646896860f29bbedcefd0eb9482817daa91df3d7344596d7a->leave($__internal_21074164ce85f3f646896860f29bbedcefd0eb9482817daa91df3d7344596d7a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
