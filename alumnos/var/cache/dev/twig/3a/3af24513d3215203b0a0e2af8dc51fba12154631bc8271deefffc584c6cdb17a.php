<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_235473b8ec79dc8f14b3878728c96cd7f6830821fd81600633b72f8baa0e8d28 extends Twig_Template
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
        $__internal_0424aa3a074773f4a2e944356e9c681fdb4e01b4bf211fe8d043224859f9aa6d = $this->env->getExtension("native_profiler");
        $__internal_0424aa3a074773f4a2e944356e9c681fdb4e01b4bf211fe8d043224859f9aa6d->enter($__internal_0424aa3a074773f4a2e944356e9c681fdb4e01b4bf211fe8d043224859f9aa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0424aa3a074773f4a2e944356e9c681fdb4e01b4bf211fe8d043224859f9aa6d->leave($__internal_0424aa3a074773f4a2e944356e9c681fdb4e01b4bf211fe8d043224859f9aa6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
