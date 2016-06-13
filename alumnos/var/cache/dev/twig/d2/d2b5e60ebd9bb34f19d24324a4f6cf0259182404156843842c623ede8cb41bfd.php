<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c2996bcb1f76c4742d8d5fac37f16eb10ba109f2003bd70204b2bef1165a9047 extends Twig_Template
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
        $__internal_b3ebec03a9e79864d9066a3e84cdd458d59ac1493b4c99d0fc215534e8ae6003 = $this->env->getExtension("native_profiler");
        $__internal_b3ebec03a9e79864d9066a3e84cdd458d59ac1493b4c99d0fc215534e8ae6003->enter($__internal_b3ebec03a9e79864d9066a3e84cdd458d59ac1493b4c99d0fc215534e8ae6003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b3ebec03a9e79864d9066a3e84cdd458d59ac1493b4c99d0fc215534e8ae6003->leave($__internal_b3ebec03a9e79864d9066a3e84cdd458d59ac1493b4c99d0fc215534e8ae6003_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
