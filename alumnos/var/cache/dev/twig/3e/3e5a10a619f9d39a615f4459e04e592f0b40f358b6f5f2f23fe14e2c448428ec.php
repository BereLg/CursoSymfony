<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f4b90fcbf5ce7a75ad44fdf7b8bf5fa6b2ef656f024992f3073e24b40d39760f extends Twig_Template
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
        $__internal_1302e8f568b979f263fc700c0e4f4bce72efe73837de0c93605437bef4df66e6 = $this->env->getExtension("native_profiler");
        $__internal_1302e8f568b979f263fc700c0e4f4bce72efe73837de0c93605437bef4df66e6->enter($__internal_1302e8f568b979f263fc700c0e4f4bce72efe73837de0c93605437bef4df66e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1302e8f568b979f263fc700c0e4f4bce72efe73837de0c93605437bef4df66e6->leave($__internal_1302e8f568b979f263fc700c0e4f4bce72efe73837de0c93605437bef4df66e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
