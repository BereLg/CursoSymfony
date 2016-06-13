<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1b4e5b1d84f891d84ef174ff50a7ddfb265fd842e0879fb5bc454a31505f34fa extends Twig_Template
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
        $__internal_228780399b208ca6054e8216956aae4b6e53a3e0ae0be2a71e7e2dd13dfe883c = $this->env->getExtension("native_profiler");
        $__internal_228780399b208ca6054e8216956aae4b6e53a3e0ae0be2a71e7e2dd13dfe883c->enter($__internal_228780399b208ca6054e8216956aae4b6e53a3e0ae0be2a71e7e2dd13dfe883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_228780399b208ca6054e8216956aae4b6e53a3e0ae0be2a71e7e2dd13dfe883c->leave($__internal_228780399b208ca6054e8216956aae4b6e53a3e0ae0be2a71e7e2dd13dfe883c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
