<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bddd8fdc23398ef125de9e25b607375925a2b37db6caeece48df9ff539dc45a8 extends Twig_Template
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
        $__internal_c7c28fca780ccf8989946a869d647788d60933607a9b7a4c6c3b4d03688ad867 = $this->env->getExtension("native_profiler");
        $__internal_c7c28fca780ccf8989946a869d647788d60933607a9b7a4c6c3b4d03688ad867->enter($__internal_c7c28fca780ccf8989946a869d647788d60933607a9b7a4c6c3b4d03688ad867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c7c28fca780ccf8989946a869d647788d60933607a9b7a4c6c3b4d03688ad867->leave($__internal_c7c28fca780ccf8989946a869d647788d60933607a9b7a4c6c3b4d03688ad867_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
